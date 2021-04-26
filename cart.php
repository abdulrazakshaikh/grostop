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
<div class="inner-wrapper py-0"  id="cartWizard">
  <div class="container-xl">
    <div class="row no-gutters">
      <div class="col-12">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active"><a href="#">Shopping Cart</a></li>
          </ol>
        </nav>
      </div>
    </div>

    <div class="account-head-wrap">
      <div class="row no-gutters d-flex align-items-center w-100">
        <div class="col-12">
          <ul class="nav-steps nav-fill">
            <li class="nav-item">
              <a class="nav-link" href="#tab1" data-toggle="tab">
                <span class="stepnum">1</span>
                <span class="steptext">Shopping Cart</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab2" data-toggle="tab">
                <span class="stepnum">2</span>
                <span class="steptext">Delivery Address</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab3" data-toggle="tab">
                <span class="stepnum">3</span>
                <span class="steptext">Checkout</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#tab4" data-toggle="tab">
                <span class="stepnum">4</span>
                <span class="steptext">Payment</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <!-- <div class="row no-gutters d-flex align-items-center w-100">
        <div class="col-12 col-lg-4">
          <div class="account-heading">
            <h5 class="account-title">Shopping Cart</h5>
          </div>
        </div>
        <div class="col-12 col-lg-8 d-flex justify-content-end">
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item">
              <span>1</span>
            </li>
            <li class="list-group-item">
              <span>2</span>
            </li>
            <li class="list-group-item">
              <span>3</span>
            </li>
            <li class="list-group-item">
              <span>4</span>
            </li>
          </ul>
          
        </div>
      </div> -->
    </div>
  </div>

