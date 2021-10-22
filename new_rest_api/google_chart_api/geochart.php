<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chart";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT country, population FROM geo";
$result = $conn->query($sql);

?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {
        'packages':['geochart'],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        'mapsApiKey': 'AIzaSyD-9tSrke72PouQMnMX-a7eZSW0jkFMBWY'
      });
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {
        var data = google.visualization.arrayToDataTable([
          ['Country', 'Population'],
          // ['Germany', 200],
          // ['United States', 300],
          // ['Brazil', 400],
          // ['Canada', 500],
          // ['France', 600],
          // ['RU', 700]

          <?php
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
          ?>
            ['<?php echo $row['country']; ?>', <?php echo $row['population'];  ?>],
          <?php  
            }
          } else {
            echo "Data is not found";
          }
          $conn->close();
          ?>


        ]);

        var options = {};

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="regions_div" style="width: 900px; height: 500px;"></div>
  </body>
</html>
