<?php get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<header>
	<div class="card card-intro blue-gradient mb-3">
		<div class="card-body white-text rgba-black-light text-center pt-5 pb-4">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6">
					<h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>
					<!-- <p class="lead mb-4">Checkout our latest cours...</p> -->
				</div>
			</div>
		</div>
	</div>
</header>

    <!-- Course details -->
    <section class="course-details container">
     <div class="row">
       <div class="col-12 col-md-8 text-justify">
        <p class="text-muted mt-2">by
          <a href="http://localhost/wordpress/wordpress_lms_dev/media-skills-how-to-conduct-media/" class="font-weight-bold dark-grey-text">fleetadmin</a>, December 8, 2018
        </p>
        <h3>Course Description</h3>
        <?php the_content(  ); ?>

        <h3>Topics</h3>
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5 container bangla-font">
          
			<?php the_content(  ); ?>
		
          </div>
        
        </div>
      </div>
       <div class="col-lg-4 col-md-4 col-12">
            <div class="card pull-right short-info justify-content-end" style="width: 18rem">
                <img
                src="https://mdbootstrap.com/img/new/standard/city/062.jpg"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">Event Short info</h5>
                <p class="card-text">
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                </p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Total Classes: 15</li>
                  <li class="list-group-item">Duration: 6 Month</li>
                  <li class="list-group-item"><strong>Lecturer: </strong> Kabir Anwar</li>
                </ul>
                <div class="card-body mx-auto">
                <!-- <a href="#" class="card-link">Card link</a> -->
                <a href="#" class="btn btn-info">Count me</a>
                </div>
            </div>
       </div>
      </div>
   </section>


	<?php endwhile;  ?>

<?php get_footer(); ?>