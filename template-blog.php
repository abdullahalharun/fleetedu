<?php
/*
Template Name: Blog Page Template
*/
?>

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
                    <p class="lead mb-4">Checkout our latest posts...</p>

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
            
            $categories = get_categories();
            // foreach($categories as $category) {
            // echo '<div class="col-md-4"><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div>';
            // }
        ?>
                    
            <!--Section: Blog-->
            <h2 style="border-bottom: 2px solid #28598d;">All Categories</h2>  

            <section class="mb-4 mt-4">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <?php foreach($categories as $category) : ?>

                    <div class="col">
                        <a href="<?php echo get_category_link($category->term_id); ?>">
                        <div class="card">
                        <?php 
                            $image = get_field('category_image', $category->taxonomy . '_' . $category->term_id ); 
                            if($image):
                        ?>                                               
                        <img
                            src="<?php echo $image ?>"
                            class="card-img-top"
                            alt="..."
                        />
                        <?php endif; ?>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $category->name; ?></h5>
                            <p class="card-text">
                            <?php echo $category->description ?>
                            </p>
                        </div>
                        </div> 
                        </a>
                    </div>
                    

                    <?php endforeach; ?>                    
                </div> 

            </section>
            <!--Section: Blog -->

                            
            </div>

            

        </div>
    </main>
    <!--Main layout-->

<?php get_footer(); ?>