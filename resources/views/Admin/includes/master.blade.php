<!DOCTYPE html>
<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('AdminAssets')}}/assets/"
    data-template="vertical-menu-template-free"
>
@include('Admin.includes.head')

<body>

<!-- Menu -->
@include('Admin.includes.aside')
<!-- / Menu -->

<!-- Navbar -->
@include('Admin.includes.navbar')
<!-- / Navbar -->

<!-- Content -->
@yield('content')
<!-- / Content -->


@include('Admin.includes.footer')

</body>
</html>
