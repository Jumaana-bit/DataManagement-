<?php
$connect = new PDO("mysql:host=localhost;dbname=phase2", "root", "");
$query = "
  SELECT City FROM airport";
$result = $connect ->query($query);

?>

<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
    <meta name="viewport">
    <title> Let's go! </title>
    <link rel="stylesheet" type="text/css" href="HomeFlight.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  </head>
  <body> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Let's go!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">My Bookings</a>
        <a class="nav-link" href="#">Contact Us</a>
        <a class="nav-link">Sign Up</a>
      </div>
    </div>
  </div>
</nav>
    
   <div class="container min-vh-100 d-flex justify-content-center align-item">
      <div class="row">
        <div class="col-lg-2"></div>
          <div class="d-flex flex-column">
             <ul class="nav nav-underline">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Round-trip</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">One way</a>
            </li>
          </ul>
        </div>
 
        <div class="col-md-3">&nbsp;</div>
        <div class="col-md-8">
          <select name="dropdown-menu" class="form-select" id="select_box">
            <option value="">Leaving From</option>
            <?php
              foreach($result as $row)
              { 
                echo '<option value="'.$row["City"].'">'.$row["City"].'</option>';
              }
            ?>
          </select>
          <div id="searchWrapper">
            <h1>Destination</h1>
              <input
               type="text"
               name="searchBar"
               id="searchBar"
               placeholder="search for city/airport"/>
               <input
               type="text"
               name="searchBar2"
               id="searchBar2"
               placeholder="search for city/airport"/>
               <button id="submit" onclick="loadFlights()">submit</button>
             </div>
             <ul id="flightsList"></ul>
          
        </div>
      </div>
    </div>
  </script><script src="app.js"></script>
   </body> 
  </html>