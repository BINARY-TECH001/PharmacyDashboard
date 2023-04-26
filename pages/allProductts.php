<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<style>
  .desc{
    font-size: 1em;
    color: var(--textColor);
    line-height: 1.6em;
    letter-spacing: .6px;
    margin-top: .6em;
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 4;
    -webkit-box-orient: vertical;
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
                          <h5 class="card-title"> <?php echo $row["productName"];?> </h5>
                          <p class="card-text desc"><?php echo $row["productDesc"];?>
                          </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                          <p class="card-text">Pro: <small class="text-muted">Last updated 3 mins ago</small></p>
                          <!-- <a href="orderProduct.php?id=<?php echo $row['id']; ?>" class="card-link btn btn-success"> Make Order Now </a> -->
                          <a href="edit.php?id=<?php echo $row['id']; ?>" class="card-link btn btn-primary"> Edit Product </a>
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
