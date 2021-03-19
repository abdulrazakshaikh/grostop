<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="icon" href="img/icon.png" type="img/png" sizes="48x48">


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/mystyle.css">


<!-- https://fonts.google.com/icons -->
<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" 
rel="stylesheet">

<title>Grostop</title>
</head>
<body>

<!-- header -->
<?php include 'header.php';?>
<!-- header -->


<!-- main -->
<div class="inner-wrapper pt-0">
  <div class="container-xl">
    <div class="row no-gutters">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Vegetables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Onion</li>
          </ol>
        </nav>
        
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-lg-4">
          <div id="thumbnailCarousel" class="carousel thumbnailCarousel slide"  align="center">
            <!-- slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="product-img">
                    <img src="https://5.imimg.com/data5/LL/WG/MY-24751011/pink-onion-500x500.jpg" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="product-img">
                    <img src="https://www.bigbasket.com/media/uploads/p/l/10000148_29-fresho-onion.jpg" alt=""> 
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="product-img">
                    <img src="https://www.bigbasket.com/media/uploads/p/l/10000148-2_1-fresho-onion.jpg" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="product-img">
                    <img src="https://www.bigbasket.com/media/uploads/p/l/10000148-3_1-fresho-onion.jpg" alt="">
                  </div>
                </div>
            </div> 

            <!-- Thumbnails -->
            <ol class="carousel-indicators list-inline">
                <li class="list-inline-item active"> 
                  <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#thumbnailCarousel">
                    <div class="thumb-img">
                      <img src="https://5.imimg.com/data5/LL/WG/MY-24751011/pink-onion-500x500.jpg" class="img-fluid">
                    </div>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-1" data-slide-to="1" data-target="#thumbnailCarousel">
                    <div class="thumb-img">
                      <img src="https://www.bigbasket.com/media/uploads/p/l/10000148_29-fresho-onion.jpg" class="img-fluid"> 
                    </div>
                  </a> 
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-2" data-slide-to="2" data-target="#thumbnailCarousel">
                    <div class="thumb-img">
                      <img src="https://www.bigbasket.com/media/uploads/p/l/10000148-2_1-fresho-onion.jpg" class="img-fluid"> 
                    </div>
                  </a> 
                </li>
                <li class="list-inline-item">
                  <a id="carousel-selector-2" data-slide-to="3" data-target="#thumbnailCarousel">
                    <div class="thumb-img">
                      <img src="https://www.bigbasket.com/media/uploads/p/l/10000148-3_1-fresho-onion.jpg" class="img-fluid"> 
                    </div>
                  </a> 
                </li>
            </ol>
          </div>
      </div>
      <div class="col-12 col-lg-8">
        <div class="product-details">
          <div class="row">
            <div class="col-12 col-lg-10 col-xl-8">
              <h4 class="product-name">Big Onion (Kanda)</h4>
              <div class="product-review">
                <ul class="product-review-list">
                  <li class="product-review-item"><span class="material-icons-outlined">star</span></li>
                  <li class="product-review-item"><span class="material-icons-outlined">star</span></li>
                  <li class="product-review-item"><span class="material-icons-outlined">star</span></li>
                  <li class="product-review-item"><span class="material-icons-outlined">star</span></li>
                  <li class="product-review-item"><span class="material-icons-outlined">star_outline</span></li>
                </ul>
                <h6 class="productreview-count">231 Reviews</h6>
              </div>

              <div class="quantity-selector">
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked> 500gm
                  </label>
                  <label class="btn btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 1Kg
                  </label>
                  <label class="btn btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 5Kg
                  </label>
                </div>
              </div>

              <div class="product-price-wrap">
                <div class="product-price">₹45.00 
                  <del>$60.00</del>
                </div>
                <div class="product-price-save">
                  <span>You Save 20%</span>
                  <span class="text-success">(Inclusive of all Taxes)</span>
                </div>
              </div>

              <div class="product-quantity-wrap">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <button class="btn btn-sm btn-outline-dark" type="button" id="decrease" onclick="decreaseValue()">
                      <span class="material-icons-outlined">remove</span>
                    </button>
                  </div>
                  <input type="number" class="form-control" id="number" placeholder="" value="1">
                  <div class="input-group-append">
                    <button class="btn btn-sm btn-outline-dark" type="button" id="increase" onclick="increaseValue()">
                      <span class="material-icons-outlined">add</span>
                    </button>
                  </div>
                </div>
              </div>

              <div class="product-action-wrap">
                <button class="btn btn-lightsecondary btn-lg"><span class="material-icons-outlined">add</span> Add to Basket</button>
                <button class="btn btn-lightsecondary btn-lg"><span class="material-icons-outlined">favorite</span> Save</button>
              </div>

              <div class="product-delivery-options">
                <h6 class="text-uppercase">Delivery Options</h6>

                <div class="input-group delivery-options-input">
                  <input type="text" class="form-control" placeholder="enter a pincode">
                  <div class="input-group-append">
                    <button class="btn btn-link" type="button" id="">Check</button>
                  </div>
                </div>
                <p class="text-muted">please enter a pincode to check delivery time & pay on delivery availablity</p>
              </div>
              
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    <div class="row">
      <div class="col-12">
        <div class="product-description-wrap py-4">
          <h4 class="text-uppercase mb-3">Product Details</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum accusantium modi nihil error quasi distinctio, dolore debitis, odio, ipsa numquam sequi consequuntur dolores et deserunt doloremque sunt vero laborum fugiat.</p>
          <article class="mb-3">
            <h6 class="text-capitalize">About the Product</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum accusantium modi nihil error quasi distinctio, dolore debitis, odio, ipsa numquam sequi consequuntur dolores et deserunt doloremque sunt vero laborum fugiat.</p>
          </article>
          <article class="mb-3">
            <h6 class="text-capitalize">Nutritional Facts</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum accusantium modi nihil error quasi distinctio, dolore debitis, odio, ipsa numquam sequi consequuntur dolores et deserunt doloremque sunt vero laborum fugiat.</p>
          </article>
          <article class="mb-3">
            <h6 class="text-capitalize">Benefits</h6>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ipsum accusantium modi nihil error quasi distinctio, dolore debitis, odio, ipsa numquam sequi consequuntur dolores et deserunt doloremque sunt vero laborum fugiat.</p>
          </article>
        </div>
      </div>
    </div>
  </div>
  <section class="section-weeklybasket pt-5 pb-3 border-top">
    <div class="container-xl">
      <div class="section-heading justify-content-center">
        <h5 class="section-title text-center">Our Weekly Basket</h5>
      </div>
      <div class="section-content">
        <div class="row">
          <div class="col-12 col-md-6 col-xl-3">
            <div class="card basket-card red-basket-card">
              <div class="card-header">
                <div class="basketicon"><img src="img/fruits-icon.png" alt="basketicon" class="img-fluid"></div>
                <h5 class="title">Weekly</h5>
                <h5 class="subtitle">Fruit Basket</h5>
                <p class="head-text">(Premium)</p>
              </div>
              <div class="card-body">
                <ul class="list-group basket-item-list list-group-flush">
                  <li class="list-group-item">
                    <h6 class="m-0 item-name">Water Melon</h6>
                    <h6 class="m-0 item-qty">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Orange</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Apple</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Banana</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Papaya</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                </ul>
                <h5 class="cross-price">₹ 850.00</h5>
              </div>
              <div class="card-footer">
                <h5 class="price">₹ 700.00</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="card basket-card blue-basket-card">
              <div class="card-header">
                <div class="basketicon"><img src="img/milk-icon.png" alt="basketicon" class="img-fluid"></div>
                <h5 class="title">Weekly</h5>
                <h5 class="subtitle">Daily Milk Basket</h5>
                <p class="head-text">(Best Deal)</p>
              </div>
              <div class="card-body">
                <ul class="list-group basket-item-list list-group-flush">
                  <li class="list-group-item">
                    <h6 class="m-0 item-name">Water Melon</h6>
                    <h6 class="m-0 item-qty">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Orange</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Apple</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Banana</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Papaya</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                </ul>
                <h5 class="cross-price">₹ 850.00</h5>
              </div>
              <div class="card-footer">
                <h5 class="price">₹ 700.00</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="card basket-card green-basket-card">
              <div class="card-header">
                <div class="basketicon"><img src="img/vegetables-icon.png" alt="basketicon" class="img-fluid"></div>
                <h5 class="title">Weekly</h5>
                <h5 class="subtitle">Vegetables Basket</h5>
                <p class="head-text">(Premium)</p>
              </div>
              <div class="card-body">
                <ul class="list-group basket-item-list list-group-flush">
                  <li class="list-group-item">
                    <h6 class="m-0 item-name">Water Melon</h6>
                    <h6 class="m-0 item-qty">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Orange</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Apple</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Banana</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Papaya</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                </ul>
                <h5 class="cross-price">₹ 850.00</h5>
              </div>
              <div class="card-footer">
                <h5 class="price">₹ 700.00</h5>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-xl-3">
            <div class="card basket-card grey-basket-card">
              <div class="card-header">
                <div class="basketicon"><img src="img/grocery-icon.png" alt="basketicon" class="img-fluid"></div>
                <h5 class="title">Weekly</h5>
                <h5 class="subtitle">Grocery Basket</h5>
                <p class="head-text">(Available Brands)</p>
              </div>
              <div class="card-body">
                <ul class="list-group basket-item-list list-group-flush">
                  <li class="list-group-item">
                    <h6 class="m-0 item-name">Water Melon</h6>
                    <h6 class="m-0 item-qty">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Orange</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Apple</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Banana</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                  <li class="list-group-item">
                    <h6 class="m-0">Papaya</h6>
                    <h6 class="m-0">1pc (500gm)</h6>
                  </li>
                </ul>
                <h5 class="cross-price">₹ 850.00</h5>
              </div>
              <div class="card-footer">
                <h5 class="price">₹ 700.00</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

</div>
<!-- main -->


<!-- footer -->
<?php include 'footer.php';?>
<!-- footer -->


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script>
$(document).ready(function() {
  $("#carouselBanner").owlCarousel({
      navigation : false, // Show next and prev buttons
      responsive: true,
      autoPlay : true,
      slideSpeed : 200,
      pagination: true,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
  });
  $("#carouselTestimonials").owlCarousel({
      navigation : false, // Show next and prev buttons
      responsive: true,
      autoPlay : true,
      slideSpeed : 200,
      pagination: true,
      paginationSpeed : 400,
      items : 1, 
      itemsDesktop : false,
      itemsDesktopSmall : false,
      itemsTablet: false,
      itemsMobile : false,
  });
  
});    
</script>
</body>
</html>