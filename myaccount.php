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
<div class="inner-wrapper py-0">
  <div class="container-xl">
    <div class="row no-gutters">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">My Account</a></li>
            <!-- <li class="breadcrumb-item active" aria-current="page">Onion</li> -->
          </ol>
        </nav>
      </div>
    </div>

    <div class="account-head-wrap">
      <div class="row no-gutters d-flex align-items-center w-100">
        <div class="col-12 col-lg-4">
          <div class="account-heading">
            <h5 class="account-title">My Account</h5>

            <div class="account-navs-wrap">
              <button class="btn btn-primary btn-logout"><span class="gs-icon material-icons-outlined">logout</span></button>
              <a class="btn btn-outline-dark btn-accountnav" data-toggle="collapse" href="#collapseAccountNav" aria-expanded="false" aria-controls="collapseAccountNav">
               <span class="material-icons-outlined">more_vert</span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-8">
          <div class="collapseAccountNav collapse " id="collapseAccountNav">
            <nav class="nav nav-pills justify-content-end account-nav animated slideInUp" id="account-tabNav">
                <a class="nav-link active" id="" data-toggle="tab" href="#myinformation" aria-selected="true">My Information</a>
                <a class="nav-link " id="" data-toggle="tab" href="#saveditems" aria-selected="true">Your Saved Items</a>
                <a class="nav-link" id="" data-toggle="tab" href="#yourorder" aria-selected="false">Your Order</a>
                <a class="nav-link" id="" data-toggle="tab" href="#youraddress" aria-selected="false">Your Address</a>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

