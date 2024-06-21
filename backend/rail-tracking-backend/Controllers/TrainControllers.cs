using Microsoft.AspNetCore.Mvc;
using RailTrackingBackend.Models;
using RailTrackingBackend.Services;

namespace RailTrackingBackend.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class TrainController : ControllerBase
    {
        private readonly TrainService _trainService;

        public TrainController(TrainService trainService)
        {
            _trainService = trainService;
        }

        [HttpGet("location")]
        public async Task<IActionResult> GetTrainLocation()
        {
            var location = await _trainService.GetTrainLocation();
            return Ok(location);
        }
    }
}
