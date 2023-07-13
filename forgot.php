
<?php

include("header.php");

?>
  
      <div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <h2 class="h3 mb-4">Forgot your password?</h2>
            <p class="fs-md">Change your password in three easy steps. This helps to keep your new password secure.</p>
            <ol class="list-unstyled fs-md">
              <li><span class="text-primary me-2">1.</span>Fill in your email address below.</li>
              <li><span class="text-primary me-2">2.</span>We'll email you a temporary code.</li>
              <li><span class="text-primary me-2">3.</span>Use the code to change your password on our secure website.</li>
            </ol>
            <div class="card py-2 mt-4">
              <form class="card-body needs-validation" novalidate>
                <div class="mb-3">
                  <label class="form-label" for="recover-email">Enter your email address</label>
                  <input class="form-control" type="email" id="recover-email" required>
                  <div class="invalid-feedback">Please provide valid email address.</div>
                </div>
                <button class="btn btn-primary" type="submit">Get new password</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->

    <?php

include("footer.php");
    ?>
    
    <!-- Toolbar for handheld devices (Default)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.html"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>

<!-- Mirrored from cartzilla.createx.studio/account-password-recovery.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 19 Aug 2022 21:37:02 GMT -->
</html>