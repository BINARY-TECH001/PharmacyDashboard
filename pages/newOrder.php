<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>
<?php require '../app/functions.php'; ?>

<?php addOrder(); ?>

<link rel="stylesheet" href="../assets/css/receipt.css">
<link rel="stylesheet" href="../assets/css/receiptModal.css">



<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y" id="wrap">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Order Product</h4>
                
              <div class="col-xl">
                  <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"> New Order </h5>
                      <small class="text-muted float-end"> AL MISKEEN Pharmacy </small>
                    </div>
                  </div>
              </div>
            
            <div class="row mb-3 flex wrap align-items-center justify-content-center">
            <div class="col-md col-lg wrap">
            <div class="card mb-3 wrsp">
                    <div class="card-body">

                    <form class="row form-group mb-3" method="POST">
                        <div class="row form-group mb-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product 1</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                   <select class="form-select" name="product1Name" id="select1">
                                     <option>Choose Products</option>
                                <?php
                                $a = 1;
                                $query = mysqli_query($conn, 'select * from `products` ');
                                while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['productName']; ?>" > <?php echo $row[
  'productName'
]; ?> </option>
                                  <?php }
                                ?>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>
                          

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="#" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="number"
                                name="product1Quantity"
                                class="form-control"
                                id="Quantity1"
                                placeholder="12"
                                aria-label="12"
                                aria-describedby="Quantity1"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>
                        </div>
                        
                        <div class="row form-group mb-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product 2</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                <select id="select2" class="form-select" name="product2Name">
                                  <option>Choose Products</option> <?php
                                  $a = 1;
                                  $query = mysqli_query($conn, 'select * from `products` ');
                                  while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['productName']; ?>"> <?php echo $row[
  'productName'
]; ?> </option>
                                  <?php }
                                  ?>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="input2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="number"
                                name="product2Quantity"
                                class="form-control"
                                id="Quantity2"
                                placeholder="12"
                                aria-label="12"
                                aria-describedby="Quantity2"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>
                        </div>
                        <div class="row form-group mb-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product 3</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                <select id="select3" class="form-select" name="product3Name">
                                  <option>Choose Products</option> <?php
                                  $a = 1;
                                  $query = mysqli_query($conn, 'select * from `products` ');
                                  while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['productName']; ?>"> <?php echo $row[
  'productName'
]; ?> </option>
                                  <?php }
                                  ?>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="input3" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="number"
                                name="product3Quantity"
                                class="form-control"
                                id="Quantity3"
                                placeholder="12"
                                aria-label="12"
                                aria-describedby="input3"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>
                        </div>
                        <div class="row form-group mb-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product 4</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                <select id="select4" class="form-select" name="product4Name" >
                                  <option>Choose Products</option> <?php
                                  $a = 1;
                                  $query = mysqli_query($conn, 'select * from `products` ');
                                  while ($row = mysqli_fetch_array($query)) { ?>
                                  <option value="<?php echo $row['productName']; ?>"> <?php echo $row[
  'productName'
]; ?> </option>
                                  <?php }
                                  ?>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="input4" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="number"
                                name="product4Quantity"
                                class="form-control"
                                id="Quantity4"
                                placeholder="12"
                                aria-label="12"
                                aria-describedby="Quantity4"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>
                        </div>
                        
                        <!-- <button 
                        name="submitPrint" 
                        class="btn btn-primary mt-3"
                        > Done </button> -->
                    </form>
                      <button 
                      class="btn btn-secondary"
                      type="button"
                        onclick="getData()"
                      > Show Receipt </button>
                    </div>

                </div>
            </div>
        


  <!-- Modal -->
            <div id="modalContainer" class="modalContainer">
                          
                        </div>
                      </div>
            </div>
            <!-- / Content -->
                      
