<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- End layout styles -->
    <link rel="icon" type="image/png" href="data:image/png;base64,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"/>
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                <form>
                  <div class="form-group">
                    <label>Email *</label>
                    <input type="email" class="form-control p_input" required>
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input type="text" class="form-control p_input" required>
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-facebook mr-2 col">
                      <i class="mdi mdi-facebook"></i> Facebook </button>
                    <button class="btn btn-google col">
                      <i class="mdi mdi-google-plus"></i> Google plus </button>
                  </div>
                  <p class="sign-up">Don't have an Account?<a href="/register"> Sign Up</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../assets/js/off-canvas.js"></script>
    <script src="../../assets/js/hoverable-collapse.js"></script>
    <script src="../../assets/js/misc.js"></script>
    <script src="../../assets/js/settings.js"></script>
    <script src="../../assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
