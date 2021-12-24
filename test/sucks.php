<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Peta</title>
  <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.5.1/mapbox-gl-geocoder.css" type="text/css">
</head>
<body>
  <div id="peta" style="width: 100%;height: 100vh;"></div>
  
<script src='https://api.mapbox.com/mapbox-gl-js/v2.0.1/mapbox-gl.js'></script>
<script>
  mapboxgl.accessToken = 'pk.eyJ1IjoiYnVrdWtvZGluZyIsImEiOiJja3RtN3lxZTgyM2FuMm5udGtlY3RheXJlIn0.AQNBB6nKHrqmseFFs-qGlg';
  var map = new mapboxgl.Map({
    container: 'peta',//id elemen html
    style: 'mapbox://styles/mapbox/streets-v11',
    center:[106.69972796989238, -6.238601629433243],//koordinat lokasi garis bujur dan lintang,longitude dan latitude
    zoom: 9 // starting zoom
  });

  // Set marker options.
  const marker = new mapboxgl.Marker({
      color: "#FFFFFF",
      draggable: true
  }).setLngLat([106.69972796989238, -6.238601629433243])
      .addTo(map);
</script>
</body>
</html>