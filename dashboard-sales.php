
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Sales</title>
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
    <link rel="stylesheet" media="screen" href="vendor/chartist/dist/chartist.min.css"/>
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
      <!-- Dashboard header-->
      <div class="page-title-overlap bg-accent pt-4">
        <div class="container d-flex flex-wrap flex-sm-nowrap justify-content-center justify-content-sm-between align-items-center pt-2">
          <div class="d-flex align-items-center pb-3">
            <div class="img-thumbnail rounded-circle position-relative flex-shrink-0" style="width: 6.375rem;"><img class="rounded-circle" src="img/marketplace/account/avatar.png" alt="Createx Studio"></div>
            <div class="ps-3">
              <h3 class="text-light fs-lg mb-0">Createx Studio</h3><span class="d-block text-light fs-ms opacity-60 py-1">Member since November 2019</span>
            </div>
          </div>
          <div class="d-flex">
            <div class="text-sm-end me-5">
              <div class="text-light fs-base">Total sales</div>
              <h3 class="text-light">426</h3>
            </div>
            <div class="text-sm-end">
              <div class="text-light fs-base">Seller rating</div>
              <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
              </div>
              <div class="text-light opacity-60 fs-xs">Based on 98 reviews</div>
            </div>
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Sidebar-->
            <aside class="col-lg-4 pe-xl-5">
              <!-- Account menu toggler (hidden on screens larger 992px)-->
              <div class="d-block d-lg-none p-4"><a class="btn btn-outline-accent d-block" href="#account-menu" data-bs-toggle="collapse"><i class="ci-menu me-2"></i>Account menu</a></div>
              <!-- Actual menu-->
              <div class="h-100 border-end mb-2">
                <div class="d-lg-block collapse" id="account-menu">
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Account</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-settings.php"><i class="ci-settings opacity-60 me-2"></i>Settings</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-purchases.php"><i class="ci-basket opacity-60 me-2"></i>Purchases</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-favorites.php"><i class="ci-heart opacity-60 me-2"></i>Favorites<span class="fs-sm text-muted ms-auto">4</span></a></li>
                  </ul>
                  <div class="bg-secondary p-4">
                    <h3 class="fs-sm mb-0 text-muted">Seller Dashboard</h3>
                  </div>
                  <ul class="list-unstyled mb-0">
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3 active" href="dashboard-sales.php"><i class="ci-dollar opacity-60 me-2"></i>Sales<span class="fs-sm text-muted ms-auto">$1,375.00</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-products.php"><i class="ci-package opacity-60 me-2"></i>Products<span class="fs-sm text-muted ms-auto">5</span></a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-add-new-product.php"><i class="ci-cloud-upload opacity-60 me-2"></i>Add New Product</a></li>
                    <li class="border-bottom mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="dashboard-payouts.php"><i class="ci-currency-exchange opacity-60 me-2"></i>Payouts</a></li>
                    <li class="mb-0"><a class="nav-link-style d-flex align-items-center px-4 py-3" href="account-signin.php"><i class="ci-sign-out opacity-60 me-2"></i>Sign out</a></li>
                  </ul>
                  <hr>
                </div>
              </div>
            </aside>
            <!-- Content-->
            <section class="col-lg-8 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 ps-lg-0 pe-xl-5">
                <h2 class="h3 py-2 text-center text-sm-start">Your sales / earnings</h2>
                <div class="row mx-n2 pt-2">
                  <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                      <h3 class="fs-sm text-muted">Earnings (before taxes)</h3>
                      <p class="h2 mb-2">$1,690.<small>50</small></p>
                      <p class="fs-ms text-muted mb-0">Sales 8/1/2021 - 8/15/2021</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                      <h3 class="fs-sm text-muted">Your balance</h3>
                      <p class="h2 mb-2">$1,375.<small>00</small></p>
                      <p class="fs-ms text-muted mb-0">To be paid on 8/15/2021</p>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 px-2 mb-4">
                    <div class="bg-secondary h-100 rounded-3 p-4 text-center">
                      <h3 class="fs-sm text-muted">Lifetime earnings</h3>
                      <p class="h2 mb-2">$9,156.<small>74</small></p>
                      <p class="fs-ms text-muted mb-0">Based on list price</p>
                    </div>
                  </div>
                </div>
                <div class="row mx-n2">
                  <div class="col-lg-8 px-2">
                    <div class="card mb-4">
                      <div class="card-body">
                        <h3 class="fs-sm pb-3 mb-3 border-bottom">Sales value, USD <span class="fw-normal fs-xs text-muted">(Past 2 weeks)</span></h3>
                        <div class="ct-chart ct-perfect-fourth" data-line-chart="{&quot;labels&quot;: [&quot;22 Jul&quot;, &quot;&quot;, &quot;24 Jul&quot;, &quot;&quot;, &quot;26 Jul&quot;, &quot;&quot;, &quot;28 Jul&quot;, &quot;&quot;, &quot;30 Jul&quot;, &quot;&quot;, &quot;01 Aug&quot;, &quot;&quot;, &quot;03 Aug&quot;, &quot;&quot;, &quot;05 Aug&quot;], &quot;series&quot;: [[0, 100, 200, 150, 50, 0, 0, 50, 0, 50, 50, 50, 0, 100, 0]]}"></div>
                      </div>
                    </div>
                    <div class="card mb-4 mb-lg-2">
                      <div class="card-body">
                        <h3 class="fs-sm pb-3 mb-3 border-bottom">Order count <span class="fw-normal fs-xs text-muted">(Past 2 weeks)</span></h3>
                        <div class="ct-chart ct-perfect-fourth" data-line-chart="{&quot;labels&quot;: [&quot;22 Jul&quot;, &quot;&quot;, &quot;24 Jul&quot;, &quot;&quot;, &quot;26 Jul&quot;, &quot;&quot;, &quot;28 Jul&quot;, &quot;&quot;, &quot;30 Jul&quot;, &quot;&quot;, &quot;01 Aug&quot;, &quot;&quot;, &quot;03 Aug&quot;, &quot;&quot;, &quot;05 Aug&quot;], &quot;series&quot;: [[0, 2, 4, 3, 1, 0, 0, 1, 0, 1, 1, 1, 0, 2, 0]]}" data-options="{&quot;axisY&quot;: {&quot;onlyInteger&quot;: true}}"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4 px-2">
                    <div class="card">
                      <div class="card-body">
                        <h3 class="fs-sm pb-3 mb-0 border-bottom">Your top countries</h3>
                        <div class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/usa.png" width="20" alt="USA">
                            <div class="ps-1">United States</div>
                          </div><span>$452</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/sweden.png" width="20" alt="Sweden">
                            <div class="ps-1">Sweden</div>
                          </div><span>$318</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/india.png" width="20" alt="India">
                            <div class="ps-1">India</div>
                          </div><span>$106</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/france.png" width="20" alt="France">
                            <div class="ps-1">France</div>
                          </div><span>$82</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fs-sm py-2 border-bottom">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/argentina.png" width="20" alt="Argentina">
                            <div class="ps-1">Argentina</div>
                          </div><span>$40</span>
                        </div>
                        <div class="d-flex justify-content-between align-items-center fs-sm pt-2">
                          <div class="d-flex align-items-start py-1"><img src="img/marketplace/account/flags/south-africa.png" width="20" alt="South Africa">
                            <div class="ps-1">South Africa</div>
                          </div><span>$17</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
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
    <script src="vendor/chartist/dist/chartist.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>