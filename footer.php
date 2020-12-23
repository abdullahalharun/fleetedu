<?php wp_footer(); ?>
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 mx-auto">

        <?php dynamic_sidebar( 'footer-1' ); ?>

        <!-- Content -->
        <!-- <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
          consectetur
          adipisicing elit.</p> -->

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">

        <?php dynamic_sidebar( 'footer-2' ); ?>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">
        <?php dynamic_sidebar( 'footer-3' ); ?>
      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 mx-auto">
        <?php dynamic_sidebar( 'footer-4' ); ?>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <hr>

  <!-- Call to action -->
  <!-- <ul class="list-unstyled list-inline text-center py-2">
    <li class="list-inline-item">
      <h5 class="mb-1">Register for free</h5>
    </li>
    <li class="list-inline-item">
      <a href="#!" class="btn btn-danger btn-rounded">Sign up!</a>
    </li>
  </ul> -->
  <!-- Call to action -->

  <!-- <hr> -->

  <!-- Social buttons -->
  <ul class="list-unstyled list-inline text-center">
    <li class="list-inline-item">
      <a href="https://www.facebook.com/Itqaan" class="btn-floating btn-fb mx-1">
        <i class="fab fa-facebook-f"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-tw mx-1">
        <i class="fab fa-twitter"> </i>
      </a>
    </li>
    <!-- <li class="list-inline-item">
      <a class="btn-floating btn-gplus mx-1">
        <i class="fab fa-google-plus-g"> </i>
      </a>
    </li>
    <li class="list-inline-item">
      <a class="btn-floating btn-li mx-1">
        <i class="fab fa-linkedin-in"> </i>
      </a>
    </li> -->
    <li class="list-inline-item">
      <a href="https://www.youtube.com/channel/UC-8UcK4vvZGCCY-XeUHLcvg" class="btn-floating btn-dribbble mx-1">
        <i class="fab fa-youtube"> </i>
      </a>
    </li>
  </ul>
  <!-- Social buttons -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
    <a href="http://itqaan.org/"> Itqaan.org</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->
</body>
<script>
    $("#mdb-navigation > ul > li").addClass("page-item")
    $("#mdb-navigation > ul > li > a").addClass("page-link")

    $('.carousel').carousel({
      interval: 4000
    })
</script>
</html>