<?php
  $page = 'Checkout';
  include('inc/header.php'); 
  ?>
<body>
  <main class="main-container">
    <div class="contain-wrapper">
      <!-- header -->
 
      <!--checkout page-->
      <section class="check-page">
        <div class="separator d-flex align-items-center text-center justify-content-center my-4 gap-4">
          <h2 class="fw-bold">Checkout</h2>
        </div>
        <div class="row">
          <div class="col-lg-8">
            <div class="form-box rounded">
              <h2 style="margin-left: 12px;margin-bottom: 20px;">Shipping Address</h2>
              <form>
                <lable class="shipping-heading" style="margin-left: 12px;font-size: 24px;">Shipping Address*</lable>
                <div class="row">
                  <div class="col-lg-12">
                        <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Address</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Flat, House no., Building, Apartment" id="address">
                  </div>
                  <div class="col-lg-12">
                        <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Area / Street</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Area, Street, Sector, Village" id="area">
                  </div>
                  <div class="col-lg-12">
                        <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Landmark*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Landmark" id="Landmark">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Name*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your Name" id="Name">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Phone Number*</lable>
                    <input type="number" class="form-control check mt-1 mb-2" placeholder="Enter Phone Number" id="address">
                  </div>
                     <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">City*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your City" id="Landmark">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">State*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your State" id="Landmark">
                  </div>
                     <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Pincode*</lable>
                    <input type="number" class="form-control check mt-1 mb-2" placeholder="Enter Pin Code" id="area">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Country*</lable>
                    <div class="select-wrapper">
                      <select name="state" class="select" placeholder="select one">
                        <option value="India">India</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                      </select>
                    </div>
                  </div>
                  <div class="">
                      <div class="form-check py-2">
                        <label class="form-check-label">
                        <input type="checkbox" class="form-check-input" value="">Use as default address
                        </label>
                      </div>
                      <button type="button" class=" btn btn-dark save-address-btn">Save address</button>
                  </div>
                </div>
              </form>
            </div>
            <!--<div class="form-box px-3">-->
            <!--  <div class="form-check">-->
            <!--    <label class="form-check-label">-->
            <!--    <input type="checkbox" class="form-check-input" value="">Shipping address is the same as my billing address-->
            <!--    </label>-->
            <!--  </div>-->
              <!--<div class="form-check"> -->
              <!--  <label class="form-check-label">-->
              <!--  <input type="checkbox" class="form-check-input" value="">Save this information for next time-->
              <!--  </label>-->
              <!--</div>-->
            <!--</div>-->
            
            <!--Billing address -->
            <div class="form-box px-3">
              <!--<input class="form-check-input inpt" type="checkbox" id="myCheck" onclick="myFunction()">-->
              <label for="myCheck" style="font-size: 26px;font-weight: 700; ">Billing Address</label> 
              <div id="text">
                   <div class="form-check"> 
                <label class="form-check-label">
                <input type="checkbox"  id="chkPassport"  class="form-check-input" value="" checked>Same as delivery address
                </label>
              </div>
              <div id="dvPassport">
                <div class="row" >
                     <lable class="shipping-heading" style="margin-left: 12px;font-size: 24px;">Billing Address*</lable>
                     <div class="col-lg-12">
                    <input type="text" class="form-control check" placeholder="Flat, House no., Building, Apartment" id="address">
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control check" placeholder="Area, Street, Sector, Village" id="area">
                  </div>
                  <div class="col-lg-12">
                    <input type="text" class="form-control check" placeholder="Landmark" id="Landmark">
                  </div>
<div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Name*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your Name" id="Name">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Phone Number*</lable>
                    <input type="number" class="form-control check mt-1 mb-2" placeholder="Enter Phone Number" id="address">
                  </div>
                     <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">City*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your City" id="Landmark">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">State*</lable>
                    <input type="text" class="form-control check mt-1 mb-2" placeholder="Enter Your State" id="Landmark">
                  </div>
                     <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Pincode*</lable>
                    <input type="number" class="form-control check mt-1 mb-2" placeholder="Enter Pin Code" id="area">
                  </div>
                  <div class="col-lg-6">
                    <lable class="shipping-heading" style="margin-left: 0px;font-size: 24px;">Country*</lable>
                    <div class="select-wrapper">
                      <select name="state" class="select" placeholder="select one">
                        <option value="India">India</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                      </select>
                    </div>
                  </div>
                </div>
                <button type="button" class=" btn btn-dark save-address-btn">Save address</button>
             </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar" style="position: sticky;">
              <table class="form-box two" style="width:100%">
                <tr>
                  <th class="order-your" colspan="3" style="text-align:center;padding-top: 5px;">Your Order</th>
                </tr>
                <tr style="border-bottom: 1px solid #e9e9e9;">
                  <td colspan="2" style="padding-left: 24px;padding-top: 14px;padding-bottom: 10px;font-weight: 600;font-size: 20px;">product</td>
                  <!--<td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px;padding-bottom: 10px;font-weight: 600;">Sub Total</td>-->
                </tr>
                <tr>
                <td colspan="2" style="padding-left: 24px;padding-top: 20px;font-weight: 500;font-size: 18px;">GST</td>
                <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px; font-weight: 600;">₹0.00</td>
                </tr>
                <tr style="border-bottom: 1px solid #e9e9e9;">
                <td colspan="2" style="padding-left: 24px;padding-top: 20px;font-weight: 500;font-size: 18px;padding-bottom: 18px;">Shipping Charges</td>
                <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px; font-weight: 600;">₹5.00</td>
                </tr>
                <tr>
                <td colspan="2" style="padding-left: 24px;padding-top: 20px;padding-bottom: 20px;font-size: 18px; font-weight: 600;">Sub total</td>
                <td colspan="3" style="text-align:end;padding-right: 24px;padding-top: 20px;padding-bottom: 20px; font-weight: 600;">₹5.00</td>
                </tr>
                <tr>
                  <td colspan="3"><a href="payment.php"><button class="confirm-button border-0">CONFIRM ORDER</button></a></td>
                </tr>
              </table>
            </div>
            <div class="sidebar text-center form-box two p-4" style="position: sticky;">
                 <a href="cart.php" class="text-decoration-underline">
               <p class="back-cart m-0">
                    <svg viewBox="0 0 24 24"><path fill="currentColor" d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z" /></svg>
               BACK TO CART</p>
                  </a> 
            </div> 
          </div>
        </div>
      </section>
    </div>
      <!--checkout page end-->
      <!-- footer -->
      <?php
        include('inc/footer.php'); 
        ?>
   
  </main>
  <!--billing address-->
  <script>
    $(function () {
        $("#chkPassport").click(function () {
            if ($(this).is(":checked")) {
                $("#dvPassport").hide();
                $("#AddPassport").show();
            } else {
                $("#dvPassport").show();
                $("#AddPassport").hide();
            }
        });
    });
  </script>
  <!--billing address end-->
</body>
</html>