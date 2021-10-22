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

$sql = "SELECT COUNT(gender) AS tGender,gender FROM gender_ratio GROUP BY gender";
$result = $conn->query($sql);
?>

<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Gender', 'Percent'],
          //['Male', 40],
          //['Female', 60],
          <?php
          if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) { 
          ?>
            ['<?php echo $row['gender']; ?>', <?php echo $row['tGender'];  ?>],
          <?php  
            }
          } else {
            echo "Data is not found";
          }
          $conn->close();
          ?>

         
        ]);

        var options = {
          title: 'Gender Ratio',
          pieHole: 0.1,
          is3D: true
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
