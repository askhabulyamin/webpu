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
</style>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-8">
            <h4><strong><?=$detail['JudulKegiatan']?></strong></h4>
            <hr>
            <?php if (!empty($detail['Banner'])): ?>
                <img class="img-fluid" src="<?=puis_url?><?=$value['CooperationBanner']?>">
            <?php endif ?>
            <b>Date :</b> <?=tgl_ina($detail['EndDate'])?><br><br>
            <b>Kategori Kegiatan :</b> <?=$detail['Kategori_kegiatan']?><br>
            <b>Dengan Lembaga :</b> <?=$detail['Lembaga']?><br>
            <b>Bentuk Kegiatan :</b> <?=$detail['BentukKegiatan']?><br>
            <b>Manfaat Kegiatan :</b> <?=$detail['ManfaatKegiatan']?><br><br>

            <?=$detail['Desc']?>
        </div>
        <div class="col-md-4">
            <div class="card shadow">
                <div class="card-body">
                    <h4>Recent Activity</h4><hr>
                    <?php foreach ($recent_kerja_sama as $key => $value): ?>
                        <div class="row mb-6">
                            <div class="col-md-12">
                                <strong><h5><a href="<?= base_url('cooperation/').$value['ID'];?>"><?=$value['JudulKegiatan']?></a></h5></strong>
                                <?=tgl_ina($value['EndDate'])?>
                                <hr>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
            <hr>
        </div>
    </div>
            
</div>