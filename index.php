<?php get_header(); ?>

    <header>

    <!-- Intro -->
    <div class="card card-intro blue-gradient mb-4">

        <div class="card-body white-text rgba-black-light text-center pt-5 pb-4">

            <!--Grid row-->
            <div class="row d-flex justify-content-center">

                <!--Grid column-->
                <div class="col-md-6">

                    <h1 class="font-weight-bold mb-4">Itqaan Blog</h1>
                    <p class="lead mb-4">Checkout our latest posts...
                    </p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>

    </div>
    <!-- Intro -->

    </header>

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
                <!-- <h1 class="h2 font-weight-bold my-4">Recent articles</h1> -->

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

<?php get_footer(); ?>