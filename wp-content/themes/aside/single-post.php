<?php get_header(); //appel du template header.php  ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
<div class="probootstrap-bar">
  <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
  <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
</div>
<div class="container-fluid">
  <div class="row justify-content-center">
      <?php
      // boucle WordPress
      if (have_posts()){
          while (have_posts()){
              the_post();
      ?>
      <div class="col-xl-8 col-lg-12">
        <p class="mb-5">
          <?php
            if(has_post_thumbnail())
            {
              the_post_thumbnail('single-thumb',
                                  array(
                                      'class'=>'img-fluid',
                                      'alt' => get_the_title()
                                  )
              );
            }
           ?>
          <!-- <img src="images/img_bg_2.jpg" alt="Free Bootstrap 4 Template by uicookies.com" class="img-fluid">-->
        </p>

        <div class="row">
          <div class="col-xl-8 col-lg-12 mx-auto">
            <h1 class="mb-5"><?php the_title(); ?></h1>
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        </div>

      </div>
      <?php
      }
      }
      else {
      ?>
      Nous n'avons pas trouvé d'article répondant à votre recherche
      <?php
      }
      ?>
    </div>
    <!-- END row -->

    <section class="probootstrap-section">
      <div class="container-fluid">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <h2 class="h1 mb-5 mt-0">Related Projects</h2>
              </div>
            </div>

          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="owl-carousel probootstrap-owl">

              <div class="item">
                <img src="images/img_2.jpg" class="img-fluid" alt="Free Template by uicookies.com">
                <div class="p-4 border border-top-0">
                  <h4>Craig Smith</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="item">
                <img src="images/img_3.jpg" class="img-fluid" alt="Free Template by uicookies.com">
                <div class="p-4 border border-top-0">
                  <h4>Peter Wood</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="item">
                <img src="images/img_4.jpg" class="img-fluid" alt="Free Template by uicookies.com">
                <div class="p-4 border border-top-0">
                  <h4>James Carl</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="item">
                <img src="images/img_5.jpg" class="img-fluid" alt="Free Template by uicookies.com">
                <div class="p-4 border border-top-0">
                  <h4>Craig Smith</h4>
                  <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div>
    </section>
    <!-- END section -->

    </div>


<?php get_footer();  //appel du template footer.php ?>
