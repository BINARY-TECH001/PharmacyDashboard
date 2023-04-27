<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<style>
  .desc{
    font-size: 1em;
    line-height: 1.6em;
    letter-spacing: .6px;
    margin: 1.2em 0;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
  }
  .title{
    color: #000000;
    font-weight: 500;
    margin: 2em 0;
    letter-spacing: .5px;
    text-transform: uppercase;
  }
</style>
<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> Manage products </h4>

              
                <div class="col-xl">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"> Manage Products </h5>
                      <small class="text-muted float-end"> AL MISKEEN</small>
                    </div>


                    <div class="card-body">
                              <form>
                                  <div class="row form-group mb-3">
                                  <div class="col-lg-9">
                                    <label class="form-label" for="basic-icon-default-company">Filter Products</label>
                                      <div class="input-group input-group-merge">
                                        <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-sort-a-z"></i></span>
                                        <select id="defaultSelect" class="form-select">
                                          <option value="all"> All </option>
                                          <option value="tablet"> Depressants </option>
                                          <option value="lotion"> Hallucinogen </option>
                                          <option value="lotion"> Stimulants </option>
                                        </select>
                                      </div>
                                  </div>

                                  <div class="col-lg-3">
                                    <div class="d-grid gap-2 col-lg-10 mt-4 mx-auto">
                                  <button class="btn btn-primary btn-md" type="button"> Filter </button>
                                </div>
                                  </div>

                                </div>
                              </form>
                    </div>
                  </div>
                </div>
                      
                <?php
                                   $a=1;
                    $query=mysqli_query($conn,"select * from `products` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>
                <div class="row mb-3 flex wrap align-items-center justify-content-center">
                <div class="col-md col-lg wrap">
                  <div class="card mb-3 wrsp">
                    <div class="row g-0">
                      <div class="col-md-8">
                        <div class="card-body">
                          <h1 class="card-title"> <?php echo $row["productName"];?> </h1>
                          <p class="card-text desc"><?php echo $row["productDesc"];?>
                          </p>
                          <p class="card-text title"> Product Category: <span class="text-muted"><?php echo $row["productCategory"];?> </span></p>
                          <p class="card-text title"> Available Quantity: <span class="text-muted"><?php echo $row["productQuantity"];?> </span></p>
                          <p class="card-text title"> Price: <span class="text-muted"><?php echo $row["price"];?> </span></p>
                          <p class="card-text title"> Manufacture Date: <span class="text-muted"><?php echo $row["manufactureDate"];?> </span></p>
                          <p class="card-text title"> Expiry Date: <span class="text-muted"><?php echo $row["expiryDate"];?> </span></p>
                          <p class="card-text title"> Product Manufacturer: <span class="text-muted"><?php echo $row["manufacturer"];?> </span></p>
                          <!-- <p class="card-text title"> Price: <span class="text-muted"><?php echo $row["price"];?> </span></p> -->
                          <p class="card-text title"> Product Id: <span class="text-muted"><?php echo $row["productId"];?> </span></p>
                          <a href="edit.php?productId=<?php echo $row['productId']; ?>" class="card-link btn btn-primary"> Edit Product </a>
                          <a href="#" class="card-link btn btn-danger"> Delete Product </a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <img class="card-img card-img-right" src="<?php echo $row["image"];?>" alt="Card image" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php } ?>

              
 
 <?php require '../includes/dashboardFooter.php'; ?>
 <?php require '../includes/dashboardFooterFiles.php'; ?>
