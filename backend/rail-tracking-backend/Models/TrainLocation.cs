namespace RailTrackingBackend.Models
{
    public class TrainLocation
    {
        public string TrainId { get; set; } = string.Empty; // Inisialisasi dengan nilai default
        public double Latitude { get; set; }
        public double Longitude { get; set; }
    }
}
