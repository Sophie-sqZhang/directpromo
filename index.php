<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <!-- owl carousel -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
      crossorigin="anonymous"
    ></script>
    <!-- owl -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="script.js"></script>
  </head>
  <body>
    <?php 
    include_once("header.inc");
    ?>
    <!-- banner section -->
    <section class="banner">
      <div
        id="carouselExampleControls"
        class="carousel slide"
        data-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              class="d-block w-100"
              src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
              alt="First slide"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
              alt="Second slide"
            />
          </div>
          <div class="carousel-item">
            <img
              class="d-block w-100"
              src="https://idirectpromo.24livehost.com/storage/banner_images/1659338454_08012022072054_banner_.jpg"
              alt="Third slide"
            />
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- team description section -->
    <section class="teamdescript">
      <span class="productstext d-block text-center"
        >THE BEST PROMOTIONAL PRODUCTS</span
      >
      <div class="line"><p></p></div>

      <h1 class="text-center">Online store in Australia</h1>
      <p class="text-center">
        We are the team to help you to find the Right Products (WITH QUALITY)
        Best Prices (GUARANTEED) Direct from manufacturers
      </p>
      <p class="text-center">
        More than 20 years of selling promotional products in the world Inhouse
        decoration services Vast range of products online, continuing to expand
        Professional services
      </p>
      <p class="text-center">
        Over the years, we have won and surely will continue to win a great
        reputation of 'On-Time Delivery' from our clients. If you have an urgent
        job and need help, please contact us.
      </p>
    </section>

    <!-- product section -->
    <section class="productsec">
      <ul class="nav nav-tabs">
        <li class="active">
          <a data-toggle="tab" href="#menu1" class="menulink"
            >Why Idirectpromo</a
          >
        </li>
        <li>
          <a data-toggle="tab" href="#menu2" class="menulink"
            >Latest Products</a
          >
        </li>
        <li>
          <a data-toggle="tab" href="#menu3" class="menulink">Best Seller</a>
        </li>
      </ul>

      <div class="tab-content content">
        <div id="menu1" class="tab-pane fade">
          <p>
            Lorem Ipsum has been the industry's standard dummy text ever since
            the 1500s, when an unknown printer took a galley of type and
            scrambled it to make a type specimen book. It has survived not only
            five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages,
            and more recently with desktop publishing software like Aldus
            PageMaker including versions of Lorem Ipsum
          </p>
        </div>
        <div id="menu2" class="tab-pane fade">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="menucard d-flex">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663080193_09132022144313product.jpg"
                  alt="Miami Drink Bottle"
                />
                <div class="card-body">
                  <h5 class="card-title">Miami Drink Bottle</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 9.40</p>
                    <p class="text-secondary">MOQ: 25</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663068169_09132022112249product.jpg"
                  alt="Jelly Bean In Bag 50g"
                />
                <div class="card-body">
                  <h5 class="card-title">Jelly Bean In Bag 50g</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 0.35</p>
                    <p class="text-secondary">MOQ: 100</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1661339785_08242022111625product.jpg"
                  alt="Plastics Bags"
                />
                <div class="card-body">
                  <h5 class="card-title">Plastics Bags</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 1.00</p>
                    <p class="text-secondary">MOQ: 120</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="cardbtnsection">
            <a href="#" class="btn cardbtn cardbutton">View ALL</a>
          </div>
        </div>
        <div id="menu3" class="tab-pane fade">
          <div
            id="carouselExampleControls"
            class="carousel slide"
            data-ride="carousel"
          >
            <div class="menucard d-flex">
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663080193_09132022144313product.jpg"
                  alt="Miami Drink Bottle"
                />
                <div class="card-body">
                  <h5 class="card-title">Miami Drink Bottle</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 9.40</p>
                    <p class="text-secondary">MOQ: 25</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663068169_09132022112249product.jpg"
                  alt="Jelly Bean In Bag 50g"
                />
                <div class="card-body">
                  <h5 class="card-title">Jelly Bean In Bag 50g</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 0.35</p>
                    <p class="text-secondary">MOQ: 100</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
              <div class="card">
                <img
                  class="card-img-top"
                  src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1661339785_08242022111625product.jpg"
                  alt="Plastics Bags"
                />
                <div class="card-body">
                  <h5 class="card-title">Plastics Bags</h5>
                  <div class="d-flex justify-content-between">
                    <p class="price text-danger">From:$ 1.00</p>
                    <p class="text-secondary">MOQ: 120</p>
                  </div>
                  <div class="cardbtnsection">
                    <a href="#" class="btn cardbtn">See Products</a>
                  </div>
                </div>
              </div>
            </div>
            <a
              class="carousel-control-prev"
              href="#carouselExampleControls"
              role="button"
              data-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Previous</span>
            </a>
            <a
              class="carousel-control-next"
              href="#carouselExampleControls"
              role="button"
              data-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="cardbtnsection">
            <a href="#" class="btn cardbtn cardbutton">View ALL</a>
          </div>
        </div>
      </div>
    </section>

    <!-- delivery section -->
    <section class="serives d-flex justify-content-around">
      <div
        class="express servicecard d-flex align-items-center justify-content-center"
      >
        <figure class="servicefigure d-flex align-items-center">
          <img
            src="https://idirectpromo.24livehost.com/front/img/express.png"
            alt="express service"
          />
          <div>
            <span class="servicetext">Express Services</span>
            <p>24/7 amazing services</p>
          </div>
        </figure>
      </div>
      <div
        class="free servicecard d-flex align-items-center justify-content-center"
      >
        <figure class="servicefigure d-flex align-items-center">
          <img
            src="https://idirectpromo.24livehost.com/front/img/free-delivery.png"
            alt="free delivery"
          />
          <div>
            <span class="servicetext"> Free Delivery</span>
            <p>Free Delivery services</p>
          </div>
        </figure>
      </div>
      <div
        class="guarantee servicecard d-flex align-items-center justify-content-center"
      >
        <figure class="servicefigure d-flex align-items-center">
          <img
            src="https://idirectpromo.24livehost.com/front/img/our-gaurantee.png"
            alt="guarantee serives"
          />
          <div>
            <span class="servicetext">Our Guarantee</span>
            <p>Guarantee services</p>
          </div>
        </figure>
      </div>
      <div
        class="offers servicecard d-flex align-items-center justify-content-center"
      >
        <figure class="servicefigure d-flex align-items-center">
          <img
            src="https://idirectpromo.24livehost.com/front/img/best-price.png"
            alt="best offers"
          />
          <div>
            <span class="servicetext">Best Prices & Offers</span>
            <p>Order $50 or more</p>
          </div>
        </figure>
      </div>
    </section>

    <!-- customer comment section -->
    <section class="commentsection">
      <h2 class="text-center">
        <img
          src="https://idirectpromo.24livehost.com/front/img/quote-icon.png"
          alt="customerlogo"
        />What Our Customer Say
      </h2>

      <!-- carousel -->
      <div class="testimonial-box">
        <div class="container">
          <div class="team-slider owl-carousel">
            <div class="boxwrapper d-flex align-items-center">
              <div class="single-box">
                <div class="info-area">
                  <p>
                    I ordered on Friday evening and on Monday at 12:30 the
                    package was with me. I have never encountered such a fast
                    order processing.
                  </p>
                  <p class="name">Albert Flores</p>
                  <div class="ratestar">
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="boxwrapper d-flex align-items-center">
              <div class="single-box">
                <div class="info-area">
                  <p>
                    I ordered on Friday evening and on Monday at 12:30 the
                    package was with me. I have never encountered such a fast
                    order processing.
                  </p>
                  <p class="name">Albert Flores</p>
                  <div class="ratestar">
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="boxwrapper d-flex align-items-center">
              <div class="single-box">
                <div class="info-area">
                  <p>
                    I ordered on Friday evening and on Monday at 12:30 the
                    package was with me. I have never encountered such a fast
                    order processing.
                  </p>
                  <p class="name">Albert Flores</p>
                  <div class="ratestar">
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="boxwrapper d-flex align-items-center">
              <div class="single-box">
                <div class="info-area">
                  <p>
                    I ordered on Friday evening and on Monday at 12:30 the
                    package was with me. I have never encountered such a fast
                    order processing.
                  </p>
                  <p class="name">Albert Flores</p>
                  <div class="ratestar">
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                  </div>
                </div>
              </div>
            </div>
            <div class="boxwrapper d-flex align-items-center">
              <div class="single-box">
                <div class="info-area">
                  <p>
                    I ordered on Friday evening and on Monday at 12:30 the
                    package was with me. I have never encountered such a fast
                    order processing.
                  </p>
                  <p class="name">Albert Flores</p>
                  <div class="ratestar">
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                    <img
                      src="https://idirectpromo.24livehost.com/front/img/star.png"
                      alt="rate"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- we love section -->
    <section class="welove">
      <h2 class="text-center">
        We
        <span
          ><img
            src="	https://idirectpromo.24livehost.com/front/img/heart.png"
            alt="heartlogo"
        /></span>
        <img
          src="	https://idirectpromo.24livehost.com/front/img/logo2.png"
          alt="logo"
        />
      </h2>

      <!-- grid -->
      <div class="welovecontainer">
        <div class="row">
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/frontend/images/missingImage.png"
                alt="empty"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1663067563_09132022111243_category_.jpg"
                alt="product1"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471441_09062022133721_category_.jpg"
                alt="product2"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471803_09062022134323_category_.jpg"
                alt="product3"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471838_09062022134358_category_.jpg"
                alt="prodcut4"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471609_09062022134009_category_.jpg"
                alt="product5"
            /></a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471586_09062022133946_category_.jpg"
                alt="product6"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471566_09062022133926_category_.jpg"
                alt="product7"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471541_09062022133901_category_.jpg"
                alt="product8"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471512_09062022133832_category_.jpg"
                alt="product9"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471493_09062022133813_category_.jpg"
                alt="prodcut10"
            /></a>
          </div>
          <div class="col-sm-6 col-md-2">
            <a href="#"
              ><img
                src="https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/category_images/1662471455_09062022133735_category_.jpg"
                alt="product11"
            /></a>
          </div>
        </div>
      </div>
      <!-- view all button -->
      <div class="cardbtnsection">
        <a href="#" class="btn cardbtn cardbutton">View ALL</a>
      </div>
    </section>

    <!-- find your answers section -->
    <section class="answer">
      <h2 class="text-center text-primary">Find Your Answers</h2>

      <!-- accordian -->
      <div id="accordion" class="row">
        <div class="card accordiancard col-6">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <a
                class="btn btn-link"
                data-toggle="collapse"
                data-target="#collapseOne"
                aria-controls="collapseOne"
              >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit magna
                aliqua
              </a>
            </h5>
          </div>

          <div
            id="collapseOne"
            class="collapse show"
            aria-labelledby="headingOne"
            data-parent="#accordion"
          >
            <div class="card-body">
              FXCOPIER is the worlds most reliable remote trade copier. Its
              allow you to copy trades almost instantly between hundreds of MT4
              accounts through the use of technology. Many of the industries
              leading money managers use FXCopier to easily manage multiple
              client accounts in tandem.
            </div>
          </div>
        </div>
        <div class="card accordiancard">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <a
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseTwo"
                aria-controls="collapseTwo"
              >
                WWW ipsum dolor sit amet, consectetur adipiscing elit magna
                aliqua
              </a>
            </h5>
          </div>
          <div
            id="collapseTwo"
            class="collapse"
            aria-labelledby="headingTwo"
            data-parent="#accordion"
          >
            <div class="card-body">
              FXCOPIER is the worlds most reliable remote trade copier. Its
              allow you to copy trades almost instantly between hundreds of MT4
              accounts through the use of technology. Many of the industries
              leading money managers use FXCopier to easily manage multiple
              client accounts in tandem.
            </div>
          </div>
        </div>
        <div class="card accordiancard col-6">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <a
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseThree"
                aria-controls="collapseThree"
              >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit magna
                aliqua
              </a>
            </h5>
          </div>
          <div
            id="collapseThree"
            class="collapse"
            aria-labelledby="headingThree"
            data-parent="#accordion"
          >
            <div class="card-body">
              FXCOPIER is the worlds most reliable remote trade copier. Its
              allow you to copy trades almost instantly between hundreds of MT4
              accounts through the use of technology. Many of the industries
              leading money managers use FXCopier to easily manage multiple
              client accounts in tandem.
            </div>
          </div>
        </div>
        <div class="card accordiancard">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <a
                class="btn btn-link collapsed"
                data-toggle="collapse"
                data-target="#collapseFour"
                aria-controls="collapseThree"
              >
                Lorem ipsum dolor sit amet, consectetur adipiscing elit magna
                aliqua
              </a>
            </h5>
          </div>
          <div
            id="collapseFour"
            class="collapse"
            aria-labelledby="headingFour"
            data-parent="#accordion"
          >
            <div class="card-body">
              FXCOPIER is the worlds most reliable remote trade copier. Its
              allow you to copy trades almost instantly between hundreds of MT4
              accounts through the use of technology. Many of the industries
              leading money managers use FXCopier to easily manage multiple
              client accounts in tandem.
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php 
    include_once("footer.inc");
    ?>
    <div class="copyright d-flex justify-content-center">
      <div class="copyrightlink">
        <span>Copyright &#169 2022</span>
        <a href="#">Privacy Policy</a>
        <span>|</span>
        <a href="#">Terms & Conditions</a>
      </div>
    </div>
    <script>
      // comment section
      $(".team-slider").owlCarousel({
        loop: true,
        nav: false,
        // autoplay: true,
        // autoplayTimeout: 5000,
        smartSpeed: 450,
        margin: 20,
        responsive: {
          0: {
            items: 1,
          },
          768: {
            items: 2,
          },
          991: {
            items: 3,
          },
          1200: {
            items: 3,
          },
          1920: {
            items: 3,
          },
        },
      });
    </script>
  </body>
</html>


