<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Responsive HTML Admin Dashboard Template based on Bootstrap 5">
    <meta name="author" content="NobleUI">
    <meta name="keywords"
        content="nobleui, bootstrap, bootstrap 5, bootstrap5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <title>Admin Panel- Resto</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <!-- End fonts -->

    <!-- core:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/core/core.css') }}">
    <!-- endinject -->

{{-- data tabel --}}
<link
    rel="stylesheet"
    href="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.css') }}">
    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('backend/assets/fonts/feather-font/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <!-- endinject -->

    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('backend/assets/css/demo2/style.css') }}">
    <!-- End layout styles -->

    <link rel="shortcut icon" href="{{ asset('backend/assets/images/favicon.png') }}" />
</head>

<body>
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.body.sidebar')
        <!-- partial -->

        <div class="page-wrapper">

            <!-- partial:partials/_navbar.html -->
            @include('admin.body.header')
            <!-- partial -->

            @yield('admin')

            <!-- partial:partials/_footer.html -->
            @include('admin.body.footer')
            <!-- partial -->

        </div>
    </div>

    {{-- data table --}}
    <script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
        {{-- end data table --}}

    <!-- core:js -->
    <script src="{{ asset('backend/assets/vendors/core/core.js') }}"></script>
    <!-- endinject -->

    <!-- Plugin js for this page -->
    <script src="{{ asset('backend/assets/vendors/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/inputmask/jquery.inputmask.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/select2/select2.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/jquery-tags-input/jquery.tagsinput.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/dropzone/dropzone.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/dropify/dist/dropify.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/pickr/pickr.min.js') }}"></script>
	<script src="{{ asset('backend/assets/vendors/moment/moment.min.js') }}"></script>
    <!-- End plugin js for this page -->

    <!-- inject:js -->
    <script src="{{ asset('backend/assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/template.js') }}"></script>
    <!-- endinject -->

    <!-- Custom js for this page -->
    <script src="{{ asset('backend/assets/js/dashboard-dark.js') }}"></script>
    <script src="{{ asset('backend/assets/js/data-table.js') }}"></script>
    <script src="{{ asset('backend/assets/vendors/datatables.net-bs5/dataTables.bootstrap5.js') }}"></script>

    <script src="{{ asset('backend/assets/js/bootstrap-maxlength.js') }}"></script>
	<script src="{{ asset('backend/assets/js/inputmask.js') }}"></script>
	<script src="{{ asset('backend/assets/js/select2.js') }}"></script>
	<script src="{{ asset('backend/assets/js/typeahead.js') }}"></script>
	<script src="{{ asset('backend/assets/js/tags-input.js') }}"></script>
	<script src="{{ asset('backend/assets/js/dropzone.js') }}"></script>
	<script src="{{ asset('backend/assets/js/dropify.js') }}"></script>
    <!-- End custom js for this page -->

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>

</html>
