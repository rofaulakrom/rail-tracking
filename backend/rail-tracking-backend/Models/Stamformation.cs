using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.ComponentModel.DataAnnotations.Schema;

namespace RailTrackingBackend.Models
{
    public class Stamformation
    {
        [Key]
        public int StamformationId { get; set; }

        [MaxLength(20)] // Tentukan panjang maksimal
        public string TrainNumber { get; set; } = string.Empty;

        [MaxLength(20)] // Tentukan panjang maksimal
        public string CarriageCode { get; set; } = string.Empty;

        public List<string> CarriageOrder { get; set; } = new List<string>();

        [ForeignKey("TrainNumber")]
        public Train Train { get; set; } = new Train();
    }
}
