<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Add New Product</h4>

              
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"> Add a new product </h5>
                      <small class="text-muted float-end"> Al-Miskeen Store </small>
                    </div>

                    <div class="card-body">
                      <form>
                        <div class="row form-group mb-3">
                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Name</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-package"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Paracetamol"
                                aria-label="Paracetamol"
                                aria-describedby="basic-icon-default-fullname2"
                                autofocus
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product category</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                <select id="defaultSelect" class="form-select">
                                  <option>Choose category</option>
                                  <option value="tablet">Tablet</option>
                                  <option value="lotion">Lotion</option>
                                  <!-- <option value="3"></option> -->
                                </select>
                              </div>
                          </div>
                        </div>

                        <div class="row form-group mb-3">
                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname">Product Quantity</label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-layer"></i
                              ></span>
                              <input
                                type="number"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="12pcs"
                                aria-label="12pcs"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                            <div class="form-text">Include the measuring units. i.e cm, litres,dozens,bags...</div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company">Product Price</label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-dollar"></i></span>
                                <input
                                type="number"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="#000.00"
                                aria-label="price"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              </div>
                            <div class="form-text">Include the price according to the quantity measurement provided.</div>
                          </div>
                        </div>

                        <div class="row form-group mb-3">
                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname"> Manufacturing Date </label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-calendar"></i
                              ></span>
                              <input
                                type="date"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Manufactured Date"
                                aria-label="Manufactured Date"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company"> Expiry Date </label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-calendar-minus"></i></span>
                                <input
                                type="date"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Expiry Date"
                                aria-label="Expiry Date"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              </div>
                          </div>
                        </div>

                        <div class="mb-3">
                        <div class="row form-group mb-3">
                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-fullname"> Manufacturer </label>
                            <div class="input-group input-group-merge">
                              <span id="basic-icon-default-fullname2" class="input-group-text"
                                ><i class="bx bx-buildings"></i
                              ></span>
                              <input
                                type="text"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                placeholder="Produced by:"
                                aria-label="Produced by:"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                            </div>
                          </div>

                          <div class="col-lg-6">
                            <label class="form-label" for="basic-icon-default-company"> Product Image </label>
                              <div class="input-group input-group-merge">
                                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-file"></i></span>
                                <input
                                type="file"
                                class="form-control"
                                id="basic-icon-default-fullname"
                                aria-describedby="basic-icon-default-fullname2"
                              />
                              </div>
                          </div>
                        </div>

                        <div class="mb-3">
                          <label class="form-label" for="basic-icon-default-message">Product Description</label>
                          <div class="input-group input-group-merge">
                            <span id="basic-icon-default-message2" class="input-group-text"
                              ><i class="bx bx-detail"></i
                            ></span>
                            <textarea
                              id="basic-icon-default-message"
                              class="form-control"
                              placeholder="Enter the description of the product in details"
                              aria-label="Enter the description of the product in details"
                              aria-describedby="basic-icon-default-message2"
                              rows="5"
                            ></textarea>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Product</button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>