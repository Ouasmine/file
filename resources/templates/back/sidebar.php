<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button
                    type="button"
                    class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button
                type="button"
                class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">

            <?php  $request_uri= $_SERVER['REQUEST_URI'];?>

            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading"></li>


                <li class="app-sidebar__heading">Manage</li>
                <!-- <li style="padding: 4px 0px;">
                    <a href="#">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                            Produits
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                    <li>
                            <a href="index?create_categorie">
                                <i class="metismenu-icon"></i>
                                Nouvelle catégorie
                            </a>
                        </li>
                        <li>
                            <a href="index?manage_categorie">
                                <i class="metismenu-icon"></i>
                                Gérer les catégories
                            </a>
                        </li>
                        <li>
                            <a href="index?create_product">
                                <i class="metismenu-icon"></i>Créer nouveau produit
                            </a>
                        </li>
                        <li>
                            <a href="index?manage_products">
                                <i class="metismenu-icon"></i>Gérer vos produits
                            </a>
                        </li>
                    </ul>
                </li> -->
                
<!-- 
                <li style="padding: 4px 0px;">
                    <a href="index?manage_commands">
                    <i class="metismenu-icon fa fa-shopping-cart"></i>
                         Gérer les commandes
                    </a>
                </li> -->


                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                            Students
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_student")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_student")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_student">
                                <i class="metismenu-icon"></i>
                                Create new student
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_students")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_students")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_students">
                                <i class="metismenu-icon"></i>Manage students
                            </a>
                        </li>
                    </ul>
                </li> 

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i
                            class="metismenu-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                            Partners
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_partner")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_partner")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_partner">
                                <i class="metismenu-icon"></i>
                                Create new partner
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_partner")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_partner")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_partner">
                                <i class="metismenu-icon"></i>Manage partners
                            </a>
                        </li>
                    </ul>
                </li> 

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>

                            Testimonials
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_testimonials")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_testimonials")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_testimonials">
                                <i class="metismenu-icon"></i>
                                Create new testimonial
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_testimonials")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_testimonials")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_testimonials">
                                <i class="metismenu-icon"></i>Manage testimonials
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                            FAQ's
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_faq")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_faq")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_faq">
                                <i class="metismenu-icon"></i>
                                Create a new faq
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_faq")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_faq")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_faq">
                                <i class="metismenu-icon"></i>Manage FAQ's
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                            Events
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_event")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_event")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_event">
                                <i class="metismenu-icon"></i>
                                Create a new event
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_events")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_events")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_events">
                                <i class="metismenu-icon"></i>Manage events
                            </a>
                        </li>
                    </ul>
                </li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true" title="Copy to use newspaper-o"></i>
                        Blog
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            title="Copy to use chevron-down"></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?create_categorie")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_categorie")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_categorie">
                                <i class="metismenu-icon"></i>New category
                            </a>
                        </li>
                        
                        <li class="<?php if((strpos($request_uri,"index?manage_categorie")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_categorie")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_categorie">
                                <i class="metismenu-icon"></i>Manage categories
                            </a>
                        </li>

                        <li class="<?php if((strpos($request_uri,"index?create_post")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?create_post")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?create_post">
                                <i class="metismenu-icon"></i>New article
                            </a>
                        </li>
                        
                        <li class="<?php if((strpos($request_uri,"index?manage_post")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_post")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_post">
                                <i class="metismenu-icon"></i>Manage articles
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="app-sidebar__heading">Support</li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                            Mailbox
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?manage_contact")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_contact")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_contact">
                                <i class="metismenu-icon"></i>Mailbox
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_admissions")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_admissions")!==false) ||  $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_admissions">
                                <i class="metismenu-icon"></i>Online admission tests
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_becomeInstructor")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_becomeInstructor")!==false) ||  $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_becomeInstructor">
                                <i class="metismenu-icon"></i>Teacher applications
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?php if((strpos($request_uri,"index?manage_subsribers")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" style="padding: 4px 0px;">
                    <a class="<?php if((strpos($request_uri,"index?manage_subsribers")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_subsribers">
                    <i class="metismenu-icon fas fa-user-check"></i>
                    Subscribers
                    </a>

                </li>

                <li class="app-sidebar__heading">Administration area</li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                    <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                    Administrators
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li class="<?php if((strpos($request_uri,"index?add_user")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?add_user")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?add_user">
                                <i class="metismenu-icon"></i>
                                New administrator
                            </a>
                        </li>
                        <li class="<?php if((strpos($request_uri,"index?manage_users")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>">
                            <a class="<?php if((strpos($request_uri,"index?manage_users")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?manage_users">
                                <i class="metismenu-icon"></i>Manage administrators
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="<?php if((strpos($request_uri,"index?change_pass")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" style="padding: 4px 0px;">
                    <a class="<?php if((strpos($request_uri,"index?change_pass")!==false) || $request_uri=="" || $request_uri=="/"){echo "mm-active";}?>" href="index?change_pass">
                        <i class="metismenu-icon fa fa-fw" aria-hidden="true"></i>
                        Change Password
                    </a>
                </li>

                <li style="padding: 4px 0px;">
                    <a href="#">
                        <i
                            class="metismenu-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                        Pages
                        <i
                            class="metismenu-state-icon fa fa-fw"
                            aria-hidden="true"
                            ></i>
                    </a>
                    <ul>
                        <li>
                            <a href="../" target="_blank">
                                <i class="metismenu-icon"></i>
                                Home
                            </a>
                        </li>
                       
                    
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</div>