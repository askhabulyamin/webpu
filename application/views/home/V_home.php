<style type="text/css">
    .programs {
        background-image: url(assets/img/beams-components.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin-top: 0px;
        }
    .bg-calender {
        background-image: url(assets/img/bg_calender.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        margin-top: 0px;
        }   
    time {
        display: inline-block;
        width: 100%;
        color: rgb(255, 255, 255);
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
        background-image: url(assets/img/logo/watermark.png);
        background-position: left;
        background-size: contain;
        background-repeat: no-repeat;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    } 

    .youtube-area .video-info .video-caption .top-caption{
        padding-top: 75px;
    } 

    .rounded-15{
        border-radius: 15px;
    }

    .line-page {
        border-bottom: 1px solid #cec7af61;
    }

    .line-page1 {
        border-bottom: 1px solid #41509452 !important;
    }

    .pb-100{
        padding-bottom: 100px !important;
    }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px);
        float: left;
        height: 379px;
        object-fit: cover;
    }

    .prodi {
        height: 165px !important;
        margin-bottom: 30px !important;
    }

    .modal-header {
        padding: 0px !important;
        border: none
    }
    .modal-header .close {
        position: absolute !important;
        z-index: 1;
        /* border: 8px solid lightgray !important; */
        width: 10px;
        height: 10px;
        border-radius: 10rem;
        background-color: #ECEFF1 !important;
        opacity: 1;
        top: -5px;
        right: -5px;
    }

    .close:not(:disabled):not(.disabled):focus, .close:not(:disabled):not(.disabled):hover {
        color: #dc3545;
        text-decoration: none;
        opacity: 1.75;
    }

    .close>span {
        position: relative;
        right: 8px;
        padding: 0px;
        bottom: 15px;
        font-size: 29px;
        background-color: transparent;
    }

    .sr-only{
        display: none !important;
    }

    @media (max-width: 767px) {
        .prodi {
            height: 120px !important;
            margin-bottom: 30px !important;
        }
        .sticky-bar {
            display: none;
        }
        .top-caption {
            display: none;
        }
        .youtube-area .video-info .video-caption {
            position: relative;
            top: 10px;
        }
        .header-sticky.sticky-bar.sticky .main-menu ul>li>a {
            padding: 15px 15px;
        }
        .video-caption {
            display: none;
        }
    }
    .video-items.card-img {
        height: 640px;
    }
    