<section class="account-section">
  <div class="container-xl">
      <div class="row">
        <div class="col-12">
          <div class="tab-content" id="account-tabContent">
            <div class="tab-pane fade show active" id="myinformation" role="tabpanel">
              <div class="container px-0">
                <h3 class="account-tabHeading">My Information</h3>
                <div class="row">
                  <div class="col-12 col-lg-4">
                    <div class="card account-information-card">
                      <div class="card-body">
                        <div class="profile-pic">
                          <a href="#" class="profile-pic-overlay">
                            <span class="gs-icon material-icons-outlined">insert_photo</span>
                          </a>
                          <img src="https://www.biography.com/.image/t_share/MTE4MDAzNDEwNzQzMTY2NDc4/will-smith-9542165-1-402.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="profile-data">
                          <h4 class="name">Will Smith</h4>
                          <h4 class="mobile">+91 9819992152</h4>
                          <h4 class="email">willsmith@domain.com</h4>
                        </div>
                      </div>
                    </div>
                    <div class="deactivate_account">
                      <a href="#" class="deactivate_account-link btn">
                        Deactivate Account
                        <span class="material-icons-outlined">chevron_right</span>
                      </a>
                    </div>
                  </div>  
                  <div class="col-12 col-lg-8">
                    <h6 class="text-uppercase mt-2 mb-4">Change Password</h6>
                    <form action="">
                      <div class="form-group">
                        <label for="">Old Password</label>
                        <input type="password" class="form-control" id="" value="xxxxxxxx">
                      </div>
                      <div class="form-group">
                        <label for="">New Password</label>
                        <input type="password" class="form-control" id="" value="xxxxxxxx">
                      </div>
                      <div class="form-group">
                        <label for="">Confirm New Password</label>
                        <input type="password" class="form-control" id="" value="xxxxxxxx">
                      </div>
                      <div class="fomr-group text-right">
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                      </div>
                    </form>
                  </div>  
                </div>
              </div>
            </div>
            <div class="tab-pane fade " id="saveditems" role="tabpanel">
              <div class="container px-0">
                <h3 class="account-tabHeading">Saved Items</h3>
                <div class="row no-gutters">
                  <div class="col-12">
                    <table class="table table-bordered saved-items-table mobile_responsive-table">
                      <thead class="thead-light">
                        <tr>
                          <th>Product</th>
                          <th>Price</th>
                          <th>Stock Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="product-td" data-title="Product">
                            <div class="product-td-inner">
                              <div class="product-image">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="">
                              </div>
                              <div class="product-details">
                                <h4 class="product-name">Banana</h4>
                                <p class="product-qty">12pcs</p>
                              </div>
                            </div>
                          </td>
                          <td data-title="Price">
                            <h5 class="price">₹250</h5>
                          </td>
                          <td data-title="Stock Status">
                            <span class="product_instock">In Stock</span>
                          </td>
                          <td data-title="Actions" class="action-td" >
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Add to Cart</button>
                              <button class="btn btn-outline-primary">
                                <span class="material-icons-outlined">delete</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="product-td" data-title="Product">
                            <div class="product-td-inner">
                              <div class="product-image">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="">
                              </div>
                              <div class="product-details">
                                <h4 class="product-name">Banana</h4>
                                <p class="product-qty">12pcs</p>
                              </div>
                            </div>
                          </td>
                          <td data-title="Price">
                            <h5 class="price">₹250</h5>
                          </td>
                          <td data-title="Stock Status">
                            <span class="product_instock">In Stock</span>
                          </td>
                          <td data-title="Actions" class="action-td" >
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Add to Cart</button>
                              <button class="btn btn-outline-primary">
                                <span class="material-icons-outlined">delete</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="product-td" data-title="Product">
                            <div class="product-td-inner">
                              <div class="product-image">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="">
                              </div>
                              <div class="product-details">
                                <h4 class="product-name">Banana</h4>
                                <p class="product-qty">12pcs</p>
                              </div>
                            </div>
                          </td>
                          <td data-title="Price">
                            <h5 class="price">₹250</h5>
                          </td>
                          <td data-title="Stock Status">
                            <span class="product_instock">In Stock</span>
                          </td>
                          <td data-title="Actions" class="action-td" >
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Add to Cart</button>
                              <button class="btn btn-outline-primary">
                                <span class="material-icons-outlined">delete</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="product-td" data-title="Product">
                            <div class="product-td-inner">
                              <div class="product-image">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="">
                              </div>
                              <div class="product-details">
                                <h4 class="product-name">Banana</h4>
                                <p class="product-qty">12pcs</p>
                              </div>
                            </div>
                          </td>
                          <td data-title="Price">
                            <h5 class="price">₹250</h5>
                          </td>
                          <td data-title="Stock Status">
                            <span class="product_ofstock">Out of stock</span>
                          </td>
                          <td data-title="Actions" class="action-td" >
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Add to Cart</button>
                              <button class="btn btn-outline-primary">
                                <span class="material-icons-outlined">delete</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td class="product-td" data-title="Product">
                            <div class="product-td-inner">
                              <div class="product-image">
                                <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="">
                              </div>
                              <div class="product-details">
                                <h4 class="product-name">Banana</h4>
                                <p class="product-qty">12pcs</p>
                              </div>
                            </div>
                          </td>
                          <td data-title="Price">
                            <h5 class="price">₹250</h5>
                          </td>
                          <td data-title="Stock Status">
                            <span class="product_ofstock">Out of stock</span>
                          </td>
                          <td data-title="Actions" class="action-td" >
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Add to Cart</button>
                              <button class="btn btn-outline-primary">
                                <span class="material-icons-outlined">delete</span>
                              </button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="yourorder" role="tabpanel">
              <div class="container px-0">
                <h3 class="account-tabHeading">Your Order</h3>
                <div class="row">
                  <div class="col-12">
                    <table class="table table-bordered order-history-table mobile_responsive-table">
                      <thead class="thead-light">
                        <tr>
                          <th>Order ID</th>
                          <th>Date</th>
                          <th>Total</th>
                          <th>Status</th>
                          <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td data-title="Order ID">
                            <span class="order-id">#ORD121345456</span>
                          </td>
                          <td data-title="Date">
                            <h5 class="date">Aug 12, 2020</h5>
                          </td>
                          <td data-title="Total">
                            <h5 class="total">₹250</h5>
                          </td>
                          <td data-title="Status">
                            <span class="status_inprocess">In Process</span>
                          </td>
                          <td data-title="Actions" class="action-td">
                            <div class="action-td-inner">
                              <button class="btn btn-primary">Cancel Order</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-title="Order ID">
                            <span class="order-id">#ORD121345456</span>
                          </td>
                          <td data-title="Date">
                            <h5 class="date">Aug 12, 2020</h5>
                          </td>
                          <td data-title="Total">
                            <h5 class="total">₹250</h5>
                          </td>
                          <td data-title="Status">
                            <span class="status_delivered">Delivered</span>
                          </td>
                          <td data-title="Actions" class="action-td">
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Re-Order</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-title="Order ID">
                            <span class="order-id">#ORD121345456</span>
                          </td>
                          <td data-title="Date">
                            <h5 class="date">Aug 12, 2020</h5>
                          </td>
                          <td data-title="Total">
                            <h5 class="total">₹250</h5>
                          </td>
                          <td data-title="Status">
                            <span class="status_failed">Failed</span>
                          </td>
                          <td data-title="Actions" class="action-td">
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Re-Order</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-title="Order ID">
                            <span class="order-id">#ORD121345456</span>
                          </td>
                          <td data-title="Date">
                            <h5 class="date">Aug 12, 2020</h5>
                          </td>
                          <td data-title="Total">
                            <h5 class="total">₹250</h5>
                          </td>
                          <td data-title="Status">
                            <span class="status_delivered">Delivered</span>
                          </td>
                          <td data-title="Actions" class="action-td">
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Re-Order</button>
                            </div>
                          </td>
                        </tr>
                        <tr>
                          <td data-title="Order ID">
                            <span class="order-id">#ORD121345456</span>
                          </td>
                          <td data-title="Date">
                            <h5 class="date">Aug 12, 2020</h5>
                          </td>
                          <td data-title="Total">
                            <h5 class="total">₹250</h5>
                          </td>
                          <td data-title="Status">
                            <span class="status_failed">Failed</span>
                          </td>
                          <td data-title="Actions" class="action-td">
                            <div class="action-td-inner">
                              <button class="btn btn-lightsecondary">Re-Order</button>
                            </div>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="youraddress" role="tabpanel">
              <div class="container px-0">
                <h3 class="account-tabHeading">Your Address</h3>
                <div class="row">
                  <div class="col-12">
                    <div class="add-address">
                      <a href="#addAddressModal" class="btn add-address-link" data-toggle="modal">
                        <span class="gs-icon material-icons-outlined">add</span>
                        Add New Address
                      </a>
                    </div>
                    <ul class="list-unstyled list-group address-list-group">
                      <li class="media list-group-item">
                        <div class="icon-wrap">
                          <span class="gs-icon material-icons-outlined">place</span>
                        </div>
                        <div class="media-body list-group-inner">
                          <h5 class="address-tag">Home</h5>
                          <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                          <div class="address-list-action">
                            <a href="" class="btn btn-dark btn-sm px-3">Edit</a>
                            <a href="" class="btn btn-outline-primary btn-sm px-3">Delete</a>
                          </div>
                        </div>
                      </li>
                      <li class="media list-group-item">
                        <div class="icon-wrap">
                          <span class="gs-icon material-icons-outlined">place</span>
                        </div>
                        <div class="media-body list-group-inner">
                          <h5 class="address-tag">Office</h5>
                          <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                          <div class="address-list-action">
                            <a href="" class="btn btn-dark btn-sm px-3">Edit</a>
                            <a href="" class="btn btn-outline-primary btn-sm px-3">Delete</a>
                          </div>
                        </div>
                      </li>
                      <li class="media list-group-item">
                        <div class="icon-wrap">
                          <span class="gs-icon material-icons-outlined">place</span>
                        </div>
                        <div class="media-body list-group-inner">
                          <h5 class="address-tag">Lorem Ipsum</h5>
                          <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                          <div class="address-list-action">
                            <a href="" class="btn btn-dark btn-sm px-3">Edit</a>
                            <a href="" class="btn btn-outline-primary btn-sm px-3">Delete</a>
                          </div>
                        </div>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
