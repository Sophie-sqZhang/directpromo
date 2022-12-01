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

  <?php 
    // sanitise function
    function sanitise_input($data){
      //  remove leading or trailling spaces
      $data = trim($data); 
      //  remove backslashes in front of quotes 
      $data = stripslashes($data); 
      // convert HTML control characters like <to the	HTML code $lt;
      $data = htmlspecialchars($data);  
      return $data;
    }
  // get data from search bar
    $item = sanitise_input($_GET["search"]);
  

    switch($item){
      case 'bag':
      case 'bags':
        echo "
        <div class=\"d-flex justify-content-center\">
        <div class=\"d-flex\">
        <div class=\"card\">
        <img
          class=\"card-img-top\"
          src=\"https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1663068169_09132022112249product.jpg\"
          alt=\"Jelly Bean In Bag 50g\"
        />
        <div class=\"card-body\">
          <h5 class=\"card-title\">Jelly Bean In Bag 50g</h5>
          <div class=\"d-flex justify-content-between\">
            <p class=\"price text-danger\">From:$ 0.35</p>
            <p class=\"text-secondary\">MOQ: 100</p>
          </div>
          <div class=\"cardbtnsection\">
            <a href=\"#\" class=\"btn cardbtn\">See Products</a>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <img
          class=\"card-img-top\"
          src=\"https://idirectpromo.24livehost.com/image/resizeCanvas/300/300/product_images/1661339785_08242022111625product.jpg\"
          alt=\"Plastics Bags\"
        />
        <div class=\"card-body\">
          <h5 class=\"card-title\">Plastics Bags</h5>
          <div class=\"d-flex justify-content-between\">
            <p class=\"price text-danger\">From:$ 1.00</p>
            <p class=\"text-secondary\">MOQ: 120</p>
          </div>
          <div class=\"cardbtnsection\">
            <a href=\"#\" class=\"btn cardbtn\">See Products</a>
          </div>
        </div>
      </div>
      </div>
      </div>";
      default: echo "<div class=\"d-flex justify-content-center\"><p class=\"noproduct\">No Product</p></div>";
    }
  ?>
</body>
</html>