using Microsoft.EntityFrameworkCore;
using RailTrackingBackend.Models;
using System.Collections.Generic;
using Microsoft.EntityFrameworkCore.ChangeTracking;

namespace RailTrackingBackend.Data
{
    public class ApplicationDbContext : DbContext
    {
        public ApplicationDbContext(DbContextOptions<ApplicationDbContext> options) : base(options)
        {
        }

        public DbSet<Station> Stations { get; set; }
        public DbSet<Train> Trains { get; set; }
        public DbSet<Stamformation> Stamformations { get; set; }

        protected override void OnModelCreating(ModelBuilder modelBuilder)
        {
            modelBuilder.Entity<Station>().HasKey(s => s.StationCode);
            modelBuilder.Entity<Station>().Property(s => s.StationCode).HasMaxLength(10);
            modelBuilder.Entity<Station>().Property(s => s.StationName).HasMaxLength(100);

            modelBuilder.Entity<Train>().HasKey(t => t.TrainNumber);
            modelBuilder.Entity<Train>().Property(t => t.TrainNumber).HasMaxLength(20);
            modelBuilder.Entity<Train>().Property(t => t.TrainName).HasMaxLength(100);

            var routeComparer = new ValueComparer<List<string>>(
                (c1, c2) => c1.SequenceEqual(c2),
                c => c.Aggregate(0, (a, v) => HashCode.Combine(a, v.GetHashCode())),
                c => c.ToList());

            modelBuilder.Entity<Train>()
                .Property(t => t.Route)
                .HasConversion(
                    v => string.Join(',', v),
                    v => v.Split(',', StringSplitOptions.RemoveEmptyEntries).ToList())
                .Metadata.SetValueComparer(routeComparer);

            var carriageOrderComparer = new ValueComparer<List<string>>(
                (c1, c2) => c1.SequenceEqual(c2),
                c => c.Aggregate(0, (a, v) => HashCode.Combine(a, v.GetHashCode())),
                c => c.ToList());

            modelBuilder.Entity<Stamformation>().HasKey(sf => sf.StamformationId);
            modelBuilder.Entity<Stamformation>().Property(sf => sf.TrainNumber).HasMaxLength(20);
            modelBuilder.Entity<Stamformation>().Property(sf => sf.CarriageCode).HasMaxLength(20);

            modelBuilder.Entity<Stamformation>()
                .Property(sf => sf.CarriageOrder)
                .HasConversion(
                    v => string.Join(',', v),
                    v => v.Split(',', StringSplitOptions.RemoveEmptyEntries).ToList())
                .Metadata.SetValueComparer(carriageOrderComparer);

            modelBuilder.Entity<Stamformation>()
                .HasOne(sf => sf.Train)
                .WithMany()
                .HasForeignKey(sf => sf.TrainNumber);
        }
    }
}
