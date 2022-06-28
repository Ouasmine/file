<?php require_once('./resources/config.php'); ?>

<?php include(TEMPLATE_FRONT . DS . "styles.php") ?>

<body>
   
   
      <?php include(TEMPLATE_FRONT . DS . "preloader.php") ?>
      <?php include(TEMPLATE_FRONT . DS . "header-pages.php") ?>
      <?php include(TEMPLATE_FRONT . DS . "offcanvas.php") ?>

      <main>

         <!-- breadcrumb area start -->
         <section class="breadcrumb__area include-bg pt-150 pb-150 breadcrumb__overlay" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-12">
                     <div class="breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="breadcrumb__title">Contact</h3>
                        <div class="breadcrumb__list">
                           <span><a href="/">Home</a></span>
                           <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                           <span>Contact</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <!-- contact area start -->
         <section class="contact__area pt-115 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-xxl-7 col-xl-7 col-lg-6">
                     <div class="contact__wrapper">
                        <div class="section__title-wrapper mb-40">
                           <h2 class="section__title">Get in<span class="yellow-bg yellow-bg-big"> touch<img src="assets/img/shape/yellow-bg.png" alt=""></span></h2>
                           <p>Have a question or just want to say hi? We'd love to hear from you.</p>
                        </div>
                        <div class="contact__form">
                           <form action="" method="post">
                              <div class="row">

                                 <div class="col-xxl-12 col-xl-12 col-md-12">
                                    <div class="contact__form-input">
                                       <input type="text" name="full_name" placeholder="Your Full name" required>
                                    </div>
                                 </div>

                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="text" name="phone" placeholder="Your phone" required>
                                    </div>
                                 </div>

                                 <div class="col-xxl-6 col-xl-6 col-md-6">
                                    <div class="contact__form-input">
                                       <input type="email" name="email" placeholder="Your email" required>
                                    </div>
                                 </div>

                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <input type="text" name="subjects" placeholder="Subject" required>
                                    </div>
                                 </div>

                                 <div class="col-xxl-12">
                                    <div class="contact__form-input">
                                       <textarea name="comments" placeholder="Enter your message" required></textarea>
                                    </div>
                                 </div>

                                 <div class="col-xxl-12">
                                    <div class="contact__btn">
                                       <button name="submit" type="submit" class="tp-btn tp-btn-green">Send your message</button>
                                    </div>
                                 </div>

                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-4 offset-xxl-1 col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                     <div class="contact__info white-bg p-relative z-index-1">
                        <div class="contact__shape">
                           <img class="contact-shape-1" src="assets/img/contact/contact-shape-1.png" alt="">
                           <img class="contact-shape-2" src="assets/img/contact/contact-shape-2.png" alt="">
                           <img class="contact-shape-3" src="assets/img/contact/contact-shape-3.png" alt="">
                        </div>
                        <div class="contact__info-inner white-bg">
                           <ul>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="map" viewBox="0 0 24 24">
                                          <path class="st0" d="M21,10c0,7-9,13-9,13s-9-6-9-13c0-5,4-9,9-9S21,5,21,10z"/>
                                          <circle class="st0" cx="12" cy="10" r="3"/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>New York Office</h4>
                                       <p><a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Maypole Crescent 70-80 Upper St Norwich NR2 1LT</a></p>
   
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="mail" viewBox="0 0 24 24">
                                          <path class="st0" d="M4,4h16c1.1,0,2,0.9,2,2v12c0,1.1-0.9,2-2,2H4c-1.1,0-2-0.9-2-2V6C2,4.9,2.9,4,4,4z"/>
                                          <polyline class="st0" points="22,6 12,13 2,6 "/>
                                       </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Email us directly</h4>
                                       <p><a href="mailto:mohamedouasmine@gmail.com"><span>contact@upo.com</span></a></p>
                                    </div>
                                 </div>
                              </li>
                              <li>
                                 <div class="contact__info-item d-flex align-items-start mb-35">
                                    <div class="contact__info-icon mr-15">
                                       <svg class="call" viewBox="0 0 24 24">
                                          <path class="st0" d="M22,16.9v3c0,1.1-0.9,2-2,2c-0.1,0-0.1,0-0.2,0c-3.1-0.3-6-1.4-8.6-3.1c-2.4-1.5-4.5-3.6-6-6  c-1.7-2.6-2.7-5.6-3.1-8.7C2,3.1,2.8,2.1,3.9,2C4,2,4.1,2,4.1,2h3c1,0,1.9,0.7,2,1.7c0.1,1,0.4,1.9,0.7,2.8c0.3,0.7,0.1,1.6-0.4,2.1  L8.1,9.9c1.4,2.5,3.5,4.6,6,6l1.3-1.3c0.6-0.5,1.4-0.7,2.1-0.4c0.9,0.3,1.8,0.6,2.8,0.7C21.3,15,22,15.9,22,16.9z"/>
                                          </svg>
                                    </div>
                                    <div class="contact__info-text">
                                       <h4>Phone</h4>
                                       <p><a href="tel:+(426)-742-26-44">+212 635 74 43 67</a></p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                           <div class="contact__social pl-30">
                              <h4>Follow Us</h4>
                              <ul>
                                 <li><a href="" class="fb" ><i class="fa-brands fa-facebook-f"></i></a></li>
                                 <li><a href="https://www.linkedin.com/in/mohammed-ouasmine-ab9164166//" class="tw" ><i class="fa-brands fa-linkedin-in"></i></a></li>
                                 <li><a href="https://twitter.com/MohamedOUASMIN1" class="fb" ><i class="fa-brands fa-twitter"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact area end -->
         

         <!-- contact info area start -->
         <section class="contact__area grey-bg-2 pt-120 pb-90 p-relative fix">
            <div class="contact__shape">
               <img class="contact-shape-5" src="assets/img/contact/contact-shape-5.png" alt="">
               <img class="contact-shape-4" src="assets/img/contact/contact-shape-4.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-1 col-lg-5 offset-lg-1 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                              <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M14.0801 0C8.84004 0 4.58002 4.26003 4.58002 9.50006C4.58002 14.6401 8.60004 18.8001 13.8401 18.9801C14.0001 18.9601 14.1601 18.9601 14.2801 18.9801C14.3201 18.9801 14.3401 18.9801 14.3801 18.9801C14.4001 18.9801 14.4001 18.9801 14.4201 18.9801C19.5401 18.8001 23.5601 14.6401 23.5801 9.50006C23.5801 4.26003 19.3201 0 14.0801 0Z" fill="#192A88"></path>
                                 <path d="M24.2401 24.2998C18.6601 20.5798 9.56006 20.5798 3.94002 24.2998C1.40001 25.9998 0 28.2998 0 30.7598C0 33.2198 1.40001 35.4998 3.92002 37.1799C6.72004 39.0599 10.4001 39.9999 14.0801 39.9999C17.7601 39.9999 21.4401 39.0599 24.2401 37.1799C26.7602 35.4798 28.1602 33.1998 28.1602 30.7198C28.1402 28.2598 26.7602 25.9798 24.2401 24.2998Z" fill="#192A88"></path>
                                 <path d="M35.0602 10.6802C35.3802 14.5603 32.6202 17.9603 28.8002 18.4203C28.7802 18.4203 28.7802 18.4203 28.7602 18.4203H28.7002C28.5802 18.4203 28.4602 18.4203 28.3602 18.4603C26.4202 18.5603 24.6402 17.9403 23.3002 16.8003C25.3602 14.9603 26.5402 12.2002 26.3002 9.20023C26.1602 7.58022 25.6002 6.10021 24.7602 4.8402C25.5202 4.4602 26.4002 4.2202 27.3002 4.1402C31.2202 3.8002 34.7202 6.72021 35.0602 10.6802Z" fill="#FF7648"></path>
                                 <path d="M39.0602 29.1799C38.9002 31.1199 37.6602 32.7999 35.5802 33.9399C33.5802 35.0399 31.0602 35.5599 28.5602 35.4999C30.0002 34.1999 30.8402 32.5799 31.0002 30.8599C31.2002 28.3799 30.0202 25.9998 27.6601 24.0998C26.3201 23.0398 24.7601 22.1998 23.0601 21.5798C27.4801 20.2998 33.0402 21.1598 36.4602 23.9198C38.3002 25.3998 39.2402 27.2599 39.0602 29.1799Z" fill="#FF7648"></path>
                                 </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Become an Instructor</h3>
                           <p>Teach what you love. Learned gives you neccessary tools to become an instructor.</p>
                           <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#start_teaching_modal" class="tp-btn tp-btn-border">Visit Documentation</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-xxl-5 col-xl-5  col-lg-5 col-md-6">
                     <div class="contact__item text-center mb-30 transition-3 white-bg">
                        <div class="contact__icon d-flex justify-content-center align-items-end">
                              <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <path d="M32.2575 29.977C33.5417 29.1336 35.2283 30.0536 35.2283 31.587V34.0595C35.2283 36.4936 33.3308 39.1003 31.05 39.867L24.9358 41.8986C23.8625 42.2628 22.1183 42.2628 21.0642 41.8986L14.95 39.867C12.65 39.1003 10.7717 36.4936 10.7717 34.0595V31.5678C10.7717 30.0536 12.4583 29.1336 13.7233 29.9578L17.6717 32.5261C19.1858 33.542 21.1025 34.0403 23.0192 34.0403C24.9358 34.0403 26.8525 33.542 28.3667 32.5261L32.2575 29.977Z" fill="#FF7648"></path>
                                 <path d="M38.295 12.3817L26.8142 4.84924C24.7442 3.4884 21.3325 3.4884 19.2625 4.84924L7.72416 12.3817C4.02499 14.7776 4.02499 20.2017 7.72416 22.6167L10.7908 24.6101L19.2625 30.1301C21.3325 31.4909 24.7442 31.4909 26.8142 30.1301L35.2283 24.6101L37.8542 22.8851V28.7501C37.8542 29.5359 38.5058 30.1876 39.2917 30.1876C40.0775 30.1876 40.7292 29.5359 40.7292 28.7501V19.3201C41.4958 16.8476 40.71 13.9726 38.295 12.3817Z" fill="#192A88"></path>
                                 </svg>
                        </div>
                        <div class="contact__content">
                           <h3 class="contact__title">Apply for Admission</h3>
                           <p>Course completed? Then its time apply the certificate Do it in simplesteps with Learned.</p>
                           <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#start_learning_modal" class="tp-btn tp-btn-border">Send a Ticket</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- contact info area end -->

         <?php include(TEMPLATE_FRONT . DS . "become_prof.php") ?>
        <?php include(TEMPLATE_FRONT . DS . "admission.php") ?>
        <?php include(TEMPLATE_FRONT . DS . "get_notes.php") ?>

      </main>


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

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
   $full_name = $_POST['full_name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $subjects = $_POST['subjects'];
   $comments = $_POST['comments'];


   if(empty($full_name) || empty($email) || empty($phone) || empty($subjects) || empty($comments) ) {
      set_message('error','All fields are compulsory.');
   } else {
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      set_message('error','Please enter a valid email');
      } else {

      $sql = "INSERT INTO contact (full_name, email, subjects, phone, comments) VALUES (:full_name, :email, :subjects, :phone, :comments)";

      $stmt = $pdo->prepare($sql);
      
      $stmt->execute(['full_name' => $full_name, 'email' => $email, 'subjects' => $subjects, 'phone' => $phone, 'comments' => $comments]);
      header("location: contact?sent=true");

      $full_name = "";
      $email = "";
      $subjects = "";
      $phone = "";
      $comments = "";
      }
   }
}


?>



<?php include(TEMPLATE_FRONT . DS . "scripts.php") ?>