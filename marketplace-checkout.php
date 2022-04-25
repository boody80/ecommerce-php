
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Checkout</title>
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
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Checkout</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Checkout</h1>
          </div>
        </div>
      </div>
      <div class="container mb-5 pb-3">
        <div class="bg-light shadow-lg rounded-3 overflow-hidden">
          <div class="row">
            <!-- Content-->
            <section class="col-lg-8 pt-2 pt-lg-4 pb-4 mb-3">
              <div class="pt-2 px-4 pe-lg-0 ps-xl-5">
                <!-- Title-->
                <h2 class="h6 border-bottom pb-3 mb-3">Billing details</h2>
                <!-- Billing detail-->
                <div class="row pb-4 gx-4 gy-3">
                  <div class="col-sm-6">
                    <label class="form-label" for="mc-fn">First name <span class='text-danger'>*</span></label>
                    <input class="form-control" type="text" value="Jonathan" id="mc-fn">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="mc-ln">Last name <span class='text-danger'>*</span></label>
                    <input class="form-control" type="text" value="Doe" id="mc-ln">
                  </div>
                  <div class="col-12">
                    <label class="form-label" for="mc-email">Email address <span class='text-danger'>*</span></label>
                    <input class="form-control" type="email" value="contact@createx.studio" id="mc-email">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="mc-company">Company</label>
                    <input class="form-control" type="text" value="Createx Studio" id="mc-company">
                  </div>
                  <div class="col-sm-6">
                    <label class="form-label" for="mc-country">Country <span class='text-danger'>*</span></label>
                    <select class="form-select" id="mc-country">
                      <option value>Select country</option>
                      <option value="Argentina">Argentina</option>
                      <option value="Belgium">Belgium</option>
                      <option value="France">France</option>
                      <option value="Germany">Germany</option>
                      <option value="Madagascar" selected>Madagascar</option>
                      <option value="Spain">Spain</option>
                      <option value="UK">United Kingdom</option>
                      <option value="USA">USA</option>
                    </select>
                  </div>
                </div>
                <!-- Order preview on mobile (screens small than 991px)-->
                <div class="widget mb-3 d-lg-none">
                  <h2 class="widget-title">Order summary</h2>
                  <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/01.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">UI Isometric Devices Pack</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$23.<small>99</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/02.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">Project Devices Showcase</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$18.<small>99</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/03.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">Gravity Devices UI Mockup</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$15.<small>99</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <ul class="list-unstyled fs-sm py-3">
                    <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">$58.<small>97</small></span></li>
                    <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$10.<small>45</small></span></li>
                    <li class="d-flex justify-content-between align-items-center fs-base"><span class="me-2">Total:</span><span class="text-end">$69.<small>42</small></span></li>
                  </ul>
                </div>
                <!-- Payment methods accordion-->
                <div class="accordion mb-2" id="payment-method" role="tablist">
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button" href="#card" data-bs-toggle="collapse"><i class="ci-card fs-lg me-2 mt-n1 align-middle"></i>Pay with Credit Card</a></h3>
                    <div class="accordion-collapse collapse show" id="card" data-bs-parent="#payment-method" role="tabpanel">
                      <div class="accordion-body">
                        <p class="fs-sm">We accept following credit cards:&nbsp;&nbsp;<img class="d-inline-block align-middle" src="img/cards.png" style="width: 187px;" alt="Cerdit Cards"></p>
                        <div class="credit-card-wrapper"></div>
                        <form class="credit-card-form row g-3">
                          <div class="col-sm-6">
                            <input class="form-control" type="text" name="number" placeholder="Card Number" required>
                          </div>
                          <div class="col-sm-6">
                            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                          </div>
                          <div class="col-sm-3">
                            <input class="form-control" type="text" name="expiry" placeholder="MM/YY" required>
                          </div>
                          <div class="col-sm-3">
                            <input class="form-control" type="text" name="cvc" placeholder="CVC" required>
                          </div>
                          <div class="col-sm-6">
                            <button class="btn btn-primary d-block w-100" type="submit">Place order</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#paypal" data-bs-toggle="collapse"><i class="ci-paypal me-2 align-middle"></i>Pay with PayPal</a></h3>
                    <div class="accordion-collapse collapse" id="paypal" data-bs-parent="#payment-method" role="tabpanel">
                      <div class="accordion-body fs-sm">
                        <p><span class='fw-medium'>PayPal</span> - the safer, easier way to pay</p>
                        <button class="btn btn-primary" type="button">Checkout with PayPal</button>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h3 class="accordion-header"><a class="accordion-button collapsed" href="#points" data-bs-toggle="collapse"><i class="ci-money-bag me-2"></i>Pay with my account balance</a></h3>
                    <div class="accordion-collapse collapse" id="points" data-bs-parent="#payment-method" role="tabpanel">
                      <div class="accordion-body">
                        <p>You currently have<span class="fw-medium">&nbsp;$1,375.<small>00</small></span>&nbsp;on your account balance.</p>
                        <button class="btn btn-primary" type="submit">Pay with account balance</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- Sidebar-->
            <!-- Order preview on desktop (screens larger than 991px)-->
            <aside class="col-lg-4 d-none d-lg-block ps-xl-5">
              <hr class="d-lg-none">
              <div class="p-4 h-100 ms-auto border-start">
                <div class="widget px-lg-2 py-2 mb-3">
                  <h2 class="widget-title text-center">Order summary</h2>
                  <div class="d-flex align-items-center pb-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/01.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">UI Isometric Devices Pack</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$23.<small>00</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/02.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">Project Devices Showcase</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$18.<small>00</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <div class="d-flex align-items-center py-2 border-bottom"><a class="d-block flex-shrink-0 me-2" href="marketplace-single.php"><img class="rounded-1" src="img/marketplace/products/widget/03.jpg" width="64" alt="Product"></a>
                    <div class="ps-1">
                      <h6 class="widget-product-title"><a href="marketplace-single.php">Gravity Devices UI Mockup</a></h6>
                      <div class="widget-product-meta"><span class="text-accent border-end pe-2 me-2">$15.<small>00</small></span><span class="fs-xs text-muted">Standard license</span></div>
                    </div>
                  </div>
                  <ul class="list-unstyled fs-sm pt-3 pb-2 border-bottom">
                    <li class="d-flex justify-content-between align-items-center"><span class="me-2">Subtotal:</span><span class="text-end">$56.<small>00</small></span></li>
                    <li class="d-flex justify-content-between align-items-center"><span class="me-2">Taxes:</span><span class="text-end">$9.<small>30</small></span></li>
                  </ul>
                  <h3 class="fw-normal text-center my-4">$65.<small>30</small></h3>
                </div>
              </div>
            </aside>
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
    <script src="vendor/card/dist/card.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>