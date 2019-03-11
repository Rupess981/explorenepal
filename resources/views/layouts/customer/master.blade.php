
@php $category = \App\Classes\Helper::getcategory(); @endphp

@foreach($category as $cat)
<div class="product">
    <div class="product-micro">
        <div class="row product-micro-row">
            <div class="col col-xs-5">
                <div class="product-image">
                    <div class="image"> <a href="home.html#"> <img src="assets/images/products/p30.jpg" alt=""> </a> </div>
                    <!-- /.image -->

                </div>
                <!-- /.product-image -->
            </div>
            <!-- /.col -->
            <div class="col col-xs-7">
                <div class="product-info">
                    <h3 class="name"><a href="home.html#">{{ $cat->name }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="product-price"> <span class="price"> $450.99 </span> </div>
                    <!-- /.product-price -->

                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.product-micro-row -->
    </div>
    <!-- /.product-micro -->

</div>


@endforeach