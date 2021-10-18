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

            <?php       
                $categories = cs_get_option('categories');
            ?>

            <?php if(!empty($categories)) : foreach($categories as $category) : ?>
            <!--Section: Articles-->
            <h2 class="bangla-font" style="border-bottom: 2px solid #28598d;"><?php echo $category['category_title']; ?></h2>
            <hr>
            <section class="text-center mb-4">
                
                <!--Grid row-->
                <div class="row wow fadeIn">
                <?php
                $the_query = new WP_Query( array( 'category_name' => $category['category_name'], 'posts_per_page' => 10 ) );


                if ( $the_query->have_posts() ) {
                $counter = 1;
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
                ?>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                            <a href="<?php echo get_permalink(); ?>">
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
                        <h4 class="mb-3 font-weight-bold dark-grey-text bangla-font">
                            <strong><?php the_title(); ?></strong>
                        </h4>
                        <p>by
                            <a href="<?php echo get_permalink(); ?>" class="font-weight-bold dark-grey-text"><?php echo get_the_author(); ?></a>, <?php echo get_the_date(); ?></p>
                        <div class="text-justify bangla-font"><?php the_excerpt(); ?></div>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-info btn-rounded btn-md">Continue reading...</a>
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

                wp_reset_postdata();

                ?>
                </div>
                <!--Grid row-->

                <?php fleet_pagination(); ?>

            </section>
            <!--Section: Articles-->

            <?php endforeach; else: ?>            
            
            <!--Section: Articles-->
            <section class="text-center">

                <!--Grid row-->
                <div class="row wow fadeIn">
                <?php
                if ( have_posts() ) {
                $counter = 1;
                while ( have_posts() ) {
                the_post();
                ?>

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4 card card-body">
                        <!--Featured image-->
                        <div class="view overlay hm-white-slight rounded z-depth-2 mb-4">
                            <?php the_post_thumbnail( 'medium-large', array( 'class'=> 'img-fluid')); ?>
                            <a href="<?php echo get_permalink(); ?>">
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
                        <h4 class="mb-3 font-weight-bold dark-grey-text bangla-font">
                            <strong><?php the_title(); ?></strong>
                        </h4>
                        <p>by
                            <a href="<?php echo get_permalink(); ?>" class="font-weight-bold dark-grey-text"><?php echo get_the_author(); ?></a>, <?php echo get_the_date(); ?></p>
                        <div class="text-justify bangla-font"><?php the_excerpt(); ?></div>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-info btn-rounded btn-md">Read more</a>
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

            <?php endif; ?>            

        </div>
    </main>
    <!--Main layout-->

<?php get_footer(); ?>