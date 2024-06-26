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
            base.OnModelCreating(modelBuilder);
            // Customize the ASP.NET Identity model and override the defaults if needed.
            // For example, you can rename the ASP.NET Identity table names and more.
            // Add your customizations after calling base.OnModelCreating(builder);
        }
    }

    public class Station
    {
        // Station properties
    }

    public class Train
    {
        // Train properties
    }

    public class Stamformation
    {
        // Stamformation properties
    }
}
