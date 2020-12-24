<header>
	<div class="card card-intro blue-gradient mb-3">
		<div class="card-body white-text rgba-black-light text-center pt-5 pb-4">
			<div class="row d-flex justify-content-center">
				<div class="col-md-6">
					<h1 class="font-weight-bold mb-4"><?php the_title() ?></h1>
					<p class="lead mb-4">Checkout our latest posts...</p>
				</div>
			</div>
		</div>
	</div>
</header>

<!-- Course details -->
<section class="course-details">
       <div class="col-8">

       </div>
       <div class="col-4">
            <div class="card pull-right short-info" style="width: 18rem">
                <img
                src="https://mdbootstrap.com/img/new/standard/city/062.jpg"
                class="card-img-top"
                alt="..."
                />
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                </p>
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
                </ul>
                <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
                </div>
            </div>
       </div>
   </section>

<div class="container">
	<?php the_content(  ); ?>
</div>