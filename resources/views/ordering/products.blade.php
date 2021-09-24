<!DOCTYPE html>
<html>
    <head>
        @include('ordering.header')
    </head>
<body>
    @include('ordering.navbar')
<!-- Header part  -->


<div class="content-area prodcuts">

    <div class="row">
        <div class="container">
            <div class="col-sm-2 col-md-2 col-lg-2">
                <div class="sidebar-products-main">

                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <a data-toggle="collapse"  class="pointer" aria-expanded="true" data-target="#brandCollapse" aria-controls="#brandCollapse">
                                <span class="pull-left title-sidebar">Filter By Brand</span>

                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <span class="pull-right"><i class="fa fa-minus"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div> <!--End Sidebar title div-->

                        <div id="brandCollapse" class="collapse in">
                            <form action="products_submit.php" method="get" accept-charset="utf-8">
                                <input type="search" name="brand_name" class="form-control" value="" placeholder="Type Brand Name" />

                                <input type="checkbox" id="c1" name="prodcut_id[]" />
                                <label for="c1"><span></span>T-Shirt</label><br />

                                <input type="checkbox" id="c2" name="prodcut_id[]" />
                                <label for="c2"><span></span>Pant</label><br />

                                <input type="checkbox" id="c3" name="prodcut_id[]" />
                                <label for="c3"><span></span>Genji</label><br />

                                <input type="checkbox" id="c4" name="prodcut_id[]" />
                                <label for="c4"><span></span>Full Shirt</label><br />

                                <input type="checkbox" id="c5" name="prodcut_id[]" />
                                <label for="c5"><span></span>Half Shirt</label><br />

                                <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div> <!--End Single Sidebar-->

                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#brandPriceCollapse" aria-controls="#brandPriceCollapse">
                                <span class="pull-left title-sidebar">Filter By Price</span>

                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <span class="pull-right"><i class="fa fa-minus"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div> <!--End Sidebar title div-->

                        <div id="brandPriceCollapse" class="collapse in">

                            <form action="products_submit.php" method="get" accept-charset="utf-8">

                                <input type="checkbox" id="price1" name="prodcut_price[]" />
                                <label for="price1"><span></span>0-100TK</label><br />

                                <input type="checkbox" id="price2" name="prodcut_price[]" />
                                <label for="price2"><span></span>100-500TK</label><br />

                                <input type="checkbox" id="price3" name="prodcut_price[]" />
                                <label for="price3"><span></span>500-1000TK</label><br />

                                <input type="checkbox" id="price4" name="prodcut_price[]" />
                                <label for="price4"><span></span>1000-2000TK</label><br />

                                <input type="checkbox" id="price5" name="prodcut_price[]" />
                                <label for="price5"><span></span>2000-500TK</label><br />

                                <input type="checkbox" id="price6" name="prodcut_price[]" />
                                <label for="price6"><span></span>5000-1000TK</label><br />

                                <input type="checkbox" id="price7" name="prodcut_price[]" />
                                <label for="price7"><span></span>10000-20000TK</label><br />

                                <input type="checkbox" id="price9" name="prodcut_price[]" />
                                <label for="price9"><span></span>20000-100000TK</label><br />

                                <input type="checkbox" id="price10" name="prodcut_price[]" />
                                <label for="price10"><span></span>100000- + TK</label><br />

                                <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div> <!--End Single Sidebar-->

                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productColorCollapse" aria-controls="#productColorCollapse">
                                <span class="pull-left title-sidebar">Filter By Color</span>

                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <span class="pull-right"><i class="fa fa-minus"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div> <!--End Sidebar title div-->

                        <div id="productColorCollapse" class="collapse in">

                            <form action="products_submit.php" method="get" accept-charset="utf-8">

                                <input type="checkbox" id="color0" name="prodcut_color[]" />
                                <label for="color0" style="color:#9c9"><span></span>White</label><br />

                                <input type="checkbox" id="color1" name="prodcut_color[]" />
                                <label for="color1" style="color:#f00"><span></span>Red</label><br />

                                <input type="checkbox" id="color2" name="prodcut_color[]" />
                                <label for="color2" style="color:#00f"><span></span>Blue</label><br />

                                <input type="checkbox" id="color3" name="prodcut_color[]" />
                                <label for="color3" style="color:#008000"><span></span>Green</label><br />

                                <input type="checkbox" id="color4" name="prodcut_color[]" />
                                <label for="color4" style="color:#ffc0cb"><span></span>Pink</label><br />

                                <input type="checkbox" id="color5" name="prodcut_color[]" />
                                <label for="color5" style="color:#ffd700"><span></span>Gold</label><br />

                                <input type="checkbox" id="color6" name="prodcut_color[]" />
                                <label for="color6" style="color:#ffa500"><span></span>Orange</label><br />

                                <input type="checkbox" id="color7" name="prodcut_color[]" />
                                <label for="color7" style="color:#ffa500"><span></span>Other</label><br />
                                <input type="name" id="color7" class="form-control" placeholder="Color name" name="prodcut_color[]" /><br />


                                <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div> <!--End Single Sidebar-->

                    <div class="sidebar-single">
                        <div class="sidebar-title">
                            <a data-toggle="collapse" class="pointer" aria-expanded="true" data-target="#productReviewCollapse" aria-controls="#productReviewCollapse">
                                <span class="pull-left title-sidebar">Filter By Review</span>

                                <span class="pull-right"><i class="fa fa-plus"></i></span>
                                <span class="pull-right"><i class="fa fa-minus"></i></span>
                                <div class="clearfix"></div>
                            </a>
                        </div> <!--End Sidebar title div-->

                        <div id="productReviewCollapse" class="collapse in">

                            <form action="products_submit.php" method="get" accept-charset="utf-8">

                                <input type="checkbox" id="review1" name="prodcut_review[]" />
                                <label for="review1" style="color:#008000"><span></span>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </label><br />
                                <input type="checkbox" id="review2" name="prodcut_review[]" />
                                <label for="review2" style="color:#6f6"><span></span>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </label><br />
                                <input type="checkbox" id="review3" name="prodcut_review[]" />
                                <label for="review3" style="color:#9c9"><span></span>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </label><br />
                                <input type="checkbox" id="review4" name="prodcut_review[]" />
                                <label for="review4" style="color:#f99"><span></span>
                                    <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </label><br />
                                <input type="checkbox" id="review5" name="prodcut_review[]" />
                                <label for="review5" style="color:#fc9"><span></span>
                                    <i class="fa fa-star"></i>
                                </label><br />


                                <input type="submit" name="submit_brand_search" class="btn btn-red pull-right btn-sm" value="Search">
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div> <!--End Single Sidebar-->
                    


                </div>
            </div>
            <div class="col-sm-10 col-md-10 col-lg-10">
                <ol class="breadcrumb breadcrumb1">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Products</li>
                </ol>
                <div class="product-top">
                    <h4>All Products</h4>
                    <ul> 
                        <li class="dropdown head-dpdn">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sort By<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Most Popular</a></li> 
                                <li><a href="#">New In</a></li> 
                                <li><a href="#">Lowest price</a></li> 
                                <li><a href="#">Highest price</a></li>
                                <li><a href="#">Best Rating</a></li>
                            </ul> 
                        </li>
                    </ul> 
                    <div class="clearfix"> </div>
                </div>
                <div class="all-products">
                    <div class="">
                        <h2 class="title-div wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">Our Latest Products available</h2>
                        <div class="products">
                            <div class="row">

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  



                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->  

                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product4.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->                 
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product1.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->                 
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product4.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->                 
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product2.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] -->                 
                                <div class="col-md-3">
                                    <div class="product-item">
                                        <div class="product-borde-inner">
                                            <a href="product_single.html">
                                                <img src="{{ asset('templateordering/images/product-slide/product3.png') }}" class="img img-responsive"/>
                                            </a> 

                                            <div class="product-price">
                                                <a href="product_single.html">DSLR Camera</a><br />
                                                <span class="prev-price">
                                                    <del>200$</del>
                                                </span>
                                                <span class="current-price">
                                                    150$
                                                </span>
                                            </div>

                                            <a href="cart.html"  class="btn btn-cart text-center add-to-cart pull-right">
                                                <i class="fa fa-cart-plus"></i>
                                                Add to cart
                                            </a>
                                            <div class="clear"></div>
                                        </div>
                                    </div> 
                                </div><!-- End Latest products[single] --> 

                                <div class="clear"></div>





                            </div> <!-- End Latest products row-->
                            <a class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                                <span>See More products.. </span>
                            </a>
                            <div class="clear"></div>
                        </div> <!-- End products div-->
                    </div> <!-- End container latest products-->
                </div>  <!-- End Latest products -->
            </div>
        </div>

    </div>


    <div class="services-area">
        <div class="services">
            <div class="container">
                <div class="ftr-toprow">
                    <div class="col-md-4 ftr-top-grids wow slideInLeft" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                        <div class="ftr-top-left pull-left">
                            <i class="fa fa-truck" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>FREE DELIVERY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="col-md-4 ftr-top-grids wow slideInUp" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                        <div class="ftr-top-left pull-left">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>CUSTOMER CARE</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div> 
                        <div class="clearfix"> </div>
                    </div>
                    <div class="col-md-4 ftr-top-grids wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10">
                        <div class="ftr-top-left pull-left">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div> 
                        <div class="ftr-top-right">
                            <h4>GOOD QUALITY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce tempus justo ac </p>
                        </div>
                        <div class="clearfix"> </div>
                    </div> 
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </div> <!-- End Service -->

</div> <!-- End content Area class -->


@include('ordering.footer')
</body>
</html>