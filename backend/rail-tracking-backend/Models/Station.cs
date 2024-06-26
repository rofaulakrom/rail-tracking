using System.ComponentModel.DataAnnotations;

namespace RailTrackingBackend.Models
{
    public class Station
    {
        [Key]
        [MaxLength(10)] // Tentukan panjang maksimal
        public string StationCode { get; set; } = string.Empty;

        [MaxLength(100)] // Tentukan panjang maksimal
        public string StationName { get; set; } = string.Empty;

        public double Latitude { get; set; }
        public double Longitude { get; set; }
    }
}
