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
    <center><h3 style="color: #0525b2">Gallery</h3></center>
    <div class="row mt-3">
        <div class="col-md-12">
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
    <!-- <div class="row justify-content-md-center mt-3">
        <div class="col-1 text-center" id="prevlink">
            
        </div>
        <div class="col-1 text-center" id="nextlink">
            
        </div>
    </div> -->
</div>


<!-- <script type="text/javascript">
    var prev = '<?=$prev?>';
    var next = '<?=$next?>';
    
    var baseurl = '<?=base_url()?>';

    if (prev != '') 
    {
        console.log(123);
        document.getElementById('prevlink').innerHTML = '<a href="'+baseurl+'/gallery?cursor=prev&part='+prev+'"><i class="fas fa-chevron-left" style="cursor:pointer"></i></a>';
    }
    if (next != '') 
    {
        console.log(333);
        document.getElementById('nextlink').innerHTML = '<a href="'+baseurl+'/gallery?cursor=next&part='+next+'"><i class="fas fa-chevron-right" style="cursor:pointer"></i></a>';
    }
</script> -->
