<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login reg</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">	
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

<style>
a {
    text-align: center;
}
/* Pricing */
section.pricing {
}
.pricing .card {
  border: none;
  border-radius: 1rem;
  transition: all 0.2s;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.pricing hr {
  margin: 1.5rem 0;
}
.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}
.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}
.pricing .card-price .period {
  font-size: 0.8rem;
}
.pricing ul li {
  margin-bottom: 1rem;
}
.pricing .text-muted {
  opacity: 0.7;
}
.pricing .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}

/* Hover Effects on Card */

@media (min-width: 992px) {
  .pricing .card:hover {
    margin-top: -.25rem;
    margin-bottom: .25rem;
    box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.3);
  }
  .pricing .card:hover .btn {
    opacity: 1;
  }
}

p{
  font-family: forma-djr-display, sans-serif;
  font-size: 14px;
}

h6{
  font-size: 20px;
}

	</style>

<link rel="stylesheet" href="style.css"/>

</head>
<body>
<nav>
    <a href="#">
    </a>

    <img class="logo" src="hostel logo.png" alt="logo">
        <ul>
            <li><button><a href="booking_sys.php" style="text-decoration:none; color: inherit;">booking</a></button></li>
            <li><a href="login_header.php">home</a></li>
            <li><button><a href="gallary.php" style="text-decoration:none; color: inherit;">jQ/Zoom</a></button></li>
            <button id="login-b" onclick="document.getElementById('login').style.display='block'" style="width:auto;">Login/Register</button>
		</ul>
	</nav>


    <div class="container d-flex flex-column">
        <div>
            <br>
            	<h2 class="text-center mb-4">Book Appointment</h2>
        </div>
    </div>


    <div class="container">
    <hr class="mb-0 mt-4 d-none d-sm-block"> 
				
	<div class="container vh-10">

</div>

<!-- Massage Types -->
<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Deep Tissue Massage -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Deep Tissue Massage</h5>
            <h6 class="card-price text-center">$45</h6>
            <h5 class="card-title text-muted text-uppercase text-center">30 mins</h5>
            <hr>
            <p>Used in the process of recovering from injury or illness</p>
            <p>Designed to work specifically on those areas to help relieve tension, restore mobility, and eliminate pain.</p>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>
      <!-- Sports Massage -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Sports Massage</h5>
            <h6 class="card-price text-center">$45</h6>
            <h5 class="card-title text-muted text-uppercase text-center">30 mins</h5>
            <hr>
            <p>Seeking relief from muscular tension or simply to maintain healthy muscles.</p>
            <p>Sports and remedial massage is an effective and beneficial form of physical therapy, not only for active sports people, or those requiring therapy after a soft tissue injury</p>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>
      <!-- Therapeutic Massage -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Therapeutic Massage</h5>
            <h6 class="card-price text-center">$45</h6>
            <h5 class="card-title text-muted text-uppercase text-center">30 mins</h5>
            <hr>
            <p>Used in the process of recovering from injury or illness your body may experience unwanted aches and pains.</p>
            <p>Your deep tissue massage program will be designed to work specifically on those areas to help relieve tension, restore mobility, and eliminate pain.</p>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Relaxation Massage -->
      <div class="col-lg-3">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Relaxation Massage</h5>
            <h6 class="card-price text-center">$45</h6>
            <h5 class="card-title text-muted text-uppercase text-center">30 mins</h5>
            <hr>
            <p>A more relaxed massage suitable for everyone, using a variety of techniques to help you unwind and rejuvenate.</p>
            <p>Known to reduce pain, soothe muscles, improve circulation whilst promoting health and well being.</p>
            <a href="#" class="btn btn-block btn-primary text-uppercase">Book Now</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
												
		         <hr class="mb-0 mt-4 d-none d-sm-block"> 


</body>
</html>