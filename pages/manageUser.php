<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<!-- Content wrapper -->
<div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Dashboard/</span> All Users </h4>

              
                <div class="col-xl">
                  <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between align-items-center">
                      <h5 class="mb-0"> Manage Users </h5>
                      <small class="text-muted float-end"> AL MISKEEN</small>
                    </div>
                  </div>
                </div>


              <div class="card">
                <div class="table-responsive text-nowrap">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th> Name </th>
                        <th> UserName </th>
                        <th> Image </th>
                        <th>Role</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                              <!-- Hoverable Table rows -->
                              <?php
                               $a=1;
                    $query=mysqli_query($conn,"select * from `user` ");
                     while($row=mysqli_fetch_array($query))
                        {
                          
                          ?>

                    <tbody class="table-border-bottom-0">
                      <tr>
                        <td><i class="fab fa-angular fa-lg text-danger"></i> <?php echo $a ?>. </td>
                        <td><?php echo $row["lastname"];?> <?php echo $row["firstname"];?></td>
                        <td> <strong>  <?php echo $row["username"];?>  </strong></td>
                        <td>
                          <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                            <li
                              data-bs-toggle="tooltip"
                              data-popup="tooltip-custom"
                              data-bs-placement="top"
                              class="avatar avatar-xs pull-up"
                              title="<?php echo $row["lastname"];?> <?php echo $row["firstname"];?>"
                            >
                              <img src="<?php echo $row["image"];?>" alt="<?php echo $row["lastname"];?>" class="rounded-circle" />
                            </li>
                            
                          </ul>
                        </td>
                        <td><span class="badge bg-label-primary me-1"> <?php echo $row["role"];?> </span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <button  class="dropdown-item" href="#"
                                    type="button"
                                    onclick="getData(<?php echo $row['id'];?>)"
                                ><i class="bx bx-edit-alt me-1"></i> view</button
                              >
                              <a class="dropdown-item" href="javascript:void(0);"
                                ><i class="bx bx-trash me-1"></i> Delete</a
                              >
                            </div>
                          </div>
                        </td>
                      </tr>
                            <?php 
                            $a++;
                        } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Hoverable Table rows -->

            </div>
</div>



            <!-- MyModal -->
            <div id="modal">
                <div id="modal-content">

                </div>
            </div>

 

            
<!-- FUNCTON TO DISPLAY USER MODAL -->





<script>
    var modal = document.getElementById('modal');
    function getData(id){
        var formData = new FormData();
        formData.append('id', id);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'data.php', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onload = ()=>{
            if (xhr.status === 200){
                try {
                    var data = JSON.parse(xhr.responseText);
                    displayDataModal(data)
                } catch (error) {
                  console.log("Error passing the data: " + error)
                  console.log('Response text: ' + xhr.statusText)  
                }
            }else{
                console.log('Error ' + xhr.status + ": " + xhr.statusText)
            }
        };
        xhr.onerror = ()=>{
            console.log('Error sending request')
        }
        xhr.send(formData);
    }

    const displayDataModal = (data) => {
      const { firstname, lastname, id } = data;
  
        modal.innerHTML = `<div class="articles">
        <div>
            <h4>${firstname}</h4>
            <p>
              ${lastname}
            </p>
          </div>
        </div>`;
        modal.style.display = "block";
    }
</script>
<script src="../assets/js/pages-account-settings-account.js"></script>

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>