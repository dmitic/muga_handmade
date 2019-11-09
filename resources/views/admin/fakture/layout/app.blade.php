@include('admin.includes.head')
<div id="wrapper">

  @include('admin.includes.navbar')

  <div id="page-wrapper">

    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
        <div class="col-lg-12">

          @yield('page-header')

          @section('content')
          @show
        </div>
        <!-- /.row -->
      </div>
    </div>
    <!-- /.container-fluid -->
  </div>

@include('admin.includes.footer')