</section>
<!-- <section class="section-todaysoffers home-sections">
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
</section> -->
<!-- 
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
  </section> -->

</div>
<!-- main -->


<!-- footer -->
<?php include 'footer.php';?>
<!-- footer -->


<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addAddressModalLabel">Add New Address</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <div class="btn-group btn-group-tags btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-outline-dark btn-sm active">
                  <input type="radio" name="tags" id="taghome" value="home" checked>Home
                </label>
                <label class="btn btn-outline-dark btn-sm">
                  <input type="radio" name="tags" id="tagoffice" value="office">Office
                </label>
                <label class="btn btn-outline-dark btn-sm">
                  <input type="radio" name="tags" id="tagothers" value="others">Others
                </label>
                  <div id="collapseothers" style="display: none;">
                    <div class="form-group mb-0">
                      <input id="" name="" type="text" placeholder="Enter Tags" class="form-control form-control-sm rounded-0">
                    </div>
                  </div>  
              </div>
            </div>
           
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label class="control-label">Flat / House / Office No.</label>
              <input id="" name="" type="text" placeholder="Flat / House / Office No." class="form-control input-md" required="">
            </div>
            
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="form-group">
              <label class="control-label">Address Line</label>
              <input id="" name="" type="text" placeholder="Address Line" class="form-control input-md">
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="form-group">
              <label class="control-label">Pincode</label>
              <input id="pincode" name="pincode" type="text" placeholder="Pincode" class="form-control input-md" required="">
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="form-group">
              <label class="control-label">City</label>
              <input id="" name="" type="text" placeholder="City" class="form-control input-md" required="">
            </div>
          </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-secondary">Save changes</button>
      </div>
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