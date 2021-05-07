<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>SecretFilmSchool | Administrator</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- ================== BEGIN BASE CSS STYLE ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{asset('admin/css/default/app.min.css')}}" rel="stylesheet" />
    <!-- ================== END BASE CSS STYLE ================== -->

    <link href="{{asset('admin/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
    <link href="{{asset('admin/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />

    @yield('custom_css')
</head>

<body>
<!-- begin #page-container -->
<div id="page-container" class="page-container  page-sidebar-fixed page-header-fixed">

    @include('admin.includes.header')

    @include('admin.includes.sidebar')

    <!-- begin #content -->
    <div id="content" class="content">
{{--        @include('admin.includes.breadcrumb')--}}
        @yield('content')
    </div>
    <!-- end #content -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
<!-- end page container -->

<!-- ================== BEGIN BASE JS ================== -->

<script src="{{asset('admin/js/app.min.js')}}" ></script>
<script src="{{asset('admin/js/theme/default.min.js')}}" ></script>
<!-- ================== END BASE JS ================== -->

<script src="{{asset('admin/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('admin/js/demo/table-manage-default.demo.js')}}"></script>

@yield('custom_js')
</body>
</html>