</style>
    

    <div class="container-fluid pl-0 pr-0" style="height: auto;">
        <!-- Set up your HTML -->
        <div class="owl-carousel carousel-banner">
            <?php foreach ($banner as $key => $value): ?>
                <!-- INI TESTING BANNER -->
                <?php if ($value['banner_align'] == 'left'): ?>
                    <div class="owl-lazy " data-src="<?=puis_url.$value['banner_file']?>">
                        <div class="pl-sm-0 slider" >
                            
                        
                        <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                        <h3 class="d-m-none" style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3><br>
                        <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($value['banner_align'] == 'center'): ?>
                    <div class="owl-lazy " data-src="<?=puis_url.$value['banner_file']?>" style=" text-align: center;">
                        <div class="pl-sm-0 slider">
                            <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                            <center>
                                <h3 class="d-m-none" style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3>
                            </center><br>
                            <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($value['banner_align'] == 'right'): ?>
                    <div class="owl-lazy " data-src="<?=puis_url.$value['banner_file']?>" style="text-align: right;">
                        <div class="pl-sm-0 slider">
                            <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                            <h3 class="d-m-none" style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3><br>
                            <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                    
            <?php endforeach ?>
          
        </div>
    </div>


    <main>

    <!-- Whats New Start -->
    <section class="whats-news-area programs pt-100">
        <svg class="block-wave top  mi-top-187" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg"><path fill="currentColor" clip-rule="evenodd" d="m1440.3 87h-715.4-725.2v-60.3c239.6 34.4 480.3 34.4 722.2 0s481.4-34.4 718.5 0v60.3z" fill-rule="evenodd"></path></svg>
        
        <div class="container ">
            <div class="row pb-100">
                <div class="col-lg-12">
                    <div class="row d-flex justify-content-between">
                        <div class="col-lg-3 col-md-3">
                            <div class="section-tittle mb-30" data-aos="fade-up" data-aos-duration="3000">
                                <h3 class="text-uppercase">Undergraduate Programs</h3>
                                <p>Explore our undergraduate programs and find an academic path that's right for you</p>
                                <a href="<?=base_url()?>/undergraduated_programs" data-ux="Showcase_HomeGP_Experiences_SeeAll" rel="nofollow" class="Link Link-Arrow" style="text-decoration">
                                    Explore <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9">
                            <div class="col-12">
                                <div class="weekly2-news-active dot-style " >
                                    <?php foreach ($ProdiList as $key => $value): ?>
                                        <div class="weekly2-single " data-aos="fade-left">
                                            <div class="card p-3">
                                                
                                                <?php if ($key == 0): ?>
                                                    <a class="nav-item nav-link min-hight-170 active" href="https://<?=$value['Host']?>" target="_blank" aria-selected="true">
                                                        <img class="card-img-top w-100 h-40 prodi" src="<?=puis_url?>images/logoprodi/<?=$value['FileLogoP']?>" alt="<?=$value['NameEng']?>">
                                                        <p class="text-left bottom-0 p-2"><small>Explore <i class="fas fa-arrow-right" aria-hidden="true"></i></small></p>
                                                    </a>
                                                
                                                <?php endif ?>
                                                <?php if ($key != 0): ?>
                                                    <a class="nav-item nav-link min-hight-170" href="https://<?=$value['Host']?>" target="_blank" aria-selected="true">
                                                        <img class="card-img-top w-100 prodi" src="<?=puis_url?>images/logoprodi/<?=$value['FileLogoP']?>" alt="<?=$value['NameEng']?>">
                                                        <p class="text-right bottom-0"><small>Explore <i class="fas fa-arrow-right" aria-hidden="true"></i></small></p>
                                                    </a>
                                                <?php endif ?>

                                            </div>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                           
                    </div>
                    
                </div>
            </div>
            <div class="row bg-calender card mb-100">
                
                <div class="col-md-6 ml-auto">

                    <div class="p-5">
                        
                        <div class="section-tittle mb-30">
                            <h3 class="text-uppercase text-white" data-aos="fade-right" >Calender Academic  /<small class="mt-0 mb-3 text-dark op-8 font-weight-bold">

                              <?=$semester_name?>
                            </small>
                            </h3>
                            <p class="text-white">Podomoro University Academic Calendars</p>
                        </div>
                        <!-- Days -->
                        <div class="row">
                          <div class="col-lg-12 mb-3" id="Friday, Nov 13th">
                            
                            <ul class="list-timeline list-timeline-primary">

                               <?php foreach ($calendar as $key => $value): ?>
                                     <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column" data-aos="flip-up">
                                       <div class="calend my-0 text-dark flex-fw text-sm text-uppercase" style="font-size: 14px;">
                                            <span class="text-inverse op-8"><i class="fa-calender"></i><?=tgl_ina($value['date_start'])?> - <?=tgl_ina($value['date_end'])?></span>
                                            <h5 style="text-size:20px"><?=$value['name']?></h5>
                                        </div>
                                     </li>
                               <?php endforeach ?>
                            </ul>
                          </div>
                        </div>
                    </div>
                   
                    
                </div>            
            </div>
        </div>
    </section>
    <!-- Whats New End -->

    <section class="weekly2-news-area pb-90 programs">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-right">Gallery</h3>
                            <a href="<?=base_url('gallery')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                        <!-- <p style="color:#6c757d !important">Follow our Instagram, so you can still get other interesting information</p> -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <style>
                            #es-lightbox .es-poweredby{
                                display: none !important;
                            }
                        </style>
                        <div class="embedsocial-hashtag" data-ref="bb27a44a7c502e7d88233a3fc4b0ab187ba26327"> </div> <script> (function(d, s, id) { var js; if (d.getElementById(id)) {return;} js = d.createElement(s); js.id = id; js.src = "https://embedsocial.com/cdn/ht.js"; d.getElementsByTagName("head")[0].appendChild(js); }(document, "script", "EmbedSocialHashtagScript")); </script>
                    </div>
                    
                    <!-- <?php for ($i=0; $i < 8; $i++) :?>
                        <div class="col-md-3 mb-3">
                            <?php if ($ig[$i]['media_type'] == 'VIDEO'): ?>
                                <a href="<?=$ig[$i]['permalink']?>" target="_blank"><img class="img-fluid" src="<?=$ig[$i]['thumbnail_url']?>"></a>
                            <?php endif ?>
                            <?php if ($ig[$i]['media_type'] != 'VIDEO'): ?>
                                <a href="<?=$ig[$i]['permalink']?>" target="_blank"><img class="img-fluid" src="<?=$ig[$i]['media_url']?>"></a>
                            <?php endif ?>
                        </div>
                    <?php endfor ?> -->
                </div>
            </div>
        </div>
    </section>     

    <!--   Weekly-News start -->
    <section class="weekly-news-area ">
        <svg class="block-wave bottom " preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container pt-100 ">
           <div class="weekly-wrapper line-page1 pb-100">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-right">Announcement</h3>
                            <a href="<?=base_url('announcement')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                            <!-- <p style="color:#6c757d !important">We hereby announce to all Podomoro University students</p> -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                        <div class="weekly-news-active dot-style d-flex">
                            <?php
                            if (is_array($announcement) || is_object($announcement)) // Anaouncement
                            {   
                            $no = 1;
                            $array = array();
                                foreach($announcement as $a => $b){  
                                $getStart = $b['Start'];
                                $newDate = date("d-M-Y", strtotime($getStart));
                                $newDate = date("d-M-Y", strtotime($getStart));
                                // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                                $day = date("d",strtotime($getStart));
                                $month = date("F",strtotime($getStart));
                                $year = date("Y",strtotime($getStart));

                            ?>
                            <div class="weekly-single active">
                                <div class="card" data-aos="fade-right"
                                                     data-aos-offset="300"
                                                     data-aos-easing="ease-in-sine">
                                        <div class="">
                                            <time class="p-3 time-bg-2" datetime="">
                                                <span class="day font-weight-bold"><?=$day?></span>
                                                <span class="month"><?=$month?></span>
                                                <span class="year"><?=$year?></span>
                                                <!-- <span class="time">17-12-2020 16:55</span> -->
                                            </time>
                                        </div>
                                        <div class="p-4">
                                            <h5>
                                                <a href="<?= base_url('announcement/').$b['ID'];?>"><?= $b['Title']?></a>
                                            </h5>
                                        </div>
                                </div>
                            </div> 
                            <?php }} ?>
                            
                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>           
    <!-- End Weekly-News -->

    <!-- EVENTS -->
       
    <section class="weekly-news-area pt-100 pb-90">
        
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <!-- Event -->
                            <h3 class="text-uppercase" data-aos="zoom-out-right">ACTIVITIES</h3>
                            <a href="<?=base_url('events')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                            <!-- <p style="color:#6c757d !important">Event Campus Podomoro University</p> -->

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="events-featured dot-style d-flex dot-style">
                            <?php foreach ($events as $key => $value): ?>
                               
                                <div class="weekly2-single active">
                                    <div class="card">
                                        <?php if (!empty($value['event_background'])): ?>
                                            <a class="pop" style="cursor:pointer"><img class="card-img-top border-img" src="<?=$value['event_background']?>" alt="Card image cap"></a>
                                        <?php endif ?>
                                        <?php if (empty($value['event_background'])): ?>
                                            <?php $randomimg = array_rand($this->genimg);?>
                                            <a class="pop" style="cursor:pointer"><img class="card-img-top border-img" src="<?=base_url()?><?=$this->genimg[$randomimg]?>" alt="Card image cap"></a>
                                          
                                        <?php endif ?>
                                            
                                        <div class="p-4">
                                            <h5>
                                                <?php if ($value['blogs'] == 1): ?>
                                                    <a href="<?= base_url('news/').$value['id_event'];?>"><?= $value['event_name']?></a>
                                                <?php endif ?>
                                                <?php if ($value['blogs'] == 0): ?>
                                                    <?= $value['event_name']?>
                                                <?php endif ?>
                                            </h5>
                                            <hr style="margin: 5px 0px">
                                            <?=tgl_ina($value['end_date'])?>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>     
    <!-- END EVENTS -->

    <!-- Start Youtube -->
    <div class="youtube-area pt-100">
        <svg class="block-wave gold-1 mi-top-100" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container">
            <!-- section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle trending-tittle">
                        <h3 class="text-uppercase" data-aos="zoom-out-right">Videos</h3>
                        <a href="<?=base_url('videos')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                    </div>
                    <!-- <p style="color:#6c757d !important">Follow our YouTube, so you can still get other interesting information</p> -->

                </div>
            </div>
        </div>
        <div class="video-items-active">
        <?php foreach ($video as $key => $value): ?>
            <div class="video-items text-center">
                <a href="https://youtube.com/embed/<?=$value['video_link']?>" style="cursor:pointer" target="_blank"><img class="card-img" src="https://img.youtube.com/vi/<?=$value['video_link']?>/maxres2.jpg" alt="<?= $value['video_name']?>" style="height: 50%;"></a>
            </div>
        <?php endforeach ?>    

        </div>
        <div class="container">
            <!-- section Tittle -->
            <!-- <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle trending-tittle">
                        <h3 class="text-uppercase" data-aos="zoom-out-right">Videos</h3>
                        <a href="<?=base_url('videos')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                    </div>
                    <p style="color:#6c757d !important">Follow our YouTube, so you can still get other interesting information</p>

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    
                </div>
            </div> -->
            <div class="video-info">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="video-caption">
                            <div class="top-caption">
                                <span class="color1">Podomoro University</span>
                            </div>
                            <div class="bottom-caption">
                                <h2>Founded by Yayasan Pendidikan Agung Podomoro</h2>
                                <p>Founded by Yayasan Pendidikan Agung Podomoro, and with full support 
                                    from the leading holding company, Agung Podomoro Group, has made Podomoro University a perfect place to study. We develop industry-driven curriculum framework and teaching methodology through work-based learning, hence the students will be equipped with knowledge and 
                                    skills that are required highly and consistent with the needs of business and industry.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testmonial-nav text-center">
                        <?php foreach ($video as $key => $value): ?>
                            <div class="single-video">
                                <a href="https://youtube.com/embed/<?=$value['video_link']?>" style="cursor:pointer" target="_blank">
                                <img class="p-2 mb-3 card-img rounded-15" src="https://img.youtube.com/vi/<?= $value['video_link'];?>/maxres2.jpg" alt="<?= $value['video_name']?>"></a>
                                <div class="video-intro">
                                <a href="https://youtube.com/embed/<?=$value['video_link']?>" target="_blank"><h4><?= $value['video_name']?></h5></a>
                                </div>
                            </div>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <!-- End Start youtube -->

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header border-none"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button> </div>             
          <div class="modal-body" style="padding:0">            
            <img src="" class="imagepreview" style="width: 100%;" >
          </div>
        </div>
      </div>
    </div>

    <!-- Trending Area Start -->
    <section class="trending-area programs pt-100 mi-top pb-100">
        <div class="container pt-50 ">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">                            
                        
                            <h3 class="text-uppercase" data-aos="zoom-out-right">PUCEL <?=count($recentpucel)?></h3>
                                <a class="more" data-aos="zoom-out-right" href="<?=base_url('news')?>"> More <i class="fas fa-arrow-right fz"></i>
                            </a> 
                                     
                        </div>
                        <!-- <p data-aos="zoom-out-right">Find the latest breaking news and information on the top stories, weather, business, entertainment and more</p> -->
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30" data-aos="zoom-in">
                            
                            <div class="trend-top-img">
                                <img width="100%" src="<?=blogs_url_file?>upload/<?=$recentpucel[0]['Images']?>" alt="">
                                <div class="trend-top-cap">
                                    <span><?=$recentpucel[0]['Name']?></span>
                                    <h2><a href="<?=base_url()?>news/<?=$recentpucel[0]['ID_title']?>"><?=$recentpucel[0]['Title']?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i=0; $i <= 2; $i++) :?>
                                    <div class="col-lg-4" data-aos="zoom-in">
                                        <!-- <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="<?=blogs_url_file?>upload/<?=$recomendnews[$i]['Images']?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><?=$recomendnews[$i]['Category']?></span>
                                                <h5><a href="<?=base_url()?>news/<?=$recomendnews[$i]['ID_title']?>"><?=$recomendnews[$i]['Title']?></a></h5>
                                            </div>
                                        </div> -->
                                    </div>
                                <?php endfor;$i++ ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        
                        <?php for ($i=1; $i < count($recentpucel); $i++) :?>
                            <div class="trand-right-single d-flex" data-aos="zoom-in">
                                <div class="trand-right-img">
                                    <img src="<?= blogs_url_file; ?>upload/<?= $recentpucel[$i]['Images'];?>" alt="">
                                </div>
                                <div class="trand-right-cap">
                                    <span class="color<?php echo $no; ?>"><?php echo $recentpucel[$i]['Name'];?></span>
                                    <h4><a href="<?=base_url()?>news/<?=$recentpucel[$i]['ID_title']?>"><?php echo $recentpucel[$i]['Title'];?></a></h4>
                                </div>
                            </div>
                        <?php endfor; ?>
                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Area End -->
    
    
    <!--   Weekly2-News start -->
    <section class="weekly2-news-area  weekly2-pading gray-bg">
        <svg class="block-wave mi-top-110" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container">
            <div class="weekly2-wrapper pb-100 line-page">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="trending-tittle">                            

                            <h3 class="text-uppercase" data-aos="zoom-out-right">Marketing Activity</h3>
                            <a class="more" data-aos="zoom-out-right" href="<?=base_url('marketing_activity')?>"> 
                                More 
                                <i class="fas fa-arrow-right fz"></i>
                            </a> 

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="weekly2-news-active dot-style d-flex dot-style">
                            <?php foreach ($marketingactivity as $key => $value): ?>
                                <?php 
                                    $getStart = $value['Start'];
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                                    $day = date("d",strtotime($getStart));
                                    $month = date("F",strtotime($getStart));
                                    $year = date("Y",strtotime($getStart));
                                ?>
                                <div class="weekly2-single">
                                    <div class="card"  data-aos="flip-up">
                                        <?php if (!empty($value['Banner'])): ?>
                                            <img class="card-img-top border-img" src="<?=puis_url?>uploads/admisi/banner/<?=$value['Banner']?>" alt="">
                                            
                                        <?php endif ?>
                                        <div class="">

                                        <?php if (empty($value['Banner'])): ?>
                                                <time class="p-3 time-bg-3" datetime="">
                                                    <span class="day font-weight-bold"><?=$day?></span>
                                                    <span class="month"><?=$month?></span>
                                                    <span class="year"><?=$year?></span>
                                                </time>
                                        <?php endif ?>
                                        </div>
                                        <div class="p-4">

                                            <h5>
                                                <a href="<?=base_url('marketing_activity/').$value['ID']?>"><?= $value['Title']?></a>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>           
    <!-- End Weekly-News -->

    <!--   Weekly2-News start -->
    <section class="weekly2-news-area weekly2-pading gray-bg pt-0">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-right">Cooperation</h3>
                            <a href="<?=base_url('cooperation')?>" class="more" data-aos="zoom-out-right">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="kerja-sama-carousel dot-style d-flex dot-style">
                            <?php foreach ($kerjasama as $key => $value): ?>
                                <?php 
                                    $getStart = $value['StartDate'];
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    $newDate = date("d-M-Y", strtotime($getStart));
                                    // $fromat = moment($getStart).format("D-MM-YYYY HH:mm");
                                    $day = date("d",strtotime($getStart));
                                    $month = date("F",strtotime($getStart));
                                    $year = date("Y",strtotime($getStart));
                                ?>
                                <div class="weekly2-single">
                                    <div class="card">
                                        <?php if (!empty($value['CooperationBanner'])): ?>
                                            <img class="card-img-top border-img" src="<?=puis_url?><?=$value['CooperationBanner']?>" alt="Card image cap">
                                        <?php endif ?>
                                        <?php if (empty($value['CooperationBanner'])): ?>
                                            <?php $randomimg = array_rand($this->genimg);?>
                                            <img class="card-img-top border-img" src="<?=base_url()?><?=$this->genimg[$randomimg]?>" alt="Card image cap">
                                        <?php endif ?>
                                            
                                        <div class="p-4">

                                            <h5>
                                                <?= $value['JudulKegiatan']?>
                                            </h5>

                                        </div>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>           
    <!-- End Weekly-News -->

    <!--  Recent Articles start -->
    <section class="recent-articles weekly2-pading ">
        <svg class="block-wave mi-top-110" style="color:#f7f7fd;" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container">
           <div class="recent-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        
                        <div class="trending-tittle">                            
                        
                            <h3 class="text-uppercase" data-aos="zoom-out-right">PUX</h3>
                                <a class="more" data-aos="zoom-out-right" href="<?=base_url('world_article')?>"> More <i class="fas fa-arrow-right fz"></i>
                            </a> 
                                     
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="recent-active dot-style d-flex dot-style" >
                            <?php 

                            if (is_array($newsapi) || is_object($newsapi))
                            {   
                                $no = 1;
                                $array = array();
                                foreach($newsapi as $key => $value){
                            ?>
                            <div class="single-recent mb-100" data-aos="zoom-in-up">
                                <div class="what-img">
                                    <img src="<?= $value['urlToImage']; ?>" alt="<?= $value['description']; ?>">
                                </div>
                                <div class="what-cap">
                                    <span class="color<?= $no;?>"><?= $value['author']; ?></span>
                                    <h5><a target="_blank" href="<?= $value['url']?>"><?= $value['title'];?></a></h5>
                                </div>
                            </div>
                            <?php $no++;}} ?>

                        </div>
                    </div>
                </div>
           </div>
        </div>
    </section>           

    <section class="recent-articles">
        <div class="">
            <center><h3 class="garisbawah pb-100">Our Affiliations</h3></center>

            <div class="owl-carousel carousel-responsive1 mb-5">

                <?php foreach ($affiliation as $key => $value): ?>
                    <div class="item">
                        <center>
                            <img src="<?=puis_url.$value['affiliation_file']?>" class="img-fluid">
                        </center>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>


    </main>

