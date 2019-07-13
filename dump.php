<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
	<div class="carousel-inner">
	    <div class="carousel-item active">
	        <img src="img/caro3.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="img/caro5.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="caro4.jpg" class="d-block w-100" alt="...">
	    </div>
	</div>
</div>	

<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
	  <div class="carousel-inner">

	    <div class="carousel-item active">
	      <img src="img/caro3.jpg" class="d-block w-100" height="550px">
	    </div>
	    <div class="carousel-item">
	      <img src="img/caro5.jpg" class="d-block w-100" height="550px">
	    </div>
	    <div class="carousel-item">
	      <img src="img/skirt.jpg" class="d-block w-100" height="550px">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	

	<script>
	$('.carousel').carousel({
  interval: 1000
})
</script>


<!-- <?php
	    // while ($row = mysqli_fetch_array($result)) {
	    //   echo "<div id='img_div'>";
	    //   	echo "<img src='admin/images/".$row['image']."' >";
	    //   	echo "<p1>".$row['image_text']."</p1>";
	    //   echo "</div>";
	    }
	  ?> --> 

	  <div id="content">
		<?php
	    while ($row = mysqli_fetch_array($result)) {
		echo "<div class='card justify-content-center' style='width: 18rem;'>";
			echo "<img src='admin/images/".$row['image']."' >";
		  echo "<div class='card-body'>";
		    echo "<p1>".$row['image_text']."</p1>";
		  } 
		  ?>
	</div>	 

  echo "<button class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
    Learn More
  </button>";
  echo "<div class='collapse' id='collapseExample'>";
  echo "<div class='card card-body'>";
    echo "<p1>".$row['image_text']."</p1>";
 echo "</div>";
 echo "</div>";


 echo "<button  class='btn btn-primary' type='button' data-toggle='collapse' data-target='#collapseExample' aria-expanded='false' aria-controls='collapseExample'>
		    
		 </button>"




<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "multi_login");

  // Initialize message variable
  $msg = "";

 ?>