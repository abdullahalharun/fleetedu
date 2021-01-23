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
  $course_meta = get_post_meta(get_the_ID(), 'course_meta_info', true);
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
    if(array_key_exists('enroll_link', $course_meta)) {
      $enroll_link = $course_meta['enroll_link'];
    } else {
      $enroll_link = '';
    }
    if(array_key_exists('modules', $course_meta)) {
      $modules = $course_meta['modules'];
    } else {
      $modules = '';
    }
  }
?>

    <!-- Course details -->
    <section class="course-details container">
     <div class="row">
       <div class="col-12 col-md-8 text-justify">
        <p class="text-muted mt-2">by
          <a href="http://localhost/wordpress/wordpress_lms_dev/media-skills-how-to-conduct-media/" class="font-weight-bold dark-grey-text"><?php the_author(); ?></a>, <?php echo get_the_date(); ?>
        </p>
        <!-- <h3>Course Description</h3> -->
        <?php the_content(  ); ?>
       
        <h3>Topics</h3>
        <div class="row">
          <div class="col-md-12 col-lg-12 mb-5 bangla-font">
          
            <!--Accordion wrapper-->
            <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">
            

              <?php if(!empty($modules)) : $id = 0; foreach($modules as $module) : $id++; ?>
              <!-- Accordion card -->
              <div class="card border-top border-bottom-0 border-left border-right border-light">
                     
                <!-- Card header -->
                <div class="card-header border-bottom border-light" role="tab" id="heading<?php echo $id; ?>">
                  <a class="" data-toggle="collapse" data-parent="#accordionEx" href="#collapse<?php echo $id; ?>" aria-expanded="<?php if ($id == 1) echo 'true'; else echo 'false'; ?>" aria-controls="collapse<?php echo $id; ?>">
                    <h5 class="font-weight-normal mb-0">
                      Module <?php echo $id; ?>: <?php echo $module['module_title']; ?> <i class="fas fa-angle-down rotate-icon float-right"></i>
                    </h5>
                  </a>
                </div>
        
                <!-- Card body -->
                <div id="collapse<?php echo $id; ?>" class="collapse <?php if($id == 1) echo 'show'; ?>" role="tabpanel" aria-labelledby="heading<?php echo $id; ?>" data-parent="#accordionEx">
                  <div class="card-body">
                   <p><i class="fas fa-file"></i> Note :  1</p>
                   <p><i class="fas fa-play-circle"></i> Video :  1</p>
                  </div>
                </div>
        
              </div>
              <!-- Accordion card -->

              <?php endforeach; endif; ?>
              
            </div>
            <!-- Accordion wrapper -->
            
          </div>
        
        </div>
      </div>
       <div class="col-lg-4 col-md-4 col-12 mb-4">
            <div class="card pull-right short-info justify-content-end" style="width: 18rem">
                <!-- <img
                src="https://mdbootstrap.com/img/new/standard/city/062.jpg"
                class="card-img-top"
                alt="..."
                /> -->
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
                <a href="<?php echo get_home_url(); ?>/?add-to-cart=<?php echo $enroll_link; ?>" class="btn btn-info">Enroll Now</a>
                </div>
            </div>
       </div>
      </div>
   </section>
