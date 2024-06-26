using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;

namespace RailTrackingBackend.Models
{
    public class Train
    {
        [Key]
        [MaxLength(20)] // Tentukan panjang maksimal
        public string TrainNumber { get; set; } = string.Empty;

        [MaxLength(100)] // Tentukan panjang maksimal
        public string TrainName { get; set; } = string.Empty;

        public List<string> Route { get; set; } = new List<string>();
    }
}
