<style type="text/css">
    .slick-dots li button:before {
        content: "\2588\2588\2588\2588\2588";
    }
    time > .day {
        display: block;
        font-size: 50pt;
        font-weight: 100;
        line-height: 1;
    }

    time > .month {
        display: block;
        font-size: 20pt;
        font-weight: 900;
        line-height: 1;
    }
    time > .year {
        display: block;
        font-size: 35pt;
        font-weight: 900;
        line-height: 1.1;
    }

    time > span {
        display: none;
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
    }
    .purple-gradient {
        background: linear-gradient(88deg, #034087,#d71921, #fc3f00) !important;
    }
    .clear {
        clear: both;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4 class="pt-4">ACTIVITIES</h4><hr>
                
            <?php foreach ($events as $key => $value): ?>
                <div class="row mb-5">
                    <div class="col-md-4">
                        <img src="<?=blogs_url_file.'upload/'.$value['Images']?>" class="img-fluid">
                    </div>
                    <div class="col-md-8">
                        <a href="<?=base_url()?>events/<?=$value['ID_title']?>"><strong><h5><?=$value['Title']?></h5></strong></a>
                        <small><?=tgl_ina($value['CreateAT'])?></small>
                        <?php 
                            $explodetext = explode('.', $value['Images']) 
                        ?>
                        <?php if ($explodetext[1] != 'gif'): ?>
                            <!-- <p><?=text_panjang(htmlspecialchars($value['Content']))?></p> -->
                        <?php endif ?>
                        <br>
                        <span class="badge badge-primary"><?=$value['Name']?></span>
                        <!-- <p><?= substr($value['Content'],0,12); ?></p> -->
                    </div>
                </div>
            <?php endforeach ?>

            <nav>
              <ul class="pagination">
                <?php if (!empty($page)): ?>
                    <?php if ($page > 1): ?>
                        <li class="page-item"><a class="page-link" href="<?=base_url()?>events?page=<?=$page-1?>"><</a></li>
                    <?php endif ?>
                <?php endif ?>
                <li class="page-item"><a class="page-link" href="<?=base_url()?>events?page=<?=$page+1?>">></a></li>
              </ul>
            </nav>

        </div>
    </div>
</div>

