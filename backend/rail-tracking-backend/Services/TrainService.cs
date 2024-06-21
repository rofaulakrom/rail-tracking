using RailTrackingBackend.Models;

namespace RailTrackingBackend.Services
{
    public class TrainService
    {
        public async Task<TrainLocation> GetTrainLocation()
        {
            // Implementasi logika untuk mendapatkan data lokasi kereta
            await Task.CompletedTask;
            return new TrainLocation
            {
                Latitude = -6.1751,
                Longitude = 106.0,
                TrainId = "KA123"
            };
        }
    }
}
