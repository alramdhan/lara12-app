<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg navbar-sticky-top px-0 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container py-1 px-4 items-center">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                <li class="breadcrumb-item text-sm text-dark active text-capitalize" aria-current="page">{{ str_replace('-', ' ', Request::path()) }}</li>
            </ol>
            <h6 class="font-weight-bolder mb-0 text-capitalize">{{ str_replace('-', ' ', Request::path()) }}</h6>
        </nav>
        <div class="collapse navbar-collapse hidden md:flex md:flex-row flex-col mt-sm-0 mt-2 me-md-0 me-sm-4 justify-content-end"> 
            <div class="ms-md-3 pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item flex align-items-center">
                    <a href="{{ route('logout')}}" class="nav-link text-body font-weight-bold px-0">
                        <i class="fa-solid fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign Out</span>
                    </a>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="#" class="nav-link text-body p-0" id="iconNavbarSidenav">
                    <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                    </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

@push('navbar')
<script type="module">
    $(function() {
        $(document).scroll(function() {
            var $nav = $('.navbar-sticky-top');
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
</script>
@endpush
<!-- End Navbar -->