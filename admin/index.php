<?php 
require_once('../resources/config.php');
include("user_auth.php");
include(TEMPLATE_BACK . DS . "head.php");
?>

<?php include(TEMPLATE_BACK . DS . "nav.php") ?>

<div class="app-main">
    <?php include(TEMPLATE_BACK . DS . "sidebar.php") ?>
    <div class="app-main__outer">

        <?php 
            $access_admin = 1;
            
        if($_SERVER['REQUEST_URI'] == "/admin/" || $_SERVER['REQUEST_URI'] == "/admin/index?loginSuccess" || $_SERVER['REQUEST_URI'] == "/admin/index"){
            $_SESSION['access'] == $access_admin ? include(TEMPLATE_BACK . DS . "dashboard.php"):  include(TEMPLATE_BACK . DS . "notAuth.php") ;
        }

        // Users requests check
        if(isset($_GET['add_user'])){  
            $_SESSION['access'] == $access_admin ?  include(TEMPLATE_BACK . DS . "users/add_user.php"):  include(TEMPLATE_BACK . DS . "notAuth.php") ;
        }
        if(isset($_GET['manage_users'])){
            $_SESSION['access'] == $access_admin ?  include(TEMPLATE_BACK . DS . "users/manage_users.php"):  include(TEMPLATE_BACK . DS . "notAuth.php") ;
        }
        if(isset($_GET['edit_user'])){
            $_SESSION['access'] == $access_admin ?  include(TEMPLATE_BACK . DS . "users/edit_user.php"):  include(TEMPLATE_BACK . DS . "notAuth.php") ;
        }
        if(isset($_GET['change_pass'])){
            include(TEMPLATE_BACK . DS . "users/change_password.php");
        }

        // FAQ requests
        if(isset($_GET['create_faq'])){
            $_SESSION['access'] == $access_admin  ? include(TEMPLATE_BACK . DS . "faq/create_faq.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['manage_faq'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "faq/manage_faq.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['edit_faq'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "faq/edit_faq.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }


        // events requests
        if(isset($_GET['create_event'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "events/create_event.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['manage_events'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "events/manage_events.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['edit_event'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "events/edit_event.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // students requests
        if(isset($_GET['create_student'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "students/create_student.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['manage_students'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "students/manage_students.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['edit_student'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "students/edit_student.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['edit_notes'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "students/edit_notes.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // testimonials requests
        if(isset($_GET['create_testimonials'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "testimonials/create_testimonials.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['manage_testimonials'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "testimonials/manage_testimonials.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        if(isset($_GET['edit_testimonials'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "testimonials/edit_testimonials.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
         
        // counter requests
        if(isset($_GET['manage_count'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "counter/manage_count.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_counter'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "counter/edit_counter.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // Partners requests
        if(isset($_GET['create_partner'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "partners/create_partner.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['manage_partner'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "partners/manage_partner.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_partner'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "partners/edit_partner.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }


        // Team requests
        if(isset($_GET['create_team'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "team/create_team.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['manage_team'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "team/manage_team.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_team'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "team/edit_team.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // Mailbox requests
        if(isset($_GET['manage_contact'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "contact/manage_contact.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
         }
        if(isset($_GET['manage_admissions'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "contact/manage_admissions.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
         }
        if(isset($_GET['manage_becomeInstructor'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "contact/manage_becomeInstructor.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
         }
        if(isset($_GET['view_message'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "contact/view_message.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
         }


                 // Posts & Categories requests
        if(isset($_GET['create_post'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/create_post.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['manage_post'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/manage_post.php") :  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_post'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/edit_post.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['create_categorie'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/create_categorie.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['manage_categorie'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/manage_categorie.php") :  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_categorie'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "posts/edit_categorie.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }


        // Subscribers requests
        if(isset($_GET['manage_subsribers'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "newsletter/manage_subsribers.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // Start Project requests
        if(isset($_GET['manage_start_project'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "start_project/manage_start_project.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['view_start_project'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "start_project/view_start_project.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }

        // Contact informations requests
        if(isset($_GET['manage_infos'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "infos/manage_infos.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        if(isset($_GET['edit_infos'])){
            $_SESSION['access'] == $access_admin || $_SESSION['access'] == $access_editor ? include(TEMPLATE_BACK . DS . "infos/edit_infos.php"):  include(TEMPLATE_BACK . DS . "notAuth.php");
        }
        


?>

        <?php include( TEMPLATE_BACK . DS . "footer.php" )?>