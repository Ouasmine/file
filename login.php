<?php require_once('./resources/config.php'); ?>

<?php include(TEMPLATE_FRONT . DS . "styles.php") ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>


   <body>

        <?php include(TEMPLATE_FRONT . DS . "preloader.php") ?>

      <main>


         <!-- sign up area start -->
         <section class="signup__area p-relative z-index-1 pt-100 pb-145">
            <div class="sign__shape">
               <img class="man-1" src="assets/img/icon/sign/man-1.png" alt="">
               <img class="man-2" src="assets/img/icon/sign/man-2.png" alt="">
               <img class="circle" src="assets/img/icon/sign/circle.png" alt="">
               <img class="zigzag" src="assets/img/icon/sign/zigzag.png" alt="">
               <img class="dot" src="assets/img/icon/sign/dot.png" alt="">
               <img class="bg" src="assets/img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                     <div class="section__title-wrapper text-center mb-55">
                        <h2 class="section__title">Sign in to <br>  recharge direct.</h2>
                        <p>it you don't have an account you can</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                     <div class="sign__wrapper white-bg">
                        <div class="sign__form">
                           <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' method="POST">   
                           <!-- /*/sql injection/*// -->
                            <?php login_users()?>

                              <div class="sign__input-wrapper mb-25">
                                 <h5>Nom d'utilisateur :</h5>
                                 <div class="sign__input">
                                    <input type="username" name="username" placeholder="Nom d'utilisateur" required="required">
                                    <i class="fal fa-envelope"></i>
                                 </div>
                              </div>

                              <div class="sign__input-wrapper mb-10">
                                 <h5>Password</h5>
                                 <div class="sign__input">
                                    <input type="password" name="password" placeholder="Mot de passe" required="required">
                                    <i class="fal fa-lock"></i>
                                 </div>
                              </div>

                              <button type="submit" name="login" class="tp-btn-green mt-20 w-100"> <span></span> Sign In</button>
                              
                           </form>

                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- sign up area end -->


      </main>

      <?php include(TEMPLATE_FRONT . DS . "scripts.php") ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
        <script>
            // toastr.success('We do have the Kapua suite available.', {closeButton: true})
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
                }
        </script>

