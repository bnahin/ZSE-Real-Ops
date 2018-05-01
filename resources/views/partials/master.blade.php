<html lang="en">

<head>
    @include('partials.header')
</head>
<body>
<header id="header">

    <div id="logo">
        <img src="{{ url('images/logo.png') }}">
    </div>
</header>
<main>
    <div class="container" id="main-container">
        <div class="row">
            <img src="https://zseartcc.org/public/images/seattle_pics/Seattle_edit.png" id="banner">
            <div class="col-md-4 page-section" id="sidebar">
                @include('partials.sidebar')
            </div>
            <div class="col-md-8 page-section" id="main-content">
                @yield('page-content')
            </div>
        </div>
    </div>
</main>
@include('partials.footer')
</body>

</html>