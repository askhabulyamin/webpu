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
        border-top-left-radius: 2.25rem;
        border-top-right-radius: 2.25rem;
        }  

</style>
    

    <div class="container-fluid pl-0 pr-0" style="height: auto;">
        <!-- Set up your HTML -->
        <div class="owl-carousel carousel-banner">
            <?php foreach ($banner as $key => $value): ?>
                <?php if ($value['banner_align'] == 'left'): ?>
                    <div class="owl-lazy" data-src="<?=puis_url.$value['banner_file']?>">
                        <div style="height: 100%; width: auto; background: rgba(0, 0, 0, 0.5); padding-top:200px; padding-left: 50px;">
                            
                        
                        <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                        <h3 style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3><br>
                        <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($value['banner_align'] == 'center'): ?>
                    <div class="owl-lazy" data-src="<?=puis_url.$value['banner_file']?>" style=" text-align: center;">
                        <div style="height: 100%; width: auto; background: rgba(0, 0, 0, 0.5); padding-top:200px; padding-left: 50px;">
                            <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                            <center>
                                <h3 style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3>
                            </center><br>
                            <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                <?php if ($value['banner_align'] == 'right'): ?>
                    <div class="owl-lazy" data-src="<?=puis_url.$value['banner_file']?>" style="text-align: right;">
                        <div style="height: 100%; width: auto; background: rgba(0, 0, 0, 0.5); padding-top:200px; padding-left: 50px;">
                            <h1 style="color:white"><?=$value['banner_header']?></h1><br>
                            <h3 style="color:white; max-width: 50%;"><?=$value['banner_text']?></h3><br>
                            <a href="<?=$value['banner_link']?>" class="btn btn-primary"><?=$value['banner_link_text']?></a>
                        </div>
                    </div>
                <?php endif ?>
                    
            <?php endforeach ?>
          
        </div>
    </div>


    <main>

    <!-- Whats New Start -->
    <section class="whats-news-area programs pt-100 pb-90">
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
                                                        <img class="card-img-top w-100 h-40" src="<?=puis_url?>/images/logoprodi/<?=$value['FileLogoP']?>" alt="<?=$value['NameEng']?>">
                                                        <p class="text-left bottom-0 p-2"><small>Explore <i class="fas fa-arrow-right" aria-hidden="true"></i></small></p>
                                                    </a>
                                                
                                                <?php endif ?>
                                                <?php if ($key != 0): ?>
                                                    <a class="nav-item nav-link min-hight-170" href="https://<?=$value['Host']?>" target="_blank" aria-selected="true">
                                                        <img class="card-img-top w-100" src="<?=puis_url?>/images/logoprodi/<?=$value['FileLogoP']?>" alt="<?=$value['NameEng']?>">
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
                            <h3 class="text-uppercase text-white" data-aos="fade-left" >Calender Academic  /<small class="mt-0 mb-3 text-dark op-8 font-weight-bold">
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

    <!--   Weekly-News start -->
    <section class="weekly-news-area mi-top">
        <svg class="block-wave bottom " preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container pt-100 pb-100">
           <div class="weekly-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-left">Announcement</h3>
                            <a href="<?=base_url('announcement')?>" class="more" data-aos="zoom-out-left">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                            <p style="color:#6c757d !important" data-aos="zoom-out-left">We hereby announce to all Podomoro University students</p>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        
                        <div class="weekly-news-active dot-style d-flex dot-style">
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
                                                <a href="<?= base_url('details');?>"><?= $b['Title']?></a>
                                            </h5>
                                        </div>
                                </div>
                                <!-- <div class="card">
                                    <span class="day"><?=$day?>-</span>
                                    <span class="month"><?=$month?>-</span>
                                    <span class="year"><?=$year?>-</span>
                                </div>
                                <div class="weekly-caption">
                                    <span class="color<?=$no?>"><?= $month ?></span>
                                    <h5><a href="<?= $b['File']?>"><?= $b['Title']?></a></h5>
                                </div> -->
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
       
    <section class="weekly2-news-area">
        <svg class="block-wave gold-1 mi-top-87" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg>
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-left">Events</h3>
                            <a href="<?=base_url('events')?>" class="more" data-aos="zoom-out-left">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                            <p style="color:#6c757d !important" data-aos="zoom-out-left">Event Campus Podomoro University</p>

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
                                            <!-- <div class="overlay rounded">
                                                <time class="p-3" datetime="">
                                                    <span class="day font-weight-bold"><?=$day?></span>
                                                    <span class="month"><?=$month?></span>
                                                    <span class="year"><?=$year?></span>
                                                </time>
                                            </div> -->
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

    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
      <div class="modal-dialog">
        <div class="modal-content">              
          <div class="modal-body" style="padding:0">
            <button type="button" class="close" data-dismiss="modal" style="float:right;"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <img src="" class="imagepreview" style="width: 100%;" >
          </div>
        </div>
      </div>
    </div>

    <script type="text/javascript">
        
    </script>

    <!-- Trending Area Start -->
    <section class="trending-area programs pt-100 mi-top">
        <!-- <svg class="block-wave gold-1 mi-top-100" preserveAspectRatio="none" height="87" width="100%" enable-background="new 0 0 1440 87" viewBox="0 0 1440 87" xmlns="http://www.w3.org/2000/svg">
            <path fill="currentColor" clip-rule="evenodd" d="m-.3 0h715.4 725.1v60.2c-239.6-34.3-480.3-34.3-722.1 0s-481.3 34.3-718.4 0v-60.2z" fill-rule="evenodd"></path>
        </svg> -->
        <div class="container pt-50 ">
            <div class="trending-main">
                <!-- Trending Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="trending-tittle">                            
                        
                            <h3 class="text-uppercase" data-aos="zoom-out-right">News </h3>
                                <a class="more" data-aos="zoom-out-right" href="<?=base_url('news')?>"> More <i class="fas fa-arrow-right fz"></i>
                            </a> 
                                     
                        </div>
                        <p data-aos="zoom-out-right">Find the latest breaking news and information on the top stories, weather, business, entertainment and more</p>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30" data-aos="zoom-in">
                            
                            <div class="trend-top-img">
                                <img width="100%" src="<?=blogs_url_file?>upload/<?=$response[0]['img']?>" alt="">
                                <div class="trend-top-cap">
                                    <span><?=$response[0]['Category']?></span>
                                    <h2><a href="<?=base_url()?>news/<?=$response[0]['ID_title']?>"><?=$response[0]['Title']?></a></h2>
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row">
                                <?php for ($i=1; $i <= 3; $i++) :?>
                                    <div class="col-lg-4" data-aos="zoom-in">
                                        <div class="single-bottom mb-35">
                                            <div class="trend-bottom-img mb-30">
                                                <img src="<?=blogs_url_file?>upload/<?=$response[$i]['img']?>" alt="">
                                            </div>
                                            <div class="trend-bottom-cap">
                                                <span class="color1"><?=$response[$i]['Category']?></span>
                                                <h5><a href="<?=base_url()?>news/<?=$response[$i]['ID_title']?>"><?=$response[$i]['Title']?></a></h5>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4">
                        
                        <?php for ($i=4; $i <= 8; $i++) :?>
                    
                        <div class="trand-right-single d-flex" data-aos="zoom-in">
                            <div class="trand-right-img">
                                <img src="<?= blogs_url_file; ?>upload/<?= $response[$i]['img'];?>" alt="<?= $response[$i]['SEO_title']; ?>">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color<?php echo $no; ?>"><?php echo $response[$i]['Category'];?></span>
                                <h4><a href="<?=base_url()?>news/<?=$response[$i]['ID_title']?>"><?php echo $response[$i]['Title'];?></a></h4>
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
            <div class="weekly2-wrapper">
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
                                                <?= $b['Title']?>
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
    <section class="weekly2-news-area weekly2-pading gray-bg">
        <div class="container">
            <div class="weekly2-wrapper">
                <!-- section Tittle -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-tittle trending-tittle">
                            <h3 class="text-uppercase" data-aos="zoom-out-left">Cooperation</h3>
                            <a href="<?=base_url('cooperation')?>" class="more" data-aos="zoom-out-left">More <i class="fas fa-arrow-right fz"></i></a>
                        </div>
                            <p style="color:#6c757d !important" data-aos="zoom-out-left">Campus Cooperation Spaces Podomoro University students</p>

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
                                            <!-- <div class="overlay rounded">
                                                <time class="p-3" datetime="">
                                                    <span class="day font-weight-bold"><?=$day?></span>
                                                    <span class="month"><?=$month?></span>
                                                    <span class="year"><?=$year?></span>
                                                </time>
                                            </div> -->
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

    <!-- Start Youtube -->
    <!-- <div class="youtube-area video-padding">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="video-items-active">
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/2tgbQ_Nrpxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/IdFy7l2hSD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube.com/embed/wlxL2ZChX6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                            <iframe src="https://www.youtube-nocookie.com/embed/J99I9i4Osps?origin=www.youtube.com" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="video-items text-center">
                        <iframe src="https://www.youtube.com/embed/NRa2h9AJHgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
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
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/2tgbQ_Nrpxk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h5>Alur Pendaftaran Online di Podomoro University</h5>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/IdFy7l2hSD4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h5>Fasilitas Podomoro University</h5>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/wlxL2ZChX6g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h5>You are The Next Entrepreneur</h5>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube-nocookie.com/embed/J99I9i4Osps?origin=www.youtube.com" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h5>The Next Gen Battle Day 3</h5>
                                </div>
                            </div>
                            <div class="single-video">
                                <iframe src="https://www.youtube.com/embed/NRa2h9AJHgA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                <div class="video-intro">
                                    <h5>Business Law Program Parents Gathering</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
    <!-- End Start youtube -->
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
                        
                            <h3 class="text-uppercase" data-aos="zoom-out-right">Worldwide Articles</h3>
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
    <!--Recent Articles End -->
    <!--Start pagination -->
    <!-- <div class="pagination-area pb-45 text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    
                    <div class="single-wrap d-flex justify-content-center">
                        <?php 
                            echo $this->pagination->create_links();
                        ?>
                        pass <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-start">
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow roted"></span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                <li class="page-item"><a class="page-link" href="#">02</a></li>
                                <li class="page-item"><a class="page-link" href="#">03</a></li>
                              <li class="page-item"><a class="page-link" href="#"><span class="flaticon-arrow right-arrow"></span></a></li>
                            </ul>
                          </nav> pass
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- End pagination  -->

    <section class="recent-articles">
        <div class="container">
            <center><h3 style="color: #0525b2" class="garisbawah">Our Affiliations</h3></center>

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