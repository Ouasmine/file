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
                        <h3 class="breadcrumb__title">Event</h3>
                        <div class="breadcrumb__list">
                           <span><a href="/">Home</a></span>
                           <span class="dvdr"><i class="fa-regular fa-angle-right"></i></span>
                           <span>Event</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- breadcrumb area end -->

         <section class="event__area pt-115 pb-150">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-12">
                        <div class="section__title-wrapper-2 text-center mb-60">
                        <span class="section__title-pre-2">Featured Courses</span>
                        <h3 class="section__title-2">Join our upcoming event</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-12">
                        <?php display_events_home(); ?>
                    </div>
                </div>
            </div>
        </section>

        <?php include(TEMPLATE_FRONT . DS . "become_prof.php") ?>
        <?php include(TEMPLATE_FRONT . DS . "admission.php") ?>
        <?php include(TEMPLATE_FRONT . DS . "get_notes.php") ?>
        

      </main>

      <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
<?php include(TEMPLATE_FRONT . DS . "scripts.php") ?>