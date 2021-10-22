<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Virus</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,400;1,700&display=swap" rel="stylesheet">

    <!-- Font Awesome ---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <?php include('css/style.php'); ?>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav_style">
      <a class="navbar-brand pl-5" href="index.php">COVID-19</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto pr-5 text-capitalize">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="indiacorona.php">IndiaCorona Live</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="indiacoronadaywise.php">IndiaCoronaDayWise Live</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="main_header" id="home">
      <div class="row w-100 h-100">
        <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
          <div class="left_side w-100 h-100 d-flex justify-content-center align-items-center">
            <img src="images/corona.jpg" width="300" heigh="300">
          </div>
        </div>

        <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
          <div class="right_side w-100 h-100 d-flex justify-content-center align-items-center">
            <h1>Let's stay safe & Fight together against cor <span class="rotation"><img src="images/corona2.jpg" width="30" height="30"></span> na virus</h1>
          </div>
        </div>        
      </div>
    </div>

    <!---------------- Corona Latest Updates -------------->

    <section class="corona_update container-fluid">
      <div class="mb-3">
        <h3 class="text-uppercase text-center">COVID-19 Live Updates Of The India Day Wise</h3>
      </div>

      <div class="table-responsive">
         <table class="table table-bordered table-striped text-center" id="indiatbval">   <tr>
               <th>Total Confirmed</th>
               <th>Daily Confirmed</th>
               <th>Daily Recovered</th>
               <th>Daily Deceased</th>
               <th>Total Recovered</th>
               <th>Total Deceased</th> 
            </tr>

		<?php
			$data = file_get_contents('https://api.covid19india.org/data.json');
			$coronalive = json_decode($data, true);

			$statecount = count($coronalive['cases_time_series']);
			$i=1;

			while($i<$statecount){
		?>	
      <tr>
        <th class="text-left" colspan="6">Date & Month</th>
      </tr>

      <tr>
        <td colspan="6" class="text-left"><?php echo $coronalive['cases_time_series'][$i]['date']; ?></td>
      </tr>

			<tr>
				<td><?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']; ?></td>
				<td><?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']; ?></td>
				<td><?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']; ?></td>
				<td><?php echo $coronalive['cases_time_series'][$i]['dailydeceased']; ?></td>
				<td><?php echo $coronalive['cases_time_series'][$i]['totalrecovered']; ?></td>
				<td><?php echo $coronalive['cases_time_series'][$i]['totaldeceased']; ?></td>	
			</tr>
		<?php
				$i++;
			}
		?>
         </table> 
      </div>
    </section>

  <!---------- Top Cursor ---------->
  <a href="#" class="scrollToTop">Top</a>
     
  <!--------- Footer --------------->
  <footer>
    <div class="footer_style text-center text-white container-fluid">
      <p>Copyright &copy; by KGN Tech</p>
    </div>
  </footer>  

  <?php include('css/link/link.php'); ?>

   <script src="./js/main.js"></script>

  </body>
</html>