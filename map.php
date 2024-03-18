<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\landing-page.css">
    <link rel="stylesheet" href="assets\css\bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'modules\dashboard_menu.php';
        include_once('modules\navbar.php');
        include_once 'modules\sessions.php';
    ?>
<div class="card w-3 m-5 text-center">
  <!-- <img src="..." class="card-img-top" alt="..."> -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d125888.1007570961!2d6.412760313920651!3d9.594996032413984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x104c7176362ea043%3A0x7abca9d4dca2aec0!2sFederal%20University%20of%20Technology%2C%20Minna%2C%20Bosso%20Campus%2C%20MG4H%2BCGV%2C%20Okada%20Road%2C%20Dutsen%20Kura%20Gwari%20920101%2C%20Minna%2C%20Niger%2C%20Nigeria!3m2!1d9.656101399999999!2d6.5287871!4m5!1s0x104c7508cff37833%3A0xc8b3637f075a8b04!2sFederal%20University%20of%20Technology%20Minna%20Gidan%20Kwano%2C%20GCMX%2BCMV%2C%20920102%2C%20Minna%2C%20Niger%2C%20Nigeria!3m2!1d9.5336084!2d6.4491793!5e0!3m2!1sen!2suk!4v1701213696827!5m2!1sen!2suk" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <div class="card-body">
    <p class="card-text text-danger fw-bolder text-uppercase">This is the Map showing the trip from Bosso campus to GK campus</p>
  </div>
</div>
<script src="assets\js\bootstrap.bundle.min.js"></script>
</body>

</html>