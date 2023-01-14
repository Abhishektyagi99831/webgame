<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GameZone</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="#">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
<!-- <style>
li
{
   list-style-type: none;
}
</style> -->
<body class="bg-dark">
  <!---------------------- Nav Bar ------------------------------------>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><span class="game" style="color: White;">Game</span><span class="hub" style="color:orange ;">Hub</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="justify-content: end;">
      <ul class="navbar-nav" style="margin-right: 5cm;">

        <li class="nav-item active">
          <a class="nav-link text-light" href="index.html">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light" href="privacy.html">Privacy Policy</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-light" href="contactus.php">Contact</a>
        </li>

      </ul>
    </div>
  </nav>
<!------------------ Top Games ------------------------------>
  <div class="container">
    <div class="row">      
      <div class="col-md-12 col-sm-12 col-xs-12 "><h3 class="text-light">Top Games</h3>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Cube Game</h5>
            <a href="cube.html"><img src="./assest/image/cube-img.png" alt="Cube" href="" style="width:100%" /></a>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Colorn Game</h5>
            <a href="coloron.html"><img src="./assest/image/colorn-img.png" alt="Colorn" style="width:100%" height="91%"/></a>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Third</h5>
            <img src="./assest/image/img3.jpg" alt="Fjords" style="width:100%" />
          </div>
        </div>
      </div>
    </div>
  </div>
<!---------------------- Carousel ----------------------------------->
  <div class="container mt-3 Carousel">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./assest/image/img1.webp" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assest/image/img2.webp"  alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./assest/image/img3.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>  

<!------------------ Action Games ------------------------------>
<div class="container mt-5">
  <div class="row">      
    <div class="col-md-12 col-sm-12 col-xs-12 "><h3 class="text-light">Action Games</h3>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">First</h5>
          <img src="./assest/image/img1.webp" alt="Fjords" style="width:100%" />
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Second</h5>
          <img src="./assest/image/img 4.jpg" alt="Fjords" style="width:100%" height="73%"/>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Third</h5>
          <img src="./assest/image/img3.jpg" alt="Fjords" style="width:100%" />
        </div>
      </div>
    </div>
  </div>
</div>

<!------------------ Adventure Games ------------------------------>
  <div class="container">
    <div class="row">      
      <div class="col-md-12 col-sm-12 col-xs-12 "><h3 class="text-light">Advanture Games</h3>
        <div class="row">
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">First</h5>
            <!-- <img src="./img1.webp" alt="Fjords" style="width:100%" /> -->
            <a href="http://www.pogo.com"> Shell crros</a>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Second</h5>
            <img src="./assest/image/img 4.jpg" alt="Fjords" style="width:100%" height="73%"/>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Third</h5>
            <img src="./assest/image/img3.jpg" alt="Fjords" style="width:100%" />
          </div>
        </div>
      </div>
    </div>
  </div>

<!------------------ Puzzle Games ------------------------------>
<div class="container">
  <div class="row">      
    <div class="col-md-12 col-sm-12 col-xs-12 "><h3 class="text-light">Puzzle Games</h3>
      <div class="row">
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">First</h5>
          <img src="./assest/image/img1.webp" alt="Fjords" style="width:100%" />
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Second</h5>
          <img src="./assest/image/img 4.jpg" alt="Fjords" style="width:100%" height="73%"/>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12"><h5 class="text-light">Third</h5>
          <img src="./assest/image/img3.jpg" alt="Fjords" style="width:100%" />
        </div>
      </div>
    </div>
  </div>
</div>

<!--------------------------------------- Footer ---------------------------------->
<div class="container">
  <div class="row">
      <div class="col-md-3 text-center">
        <span class="text-light">Contact</span>
        <ul class="footer text-light">
          <li>contact : 1234567890</li>
          <li>email : xyz@gmail.com</li>
          <li>address : zyx street no-3</li>
        </ul>
      </div>

      <div class="col-md-3 text-center">
        <span class="text-light">About</span>
        <ul class="footer text-light">
          <li>About</li>
          <li>About</li>
          <li>About</li>
        </ul>
      </div>

      <div class="col-md-3 text-center">
        <span class="text-light">FAQ</span>
        <ul class="footer text-light">
          <li>FAQ</li>
          <li>FAQ</li>
          <li>FAQ</li>
        </ul>
      </div>

      <div class="col-md-3 text-center pb-5">
        <span class="text-light">Join us</span>
        <ul class="footer text-light text-decoration-none">
          <li>Facebook</li>
          <li>Instagram</li>
          <li>Youtube</li>
        </ul>
      </div>
  </div>
</div>
</body>
</html>