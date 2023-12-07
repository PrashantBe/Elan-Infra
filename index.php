<?php


if(isset($_POST["email"])){
   
    echo "1st step";
    
    if($_POST["name"]==""||$_POST["email"]==""||$_POST["phone_number"]==""){
    echo '<script>alert("All fields are mandatory")</script>';
    
    }else{
  
    // Check if the "Sender's Email" input field is filled out
    $email=$_POST['email'];
    
    // Sanitize E-mail Address
    $email =filter_var($email, FILTER_SANITIZE_EMAIL);
    
    // Validate E-mail Address
    $email= filter_var($email, FILTER_VALIDATE_EMAIL);
    
        if (!$email){
             echo '<script>alert("Invalid Email-id")</script>';
        }
        else{
            $message = 'Name : '.$_POST['name'].' || Email : '.$_POST["email"].' || Phone Number '.$_POST['phone_number'];
            $email2 = 'infraluxury@gmail.com';
            $headers = 'From: '. $email2 . "rn"; // Sender's Email
            
            $subject='Inquiry Received';
            // Message lines should not exceed 70 characters (PHP rule), so wrap it
            // $message = wordwrap($message, 70);
            
            // Send Mail By PHP Mail Function
            mail("infraluxury@gmail.com", $subject, $message, $headers);
             echo '<script>alert("Thank you, our team will get back to you soon.")</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="zxx">
   <head>
      <!-- Google Tag Manager -->
      <!-- End Google Tag Manager -->
      <title>Elan Sector 106 Gurgaon - 3,4 & 5 BHK Luxury Apartments Dwarka Expressway</title> 
      <meta name="description" content="Most Awaited project in the Gurgaon- Elan The Presidential. Avail Early Buy Discount Now! Luxurious 3/4 & 5 BHK Residences starts at 3.5 Cr, Call @7888488788 for Best Deal and Authentic Information"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta charset="UTF-8">
      <meta name="google-site-verification" content="OdsNGK44tZnn9GFtaITgp9MDPdr3SSd0le2xuoo8zW0" />
      <!-- External CSS libraries -->
      <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
      <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
      <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
      <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
      <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">
      <!-- Favicon icon -->
      <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon" >
      <!-- Google fonts -->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
      <!-- Custom Stylesheet -->
      <link type="text/css" rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
      <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

      <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-GY11NNHJYC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-GY11NNHJYC');
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11024530852"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11024530852');
</script>


   </head>

   <body id="top">
          <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fill your details to know more</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="contact-from">
                                             
                                             <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">
                                                <div class="form-group name">
                                                   <input type="text" name="name" class="form-control" required placeholder="Name">
                                                </div>
                                                <div class="form-group email">
                                                   <input type="email" name="email" class="form-control" required placeholder="Email">
                                                </div>
                                                <div class="form-group subject">
                                                   <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">
                                                </div>
                                                <div class="send-btn text-center">
                                                   <input type="submit" value="submit" class="btn btn-color btn-md btn-block">
                                                </div>
                                             </form>
                                          </div>
                  </div>
                  
                </div>
              </div>
            </div>
      <!-- Google Tag Manager (noscript) -->
      <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TAGCODE"
         height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
      <!-- End Google Tag Manager (noscript) -->
      
      <!-- main header start -->
      <header class="main-header sticky-header header-with-top" id="main-header-2">
         <div class="container-fluid">
            <div class="row">
               <div class="col-12">
                  <nav class="navbar navbar-expand-lg navbar-light rounded">
                     <a class="navbar-brand logo navbar-brand d-flex mr-auto" href="index.php">
                     <img src="assets/img/logos/black-logo.png" alt="logo">
                     </a>
                     <div class="nav-item call call-button" id="mobileshow">
                              <a class="nav-link single" href="tel:+91-7888488788"><i class="flaticon-headset"></i>+91 - 7888 488 788</a>
                           </div>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="fa fa-bars"></span>
                     </button>
                     <div class="navbar-collapse collapse w-100" id="navbar">
                        <ul class="navbar-nav ml-auto">
                           <li class="nav-item">
                              <a class="nav-link single" href="#top">Home</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#overview">Overview</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#amenities">Amenities</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#site-plan">Site plan</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#floor-plan">Floor Plan</a>
                           </li>
                           

                           <li class="nav-item">
                              <a class="nav-link single" href="#gallery">Gallery</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#pricing">Pricing</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link single" href="#contact">Contact</a>
                           </li>
                           <li class="nav-item call call-button" id="webshow">
                              <a class="nav-link single" href="tel:+91-7888488788"><i class="flaticon-headset"></i>+91 - 7888 488 788</a>
                           </li>
                        </ul>
                     </div>
                  </nav>
               </div>
            </div>
         </div>
      </header>
      <!-- main header end -->
      <!-- Banner start -->
      <div class="banner" id="banner">
         <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">
               <div class="carousel-item active item-bg banner-max-height">
                  <img class="d-block w-100 h-100" src="assets/img/banner/img-1.png" alt="banner">
                  <div class="carousel-caption banner-slider-inner d-flex h-100">
                     <div class="carousel-content container">
                        <div class="row">
                           <div class="col-lg-6 col-md-12 align-self-center">
                              <div class="text-l">
                                  
                              <span class="pro-status">Elan New Launch</span>
                                 <h1>Luxury Residential Project </h1>
                                 <p>Starting with 3.6Cr</p>
                                 <p>Dwarka Expressway Sector 106, Gurgaon</p>
                                 <p>Booking Amount ₹15 Lakh</p>
                                 <p>3,4 & 5 BHK Luxury Apartments</p>
                                 <a href="tel:+91-7888488788" class="btn btn-color btn-md r-btn">Call us</a>
                                 
                                 <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md r-btn">Download Brochure</a>
                              </div>
                              <div class="contact-from cf-2 cf-3">
                                <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                       <div class="col-lg-3 col-md-6 pad-10">
                                          <div class="form-group name">
                                             <input type="text" name="name" class="form-control" required placeholder="Name">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 pad-10">
                                          <div class="form-group email">
                                             <input type="email" name="email" class="form-control" required placeholder="Email">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 pad-10">
                                          <div class="form-group subject">
                                             <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">
                                          </div>
                                       </div>
                                       <div class="col-lg-3 col-md-6 pad-10">
                                          <div class="send-btn text-center">
                                              <input type="submit" value="Get Best Deals - Enquire Now" class="btn btn-color btn-md btn-block">
                                          </div>
                                       </div>
                                    </div>
                                 </form>
                              </div>
                           </div>
                           <div class="col-lg-6 col-md-12 cf-4">
                              <div class="contact-from">
                                 <h3>Enquire Now for Exclusive Offers</h3>
                                 <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group name">
                                       <input type="text" name="name" class="form-control" required placeholder="Name">
                                    </div>
                                    <div class="form-group email">
                                       <input type="email" name="email" class="form-control" required placeholder="Email">
                                    </div>
                                    <div class="form-group subject">
                                       <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">
                                    </div>
                                    <div class="send-btn text-center">
                                       <input type="submit" value="Get Best Deals - Enquire Now" class="btn btn-color btn-md btn-block">
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               
               
               <!--<div class="carousel-item item-bg banner-max-height">-->
               <!--   <img class="d-block w-100 h-100" src="assets/img/banner/2.jpg" alt="banner">-->
               <!--   <div class="carousel-caption banner-slider-inner d-flex h-100">-->
               <!--      <div class="carousel-content container">-->
               <!--         <div class="row">-->
               <!--            <div class="col-lg-6 col-md-12 align-self-center">-->
               <!--               <div class="text-l">-->
               <!--                  <h1>Luxury Residential Project</h1>-->
               <!--                  <p>Dwarka Expressway Sector 106, Gurgaon</p>-->
               <!--                  <p>Booking Amount ₹15 Lakh</p>-->
               <!--                  <p>3,4 & 5 BHK Luxury Apartments</p>-->
               <!--                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md r-btn">Call us</a>-->
                                 
               <!--                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md r-btn">Download Brochure</a>-->
               <!--               </div>-->
               <!--               <div class="contact-from cf-2 cf-3">-->
               <!--                  <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">-->
               <!--                     <div class="row">-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group name">-->
               <!--                              <input type="text" name="name" class="form-control" required placeholder="Name">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group email">-->
               <!--                              <input type="email" name="email" class="form-control" required placeholder="Email">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group subject">-->
               <!--                              <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="send-btn text-center">-->
               <!--                              <input type="submit" class="btn btn-color btn-md btn-block" value="Send a message">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                     </div>-->
               <!--                  </form>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="col-lg-6 col-md-12 cf-4">-->
               <!--               <div class="contact-from">-->
               <!--                  <h3>Enquire now for exclusive offers</h3>-->
               <!--                  <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">-->
               <!--                     <div class="form-group name">-->
               <!--                        <input type="text" name="name" class="form-control" required placeholder="Name">-->
               <!--                     </div>-->
               <!--                     <div class="form-group email">-->
               <!--                        <input type="email" name="email" class="form-control" required placeholder="Email">-->
               <!--                     </div>-->
               <!--                     <div class="form-group subject">-->
               <!--                        <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">-->
               <!--                     </div>-->
               <!--                     <div class="send-btn text-center">-->
               <!--                        <input type="submit" class="btn btn-color btn-md btn-block" value="Send a message">-->
               <!--                     </div>-->
               <!--                  </form>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               
               <!--<div class="carousel-item item-bg banner-max-height">-->
               <!--   <img class="d-block w-100 h-100" src="assets/img/banner/1.jpg" alt="banner">-->
               <!--   <div class="carousel-caption banner-slider-inner d-flex h-100">-->
               <!--      <div class="carousel-content container">-->
               <!--         <div class="row">-->
               <!--            <div class="col-lg-6 col-md-12 align-self-center">-->
               <!--               <div class="text-l">-->
               <!--                  <h1>Luxury Residential Project</h1>-->
               <!--                  <p>Dwarka Expressway Sector 106, Gurgaon</p>-->
               <!--                  <p>Booking Amount ₹15 Lakh</p>-->
               <!--                  <p>3,4 & 5 BHK Luxury Apartments</p>-->
               <!--                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md r-btn">Call us</a>-->
                                 
               <!--                  <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md r-btn">Download Brochure</a>-->
               <!--               </div>-->
               <!--               <div class="contact-from cf-2 cf-3">-->
               <!--                  <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">-->
               <!--                     <div class="row">-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group name">-->
               <!--                              <input type="text" name="name" class="form-control" required placeholder="Name">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group email">-->
               <!--                              <input type="email" name="email" class="form-control" required placeholder="Email">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="form-group subject">-->
               <!--                              <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="col-lg-3 col-md-6 pad-10">-->
               <!--                           <div class="send-btn text-center">-->
               <!--                              <input type="submit" class="btn btn-color btn-md btn-block" value="Send a message">-->
               <!--                           </div>-->
               <!--                        </div>-->
               <!--                     </div>-->
               <!--                  </form>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="col-lg-6 col-md-12 cf-4">-->
               <!--               <div class="contact-from">-->
               <!--                  <h3>Enquire now for exclusive offers</h3>-->
               <!--                  <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">-->
               <!--                     <div class="form-group name">-->
               <!--                        <input type="text" name="name" class="form-control" required placeholder="Name">-->
               <!--                     </div>-->
               <!--                     <div class="form-group email">-->
               <!--                        <input type="email" name="email" class="form-control" required placeholder="Email">-->
               <!--                     </div>-->
               <!--                     <div class="form-group subject">-->
               <!--                        <input type="text" name="phone_number" class="form-control" required placeholder="Phone Number">-->
               <!--                     </div>-->
               <!--                     <div class="send-btn text-center">-->
               <!--                        <input type="submit" class="btn btn-color btn-md btn-block" value="Send a message">-->
               <!--                     </div>-->
               <!--                  </form>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
            </div>
         </div>
      </div>
      <!-- banner end -->
      <!-- Why choose us start -->
      <div class="why-choose-us">
         <div class="container">
            <div class="why-choose-us-inner">
               <div class="row">
                  <div class="col-lg-12 col-md-12 wow_ fadeInLeft delay-04s">
                     <div class="media service-info-2" data-toggle="modal" data-target="#exampleModal">
                        <div class="media-body">
                           <h4>Elan New Launch Luxury<br>Residential Project</h4>
                           <p>3,4 & 5 BHK Luxury Apartments, Dwarka Expressway Sector 106, Gurgaon</p>
                           
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Why choose us end -->
      <!-- About property start -->
      <div class="featured-property content-area bg-grea" id="overview">
         <div class="container">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1>Elan New Launch Sector 106 Gurgaon</h1>
               <p>The Elan Group is launching its new high rise project and a commercial in Sector -106, bang on Dwarka expressway Gurugram. This project is planned on approx. 40 acres offering 3, 4 & 5 Bedroom fully done up apartments and penthouses, as well as a high end retail mall. It will be one of its kind ultra luxury residential with high end specifications, lots of greenery, themed gardens, high end club and much more. The commercial will also be one of the largest in the belt spread over 10 acres facing the Dwarka expressway and 60mtr road.</p>
               
               <div class="panel-group">
                   <div class="panel panel-default">
                      <div class="panel-heading">
                         <h4 class="panel-title">
                            <a data-toggle="collapse" href="#collapse1">Residental Project <span class="glyphicon glyphicon-collapse-down"></span></a>
                         </h4>
                      </div>
                      <div id="collapse1" class="panel-collapse collapse">
                         <div class="panel-body">
                            <p>What's better than a house built by a renowned and trusted architect? An a-list of amenities awaits residents at Elan Sector 106 Gurugram, the latest development from the Elan Group. The developer's planning, consideration, and execution are the most critical aspects of the system, reflected in its stunning design. There are two and three-bedroom homes in the Elan New Launch Project in Sector 106 Gurugram, located close to the Dwarka Expressway. The rumored developer Elan Group is well-known for its high-quality commercial properties and unwavering reputation. To make your life easier, the Group provides first-class amenities and services.</p>
                            <p>Elan Group has completed three projects in Gurgaon and plans to build five more. Since the firm has sold more than 2 million square feet of commercial space, this will be its first residential project.</p>
                            <p>Luxurious apartments of various sizes are available as part of the project. Elan Sector 106 is the most OK open the door to securing a property that is a perfect fit for you. You'll be able to relax to your heart's content with all of your needs being met. You and your family will be better off in the long run if you go ahead with the enterprise. The development's proximity to the Dwarka Expressway makes it easy to get there.</p>
                            <p>Elan Sector 106 Dwarka Expressway, an excellent private complex in Gurgaon, is set on 30 acres adjacent to the Dwarka Expressway.</p>
                            <p>Elan Dwarka Expressway Gurgaon's residence has plenty of open space, which has been transformed into lush green nurseries for residents' enjoyment. These nurseries are an excellent area for nature darlings to rest and indulge in their time in peacefulness. You'll never run out of things to do in this complex's clubhouse, which features many indoor games and enjoyable exercises. There are some games available for residents at this property to keep them active and fit.</p>
                         </div>
                      </div>
                   </div>
                </div>
                
                
                <div class="panel-group">
   <div class="panel panel-default">
      <div class="panel-heading">
         <h4 class="panel-title">
            <a data-toggle="collapse" href="#collapse2">Commercial Project <span class="glyphicon glyphicon-collapse-down"></span></a>
         </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
         <div class="panel-body">
            <p>Elan Sector 106 is the best option if you're looking to open a shop space or want to make sure your business is profitable. If you wish to open a storefront or lease out your space, it's up to you. Elan Sector 106 Gurgaon On Dwarka Expressway, one of Gurgaon's most prominent land associations, will be launched. Famous modelers and planners' two-fold tall retail buildings are:
            </p>
            <p>
               - The project's highlights.<br>
               - Grade "A" office spaces.<br>
               - Dining.<br>
               - Entertainment options such as theatres and food courts.<br>
            </p>
            <p>These venues' innovative layout and well-thought-out design ensure the most efficient use of available space and provide clients with a unique shopping experience.</p>
            <p>One of the most prominent glass facades in Gurgaon, Elan Commercial Sector 106, is a visual feast for passersby. F &amp; B options at high-end restaurants and cafes include a wide range of cuisines worldwide. In high-end office facilities, expensive HVAC systems, fast lifts, and high-speed WiFi are all standard. Visitors and shops will make a lot of stops throughout their time together.</p>
            <p>The building's rectangular shape promotes transparency, while its modern design and glass façade entice visitors, resulting in a high volume of daily visits. ECP Dwarka Expressway responds to the vibrancy and vitality of Delhi's millennial city.</p>
            <p>With a well-organized roadway network, this commercial property is linked to some of the city's most important landmarks. It is a safe environment for the ecosystem because of its abundance of green areas. Being surrounded by urban areas and private centers with more than 10,000 households make Elan Gurgaon Sector-106 an excellent investment.</p>
            <p>Sector 106 of Gurgaon's Dwarka Expressway is the site of Elan Group's upcoming dazzling ultra-luxurious commercial complex. Elan Sector 106 Commercial Project, the city's newest hotspot for shopping, is surrounded by prestigious extravagant private projects, making it an ideal place for upscale shopping. Elan Upcoming Project In Sector 106 is a perfect site for shopaholics because of its current glass façade and luxurious amenities and its excellent rectangular outside perspective. You don't have to wait for electricity to be restored before you can go back to work, and it won't harm your benefactors either. Shopping, cinemas, and a food court are all available in the complex commercial areas.</p>
         </div>
      </div>
   </div>
</div>
            </div>
            <div class="button-to-connect">
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md btn-block">Know more</a>
            </div>
         </div>
      </div>
      <!-- About property end -->
      <!-- amenities start -->
      <div class="featured-property content-area content-area" id="amenities">
         <div class="container">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1 class="white-font">Amenities</h1>
               <p class="white-font">Find your freedom, without leaving home.</p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/organic_farming.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3>Organic Farming</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/equestrian_zone.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Equestrian Zone </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/pond.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Pond </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/mechanic.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Mechanic Area </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Open_Spaces.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Jurassic Park </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Pedestrian_Areas.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3>Senior citizen area/garden</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/swimming-pool.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Swimming Pool </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Kids_Space.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Kid's Beach Club </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Jogging_Track.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> 1 km Jogging Track </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Gymnasium.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Gymnasium </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Multi_cuisine_Restaurant.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Multi Cuisine Restaurant </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" data-scroll-reveal-initialized="true" data-scroll-reveal-complete="true">
                     <div class="image img-icon"><img src="assets/img/icons/Hassle_free_Parking.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3>Hassle-free Parking</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Multi_purpose_Hall.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Event Space </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Round_the_Clock_Security.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Round the Clock Security </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Dedicated_Maintenance_Team.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Dedicated Maintenance Team</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Sports_Community_Facilities.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Club House </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
              
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Outdoor_Gym.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Outdoor Gym</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Public_Area_Lighting.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Public Area Lighting</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Visitor_Monitoring_System.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Grand entrance and security gate </h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
                <div class="col-md-3 col-sm-3">
                  <div class="feature has-image" data-scroll-reveal="enter bottom and move 20px" >
                     <div class="image img-icon"><img src="assets/img/icons/Gazebo_Seating.png" alt=""></div>
                     <!--end image-->
                     <div class="description">
                        <h3> Covered floating cafe</h3>
                     </div>
                     <!--end description-->
                  </div>
                  <!--end feature-->
               </div>
               
               
            </div>
         </div>
      </div>
      <!-- Famenities end -->
      <!-- Site plan start -->
      <div class="agents content-area bg-grea" id="site-plan">
         <div class="container">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1>Our Site Plan</h1>
            </div>
            <div class="">
                <img src="assets/img/siteplan.jpg" class="img-fluid blur-img">
            </div>
            <div class="button-to-connect">
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md btn-block">Download Site Plan</a>
            </div>
         </div>
      </div>
      <!-- Site plan end -->
       <!-- Floor plan start -->
      <div class="agents content-area bg-grea" id="floor-plan">
         <div class="container">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1>Our Floor Plan</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/floor-plan1.jpg" class="img-fluid blur-img">
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/floor-plan2.jpg" class="img-fluid blur-img">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/img/floor-plan3.jpg" class="img-fluid blur-img">
                </div>
                <div class="col-lg-6">
                    <img src="assets/img/floor-plan4.jpg" class="img-fluid blur-img">
                </div>
            </div>
            <div class="button-to-connect">
                <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-color btn-md btn-block">Get More Details</a>
            </div>
         </div>
      </div>
      <!-- Floor plan end -->
      <!-- Gallery start -->
      <div class="gallery portfolio-area content-area-4 content-area-bottom-100" id="gallery">
         <div class="container-fluid">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1>Our Gallery</h1>
               
            </div>
            <div class="row wow_ fadeInUp delay-04s">
                <div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/1.png">
</div>
<div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/2.png">
</div>
<div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/3.png">
</div>
<div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/4.png">
</div>
<div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/5.png">
</div>
<div class="col-lg-4">
	<img class="img-fluid" src="assets/img/portfolio/6.png">
</div>









            </div>
         </div>
      </div>
      <!-- Gallery end -->
      <!-- Pricing tables start -->
      <div class="pricing-tables content-area bg-grea" id="pricing">
         <div class="container">
            <!-- Main title -->
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1 class="white-font">Price List of Elan 106 Gurgaon</h1>
               <p class="white-font">Booking Amount: 15 Lakh*.</p>
            </div>
            <div class="row">
               <div class="col-xl-4 col-lg-4 col-md-12 wow_ fadeInLeft delay-04s">
                  <div class="pricing-1 plan">
                     <div class="plan-header">
                        <h5 class="room_type">3 BHK</h5>
                        <p>Area</p>
                        <h5>2500 - 2800 Sq. Ft.</h5>
                     </div>
                     <div class="plan-list">
                        <div class="plan-button text-center">
                           <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline pricing-btn">Know More</a>
                        </div>
                     </div>
                  </div>
               </div>
              
               <div class="col-xl-4 col-lg-4 col-md-12 wow_ fadeInLeft delay-04s">
                  <div class="pricing-1 plan">
                     <div class="plan-header">
                        <h5 class="room_type">4 BHK</h5>
                        <p>Area</p>
                        <h5>3200 - 3700 Sq. Ft.</h5>
                     </div>
                     <div class="plan-list">
                        <div class="plan-button text-center">
                           <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline pricing-btn">Know More</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-12 wow_ fadeInLeft delay-04s">
                  <div class="pricing-1 plan">
                     <div class="plan-header">
                        <h5 class="room_type">5 BHK</h5>
                        <p>Area</p>
                        <h5>4200 - 4600 Sq. Ft.</h5>
                     </div>
                     <div class="plan-list">
                        <div class="plan-button text-center">
                           <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline pricing-btn">Know More</a>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
         </div>
      </div>
      <!-- Pricing tables end -->
      <!--location start-->
      <div class="location  content-area" id="location">
            <div class="container">
                <div class="row">
                    <!--<div class="col-md-12">-->
                    <!--    <h1 class="mx-md-auto text-center">Location Advantages</h1>-->
                    <!--    <p class="mx-md-auto text-center">Dwarka Expressway Sector 106, Gurgaon</p>-->
                    <!--</div>-->
                    <div class="main-title wow_ fadeInDown delay-04s">
                       <h1>Location Advantages of Elan 106 Gurgaon</h1>
                       <p>Booking Amount: 15 Lakh*.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <figure mb-0=""><img src="assets/img/map.jpg" alt="img" class="rounded img-fluid"></figure>
                    </div>
                    <div class="col-md-6">
                        <div class="block">
                            <!--<div class="icon"><svg width="43" height="44" viewBox="0 0 43 44" fill="none"-->
                            <!--        xmlns="http://www.w3.org/2000/svg">-->
                            <!--        <rect y="0.499817" width="43" height="43.0003" rx="5.37504"-->
                            <!--            fill="url(#paint0_linear_37_559)" />-->
                            <!--        <path-->
                            <!--            d="M33.1478 8.56244L22.5983 8.7825L8.24888 23.1416C8.00026 23.39 8.00048 23.793 8.24888 24.0417L19.4583 35.2511C19.7067 35.4997 20.1097 35.4997 20.3583 35.2511L34.7174 20.9017L34.9375 10.3522C34.9375 9.85961 34.8188 9.34342 34.4976 9.02228C34.1765 8.70113 33.6404 8.56165 33.1476 8.56232L33.1478 8.56244ZM30.1378 11.7623C30.5473 11.7623 30.9553 11.9199 31.2677 12.2323C31.8926 12.8572 31.8926 13.8675 31.2677 14.4922C30.6428 15.1171 29.6325 15.1171 29.0079 14.4922C28.3829 13.8673 28.3829 12.857 29.0079 12.2323C29.3203 11.9199 29.7282 11.7623 30.1378 11.7623H30.1378ZM21.1783 17.5218H25.3381C25.6762 17.5172 25.987 17.8236 25.987 18.1619C25.987 18.5 25.6761 18.8066 25.3381 18.802H23.4581C23.7167 19.174 23.9069 19.6094 23.9981 20.0818H25.3381C25.6762 20.0772 25.987 20.3836 25.987 20.7219C25.987 21.06 25.6762 21.3666 25.3381 21.362H23.9981C23.7207 22.8271 22.5127 23.9218 21.1784 23.9218H19.3684L23.1983 27.2716C23.4523 27.4915 23.4833 27.9226 23.2632 28.1766C23.0434 28.4306 22.6122 28.4616 22.3582 28.2415L17.2384 23.7618C17.0434 23.5989 16.9615 23.313 17.0405 23.0715C17.1195 22.83 17.3547 22.6479 17.6085 22.6319C18.785 22.6546 19.9915 22.6417 21.1783 22.6417C21.6559 22.6417 22.3754 22.1085 22.6582 21.3618H17.6584C17.3232 21.3774 17.0041 21.0868 16.9882 20.7518C16.9726 20.4166 17.2632 20.0975 17.5984 20.0819C19.2794 20.0816 20.9728 20.0819 22.6582 20.0819C22.3754 19.3351 21.6559 18.802 21.1783 18.802H17.6585C17.3235 18.8413 16.9827 18.5721 16.9434 18.2369C16.9041 17.9019 17.1732 17.5611 17.5085 17.5218"-->
                            <!--            fill="white" />-->
                            <!--        <defs>-->
                            <!--            <linearGradient id="paint0_linear_37_559" x1="-8.06256" y1="-1.51582" x2="53.7504"-->
                            <!--                y2="52.9065" gradientUnits="userSpaceOnUse">-->
                            <!--                <stop stop-color="#2350FF" />-->
                            <!--                <stop offset="1" stop-color="#AB57FF" />-->
                            <!--            </linearGradient>-->
                            <!--        </defs>-->
                            <!--    </svg>-->
                            <!--</div>-->
                            <div class="icon"><img src="image/l1.png" alt=""></div>
                            <div class="text">
                                <h2>IGI Airport</h2>
                                <span></span>
                                <p>7 Min*</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="icon"><img src="image/l2.png" alt=""></div>
                            <div class="text">
                                <h2>Asia's Largest Convention Center IICC</h2>
                                <span></span>
                                <p>3 Min*</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="icon"><img src="image/l3.png" alt=""></div>
                            <div class="text">
                                <h2>Upcoming Diplomatic Enclave</h2>
                                <span></span>
                                <p>5 min*</p>
                            </div>
                        </div>
                        <div class="block">
                            <div class="icon"><img src="image/l4.png" alt=""></div>
                            <div class="text">
                                <h2>10+ Five Star Hotels</h2>
                                <span></span>
                                <p>In close proximity</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
      <!--location end-->
      <!-- Contact start -->
      <div class="contact content-area-2" id="contact">
         <div class="container">
            <div class="main-title wow_ fadeInDown delay-04s">
               <h1 class="white-font">Contact Us</h1>
               <p class="white-font">Get in Touch with us And Book your Site Visit Today</p>
            </div>
            <div class="row">
               <div class="col-lg-7 wow_ fadeInLeft delay-04s">
                  <form action="<?php echo $_SERVER['REQUEST_URI'];?>" method="POST" enctype="multipart/form-data">
                     <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group name">
                              <input type="text" name="name" class="form-control" required placeholder="Name">
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                           <div class="form-group email">
                              <input type="email" name="email" class="form-control" required placeholder="Email">
                           </div>
                        </div>
                       
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group number">
                              <input type="text" name="phone" class="form-control" required placeholder="Number">
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="form-group message">
                              <textarea class="form-control" required name="message" placeholder="Write message"></textarea>
                           </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                           <div class="send-btn text-center">
                              <button type="submit" class="btn btn-color btn-md btn-message button-contact">Submit</button>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-lg-5 wow_ fadeInRight delay-04s">
                  <div class="contact-info">
                     <div class="media mb-25">
                        <i class="flaticon-phone"></i>
                        <div class="">
                           <h5>Phone:</h5>
                           <p><a href="tel:+91-7888488788" class="phone"><strong>+91 - 7888 488 788</strong></a></p>
                        </div>
                     </div>
                   
                     <div class="media mb-25">
                        <i class="flaticon-internet"></i>
                        <div class="">
                           <h5>Location:</h5>
                           <p><a href="#">Dwarka expressway, Sector 106, Gurgaon</a></p>
                        </div>
                     </div>
                     
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Contact end -->
      <!-- Footer start -->
      <div class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 text-center">
                  <p>This is not the official website of developer, it belongs to the authorised channel partner for information & marketing purposes only. All rights for logo & images are reserved by the developer. By using or accessing this website you agree with the disclaimer without any limitation. By accessing this website, the viewer confirms that the information including brochures and marketing collaterals on this website are solely for informational purposes only, and the viewer has not relied on this information for making any booking/purchase in any project of the company. <br>Copyright © Elan Group</p>
                  
               </div>
               <div class="col-lg-12 col-md-12 text-center">
                  <ul class="social-list clearfix">
                     <li><a href="https://www.facebook.com/ULTRALuxuryAppartments" class="facebook"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="https://instagram.com/infraluxury" class="instagram"  target="_blank"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="https://www.linkedin.com/company/ultra-luxury-appartments/" class="linkedin" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
        <a  class="whats-app" href="https://wa.link/hshql6" target="_blank">
            <i class="fa fa-whatsapp my-float"></i>
        </a>
      <!-- Footer end -->
      <!-- External JS libraries -->
      <script src="assets/js/jquery-2.2.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/slick.min.js"></script>
      <script src="assets/js/jquery.magnific-popup.min.js"></script>
      <script src="assets/js/jquery.filterizr.js"></script>
      <script src="assets/js/wow.min.js"></script>
      <script src="assets/js/jquery.scrollUp.js"></script>
      <script src="assets/js/particles.min.js"></script>
      <script src="assets/js/typed.min.js"></script>
      <script src="assets/js/ie-emulation-modes-warning.js"></script>
      <!-- Custom JS Script -->
      <script  src="assets/js/app.js"></script>
      
      
   </body>
  
</html>