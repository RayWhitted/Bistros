<!DOCTYPE html>
<html>
<head>
<title>Bistros Project</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<link rel="stylesheet" type="text/css" href="style.css">

<!--Links to Fonts Sacramento & Alice -->
<link href="https://fonts.googleapis.com/css?family=Sacramento&display=swap" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Alice&display=swap" rel="stylesheet" type="text/css">

<!--Adding Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<!-- Section 1 Navigation Bar -->
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Bistros</a>
      <br>
      <h4>Jacksonville, FL</h4>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li style="font-size: 18px;"><a href="#about">About</a></li>
        <li><a href="#reservations">Reservations</a></li>
        <li><a href="#jobs">Jobs</a></li>
        <li><a href="#contact">Contact Us</a></li>
        <li style="font-size: 36px">1-800-123-4567</li>
      </ul>
    </div>
  </div>
</nav>

<!-- Section 2 Page Header -->

<div class="jumbotron text-center">
  <h1>Voted Best New Restaurant in Jacksonville!</h1>
    <a href="#" class="btn btn-default btn-lg" role="button" style="font-family: 'Alice', serif">Order Online</a>
</div>


<!-- Section 3 Menus --> 

<div class="container-fluid text-center slideanim">
  <h2 style="font-family: 'Sacramento', cursive">Our Menus</h2>
  <div class="row text-center">
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="zoomImage">
        <a href="#BreakfastMenu"><img src="http://placekitten.com/300/200" alt="Breakfast" width="300" height="200"></a>
        </div>  
          <p style="font-family: 'Alice', serif"><strong>Breakfast</strong></p>
          <p style="font-family: 'Alice', serif">The most important meal of the day!</p>
      </div>    
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="zoomImage">
        <a href="#Lunch Menu"><img src="http://placekitten.com/300/200" alt="Lunch" width="300" height="200"></a>
        </div>
          <p style="font-family: 'Alice', serif"><strong>Lunch</strong></p>
          <p style="font-family: 'Alice', serif">Ask not what you can do for your country. Ask what's for lunch.</p>
      </div>    
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
        <div class="zoomImage">
        <a href="#DinnerMenu"><img src="http://placekitten.com/300/200" alt="Dinner" width="300" height="200"></a>
        </div>
          <p style="font-family: 'Alice', serif"><strong>Dinner</strong></p>
          <p style="font-family: 'Alice', serif">Dinner is better together!</p>
      </div>    
    </div>
  </div>
</div><br>


<!-- Section 4 Our Chef and Reviews --> 

  <!--Section 4a, Our Chef -->

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-md-4">
      <h2 style="font-family: 'Sacramento', cursive">Our Chef</h2>
      <p style="font-family: 'Alice', serif">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia modi perferendis velit itaque ab voluptas? Cum facere, architecto magni dignissimos voluptate velit atque hic unde sequi reprehenderit, nam nemo iure!</p>
      <p style="font-family: 'Alice', serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus nam dolorum modi in eos quae soluta inventore et perspiciatis aut suscipit quasi, dolorem eius nesciunt ducimus ullam sapiente saepe labore.</p>
      <a href="#" class="fa fa-facebook"></a>
      <a href="#" class="fa fa-twitter"></a>
      <a href="#" class="fa fa-rss"></a>
    </div>
    <!--Section 4b, Reviews -->
    <div class="col-md-8">
      <h2 style="font-family: 'Sacramento', cursive">What our customers say</h2>
      <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <h4><img class="img-circle" src="http://placekitten.com/60/60"><br>
            "This is my favorite restaurant!"<br><span>Ray Whitted</span></h4>
          </div>
          <div class="item">
            <h4><img class="img-circle" src="http://placekitten.com/60/60"><br>
            "One word... AMAZING!"<br><span>Raybert Lowstetter</span></h4>
          </div>
          <div class="item">
          <h4><img class="img-circle" src="http://placekitten.com/60/60"><br>
            "I can't wait to eat here again! Must try the duck."<br><span>John Somebody</span></h4>  
          </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>


<!--Section 5 Footer -->
<footer class="container-fluid text-center">
  <div class="row">
    <div class="col-md-4">
      <p>Copyright 2018, Bistros LLC</p>
    </div>
    <div class="col-md-4">
      <p>Bistros 123 Main St., Jacksonville, FL</p>
    </div>
    <div class="col-md-4">
      <p><a href="#Privacy">Privacy Policy</a> |  <a href="#Terms">Terms of Use</a></p>
    </div>
  </div>  
</footer>


<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>


</body>


</html>
