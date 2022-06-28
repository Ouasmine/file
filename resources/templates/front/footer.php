<?php 

   $dbHost = "localhost";
   $dbUser = "root";
   $dbPassword = "";
   $dbName = "upo";

   try {
   $dsn = "mysql:host=" . $dbHost . ";dbname=" . $dbName;
   $pdo = new PDO($dsn, $dbUser, $dbPassword);
   } catch(PDOException $e) {
   echo "DB Connection Failed: " . $e->getMessage();
   }

   if($_SERVER['REQUEST_METHOD'] == 'POST') {
   // $email = $_POST['email'];


   if(empty($email) ) {
      $status = "Please enter a valid email.";
   } else {

      $sql = "INSERT INTO newsletter (email) VALUES (:email)";

      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['email' => $email]);
      header("location: ./?subscribed=true");
      $email = "";

      }
   }


?>
         
         <!-- footer area start -->
         <footer>
            <div class="footer__area">

               <div class="footer__top grey-bg-4 pt-95 pb-45">
                  <div class="container">
                     <div class="row">

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                           <div class="footer__widget footer__widget-2 footer-col-2-1 mb-50">
                              <div class="footer__logo">
                                 <div class="logo">
                                    <a href="/">
                                       <img src="assets/img/logo/logo.png" alt="">
                                    </a>
                                 </div>
                              </div>
                              <div class="footer__widget-content">
                                 <div class="footer__widget-info">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit. Nunc maximus, nulla utlaoki comm odo sagittis.</p>
                                    <div class="footer__social">
                                       <h4>Follow Us</h4>

                                       <ul>
                                          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                           <div class="footer__widget footer__widget-2 mb-50 footer-col-2-2">
                              <h3 class="footer__widget-title">Explore</h3>
                              <div class="footer__widget-content">
                                 <ul>
                                    <li><a href="./#testimonials">Testimonials</a></li>
                                    <li><a href="./#faqaccordion">FAQ's</a></li>
                                    <li><a href="blog">Blog</a></li>
                                    <li><a href="events">Events</a></li>
                                    <li><a href="contact">Contact us</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-3 col-sm-5">
                           <div class="footer__widget footer__widget-2 mb-50 footer-col-2-3">
                              <h3 class="footer__widget-title">Links</h3>
                              <div class="footer__widget-content">
                                 <ul>
                                    <li><a href="./#partners">Partners</a></li>
                                    <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#start_teaching_modal">Become an Instructor</a></li>
                                    <li><a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#get_notes">Get your notes</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>

                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-7">
                           <div class="footer__widget footer__widget-2 footer-col-2-4 mb-50">
                              <h3 class="footer__widget-title">Sign up for our newsletter</h3>
                              <div class="footer__subscribe">
                                 <p>Receive weekly newsletter with educational materials, popular books and much more!</p>
                                 <form action="" method="post">
                                    <div class="footer__subscribe-input">
                                       <input name="email" required="required" type="email" placeholder="Email">
                                       <button name="newsletter" type="submit" class="tp-btn-subscribe">Subscribe</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>

               <div class="footer__bottom grey-bg-4">
                  <div class="container">
                     <div class="footer__bottom-inner">
                        <div class="row">
                           <div class="col-xxl-12">
                              <div class="footer__copyright text-center">
                                 <p>© 2022 UPO. All Rights Reserved</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </footer>
         <!-- footer area end -->