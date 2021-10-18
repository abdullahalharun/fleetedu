<?php
/*
Template Name: Courses Page Template
*/
    get_header(); ?>

	<header>
		<div class="card card-intro blue-gradient">
			<div class="card-body white-text rgba-black-light text-center pt-5 pb-4">
				<div class="row d-flex justify-content-center">
					<div class="col-md-6">
						<h1 class="font-weight-bold mb-4">All Courses</h1>
						<!-- <p class="lead mb-4">Checkout our latest courses...</p> -->
					</div>
				</div>
			</div>
		</div>
	</header>


	<!-- Extensive courses -->
	<div style="background-color: #f7f7f7;" class="container-fluid background-r">
		<div class="container ">

			<!--Section: Blog v.2-->
			<section id="extensive" class="extra-margins text-center">

			<h2 class="text-center mb-2 my-4 pt-4 pb-4 font-weight-bold">Itqaan Extensive</h2>

			<!--Grid row-->
			<div class="row pb-3">

			<?php
			global $post;
			$args = array( 'posts_per_page' => 12, 'post_type'=> 'course', 'orderby' => 'menu_order', 'order' => 'ASC' );
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
					<h4 class="card-title darkgrey-text bangla-font">
						<strong><?php the_title(); ?></strong>
					</h4>
					<hr>
					<!--Text-->
					<p class="font-small bangla-font"><?php the_excerpt(); ?> </p>
					<a href="<?php echo get_permalink() ?>" class="black-text d-flex flex-row-reverse">
						<p class="waves-effect p-2 font-small blue-text mb-0">View details
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

	<!-- Intensive courses -->
	<div style="background-color: #e6e6e6;" class="container-fluid background-r">
		<div class="container py-3">

			<!--Section: Blog v.2-->
			<section id="intensive" class="text-center">

			<h2 class="text-center mb-5 my-4 pt-4 pb-4 font-weight-bold">Itqaan Intensive</h2>

			<!--Grid row-->
			<div class="row pb-3">

			<?php
			global $post;
			$args = array( 'posts_per_page' => 12, 'post_type'=> 'intensive_course', 'orderby' => 'menu_order', 'order' => 'ASC' );
			$intensive_posts = get_posts( $args );
			foreach( $intensive_posts as $post ) : setup_postdata($post); 
			
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
					<h4 class="card-title darkgrey-text bangla-font">
						<strong><?php the_title(); ?></strong>
					</h4>
					<hr>
					<!--Text-->
					<p class="font-small bangla-font"><?php the_excerpt(); ?> </p>
					<a href="<?php echo get_permalink() ?>" class="black-text d-flex flex-row-reverse">
						<p class="waves-effect p-2 font-small blue-text mb-0">View details
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

<?php get_footer(); ?>