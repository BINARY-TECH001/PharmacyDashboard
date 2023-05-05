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
                                type="text"
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
                                type="text"
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
                                type="text"
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
                                <select id="select4" class="form-select" name="product4Name">
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
                                type="text"
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
                          function getData(){

                            select1 = document.getElementById("select1").value;
                            select2 = document.getElementById("select2").value;
                            select3 = document.getElementById("select3").value;
                            select4 = document.getElementById("select4").value;

                            // GET QUANTITIES
                            Qty1 = document.getElementById('Quantity1').value.trim();
                            Qty2 = document.getElementById('Quantity2').value.trim();
                            Qty3 = document.getElementById('Quantity3').value.trim();
                            Qty4 = document.getElementById('Quantity4').value.trim();

                            const Qty = 2;
                            const data = {
                              product1 : {
                                select1,
                                Qty1
                              },
                              product2 : {
                                select2,
                                Qty2
                              },
                              product3 : {
                                select3,
                                Qty3
                              },
                              product4 : {
                                select4,
                                Qty4
                              }
                            };

                          console.log(data.product1.Qty1)
                            
                        
                            modal.innerHTML = `
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <button
                                                        type="button"
                                                        class="btn-close"
                                                        data-bs-dismiss="modal"
                                                        aria-label="Close"
                                                      ></button>
                                                    </div>
                      
                      
                                                    <div class="modal-body">
                                                      <div class="pharmacyDetails">
                                                          <h2> AL MISKEEN PHARMS LTD </h2>
                                                          <span> BESIDE GRAMMAR SCHOOL, SANGO SAKI </span>
                                                          <span> AL MISKEENpharma2016@gmail.com | <span> 08105875485 </span></span>
                                                      </div>
                      
                                                      <div class="receiptNo">
                                                          <p> RECEIPT NO: <b> B60510 </b> ${Qty} </p>
                                                      </div>
                                                          <div class="card">
                                                              <div class="table-responsive text-nowrap">
                                                                <table class="table">
                                                                  <thead>
                                                                    <tr>
                                                                      <th> Quantity</th>
                                                                      <th>Products</th>
                                                                      <th>Price</th>
                                                                    </tr>
                                                                  </thead>
                                                                  <tbody class="">
                                                                  <tr>
                                                                      <td> ${data.product1.Qty1} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product1.select1} </strong></td>
                                                                      <?php 
// $conn =new mysqli('localhost','root','','pharmacy');

//     $selectUser = mysqli_query($conn,"SELECT * FROM products WHERE username='{$_SESSION['username']}'");
//     $Session_row = mysqli_fetch_array($selectUser);
// ?>
                                                                      <td><?php echo $Session_row['username']; ?> </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product2.Qty2} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product2.select2}  </strong></td>
                                                                      <td> 300.00 </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product3.Qty3} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product3.select3} </strong></td>
                                                                      <td> 300 </td>
                                                                  </tr>
                                                                  <tr>
                                                                      <td> ${data.product4.Qty4} </td>
                                                                      <td><i class="fab fa-angular fa-lg text-danger"></i> <strong> ${data.product4.select4} </strong></td>
                                                                      <td> 300 </td>
                                                                  </tr>
                                                                  </tbody>
                                                                </table>
                                                              </div>
                                                      </div>
                      
                                                      <div class="discount">
                                                          <p>Discount: <b>0.00</b></p>
                                                          <p>Sub-total: <b>1, 160.00</b></p>
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
); ?>, <?php echo date('Y'); ?>. <?php echo date('h'); ?> : <?php echo date('i'); ?> : <?php echo date('s'); ?></span>
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
                                                          <p> GOODS BOUGHT IN GOOD CONDITION ARE UNRETURNABLE. THANKS FOR YOUR PATRONAGE. </p>
                                                          <span><?php echo date('l'); ?>, <?php echo date(
  'M'
); ?>, <?php echo date('Y'); ?>. <?php echo date('H'); ?> : <?php echo date('i'); ?> : <?php echo date('s'); ?></span>
                                                      </div>
                                                    </div>
                      
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                                        Close
                                                      </button>
                                                      <button type="button" class="btn btn-primary"> Print </button>
                                                    </div>
                                                  </div>
                                                </div>
                                                </div>
                                                </div>
                            `;
                            modal.style.display="block";
                          }
                        

                      </script>
            <script src="../assets/js/pages-account-settings-account.js"></script>

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>
