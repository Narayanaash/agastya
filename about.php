<?php include('include/header.php');?>  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">About</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="./">Home</a></li>
                <li class="active text-theme-colored">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: About -->
    <section>
      <div class="container pb-0 pb-xs-60">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-5">
              <h3 class="mt-0 line-bottom"><span class="font-weight-300">Welcome to </span> <span class="text-theme-colored font-weight-400">Agastya Research</span></h3>
              <p class="lead mb-10 text-justify">Established in 2008 , Agastya Research has made a name for itself in the list of top pharmaceutical company in India. The pharmaceutical company is located in Hauz Qazi, Delhi-6 and is one of the leading sellers of listed products.
Agastya Research is listed in Trade India's list of verified sellers offering supreme quality of etc. Buy in bulk from us for the best quality products and service. Our Objective is to serve the society at large with unique brands and formulation for better health care.</p>
              <!-- <div class="row">
                <div class="col-xs-6">
                  <ul class="mt-10">
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Family Support</li>
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Group Work</li>
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Clinical Trials</li>
                  </ul>
                  </div>
                  <div class="col-xs-6">
                  <ul class="mt-10">
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Feel like Home </li>
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Childhood Care</li>
                    <li class="mb-10"><i class="fa fa-angle-double-right text-theme-colored font-15"></i>&emsp;Cancer Therapy</li>
                  </ul>
                </div>
              </div> -->
            </div>
            <div class="col-sm-6 col-md-4">
              <div class="thumb">
                <img src="images/about/3.png" alt="" width="75%">
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="bg-white-transparent">
                <div class="border-5px p-20">
                  <h5><i class="fa fa-clock-o text-theme-colored"></i> Opening Hours</h5>
                  <div class="opening-hours text-left">
                    <ul class="list-unstyled">
                      <li class="clearfix line-height-1"> <span>Monday-Friday </span>
                        <div class="value"> 10.00 - 7.00 </div>
                      </li>
                      <li class="clearfix line-height-1"> <span> Saturday </span>
                        <div class="value"> 10.00 - 7.00 </div>
                      </li>
                      <li class="clearfix line-height-1"> <span> Sunday </span>
                        <div class="value"> closed </div>
                      </li>
                    </ul>
                  </div>
                  <h5 class="mt-30"><i class="fa fa-pencil-square-o text-theme-colored"></i> Need Help?</h5>
                  <p class="mt-0">Just fill this form to get help from our experts</p>
                  <a href="#" class="btn btn-dark btn-theme-colored mt-15" data-toggle="modal" data-target="#modal_appontment_form_at_about">Send Your Query</a>

                  <!-- Modal - Appontment Form Starts -->
                  <div class="modal fade" id="modal_appontment_form_at_about" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="border-1px p-25">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                          <h4 class="text-theme-colored text-uppercase m-0">Contact Us by filling the form</h4>
                          <div class="line-bottom mb-30"></div>
                          <!-- Appointment Form -->
                          <form novalidate="novalidate" id="appointment_form_at_home" name="appointment_form_at_home" class="" method="post" action="#">
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="form-group mb-10">
                                  <input type="text" name="form_name" class="form-control" required="" placeholder="Enter Name" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group mb-10">
                                  <input type="email" id="form_email" name="form_email" class="form-control required email" placeholder="Enter Email" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group mb-10">
                                  <input type="text" id="form_phone" name="form_phone" class="form-control required phone" placeholder="Enter Phone" aria-required="true">
                                </div>
                              </div>
                              <div class="col-sm-12">
                                <div class="form-group mb-10">
                                  <input type="text" name="form_subject" class="form-control required" placeholder="Enter Subject" aria-required="true">
                                </div>
                              </div>
                            </div>
                            <div class="form-group mb-10">
                              <textarea name="form_message" class="form-control required" placeholder="Enter Message" rows="5" aria-required="true"></textarea>
                            </div>
                            <div class="form-group mb-0 mt-20">
                              <input type="hidden" name="form_botcheck" class="form-control" value="">
                              <button type="submit" class="btn btn-dark btn-theme-colored" data-loading-text="Please wait...">Send Message</button>
                            </div>
                          </form>

                          <!-- Appointment Form Validation-->
                          <script type="text/javascript">
                            $("#appointment_form_at_home").validate({
                              submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('&amp;lt;div id="form-result" class="alert alert-success" role="alert" style="display: none;"&amp;gt;&amp;lt;/div&amp;gt;');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                  dataType:  'json',
                                  success: function(data) {
                                    if( data.status == 'true' ) {
                                      $(form).find('.form-control').val('');
                                    }
                                    form_btn.prop('disabled', false).html(form_btn_old_msg);
                                    $(form_result_div).html(data.message).fadeIn('slow');
                                    setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                  }
                                });
                              }
                            });
                          </script>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal - Appontment Form Ends -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-light">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-6">
              <div class="section-title mb-0">
          <div class="row">
            <div class="col-md-12">
             <h3 class="title mt-0 line-bottom">Mission</h3>
            </div>
          </div>
        </div>
              <p class="mb-0 mb-sm-10">Our vision is to be a leading pharmaceutical company in India and to become a significant global player by providing high quality, affordable and innovative solutions in medicine and treatment.</p>
            </div>
            <div class="col-md-6">
              <div class="section-title mb-0">
          <div class="row">
            <div class="col-md-12">
             <h3 class="title mt-0 line-bottom">Vision</h3>
            </div>
          </div>
        </div>
              <p class="mb-0">We shall provide total customer satisfaction and achieve leadership in chosen markets, products and services across the globe, through excellence in technology, based on world-class research and development.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <!-- Section: chooseus -->
    <section class="divider parallax layer-overlay overlay-blue" data-bg-img="images/bg/bg9.jpg">
      <div class="container pb-0">
        <div class="section-content">     
          <div class="row">
            <div class="col-md-8 col-md-push-4">              
              <div class="row features-style1">
                <div class="col-sm-12">
                  <h2 class="text-white pl-15 mb-20">Why Choose Us</h2>
                  <p class="font-20 text-white-f3 pl-15 mb-30">Agastya Research is a quality driven organization offering a wide range of human medicine.</p>
                  <div class="col-sm-6">
                    <div class="icon-box left media p-0"> <a href="#" class="icon icon-md icon-circled border-1px pull-left flip icon-hov"><i class="flaticon-medical-ambulance14"></i></a>
                      <div class="media-body">
                        <h5 class="media-heading heading text-white">Newest Technologies</h5>
                        <p class="text-white-f3">We always use latest technologies. <a class="text-theme-colored ml-5" href="#"> →</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="icon-box left media p-0"> <a href="#" class="icon icon-md icon-circled border-1px pull-left flip icon-hov"><i class="flaticon-medical-illness"></i></a>
                      <div class="media-body">
                        <h5 class="media-heading heading text-white">Taking Care of Nature</h5>
                        <p class="text-white-f3">We take care of nature in our work. <a class="text-theme-colored ml-5" href="#"> →</a></p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12">
                  <div class="col-sm-6">
                    <div class="icon-box left media p-0"> <a href="#" class="icon icon-md icon-circled border-1px pull-left flip icon-hov"><i class="flaticon-medical-hospitals1"></i></a>
                      <div class="media-body">
                        <h5 class="media-heading heading text-white">Quality Driven Organization</h5>
                        <p class="text-white-f3">Our first priority is quality over quantity. <a class="text-theme-colored ml-5" href="#"> →</a></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="icon-box left media p-0"> <a href="#" class="icon icon-md icon-circled border-1px pull-left flip icon-hov"><i class="flaticon-medical-tablets9"></i></a>
                      <div class="media-body">
                        <h5 class="media-heading heading text-white">Established in 2008</h5>
                        <p class="text-white-f3">Serving India since 2008 <a class="text-theme-colored ml-5" href="#"> →</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-md-pull-8" style="padding: 88px 0;">
              <img src="images/about/service.jpg" alt="" style="border-radius: 50px; box-shadow: -3px 4px 19px 1px #00000082; border: 5px;
    border-color: #ffffff;
    border-style: solid;">
            </div>
          </div>     
        </div>
      </div>
    </section>
    <!-- Section: Services -->
