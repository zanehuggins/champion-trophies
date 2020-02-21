<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
<link rel="manifest" href="site.webmanifest">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">


<title>Champion Trophies & Awards</title>
<meta charset="UTF-8">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>


<body>
<div class="container-fluid col-xl-10 p-0">


<header class="col-12 p-0 float-left">

<div class="col-4 d-none d-md-block float-left">
<ul>
  <li><h3>Hours of Operation</h3></li>
  <li>Monday - Friday</li>
  <li>9:00am - 4:00pm</li>
</ul>
</div>

  <div class="logo-container col-6 offset-3 col-md-4 offset-md-0 float-left">
    <a href="index.html" class="logo-a"><img src="images/logo.svg" alt="logo/link to home" class="logo"></a>
  </div>


  <div class="col-3 d-none d-md-block float-right">
  <ul class="col-12 float-right">
    <li>304.225.2630</li>
<li>550 Beechurst Ave.</li>
<li>Morgantown, WV 26505</li>
  </ul>
</div>

</header>


<nav class="navbar navbar-expand-lg navbar-dark col-12 p-0 float-left">
  <h4 class="d-lg-none col-4 offset-4">Home</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse col-12 p-0" id="navbarNav">
    <ul class="navbar-nav col-12 p-0">
      <li class="nav-item col-lg-3">
        <a class="nav-link" href="index.html">Home</a>
      </li>
      <li class="nav-item col-lg-3">
        <a class="nav-link" href="awards.html">Awards</a>
      </li>
      <li class="nav-item col-lg-3">
        <a class="nav-link" href="statue.html">Statues & Bronze</a>
      </li>
      <li class="nav-item active col-lg-3">
        <a class="nav-link" href="contact.html" id="active-nav">Contact Us <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
</nav>
<main class="col-12 float-left">

  <?php $first_name = $_POST['first-name'];
  $last_name = $_POST['last-name'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $formcontent="From: $name \n Message: $message";
  $recipient = "hugginszane@gmail.com";
  $subject = "Contact Form";
  $mailheader = "From: $email \r\n";
  mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
  echo "Thank You!";
  ?>


</main>
<footer class="col-12 float-left p-0">

<div class="col-5 offset-2 offset-md-1 float-left">
  <ul class="social-media">
    <li><h3>Connect With Us</h3></li>
    <li><a href="https://www.facebook.com/championtrophiesandawards/" target="_blank"><img src="images/facebook.svg" alt="link to Facebook"></a></li>
    <li><a href="https://www.instagram.com/champion_trophies_wv/" target="_blank"><img src="images/instagram.svg" alt="link to Instagram"></a></li>

  </ul>
</div>

  <div class="col-10 offset-2 col-md-3 offset-md-0 float-left">
  <ul>
    <li><h3>Hours of Operation</h3></li>
    <li>Monday - Friday</li>
    <li>9:00am - 4:00pm</li>
  </ul>
  </div>

    <div class="col-10 offset-2 col-md-3 offset-md-0 float-left">
    <ul class="float-left">
      <li>304.225.2630</li>
  <li>550 Beechurst Ave.</li>
  <li>Morgantown, WV 26505</li>
    </ul>
  </div>

</footer>

</div> <!-- CLOSES CONTAINER -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
