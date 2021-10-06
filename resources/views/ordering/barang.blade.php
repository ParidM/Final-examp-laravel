@extends('ordering.app')
@section('carousel')
    @include('ordering.carousel')
@endsection

@section('produk')
<div class="latest-products">
    <div class="container">
        <div class="products">
            <div class="row">
                
                <div class="col-md-3">
                    @foreach ($products as $item)
                    <div class="product-item">
                        <div class="product-borde-inner">
                           
                            <a href="{{ ('product_single') }}" {{ $loop->iteration }}>
                                <img src="{{url('images')}}/{{$item->image}}" class="img img-responsive"/>
                            </a> 
                            <div class="product-price">
                                <a href="{{ ('product_single') }}">{{$item->name}}</a><br />
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <span class="current-price">
                                   Rp. {{$item->price}}
                                </span>
                            </div>

                            {{-- <a href="{{ ('cart') }}"  class="btn btn-cart text-center add-to-cart pull-right"> --}}
                                <a href="{{route('add_cart', ['id' => $item->id, 'qty' => 3])}}"  class="btn btn-cart text-center add-to-cart pull-right">
                                <i class="fa fa-cart-plus"></i>
                                Simpan
                            </a>
                           
                            <div class="clearfix"></div>
                          
                           
                        </div>
                    </div> 
                    @endforeach
                </div><!-- End Latest products[single] -->  
               
            <div class="clearfix"></div>
        </div> <!-- End Latest products row-->
            <a href="{{ ('products') }}" class="btn btn-blue btn-lg pull-right btn-more wow slideInRight" data-wow-duration="1s" data-wow-delay="0s" data-wow-offset="10"> 
                <span>See More products.. </span>
            </a>
            <div class="clear"></div>
        </div> <!-- End products div-->
    </div> <!-- End container latest products-->
</div> 
@endsection