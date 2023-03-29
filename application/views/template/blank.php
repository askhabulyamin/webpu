<?php
    Header('Access-Control-Allow-Origin: https://www.youtube.com/'); //for allow any domain, insecure
    Header('Access-Control-Allow-Headers: *'); //for allow any headers, insecure
    Header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE'); //method allowed
?>
<!doctype html>
<html ⚡="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
        <title>Where Future Entrepreneurs Begin | Podomoro University</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- <link rel="manifest" href="site.webmanifest"> -->
        <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/img/pufavicon.png">
        <link rel="canonical" href="https://podomorouniversity.ac.id/" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Where Future Entrepreneurs Begin | Podomoro University" />
        <meta property="og:description" content="Where Future Entrepreneur Begins At Podomoro University. Develop Industry Driven Curriculum Framework and Teaching Methodology through Work-Based Learning" />
        <meta property="og:url" content="https://podomorouniversity.ac.id/" />
        <meta property="og:site_name" content="Where Future Entrepreneurs Begin" />
        <meta property="article:publisher" content="https://www.facebook.com/PodomoroUniversity/" />
        <meta property="article:modified_time" content="2022-12-13T07:39:35+00:00" />
        <meta property="og:image" content="<?= base_url();?>assets/img/pufavicon.png" />
        <meta property="og:image:width" content="1000" />
        <meta property="og:image:height" content="906" />
        <meta property="og:image:type" content="image/png" />
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:site" content="@PodomoroUniv" />
        <meta name="twitter:label1" content="Est. reading time" />
        <meta name="twitter:data1" content="12 minutes" />
        <meta name="keywords" content="Podomoro University, University Podomoro, Podomoro, University, Universitas Podomoro, Podomoro Universitas, PU, Pcam,Pu-x,Pucell">
        <!-- CSS here -->
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/bootstrap.min.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/owl.carousel.min.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/owl.carousel.theme.css" type='text/css' media='all'>
        

        <!-- <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/ticker-style.css" type='text/css' media='all'> -->
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/flaticon.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/slicknav.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/animate.min.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/magnific-popup.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/fontawesome-all.min.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/themify-icons.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/slick.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/nice-select.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/style.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' href="<?= base_url();?>/assets/css/style_pu.css" type='text/css' media='all'>
        <link data-minify="1" rel='stylesheet' rel="stylesheet" href="<?= base_url();?>/assets/css/wa.css" type='text/css' media='all'>

        <!-- AOS Anination -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" data-minify="1" rel='stylesheet' type='text/css' media='all'>
        <!-- Sweper Slide -->
        <link data-minify="1" rel='stylesheet' type="text/css" href="https://cdn.jsdelivr.net/npm/swiper@8.4.6/swiper-bundle.min.css" type='text/css' media='all'>
        <!-- <link rel="stylesheet" href="<?= base_url();?>/assets/amp/css/amp-source-compiled-css.css"> -->
        <!-- <link rel="stylesheet" href="<?= base_url();?>/assets/css/custom.css"> -->
        <!-- Demo styles -->
          <style>            
            .swiper {
              width: 100%;
              height: 100%;
            }

            .swiper-slide {
              text-align: center;
              font-size: 18px;
              background: #fff;

              /* Center slide text vertically */
              display: -webkit-box;
              display: -ms-flexbox;
              display: -webkit-flex;
              display: flex;
              -webkit-box-pack: center;
              -ms-flex-pack: center;
              -webkit-justify-content: center;
              justify-content: center;
              -webkit-box-align: center;
              -ms-flex-align: center;
              -webkit-align-items: center;
              align-items: center;
            }

            .swiper-slide img {
              display: block;
              width: 100%;
              height: 100%;
              object-fit: cover;
            }
            .footer-area {
                background: #203468;
            }
            .footer-area .footer-tittle p {
                color: #ccc;
            }

            .footer-area .footer-pera p {
                color: #cccc;
                font-size: 15px;
                margin-bottom: 50px;
                line-height: 1.8;
            }
            .footer-area p {
                color: #ccc;
            }
            .footer-area .footer-tittle ul li a {
                color: #ccc;
                font-weight: 300;
                font-size: 15px;
            }
          </style>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-S6SQYCYCYX"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-S6SQYCYCYX');
        </script>  
   </head>

    <body>
        <div id="WAButton" style="z-index: 10"></div>
        <!-- Preloader Start -->
        <!-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/icon_right.png" alt="">
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Preloader Start -->

        
           
        <!-- Preloader Start -->
        <!-- <div id="preloader-active">
            <div class="preloader d-flex align-items-center justify-content-center">
                <div class="preloader-inner position-relative">
                    <div class="preloader-circle"></div>
                    <div class="preloader-img pere-text">
                        <img src="assets/img/logo/icon_right.png" >
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Preloader Start -->

        <header>
            <!-- Header Start -->
           <div class="header-area">
                <div class="main-header ">
                    <!-- <div class="header-top black-bg d-none d-md-block">
                       <div class="container">
                           <div class="col-xl-12">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="header-info-left">
                                        <ul>     
                                            <li><img src="<?=base_url()?>assets/img/icon/header_icon1.png" alt="">34ºc, Sunny </li>
                                            <li><img src="<?=base_url()?>assets/img/icon/header_icon1.png" alt="">Tuesday, 18th June, 2019</li>
                                        </ul>
                                    </div>
                                    <div class="header-info-right">
                                        <ul class="header-social">    
                                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                           <li> <a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                           </div>
                       </div>

                    </div> -->
            
                    <div class="header-mid d-none d-md-block">
                       <div class="container">
                            <div class="row d-flex align-items-center">
                                <!-- Logo -->
                                <div class="col-xl-3 col-lg-3 col-md-3">
                                    <div class="logo">
                                        <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo/logo_PU.webp" alt="Logo Podomoro University"></a>
                                    </div>
                                </div>
                                <div class="col-xl-9 col-lg-9 col-md-9">
                                    <div class="header-banner f-right ">
                                            <?php if ($this->topbanner['banner_top_link'] != ''): ?>
                                                <a href="<?=$this->topbanner['banner_top_link']?>" target="_blank"><img src="<?=puis_url.$this->topbanner['banner_top_file']?>" alt=""></a>
                                            <?php endif ?>
                                            <?php if ($this->topbanner['banner_top_link'] == ''): ?>
                                                <img src="<?=puis_url.$this->topbanner['banner_top_file']?>" alt="">
                                            <?php endif ?>
                                    </div>
                                </div>
                            </div>
                       </div>
                    </div>
                   <div id="headerid" class="header-bottom">
                        <div class="container">
                            <div class="row align-items-center">
                                <!-- <div class="col-xl-10 col-lg-10 col-md-12 header-flex"> -->
                                <div class="col-xl-12 col-lg-12 col-md-12 header-flex">
                                    <!-- sticky -->
                                        <div class="sticky-logo">
                                            <a href="<?=base_url()?>"><img src="<?=base_url()?>assets/img/logo/logo_PU.webp" alt="Logo Podomoro University"></a>
                                        </div>
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-md-block">
                                        <nav>                  
                                            <ul id="navigation">    
                                                <?php foreach ($this->menu_nav as $key => $value): ?>
                                                    <?php if (empty($value['submenu'])): ?>
                                                        <li><a href="<?=$value['link_menu'];?>"><?=$value['name_menu_nav']?></a></li>
                                                    <?php endif ?>
                                                    <?php if (!empty($value['submenu'])): ?>
                                                        <li><a href="<?=$value['link_menu'];?>"><?=$value['name_menu_nav']?></a>
                                                            <ul class="submenu">
                                                            <?php foreach ($value['submenu'] as $keysub => $valuesub): ?>
                                                                <li><a href="<?=$valuesub['link_submenu']?>"><?=$valuesub['name_submenu_nav'];?></a></li>
                                                            <?php endforeach ?>
                                                            </ul>
                                                        </li>
                                                    <?php endif ?>
                                                    
                                                <?php endforeach ?>
                                                
                                                <!-- <li><a href="<?= base_url();?>index.php/about">About Us</a></li>
                                                <li><a href="<?= base_url();?>reasearch">Reasearch</a></li>
                                                <li><a href="#">Undergraduate Programs</a>
                                                    <ul class="submenu">
                                                        <li><a href="https://hbp.podomorouniversity.ac.id/">Hotel Business</a></li>
                                                        <li><a href="https://ent.podomorouniversity.ac.id/">Entrepreneurship</a></li>
                                                        <li><a href="https://acc.podomorouniversity.ac.id/">Accounting</a></li>
                                                        <li><a href="https://law.podomorouniversity.ac.id/">Business Law</a></li>
                                                        <li><a href="https://pdp.podomorouniversity.ac.id/">Product Design</a></li>
                                                        <li><a href="https://arc.podomorouniversity.ac.id/">Architecture</a></li>
                                                        <li><a href="https://cem.podomorouniversity.ac.id/">Construction Engineering and Management</a></li>
                                                        <li><a href="https://erp.podomorouniversity.ac.id/">Urban and Regional Planning</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="https://studentlife.podomorouniversity.ac.id/">Student Life</a></li>
                                                <li><a href="https://admission.podomorouniversity.ac.id/">Admission & Registrasi</a></li>
                                                <li><a href="https://portal.podomorouniversity.ac.id/">Portal</a></li> -->
                                            </ul>
                                        </nav>
                                    </div>
                                </div>             
                                <!-- <div class="col-xl-2 col-lg-2 col-md-4">
                                    <div class="header-right-btn f-right d-none d-lg-block">
                                        <i class="fas fa-search special-tag"></i>
                                        <div class="search-box">
                                            <form action="#">
                                                <input type="text" placeholder="Search">
                                                
                                            </form>
                                        </div>
                                    </div>
                                </div> -->
                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-md-none"></div>
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
           </div>
            <!-- Header End -->

        </header> 
       
        <?= $content ?>

        <style>
        .wa{
            position: fixed;
            width: 60px;
            height: 60px;
            bottom: 117px;
            right: 90px;
            background-color: #25d366;
            color: #FFF;
            border-radius: 50px;
            text-align: center;
            font-size: 30px;
            z-index: 100;
        }

        .my-wa{
            margin-top:16px;
        }
        </style>

        <!-- <a href="https://api.whatsapp.com/send?phone=<?=$this->contactinfo['whatsapp']?>&text" class="wa" target="_blank">
            <i class="fab fa-whatsapp my-wa" aria-hidden="true"></i>
        </a> -->

       <footer>
           <!-- Footer Start-->
            <div class="footer-area footer-padding fix">
                <svg class="block-wave bottom mi-top-140" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
                    <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
                </svg>
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                            <div class="single-footer-caption">
                                <div class="single-footer-caption">
                                    <div class="footer-logo">
                                        <a href="<?=base_url()?>"><img class="w-100" src="<?=base_url()?>assets/img/logo/log_PU-w.webp" alt=""></a>
                                    </div>
                                   <!--  <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Founded by Yayasan Pendidikan Agung Podomoro, and with full support from the leading holding company, Agung Podomoro Group, has made Podomoro University a perfect place to study. We develop industry-driven curriculum framework and teaching methodology through work-based learning, hence the students will be equipped with knowledge and skills that are required highly and consistent with the needs of business and industry.</p>
                                        </div>
                                    </div> -->
                                    
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="single-footer-caption mb-50 mt-60">
                                <div class="footer-tittle">
                                    <h4>Contact Us</h4>
                                </div>
                                <p class="text-left" > <span id="Address"></span>
                                    <?=$this->contactinfo['address']?><br>
                                    <strong>Phone:</strong> <span id="Tlp"><?=$this->contactinfo['phone']?></span><br>
                                    <strong>Email:</strong> <span id="Email"><?=$this->contactinfo['email']?></span><br>
                                    
                                </p>
                                <!-- <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li><a href="#"><img src="assets/img/post/instra1.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra2.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra3.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra4.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra5.jpg" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/post/instra6.jpg" alt=""></a></li>
                                    </ul>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between">
                        <div class="col-md-3"> 
                            <div class="footer-border">
                                <div class="footer-tittle">
                                    
                                    <h4 class="footer-tittle">Academics</h4>
                                    <ul>
                                        
                                        <li>
                                            <a target="_blank" href="https://acc.podomorouniversity.ac.id/"><lang>Accounting</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://arc.podomorouniversity.ac.id/"><lang>Architecture</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://law.podomorouniversity.ac.id/"><lang>Bussines Law</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://cem.podomorouniversity.ac.id/"><lang>Construction Engginering And Management</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://ent.podomorouniversity.ac.id/"><lang>Entrepreneurship</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://hbp.podomorouniversity.ac.id/"><lang>Hotel Business</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://urp.podomorouniversity.ac.id/"><lang>Urban Regional Planning</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://pdp.podomorouniversity.ac.id/"><lang>Product Design</lang></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3"> 
                            <div class="footer-border">
                                <div class="footer-tittle">
                                    
                                    <h4 class="footer-tittle">Admissions</h4>
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://admission.podomorouniversity.ac.id/"><lang>Online Registration</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://podomorouniversity.ac.id"><lang>Podomoro University</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://portal.podomorouniversity.ac.id/portal-login"><lang>Parent Portal</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://sister.podomorouniversity.ac.id/auth/login"><lang>Sister</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://studentlife.podomorouniversity.ac.id/"><lang>Student Life</lang></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3"> 
                            <div class="footer-border">
                                <div class="footer-tittle">
                                    
                                    <h4 class="footer-tittle">Reasearch</h4>
                                    <ul>
                                    <li>
                                            <a target="_blank" href="https://lpmi.podomorouniversity.ac.id/"><lang>LPMI</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://pucel.co/"><lang>Pucel</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://lppm.podomorouniversity.ac.id/"><lang>LPPM</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://pux.podomorouniversity.ac.id/"><lang>PUX</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://www.repository.podomorouniversity.ac.id"><lang>PU Repository</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://journal.podomorouniversity.ac.id/"><lang>PU Journal</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="http://pupress.podomorouniversity.ac.id/"><lang>PU Press</lang></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-3"> 
                            <div class="footer-border">
                                <div class="footer-tittle">
                                    
                                    <h4 class="footer-tittle">Portal</h4>
                                    <ul>
                                        <li>
                                            <a target="_blank" href="https://portal.podomorouniversity.ac.id/portal-login"><lang>Login Student</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://portal.podomorouniversity.ac.id/portal-login"><lang>Login Empeloyee</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://portal.podomorouniversity.ac.id/training"><lang>Login Portal Training</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://cblibrary.podomorouniversity.ac.id/"><lang>CB Library</lang></a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="https://alumni.podomorouniversity.ac.id/"><lang>Alumni</lang></a>
                                        </li>
                                                                            
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           <!-- footer-bottom aera -->
           <div class="footer-bottom-area">
               <div class="container">
                   <div class="footer-border">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-lg-6">
                                <div class="footer-copy-right">
                                    <p>                             
                                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> Podomoro University
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="footer-menu f-right">
                                    <ul>
                                        <?php foreach ($this->footer_nav as $key => $value): ?>
                                            <li><a href="<?=$value['link_footer']?>"><?=$value['name_footer_nav']?></a></li>
                                        <?php endforeach ?>
                                        <!-- <li><a href="#">Terms of use</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Contact</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                   </div>
               </div>
           </div>
           <!-- Footer End-->
       </footer>
       
        <script>
            window.base_url = '<?= base_url(); ?>';
            window.rest_base_uri = '<?= rest_base_uri; ?>';
            window.blogs_url_file = '<?= blogs_url_file; ?>';
            window.blogs_url = '<?= blogs_url; ?>';
        </script>

        <!-- JS here -->
        
            <!-- All JS Custom Plugins Link Here here -->
            <script src="<?= base_url();?>/assets/js/vendor/modernizr-3.5.0.min.js"></script>
            <!-- Jquery, Popper, Bootstrap -->
            <script src="<?= base_url();?>/assets/js/vendor/jquery-1.12.4.min.js"></script>
            <script src="<?= base_url();?>/assets/js/popper.min.js"></script>
            <script src="<?= base_url();?>/assets/js/bootstrap.min.js"></script>
            <!-- Jquery Mobile Menu -->
            <script src="<?= base_url();?>/assets/js/jquery.slicknav.min.js"></script>

            <!-- Jquery Slick , Owl-Carousel Plugins -->
            <script src="<?= base_url();?>/assets/js/owl.carousel.min.js"></script>
            <script src="<?= base_url();?>/assets/js/slick.min.js"></script>
            <!-- Date Picker -->
            <script src="<?= base_url();?>/assets/js/moment.js"></script>
            <script src="<?= base_url();?>/assets/js/gijgo.min.js"></script>
            <!-- One Page, Animated-HeadLin -->
            <script src="<?= base_url();?>/assets/js/wow.min.js"></script>
            <script src="<?= base_url();?>/assets/js/animated.headline.js"></script>
            <script src="<?= base_url();?>/assets/js/jquery.magnific-popup.js"></script>

            <!-- Breaking New Pluging -->
            <script src="<?= base_url();?>/assets/js/jquery.ticker.js"></script>
            <script src="<?= base_url();?>/assets/js/site.js"></script>

            <!-- Scrollup, nice-select, sticky -->
            <!-- <script src="<?= base_url();?>/assets/js/jquery.scrollUp.min.js"></script> -->
            <script src="<?= base_url();?>/assets/js/jquery.nice-select.min.js"></script>
            <script src="<?= base_url();?>/assets/js/jquery.sticky.js"></script>
            
            <!-- contact js -->
            <script src="<?= base_url();?>/assets/js/contact.js"></script>
            <script src="<?= base_url();?>/assets/js/jquery.form.js"></script>
            <script src="<?= base_url();?>/assets/js/jquery.validate.min.js"></script>
            <script src="<?= base_url();?>/assets/js/mail-script.js"></script>
            <script src="<?= base_url();?>/assets/js/jquery.ajaxchimp.min.js"></script>
            
            <!-- Jquery Plugins, main Jquery -->    
            <script src="<?= base_url();?>/assets/js/plugins.js"></script>
            <script src="<?= base_url();?>/assets/js/main.js"></script>

            <script src="<?= base_url();?>/assets/js/wa.js"></script>

            <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js"></script>
            <!-- AOS JS -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/swiper@8.4.6/swiper-bundle.min.js"></script>
            <script>
              AOS.init();
            </script>
            <script type="text/javascript">
            moment().format(); 
            document.addEventListener('scroll', function(e) {
                        if (document.body.scrollTop > 400) {
                            var currScrollPos2 = document.body.scrollTop;
                            document.getElementById('tagline').style.opacity = -currScrollPos2/400 + 2;
                            }
                        });

            if(! /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
             $("#headerid").attr("class", "header-bottom header-sticky");
            }

            var base = '<?=base_url();?>';

            $(function() {
              $('#WAButton').floatingWhatsApp({
                phone: '<?=$this->contactinfo['whatsapp']?>', //WhatsApp Business phone number International format-
                //Get it with Toky at https://toky.co/en/features/whatsapp.
                headerTitle: 'Get our support!', //Popup Title
                popupMessage: 'Hello, how can we help you?', //Popup Message
                showPopup: true, //Enables popup display
                buttonImage: '<img class="p-2" src="'+base+'assets/img/wa-1.png" />', //Button Image
                //headerColor: 'crimson', //Custom header color
                //backgroundColor: 'crimson', //Custom background button color
                position: "right"    
              });
            });

            $('.carousel-banner').owlCarousel({
                loop:true,
                autoplay:true,
                autoplayTimeout:3000,
                autoplayHoverPause:true,
                lazyLoad: true,
                dots:false,
                autoplay:true,
                animateOut: 'fadeOut',
                responsive:{
                    0:{
                        items:1,
                        infinite: true,
                        dots: false,
                    }
                }
            });

            var dots = $('.owl-dots').css('position', 'absolute').css('bottom', '5px');
            dots.css('left', 'calc(50% - ' + dots.width()/2+'px)');



            $('.carousel-responsive1').owlCarousel({
                loop:true,
                margin:10,
                nav:false,
                autoplay:true,
                responsive:{
                    0:{
                        items:1,
                        infinite: true,
                        dots: false,
                    },
                    480 : {
                        items:2,
                        infinite: true,
                        dots: false,
                    },
                    
                    991 :{
                        items:3
                    },
                    1024:{
                        items:5
                    }
                }
            })

            
            </script>
            <!-- Initialize Swiper -->
            <script>
                var swiper = new Swiper(".mySwiper", {
                  slidesPerView: 4,
                  centeredSlides: true,
                  spaceBetween: 30,
                  grabCursor: true,
                  pagination: {
                    el: ".swiper-pagination",
                    clickable: true,
                  },
                });
            </script>
            
    </body>
</html>
