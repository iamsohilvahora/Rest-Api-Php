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
            <a class="nav-link" href="#worldlive">WorldCorona Live</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="indiacorona.php">IndiaCorona Live</a>
          </li> 

          <li class="nav-item">
            <a class="nav-link" href="indiacoronadaywise.php">IndiaCoronaDayWise Live</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#symptoms">Symptoms</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#prevention">Prevntion</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
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

    <section class="corona_update container-fluid pt-1 pb-1" id="worldlive">
      <div class="mb-3">
        <h3 class="text-uppercase text-center">COVID-19 Live Updates Of The World</h3>
      </div>

      <!-- <div class="d-flex justify-content-around align-items-center">
        <div>
          <h1 class="count">1,524,266</h1>
          <p>Passengers scrended at airport</p>
        </div> 

        <div>
          <h1 class="count">512</h1>
          <p>Active COVID-19 Cases</p>
        </div> 

        <div>
          <h1 class="count">40</h1>
          <p>Cured/discharged Cases</p>
        </div> 

        <div>
          <h1 class="count">9</h1>
          <p>Death Cases</p>
        </div>  
      </div> -->

      <div class="table-responsive">
         <table class="table table-bordered table-striped text-center" id="tbval">     
             <tr>
               <th>Country</th>
               <th>Total Confirmed</th>
               <th>Total Recovered</th>
               <th>Total Deaths</th>
               <th>New Confirmed</th>
               <th>New Recovered</th>
               <th>New Deaths</th> 
             </tr>

         </table> 
      </div>
    </section>

    <!---------------- About Section ------------->
    <div class="container-fluid sub_section pt-5 pb-5" id="about">
      <div class="section_header text-center mt-4 mb-5">
        <h1>About COVID-19</h1>
      </div>

      <div class="row pt-5">
        <div class="col-lg-5 col-md-6 col-12 ml-0">
          <img src="images/aboutcovid.jpg" class="img-fluid" alt="About Corona Virus">
        </div>
        <div class="col-lg-6 col-md-6 col-12 mr-0">
          <h2>What is COVID-19 (Corona-Virus)</h2>
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people who fall sick with COVID-19 will experience mild to moderate symptoms and recover without special treatment.</p>
          <p>The virus that causes COVID-19 is mainly transmitted through droplets generated when an infected person coughs, sneezes, or exhales. These droplets are too heavy to hang in the air, and quickly fall on floors or surfaces.You can be infected by breathing in the virus if you are within close proximity of someone who has COVID-19, or by touching a contaminated surface and then your eyes, nose or mouth.</p>
        </div>
      </div>
    </div>

  <!----------------- Coronavirus Symptoms ------------------------->
  <div class="container-fluid pt-5 pb-5" id="symptoms">
    <div class="section_header mt-4 mb-5 text-center">
      <h1>CoronaVirus Symptoms</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/cough.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Cough</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/runnynose.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Runny Nose</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/fever.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Fever</figcaption>
          </figure>
        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/tiredness.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Tiredness</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/cold.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Cold</figcaption>
          </figure>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <figure class="text-center">
            <img src="images/severe.jpg" class="img-fluid" width="90" height="90">
            <figcaption>Difficulty Breathing(Severe Cases)</figcaption>
          </figure>
        </div>
      </div>
    </div>
  </div>

  <!----------------- Prevention against coronavirus ------------------------->
  <div class="container-fluid sub_section pt-5 pb-5" id="prevention">
    <div class="section_header mt-5 mb-5 text-center">
      <h1>6 steps prevention against corona virus.</h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/handwash.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Wash your hands regularly for 20s, with soap and water.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/covernose.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Cover your nose and mouth with a disposable tissue.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/avoidcontact.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Avoid close contact(1 meter or 3 feet) with a people who are unwell.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/stayhome.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay home and self isolate from others in the household if tou feel unwell.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/news.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>Stay informed by watching news andfollow recommended practices.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-12 mt-5">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
              <figure class="text-center">
                <img src="images/severe.jpg" class="img-fluid" width="90" height="90">
              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12">
              <p>If you have fever, cough and difficulty breathing. Seek medical care early.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <!----------------- Contact Us ASAP ------------------------->
  <div class="container-fluid sub_section pt-5 pb-5" id="contact">
    <div class="section_header mt-4 mb-5 text-center">
      <h1>Contact Us ASAP</h1>
    </div>

  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="post">
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="Enter Username" required>
          </div>

          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com" required>
          </div>

          <div class="form-group">
            <label for="mobile">Enter Mobile Number</label>
            <input type="number" class="form-control" name="mobile" placeholder="Enter Your mobile Number" required>
          </div>
          
          <div class="form-group">
            <label>Select Symptoms</label><br />
            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox"  class="custom-control-input" id="customcheckbox1" name="coronasym[]" value="cold">
              <label class="custom-control-label" for="customcheckbox1">Cold</label>
            </div>  

            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox"  class="custom-control-input" id="customcheckbox2" name="coronasym[]" value="Fever">
              <label class="custom-control-label" for="customcheckbox2">Fever</label>
            </div>  

            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox"  class="custom-control-input" id="customcheckbox3" name="coronasym[]" value="Difficulty in breath">
              <label class="custom-control-label" for="customcheckbox3">Difficulty in breath</label>
            </div>  

            <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
              <input type="checkbox"  class="custom-control-input" id="customcheckbox4" name="coronasym[]" value="Feeling weak">
              <label class="custom-control-label" for="customcheckbox4">Feeling Weak</label>
            </div>           
          </div>
          <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" name="msg" id="exampleFormControlTextarea1" rows="3" required></textarea>
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
  </div>

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


<?php
  include('./database/conn.php');

  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $coronasym = $_POST['coronasym'];
    $msg = $_POST['msg'];
    
    $chk = "";
    foreach($coronasym as $chk1){
      $chk .= $chk1.",";
    }
    $query = "insert into user(username, email, mobile, symptoms, description)   
                values('$username', '$email', '$mobile', '$chk', '$msg')";
    echo $query;            
    $result = mysqli_query($conn, $query);
    if($result){
?>
    <script>alert('Data Inserted Successfully!');</script>    
  <?php
    }
    else{
  ?>
    <script>alert('Error in insert the data');</script>  
  <?php
    }
  }
?>