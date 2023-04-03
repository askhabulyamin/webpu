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
    <center><h3 style="color: #0525b2">Videos</h3></center>
    <div class="row mt-3">
        <?php foreach ($yt as $key => $value):?>
            <div class="col-md-3">
                <div class="card">
                    <a class="pop" style="cursor:pointer"><img class="card-img-top border-img" src="https://img.youtube.com/vi/<?= $value['id']['videoId'];?>/hqdefault.jpg" alt="<?= $value['snippet']['title']?>"></a>
                    <div class="p-4">
                        <h5>
                            <a href="https://youtube.com/watch=<?=$value['id']['videoId']?>" target="_blank"><?= $value['snippet']['title']?></a>
                        </h5>
                        <hr style="margin: 5px 0px">
                        <?=tgl_ina($value['snippet']['publishedAt'])?>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="row justify-content-md-center mt-3">
        <div class="col-1 text-center" id="prevlink">
            
        </div>
        <div class="col-1 text-center" id="nextlink">
            
        </div>
    </div>
</div>


<script type="text/javascript">
    var prev = '<?=$prev?>';
    var next = '<?=$next?>';
    
    var baseurl = '<?=base_url()?>';

    if (prev != '') 
    {
        console.log(123);
        document.getElementById('prevlink').innerHTML = '<a href="'+baseurl+'/videos?pagetoken='+prev+'"><i class="fas fa-chevron-left" style="cursor:pointer"></i></a>';
    }
    if (next != '') 
    {
        console.log(333);
        document.getElementById('nextlink').innerHTML = '<a href="'+baseurl+'/videos?pagetoken='+next+'"><i class="fas fa-chevron-right" style="cursor:pointer"></i></a>';
    }
</script>