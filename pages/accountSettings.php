<!-- Functions -->
<?php require "../app/functions.php" ?>

<!-- Sidebar Menu Starts -->
<?php require_once '../includes/navMenu.php'; ?>
<!-- Sidebar Menu Ends -->

<!-- Navbar Starts -->
<?php require '../includes/navbar.php'; ?>
<!-- Navbar Ends -->

<!-- Contents starts -->

<?php update_user(); ?>
<?php require '../includes/accountSettingsContents.php'; ?>

            <div class="content-backdrop fade"></div>
            
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
<?php require "../includes/dashboardFooterFiles.php" ?>
    


    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/pages-account-settings-account.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
