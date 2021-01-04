<!DOCTYPE html>
<html lang="en">
  <?php include 'template/head.php'; ?>
  <body>
    <div class="page">
      <!-- Page title-->
      <section class="section page-title bg-image context-dark" style="background-image: url(images/bg-breadcrumbs-03.jpg);">
        <!--RD Navbar-->
         <?php include 'template/header.php'; ?>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-xl-8">
              <h2 class="h1 page-title-text">Shop</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Shop-->
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="row row-40">
            <div class="col-md-8 col-lg-9">
              <div class="row row-40 row-xl-55">
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-01-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">Dreams from the Heart</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-02-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">Tulips Bouquet</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-03-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">Thoughtful Lily Bouquet</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-04-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">51 multicolored tulips
</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-05-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">Miracle's Light Vase</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
                <div class="col-6 col-lg-4">
                        <!-- Product-->
                        <div class="product product-simple"><a class="product-media" href="single-product.php"><img src="images/shop-06-270x359.jpg" alt="" width="270" height="359"/></a>
                          <h4 class="product-title"><a href="single-product.php">Burst of Light Bouquet</a></h4>
                          <div class="h4 product-price">$35.00</div>
                        </div>
                </div>
              </div>
                    <ul class="pagination justify-content-center">
                      <li class="page-item disabled"><a class="page-link page-link-prev mdi-chevron-left novi-icon" href="#"></a>
                      </li>
                      <li class="page-item active"><a class="page-link" href="#">1</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">2</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">3</a>
                      </li>
                      <li class="page-item"><a class="page-link page-link-next mdi-chevron-right novi-icon" href="#"></a>
                      </li>
                    </ul>
            </div>
            <div class="col-md-4 col-lg-3">
              <div class="widget widget-search">
                <div class="widget-body">
                  <form action="search-results.php" method="GET" data-rd-search='{"template":"<h6 class=\"search-title\"><a target=\"_top\" href=\"#{href}\" class=\"search-link\">#{title}</a></h6><p>...#{token}...</p>"}'>
                    <div class="form-group form-group-icon">
                      <input class="form-control" type="text" placeholder="Search in shop..." autocomplete="off" name="s">
                      <button class="form-group-icon-btn mdi-magnify"></button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title">Categories</h4>
                <div class="widget-body">
                  <ul class="list list-divided list-divided-sm big">
                    <li class="list-item"><a class="link link-arrow" href="#">Bouquets</a></li>
                    <li class="list-item"><a class="link link-arrow" href="#">Standing Sprays</a></li>
                    <li class="list-item"><a class="link link-arrow" href="#">Sympathy Bouquets</a></li>
                    <li class="list-item"><a class="link link-arrow" href="#">Other</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title">Price</h4>
                <div class="widget-body">
                  <!-- RD Range-->
                  <div class="rd-range" data-min="0" data-max="999" data-min-diff="100" data-start="[66, 335]" data-step="1" data-tooltip="false" data-input=".rd-range-input-value-1" data-input-2=".rd-range-input-value-2"></div>
                  <div class="rd-range-value">
                    <div class="rd-range-form-wrap"><span>$</span>
                      <input class="rd-range-input rd-range-input-value-1" type="text" name="value-1" size="3">
                    </div>
                    <div class="rd-range-form-wrap"><span>$</span>
                      <input class="rd-range-input rd-range-input-value-2" type="text" name="value-2" size="3">
                    </div>
                  </div>
                  <button class="btn">Filter</button>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title">Popular Products</h4>
                <div class="widget-body">
                        <!-- Product small-->
                        <div class="product product-small"><a class="product-img-link" href="single-product.php"><img src="images/product-thumb-01-72x91.jpg" alt="" width="72" height="91"/></a>
                          <div class="product-body">
                            <h5 class="product-title"><a href="single-product.php">Dreams from the Heart Bouquet</a></h5>
                            <div class="product-price">$35</div>
                          </div>
                        </div>
                        <!-- Product small-->
                        <div class="product product-small"><a class="product-img-link" href="single-product.php"><img src="images/product-thumb-02-72x91.jpg" alt="" width="72" height="91"/></a>
                          <div class="product-body">
                            <h5 class="product-title"><a href="single-product.php">Tulips Sympathy Bouquet</a></h5>
                            <div class="product-price">$35</div>
                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Footer extended-->
      <?php include 'template/footer.php'; ?>
    </div>
    <!-- Preloader-->
    <div class="preloader">
      <div class="preloader-inner">
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
        <div class="preloader-dot"></div>
      </div>
    </div>
  </body>
</html>