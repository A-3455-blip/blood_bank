<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Locate Donors</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5 text-center">
    <h2>Find Donors Near You</h2>
    <p>Click the button below to detect your location and search donors nearby.</p>
    <button onclick="getLocation()" class="btn btn-danger">Detect Location</button>
    <p id="demo" class="mt-3"></p>
</div>

<script>
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        document.getElementById("demo").innerHTML = "Geolocation is not supported.";
    }
}

function showPosition(position) {
    let lat = position.coords.latitude;
    let lon = position.coords.longitude;
    document.getElementById("demo").innerHTML = 
    "Latitude: " + lat + "<br>Longitude: " + lon + 
    `<br><a href='https://www.google.com/maps/search/blood+donors/@${lat},${lon},15z' target='_blank'>Find Nearby Donors</a>`;
}
</script>

</body>
</html>