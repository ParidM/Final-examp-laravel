@extends('ordering.app')
@section('cart')
<div class="content-area">
    <div class="container">
        <div class="cart-page">
            <h2>Keranjang</h2>
            <form action="checkout.html">
                <table class="table">
                    @foreach ($carts as $item)
                    <thead>
                        <tr>
                            <th width="50%">Item</th>
                            <th width="10%">Jumlah</th>
                            <th width="20%">Harga Satuan</th>
                            <th width="20%">Total Harga</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>
                                <img src="{{url('images')}}/{{ $item->product->image }}" width="50" alt="" class="img img-thumbnail pull-left">
                                <span class="pull-left cart-product-option">

                                    <strong>{{ $item->product->name }}</strong><br />
                                    <td>{{ $item->jumlah }}</td>

                                </span>
                                <div class="clearfix"></div>
                            </td>
                           
                            <td>{{ $item->product->price }}</td>
                            <td><p class="total_ammount_p1">{{ $item->Jumlah_harga }}</p></td>
                        </tr>        
                                
                        </tbody>
                       
                         @endforeach
                        <tr>
                            <td></td>
                            <td colspan="1"><strong>Total:</strong></td>
                            <td></td>
                            <td>
                                <p><span class="total_product_sum">150000</span></p>
                            </td>
                            <div class="clearfix"></div>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <a href="{{route('jumlah')}}" class="btn btn-yellow btn-lg pull-right margin-bottom-20" > Continue to Check Out </a>
                                <a href="{{route('barang')}}" class="btn btn-success btn-lg pull-right margin-right-20">
                                    <i class="fa fa-plus"></i> Add More Products</a>

                                    <div class="clearfix"></div>
                                </td>
                            </tr>
                    </table>
                 
                </form>
            </div> <!--End Cart page-->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(document).ready(function(){
                
                    var product_price_p1 = 200;
                    var product_price_p2 = 300;
                    var total_product_sum = 0;

                    $('.product_quantity_p1, .product_quantity_p2').bind('keyup mouseup change click keydown focus', (function(){
                        
                        var quantity_p1 = $('.product_quantity_p1').val();
                        var quantity_p2 = $('.product_quantity_p2').val();

                        total_ammount_p1 = quantity_p1 * product_price_p1;
                        total_ammount_p2 = quantity_p2 * product_price_p2;

                        $('.total_product_sum').html(total_product_sum+"$");
                        $('.total_ammount_p1').html(total_ammount_p1+"$");
                        $('.total_ammount_p2').html(total_ammount_p2+"$");
                        total_product_sum = total_ammount_p1 + total_ammount_p2;
                        $('.total_product_sum').html(total_product_sum+"$");
                    }));
                });

            </script>
        </div> <!-- End Container inside Content Area -->
    </div> <!-- End content Area class -->

@endsection

