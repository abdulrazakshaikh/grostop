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
            <li class="breadcrumb-item active"><a href="#">Vegetables</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Onion</li> -->
          </ol>
        </nav>
        
      </div>
    </div>

    <div class="sort-wrap">
      <div class="row no-gutters d-flex align-items-center">
        <div class="col-12 col-lg-6 order-1 order-lg-0">
          <h6 class="m-0 show-result-text">Showing Products 1 - 12 Of 65 Results</h6>
        </div>
        <div class="col-12 col-lg-6 order-0 order-lg-1">
            <div class="sort-filter-wrap">
              <div class="sort-by">
                <div class="form-group mb-0">
                  <select class="custom-select form-control" id="inputGroupSelect02">
                    <option selected value="1">Popularity</option>
                    <option value="2">Featured</option>
                    <option value="3">Best Selling</option>
                    <option value="4">Price - Low to High</option>
                    <option value="5">Price - High to Low</option>
                  </select>
                </div>
              </div>
              <!-- <div class="sort-layout">
                  <div class="btn-group btn-group-toggle" data-toggle="buttons">
                    <label class="btn btn-outline-dark">
                      <input type="radio" name="options" id="option1" checked="">
                      <span class="material-icons-outlined">apps</span>
                    </label>
                    <label class="btn btn-outline-dark">
                      <input type="radio" name="options" id="option2"> 
                      <span class="material-icons-outlined">format_list_bulleted</span>
                    </label>
                  </div>
                  <button class="btn btn-outline-dark filterbutton" type="button" data-toggle="filterMenu">
                      <span class="material-icons-outlined">filter_alt</span>
                  </button>
              </div> -->
            </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="filtersidebar" id="filterMenu">
        <div class="navbar-header d-lg-none d-flex">
          <h6 class="m-0 text-uppercase">Filter</h6>
          <button class="btn btn-link text-decoration-none text-white d-flex align-items-center justify-content-center" type="button" data-toggle="filterMenu">
            <span class="material-icons-outlined">close</span>
          </button>
        </div>
        <div class="filtersidebar-inner">

          <div class="card filter-group-card">
            <div class="card-header">
              Category
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkone1">
                  <label class="custom-control-label" for="Checkone1">Vegetables (6)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkone2">
                  <label class="custom-control-label" for="Checkone2">Fruits (12)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkone3">
                  <label class="custom-control-label" for="Checkone3">Salad (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkone4">
                  <label class="custom-control-label" for="Checkone4">Peeled Fruits (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkone5">
                  <label class="custom-control-label" for="Checkone5">Sprouts (4)</label>
                </div>
              </li>
            </ul>
          </div>

          <div class="card filter-group-card">
            <div class="card-header">
              Price
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checktwo1">
                  <label class="custom-control-label" for="Checktwo1">Less than ₹20 (6)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checktwo2">
                  <label class="custom-control-label" for="Checktwo2">₹21 to ₹50 (12)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checktwo3">
                  <label class="custom-control-label" for="Checktwo3">₹51 to ₹100 (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checktwo4">
                  <label class="custom-control-label" for="Checktwo4">₹101 to ₹500 (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checktwo5">
                  <label class="custom-control-label" for="Checktwo5">₹501 to ₹1000 (4)</label>
                </div>
              </li>
            </ul>
          </div>

          <div class="card filter-group-card">
            <div class="card-header">
              Discount
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkthree1">
                  <label class="custom-control-label" for="Checkthree1">1% to 5% (6)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkthree2">
                  <label class="custom-control-label" for="Checkthree2">5% to 10% (12)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkthree3">
                  <label class="custom-control-label" for="Checkthree3">10% to 25% (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkthree4">
                  <label class="custom-control-label" for="Checkthree4">25% to 50% (4)</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkthree5">
                  <label class="custom-control-label" for="Checkthree5">50% to 75% (4)</label>
                </div>
              </li>
            </ul>
          </div>

          <div class="card filter-group-card">
            <div class="card-header">
              Pack Size
            </div>
            <div class="searchbar">
              <form>
                <span class="gs-icon material-icons">search</span>
                <input class="form-control form-control" type="text" placeholder="Search by pack size">
              </form>  
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkfour1">
                  <label class="custom-control-label" for="Checkfour1">1pc</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkfour2">
                  <label class="custom-control-label" for="Checkfour2">10 pcs</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkfour3">
                  <label class="custom-control-label" for="Checkfour3">50gm</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkfour4">
                  <label class="custom-control-label" for="Checkfour4">100gm</label>
                </div>
              </li>
              <li class="list-group-item">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="Checkfour5">
                  <label class="custom-control-label" for="Checkfour5">1kg</label>
                </div>
              </li>
              <li class="list-group-item">
                <a href="" class="btn btn-dark btn-sm">+ 27 more</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
      <div class="col filtercontent">
        <div class="row">
          <div class="col-12">
            <ul class="filterchip-list">
              <li class="filterchip-list-item">
                <a href="#" class="badge filterchip">
                  <span class="filterchip-text">Vegetables</span>
                  <span class="remove"><span aria-hidden="true">&times;</span></span>
                </a>
              </li>
              <li class="filterchip-list-item">
                <a href="#" class="badge filterchip">
                  <span class="filterchip-text">₹51 to ₹100</span>
                  <span class="remove"><span aria-hidden="true">&times;</span></span>
                </a>
              </li>
              <li class="filterchip-list-item">
                <a href="#" class="badge filterchip">
                  <span class="filterchip-text">₹101 to ₹500</span>
                  <span class="remove"><span aria-hidden="true">&times;</span></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
            <a href="product-details.php" class="card product-card">
              <div class="card-header py-0">
                <div class="product-offer red">Get Offer 15%</div>
              </div>
              <div class="img-wrap">
                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
              </div>
              <div class="card-body">
                <h5 class="product-category">Fruits</h5>
                <h5 class="product-name">Banana</h5>
                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                  <label class="btn btn-sm btn-outline-dark active">
                    <input type="radio" name="options" id="option1" checked=""> 2pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option2"> 5pcs
                  </label>
                  <label class="btn btn-sm btn-outline-dark">
                    <input type="radio" name="options" id="option3"> 12pcs
                  </label>
                </div>
              </div>
              <div class="card-footer">
                <h6 class="product-price">
                  <p class="cross-price">₹ 150</p>
                  <span>₹ 125</span>
                </h6>
                <button class="btn btn-sm btn-lightsecondary">Add</button>
              </div>
              <div class="card-action">
                <button class="btn btn-secondary">Shop</button>
              </div>
            </a>
          </div>

        </div>
        <div class="row">
          <div class="col-12 text-center">
            <button class="btn btn-primary">Show More</button>
          </div>
        </div>
      </div>
    </div>



  </div>

<section class="section-todaysoffers home-sections">
  <div class="container-xl">
    <div class="section-heading">
      <h5 class="section-title">Today's Offers</h5>
      <a href="" class="btn btn-seeall">See All</a>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
          <a href="product-details.php" class="card product-card">
            <div class="card-header py-0">
              <div class="product-offer red">Get Offer 15%</div>
            </div>
            <div class="img-wrap">
              <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
            </div>
            <div class="card-body">
              <h5 class="product-category">Fruits</h5>
              <h5 class="product-name">Banana</h5>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark active">
                  <input type="radio" name="options" id="option1" checked=""> 2pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option2"> 5pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option3"> 12pcs
                </label>
              </div>
            </div>
            <div class="card-footer">
              <h6 class="product-price">
                <p class="cross-price">₹ 150</p>
                <span>₹ 125</span>
              </h6>
              <button class="btn btn-sm btn-lightsecondary">Add</button>
            </div>
            <div class="card-action">
              <button class="btn btn-secondary">Shop</button>
            </div>
          </a>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
          <a href="product-details.php" class="card product-card">
            <div class="card-header py-0">
              <div class="product-offer green">Get Offer 15%</div>
            </div>
            <div class="img-wrap">
              <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
            </div>
            <div class="card-body">
              <h5 class="product-category">Fruits</h5>
              <h5 class="product-name">Banana</h5>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark active">
                  <input type="radio" name="options" id="option1" checked=""> 2pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option2"> 5pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option3"> 12pcs
                </label>
              </div>
            </div>
            <div class="card-footer">
              <h6 class="product-price">₹ 125</h6>
              <button class="btn btn-sm btn-lightsecondary">Add</button>
            </div>
            <div class="card-action">
              <button class="btn btn-secondary">Shop</button>
            </div>
          </a>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
          <a href="product-details.php" class="card product-card">
            <div class="card-header py-0">
              <div class="product-offer green">Get Offer 15%</div>
            </div>
            <div class="img-wrap">
              <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
            </div>
            <div class="card-body">
              <h5 class="product-category">Fruits</h5>
              <h5 class="product-name">Banana</h5>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark active">
                  <input type="radio" name="options" id="option1" checked=""> 2pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option2"> 5pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option3"> 12pcs
                </label>
              </div>
            </div>
            <div class="card-footer">
              <h6 class="product-price">₹ 125</h6>
              <button class="btn btn-sm btn-lightsecondary">Add</button>
            </div>
            <div class="card-action">
              <button class="btn btn-secondary">Shop</button>
            </div>
          </a>
        </div>
        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 col-12">
          <a href="product-details.php" class="card product-card">
            <div class="card-header py-0">
              <div class="product-offer green">Get Offer 15%</div>
            </div>
            <div class="img-wrap">
              <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
            </div>
            <div class="card-body">
              <h5 class="product-category">Fruits</h5>
              <h5 class="product-name">Banana</h5>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-sm btn-outline-dark active">
                  <input type="radio" name="options" id="option1" checked=""> 2pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option2"> 5pcs
                </label>
                <label class="btn btn-sm btn-outline-dark">
                  <input type="radio" name="options" id="option3"> 12pcs
                </label>
              </div>
            </div>
            <div class="card-footer">
              <h6 class="product-price">₹ 125</h6>
              <button class="btn btn-sm btn-lightsecondary">Add</button>
            </div>
            <div class="card-action">
              <button class="btn btn-secondary">Shop</button>
            </div>
          </a>
        </div>
        <div class="col-xl-4 col-lg-6 col-md-8 col-sm-12 col-12 d-flex">
          <div class="card homeoffer-card-two">
            <div class="offer-img" style="background-image: url('img/banners/banner2.png');"></div>
            <div class="card-img-overlay">
              <h5 class="title">Buy <strong>Fresh</strong> <br> fruits and vegetables at the <strong>best</strong> prices
              </h5>
              <a href="" class="btn btn-lg btn-lightsecondary">SHOP NOW</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-extras1 home-sections py-3">
  <div class="container-xl">
    <div class="section-content">
      <img src="img/banners/banner3.png" alt="" class="img-fluid">
    </div>
  </div>
</section>

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

<div class="modal fade" id="LoginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <div class="modal-logo">
                <img src="img/grostop_logo.png" class="img-fluid" alt="">
              </div>  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="login-data"></div>
        </div>
    </div>
</div>

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