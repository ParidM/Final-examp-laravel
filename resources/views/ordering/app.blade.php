<!DOCTYPE html>
<html lang="en">
<head>
    @include('ordering.header')
</head>
<body>
  @include('ordering.navbar')
<!-- Header part  -->
@yield('carousel') <!-- End Main slider class -->
@yield('cart')
@yield('produk')
@yield('checkout')
@yield('product_single')
@yield('products') <!-- End Latest products -->
</div> <!-- End content Area class -->
@include('ordering.footer')
</body>
</html>