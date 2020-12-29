<?php  
/*
Template Name: Homepage Template
*/
get_header(); ?>

    <!--Main Navigation-->
    <header class="card">
        <?php
    echo do_shortcode('[smartslider3 slider="2"]');
    ?>
        
    </header>
    <!--Main Navigation-->
    
      <!-- Our features -->
      <section  id="features" class="mb-5 container">

      <?php 
        $feature_title = cs_get_option('feature_title');
        $feature_description = cs_get_option('feature_description');
      ?>
        <!--Section heading-->
        <h1 class="mb-3 my-5 pt-5 dark-grey-text wow fadeIn text-center" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;"><?php echo $feature_title ?></h1>

        <!--Section description-->
        <p class="text-center grey-text w-responsive mx-auto mb-5 wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;"><?php echo $feature_description ?></p>

        <!--First row-->
        <div class="row features wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">

        <?php
          global $post;
          $args = array( 'posts_per_page' => 5, 'post_type'=> 'feature', 'orderby' => 'menu_order', 'order' => 'ASC' );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) : setup_postdata($post); 

            $feature_icon = get_post_meta($post->ID, 'feature_icon', true); 
          ?>
                        
              <div class="col-lg-4 text-center mb-4">
                <div class="icon-area">
                  <div class="circle-icon">
                    <i class="<?php echo $feature_icon; ?> blue-text fa-2x"></i>
                  </div>
                  <br>
                  <h5 class="dark-grey-text font-weight-bold mt-2"><?php the_title(); ?></h5>
                  <div class="mt-1">
                    <div class="mx-3 grey-text"><?php the_content(); ?></div>
                  </div>
                </div>
              </div>

          <?php endforeach; wp_reset_query(); ?>

          
        </div>
        <!--/First row-->

      </section>

    <!-- Quotation Section  Static-->
    <!-- <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
      <div style="padding: 6rem;" class="flex-center mask rgba-indigo-strong">
        <div class="text-center white-text bangla-font">
          <h2 class="h2-responsive mb-5">
            <i class="fas fa-quote-left" aria-hidden="true"></i> যে ব্যাক্তি আল্লাহকে ও আখিরাতে ঈমান রাখে, তার উচিত হয় উত্তম কথা বলা অথবা চুপ থাকা।
            <i class="fas fa-quote-right" aria-hidden="true"></i>
          </h2>

          <h5 class="text-center font-italic " data-wow-delay="0.2s">~ রাসূলুল্লাহ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম (বুখারী ও মুসলিম) </h5>
        </div>
      </div>
    </div> -->

    <?php 
      $quote1 = cs_get_option('quote1');
      $quote2 = cs_get_option('quote2');
      $quote3 = cs_get_option('quote3');
      $quote1person = cs_get_option('quote1person');
      $quote2person = cs_get_option('quote2person');
      $quote3person = cs_get_option('quote3person');
    ?>

    <!-- Quotation Section Carousel-->
    <div class="streak streak-photo streak-md" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full%20page/img%20%287%29.jpg');">
      <div id="carouselExampleCaptions" class="carousel slide" data-mdb-ride="carousel">
          <ol class="carousel-indicators">
            <li data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active"></li>
            <li data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1"></li>
            <li data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2"></li>
          </ol>
          <div style="padding: 6rem;" class="flex-center mask rgba-indigo-strong">          
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="text-center white-text bangla-font">
                  <h2 class="h2-responsive mb-5">
                    <i class="fas fa-quote-left" aria-hidden="true"></i> <?php echo $quote1; ?>
                    <i class="fas fa-quote-right" aria-hidden="true"></i>
                  </h2>

                  <h5 class="text-center font-italic " data-wow-delay="0.2s">~ <?php echo $quote1person; ?> </h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center white-text bangla-font">
                  <h2 class="h2-responsive mb-5">
                    <i class="fas fa-quote-left" aria-hidden="true"></i> <?php echo $quote2; ?>
                    <i class="fas fa-quote-right" aria-hidden="true"></i>
                  </h2>

                  <h5 class="text-center font-italic " data-wow-delay="0.2s">~ <?php echo $quote2person; ?> </h5>
                </div>
              </div>
              <div class="carousel-item">
                <div class="text-center white-text bangla-font">
                  <h2 class="h2-responsive mb-5">
                    <i class="fas fa-quote-left" aria-hidden="true"></i> <?php echo $quote3; ?>
                    <i class="fas fa-quote-right" aria-hidden="true"></i>
                  </h2>

                  <h5 class="text-center font-italic " data-wow-delay="0.2s">~ <?php echo $quote3person; ?> </h5>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>


      <!-- Our courses Section -->
    <div style="background-color: #f7f7f7;" class="container-fluid background-r">
      <div class="container py-3">

        <!--Section: Blog v.2-->
        <section class="extra-margins text-center">

          <h2 class="text-center mb-5 my-5 pt-4 pb-4 font-weight-bold">Itqaan Extensive</h2>

          <!--Grid row-->
          <div class="row mb-5 pb-3">

          <?php
          global $post;
          $args = array( 'posts_per_page' => 8, 'post_type'=> 'course', 'orderby' => 'menu_order', 'order' => 'ASC' );
          $myposts = get_posts( $args );
          foreach( $myposts as $post ) : setup_postdata($post); 
          
          ?>

            <!--Grid column-->
            <div class="col-lg-3 col-md-6 mb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

              <!--Card Light-->
              <div class="card">
                <!--Card image-->
                <div class="view overlay">
                  <?php the_post_thumbnail(  array('class' => 'course-thumbnail', 'class' => 'card-img-top', '255,170') ); ?>
                  <!-- <img src="http://itqaan.org/wp-content/uploads/2018/08/trinity-college-405783_1280.jpg" class="card-img-top" alt=""> -->
                  <a href="<?php echo get_permalink() ?>">
                    <div class="mask rgba-white-slight waves-effect waves-light"></div>
                  </a>
                </div>
                <!--/.Card image-->
                <!--Card content-->
                <div class="card-body">

                  <!--Title-->
                  <h4 class="card-title darkgrey-text">
                    <strong><?php the_title(); ?></strong>
                  </h4>
                  <hr>
                  <!--Text-->
                  <p class="font-small"><?php the_content(); ?> </p>
                  <a href="<?php echo get_permalink() ?>" class="black-text d-flex flex-row-reverse">
                    <p class="waves-effect p-2 font-small blue-text mb-0">Read more
                      <i class="fas fa-long-arrow-alt-right ml-2" aria-hidden="true"></i>
                    </p>
                  </a>
                </div>
                <!--/.Card content-->
              </div>
              <!--/.Card Light-->

            </div>
            <!--Grid column-->

          <?php endforeach; wp_reset_query( ); ?>

          </div>
          <!--First row-->

        </section>
        <!--Section: Blog v.2-->

      </div>
    </div>


      <!-- About Section -->
    <section style="background-color: #f7f7f7; padding-top: 1rem" id="about" class="mt-4 d-none">
    <div class="container">
        <!--Secion heading-->
        <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">Why Itqaan</h2>

        <!--First row-->
        <div class="row">

        <!--First column-->
        <div class="col-lg-5 col-md-12 mb-5 pb-4 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

            <!--Image-->
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Architecture/4-col/img%20%289%29.jpg" class="img-fluid z-depth-1 rounded" alt="My photo">

        </div>
        <!--First column-->

        <!--Second column-->
        <div class="col-lg-6 dark-grey-text ml-lg-auto col-md-12 wow fadeIn" data-wow-delay="0.4s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.4s;">

            <!--Description-->
            <p align="justify">এক রৌদ্রতপ্ত দিনে রাসূলুল্লাহ সাঃ মীনায় আগত হাজ্জ্বযাত্রীদের মাঝে ইসলামের দাওয়াহ দিচ্ছিলেন। তাদের কারও থেকে তিনি পাচ্ছিলেন খুব রুক্ষ আচরণ, কেউবা আবার করছিল তিরষ্কার আর কেউ করছিল ব্যঙ্গ-বিদ্রুপ। এক পর্যায়ে কিছু মানুষ তাঁর মাথায় মাটি ছুঁড়ে মারে। দীর্ঘক্ষণ দাওয়াহ দেওয়ার পর ক্লান্ত-শ্রান্ত শরীরে এমন চূড়ান্ত ন্যাক্কারজনক আচরণ পেয়ে তিনি এক জায়গায় বসে পড়লেন। এই অবস্থায় তাঁর প্রাণপ্রিয় কন্যা জায়নাব রাঃ তাঁকে দেখতে পেয়ে দৌড়ে আসলেন এবং বাবার মাথা থেকে মাটি পরিষ্কার করতে করতে কাঁদো কাঁদো গলায় বললেন, “একটি জাতি কীভাবে আল্লাহর রাসূলের সাথে এমন আচরণ করতে পারে?”
            </p>

            <p align="justify">জায়নাব রাঃ এর কণ্ঠে একরাশ আক্ষেপ আর বুকভরা কষ্ট যেন ঠিকরে পড়ছে! এই অবস্থায় সায়্যিদুল মুরসালিন রাসূলুল্লাহ সাঃ কী বলেছিলেন তাঁর প্রাণপ্রিয় কন্যাকে ? </p>

            
            <a href="<?php get_permalink() ?>/whay-itqaan" class="black-text d-flex flex-row-reverse">
                <button class="btn btn-info">Read More</button>        
            </a>
        </div>
        <!--Second column-->

        </div>
        <!--First row-->
    </div>
    </section>

    <!-- Itqaan Tube -->
    <section class="container"> 
      <!--Secion heading-->
      <h2 class="text-center my-5 font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">Itqaan Tube</h2>

      <?php echo do_shortcode('[embedyt] https://www.youtube.com/embed?listType=playlist&list=UU-8UcK4vvZGCCY-XeUHLcvg&layout=gallery[/embedyt]'); ?>

    </section>
    

    <!-- Some stat section -->
    <div class="streak streak-photo streak-long-2" style="background-image:url('https://mdbootstrap.com/img/Photos/Horizontal/Things/full page/img%20%287%29.jpg')">
      <div style="padding: 6rem;" class="mask flex-center rgba-indigo-strong">
        <div class="container">
          <h3 class="text-center text-white mb-5 text-uppercase font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
          Some Stat of Itqaan</h3>
          <!--First row-->
          <div class="row text-white text-center wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
            <!--First column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+950</h1>
              <p>Students</p>
            </div>
            <!--/First column-->
            <!--Second column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+150</h1>
              <p>Courses</p>
            </div>
            <!--/Second column-->
            <!--Third column-->
            <div class="col-md-3 mb-2">
              <h1 class="white-text mb-1 font-weight-bold">+85</h1>
              <p>Faculties</p>
            </div>
            <!--/Third column-->
            <!--Fourth column-->
            <div class="col-md-3">
              <h1 class="white-text mb-1 font-weight-bold">+246</h1>
              <p>Cups of coffee</p>
            </div>
            <!--/Fourth column-->
          </div>
          <!--/First row-->
        </div>
      </div>
    </div>

      <!-- Our faculties -->
      <section class="team-section pb-5 container d-none" id="team">

        <!-- Section heading -->
        <h3 class="text-center title my-5 dark-grey-text font-weight-bold wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-name: fadeIn; animation-delay: 0.2s;">
          <strong>Our Team</strong>
        </h3>

        <!-- Section description -->
        <p class="text-center w-responsive mx-auto my-5 grey-text">Meet our excellent team.</p>

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-body">
              <div class="avatar mx-auto mt-3 mb-3">
                <img width="250px" height="250px" src="https://www.csircmc.res.in/sites/default/files/default_images/default_man_photo.jpg" class="rounded-circle" alt="First sample avatar image">
              </div>
              <h6 class="font-weight-bold title">Kabir Anwar</h6>

              <p class="font-small grey-text">Founder & Lead Instructor, Itqaan Institute</p>

              <ul class="list-unstyled">
                <!-- Facebook -->
                <a class="p-2 m-2 fa-lg fb-ic">
                  <i class="fab fa-facebook-f orange-text"> </i>
                </a>
                <!-- Twitter -->
                <a class="p-2 m-2 fa-lg tw-ic">
                  <i class="fab fa-twitter orange-text"> </i>
                </a>
                <!-- Instagram -->
                <a class="p-2 m-2 fa-lg ins-ic">
                  <i class="fab fa-instagram orange-text"> </i>
                </a>
              </ul>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-body">
              <div class="avatar mx-auto mt-3 mb-3">
                <img width="250px" height="250px" src="https://www.csircmc.res.in/sites/default/files/default_images/default_man_photo.jpg" class="rounded-circle" alt="First sample avatar image">
              </div>
              <h6 class="font-weight-bold title">MuZahid Rasel</h6>

              <p class="font-small grey-text">Co-founder, Itqaan Institute</p>

              <ul class="list-unstyled">
                <!-- Facebook -->
                <a class="p-2 m-2 fa-lg fb-ic">
                  <i class="fab fa-facebook-f orange-text"> </i>
                </a>
                <!-- Instagram -->
                <a class="p-2 m-2 fa-lg ins-ic">
                  <i class="fab fa-instagram orange-text"> </i>
                </a>
              </ul>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card card-body">
              <div class="avatar mx-auto mt-3 mb-3">
                <img width="250px" height="250px" src="https://www.csircmc.res.in/sites/default/files/default_images/default_man_photo.jpg" class="rounded-circle" alt="First sample avatar image">
              </div>
              <h6 class="font-weight-bold title">Sheikh Asif</h6>

              <p class="font-small grey-text">Co-founder, Itqaan Institute</p>

              <ul class="list-unstyled">
                <!-- Facebook -->
                <a class="p-2 m-2 fa-lg fb-ic">
                  <i class="fab fa-facebook-f orange-text"> </i>
                </a>
                <!-- Instagram -->
                <a class="p-2 m-2 fa-lg ins-ic">
                  <i class="fab fa-instagram orange-text"> </i>
                </a>
                <!-- Dribbble -->
                <a class="p-2 m-2 fa-lg ins-ic">
                  <i class="fab fa-dribbble orange-text"> </i>
                </a>
              </ul>
            </div>
          </div>
          <!-- Grid column -->


        </div>
        <!-- Grid row -->

      </section>

      

    <!--Main layout-->
    <main>
        <div class="container">

            <!--Section: Dynamic Content Wrapper-->
            <section>
              <div id="dynamic-content"></div>

            </section>
            <!--Section: Dynamic Content Wrapper-->

            <!--Section: Articles-->
            <section class="text-center">

                <!--Section heading-->
                <h1 class="h2 font-weight-bold my-4">Recent articles</h1>

                <?php 

                // if ( have_posts() ) : 
                //     while ( have_posts() ) : the_post();
                //         the_content();
                //         echo 'Hello';
                //     endwhile;
                // else :
                //     _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
                // endif;

                ?>

                <!--Grid row-->
                <div class="row wow fadeIn">
                <?php
                if ( have_posts() ) {
                $counter = 1;
                while ( have_posts() ) {
                the_post();
                ?>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                            <a href="<?php echo get_permalink() ?>">
                                <div class="mask"></div>
                            </a>
                        </div>

                        <!--Excerpt-->
                        <a href="" class="pink-text">
                            <h6 class="mb-3 mt-4">
                                <i class="fa fa-bolt"></i>
                                <strong> <?php the_category(', '); ?></strong>
                            </h6>
                        </a>
                        <h4 class="mb-3 font-weight-bold dark-grey-text">
                            <strong><?php the_title(); ?></strong>
                        </h4>
                        <p>by
                            <a href="<?php echo get_permalink() ?>" class="font-weight-bold dark-grey-text"><?php echo get_the_author(); ?></a>, <?php echo get_the_date(); ?></p>
                        <p class="grey-text"><?php the_excerpt(); ?></p>
                        <a href="<?php echo get_permalink() ?>" class="btn btn-info btn-rounded btn-md">Read more</a>
                    </div>
                    <!--Grid column-->

                <?php
                if ($counter % 3 == 0) {
                ?>
                </div>
                <!--Grid row-->
                <!--Grid dynamic row-->
                <div class="row wow fadeIn">
                <?php
                }
                $counter++;
                } // end while
                } // end if
                ?>
                </div>
                <!--Grid row-->

                <?php fleet_pagination(); ?>

            </section>
            <!--Section: Articles-->

        </div>
    </main>
    <!--Main layout-->

    
<?php  get_footer(); ?>
