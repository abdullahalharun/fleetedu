<?php get_header(); ?>

<header>
	<div class="card card-intro blue-gradient mb-3">
		<div class="card-body white-text rgba-black-light text-center pt-5 pb-4">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6">
					<h1 class="font-weight-bold mb-4"><?php the_title(); ?></h1>
					<!-- <p class="lead mb-4">Checkout our latest posts...</p> -->
				</div>
			</div>
		</div>
	</div>
</header>


	<?php woocommerce_content(); ?>


<?php get_footer(); ?>