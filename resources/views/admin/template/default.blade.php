<!DOCTYPE html>
<html>

  @include('admin.template.partial.head');

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
@include('admin.template.partial.header');
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 @include('admin.template.partial.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{ Breadcrumbs::current()->title}}
          </div><!-- /.col -->
          <div class="col-sm-6">
           {{ Breadcrumbs::render() }}
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('admin.template.partial.footer');

  <!-- Control Sidebar -->
 @include('admin.template.partial.control');
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

@include('admin.template.partial.script');
</body>
</html>
