<?php include('include/header.php'); ?>
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
      <div class="container pt-60 pb-60">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title">Product Details</h2>
              <ol class="breadcrumb text-center text-black mt-10">
                <li><a href="./">Home</a></li>
                <li class="active text-theme-colored">Product Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Service details -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-md-8 pull-left flip">
              <div class="row">
                <div class="col-md-12">
                  <img alt="" src="assets/product_details/15.jpg" alt="" />
                </div>
              </div>
              <div class="row"><br><br>
              <div class="col-md-12">
              <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab1" data-toggle="tab">Description</a></li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane fade in active" id="tab1">
                      <h3>Product Description</h3>
                          <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Name</th>
                            <td><p>WELLIV</p></td>
                          </tr>
                          <tr>
                            <th>COMPOSITION</th>
                            <td>
                            </td>
                          </tr>
                          <tr>
                            <td>Ext. Phylanthus Niruri (Bhui Amla ghanstave)</td>
                            <td>125 mg</td>
                          </tr>
                          <tr>
                            <td>Ext. Eclipta Alpa Hassk (Bhringraj Ghanstave)</td>
                            <td>40 mg</td>
                          </tr>
                          <tr>
                            <td>Ext.Tinospora Cordifola (giloy Ghanstave)</td>
                            <td>125 mg</td>
                          </tr>
                          <tr>
                            <td>Ext. Terminalia Arjuna (Arjun chall Ghanstave)</td>
                            <td>40 mg</td>
                          </tr>
                          <tr>
                            <td>Picrorhiza Kurroa ( kutki)</td>
                            <td>50 mg</td>
                          </tr>
                          <tr>
                            <td>Zingiber officinale Rosc. ( Sounth)</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Piper Nigrum Linn (Kali Mirch)</td>
                            <td>40 mg</td>
                          </tr>
                          <tr>
                            <td>Piper Longum Linn (Pipal)</td>
                            <td></td>
                          </tr>
                          <tr>
                            <td>Reduced Iron (Loh Bhasma)</td>
                            <td>30 mg</td>
                          </tr>
                          <tr>
                            <td>Commiphora Mukul (Sudh Guggul)</td>
                            <td>25 mg</td>
                          </tr>
                          <tr>
                            <td>Excipients q.s</td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
              </div>  
              </div>
              </div>
            </div>
            <div class="col-sx-12 col-sm-4 col-md-4 sidebar pull-right flip">
              <div class="widget">
                <h3 class="line-bottom mt-0">Products</h3>
                <div class="categories">
                  <ul class="list angle-double-right list-border pd-ul product_listing">
                    <?php include('include/product_list.php'); ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->  
<?php include('include/footer.php'); ?>