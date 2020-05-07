<?php get_header(); //appel du template header.php  ?>
<?php /*
<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1>
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                </a>
            </h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_excerpt(); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div> <!-- /content -->
*/ ?>
    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
      <div class="card-columns">
          <?php
          // boucle WordPress
          if (have_posts()){
              while (have_posts()){
                  the_post();
          ?>
          <div class="card">
              <a href="<?php the_permalink(); ?>">
                  <?php
                    if(has_post_thumbnail())
                    {
                        the_post_thumbnail('home-thumb',
                                            array(
                                                'class'=>'card-img-top probootstrap-animate',
                                                'alt' => get_the_title()
                                            ));
                    }
                  ?>
                  <!-- <img class="card-img-top probootstrap-animate" src="images/img_1.jpg" alt="Card image cap"> -->
              </a>
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
          <!-- <div class="card">
          <a href="single.html">
          <img class="card-img-top probootstrap-animate" src="images/img_1.jpg" alt="Card image cap">
          </a>
        </div> -->

      </div>


<?php get_footer();  //appel du template footer.php ?>
