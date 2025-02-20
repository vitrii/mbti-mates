<!doctype html>
<html lang="en" data-bs-theme="bodered-theme">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MBTI-Mates</title>
    <!--favicon-->
    <link rel="icon" href="assets1/images/logo-custom.png" type="image/png">
    <!-- loader-->
    <link href="assets1/css/pace.min.css" rel="stylesheet">
    <script src="assets1/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets1/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets1/plugins/metismenu/metisMenu.min.css">
    <link rel="stylesheet" type="text/css" href="assets1/plugins/metismenu/mm-vertical.css">
    <link rel="stylesheet" type="text/css" href="assets1/plugins/simplebar/css/simplebar.css">
    <!--bootstrap css-->
    <link href="assets1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons+Outlined" rel="stylesheet">
    <!--main css-->
    <link href="assets1/css/bootstrap-extended.css" rel="stylesheet">
    <link href="sass/main.css" rel="stylesheet">
    <link href="sass/dark-theme.css" rel="stylesheet">
    <link href="sass/blue-theme.css" rel="stylesheet">
    <link href="sass/semi-dark.css" rel="stylesheet">
    <link href="sass/bordered-theme.css" rel="stylesheet">
    <link href="sass/responsive.css" rel="stylesheet">
    @yield('styles')
</head>

<body>

    <!--start header-->
    @include('layouts.author.navbar')
    <!--end top header-->


    <!--start sidebar-->
    @include('layouts.author.sidebar')
    <!--end sidebar-->

    <!--start main wrapper-->
    <main class="main-wrapper">
        <div class="main-content">
            @yield('content')
        </div>
    </main>
    <!--end main wrapper-->

    <!--start overlay-->
    <div class="overlay btn-toggle"></div>
    <!--end overlay-->


     <!--start footer-->
     <footer class="page-footer">
        <p class="mb-2"><strong>© Copyright MBTI-Mates</strong>. All Rights Reserved by Vitri</p>
    </footer>
    <!--end footer-->




    <!--start switcher-->
    <button class="btn btn-grd btn-grd-info position-fixed bottom-0 end-0 m-3 d-flex align-items-center gap-2"
        type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop">
        <i class="material-icons-outlined">tune</i>Tema
    </button>

    <div class="offcanvas offcanvas-end" data-bs-scroll="true" tabindex="-1" id="staticBackdrop">
        <div class="offcanvas-header border-bottom h-70">
            <div class="">
                <h5 class="mb-0">Theme Customizer</h5>
                <p class="mb-0">Pilih Tema Anda</p>
            </div>
            <a href="javascript:;" class="primaery-menu-close" data-bs-dismiss="offcanvas">
                <i class="material-icons-outlined">close</i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div>
                <p>Theme variation</p>

                <div class="row g-3">
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BlueTheme" checked>
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BlueTheme">
                            <span class="material-icons-outlined">contactless</span>
                            <span>Blue</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="LightTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="LightTheme">
                            <span class="material-icons-outlined">light_mode</span>
                            <span>Light</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="DarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="DarkTheme">
                            <span class="material-icons-outlined">dark_mode</span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="SemiDarkTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="SemiDarkTheme">
                            <span class="material-icons-outlined">contrast</span>
                            <span>Semi Dark</span>
                        </label>
                    </div>
                    <div class="col-12 col-xl-6">
                        <input type="radio" class="btn-check" name="theme-options" id="BoderedTheme">
                        <label
                            class="btn btn-outline-secondary d-flex flex-column gap-1 align-items-center justify-content-center p-4"
                            for="BoderedTheme">
                            <span class="material-icons-outlined">border_style</span>
                            <span>Bordered</span>
                        </label>
                    </div>
                </div>
                <!--end row-->

            </div>
        </div>
    </div>
    <!--start switcher-->

    <!--bootstrap js-->
    <script src="assets1/js/bootstrap.bundle.min.js"></script>

    <!--plugins-->
    <script src="assets1/js/jquery.min.js"></script>
    <!--plugins-->
    <script src="assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets1/plugins/metismenu/metisMenu.min.js"></script>
    <script src="assets1/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets1/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets1/plugins/peity/jquery.peity.min.js"></script>
    <script src="assets1/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets1/plugins/metismenu/metisMenu.min.js"></script>
    <script src="assets1/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="assets1/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(".data-attributes span").peity("donut")
    </script>
    <script src="assets1/js/main.js"></script>
    <script src="assets1/js/dashboard1.js"></script>
    <script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
   <script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
    </script>
    <script src="assets1/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="asets/js/main.js"></script>
    @stack('scripts')
    {{-- @include('sweetalert::alert') --}}
</body>

</html>