<!DOCTYPE html>
<html lang="en">
<?php
  require_once 'header.php';
?>
<body>
  <style>
      .navbar {
        margin-bottom: 0;
        border-radius: 0;
      }

      footer {
        background-color: #f2f2f2;
        padding: 25px;
      }

      .glyphicon.glyphicon-send {
      font-size: 150px;
      }

      .glyphicon.glyphicon-bookmark {
      font-size: 150px;
      }

      .glyphicon.glyphicon-remove-circle {
      font-size: 150px;
      }

      .glyphicon.glyphicon-list-alt {
      font-size: 150px;
      }

      .glyphicon.glyphicon-user {
      font-size: 150px;
      }

      .glyphicon.glyphicon-edit {
      font-size: 150px;
      }
      .glyphicon.glyphicon-bullhorn {
      font-size: 150px;
      }
      .glyphicon.glyphicon-qrcode {
      font-size: 150px;
      }
    </style>
  <?php require_once 'navbar.php';require 'seatPopulate.php'; ?>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
      <div class="item active">
        <img src="../images/carousel/bus.jpg" alt="TRVL">
        <div class="carousel-caption">
          <h1>TRVL!</h1>
          <h3>Travel Comfortably...</h3>
        </div>
      </div>

      <div class="item">
        <img src="../images/carousel/bus_bg.jpeg" alt="TRVL">
        <div class="carousel-caption">
          <h1>TRVL!</h1>
          <h3>No need for queueing...</h3>
        </div>
      </div>

      <div class="item">
        <img src="../images/carousel/bus2.png" alt="TRVL">
        <div class="carousel-caption">
          <h1>TRVL!</h1>
          <h3>Because we offer quality ...</h3>
        </div>
      </div>
    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div><br><br>
  <div class="container-fluid bg-3 text-center">

    <h2><i class="fas fa-ticket-alt"></i>&nbsp;Ticket Window&nbsp;<i class="fas fa-ticket-alt"></i></h2><br>
    <div class="row">
      <div class="col-sm-3">
        <h3>Book Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="bookTicket.php"><span class="glyphicon glyphicon-send"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>View Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="view_tickets.php"><span class="glyphicon glyphicon-qrcode"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Cancel Ticket</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="cancelTicket.php"><span class="glyphicon glyphicon-remove-circle"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Weekly Bus Schedule</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="schedule.php"><span class="glyphicon glyphicon-list-alt"></span></a>
        </button>
      </div>
    </div>
  </div><br><br>

  <div class="container-fluid bg-3 text-center">
    <h2><i class="fas fa-child"></i>&nbsp;Enquiries and Everything Else&nbsp;<i class="fas fa-child"></i></h2><br>
    <div class="row">
      <div class="col-sm-3">
        <h3>About TRVL</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../aboutus.php"><span class="glyphicon glyphicon-bookmark"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Your TRVL Profile</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="profile.php"><span class="glyphicon glyphicon-user"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Announcements</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="announcements.php"><span class="glyphicon glyphicon-bullhorn"></span></a>
        </button>
      </div>
      <div class="col-sm-3">
        <h3>Terms & Conditions</h3><br>
        <button type = "button" class = "btn btn-link btn-block">
          <a href="../tandc.php"><span class="glyphicon glyphicon-edit"></span></a>
        </button>
      </div>
    </div>
  </div><br><br>
  
  <?php require_once 'footer.php';?>
</body>
</html>
