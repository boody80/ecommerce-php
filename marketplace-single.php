
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Isometric Device Mockups Bundle</title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="vendor/tiny-slider/dist/tiny-slider.css"/>
    <link rel="stylesheet" media="screen" href="vendor/lightgallery.js/dist/css/lightgallery.min.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="css/theme.min.css">
    <!-- Google Tag Manager-->
    <script>
      (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-WKV3GT5');
    </script>
  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">
    <!-- Google Tag Manager (noscript)-->
    <noscript>
      <iframe src="//www.googletagmanager.com/ns.php?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
    </noscript>
    <!-- Sign in / sign up modal-->
    <div class="modal fade" id="signin-modal" tabindex="-1" role="dialog">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header bg-secondary">
            <ul class="nav nav-tabs card-header-tabs" role="tablist">
              <li class="nav-item"><a class="nav-link fw-medium active" href="#signin-tab" data-bs-toggle="tab" role="tab" aria-selected="true"><i class="ci-unlocked me-2 mt-n1"></i>Sign in</a></li>
              <li class="nav-item"><a class="nav-link fw-medium" href="#signup-tab" data-bs-toggle="tab" role="tab" aria-selected="false"><i class="ci-user me-2 mt-n1"></i>Sign up</a></li>
            </ul>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body tab-content py-4">
            <form class="needs-validation tab-pane fade show active" autocomplete="off" novalidate id="signin-tab">
              <div class="mb-3">
                <label class="form-label" for="si-email">Email address</label>
                <input class="form-control" type="email" id="si-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="si-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="si-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3 d-flex flex-wrap justify-content-between">
                <div class="form-check mb-2">
                  <input class="form-check-input" type="checkbox" id="si-remember">
                  <label class="form-check-label" for="si-remember">Remember me</label>
                </div><a class="fs-sm" href="#">Forgot password?</a>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign in</button>
            </form>
            <form class="needs-validation tab-pane fade" autocomplete="off" novalidate id="signup-tab">
              <div class="mb-3">
                <label class="form-label" for="su-name">Full name</label>
                <input class="form-control" type="text" id="su-name" placeholder="John Doe" required>
                <div class="invalid-feedback">Please fill in your name.</div>
              </div>
              <div class="mb-3">
                <label for="su-email">Email address</label>
                <input class="form-control" type="email" id="su-email" placeholder="johndoe@example.com" required>
                <div class="invalid-feedback">Please provide a valid email address.</div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password">Password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label" for="su-password-confirm">Confirm password</label>
                <div class="password-toggle">
                  <input class="form-control" type="password" id="su-password-confirm" required>
                  <label class="password-toggle-btn" aria-label="Show/hide password">
                    <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                  </label>
                </div>
              </div>
              <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <main class="page-wrapper">
      <!-- Navbar Marketplace-->
      <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
      <header class="bg-light shadow-sm navbar-sticky">
        <div class="navbar navbar-expand-lg navbar-light">
          <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0 me-4 order-lg-1" href="index.php"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none me-2 order-lg-1" href="index.php"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
            <!-- Toolbar-->
            <div class="navbar-toolbar d-flex align-items-center order-lg-3">
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool d-none d-lg-flex" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#searchBox" role="button" aria-expanded="false" aria-controls="searchBox"><span class="navbar-tool-tooltip">Search</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-search"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="dashboard-favorites.php"><span class="navbar-tool-tooltip">Favorites</span>
                <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div></a>
              <div class="navbar-tool dropdown ms-2"><a class="navbar-tool-icon-box border dropdown-toggle" href="dashboard-sales.php"><img src="img/marketplace/account/avatar-sm.png" width="32" alt="Createx Studio"></a><a class="navbar-tool-text ms-n1" href="dashboard-sales.php"><small>Createx Std.</small>$1,375.00</a>
                <div class="dropdown-menu dropdown-menu-end">
                  <div style="min-width: 14rem;">
                    <h6 class="dropdown-header">Account</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-settings.php"><i class="ci-settings opacity-60 me-2"></i>Settings</a><a class="dropdown-item d-flex align-items-center" href="dashboard-purchases.php"><i class="ci-basket opacity-60 me-2"></i>Purchases</a><a class="dropdown-item d-flex align-items-center" href="dashboard-favorites.php"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-xs text-muted ms-auto">4</span></a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Seller Dashboard</h6><a class="dropdown-item d-flex align-items-center" href="dashboard-sales.php"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-xs text-muted ms-auto">$1,375.00</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-products.php"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-xs text-muted ms-auto">5</span></a><a class="dropdown-item d-flex align-items-center" href="dashboard-add-new-product.php"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a><a class="dropdown-item d-flex align-items-center" href="dashboard-payouts.php"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a>
                    <div class="dropdown-divider"></div><a class="dropdown-item d-flex align-items-center" href="account-signin.php"><i class="ci-sign-out opacity-60 me-2"></i>Sign Out</a>
                  </div>
                </div>
              </div>
              <div class="navbar-tool ms-4"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="marketplace-cart.php"><span class="navbar-tool-label">3</span><i class="navbar-tool-icon ci-cart"></i></a></div>
            </div>
            <div class="collapse navbar-collapse me-auto order-lg-2" id="navbarCollapse">
              <!-- Search-->
              <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>
              <!-- Categories dropdown-->
              <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-menu align-middle mt-n1 me-2"></i>Categories</a>
                  <ul class="dropdown-menu py-1">
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Photos</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.php">All Photos<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Abstract</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Animals</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Architecture</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Beauty &amp; Fashion</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Business</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Education</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Food &amp; Drink</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Holidays</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Industrial</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">People</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Sports</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Technology</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Graphics</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="#">All Graphics<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Icons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Illustartions</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Patterns</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Textures</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Web Elements</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">UI Design</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.php">All UI Design<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">PSD Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Sketch Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Adobe XD Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Figma Templates</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Web Themes</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.php">All Web Themes<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">WordPress Themes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Bootstrap Themes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">eCommerce Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Muse Templates</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Plugins</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Fonts</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.php">All Fonts<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Blackletter</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Display</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Non Western</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Sans Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Script</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Slab Serif</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Symbols</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Add-Ons</a>
                      <ul class="dropdown-menu">
                        <li class="dropdown-item product-title fw-medium"><a href="marketplace-category.php">All Add-Ons<i class="ci-arrow-right fs-xs ms-1"></i></a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Photoshop Add-Ons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Illustrator Add-Ons</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Sketch Plugins</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Procreate Brushes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">InDesign Palettes</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Lightroom Presets</a></li>
                        <li><a class="dropdown-item" href="marketplace-category.php">Other Software</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
              </ul>
              <!-- Primary menu-->
              <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="index.php">Back to main demo</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- Search collapse-->
        <div class="search-box collapse" id="searchBox">
          <div class="card pt-2 pb-4 border-0 rounded-0">
            <div class="container">
              <div class="input-group"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="text" placeholder="Search marketplace">
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Page Title-->
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.php"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="marketplace-category.php">Market</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Single Item</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Isometric Device Mockups Bundle</h1>
          </div>
        </div>
      </div>
      <!-- Shadow box-->
      <section class="container mb-3 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Content-->
            <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-lg-3">
              <div class="pt-3 px-4 pe-lg-0 ps-xl-5">
                <!-- Product gallery-->
                <div class="gallery"><a class="gallery-item rounded-3 mb-grid-gutter" href="img/marketplace/single/01.jpg" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;Simple iPhone X Mockups&lt;/h6&gt;"><img src="img/marketplace/single/01.jpg" alt="Gallery preview"><span class="gallery-item-caption">Simple iPhone X Mockups</span></a>
                  <div class="row">
                    <div class="col-sm-6"><a class="gallery-item rounded-3 mb-grid-gutter" href="img/marketplace/single/02.jpg" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;UI Psd iPhone X Monochrome&lt;/h6&gt;"><img src="img/marketplace/single/02.jpg" alt="Gallery preview"><span class="gallery-item-caption">UI Psd iPhone X Monochrome</span></a></div>
                    <div class="col-sm-6"><a class="gallery-item rounded-3 mb-grid-gutter" href="img/marketplace/single/03.jpg" data-sub-html="&lt;h6 class=&quot;fs-sm text-light&quot;&gt;iPhone 11 Clay Mockup&lt;/h6&gt;"><img src="img/marketplace/single/03.jpg" alt="Gallery preview"><span class="gallery-item-caption">iPhone 11 Clay Mockup</span></a></div>
                  </div>
                </div>
                <!-- Wishlist + Sharing-->
                <div class="d-flex flex-wrap justify-content-between align-items-center border-top pt-3">
                  <div class="py-2 me-2">
                    <button class="btn btn-outline-accent" type="button"><i class="ci-heart fs-lg me-2"></i>Add to Favorites</button>
                  </div>
                  <div class="py-2"><i class="ci-share-alt fs-lg align-middle text-muted me-2"></i><a class="btn-social bs-outline bs-facebook bs-sm ms-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-outline bs-twitter bs-sm ms-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-outline bs-pinterest bs-sm ms-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-outline bs-instagram bs-sm ms-2" href="#"><i class="ci-instagram"></i></a></div>
                </div>
              </div>
            </section>
            <!-- Sidebar-->
            <aside class="col-lg-4 ps-xl-5">
              <hr class="d-lg-none">
              <div class="bg-white h-100 p-4 ms-auto border-start">
                <div class="px-lg-2">
                  <div class="accordion accordion-flush" id="licenses">
                    <div class="accordion-item border-bottom">
                      <div class="accordion-header d-flex justify-content-between align-items-center py-3">
                        <div class="form-check" data-bs-toggle="collapse" data-bs-target="#standard-license">
                          <input class="form-check-input" type="radio" name="license" id="license-std" checked>
                          <label class="form-check-label fw-medium text-dark" for="license-std">Standard license</label>
                        </div>
                        <h5 class="mb-0 text-accent fw-normal">$18.<small>00</small></h5>
                      </div>
                      <div class="accordion-collapse collapse show" id="standard-license" data-bs-parent="#licenses">
                        <div class="accordion-body py-0 pb-2">
                          <ul class="list-unstyled fs-sm">
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Quality verified</span></li>
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Use for a single project</span></li>
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Non-paying users only</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <div class="accordion-header d-flex justify-content-between align-items-center py-3">
                        <div class="form-check" data-bs-toggle="collapse" data-bs-target="#extended-license">
                          <input class="form-check-input" type="radio" name="license" id="license-ext">
                          <label class="form-check-label fw-medium text-dark" for="license-ext">Extended license</label>
                        </div>
                        <h5 class="mb-0 text-accent fw-normal">$299.<small>00</small></h5>
                      </div>
                      <div class="accordion-collapse collapse border-0" id="extended-license" data-bs-parent="#licenses">
                        <div class="accordion-body py-0 pb-2">
                          <ul class="list-unstyled fs-sm">
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Quality verified</span></li>
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Use for a single project</span></li>
                            <li class="d-flex align-items-center"><i class="ci-check-circle text-success me-1"></i><span class="fs-ms">Paying users allowed</span></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <button class="btn btn-primary btn-shadow d-block w-100 mt-4" type="button"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                  <div class="bg-secondary rounded p-3 mt-4 mb-2"><a class="d-flex align-items-center" href="#"><img class="rounded-circle" src="img/testimonials/01.jpg" width="50" alt="Sara Palson">
                      <div class="ps-2"><span class="fs-ms text-muted">Created by</span>
                        <h6 class="fs-sm mb-0">Sara Palson</h6>
                      </div></a></div>
                  <div class="bg-secondary rounded p-3 mb-2"><i class="ci-download h5 text-muted align-middle mb-0 mt-n1 me-2"></i><span class="d-inline-block h6 mb-0 me-1">715</span><span class="fs-sm">Sales</span></div>
                  <div class="bg-secondary rounded p-3 mb-4">
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div><span class="fs-ms ms-2">4.1/5</span>
                    <div class="fs-ms text-muted">based on 74 reviews</div>
                  </div>
                  <ul class="list-unstyled fs-sm">
                    <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark fw-medium">Last update</span><span class="text-muted">April 27, 2019</span></li>
                    <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark fw-medium">Released</span><span class="text-muted">February 13, 2019</span></li>
                    <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark fw-medium">Category</span><a class="product-meta" href="#">Graphics</a></li>
                    <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark fw-medium">Compatible with</span><span class="text-muted">Photoshop CS5</span></li>
                    <li class="d-flex justify-content-between mb-3 pb-3 border-bottom"><span class="text-dark fw-medium">File type</span><span class="text-muted">PSD, JPG</span></li>
                    <li class="d-flex justify-content-between pb-3 border-bottom"><span class="text-dark fw-medium">File size</span><span class="text-muted">56 MB</span></li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </section>
      <!-- Product description + Reviews + Comments-->
      <section class="container mb-4 mb-lg-5">
        <!-- Nav tabs-->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item"><a class="nav-link p-4 active" href="#details" data-bs-toggle="tab" role="tab">Product details</a></li>
          <li class="nav-item"><a class="nav-link p-4" href="#reviews" data-bs-toggle="tab" role="tab">Reviews</a></li>
          <li class="nav-item"><a class="nav-link p-4" href="#comments" data-bs-toggle="tab" role="tab">Comments</a></li>
        </ul>
        <div class="tab-content pt-2">
          <!-- Product details tab-->
          <div class="tab-pane fade show active" id="details" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
                <p class="fs-md">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <h3 class="h5 pt-2">Main features</h3>
                <ul class="fs-md">
                  <li>Nemo enim ipsam voluptatem quia voluptas sit</li>
                  <li>Ut enim ad minima veniam, quis nostrum exercitationem</li>
                  <li>Duis aute irure dolor in reprehenderit in voluptate</li>
                  <li>At vero eos et accusamus et iusto odio dignissimos</li>
                  <li>Omnis voluptas assumenda est omnis dolor</li>
                  <li>Quis autem vel eum iure reprehenderit qui in ea voluptate</li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Reviews tab-->
          <div class="tab-pane fade" id="reviews" role="tabpanel">
            <!-- Reviews-->
            <div class="row pt-2 pb-3">
              <div class="col-lg-4 col-md-5">
                <h3 class="h4 mb-4">74 Reviews</h3>
                <div class="star-rating me-2"><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star-filled fs-sm text-accent me-1"></i><i class="ci-star fs-sm text-muted me-1"></i></div><span class="d-inline-block align-middle">4.1 Overall rating</span>
                <p class="pt-3 fs-sm text-muted">58 out of 74 (77%)<br>Customers recommended this product</p>
              </div>
              <div class="col-lg-8 col-md-7">
                <div class="d-flex align-items-center mb-2">
                  <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">5</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-success" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><span class="text-muted ms-3">43</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">4</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 27%; background-color: #a7e453;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><span class="text-muted ms-3">16</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">3</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 17%; background-color: #ffda75;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><span class="text-muted ms-3">9</span>
                </div>
                <div class="d-flex align-items-center mb-2">
                  <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">2</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar" role="progressbar" style="width: 9%; background-color: #fea569;" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><span class="text-muted ms-3">4</span>
                </div>
                <div class="d-flex align-items-center">
                  <div class="text-nowrap me-3"><span class="d-inline-block align-middle text-muted">1</span><i class="ci-star-filled fs-xs ms-1"></i></div>
                  <div class="w-100">
                    <div class="progress" style="height: 4px;">
                      <div class="progress-bar bg-danger" role="progressbar" style="width: 4%;" aria-valuenow="4" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                  </div><span class="text-muted ms-3">2</span>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-3">
            <div class="row py-4">
              <!-- Reviews list-->
              <div class="col-md-7">
                <div class="d-flex justify-content-end pb-4">
                  <div class="d-flex align-items-center flex-nowrap">
                    <label class="fs-sm text-muted text-nowrap me-2 d-none d-sm-block" for="sort-reviews">Sort by:</label>
                    <select class="form-select form-select-sm" id="sort-reviews">
                      <option>Newest</option>
                      <option>Oldest</option>
                      <option>Popular</option>
                      <option>High rating</option>
                      <option>Low rating</option>
                    </select>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/01.jpg" width="50" alt="Rafael Marquez">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Rafael Marquez</h6><span class="fs-ms text-muted">June 28, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                      <div class="fs-ms text-muted">83% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est...</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">15</button>
                    <button class="btn-dislike" type="button">3</button>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/02.jpg" width="50" alt="Barbara Palson">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Barbara Palson</h6><span class="fs-ms text-muted">May 17, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                      </div>
                      <div class="fs-ms text-muted">99% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi, tempora</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae, quis autem</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">34</button>
                    <button class="btn-dislike" type="button">1</button>
                  </div>
                </div>
                <!-- Review-->
                <div class="product-review pb-4 mb-4 border-bottom">
                  <div class="d-flex mb-3">
                    <div class="d-flex align-items-center me-4 pe-2"><img class="rounded-circle" src="img/shop/reviews/03.jpg" width="50" alt="Daniel Adams">
                      <div class="ps-3">
                        <h6 class="fs-sm mb-0">Daniel Adams</h6><span class="fs-ms text-muted">May 8, 2019</span>
                      </div>
                    </div>
                    <div>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                      </div>
                      <div class="fs-ms text-muted">75% of users found this review helpful</div>
                    </div>
                  </div>
                  <p class="fs-md mb-2">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem.</p>
                  <ul class="list-unstyled fs-ms pt-1">
                    <li class="mb-1"><span class="fw-medium">Pros:&nbsp;</span>Consequuntur magni, voluptatem sequi</li>
                    <li class="mb-1"><span class="fw-medium">Cons:&nbsp;</span>Architecto beatae,  quis autem, voluptatem sequ</li>
                  </ul>
                  <div class="text-nowrap">
                    <button class="btn-like" type="button">26</button>
                    <button class="btn-dislike" type="button">9</button>
                  </div>
                </div>
                <div class="text-center">
                  <button class="btn btn-outline-accent" type="button"><i class="ci-reload me-2"></i>Load more reviews</button>
                </div>
              </div>
              <!-- Leave review form-->
              <div class="col-md-5 mt-2 pt-4 mt-md-0 pt-md-0">
                <div class="bg-secondary py-grid-gutter px-grid-gutter rounded-3">
                  <h3 class="h4 pb-2">Write a review</h3>
                  <form class="needs-validation" method="post" novalidate>
                    <div class="mb-3">
                      <label class="form-label" for="review-name">Your name<span class="text-danger">*</span></label>
                      <input class="form-control" type="text" required id="review-name">
                      <div class="invalid-feedback">Please enter your name!</div><small class="form-text text-muted">Will be displayed on the comment.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-email">Your email<span class="text-danger">*</span></label>
                      <input class="form-control" type="email" required id="review-email">
                      <div class="invalid-feedback">Please provide valid email address!</div><small class="form-text text-muted">Authentication only - we won't spam you.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-rating">Rating<span class="text-danger">*</span></label>
                      <select class="form-select" required id="review-rating">
                        <option value="">Choose rating</option>
                        <option value="5">5 stars</option>
                        <option value="4">4 stars</option>
                        <option value="3">3 stars</option>
                        <option value="2">2 stars</option>
                        <option value="1">1 star</option>
                      </select>
                      <div class="invalid-feedback">Please choose rating!</div>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-text">Review<span class="text-danger">*</span></label>
                      <textarea class="form-control" rows="6" required id="review-text"></textarea>
                      <div class="invalid-feedback">Please write a review!</div><small class="form-text text-muted">Your review must be at least 50 characters.</small>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="review-pros">Pros</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-pros"></textarea>
                    </div>
                    <div class="mb-3 mb-4">
                      <label class="form-label" for="review-cons">Cons</label>
                      <textarea class="form-control" rows="2" placeholder="Separated by commas" id="review-cons"></textarea>
                    </div>
                    <button class="btn btn-primary btn-shadow d-block w-100" type="submit">Submit a Review</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- Comments tab-->
          <div class="tab-pane fade" id="comments" role="tabpanel">
            <div class="row">
              <div class="col-lg-8">
                <!-- comment-->
                <div class="d-flex align-items-start py-4 border-bottom"><img class="rounded-circle" src="img/testimonials/04.jpg" width="50" alt="Laura Willson">
                  <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="fs-md mb-0">Laura Willson</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
                    </div>
                    <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 7, 2019</span>
                    <!-- comment reply-->
                    <div class="d-flex align-items-start border-top pt-4 mt-4"><img class="rounded-circle" src="img/testimonials/01.jpg" width="50" alt="Sara Palson">
                      <div class="ps-3">
                        <div class="d-flex justify-content-between align-items-center mb-2">
                          <h6 class="fs-md mb-0">Sara Palson</h6>
                        </div>
                        <p class="fs-md mb-1">Egestas sed sed risus pretium quam vulputate dignissim. A diam sollicitudin tempor id eu nisl. Ut porttitor leo a diam. Bibendum at varius vel pharetra vel turpis nunc.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Sep 13, 2019</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- comment-->
                <div class="d-flex align-items-start py-4"><img class="rounded-circle" src="img/testimonials/02.jpg" width="50" alt="Benjamin Miller">
                  <div class="ps-3">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                      <h6 class="fs-md mb-0">Benjamin Miller</h6><a class="nav-link-style fs-sm fw-medium" href="#"><i class="ci-reply me-2"></i>Reply</a>
                    </div>
                    <p class="fs-md mb-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat cupidatat non proident, sunt in culpa qui.</p><span class="fs-ms text-muted"><i class="ci-time align-middle me-2"></i>Aug 15, 2019</span>
                  </div>
                </div>
                <!-- Post comment form-->
                <div class="card border-0 shadow my-2">
                  <div class="card-body">
                    <div class="d-flex align-items-start"><img class="rounded-circle border p-2" src="img/marketplace/account/avatar-sm.png" width="50" alt="Createx Studio">
                      <form class="needs-validation w-100 ms-3" novalidate>
                        <div class="mb-3">
                          <textarea class="form-control" rows="4" placeholder="Write comment..." required></textarea>
                          <div class="invalid-feedback">Please write your comment.</div>
                        </div>
                        <button class="btn btn-primary btn-sm" type="submit">Post comment</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Related products carousel-->
      <section class="container mb-5 pb-lg-3">
        <div class="d-flex flex-wrap justify-content-between align-items-center border-bottom pb-4 mb-4">
          <h2 class="h3 mb-0 pt-2">Related mockups</h2>
          <div class="pt-2"><a class="btn btn-outline-accent btn-sm" href="marketplace-category.php">More mockups<i class="ci-arrow-end ms-1 me-n1"></i></a></div>
        </div>
        <!-- Carousel-->
        <div class="tns-carousel">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;gutter&quot;: 16, &quot;controls&quot;: false, &quot;nav&quot;: true, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2 },&quot;768&quot;:{&quot;items&quot;:3}, &quot;992&quot;:{&quot;items&quot;:4}}}">
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="ci-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="#"><i class="ci-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/02.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                  </div>
                  <h3 class="product-title fs-sm mb-2"><a href="#">Floating Phone and Tablet Mockup</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="fs-sm me-2"><i class="ci-download text-muted me-1"></i>109<span class="fs-xs ms-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$15.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="ci-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="#"><i class="ci-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/03.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">Createx Std. </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title fs-sm mb-2"><a href="#">Project Devices Showcase (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="fs-sm me-2"><i class="ci-download text-muted me-1"></i>95<span class="fs-xs ms-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$18.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="ci-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="#"><i class="ci-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/08.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                    </div>
                  </div>
                  <h3 class="product-title fs-sm mb-2"><a href="#">Business Card Branding Mockup</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="fs-sm me-2"><i class="ci-download text-muted me-1"></i>316<span class="fs-xs ms-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$17.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card-alt">
                <div class="product-thumb">
                  <button class="btn-wishlist btn-sm" type="button"><i class="ci-heart"></i></button>
                  <div class="product-card-actions"><a class="btn btn-light btn-icon btn-shadow fs-base mx-2" href="#"><i class="ci-eye"></i></a>
                    <button class="btn btn-light btn-icon btn-shadow fs-base mx-2" type="button"><i class="ci-cart"></i></button>
                  </div><a class="product-thumb-overlay" href="#"></a><img src="img/marketplace/products/07.jpg" alt="Product">
                </div>
                <div class="card-body">
                  <div class="d-flex flex-wrap justify-content-between align-items-start pb-2">
                    <div class="text-muted fs-xs me-1">by <a class="product-meta fw-medium" href="#">pixels </a>in <a class="product-meta fw-medium" href="#">Graphics</a></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                  <h3 class="product-title fs-sm mb-2"><a href="#">Gravity Device Mockups (PSD)</a></h3>
                  <div class="d-flex flex-wrap justify-content-between align-items-center">
                    <div class="fs-sm me-2"><i class="ci-download text-muted me-1"></i>234<span class="fs-xs ms-1">Sales</span></div>
                    <div class="bg-faded-accent text-accent rounded-1 py-1 px-2">$16.<small>00</small></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container pt-2 pb-3">
        <div class="row">
          <div class="col-md-6 text-center text-md-start mb-4">
            <div class="text-nowrap mb-3"><a class="d-inline-block align-middle mt-n2 me-2" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a><span class="d-inline-block align-middle h5 fw-light text-white mb-0">Marketplace</span></div>
            <p class="fs-sm text-white opacity-70 pb-1">High quality items created by our global community.</p>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">65,478 </span><span class="fw-normal text-white">Products</span></h6>
            <h6 class="d-inline-block pe-3 me-3 border-end border-light"><span class="text-primary">2,521 </span><span class="fw-normal text-white">Members</span></h6>
            <h6 class="d-inline-block me-3"><span class="text-primary">897 </span><span class="fw-normal text-white">Vendors</span></h6>
            <div class="widget mt-4 text-md-nowrap text-center text-md-start"><a class="btn-social bs-light bs-twitter me-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook me-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-dribbble me-2 mb-2" href="#"><i class="ci-dribbble"></i></a><a class="btn-social bs-light bs-behance me-2 mb-2" href="#"><i class="ci-behance"></i></a><a class="btn-social bs-light bs-pinterest me-2 mb-2" href="#"><i class="ci-pinterest"></i></a></div>
          </div>
          <!-- Mobile dropdown menu (visible on screens below md)-->
          <div class="col-12 d-md-none text-center mb-4 pb-2">
            <div class="btn-group dropdown d-block mx-auto mb-3">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">Categories</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Photos</a></li>
                <li><a class="dropdown-item" href="#">Graphics</a></li>
                <li><a class="dropdown-item" href="#">UI Design</a></li>
                <li><a class="dropdown-item" href="#">Web Themes</a></li>
                <li><a class="dropdown-item" href="#">Fonts</a></li>
                <li><a class="dropdown-item" href="#">Add-Ons</a></li>
              </ul>
            </div>
            <div class="btn-group dropdown d-block mx-auto">
              <button class="btn btn-outline-light border-light dropdown-toggle" type="button" data-bs-toggle="dropdown">For members</button>
              <ul class="dropdown-menu my-1">
                <li><a class="dropdown-item" href="#">Licenses</a></li>
                <li><a class="dropdown-item" href="#">Return policy</a></li>
                <li><a class="dropdown-item" href="#">Payment methods</a></li>
                <li><a class="dropdown-item" href="#">Become a vendor</a></li>
                <li><a class="dropdown-item" href="#">Become an affiliate</a></li>
                <li><a class="dropdown-item" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
          <!-- Desktop menu (visible on screens above md)-->
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">Categories</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Photos</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Graphics</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">UI Design</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Web Themes</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Fonts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Add-Ons</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 d-none d-md-block text-center text-md-start mb-4">
            <div class="widget widget-links widget-light pb-2">
              <h3 class="widget-title text-light">For members</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Licenses</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Return policy</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Payment methods</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become a vendor</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Become an affiliate</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Marketplace benefits</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Second row-->
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="widget w-100 mb-4 pb-3 text-center mx-auto" style="max-width: 28rem;">
            <h3 class="widget-title text-light pb-1">Subscribe to newsletter</h3>
            <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
              <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
              </div>
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
              </div>
              <div class="form-text text-light opacity-50">*Receive early discount offers, updates and new products info.</div>
              <div class="subscription-status"></div>
            </form>
          </div>
          <hr class="hr-light mb-3">
          <div class="d-md-flex justify-content-between pt-4">
            <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
            <div class="widget widget-links widget-light pb-4">
              <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Help Center</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Affiliates</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Support</a></li>
                <li class="widget-list-item ms-4"><a class="widget-list-link fs-ms" href="#">Terms &amp; Conditions</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Toolbar for handheld devices (Marketplace)-->
    <div class="handheld-toolbar">
      <div class="d-table table-layout-fixed w-100"><a class="d-table-cell handheld-toolbar-item" href="dashboard-favorites.php"><span class="handheld-toolbar-icon"><i class="ci-heart"></i></span><span class="handheld-toolbar-label">Favorites</span></a><a class="d-table-cell handheld-toolbar-item" href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" onclick="window.scrollTo(0, 0)"><span class="handheld-toolbar-icon"><i class="ci-menu"></i></span><span class="handheld-toolbar-label">Menu</span></a><a class="d-table-cell handheld-toolbar-item" href="marketplace-cart.php"><span class="handheld-toolbar-icon"><i class="ci-cart"></i><span class="badge bg-primary rounded-pill ms-1">3</span></span><span class="handheld-toolbar-label">$56.00</span></a></div>
    </div>
    <!-- Back To Top Button--><a class="btn-scroll-top" href="#top" data-scroll><span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span><i class="btn-scroll-top-icon ci-arrow-up">   </i></a>
    <!-- Vendor scrits: js libraries and plugins-->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/simplebar/dist/simplebar.min.js"></script>
    <script src="vendor/tiny-slider/dist/min/tiny-slider.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-fullscreen.js/dist/lg-fullscreen.min.js"></script>
    <script src="vendor/lg-zoom.js/dist/lg-zoom.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>