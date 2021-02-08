<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Donnelworks | {{ $judul }}</title>

    <!-- CSS File -->
    @include('_parts/_style')
    <!-- /CSS File -->

  </head>

  <body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

      <!-- Navbar -->
      @include('_parts/_navbar')
      <!-- /Navbar -->

      <!-- Sidebar -->
      @include('_parts/_sidebar')
      <!-- /Sidebar -->

      <!-- Content -->
      @yield('content')
      <!-- /Content -->

      <!-- Footer -->
      @include('_parts/_footer')
      <!-- /Footer -->

    </div>
    <!-- /wrapper -->

    <!-- Script File -->
    @include('_parts/_script')
    <!-- /Script File -->

    <!-- Document Script -->
    @yield('script')
    <!-- /Document Script -->

  </body>
</html>
