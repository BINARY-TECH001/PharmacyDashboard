<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<?php
    //  global $conn;
    //  $id = $_GET['id'];
    //  $select = "select * from products where id='".$id."'";
    //  $result = mysqli_query($conn, $select);
    //  $row = mysqli_fetch_array($result);

    
?>

<link rel="stylesheet" href="../assets/css/receipt.css">



<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Order Product</h4>
                
              <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"> New Order </h5>
                      <small class="text-muted float-end"> AL MISKEEN Pharmacy </small>
                    </div>
            
                    <div class="card-body">

                        <div class="row form-group mb-3">
                        <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product 1</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                <select id="defaultSelect" class="form-select" name="productCategory">
                                  <option>Choose Products</option>
                                  <option value="depressants"> Depressants </option>
                                  <option value="hallucinogen"> Hallucinogen </option>
                                  <option value="stimulants"> Stimulants </option>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="text"
                                name="productQuantity"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="12pcs"
                                aria-label="12pcs"
                                aria-describedby="basic-icon-default-fullname2"
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
                                <select id="defaultSelect" class="form-select" name="productCategory">
                                  <option>Choose Products</option>
                                  <option value="depressants"> Depressants </option>
                                  <option value="hallucinogen"> Hallucinogen </option>
                                  <option value="stimulants"> Stimulants </option>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="text"
                                name="productQuantity"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="12pcs"
                                aria-label="12pcs"
                                aria-describedby="basic-icon-default-fullname2"
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
                                <select id="defaultSelect" class="form-select" name="productCategory">
                                  <option>Choose Products</option>
                                  <option value="depressants"> Depressants </option>
                                  <option value="hallucinogen"> Hallucinogen </option>
                                  <option value="stimulants"> Stimulants </option>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="text"
                                name="productQuantity"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="12pcs"
                                aria-label="12pcs"
                                aria-describedby="basic-icon-default-fullname2"
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
                                <select id="defaultSelect" class="form-select" name="productCategory">
                                  <option>Choose Products</option>
                                  <option value="depressants"> Depressants </option>
                                  <option value="hallucinogen"> Hallucinogen </option>
                                  <option value="stimulants"> Stimulants </option>
                                </select>
                              </div>
                            <div class="form-text">The drugs are categotised by the way they affect our bodies...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="text"
                                name="productQuantity"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="12pcs"
                                aria-label="12pcs"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>
                        </div>
                        
                        <button 
                        name="submit" 
                        class="btn btn-primary"
                        type="button"
                          class="btn btn-primary"
                          data-bs-toggle="modal"
                          data-bs-target="#modalCenter"
                        > Receipt </button>
                      </form>
                    </div>

                </div>
            </div>
        
</div>
  <!-- Modal -->
  <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
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
                                    <p> RECEIPT NO: <b> B60510 </b> </p>
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
                                                <td> 1pcs </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> Paracetamol Tab </strong></td>
                                                <td> 300.00 </td>
                                            </tr>
                                            <tr>
                                                <td> 1pcs </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> Paracetamol Tab </strong></td>
                                                <td> 300.00 </td>
                                            </tr>
                                            <tr>
                                                <td> 1pcs </td>
                                                <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong> Paracetamol Tab </strong></td>
                                                <td> 300.00 </td>
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
                                        <span><?php echo date('l') ?>, <?php echo date('M') ?>, <?php echo date('Y') ?>. <?php echo date('h') ?> : <?php echo date('i') ?> : <?php echo date('s') ?></span>
                                    </div>
                                    <div class="info">
                                        <span> Cashier </span>
                                        <span> Mubarak </span>
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
                                    <span><?php echo date('l') ?>, <?php echo date('M') ?>, <?php echo date('Y') ?>. <?php echo date('H') ?> : <?php echo date('i') ?> : <?php echo date('s') ?></span>
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
            <!-- / Content -->
            <script src="../assets/js/pages-account-settings-account.js"></script>

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>