<!--     <section id="services">
      <div class="container pb-30">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-12">
              <h2 class="mt-0 line-height-1 font-weight-700">Our Services</h2>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                  <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                    <i class="flaticon-medical-xray2 text-theme-colored"></i>
                  </a>
                  </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5">Laboratory Tests </h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                  <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                    <i class="flaticon-medical-operation4 text-theme-colored"></i>
                  </a>
                  </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5">Treatment Cancer</h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                  <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                    <i class="flaticon-medical-teeth1 text-theme-colored"></i>
                  </a>
                </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5">Treatment Teeth</h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                  <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                    <i class="flaticon-medical-bandage2 text-theme-colored"></i>
                  </a>
                </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5">Broken Bones</h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                  <i class="flaticon-medical-surgery text-theme-colored"></i>
                </a>
                </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5">Burns and Scalds</h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="icon-box p-20 mb-30 border-1px">
                <div class="media-left">
                  <a class="icon icon-color flip mb-0 mr-0 mt-5" href="#">
                    <i class="flaticon-medical-brain9 text-theme-colored"></i>
                  </a>
                </div>
                <div class="icon-box-details media-body">
                  <h5 class="icon-box-title m-0 mb-5"> Head Injuries</h5>
                  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non null</p>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <!-- Divider: Funfact -->
    <section class="divider parallax layer-overlay overlay-deep" data-bg-img="images/bg/bg1.jpg">
      <div class="container pt-0 pb-0">
        <div class="pt-40 pb-40 pb-sm-0">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center"> 
                <a href="#"> <i class="fa fa-calendar text-theme-colored font-36"></i></a>
                <h5 class="animate-number text-gray-base font-36" data-value="12" data-animation-duration="2500">0</h5>
                <h6 class="title text-gray-darkgray font-16">Years of Experience</h6>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center"> 
                <a href="#"> <i class="fa fa-user text-theme-colored font-36"></i></a>
                <h5 class="animate-number text-gray-base font-36" data-value="100K" data-animation-duration="2500">0</h5>
                <h6 class="title text-gray-darkgray font-16">Happy Clients</h6>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center"> 
                <a href="#"> <i class="fa fa-globe text-theme-colored font-36"></i></a>
                <h5 class="animate-number text-gray-base font-36" data-value="20+" data-animation-duration="2500">0</h5>
                <h6 class="title text-gray-darkgray font-16">States Reached</h6>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center"> 
                <a href="#"> <i class="fa fa-trophy text-theme-colored font-36"></i></a>
                <h5 class="animate-number text-gray-base font-36" data-value="12" data-animation-duration="2500">0</h5>
                <h6 class="title text-gray-darkgray font-16">Awards</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
<?php include('include/footer.php'); ?>