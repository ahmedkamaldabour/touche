<!DOCTYPE html>
<html lang="en">
@include('EndUser.includes.head')
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
@include('EndUser.includes.navbar')
@yield('content')
@include('EndUser.partials.contact')
@include('EndUser.includes.footer')
</body>
</html>
