<?php require_once("assets/config/config.php"); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>   <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]> 		<html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]> 		<html class="ie8 no-js" lang="es"> <![endif]-->
<!--[if IE 9]> 		<html class="ie9 no-js" lang="es"> <![endif]-->
<!--[if !IE]><!-->
<html lang="es">
<!--<![endif]-->

<head>
     <meta charset="utf-8">
     <meta name="author" content="Álvaro Redondo Rodríguez">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <title>Analytics — Landing Page</title>
     <!-- <link rel="stylesheet" href="assets/css/main.css" type="text/css" /> -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
     <link href="assets/css/dist/output.css" rel="stylesheet">

</head>

<body class="container max-w-screen-2xl mx-auto bg-back font-roboto">
     <?php include("assets/templates/header.php"); ?>
     <main>
          <section class="flex items-center bg-sectionHeader bg-no-repeat mt-[-99px] h-[900px]">
               <div>
                    <h1>Monitor your business on real-time dashboard</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. </p>
                    <button class="bg-pink">Try for free</button>
               </div>
               <img src="assets\images\main-screenDoble.svg" alt="">
          </section>
          <section class="text-center">
               <h2>Main Features</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet. Id vel in nam malesuada.</p>
               <div class="flex">
                    <div>
                         <img src="assets\images\timer.svg" alt="" class="mx-auto">
                         <h3>Monitoring 24/7</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
                    <div>
                         <img src="assets\images\pc.svg" alt="" class="mx-auto">
                         <h3>Widget System</h3>
                         <p>Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar.</p>
                    </div>
                    <div>
                         <img src="assets\images\cohete.svg" alt="" class="mx-auto">
                         <h3>Best Performance</h3>
                         <p>Lorem ipsum dolor sit amet, consectetur adipis cing elit. Elementum nisi aliquet volutpat.</p>
                    </div>
               </div>
          </section>
          <section class="flex justify-between gap-[100px]">
               <div class="my-auto">
                    <h2>Automated Reports & Widget Alerts</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-01.svg" alt="" srcset="">
          </section>
          <section class="flex justify-between gap-[100px]">
               <img src="assets\images\screen-02.svg" alt="" srcset="">
               <div class="my-auto">
                    <h2>Fully customizable to address your needs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
          </section>
          <section class="flex justify-between gap-[100px]">
               <div class="my-auto">
                    <h2>Pre-built Dashboard Templates</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. Sapien in etiam vitae nibh nunc mattis imperdiet sed nullam. Vitae et, tortor pulvinar risus pulvinar sit amet.</p>
               </div>
               <img src="assets\images\screen-03.svg" alt="" srcset="">
          </section>
          <section class="text-center">
               <h2>Pricing Plans</h2>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elementum nisi aliquet volutpat pellentesque volutpat est. </p>
               <div class="flex justify-center gap-[80px]">
                    <div class="flex flex-col justify-center
                    w-[340px] h-[440px]
                     bg-midnight 
                     rounded-[30px]
                     ">
                         <h3>Starter</h3>
                         <span>up to 3 users</span>
                         <div >
                              $29<span>per month</span>
                         </div>
                         <button>Order</button>
                    </div>
                    <div class="flex flex-col justify-center
                    w-[340px] h-[440px]
                     bg-white 
                     rounded-[30px]
                    ">
                         <h3>Standard</h3>
                         <span>up to 20 users</span>
                         <div >
                              $99<span>per month</span>
                         </div>
                         <button class="bg-pink">Order</button>
                    </div>
                    <div class="flex flex-col justify-center
                    w-[340px] h-[440px]
                     bg-midnight 
                     rounded-[30px]
                     ">
                         <h3>Premium</h3>
                         <span>up to 200 users</span>
                         <div >
                              $299<span>per month</span>
                         </div>
                         <button>Order</button>
                    </div>
               </div>
          </section>
     </main>
     <?php include("assets/templates/footer.php"); ?>
     <script src="assets/js/custom.js"></script>
</body>
</html>