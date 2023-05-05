<?php require '../includes/navMenu.php'; ?>

<?php require '../includes/navbar.php'; ?>

<link rel="stylesheet" href="../assets/css/modal.css">

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
        const { firstname, role, lastname, id, image, email, country, state, username, address, number } = data;
        
        modal.innerHTML = `<div class="modalCon">
        <div class="modal-content">
        <div class="imageCon">
        <img src=${image} alt="User Image">
        </div>
        
        <div class="userInfo">
          <div class="info">
            <p> <strong>FullName:</strong> ${lastname} ${firstname}</p>
            <p> <strong>Username:</strong> ${username} </p>
          </div>

          <div class="info">
            <p> <strong>Email:</strong> ${email} </p>     
            <p> <strong>number:</strong> ${number} </p>  
          </div>

          <div class="info">
            <p> <strong>Address:</strong> ${address} </p>  
            <p> <strong>country:</strong> ${country} </p>
          </div>

          <div class="info">
            <p> <strong>state:</strong> ${state} </p>
            <p> <strong>role:</strong> ${role} </p>
    
          </div>

            
            <div class="buttonCon">
                  <button type="button" onclick="closeModal()" class="btn btn-primary">
                    Close
                  </button>
            </div>
          </div>
          
        </div>

        `;
        modal.style.visibility = "visible";
    }

    function closeModal(){
      modal.style.visibility = "hidden";
    }
</script>
<script src="../assets/js/pages-account-settings-account.js"></script>

<?php require '../includes/dashboardFooter.php'; ?>
<?php require '../includes/dashboardFooterFiles.php'; ?>