<section class="account-section tab-content">
  <div class="container-xl">
      <div class="row">
       
        <div class="col-12 col-lg-7 col-xl-8">

          <div class="steppper-content tab-content">
            <div class="tab-pane" id="tab1">
              <ul class="list-group cart-list-group">
                <li class="list-group-item d-flex align-items-start">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1"></label>
                  </div>
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <div class="form-group mb-0">
                            <select class="custom-select" id="">
                              <option value="1">1 pc</option>
                              <option value="2">6 pcs</option>
                              <option value="3" selected>12 pcs</option>
                            </select>
                          </div>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="cart-group-item-action">
                      <button class="btn btn-outline-primary">
                        <span class="gs-icon material-icons-outlined">delete</span>
                      </button>
                      <button class="btn btn-outline-secondary" data-toggle="button" aria-pressed="false">
                        <span class="gs-icon material-icons-outlined">favorite_border</span>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex align-items-start">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" for="customCheck2"></label>
                  </div>
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <div class="form-group mb-0">
                            <select class="custom-select" id="">
                              <option value="1">1 pc</option>
                              <option value="2">6 pcs</option>
                              <option value="3" selected>12 pcs</option>
                            </select>
                          </div>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="cart-group-item-action">
                      <button class="btn btn-outline-primary">
                        <span class="gs-icon material-icons-outlined">delete</span>
                      </button>
                      <button class="btn btn-outline-secondary" data-toggle="button" aria-pressed="false">
                        <span class="gs-icon material-icons-outlined">favorite_border</span>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex align-items-start">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" for="customCheck3"></label>
                  </div>
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <div class="form-group mb-0">
                            <select class="custom-select" id="">
                              <option value="1">1 pc</option>
                              <option value="2">6 pcs</option>
                              <option value="3" selected>12 pcs</option>
                            </select>
                          </div>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="cart-group-item-action">
                      <button class="btn btn-outline-primary">
                        <span class="gs-icon material-icons-outlined">delete</span>
                      </button>
                      <button class="btn btn-outline-secondary" data-toggle="button" aria-pressed="false">
                        <span class="gs-icon material-icons-outlined">favorite_border</span>
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex align-items-start">
                  <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                    <label class="custom-control-label" for="customCheck4"></label>
                  </div>
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <div class="form-group mb-0">
                            <select class="custom-select" id="">
                              <option value="1">1 pc</option>
                              <option value="2">6 pcs</option>
                              <option value="3" selected>12 pcs</option>
                            </select>
                          </div>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                    <div class="cart-group-item-action">
                      <button class="btn btn-outline-primary">
                        <span class="gs-icon material-icons-outlined">delete</span>
                      </button>
                      <button class="btn btn-outline-secondary" data-toggle="button" aria-pressed="false">
                        <span class="gs-icon material-icons-outlined">favorite_border</span>
                      </button>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="tab-pane" id="tab2">
                <div class="add-address">
                  <a href="javascript:void(0)" id="open_addadressmodal" data-href="address-modal.php" class="btn add-address-link" data-toggle="modal">
                    <span class="gs-icon material-icons-outlined">add</span>
                    Add New Address
                  </a>
                </div>
                <ul class="list-unstyled list-group address-list-group address-selection">
                  <li class="media list-group-item">
                    <!-- <div class="icon-wrap">
                      <span class="gs-icon material-icons-outlined">place</span>
                    </div> -->
                    <div class="media-body list-group-inner">
                      <h5 class="address-tag">Home</h5>
                      <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                      <div class="address-list-action">
                        <div class="custom-control btn btn-radio">
                          <input type="radio" id="customRadioInline1" name="customRadioInline" class="custom-control-input">
                          <label class="custom-control-label  btn-radio-label" for="customRadioInline1">Deliver Here</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="media list-group-item">
                    <!-- <div class="icon-wrap">
                      <span class="gs-icon material-icons-outlined">place</span>
                    </div> -->
                    <div class="media-body list-group-inner">
                      <h5 class="address-tag">Office</h5>
                      <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                      <div class="address-list-action">
                        <div class="custom-control btn btn-radio">
                          <input type="radio" id="customRadioInline2" name="customRadioInline" class="custom-control-input">
                          <label class="custom-control-label btn-radio-label" for="customRadioInline2">Deliver Here</label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="media list-group-item">
                    <!-- <div class="icon-wrap">
                      <span class="gs-icon material-icons-outlined">place</span>
                    </div> -->
                    <div class="media-body list-group-inner">
                      <h5 class="address-tag">Friend House</h5>
                      <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                      <div class="address-list-action">
                        <div class="custom-control btn btn-radio">
                          <input type="radio" id="customRadioInline3" name="customRadioInline" class="custom-control-input">
                          <label class="custom-control-label btn-radio-label" for="customRadioInline3">Deliver Here</label>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
            </div>
            <div class="tab-pane" id="tab3">
              <ul class="list-unstyled list-group address-list-group mb-4">
                <li class="media list-group-item">
                  <div class="icon-wrap">
                    <span class="gs-icon material-icons-outlined">place</span>
                  </div>
                  <div class="media-body list-group-inner">
                    <h5>Delivery Address</h5>
                    <p class="address-text">Room No.: 001, Plot No. 420, Lorem Ipsum Nagar, Dolor Sit Road, Mumbai, 400706</p>
                  </div>
                </li>
              </ul>

              <ul class="list-group cart-list-group checkout-cart-list-group">
                <li class="list-group-item d-flex align-items-start">
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <span class="qty">12pcs</span>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex align-items-start">
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <span class="qty">12pcs</span>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="list-group-item d-flex align-items-start">
                  <div class="cart-group-item">
                    <div class="cart-group-item-inner">
                      <div class="img-wrap">
                        <img src="https://purepng.com/public/uploads/large/purepng.com-bananafruitsyellowfruit-981524754330lspp8.png" class="img-fluid" alt="...">
                      </div>
                      <div class="cart-group-item-body">
                        <div class="product-head">
                          <h5 class="product-name">Banana</h5>
                          <p class="product-desc">(Small Kerala Banana)</p>
                        </div>
                        <div class="cart-group-item-inner">
                          <span class="qty">12pcs</span>
                          <h6 class="product-price">
                            <span class="cross-price">₹ 150</span>
                            <span class="actual-price">₹ 125</span>
                          </h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

            </div>
            <div class="tab-pane" id="tab4">
              <h5 class="display-4">Payment Gateway</h5>
            </div>
          </div>




        </div>

        <div class="col-12 col-lg-5 col-xl-4">
          <div class="card shadow order-sticky-card">
            <div class="card-body pb-0 pt-3 px-3 p-lg-0">
              <h5 class="card-title">You Orders</h5>
              <h6 class="card-subtotal">
                <div class="card-subtotal-inner">
                  <span class="subtotal-label">Subtotal </span>
                  <span class="cart-items">9 items</span>   
                  :
                </div>
                <span class="subtotal-amount">₹ 2,803.00</span>
              </h6>
            </div>
            <div class="card-footer pt-2 pb-3 px-3 p-lg-3 bg-white">
              <ul class="wizard list-unstyled mb-0">
                <li class="previous">
                  <a href="javascript:;" class="btn btn-outline-dark btn-block">Back</a>
                </li>
                <li class="next">
                  <a href="javascript:;" class="btn btn-primary btn-block">Proceed to Next</a>
                </li>
                <li class="finish hidden">
                  <a href="javascript:;" class="btn btn-primary btn-block">Pay</a>
                </li>
              </ul>
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


<!-- Add Address Modal -->
<div class="modal fade" id="addAddressModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="address-data"></div>
        </div>
    </div>
</div>

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
<!-- <script src="http://code.jquery.com/jquery-latest.js"></script> -->
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.bootstrap.wizard.min.js"></script>
<script src="js/script.js"></script>
<script>
  // $(document).ready(function() {
  //     $('#cartWizard').bootstrapWizard({
  //       'nextSelector': '.button-next', 
  //       'previousSelector': '.button-previous',
  //       'finishSelector':  '.button-finish',
  //   });
  // });

$(document).ready(function() {
    $('#cartWizard').bootstrapWizard({

      onTabShow: function(tab, navigation, index) {
        var $total = navigation.find('li').length;
        var $current = index+1;
        var $percent = ($current/$total) * 100;
        $('#cartWizard').find('.bar').css({width:$percent+'%'});
      }
  });
  // $('#cartWizard .finish').click(function() {
  //   alert('Finished!, Starting over!');
  //   $('#cartWizard').find("a[href*='tab1']").trigger('click');
  // });
});  
</script>
</body>
</html>