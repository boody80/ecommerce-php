
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Cartzilla | Sports Hooded Sweatshirt</title>
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
    <link rel="stylesheet" media="screen" href="vendor/drift-zoom/dist/drift-basic.min.css"/>
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
      <iframe src="//www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0" style="display: none; visibility: hidden;"></iframe>
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
      <!-- Size chart modal-->
      <div class="modal fade" id="size-chart">
        <div class="modal-dialog modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-secondary">
              <ul class="nav nav-tabs card-header-tabs" role="tablist" style="margin-bottom: -1rem;">
                <li class="nav-item"><a class="nav-link fw-medium active" href="#mens" data-bs-toggle="tab" role="tab" aria-controls="mens" aria-selected="true">Men's sizes</a></li>
                <li class="nav-item"><a class="nav-link fw-medium" href="#womens" data-bs-toggle="tab" role="tab" aria-controls="womens" aria-selected="false">Women's sizes</a></li>
              </ul>
              <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-0">
              <div class="tab-content">
                <div class="tab-pane fade show active" id="mens" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table fs-sm text-center mb-0">
                      <thead>
                        <tr>
                          <th class="align-middle bg-secondary">US<br>Sizes</th>
                          <th class="align-middle">Euro<br>Sizes</th>
                          <th class="align-middle">UK<br>Sizes</th>
                          <th class="align-middle">Inches</th>
                          <th class="align-middle">CM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="bg-secondary fw-medium">6</td>
                          <td>39</td>
                          <td>5.5</td>
                          <td>9.25"</td>
                          <td>23.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6.5</td>
                          <td>39</td>
                          <td>6</td>
                          <td>9.5"</td>
                          <td>24.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7</td>
                          <td>40</td>
                          <td>6.5</td>
                          <td>9.625"</td>
                          <td>24.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7.5</td>
                          <td>40-41</td>
                          <td>7</td>
                          <td>9.75"</td>
                          <td>24.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8</td>
                          <td>41</td>
                          <td>7.5</td>
                          <td>9.9375"</td>
                          <td>25.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8.5</td>
                          <td>41-42</td>
                          <td>8</td>
                          <td>10.125"</td>
                          <td>25.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9</td>
                          <td>42</td>
                          <td>8.5</td>
                          <td>10.25"</td>
                          <td>26</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9.5</td>
                          <td>42-43</td>
                          <td>9</td>
                          <td>10.4375"</td>
                          <td>26.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10</td>
                          <td>43</td>
                          <td>9.5</td>
                          <td>10.5625"</td>
                          <td>27</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10.5</td>
                          <td>43-44</td>
                          <td>10</td>
                          <td>10.75"</td>
                          <td>27.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11</td>
                          <td>44</td>
                          <td>10.5</td>
                          <td>10.9375"</td>
                          <td>27.9</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11.5</td>
                          <td>44-45</td>
                          <td>11</td>
                          <td>11.125"</td>
                          <td>28.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">12</td>
                          <td>45</td>
                          <td>11.5</td>
                          <td>11.25"</td>
                          <td>28.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">13</td>
                          <td>46</td>
                          <td>12.5</td>
                          <td>11.5625"</td>
                          <td>29.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">14</td>
                          <td>47</td>
                          <td>13.5</td>
                          <td>11.875"</td>
                          <td>30.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">15</td>
                          <td>48</td>
                          <td>14.5</td>
                          <td>12.1875"</td>
                          <td>31</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">16</td>
                          <td>49</td>
                          <td>15.5</td>
                          <td>12.5"</td>
                          <td>31.8</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="womens" role="tabpanel">
                  <div class="table-responsive">
                    <table class="table fs-sm text-center mb-0">
                      <thead>
                        <tr>
                          <th class="align-middle bg-secondary">US<br>Sizes</th>
                          <th class="align-middle">Euro<br>Sizes</th>
                          <th class="align-middle">UK<br>Sizes</th>
                          <th class="align-middle">Inches</th>
                          <th class="align-middle">CM</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="bg-secondary fw-medium">4</td>
                          <td>35</td>
                          <td>2</td>
                          <td>8.1875"</td>
                          <td>20.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">4.5</td>
                          <td>35</td>
                          <td>2.5</td>
                          <td>8.375"</td>
                          <td>21.3</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">5</td>
                          <td>35-36</td>
                          <td>3</td>
                          <td>8.5"</td>
                          <td>21.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">5.5</td>
                          <td>36</td>
                          <td>3.5</td>
                          <td>8.75"</td>
                          <td>22.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6</td>
                          <td>36-37</td>
                          <td>4</td>
                          <td>8.875"</td>
                          <td>22.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">6.5</td>
                          <td>37</td>
                          <td>4.5</td>
                          <td>9.0625"</td>
                          <td>23</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7</td>
                          <td>37-38</td>
                          <td>5</td>
                          <td>9.25"</td>
                          <td>23.5</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">7.5</td>
                          <td>38</td>
                          <td>5.5</td>
                          <td>9.375"</td>
                          <td>23.8</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8</td>
                          <td>38-39</td>
                          <td>6</td>
                          <td>9.5"</td>
                          <td>24.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">8.5</td>
                          <td>39</td>
                          <td>6.5</td>
                          <td>9.6875"</td>
                          <td>24.6</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9</td>
                          <td>39-40</td>
                          <td>7</td>
                          <td>9.875"</td>
                          <td>25.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">9.5</td>
                          <td>40</td>
                          <td>7.5</td>
                          <td>10"</td>
                          <td>25.4</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10</td>
                          <td>40-41</td>
                          <td>8</td>
                          <td>10.1875"</td>
                          <td>25.9</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">10.5</td>
                          <td>41</td>
                          <td>8.5</td>
                          <td>10.3125"</td>
                          <td>26.2</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11</td>
                          <td>41-42</td>
                          <td>9</td>
                          <td>10.5"</td>
                          <td>26.7</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">11.5</td>
                          <td>42</td>
                          <td>9.5</td>
                          <td>10.6875"</td>
                          <td>27.1</td>
                        </tr>
                        <tr>
                          <td class="bg-secondary fw-medium">12</td>
                          <td>42-43</td>
                          <td>10</td>
                          <td>10.875"</td>
                          <td>27.6</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Navbar 3 Level (Light)-->
      <header class="shadow-sm">
        <!-- Topbar-->
        <div class="topbar topbar-dark bg-dark">
          <div class="container">
            <div class="topbar-text dropdown d-md-none"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Useful links</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="tel:00331697720"><i class="ci-support text-muted me-2"></i>(00) 33 169 7720</a></li>
                <li><a class="dropdown-item" href="order-tracking.html"><i class="ci-location text-muted me-2"></i>Order tracking</a></li>
              </ul>
            </div>
            <div class="topbar-text text-nowrap d-none d-md-inline-block"><i class="ci-support"></i><span class="text-muted me-1">Support</span><a class="topbar-link" href="tel:00331697720">(00) 33 169 7720</a></div>
            <div class="tns-carousel tns-controls-static d-none d-md-block">
              <div class="tns-carousel-inner" data-carousel-options="{&quot;mode&quot;: &quot;gallery&quot;, &quot;nav&quot;: false}">
                <div class="topbar-text">Free shipping for order over $200</div>
                <div class="topbar-text">We return money within 30 days</div>
                <div class="topbar-text">Friendly 24/7 customer support</div>
              </div>
            </div>
            <div class="ms-3 text-nowrap"><a class="topbar-link me-4 d-none d-md-inline-block" href="order-tracking.html"><i class="ci-location"></i>Order tracking</a>
              <div class="topbar-text dropdown disable-autohide"><a class="topbar-link dropdown-toggle" href="#" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</a>
                <ul class="dropdown-menu dropdown-menu-end">
                  <li class="dropdown-item">
                    <select class="form-select form-select-sm">
                      <option value="usd">$ USD</option>
                      <option value="eur">€ EUR</option>
                      <option value="ukp">£ UKP</option>
                      <option value="jpy">¥ JPY</option>
                    </select>
                  </li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                  <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                  <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container"><a class="navbar-brand d-none d-sm-block flex-shrink-0" href="index.html"><img src="img/logo-dark.png" width="142" alt="Cartzilla"></a><a class="navbar-brand d-sm-none flex-shrink-0 me-2" href="index.html"><img src="img/logo-icon.png" width="74" alt="Cartzilla"></a>
              <div class="input-group d-none d-lg-flex mx-4">
                <input class="form-control rounded-end pe-5" type="text" placeholder="Search for products"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
              </div>
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a><a class="navbar-tool d-none d-lg-flex" href="account-wishlist.html"><span class="navbar-tool-tooltip">Wishlist</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-heart"></i></div></a><a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#signin-modal" data-bs-toggle="modal">
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                  <div class="navbar-tool-text ms-n3"><small>Hello, Sign in</small>My Account</div></a>
                <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">4</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>My Cart</small>$265.00</a>
                  <!-- Cart dropdown-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                        <div class="widget-cart-item pb-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/01.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$150.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/03.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v1.html">3-Color Sun Stash Hat</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$22.<small>50</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="img/shop/cart/widget/04.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v1.html">Cotton Polo Regular Fit</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$9.<small>00</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                        <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">$265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Expand cart<i class="ci-arrow-right ms-1 me-n1"></i></a>
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="Search for products">
                </div>
                <!-- Departments menu-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>Departments</a>
                    <div class="dropdown-menu px-2 pb-4">
                      <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="mega-dropdown-column pt-3 pt-sm-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/01.jpg" alt="Clothing"></a>
                            <h6 class="fs-base mb-2">Clothing</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's clothing</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's clothing</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's clothing</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/02.jpg" alt="Shoes"></a>
                            <h6 class="fs-base mb-2">Shoes</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Women's shoes</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Men's shoes</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's shoes</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/03.jpg" alt="Gadgets"></a>
                            <h6 class="fs-base mb-2">Gadgets</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Smartphones &amp; Tablets</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Wearable gadgets</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">E-book readers</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="d-flex flex-wrap flex-sm-nowrap">
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/04.jpg" alt="Furniture"></a>
                            <h6 class="fs-base mb-2">Furniture &amp; Decor</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Home furniture</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Office furniture</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Lighting and decoration</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/05.jpg" alt="Accessories"></a>
                            <h6 class="fs-base mb-2">Accessories</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Hats</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Sunglasses</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Bags</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="img/shop/departments/06.jpg" alt="Entertainment"></a>
                            <h6 class="fs-base mb-2">Entertainment</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's toys</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Video games</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
                <!-- Primary menu-->
                <ul class="navbar-nav">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Home</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown position-static mb-0"><a class="dropdown-item border-bottom py-2" href="home-nft.html"><span class="d-block text-heading">NFT Marketplace<span class="badge bg-danger ms-1">NEW</span></span><small class="d-block text-muted">NFTs, Multi-vendor, Auctions</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-nft.html" style="width: 250px;"><img src="img/home/preview/th08.jpg" alt="NFT Marketplace"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v1.html"><span class="d-block text-heading">Fashion Store v.1</span><small class="d-block text-muted">Classic shop layout</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v1.html" style="width: 250px;"><img src="img/home/preview/th01.jpg" alt="Fashion Store v.1"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-electronics-store.html"><span class="d-block text-heading">Electronics Store</span><small class="d-block text-muted">Slider + Promo banners</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-electronics-store.html" style="width: 250px;"><img src="img/home/preview/th03.jpg" alt="Electronics Store"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-marketplace.html"><span class="d-block text-heading">Marketplace</span><small class="d-block text-muted">Multi-vendor, digital goods</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-marketplace.html" style="width: 250px;"><img src="img/home/preview/th04.jpg" alt="Marketplace"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-grocery-store.html"><span class="d-block text-heading">Grocery Store</span><small class="d-block text-muted">Full width + Side menu</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-grocery-store.html" style="width: 250px;"><img src="img/home/preview/th06.jpg" alt="Grocery Store"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-food-delivery.html"><span class="d-block text-heading">Food Delivery Service</span><small class="d-block text-muted">Food &amp; Beverages delivery</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-food-delivery.html" style="width: 250px;"><img src="img/home/preview/th07.jpg" alt="Food Delivery Service"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2 border-bottom" href="home-fashion-store-v2.html"><span class="d-block text-heading">Fashion Store v.2</span><small class="d-block text-muted">Slider + Featured categories</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-fashion-store-v2.html" style="width: 250px;"><img src="img/home/preview/th02.jpg" alt="Fashion Store v.2"></a></div>
                      </li>
                      <li class="dropdown position-static mb-0"><a class="dropdown-item py-2" href="home-single-store.html"><span class="d-block text-heading">Single Product Store</span><small class="d-block text-muted">Single product / mono brand</small></a>
                        <div class="dropdown-menu h-100 animation-none mt-0 p-3"><a class="d-block" href="home-single-store.html" style="width: 250px;"><img src="img/home/preview/th05.jpg" alt="Single Product / Brand Store"></a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown active"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop</a>
                    <div class="dropdown-menu p-0">
                      <div class="d-flex flex-wrap flex-sm-nowrap px-2">
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Shop layouts</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ls.html">Shop Grid - Left Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-rs.html">Shop Grid - Right Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-grid-ft.html">Shop Grid - Filters on Top</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ls.html">Shop List - Left Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-rs.html">Shop List - Right Sidebar</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-list-ft.html">Shop List - Filters on Top</a></li>
                            </ul>
                          </div>
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Marketplace</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-category.html">Category Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-single.html">Single Item Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-vendor.html">Vendor Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-cart.html">Cart</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="marketplace-checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">Grocery store</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-catalog.html">Product Catalog</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-single.html">Single Product Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="grocery-checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 pb-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Food Delivery</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-category.html">Category Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-single.html">Single Item (Restaurant)</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-cart.html">Cart (Your Order)</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="food-delivery-checkout.html">Checkout (Address &amp; Payment)</a></li>
                            </ul>
                          </div>
                          <div class="widget widget-links">
                            <h6 class="fs-base mb-3">NFT Marketplace<span class="badge bg-danger ms-1">NEW</span></h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-catalog-v1.html">Catalog v.1</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-catalog-v2.html">Catalog v.2</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-live.html">Single Item - Auction Live</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-auction-ended.html">Single Item - Auction Ended</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-single-buy.html">Single Item - Buy Now</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-vendor.html">Vendor Page</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-connect-wallet.html">Connect Wallet</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="nft-create-item.html">Create New Item</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-1 pt-lg-4 px-2 px-lg-3">
                          <div class="widget widget-links mb-4">
                            <h6 class="fs-base mb-3">Shop pages</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-categories.html">Shop Categories</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v1.html">Product Page v.1</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-single-v2.html">Product Page v.2</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="shop-cart.html">Cart</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-details.html">Checkout - Details</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-shipping.html">Checkout - Shipping</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-payment.html">Checkout - Payment</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-review.html">Checkout - Review</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="checkout-complete.html">Checkout - Complete</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="order-tracking.html">Order Tracking</a></li>
                              <li class="widget-list-item"><a class="widget-list-link" href="comparison.html">Product Comparison</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Account</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Shop User Account</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="account-orders.html">Orders History</a></li>
                          <li><a class="dropdown-item" href="account-profile.html">Profile Settings</a></li>
                          <li><a class="dropdown-item" href="account-address.html">Account Addresses</a></li>
                          <li><a class="dropdown-item" href="account-payment.html">Payment Methods</a></li>
                          <li><a class="dropdown-item" href="account-wishlist.html">Wishlist</a></li>
                          <li><a class="dropdown-item" href="account-tickets.html">My Tickets</a></li>
                          <li><a class="dropdown-item" href="account-single-ticket.html">Single Ticket</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Vendor Dashboard</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="dashboard-settings.html">Settings</a></li>
                          <li><a class="dropdown-item" href="dashboard-purchases.html">Purchases</a></li>
                          <li><a class="dropdown-item" href="dashboard-favorites.html">Favorites</a></li>
                          <li><a class="dropdown-item" href="dashboard-sales.html">Sales</a></li>
                          <li><a class="dropdown-item" href="dashboard-products.html">Products</a></li>
                          <li><a class="dropdown-item" href="dashboard-add-new-product.html">Add New Product</a></li>
                          <li><a class="dropdown-item" href="dashboard-payouts.html">Payouts</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">NFT Marketplace<span class="badge bg-danger ms-1">NEW</span></a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="nft-account-settings.html">Profile Settings</a></li>
                          <li><a class="dropdown-item" href="nft-account-payouts.html">Wallet &amp; Payouts</a></li>
                          <li><a class="dropdown-item" href="nft-account-my-items.html">My Items</a></li>
                          <li><a class="dropdown-item" href="nft-account-my-collections.html">My Collections</a></li>
                          <li><a class="dropdown-item" href="nft-account-favorites.html">Favorites</a></li>
                          <li><a class="dropdown-item" href="nft-account-notifications.html">Notifications</a></li>
                        </ul>
                      </li>
                      <li><a class="dropdown-item" href="account-signin.html">Sign In / Sign Up</a></li>
                      <li><a class="dropdown-item" href="account-password-recovery.html">Password Recovery</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Pages</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Navbar Variants</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="navbar-1-level-light.html">1 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-1-level-dark.html">1 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-light.html">2 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-2-level-dark.html">2 Level Dark</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-light.html">3 Level Light</a></li>
                          <li><a class="dropdown-item" href="navbar-3-level-dark.html">3 Level Dark</a></li>
                          <li><a class="dropdown-item" href="home-electronics-store.html">Electronics Store</a></li>
                          <li><a class="dropdown-item" href="home-marketplace.html">Marketplace</a></li>
                          <li><a class="dropdown-item" href="home-grocery-store.html">Side Menu (Grocery)</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="about.html">About Us</a></li>
                      <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Help Center</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="help-topics.html">Help Topics</a></li>
                          <li><a class="dropdown-item" href="help-single-topic.html">Single Topic</a></li>
                          <li><a class="dropdown-item" href="help-submit-request.html">Submit a Request</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">404 Not Found</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="404-simple.html">404 - Simple Text</a></li>
                          <li><a class="dropdown-item" href="404-illustration.html">404 - Illustration</a></li>
                        </ul>
                      </li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="sticky-footer.html">Sticky Footer Demo</a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Blog</a>
                    <ul class="dropdown-menu">
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog List Layouts</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-list-sidebar.html">List with Sidebar</a></li>
                          <li><a class="dropdown-item" href="blog-list.html">List no Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog Grid Layouts</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-grid-sidebar.html">Grid with Sidebar</a></li>
                          <li><a class="dropdown-item" href="blog-grid.html">Grid no Sidebar</a></li>
                        </ul>
                      </li>
                      <li class="dropdown"><a class="dropdown-item dropdown-toggle" href="#" data-bs-toggle="dropdown">Single Post Layouts</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="blog-single-sidebar.html">Article with Sidebar</a></li>
                          <li><a class="dropdown-item" href="blog-single.html">Article no Sidebar</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Docs / Components</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="docs/dev-setup.html">
                          <div class="d-flex">
                            <div class="lead text-muted pt-1"><i class="ci-book"></i></div>
                            <div class="ms-2"><span class="d-block text-heading">Documentation</span><small class="d-block text-muted">Kick-start customization</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="components/typography.html">
                          <div class="d-flex">
                            <div class="lead text-muted pt-1"><i class="ci-server"></i></div>
                            <div class="ms-2"><span class="d-block text-heading">Components<span class="badge bg-info ms-2">40+</span></span><small class="d-block text-muted">Faster page building</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="docs/changelog.html">
                          <div class="d-flex">
                            <div class="lead text-muted pt-1"><i class="ci-edit"></i></div>
                            <div class="ms-2"><span class="d-block text-heading">Changelog<span class="badge bg-success ms-2">v2.4.0</span></span><small class="d-block text-muted">Regular updates</small></div>
                          </div></a></li>
                      <li class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="mailto:support@createx.studio">
                          <div class="d-flex">
                            <div class="lead text-muted pt-1"><i class="ci-help"></i></div>
                            <div class="ms-2"><span class="d-block text-heading">Support</span><small class="d-block text-muted">support@createx.studio</small></div>
                          </div></a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- Page Title-->
      <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
          <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                <li class="breadcrumb-item"><a class="text-nowrap" href="index.html"><i class="ci-home"></i>Home</a></li>
                <li class="breadcrumb-item text-nowrap"><a href="#">Shop</a>
                </li>
                <li class="breadcrumb-item text-nowrap active" aria-current="page">Product Page v.1</li>
              </ol>
            </nav>
          </div>
          <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
            <h1 class="h3 text-light mb-0">Sports Hooded Sweatshirt</h1>
          </div>
        </div>
      </div>
      <div class="container">
        <!-- Gallery + details-->
        <div class="bg-light shadow-lg rounded-3 px-4 py-3 mb-5">
          <div class="px-lg-3">
            <div class="row">
              <!-- Product gallery-->
              <div class="col-lg-7 pe-lg-0 pt-lg-4">
                <div class="product-gallery">
                  <div class="product-gallery-preview order-sm-2">
                    <div class="product-gallery-preview-item active" id="first"><img class="image-zoom" src="img/shop/single/gallery/01.jpg" data-zoom="img/shop/single/gallery/01.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="second"><img class="image-zoom" src="img/shop/single/gallery/02.jpg" data-zoom="img/shop/single/gallery/02.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="third"><img class="image-zoom" src="img/shop/single/gallery/03.jpg" data-zoom="img/shop/single/gallery/03.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                    <div class="product-gallery-preview-item" id="fourth"><img class="image-zoom" src="img/shop/single/gallery/04.jpg" data-zoom="img/shop/single/gallery/04.jpg" alt="Product image">
                      <div class="image-zoom-pane"></div>
                    </div>
                  </div>
                  <div class="product-gallery-thumblist order-sm-1"><a class="product-gallery-thumblist-item active" href="#first"><img src="img/shop/single/gallery/th01.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#second"><img src="img/shop/single/gallery/th02.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#third"><img src="img/shop/single/gallery/th03.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item" href="#fourth"><img src="img/shop/single/gallery/th04.jpg" alt="Product thumb"></a><a class="product-gallery-thumblist-item video-item" href="https://www.youtube.com/watch?v=1vrXpMLLK14">
                      <div class="product-gallery-thumblist-item-text"><i class="ci-video"></i>Video</div></a></div>
                </div>
              </div>
              <!-- Product details-->
              <div class="col-lg-5 pt-4 pt-lg-0">
                <div class="product-details ms-auto pb-3">
                  <div class="d-flex justify-content-between align-items-center mb-2"><a href="#reviews" data-scroll>
                      <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                      </div><span class="d-inline-block fs-sm text-body align-middle mt-1 ms-1">74 Reviews</span></a>
                    <button class="btn-wishlist me-0 me-lg-n3" type="button" data-bs-toggle="tooltip" title="Add to wishlist"><i class="ci-heart"></i></button>
                  </div>
                  <div class="mb-3"><span class="h3 fw-normal text-accent me-1">$18.<small>99</small></span>
                    <del class="text-muted fs-lg me-3">$25.<small>00</small></del><span class="badge bg-danger badge-shadow align-middle mt-n2">Sale</span>
                  </div>
                  <div class="fs-sm mb-4"><span class="text-heading fw-medium me-1">Color:</span><span class="text-muted" id="colorOption">Red/Dark blue/White</span></div>
                  <div class="position-relative me-n4 mb-3">
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color1" data-bs-label="colorOption" value="Red/Dark blue/White" checked>
                      <label class="form-option-label rounded-circle" for="color1"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-1.png)"></span></label>
                    </div>
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color2" data-bs-label="colorOption" value="Beige/White/Dark grey">
                      <label class="form-option-label rounded-circle" for="color2"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-2.png)"></span></label>
                    </div>
                    <div class="form-check form-option form-check-inline mb-2">
                      <input class="form-check-input" type="radio" name="color" id="color3" data-bs-label="colorOption" value="Dark grey/White/Orange">
                      <label class="form-option-label rounded-circle" for="color3"><span class="form-option-color rounded-circle" style="background-image: url(img/shop/single/color-opt-3.png)"></span></label>
                    </div>
                    <div class="product-badge product-available mt-n1"><i class="ci-security-check"></i>Product available</div>
                  </div>
                  <form class="mb-grid-gutter" method="post">
                    <div class="mb-3">
                      <div class="d-flex justify-content-between align-items-center pb-1">
                        <label class="form-label" for="product-size">Size:</label><a class="nav-link-style fs-sm" href="#size-chart" data-bs-toggle="modal"><i class="ci-ruler lead align-middle me-1 mt-n1"></i>Size guide</a>
                      </div>
                      <select class="form-select" required id="product-size">
                        <option value="">Select size</option>
                        <option value="xs">XS</option>
                        <option value="s">S</option>
                        <option value="m">M</option>
                        <option value="l">L</option>
                        <option value="xl">XL</option>
                      </select>
                    </div>
                    <div class="mb-3 d-flex align-items-center">
                      <select class="form-select me-3" style="width: 5rem;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                      <button class="btn btn-primary btn-shadow d-block w-100" type="submit"><i class="ci-cart fs-lg me-2"></i>Add to Cart</button>
                    </div>
                  </form>
                  <!-- Product panels-->
                  <div class="accordion mb-4" id="productPanels">
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button" href="#productInfo" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="productInfo"><i class="ci-announcement text-muted fs-lg align-middle mt-n1 me-2"></i>Product info</a></h3>
                      <div class="accordion-collapse collapse show" id="productInfo" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                          <h6 class="fs-sm mb-2">Composition</h6>
                          <ul class="fs-sm ps-4">
                            <li>Elastic rib: Cotton 95%, Elastane 5%</li>
                            <li>Lining: Cotton 100%</li>
                            <li>Cotton 80%, Polyester 20%</li>
                          </ul>
                          <h6 class="fs-sm mb-2">Art. No.</h6>
                          <ul class="fs-sm ps-4 mb-0">
                            <li>183260098</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#shippingOptions" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="shippingOptions"><i class="ci-delivery text-muted lead align-middle mt-n1 me-2"></i>Shipping options</a></h3>
                      <div class="accordion-collapse collapse" id="shippingOptions" data-bs-parent="#productPanels">
                        <div class="accordion-body fs-sm">
                          <div class="d-flex justify-content-between border-bottom pb-2">
                            <div>
                              <div class="fw-semibold text-dark">Courier</div>
                              <div class="fs-sm text-muted">2 - 4 days</div>
                            </div>
                            <div>$26.50</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">Local shipping</div>
                              <div class="fs-sm text-muted">up to one week</div>
                            </div>
                            <div>$10.00</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">Flat rate</div>
                              <div class="fs-sm text-muted">5 - 7 days</div>
                            </div>
                            <div>$33.85</div>
                          </div>
                          <div class="d-flex justify-content-between border-bottom py-2">
                            <div>
                              <div class="fw-semibold text-dark">UPS ground shipping</div>
                              <div class="fs-sm text-muted">4 - 6 days</div>
                            </div>
                            <div>$18.00</div>
                          </div>
                          <div class="d-flex justify-content-between pt-2">
                            <div>
                              <div class="fw-semibold text-dark">Local pickup from store</div>
                              <div class="fs-sm text-muted">&mdash;</div>
                            </div>
                            <div>$0.00</div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="accordion-item">
                      <h3 class="accordion-header"><a class="accordion-button collapsed" href="#localStore" role="button" data-bs-toggle="collapse" aria-expanded="true" aria-controls="localStore"><i class="ci-location text-muted fs-lg align-middle mt-n1 me-2"></i>Find in local store</a></h3>
                      <div class="accordion-collapse collapse" id="localStore" data-bs-parent="#productPanels">
                        <div class="accordion-body">
                          <select class="form-select">
                            <option value>Select your country</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Belgium">Belgium</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Spain">Spain</option>
                            <option value="UK">United Kingdom</option>
                            <option value="USA">USA</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Sharing-->
                  <label class="form-label d-inline-block align-middle my-2 me-3">Share:</label><a class="btn-share btn-twitter me-2 my-2" href="#"><i class="ci-twitter"></i>Twitter</a><a class="btn-share btn-instagram me-2 my-2" href="#"><i class="ci-instagram"></i>Instagram</a><a class="btn-share btn-facebook my-2" href="#"><i class="ci-facebook"></i>Facebook</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Product description section 1-->
        <div class="row align-items-center py-md-3">
          <div class="col-lg-5 col-md-6 offset-lg-1 order-md-2"><img class="d-block rounded-3" src="img/shop/single/prod-img.jpg" alt="Image"></div>
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4 order-md-1">
            <h2 class="h3 mb-4 pb-2">High quality materials</h2>
            <h6 class="fs-base mb-3">Soft cotton blend</h6>
            <p class="fs-sm text-muted pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
            <h6 class="fs-base mb-3">Washing instructions</h6>
            <ul class="nav nav-tabs mb-3" role="tablist">
              <li class="nav-item"><a class="nav-link active" href="#wash" data-bs-toggle="tab" role="tab"><i class="ci-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#bleach" data-bs-toggle="tab" role="tab"><i class="ci-bleach fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#hand-wash" data-bs-toggle="tab" role="tab"><i class="ci-hand-wash fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#ironing" data-bs-toggle="tab" role="tab"><i class="ci-ironing fs-xl"></i></a></li>
              <li class="nav-item"><a class="nav-link" href="#dry-clean" data-bs-toggle="tab" role="tab"><i class="ci-dry-clean fs-xl"></i></a></li>
            </ul>
            <div class="tab-content text-muted fs-sm">
              <div class="tab-pane fade show active" id="wash" role="tabpanel">30° mild machine washing</div>
              <div class="tab-pane fade" id="bleach" role="tabpanel">Do not use any bleach</div>
              <div class="tab-pane fade" id="hand-wash" role="tabpanel">Hand wash normal (30°)</div>
              <div class="tab-pane fade" id="ironing" role="tabpanel">Low temperature ironing</div>
              <div class="tab-pane fade" id="dry-clean" role="tabpanel">Do not dry clean</div>
            </div>
          </div>
        </div>
        <!-- Product description section 2-->
        <div class="row align-items-center py-4 py-lg-5">
          <div class="col-lg-5 col-md-6 offset-lg-1"><img class="d-block rounded-3" src="img/shop/single/prod-map.png" alt="Map"></div>
          <div class="col-lg-4 col-md-6 offset-lg-1 py-4">
            <h2 class="h3 mb-4 pb-2">Where is it made?</h2>
            <h6 class="fs-base mb-3">Apparel Manufacturer, Ltd.</h6>
            <p class="fs-sm text-muted pb-2">​Sam Tower, 6 Road No 32, Dhaka 1875, Bangladesh</p>
            <div class="d-flex mb-2">
              <div class="me-4 pe-2 text-center">
                <h4 class="h2 text-accent mb-1">3258</h4>
                <p>Workers</p>
              </div>
              <div class="me-4 pe-2 text-center">
                <h4 class="h2 text-accent mb-1">43%</h4>
                <p>Female</p>
              </div>
              <div class="text-center">
                <h4 class="h2 text-accent mb-1">57%</h4>
                <p>Male</p>
              </div>
            </div>
            <h6 class="fs-base mb-3">Factory information</h6>
            <p class="fs-sm text-muted pb-md-2">​Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
          </div>
        </div>
      </div>
      <!-- Reviews-->
      <div class="border-top border-bottom my-lg-3 py-5">
        <div class="container pt-md-2" id="reviews">
          <div class="row pb-3">
            <div class="col-lg-4 col-md-5">
              <h2 class="h3 mb-4">74 Reviews</h2>
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
          <div class="row pt-4">
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
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
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
      </div>
      <!-- Product carousel (Style with)-->
      <div class="container pt-5">
        <h2 class="h3 text-center pb-4">Style with</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/14.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Jeans</a>
                  <h3 class="product-title fs-sm"><a href="#">Slim Taper Fit Jeans</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$58.<small>99</small></span></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static"><span class="badge bg-danger badge-shadow">Sale</span>
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/17.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s T-shirts</a>
                  <h3 class="product-title fs-sm"><a href="#">Cotton T-shirt Regular Fit</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$9.<small>50</small></span>
                      <del class="fs-sm text-muted">$11.<small>50</small></del>
                    </div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/18.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Shoes</a>
                  <h3 class="product-title fs-sm"><a href="#">Men’s Leather Keds</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$64.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/19.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s T-shirts</a>
                  <h3 class="product-title fs-sm"><a href="#">3 Color Collection of T-shirts</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$27.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/13.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s T-shirts</a>
                  <h3 class="product-title fs-sm"><a href="#">Cotton Polo Regular Fit</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$13.<small>50</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Product carousel (You may also like)-->
      <div class="container py-5 my-md-3">
        <h2 class="h3 text-center pb-4">You may also like</h2>
        <div class="tns-carousel tns-controls-static tns-controls-outside">
          <div class="tns-carousel-inner" data-carousel-options="{&quot;items&quot;: 2, &quot;controls&quot;: true, &quot;nav&quot;: false, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;500&quot;:{&quot;items&quot;:2, &quot;gutter&quot;: 18},&quot;768&quot;:{&quot;items&quot;:3, &quot;gutter&quot;: 20}, &quot;1100&quot;:{&quot;items&quot;:4, &quot;gutter&quot;: 30}}}">
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/20.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                  <h3 class="product-title fs-sm"><a href="#">Block-colored Hooded Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price"><span class="text-accent">$24.<small>99</small></span></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/21.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                  <h3 class="product-title fs-sm"><a href="#">Block-colored Hooded Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$26.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/22.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                  <h3 class="product-title fs-sm"><a href="#">Block-colored Hooded Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$24.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/23.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                  <h3 class="product-title fs-sm"><a href="#">Block-colored Hooded Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$24.<small>99</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Product-->
            <div>
              <div class="card product-card card-static">
                <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="#"><img src="img/shop/catalog/24.jpg" alt="Product"></a>
                <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Hoodie</a>
                  <h3 class="product-title fs-sm"><a href="#">Block-colored Hooded Top</a></h3>
                  <div class="d-flex justify-content-between">
                    <div class="product-price text-accent">$25.<small>00</small></div>
                    <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Footer-->
    <footer class="footer bg-dark pt-5">
      <div class="container">
        <div class="row pb-2">
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Shop departments</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sneakers &amp; Athletic</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Athletic Apparel</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sandals</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Jeans</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shirts &amp; Tops</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shorts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">T-Shirts</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Swimwear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Clogs &amp; Mules</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Bags &amp; Wallets</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Accessories</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Sunglasses &amp; Eyewear</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Watches</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">Account &amp; shipping info</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">Your account</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Shipping rates &amp; policies</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Refunds &amp; replacements</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Order tracking</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Delivery info</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Taxes &amp; fees</a></li>
              </ul>
            </div>
            <div class="widget widget-links widget-light pb-2 mb-4">
              <h3 class="widget-title text-light">About us</h3>
              <ul class="widget-list">
                <li class="widget-list-item"><a class="widget-list-link" href="#">About company</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Our team</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">Careers</a></li>
                <li class="widget-list-item"><a class="widget-list-link" href="#">News</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Stay informed</h3>
              <form class="subscription-form validate" action="https://studio.us12.list-manage.com/subscribe/post?u=c7103e2c981361a6639545bd5&amp;amp;id=29ca296126" method="post" name="mc-embedded-subscribe-form" target="_blank" novalidate>
                <div class="input-group flex-nowrap"><i class="ci-mail position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="email" name="EMAIL" placeholder="Your email" required>
                  <button class="btn btn-primary" type="submit" name="subscribe">Subscribe*</button>
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true">
                  <input class="subscription-form-antispam" type="text" name="b_c7103e2c981361a6639545bd5_29ca296126" tabindex="-1">
                </div>
                <div class="form-text text-light opacity-50">*Subscribe to our newsletter to receive early discount offers, updates and new products info.</div>
                <div class="subscription-status"></div>
              </form>
            </div>
            <div class="widget pb-2 mb-4">
              <h3 class="widget-title text-light pb-1">Download our app</h3>
              <div class="d-flex flex-wrap">
                <div class="me-2 mb-2"><a class="btn-market btn-apple" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">App Store</span></a></div>
                <div class="mb-2"><a class="btn-market btn-google" href="#" role="button"><span class="btn-market-subtitle">Download on the</span><span class="btn-market-title">Google Play</span></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pt-5 bg-darker">
        <div class="container">
          <div class="row pb-3">
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-rocket text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Fast and free delivery</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Free delivery for all orders over $200</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-currency-exchange text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Money back guarantee</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We return money within 30 days</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-support text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">24/7 customer support</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">Friendly 24/7 customer support</p>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
              <div class="d-flex"><i class="ci-card text-primary" style="font-size: 2.25rem;"></i>
                <div class="ps-3">
                  <h6 class="fs-base text-light mb-1">Secure online payment</h6>
                  <p class="mb-0 fs-ms text-light opacity-50">We possess SSL / Secure сertificate</p>
                </div>
              </div>
            </div>
          </div>
          <hr class="hr-light mb-5">
          <div class="row pb-2">
            <div class="col-md-6 text-center text-md-start mb-4">
              <div class="text-nowrap mb-4"><a class="d-inline-block align-middle mt-n1 me-3" href="#"><img class="d-block" src="img/footer-logo-light.png" width="117" alt="Cartzilla"></a>
                <div class="btn-group dropdown disable-autohide">
                  <button class="btn btn-outline-light border-light btn-sm dropdown-toggle px-2" type="button" data-bs-toggle="dropdown"><img class="me-2" src="img/flags/en.png" width="20" alt="English">Eng / $</button>
                  <ul class="dropdown-menu my-1">
                    <li class="dropdown-item">
                      <select class="form-select form-select-sm">
                        <option value="usd">$ USD</option>
                        <option value="eur">€ EUR</option>
                        <option value="ukp">£ UKP</option>
                        <option value="jpy">¥ JPY</option>
                      </select>
                    </li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/fr.png" width="20" alt="Français">Français</a></li>
                    <li><a class="dropdown-item pb-1" href="#"><img class="me-2" src="img/flags/de.png" width="20" alt="Deutsch">Deutsch</a></li>
                    <li><a class="dropdown-item" href="#"><img class="me-2" src="img/flags/it.png" width="20" alt="Italiano">Italiano</a></li>
                  </ul>
                </div>
              </div>
              <div class="widget widget-links widget-light">
                <ul class="widget-list d-flex flex-wrap justify-content-center justify-content-md-start">
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Outlets</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Affiliates</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Support</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Privacy</a></li>
                  <li class="widget-list-item me-4"><a class="widget-list-link" href="#">Terms of use</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6 text-center text-md-end mb-4">
              <div class="mb-3"><a class="btn-social bs-light bs-twitter ms-2 mb-2" href="#"><i class="ci-twitter"></i></a><a class="btn-social bs-light bs-facebook ms-2 mb-2" href="#"><i class="ci-facebook"></i></a><a class="btn-social bs-light bs-instagram ms-2 mb-2" href="#"><i class="ci-instagram"></i></a><a class="btn-social bs-light bs-pinterest ms-2 mb-2" href="#"><i class="ci-pinterest"></i></a><a class="btn-social bs-light bs-youtube ms-2 mb-2" href="#"><i class="ci-youtube"></i></a></div><img class="d-inline-block" src="img/cards-alt.png" width="187" alt="Payment methods">
            </div>
          </div>
          <div class="pb-4 fs-xs text-light opacity-50 text-center text-md-start">© All rights reserved. Made by <a class="text-light" href="https://createx.studio/" target="_blank" rel="noopener">Createx Studio</a></div>
        </div>
      </div>
    </footer>
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
    <script src="vendor/drift-zoom/dist/Drift.min.js"></script>
    <script src="vendor/lightgallery.js/dist/js/lightgallery.min.js"></script>
    <script src="vendor/lg-video.js/dist/lg-video.min.js"></script>
    <!-- Main theme script-->
    <script src="js/theme.min.js"></script>
  </body>
</html>