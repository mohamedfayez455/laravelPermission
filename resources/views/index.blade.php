<!DOCTYPE html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>{{!empty($title)? $title : "Permission"}}</title>

    @include('includes.css')

</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper">


    @include('includes.navbar')

    @include('includes.aside')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 630.8px !important;">

        <section class="content">

            @include('includes.message')
            @yield('content')


        </section>


    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    @include('includes.footer')
</div>
<!-- ./wrapper -->

@include('includes.js')

</body>
</html>
