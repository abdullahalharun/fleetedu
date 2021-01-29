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

<?php 
  $course_meta = get_post_meta(get_the_ID(), 'event_meta_info', true);
  if(!empty($course_meta)){

    if(array_key_exists('short_info', $course_meta)) {
      $short_info = $course_meta['short_info'];
    } else {
      $short_info = '';
    }
    if(array_key_exists('infos', $course_meta)) {
      $infos = $course_meta['infos'];
    } else {
      $infos = '';
    }
    if(array_key_exists('event_link', $course_meta)) {
      $event_link = $course_meta['event_link'];
    } else {
      $event_link = '';
    }
    
  
  }
?>
    <!-- Course details -->
    <section class="course-details container">
     <div class="row">
       <div class="col-12 col-md-8 text-justify">
        <p class="text-muted mt-2">by
          <a href="http://localhost/wordpress/wordpress_lms_dev/media-skills-how-to-conduct-media/" class="font-weight-bold dark-grey-text">fleetadmin</a>, December 8, 2018
        </p>

        <?php the_content(  ); ?>
        
      </div>
       <div class="col-lg-4 col-md-4 col-12 mb-4">
            <div class="card pull-right short-info justify-content-end" style="width: 18rem">

              <?php the_post_thumbnail(  array('class' => 'course-thumbnail', 'class' => 'card-img-top', '288,170') ); ?>

              <div class="card-body">
                  <h5 class="card-title"><?php echo $short_info_title; ?></h5>
                  <p class="card-text">
                    <?php echo $short_info; ?>
                  </p>
                </div>
                <ul class="list-group list-group-flush">
                  <?php if(!empty($infos)) : foreach($infos as $info) : ?>
                    <!-- <li class="list-group-item">Total Classes: 15</li>
                    <li class="list-group-item">Duration: 6 Month</li> -->
                    <li class="list-group-item"><strong><?php echo $info['info_title']; ?> : </strong><?php echo $info['info_text']; ?></li>
                  <?php endforeach; endif; ?>
                </ul>
                <div class="card-body mx-auto">
                  <!-- <a href="#" class="card-link">Card link</a> -->
                  <?php if(!empty($event_link)) { ?>
                    <a href="<?php echo $event_link; ?>" class="btn btn-info">View Details</a>
                  <?php } else { ?>
                    <a href="#" class="btn btn-info">View Details</a>
                  <?php } ?>
                </div>
            </div>
       </div>
      </div>
   </section>


	<?php endwhile;  ?>

<?php get_footer(); ?>