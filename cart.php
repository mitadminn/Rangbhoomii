<?php
  $page = 'Cart';
  include('inc/header.php'); 
  ?>
<body>
  <main class="main-container">
    <!-- header -->
    
    <div class="contain-wrapper">
      <div class="">
        <!--CART PAGE-->
        <section class="cart-section">
          <div class="separator d-flex align-items-center text-center justify-content-center my-4 gap-4">
            <h2 class="fw-bold">cart</h2>
          </div>
          <section class="h-100 h-custom">
            <div class="  h-100 py-4">
              <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th scope="col" class="h5 border-top-0"> </th>
                          <th scope="col" class=" border-top-0">Name</th>
                          <th scope="col" class=" border-top-0">Category</th>
                          <th scope="col" class=" border-top-0">Price</th>
                          <th scope="col" class=" border-top-0">Quantity</th>
                          <th scope="col" class=" border-top-0">Total</th>
                          <th scope="col" class=" border-top-0"> </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">
                            <div class="d-flex align-items-center">
                              <img src="https://i.imgur.com/2DsA49b.webp" class="  rounded-3"
                                style="width: 75px;" alt="Book">
                              <!--<div class="flex-column ms-4">-->
                              <!--  <p class="mb-2">Thinking, Fast and Slow</p>-->
                              <!--  <p class="mb-0 fw-normal">Size: 24 x 24</p>-->
                              <!--  <p class="mb-0 fw-normal">Arcylic on Canvas</p>-->
                              <!--</div>-->
                            </div>
                          </th>
                          <td class="align-middle mob-tx-size">
                            <p class="mb-2 fw-bold">Thinking, Fast and Slow</p>
                            <p class="mb-0 fw-normal">Size: 24 x 24</p>
                            <p class="mb-0 fw-normal">Arcylic on Canvas</p>
                          </td>
                          <td class="align-middle mob-tx-size">
                            <p class="mb-0" style="font-weight: 500;">Original Artwork</p>
                          </td>
                          <td class="align-middle mob-tx-size">
                            <p class="mb-0" style="font-weight: 600;">₹9.99</p>
                          </td>
                          <td class="align-middle">
                            <div class="d-flex flex-row">
                              <div class="number">
                                <span class="minus">-</span>
                                <input class="counter_num" type="text" value="0"/>
                                <span class="plus">+</span>
                              </div>
                            </div>
                          </td>
                          <td class="align-middle mob-tx-size">
                            <p class="mb-0" style="font-weight: 600;">₹299</p>
                          </td>
                          <td class="align-middle  ">
                            <svg viewBox="0 0 24 24">
                              <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                            </svg>
                          </td>
                          <td class="align-middle  mob-tx-size">
                            <button type="button" class="btn btn-dark rounded-pill px-3 btn-remove-item" >Remove</button>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">
                            <div class="d-flex align-items-center">
                              <img src="https://i.imgur.com/Oj1iQUX.webp" class="  rounded-3"
                                style="width: 75px;" alt="Book">
                              <!--  <div class="flex-column ms-4">-->
                              <!--    <p class="mb-2">Thinking, Fast and Slow</p>-->
                              <!--    <p class="mb-0 fw-normal">Size: 24 x 24</p>-->
                              <!--    <p class="mb-0 fw-normal">Arcylic on Canvas</p>-->
                              <!--  </div>-->
                              <!--</div>-->
                          </th>
                          <td class="align-middle mob-tx-size">
                          <p class="mb-2 fw-bold">Thinking, Fast and Slow</p>
                          <p class="mb-0 fw-normal">Size: 24 x 24</p>
                          <p class="mb-0 fw-normal">Arcylic on Canvas</p>
                          </td>
                          <td class="align-middle mob-tx-size">
                          <p class="mb-0" style="font-weight: 500;">Print</p>
                          </td>
                          <td class="align-middle mob-tx-size">
                          <p class="mb-0" style="font-weight: 600;">₹9.99</p>
                          </td>
                          <td class="align-middle">
                          <div class="d-flex flex-row">
                          <div class="number">
                          <span class="minus">-</span>
                          <input class="counter_num" type="text" value="0"/>
                          <span class="plus">+</span>
                          </div>
                          </div>
                          </td>
                          <td class="align-middle mob-tx-size">
                          <p class="mb-0" style="font-weight: 600;">₹299</p>
                          </td>
                          <td class="align-middle">
                          <svg viewBox="0 0 24 24">
                          <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                          </svg>
                          </td>
                          <td class="align-middle mob-tx-size  ">
                          <button type="button" class="btn btn-dark rounded-pill px-3 btn-remove-item" >Remove</button>
                          </td>
                        </tr>
                        <tr>
                        <th scope="row">
                        <div class="d-flex align-items-center">
                        <img src="https://i.imgur.com/2DsA49b.webp" class="  rounded-3"
                          style="width: 75px;" alt="Book">
                        <!--<div class="flex-column ms-4">-->
                        <!--  <p class="mb-2">Thinking, Fast and Slow</p>-->
                        <!--  <p class="mb-0 fw-normal">Size: 24 x 24</p>-->
                        <!--  <p class="mb-0 fw-normal">Arcylic on Canvas</p>-->
                        <!--</div>-->
                        </div>
                        </th>
                        <td class="align-middle mob-tx-size">
                        <p class="mb-2 fw-bold">Thinking, Fast and Slow</p>
                        <p class="mb-0 fw-normal">Size: 24 x 24</p>
                        <p class="mb-0 fw-normal">Arcylic on Canvas</p>
                        </td>
                        <td class="align-middle mob-tx-size">
                        <p class="mb-0" style="font-weight: 500;">Original Artwork</p>
                        </td>
                        <td class="align-middle mob-tx-size">
                        <p class="mb-0" style="font-weight: 600;">₹9.99</p>
                        </td>
                        <td class="align-middle">
                        <div class="d-flex flex-row">
                        <div class="number">
                        <span class="minus">-</span>
                        <input class="counter_num" type="text" value="0"/>
                        <span class="plus">+</span>
                        </div>
                        </div>
                        </td>
                        <td class="align-middle mob-tx-size">
                        <p class="mb-0" style="font-weight: 600;">₹299</p>
                        </td>
                        <td class="align-middle ">
                        <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        </td>
                        <td class="align-middle  mob-tx-size ">
                        <button type="button" class="btn btn-dark rounded-pill px-3 btn-remove-item" >Remove</button>
                        </td>
                        </tr>
                        <tr>
                        <th scope="row" class="border-bottom-0">
                        <div class="d-flex align-items-center">
                        <img src="https://i.imgur.com/Oj1iQUX.webp" class="  rounded-3"
                          style="width: 75px;" alt="Book">
                        <!--<div class="flex-column ms-4">-->
                        <!--  <p class="mb-2">Homo Deus: A Brief History of Tomorrow</p>-->
                        <!--  <p class="mb-0 fw-normal">Size: 24 x 24</p>-->
                        <!--  <p class="mb-0 fw-normal">Arcylic on Canvas</p>-->
                        <!--</div>-->
                        </div>
                        </th>
                        <td class="align-middle mob-tx-size border-bottom-0">
                        <p class="mb-2 fw-bold">Thinking, Fast and Slow</p>
                        <p class="mb-0 fw-normal">Size: 24 x 24</p>
                        <p class="mb-0 fw-normal">Arcylic on Canvas</p>
                        </td>
                        <td class="align-middle border-bottom-0 mob-tx-size">
                        <p class="mb-0" style="font-weight: 500;">Print</p>
                        </td>
                        <td class="align-middle border-bottom-0 mob-tx-size">
                        <p class="mb-0" style="font-weight: 600;">₹13.50</p>
                        </td>
                        <td class="align-middle border-bottom-0">
                        <div class="d-flex flex-row">
                        <div class="number">
                        <span class="minus">-</span>
                        <input class="counter_num" type="text" value="0"/>
                        <span class="plus">+</span>
                        </div>
                        </div>
                        </td>
                        <td class="align-middle border-bottom-0">
                        <p class="mb-0" style="font-weight: 600; mob-tx-size">₹299</p>
                        </td>
                        <td class="align-middle border-bottom-0">
                        <svg viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12.1,18.55L12,18.65L11.89,18.55C7.14,14.24 4,11.39 4,8.5C4,6.5 5.5,5 7.5,5C9.04,5 10.54,6 11.07,7.36H12.93C13.46,6 14.96,5 16.5,5C18.5,5 20,6.5 20,8.5C20,11.39 16.86,14.24 12.1,18.55M16.5,3C14.76,3 13.09,3.81 12,5.08C10.91,3.81 9.24,3 7.5,3C4.42,3 2,5.41 2,8.5C2,12.27 5.4,15.36 10.55,20.03L12,21.35L13.45,20.03C18.6,15.36 22,12.27 22,8.5C22,5.41 19.58,3 16.5,3Z" />
                        </svg>
                        </td>
                        <td class="align-middle border-bottom-0  mob-tx-size ">
                        <button type="button" class="btn btn-dark rounded-pill px-3 btn-remove-item">Remove</button>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    </th>
                    </tr>
                    </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <div class="row accept-payment-wrapper">
            <div class="col-lg-6 col-cart">
              <div class="payment-method-content form-box two p-3">
                <div>
                  <h4>We accept</h4>
                </div>
                <hr style="color: #c7c7c7;">
                <div class="d-flex gap-3 flex-wrap">
                  <img src="assets/img/visa 1.png" alt="pay icon">
                  <img src="assets/img/mastercard.png" alt="pay icon">
                  <img src="assets/img/Americamexpress.png" alt="pay icon">
                  <img src="assets/img/paypal.png" alt="pay icon">
                  <img src="assets/img/COD.png" alt="pay icon">
                  <img src="assets/img/UPI.png" alt="pay icon">
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-cart">
              <div class="sidebar" style="position: sticky;">
                <table class="form-box two" style="width:100%">
                  <tbody>
                    <tr>
                      <th class="order-your px-4 fw-normal" colspan="3" style="padding-top: 5px;">Summary</th>
                    </tr>
                    <tr style="">
                      <td colspan="2" style="padding-left: 24px;padding-top: 20px;padding-bottom: 10px;font-weight: 600;">Total item cost</td>
                      <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px;padding-bottom: 10px;font-weight: 500;">₹299</td>
                    </tr>
                    <tr style="border-bottom: 1px solid #c7c7c7;">
                      <td colspan="2" style="padding-left: 24px;padding-top: 20px;padding-bottom: 10px;font-weight: 600;">Shipping Charges</td>
                      <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px;padding-bottom: 10px;font-weight: 500;">₹299</td>
                    </tr>
                    <tr>
                      <td  class="pb-3" colspan="2" style="padding-left: 24px;padding-top: 20px;font-weight: 600;">Total Amount</td>
                      <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 4px;">₹803</td>
                    </tr>
                    <tr>
                      <td colspan="3"><a href="checkout.php"><button class="confirm-button border-0">Proceed to Checkout</button></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
    <!-- footer -->
    <?php
      include('inc/footer.php'); 
      ?>
  </main>
</body>
<script>
  $(document).ready(function() {
  $('.minus').click(function () {
  var $input = $(this).parent().find('input');
  var count = parseInt($input.val()) - 1;
  count = count < 1 ? 1 : count;
  $input.val(count);
  $input.change();
  return false;
  });
  $('.plus').click(function () {
  var $input = $(this).parent().find('input');
  $input.val(parseInt($input.val()) + 1);
  $input.change();
  return false;
  });
  });
</script>
</html>