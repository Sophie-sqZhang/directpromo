<header>
  <!-- First Header -->
  <div class="first-header d-flex justify-content-between align-items-center">
    <div class="left-header text-primary">The Best Online Store</div>
    <div class="right-header d-flex align-items-center">
      <ul class="account d-flex align-items-center">
        <li>
          <a href="https://www.facebook.com/">
            <ion-icon name="logo-facebook" class="icon"></ion-icon
          ></a>
        </li>
        <li>
          <a href="https://www.twitter.com/">
            <ion-icon name="logo-twitter" class="icon"></ion-icon>
          </a>
        </li>
        <li>
          <a href="https://www.linkedin.com/">
            <ion-icon name="logo-linkedin" class="icon"></ion-icon>
          </a>
        </li>
        <li>
          <a href="https://www.youtube.com/">
            <ion-icon name="logo-youtube" class="icon"></ion-icon>
          </a>
        </li>
        <li>
          <a href="https://www.instagram.com/">
            <ion-icon name="logo-instagram" class="icon"></ion-icon>
          </a>
        </li>
      </ul>

      <div class="login">
        <a href="#" class="text-secondary"
          ><ion-icon name="person-outline"></ion-icon>Login</a
        >
      </div>
    </div>
  </div>

  <hr />
  <!-- Second header -->
  <div class="second-head d-flex align-items-center">
    <a href="index.php"
      ><img
        src="https://idirectpromo.24livehost.com/storage/settings/9o2ymU1yqvzgNAat890x2OABEWWy2VPNGiWN6H2V.png"
        class="logo"
        alt="logo"
    /></a>
    <div class="header-desc d-flex align-items-center">
      <figure class="d-flex">
        <img
          src="https://idirectpromo.24livehost.com/front/img/product-inline.png"
          alt="quantity"
        />
        <figcaption class="figure-caption">
          Over 15000 Products Online
        </figcaption>
      </figure>
      <figure class="d-flex align-items-center">
        <img
          src="https://idirectpromo.24livehost.com/front/img/calendar.png"
          alt="years"
        />
        <figcaption class="figure-caption">20+ Years in Industry</figcaption>
      </figure>
      <figure class="d-flex align-items-center">
        <img
          src=" https://idirectpromo.24livehost.com/front/img/shield.png"
          alt="service"
        />
        <figcaption class="figure-caption">
          Quality + Services Lowest Prices
        </figcaption>
      </figure>
    </div>
    <div class="header-search d-flex">
      <div class="search mr-4">
        <form action="display.php" method="get" class="input-group">
          <input
            type="text"
            name="search"
            placeholder="Search for items"
            class="form-control fc-clear border-0 btnsearch"
          />
          <button
            type="submit"
            name="submit"
            class="btnsearch border-0 input-group-btn"
          >
            <ion-icon name="search"></ion-icon>
          </button>
        </form>
      </div>
      <div class="cart">
        <figure class="d-flex align-items-center">
          <img
            src="https://idirectpromo.24livehost.com/front/img/cart.png"
            alt="cart"
          />
          <figcaption class="figure-caption">0 item(s)</figcaption>
        </figure>
      </div>
    </div>
  </div>
  <hr />
  <!-- Navigation -->
  <div class="header-nav d-flex align-items-center justify-content-between">
    <nav class="navigation d-flex align-items-center justify-content-between">
      <!-- view all products dropdown menu -->
      <div class="dropdown show">
        <a
          class="btn btn-primary dropdown-toggle"
          href="#"
          role="button"
          id="dropdownMenuLink"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          View All Products
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <div class="d-flex">
            <div class="writing">
              <a class="dropdown-item text-primary" href="#"
                >Writing Instruments</a
              >
              <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
            <div class="bags">
              <a class="dropdown-item text-primary" href="#">bags</a>
              <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <!-- Hot products dropdown menu -->
      <div class="dropdown show">
        <a
          href="#"
          id="dropdownMenuLink"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
          class="navlink"
        >
          Hot Products
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <div class="d-flex">
            <div class="writing">
              <a class="dropdown-item text-primary" href="#"
                >Writing Instruments</a
              >
              <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
            <div class="bags">
              <a class="dropdown-item text-primary" href="#">bags</a>
              <ul>
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li>
                  <a class="dropdown-item" href="#">Another action</a>
                </li>
                <li>
                  <a class="dropdown-item" href="#">Something else here</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- brand -->
      <div class="brand-section">
        <a class="navlink" href="#">Brands</a>
      </div>
      <div class="source-section">
        <a class="navlink" href="#">Sourcing</a>
      </div>
      <div class="clearance-section">
        <a class="navlink" href="#">Clearance</a>
      </div>
      <div class="eco-section">
        <a class="navlink" href="#">Eco Friendly</a>
      </div>
      <div class="about-section">
        <a class="navlink" href="#">About US</a>
      </div>
    </nav>
    <!-- nav right section -->
    <div class="contact">
      <figure class="d-flex">
        <img
          src="https://idirectpromo.24livehost.com/front/img/call.png"
          alt="contact"
        />
        <div>
          <span class="navphone">1800 592 211</span>
          <br />
          <span>24/7 Support Center</span>
        </div>
      </figure>
    </div>
  </div>
</header>
