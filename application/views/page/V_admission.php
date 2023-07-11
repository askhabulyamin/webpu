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
        <div class="col-md-12">
            <h4>Admission & Registration</h4><hr>
            
            <center>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-faq-tab" data-toggle="pill" href="#pills-faq" role="tab" aria-controls="pills-faq" aria-selected="true">FAQ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-adm-tab" data-toggle="pill" href="#pills-adm" role="tab" aria-controls="pills-adm" aria-selected="false">Admission Process & Documents</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-calendar-tab" data-toggle="pill" href="#pills-calendar" role="tab" aria-controls="pills-calendar" aria-selected="false">Calendar Academic</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-tuition-tab" data-toggle="pill" href="#pills-tuition" role="tab" aria-controls="pills-tuition" aria-selected="false">Tuition Fee</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://admission.podomorouniversity.ac.id/">Online Registration</a>
                  </li>
                </ul>
            </center>
                
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-faq" role="tabpanel" aria-labelledby="pills-faq-tab">
                  <div id="accordion">
                    <?php foreach ($faq as $key => $value): ?>
                      <div class="card">
                        <div class="card-header" id="heading<?=$key?>">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" data-target="#collapse<?=$key?>" aria-expanded="true" aria-controls="collapse<?=$key?>" style="letter-spacing: 0px; cursor: pointer;">
                              <?=$value['parent_faq']?>
                            </a>
                          </h5>
                        </div>

                        <div id="collapse<?=$key?>" class="collapse" aria-labelledby="heading<?=$key?>" data-parent="#accordion">
                          <div class="card-body">
                            <?=$value['text_faq']?>
                          </div>
                        </div>
                      </div>
                    <?php endforeach ?>
                    </div>
              </div>
              <div class="tab-pane fade" id="pills-adm" role="tabpanel" aria-labelledby="pills-adm-tab">
                  <img src="<?=puis_url.$process['cover']?>" class="img-fluid"><br><br>

                  <?=$process['description']?>
              </div>
              <div class="tab-pane fade" id="pills-calendar" role="tabpanel" aria-labelledby="pills-calendar-tab">
                <br>
                  <div id="caleandar">
                      
                  </div>
              </div>
              <div class="tab-pane fade" id="pills-tuition" role="tabpanel" aria-labelledby="pills-tuition-tab">
                <hr>
                  <div class="row">
                    <?php foreach ($tuition as $key => $value): ?>
                      <div class="col-md-6 text-center">
                          <a href="<?=puis_url.$value['file_tuition']?>" target="_blank" class="btn btn-primary"><?=$value['name_tuition']?></a>
                      </div>
                    <?php endforeach ?>
                  </div>
              </div>
            </div>

        </div>
    </div>
</div>

<script type="text/javascript">
var fromPHP=<?php echo $calendar; ?>;

var events = [];
for (i=0; i<fromPHP.length; i++) 
{
    var year = fromPHP[i]['date'].substring(0, 4);
    var month = fromPHP[i]['date'].substring(6, 7);
    var date = fromPHP[i]['date'].substring(9, 10);

    var obj = {'Date': new Date(year, month-1, date), 'Title': fromPHP[i]['name']};

    events[i] = obj;
}

var settings = {};
var element = document.getElementById('caleandar');
caleandar(element, events, settings);
</script>