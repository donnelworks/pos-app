
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Donnelworks | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.css') }}">
</head>
<body class="hold-transition">

  <div class="login-page">
    <div class="col-xl-8 col-11">
      <div class="card-group shadow-lg">
        <div class="card p-2 bg-primary d-md-block d-none">
          <img class="brand-image m-2" style="width: 30%" src="{{ asset('assets/dist/img/logo-name.svg') }}">
          <div class="text-center">
            <img class="img-fluid" style="width: 80%" src="{{ asset('assets/dist/img/illust/login.svg') }}">
          </div>
        </div>

        <div class="card p-4">
          <div class="card-body">
            <div class="text-center d-sm-block d-md-none">
              <img class="brand-image mb-5" style="width: 70%" src="{{ asset('assets/dist/img/logo-name-color.svg') }}">
            </div>
            <h3 class="text-navy"><b>Selamat Datang!</b></h3>
            <p class="text-muted">Silahkan Login</p>
            <hr>
            <form id="formLogin">
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email">
              </div>
              <div class="input-group mb-3">
                <input type="password" class="form-control" placeholder="Password">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="remember">
                    <label for="remember" class="text-muted">
                      Remember Me
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <button type="submit" class="btn btn-primary btn-block shadow">Login</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

<script type="text/javascript">
  $(document).ready(function() {

    $.ajax({
    })
  })
</script>
</body>
</html>
