<?php get_header(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">
  <div class="probootstrap-bar">
    <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
    <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
  </div>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <?php
        if( have_posts()){
          while(have_posts()){
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
        <div class="row">

          <div class="col-xl-8 col-lg-12 mx-auto">
            <h1 class="mb-3"><?php the_title(); ?></h1>
            <div>
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </div>
      <?php
          $services = get_field("services_associes");
          // echo '<pre>';
          // var_dump($services);
          // echo'</pre>';
          // for($i= 0; $i< count($services); $i++){
          //   echo $services[$i];
          //   echo get_the_title($services[$i]);
          //   echo get_field('classe_de_licone', $services[$i]);
          //}

          }
        }
      ?>
    </div>
    <!-- END row -->
    <?php if($services != false )
    {
    ?>
    <section class="probootstrap-section">
      <div class="container-fluid">
        <div class="row mb-5">
          <?php
          $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1,
            'post__in' => $services
          );
          $the_query = new WP_Query( $args );

          // The Loop
          if ( $the_query->have_posts() ) {
            while ( $the_query->have_posts() ) {
                $the_query->the_post();
                $classIcon = get_field('classe_de_licone');
                if($classIcon == false){ $classIcon = 'oi-thumb-up'; }
            ?>
            <div class="col-lg-4 col-md-6">
              <div class="media d-block mb-4 text-left probootstrap-media p-md-5 p-4">
                <div class="probootstrap-icon mb-3"><span class="oi <?php echo $classIcon; ?> display-4"></span></div>
                <div class="media-body">
                  <h5 class="mt-0"><?php the_title(); ?></h5>
                  <div>
                    <?php the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
            <?php
            }
            /* Restore original Post Data */
            wp_reset_postdata();
          } else {
            // no posts found
          }
          ?>
        </div>




      </div>
    </section>
    <!-- END section -->
  <?php } ?>

  </div>
<?php get_footer(); ?>
