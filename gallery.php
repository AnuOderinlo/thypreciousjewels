<!DOCTYPE html>
<html lang="en">
  <?php include 'template/head.php'; ?>
  <body>
    <div class="page">
      <!-- Page title-->
      <section class="section page-title bg-image context-dark" style="background-image: url(img/gallery.png);">
        <!--RD Navbar-->
         <?php include 'template/header.php'; ?>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-xl-8">
              <h2 class="h1 page-title-text">Gallery</h2>
            </div>
          </div>
        </div>
      </section>
      <!-- Gallery-->
      <section class="section-md bg-transparent">
        <div class="container">
          <div class="isotope-wrap">
            <div class="isotope-filters">
              <div class="h4 isotope-filter active" data-isotope-filter="*">All</div>
              <div class="h4 isotope-filter" data-isotope-filter=".services">Posts</div>
              <div class="h4 isotope-filter" data-isotope-filter=".facilities">Programs</div>
            </div>
            <div class="isotope row row-30 row-xl-80">
              <div class="col-md-6 isotope-item services">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-01-570x570.jpg" alt="" width="570" height="570"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Floral Arrangmenets</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-md-6 isotope-item facilities">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-02-570x270.jpg" alt="" width="570" height="270"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Memorial Services</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-xl-3 col-md-6 isotope-item services">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-03-570x570.jpg" alt="" width="570" height="570"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Funeral Ceremony</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-xl-3 col-md-6 isotope-item services">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-04-570x570.jpg" alt="" width="570" height="570"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Visitation Chapels</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-xl-3 col-md-6 isotope-item services">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-05-570x570.jpg" alt="" width="570" height="570"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Crematory</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-xl-3 col-md-6 isotope-item services">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-06-570x570.jpg" alt="" width="570" height="570"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Coffee Room</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
              </div>
              <div class="col-md-6 isotope-item facilities">
                      <!-- Thumbnail connor-->
                      <figure class="thumbnail thumbnail-over"><img src="images/galley-07-570x270.jpg" alt="" width="570" height="270"/>
                        <figcaption class="thumbnail-over-caption">
                          <h4 class="thumbnail-over-title">Parking Facilities</h4>
                          <div class="thumbnail-over-description">Duis aute irure dolor in reprehenderit.</div><a class="thumbnail-over-btn" href="#">Learn more</a>
                        </figcaption>
                      </figure>
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