<script>
  var modal = document.getElementById('modalContainer');
  let select1Option = document.getElementById("select1");
   let select2Option = document.getElementById("select2");
   let select3Option = document.getElementById("select3");
   let select4Option = document.getElementById("select4");

  function getData(){
    select1 = document.getElementById("select1").value;
    select2 = document.getElementById("select2").value;
    select3 = document.getElementById("select3").value;
    select4 = document.getElementById("select4").value;
    Qty1 = document.getElementById('Quantity1').value.trim();
    Qty2 = document.getElementById('Quantity2').value.trim();
    Qty3 = document.getElementById('Quantity3').value.trim();
    Qty4 = document.getElementById('Quantity4').value.trim();
    var Qty = 2;
    var data = {
      product1 : {
        select1,
        Qty1,
      },
      product2 : {
        select2,
        Qty2,
      },
      product3 : {
        select3,
        Qty3,
      },
      product4 : {
        select4,
        Qty4,
      }
    };


    if(data.product1.Qty1 == ''){
      data.product1.Qty1 = '-';
    }
    if(data.product2.Qty2 == ''){
      data.product2.Qty2 = '-';
    }
    if(data.product3.Qty3 == ''){
      data.product3.Qty3 = '-';
    }
    if(data.product4.Qty4 == ''){
      data.product4.Qty4 = '-';
    }
    // CHECK THE PRODUCT
    if(data.product1.select1 == 'Choose Products'){
      data.product1.select1 = '-';
    }
    if(data.product2.select2 == 'Choose Products'){
      data.product2.select2 = '-';
    }
    if(data.product3.select3 == 'Choose Products'){
      data.product3.select3 = '-';
    }
    if(data.product4.select4 == 'Choose Products'){
      data.product4.select4 = '-';
    }
      var rand = Math.floor(Math.random() * 1 );
      var date = new Date();
      var seconds = date.getSeconds();
      var minute = date.getMinutes();
      var hour = date.getHours();
      var prices = [];


    var productNames = [];
    const selectElements = document.querySelectorAll("select");
    for (var i = 0; i < selectElements.length; i++){
      var selectedOption = selectElements[i].options[selectElements[i].selectedIndex];
      productNames.push(selectedOption.value);
    }
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
      if (this.readyState === 4 && this.status === 200){
        result = JSON.parse(this.responseText);
       showValue(result);
      }else if (this.readyState === 4 && this.status !== 200){
        console.log('Error:', this.status);
      }
    };
    xhr.open('POST', 'getProductPrice.php');
    var jsonData = JSON.stringify({ ...productNames });
    console.log(jsonData);
    console.log(typeof(jsonData));
    xhr.send(jsonData);

    function showValue(result){
      let priceTag1 = document.getElementById('priceTag1');
      let priceTag2 = document.getElementById('priceTag2');
      let priceTag3 = document.getElementById('priceTag3');
      let priceTag4 = document.getElementById('priceTag4');

      for (let key in result){
        if (data.product1.select1 === key){
          let price1Cal = result[key];
          var price1Total = price1Cal * data.product1.Qty1;
          // data.product1.price1 = price1Total;
          priceTag1.innerHTML = price1Total;
        }
        if (data.product2.select2 === key){
          let price2Cal = result[key];
          var price2Total = price2Cal * data.product2.Qty2;
          priceTag2.innerHTML = price2Total;
          // data.product2.price2 = price2Total;
        }
        if (data.product3.select3 === key){
          let price3Cal = result[key];
          var price3Total = price3Cal * data.product3.Qty3;
          priceTag3.innerHTML = price3Total;
          // data.product3.price3 = price3Total;
        }
        if (data.product4.select4 === key){
          let price4Cal = result[key];
          var price4Total = price4Cal * data.product4.Qty4;
          priceTag4.innerHTML = price4Total;
          // data.product4.price4 = price4Total;
        }
      }
    }

    
                            

                            modal.innerHTML = `
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button
                                                        type="button"
                                                        class="btn-close"
                                                        onclick="closeModal()"
                                                      ></button>
                                                    </div>
                      
                      
                                                    <div class="modal-body">
                                                      <div class="pharmacyDetails">
                                                          <h2> AL MISKEEN PHARMS LTD </h2>
                                                          <span> BESIDE GRAMMAR SCHOOL, SANGO SAKI </span>
                                                          <span> AL MISKEENpharma2036@gmail.com | <span> 08105875485 </span></span>
                                                      </div>
                      
                                                      <div class="receiptNo">
                                                      <?php
                                                         $randomNum = rand(99,10);    
                                                         $productId = date("Y") . date("d")  . $randomNum;  
                                                      ?>
                                                          <p> RECEIPT ID: <b> <?php echo $productId ?> </b></p>
                                                      </div>
                                                          <div class="card">
                                                              <div class="table-responsive text-nowrap">
                                                                <table class="table" id="table">
                                                                  <thead>
                                                                    <tr>
                                                                      <th> Quantity</th>
                                                                      <th>Products</th>
                                                                      <th>Price</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody class="" id="modal-body">
                                                                  <tr id="row">
                                                                      <td> ${data.product1.Qty1} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product1.select1} </strong></td>
                                                                      <td id='priceTag1'> 00.00 </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product2.Qty2} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product2.select2}  </strong></td>
                                                                      <td id='priceTag2'> 00.00 </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product3.Qty3} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product3.select3} </strong></td>
                                                                      <td id='priceTag3'> 00.00 </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product4.Qty4} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product4.select4} </strong></td>
                                                                      <td id='priceTag4'> 00.00 </td>
                                                                  </tr>
                                                                  </tbody>
                                                                </table>
                                                              </div>
                                                      </div>
                      
                                                      <div class="discount">
                                                          <p>Discount: <b>0.00</b></p>
                                                          <p id="subTotal">Sub-total: <b>1, 160.00</b></p>
                                                      </div>
                      
                                                      <div class="totalPriceCon">
                                                          <span> TOTAL: <b>1,160.00</b> </span>
                                                          <span> VAT: @7.5% </span>
                                                      </div>
                      
                                                      <div class="moreInfo">
                                                          <div class="info">
                                                              <span> Transaction time </span>
                                                              <span><?php echo date('l'); ?>, <?php echo date(
  'M'
); ?>, <?php echo date('Y'); ?>. ${hour} : ${minute} : ${seconds}</span>
                                                          </div>
                                                          <div class="info">
                                                              <span> Cashier </span>
                                                              <span> <?php echo $Session_row['firstname']; ?> </span>
                                                          </div>
                                                          <div class="info">
                                                              <span> Cash Payment </span>
                                                              <span> 1,160.00 </span>
                                                          </div>
                                                          <div class="info">
                                                              <span> Ledger Balance </span>
                                                              <span> 0.00 </span>
                                                          </div>
                                                      </div>
                      
                                                      <div class="claim">
                                                          <p> GOODS BOUGHT IN GOOD CONDITION ARE UNRETURNABLE. </p>
                                                          <b>THANKS FOR YOUR PATRONAGE.</b>
                                                      </div>
                                                    </div>
                      
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-outline-secondary" onclick="closeModal()">
                                                        Save Receipt
                                                      </button>
                                                      <button type="button" class="btn btn-primary" id="print-btn" onclick="printContent()"> Print </button>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                                </div>
                            `;
                            modal.style.display="block";
}
                          function closeModal(){
      modal.style.display = "none";
    }

    function printContent(){
      const btn = document.getElementById('print-btn');
      let element = document.getElementById('modalContainer');
      let html = element.innerHTML;
      let new_window = window.open('', 'print', 'height=650; width=900');
      new_window.document.write('<link rel="stylesheet" href="../assets/css/receipt.css">' );
      new_window.document.write('<link rel="stylesheet" href="../assets/css/receiptModal.css">' );
      new_window.document.write('<link rel="stylesheet" href="../assets/vendor/css/core.css">' );
      new_window.document.write('<style>button{display: none; }</style>');
      new_window.document.write(html);
      new_window.print();
 };


                      </script>
            <script src="../assets/js/pages-account-settings-account.js"></script>

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>
