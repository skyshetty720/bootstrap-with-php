<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>NINJA SKY</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="style.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">
</head>
<header>
<body style="font-family: 'Ropa Sans',sans-serif;">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light px-4 border-bottom" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="home.php"><img src="img/logoo1.jpg" width="95" height="30"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 fs-5  text-center">
              <li class="nav-item">
                <a class="nav-link text-primary" aria-current="page" href="home.php">Home</a>
              </li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['username']; ?>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="logout.php">logout</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header> <br><br>
    <section>
        <div class="card mb-3">
            <div class="text-center">
            <figure class="category-image">
                <a href="#">
                  <img src="logo/hero.png" width="150" height="150" class="my-3" style="border-radius: 10%;">
                </a>
              </figure>
            </div>
            <div class="card-body">
              <h5 class="card-title">Hero MotoCorp</h5>
              <p class="card-text" style="font-size: 19px;">
                Hero MotoCorp Limited, formerly Hero Honda, is an Indian multinational motorcycle and scooter manufacturer headquartered in New Delhi. The company is one of the largest two-wheeler manufacturers in the world, as well as in India, where it has a market share of about 37.1% in the two-wheeler industry. As of 27 May 2021, the market capitalization of the company was ₹59,600 crore (US$7.8 billion).
            </p></div>
          </div>
    </section>
<section>
    <h3 class="text-center">Bikes</h3>
        <hr class="w-50 m-auto"/>
        <div class="d-flex justify-content-evenly mt-2">
         <div class="card mb-3" style="width: 22rem;">
            <img src="cars/xtreme.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">XTREME 200</h5>
              <p class="card-text">
                The power to command attention. To turn heads. To inspire awe. To set hearts racing. To say it all without saying a word. That's the power of presence.
              </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=XTREME 200" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.heromotocorp.com/en-in/xtreme200s/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/xpulse.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Xpulse</h5>
              <p class="card-text">Take your adventures to the next level with a light-weight all-terrain motorcycle that’s perfect for everyday rides as well as your action on the weekends. The Xpulse 200 is equipped with tech features as well!.</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Xpulse" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.heromotocorp.com/en-in/xpulse200/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/splendor1.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Splendor ismart</h5>
              <p class="card-text">Bringing tomorrow’s technology to India, today. Hero xSens Advantage powered by Programmed FI with Advanced Sensor Technology to give you a best-in-class engine technology and riding experience.
                A leap in technology with a focus on fuel-saving, performance, durability, reliability and safety.
                </p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Splendor ismart" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.heromotocorp.com/en-in/splendor-ismart-bsvi/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
          <div class="card mb-3" style="width: 22rem;">
            <img src="cars/maestro.png" class="card-img-top" alt="Honda amaze">
            <div class="card-body">
              <h5 class="card-title">Maestro edge</h5>
              <p class="card-text">that automatically adjusts vehicle performance depending on riding conditions</p>
            </div>
            <div class="card-body">
              <a href="buynow.php?car=Maestro edge" class="card-link btn btn-primary">Buy Now</a>
              <a href="https://www.heromotocorp.com/en-in/new-maestro-edge-110/" class="card-link btn btn-danger" target="_blank">Know More</a>
            </div>
          </div>
        </div>
</section>

<footer style="background-color:#e3f2fd;">
    <div class="text-center">
    <img src="img/logoo.jpg" class="center" height="100" width="250">
  </div>
  
  <div class="row">
    <div class="col-sm">
      <p class="text-center"><a href="about.php" class="txtunder">About Us</a>|<a href="#" class="txtunder">Contact</a> &nbsp; &copy;2022 NinjaSky.com</p>
    </div>
  </div>
  </footer>


   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>
    </html>