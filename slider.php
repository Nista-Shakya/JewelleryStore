<link rel="stylesheet" type="text/css" href="styleFE.css">
<?php
  include 'upperPartNavbar.php';
?>
<?php
include_once 'includes/ratedb.php';
?>
<!-- Image Slideshow -->
	<!--image slider start-->
    <div class="slider">
      <div class="slides">
        <!--radio buttons start-->
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <!--radio buttons end-->
        <!--slide images start-->
        <div class="slide first">
          <img src="Images/ring1.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/pearl.jpg" alt="">
          <div class="caption">
          <h1>Newa Jewellers</h1>
          <p>HandCrafted With Love and Care</p>
          </div>
        </div>
        <div class="slide">
          <img src="Images/ring2.jpg" alt="">
        </div>
        <div class="slide">
          <img src="Images/ring3.jpg" alt="">
        </div>
        <!--slide images end-->
        <!--automatic navigation start-->
        <div class="navigation-auto">
          <div class="auto-btn1"></div>
          <div class="auto-btn2"></div>
          <div class="auto-btn3"></div>
          <div class="auto-btn4"></div>
        </div>
        <!--automatic navigation end-->
      </div>
      <!--manual navigation start-->
      <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
      </div>
      <!--manual navigation end-->
    </div>
    <!--image slider end-->

<?php
  include 'whyNJ.php';
?>


<?php
  include 'footer.php';
?>