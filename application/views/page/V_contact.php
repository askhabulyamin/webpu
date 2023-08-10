<style type="text/css">
    #btn_send {
        width: 25%;
        background: #d20a11;
        float: right;
        margin-top: 10px;
        color: #fff;
        text-align: center;
        cursor: pointer;
    }

    .bg-title {
        background: #a19468;
        border-bottom-right-radius: 15px;
        border-top-right-radius: 15px;
        margin-right: -2px;
        color: #fff;
    }
    .bg-title,H1,p {
        color: white;
    }

</style>
<section >
  
<div class="row mx-xs-2 mx-sm-3 mx-md-3 mx-lg-5 py-5">

  <div class="container">

  <!-- Form with header -->
  <div class="row">
    <div class="col-lg-12">
        <h3 style="color: #0525b2;margin-left: 10px;">Contact US</h3>       
      <div class="card">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-8">

          <div class="card-body">
            <form id="form">
            <!-- Header -->
            <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Write to us:</h3>

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text"  name="name" class="form-control">
                  <label for="form-contact-name" class="">Your name</label>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text"  name="email" class="form-control">
                  <label for="form-contact-email" class="">Your email</label>
                </div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-phone" name="phone" class="form-control">
                  <label for="form-contact-phone" class="">Your phone</label>
                </div>
              </div>
              <!-- Grid column -->

              <!-- Grid column -->
              <div class="col-md-6">
                <div class="md-form mb-0">
                  <input type="text" id="form-contact-company" name="subject" class="form-control">
                  <label for="form-contact-company" class="">Subject</label>
                </div>
              </div>
              <!-- Grid column -->

            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row">

              <!-- Grid column -->
              <div class="col-md-12">
                <div class="md-form mb-0">
                  <textarea id="form-contact-message" name="message" class="form-control md-textarea" rows="3"></textarea>
                  <label for="form-contact-message">Your message</label>
                    <a class="btn-floating btn-lg primary-color" type="submit" id="btn_send">
                        <i class="far fa-paper-plane"></i>
                    </a>
                </div>
              </div>
              <!-- Grid column -->

            </div>
            
            <!-- Grid row -->
           </form>
          </div>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-4">

          <div class="card-body bg-title text-center h-100 white-text">

            <h3 class="my-4 pb-2">Contact information</h3>
            <ul class="text-lg-left list-unstyled ml-4">
              <li>
                <p><i class="fas fa-map-marker-alt pr-2"></i>Central Park Mall 3rd Floor - Unit 112 Podomoro City, Jl. Let. Jend. S. Parman Kav. 28 West Jakarta, 11470, Indonesia<br></p>
              </li>
              <li>
                <p><i class="fas fa-phone pr-2"></i>+ 021-29200456</p>
              </li>
              <li>
                <p><i class="fas fa-envelope pr-2"></i>info@podomorouniversity.ac.id</p>
              </li>
              <li><span id="OpenClose"></span>Monday - Friday 10 AM - 5 PM <br>
                                Saturday 10 AM - 4 PM <br>
                                Sunday & Public Holiday CLOSED<br></li>
            </ul>
            

          </div>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->
      </div>
    </div>
  </div>
  <!-- Form with header -->
  </div>
</div>

</section>

<script type="text/javascript">
  $(document).on('click','#btn_send',function(e){
        e.preventDefault();
        $('#btn_comment').text('Submit'); //change button text
        $('#btn_comment').prop('disabled',false); //set button enable 
        var formData = new FormData($('#form')[0]);
        $.ajax({

            type : "POST",
            url  : base_url_js +'__save_contact',
            contentType: false,       // The content type used when sending data to the server.
            cache: false,             // To unable request pages to be cached
            processData:false,
            dataType : "JSON",
            data : formData,
            success: function(data){
                    if(data.status) //if success close modal and reload ajax table
                    {
                      $('#btn_send').attr('disabled',false); //set button enable 
                      document.getElementById("form").reset();
                      $('input').parent().parent().parent().parent().addClass('has-success');
                      // $('#alert').addClass('active');
                      // $('#alert').removeClass('none');
                      // $('#myModal').modal('hide');

                    }
                    else
                    {
                        for (var i = 0; i < data.inputerror.length; i++) 
                        {
                            $('[name="'+data.inputerror[i]+'"]').parent().parent().parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
                            $('[name="'+data.inputerror[i]+'"]').next().text(data.error_string[i]); //select span help-block class set text error string
                            
                        }
                    }
                }

        });

      return false;
  });
        
</script>
