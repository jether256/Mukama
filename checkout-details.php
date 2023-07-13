
  <?php
    include("header.php");

  ?>
      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="shop-grid-left.php">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Checkout</h1>
          </div>
        </div>
      </div>
      <div class="container pb-5 mb-2 mb-md-4">
        <div class="row">
          <section class="col-lg-8">
            <!-- Steps-->

                <div class="steps steps-light pt-2 pb-3 mb-5"><a class="step-item active" href="shop-cart.php">
                <div class="step-progress"><span class="step-count">1</span></div>
                <div class="step-label"><i class="ci-cart"></i>Cart</div></a><a class="step-item active current" href="checkout-details.php">
                <div class="step-progress"><span class="step-count">2</span></div>
                <div class="step-label"><i class="ci-user-circle"></i>Details</div></a><a class="step-item" href="checkout-shipping.php">
                <div class="step-progress"><span class="step-count">3</span></div>
                <div class="step-label"><i class="ci-package"></i>Shipping</div></a><a class="step-item" href="checkout-payment.php">
                <div class="step-progress"><span class="step-count">4</span></div>
                <div class="step-label"><i class="ci-card"></i>Payment</div></a><a class="step-item" href="checkout-review.php">
                <div class="step-progress"><span class="step-count">5</span></div>
                <div class="step-label"><i class="ci-check-circle"></i>Review</div></a></div>

            <!-- Autor info-->
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary p-4 rounded-3 mb-grid-gutter">

              <div class="d-flex align-items-center">
                <div class="img-thumbnail rounded-circle position-relative flex-shrink-0"><span class="badge bg-warning position-absolute end-0 mt-n2" data-bs-toggle="tooltip" title="Reward points">384</span><img class="rounded-circle" src="img/shop/account/avatar.jpg" width="90" alt="Susan Gardner"></div>
                <div class="ps-3">
                  <h3 class="fs-base mb-0">Susan Gardner</h3><span class="text-accent fs-sm">s.gardner@example.com</span>
                </div>
              </div><a class="btn btn-light btn-sm btn-shadow mt-3 mt-sm-0" href="profile.php"><i class="ci-edit me-2"></i>Edit profile</a>
            </div>
            <!-- Shipping address-->
            <h2 class="h6 pt-1 pb-3 mb-3 border-bottom">Shipping address</h2>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-fn">First Name</label>
                  <input class="form-control" type="text" id="checkout-fn">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-ln">Last Name</label>
                  <input class="form-control" type="text" id="checkout-ln">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-email">E-mail Address</label>
                  <input class="form-control" type="email" id="checkout-email">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-phone">Phone Number</label>
                  <input class="form-control" type="text" id="checkout-phone">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-company">Company</label>
                  <input class="form-control" type="text" id="checkout-company">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-country">Country</label>
                  <select class="form-select" id="checkout-country">
                    <option>Choose country</option>
                    <option>Australia</option>
                    <option>Canada</option>
                    <option>France</option>
                    <option>Germany</option>
                    <option>Switzerland</option>
                    <option>USA</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-city">Country</label>
                  <select class="form-select" id="checkout-city">
                    <option>Choose city</option>
                    <option>Amsterdam</option>
                    <option>Berlin</option>
                    <option>Geneve</option>
                    <option>New York</option>
                    <option>Paris</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-zip">ZIP Code</label>
                  <input class="form-control" type="text" id="checkout-zip">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-address-1">Address 1</label>
                  <input class="form-control" type="text" id="checkout-address-1">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="mb-3">
                  <label class="form-label" for="checkout-address-2">Address 2</label>
                  <input class="form-control" type="text" id="checkout-address-2">
                </div>
              </div>
            </div>
            <h6 class="mb-3 py-3 border-bottom">Billing address</h6>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" checked id="same-address">
              <label class="form-check-label" for="same-address">Same as shipping address</label>
            </div>
            <!-- Navigation (desktop)-->
            <div class="d-none d-lg-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.php"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.php"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
            </div>
          </section>
          <!-- Sidebar-->
          <aside class="col-lg-4 pt-4 pt-lg-0 ps-xl-5">
            <div class="bg-white rounded-3 shadow-lg p-4 ms-lg-auto">
              <div class="py-2 px-xl-2">
                <div class="widget mb-3">
                  <h2 class="widget-title text-center">Order summary</h2>
                  <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                      <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                      <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                      <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                    <div class="ps-2">
                      <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                      <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                    </div>
                  </div>
                </div>
                <ul class="list-unstyled fs-sm pb-2 border-bottom">
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">$265.<small>00</small></span></li>
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Shipping:</span><span class="text-end">—</span></li>
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$9.<small>50</small></span></li>
                  <li class="d-flex justify-content-between align-items-center"><span class="me-2">Discount:</span><span class="text-end">—</span></li>
                </ul>
                <h3 class="fw-normal text-center my-4">$274.<small>50</small></h3>
                <form class="needs-validation" method="post" novalidate>
                  <div class="mb-3">
                    <input class="form-control" type="text" placeholder="Promo code" required>
                    <div class="invalid-feedback">Please provide promo code.</div>
                  </div>
                  <button class="btn btn-outline-primary d-block w-100" type="submit">Apply promo code</button>
                </form>
              </div>
            </div>
          </aside>
        </div>
        <!-- Navigation (mobile)-->
        <div class="row d-lg-none">
          <div class="col-lg-8">
            <div class="d-flex pt-4 mt-3">
              <div class="w-50 pe-3"><a class="btn btn-secondary d-block w-100" href="shop-cart.php"><i class="ci-arrow-left mt-sm-0 me-1"></i><span class="d-none d-sm-inline">Back to Cart</span><span class="d-inline d-sm-none">Back</span></a></div>
              <div class="w-50 ps-2"><a class="btn btn-primary d-block w-100" href="checkout-shipping.php"><span class="d-none d-sm-inline">Proceed to Shipping</span><span class="d-inline d-sm-none">Next</span><i class="ci-arrow-right mt-sm-0 ms-1"></i></a></div>
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
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="account-wishlist.html"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Wishlist</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="shop-cart.php"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">4</span></span><span class="handheld-toolbar-label">$265.00</span></a></div>
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

<!-- Mirrored from cartzilla.createx.studio/checkout-details.html by HTTrack Website Copier/3.x [XR&CO'2017], Fri, 19 Aug 2022 21:36:25 GMT -->
</html>