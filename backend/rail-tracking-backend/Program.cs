using RailTrackingBackend.Services;

var builder = WebApplication.CreateBuilder(args);

// Tambahkan layanan ke container.
builder.Services.AddControllers();

// Konfigurasi CORS
builder.Services.AddCors(options =>
{
    options.AddPolicy("AllowAll",
        builder =>
        {
            builder.AllowAnyOrigin()
                   .AllowAnyMethod()
                   .AllowAnyHeader();
        });
});

// Registrasi TrainService
builder.Services.AddTransient<TrainService>();

var app = builder.Build();

// Konfigurasi middleware HTTP request pipeline.
if (app.Environment.IsDevelopment())
{
    app.UseDeveloperExceptionPage();
}
else
{
    app.UseExceptionHandler("/Home/Error");
    app.UseHsts();
}

app.UseHttpsRedirection();
app.UseStaticFiles();

app.UseRouting();

// Aktifkan middleware CORS
app.UseCors("AllowAll");

app.UseAuthorization();

app.MapControllers();

app.Run();
