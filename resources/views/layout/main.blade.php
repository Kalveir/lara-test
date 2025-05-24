<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('/assets/images/favicon.svg') }}" type="image/x-icon">

    <!-- font css -->
    <link rel="stylesheet" href="{{ asset('/assets/fonts/font-awsome-pro/css/pro.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/fonts/fontawesome.css') }}">

    <!-- vendor css -->
    <link rel="stylesheet" href="{{ asset('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/assets/css/customizer.css') }}">

</head>

<body class="">
	<!-- [ Pre-loader ] start -->
	<div class="loader-bg">
		<div class="loader-track">
			<div class="loader-fill"></div>
		</div>
	</div>
	<!-- [ Pre-loader ] End -->
	<!-- [ Mobile header ] start -->
	@include('layout.navbar')
	<!-- [ Mobile header ] End -->

	<!-- [ navigation menu ] start -->
	@include('layout.sidebar')
	<!-- [ navigation menu ] end -->
	<!-- [ Header ] start -->
	@include('layout.header')
	<!-- [ Header ] end -->

<!-- [ Main Content ] start -->
<div class="pc-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="page-header-title">
                            <h5 class="m-b-10">@yield('judul')</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item">@yield('nav')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        @yield('content')
        <!-- [ Main Content ] end -->
    </div>
    <x-notification />
</div>
<!-- [ Main Content ] end -->
</div>
@include('layout.script')
</body>

</html>

