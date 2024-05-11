<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
   .container {
      max-width: 1000px; /* Adjust the max-width as needed */
      margin: 0 auto; /* Centers the container */
      overflow-x: auto; /* Allows horizontal scrolling if images exceed container width */
      white-space: nowrap; /* Prevents images from wrapping to the next line */
   }
   
   .imgs {
      display: inline-block; /* Displays images in a single row */
      margin-right: 20px; /* Add some space between images */
      vertical-align: top; /* Aligns images to the top of their container */
   }
   
   .imgs:last-child {
      margin-right: 0; /* Remove margin from the last image */
   }
   
   .imgs img {
      max-width: 100%; /* Ensures images don't exceed container width */
      height: auto; /* Allows the image's height to adjust proportionally */
   }
</style>

   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There ! I'm Harsh Chaudhary. A Student of BE in Software Engineering Department from NCIT College [Batch : 2023] . I love designing websites and exploring new things. Learning new things is my hobby.</p>

         <p>I would like to thank <a href="https://www.facebook.com/er.ashokbasnet" target="_blank">Er. Ashok Basnet</a> Sir for guiding me through the session and making me able to develop projects like this. </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section >
   


   <div class="swiper reviews-slider">
      

      <div class="swiper-wrapper">
      

        <div class="imgs">
          <img src="./images/STORE1.jpg" alt="img1">
        </div>

        <div class="imgs">
          <img src="./images/store3.jpg" alt="img1">
        </div>

        <div class="imgs">
          <img src="./images/store2.jpg" alt="img1">
        </div>

      </div>
      
   

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>