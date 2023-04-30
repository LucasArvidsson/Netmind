<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Din resturang</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <!-- custom css file link-->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <!-- header section starts-->

   <section class="header">

      <a href="#" class="logo">NetMind. </a>

      <nav class="navbar">
         <a href="#home">Hem</a>
         <a href="#about">Om oss</a>
         <a href="html/kurser.html">Kurser</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

   <!-- header section ends    -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="swiper home-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background: url(images/home-slide-1.jpg) no-repeat;">
               <div class="content">
                  <span>Från ny till erfaren lär dig om</span>
                  <h3> Nätverks teknik</h3>
                  <a href="#" class="btn">Börja här</a>
               </div>
            </div>

         </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">
      <div class="content">
         <h3 class="title"><a href="">Kurser</a></h3>
         <div class="icons-container">
            <div class="icons">
               <h3>Grunder</h3>
            </div>
            <div class="icons">
               <h3>LAN</h3>
            </div>
            <div class="icons">
               <h3>WAN</h3>
            </div>
         </div>
      </div>

   </section>

   <!-- about section ends -->

   <!-- menu section starts  -->

   <section class="menu" id="menu">
      <section class="food-preview-container">

         <div id="close-preview" class="fas fa-times"></div>
         </div>

      </section>
      <div class="heading">
         <span></span>
         <h3>Kapitel</h3>
      </div>
      <div class="swiper menu-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <h3 class="title">Nätverks grunder</h3>
               <div class="box-container">
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>TCP/IP</h3>
                     </div>
                  </div>
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>OSI Modeller</h3>
                     </div>
                  </div>

               </div>
            </div>

            <div class="swiper-slide slide">
               <h3 class="title">LAN</h3>
               <div class="box-container">
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>Översikt</h3>
                     </div>
                  </div>
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>UTP</h3>
                     </div>
                  </div>
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>Skicka data</h3>
                     </div>
                  </div>

               </div>
            </div>

            <div class="swiper-slide slide">
               <h3 class="title">WAN</h3>
               <div class="box-container">
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>Översikt</h3>
                     </div>
                  </div>
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>Leased Line</h3>
                     </div>
                  </div>
                  <div class="box">
                     <div class="info">
                        <h3><a href=""></a>WAN Tech</h3>
                     </div>
                  </div>

               </div>
            </div>

         </div>
      </div>

      <div class="swiper-pagination"></div>

      </div>

   </section>

   <!-- menu section ends -->

   <!-- footer section starts  -->

   <section class="footer">
      <div class="share">
         <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a>
         <a href="#" class="fab fa-instagram"></a>
         <a href="#" class="fab fa-linkedin"></a>
      </div>

   </section>

   <!-- footer section ends  -->

   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/js/lightgallery.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

</body>

</html>