@extends('user.layouts.applayout')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="row">
                    <div class="product-view wow">
                        <div class="product-essential">
                            <form action="#" method="post" id="product_addtocart_form">
                                <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                    <ul class="moreview" id="moreview">
                                        <li class="moreview_thumb thumb_1">
                                            <img class="moreview_thumb_image" src="{{ url($product->url) }}">
                                            <img class="moreview_source_image" src="{{ url($product->url) }}" alt="">
                                            <span class="roll-over">Roll over image to zoom in</span>
                                            <img style="position: absolute;" class="zoomImg" src="{{ url($product->url) }}"></li>
                                        <li class="moreview_thumb thumb_2 moreview_thumb_active"> <img class="moreview_thumb_image" src="products-images/product4.jpg"> <img class="moreview_source_image" src="products-images/product4.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="images/product4.html"></li>
                                        <li class="moreview_thumb thumb_3"> <img class="moreview_thumb_image" src="products-images/product5.jpg"> <img class="moreview_source_image" src="products-images/product5.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product5.jpg"></li>
                                        <li class="moreview_thumb thumb_4"> <img class="moreview_thumb_image" src="products-images/product6.jpg"> <img class="moreview_source_image" src="products-images/product6.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product6.jpg"></li>
                                        <li class="moreview_thumb thumb_5"> <img class="moreview_thumb_image" src="products-images/product7.jpg"> <img class="moreview_source_image" src="products-images/product7.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product7.jpg"></li>
                                        <li class="moreview_thumb thumb_6"> <img class="moreview_thumb_image" src="products-images/product8.jpg"> <img class="moreview_source_image" src="products-images/product8.jpg" alt=""> <span class="roll-over">Roll over image to zoom in</span> <img style="position: absolute;" class="zoomImg" src="products-images/product8.jpg"></li>

                                    </ul>
                                    <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
                                </div>

                                <!-- end: more-images -->

                                <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                                    {{--<div class="product-next-prev"> <a class="product-next" href="#"><span></span></a> <a class="product-prev" href="#"><span></span></a> </div>--}}
                                    <div class="product-name">
                                        <h1>{{ $product->name }}</h1>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <div style="width:{{ $product->score }}%" class="rating"></div>
                                        </div>
                                        <p class="rating-links"> <a href="#">{{ $product->ratings()->count() }} Rating(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p>
                                    </div>
                                    <p class="availability in-stock"><span>In Stock</span></p>
                                    <div class="price-block">
                                        <div class="price-box">
                                            @if($product->price_sale != Null)
                                                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> {{ $product->price }} </span> </p>
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{ $product->price_sale }} </span> </p>
                                            @else
                                                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> {{ $product->price }} </span> </p>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="short-description" style="padding-bottom: 15px; border-bottom: 1px #ddd dashed; margin-bottom: 15px;">
                                        {{--<h2>Quick Overview</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu.<br>
                                            Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt... </p>--}}
                                        <table class="table-data-sheet col" style="width: 100%;">
                                            <tbody>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >From country</span></td>
                                                <td style="font-size: 15px">{{ $product->country }}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Volume</span></td>
                                                <td style="font-size: 15px">{{ $product->volume }}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Vintage</span></td>
                                                <td style="font-size: 15px">{{ $product->vintage }}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Age of wine</span></td>
                                                <td style="font-size: 15px">{{ $product->age }}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Alcohol</span></td>
                                                <td style="font-size: 15px">{{ $product->alcohol }}</td>
                                            </tr>
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Material</span></td>
                                                <td style="font-size: 15px">{{ $product->material }}</td>
                                            </tr>
                                            @if($product->sale_detail != Null)
                                            <tr class="odd">
                                                <td style="width: 40%"><span style="font-size: 15px; font-weight: bold; color: #777" >Sale content</span></td>
                                                <td style="font-size: 15px">{{ $product->sale_detail }}</td>
                                            </tr>
                                            @endif
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="add-to-box">
                                        <div class="add-to-cart">
                                            <label for="qty">Quantity:</label>
                                            <div class="pull-left">
                                                <div class="custom pull-left">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button"><i class="icon-plus">&nbsp;</i></button>
                                                    <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                    <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><i class="icon-minus">&nbsp;</i></button>
                                                </div>
                                            </div>
                                            <button onClick="productAddToCartForm.submit(this)" class="button btn-cart" title="Add to Cart" type="button"><span><i class="icon-basket"></i> Add to Cart</span></button>
                                        </div>
                                        <div class="email-addto-box">
                                            <ul class="add-to-links">
                                                <li> <a class="link-wishlist" href="#"><span>{{ trans('user/label.add_wishlist') }}</span></a></li>
                                                <li><span class="separator">|</span> <a class="link-compare" href="#"><span>{{ trans('user/label.add_compare') }}</span></a></li>
                                            </ul>
                                            <p class="email-friend"><a href="#" class=""><span>{{ trans('user/label.email_to_friend') }}</span></a></p>
                                        </div>
                                    </div>
                                    <div class="custom-box"><img alt="banner" src="{{ url($product->brand->url) }}"></div>
                                </div>
                            </form>
                        </div>
                        <div class="product-collateral">
                            <div class="col-sm-12 wow">
                                <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                    <li class="active"> <a href="#product_tabs_description" data-toggle="tab"> {{ trans('user/label.product_description') }} </a> </li>
                                    <li><a href="#product_tabs_tags" data-toggle="tab">{{ trans('user/label.tags') }}</a></li>
                                    <li> <a href="#reviews_tabs" data-toggle="tab">{{ trans('user/label.reviews') }}</a> </li>
                                </ul>
                                <div id="productTabContent" class="tab-content">
                                    <div class="tab-pane fade in active" id="product_tabs_description">
                                        {!!  $product->description !!}
                                    </div>
                                    <div class="tab-pane fade" id="product_tabs_tags">
                                        <div class="box-collateral box-tags">
                                            <div class="tags">
                                                <form id="addTagForm" action="#" method="get">
                                                    <div class="form-add-tags">
                                                        <label for="productTagName">{{ trans('user/label.add_tags') }}</label>
                                                        <div class="input-box">
                                                            <input class="input-text required-entry" name="productTagName" id="productTagName" type="text" style="width:35%;">
                                                            <button type="button" title="Add Tags" class=" button btn-add" onClick="submitTagForm()"> <span>Add Tags</span> </button>
                                                        </div>
                                                        <!--input-box-->
                                                    </div>
                                                </form>
                                            </div>
                                            <!--tags-->
                                            <p class="note">Use spaces to separate tags. Use single quotes (') for phrases.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="reviews_tabs">
                                        <div class="box-collateral box-reviews" id="customer-reviews">
                                            <div class="box-reviews1">
                                                <div class="form-add">
                                                        {!! Form::open(['action' => ['User\RatingController@store'], 'id' => 'review-form']) !!}
                                                        <h3>{{ trans('user/label.write_review') }}</h3>
                                                            {!! Form::hidden('product_id', $product->id) !!}
                                                            {!! Form::hidden('customer_id', Auth::id()) !!}

                                                        <fieldset>
                                                            <h4>{{ trans('user/label.question_rate') }}<em class="required">*</em></h4>
                                                            <span id="input-message-box"></span>
                                                            <table id="product-review-table" class="data-table">
                                                                <colgroup>
                                                                    <col>
                                                                    <col width="1">
                                                                    <col width="1">
                                                                    <col width="1">
                                                                    <col width="1">
                                                                    <col width="1">
                                                                </colgroup>
                                                                <thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 *</span></th>
                                                                    <th><span class="nobr">2 *</span></th>
                                                                    <th><span class="nobr">3 *</span></th>
                                                                    <th><span class="nobr">4 *</span></th>
                                                                    <th><span class="nobr">5 *</span></th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                                                                <tr class="first odd">
                                                                    <th>Score</th>
                                                                    <td class="value"><input type="radio" class="radio" value="1" id="Price_1" name="score"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="2" id="Price_2" name="score"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="3" id="Price_3" name="score"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="4" id="Price_4" name="score"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="5" id="Price_5" name="score"></td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                            <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                            <div class="review2">
                                                                <div class="buttons-set">
                                                                    <button class="button submit" title="Submit Review" type="submit"><span>{{ trans('user/label.submit_review') }}</span></button>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        {!! Form::close() !!}
                                                </div>
                                            </div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="box-additional">
                                    <div class="related-pro wow">
                                        <div class="slider-items-products">
                                            <div class="new_title center">
                                                <h2>{{ trans('user/label.sameCategory') }}</h2>
                                            </div>
                                            <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                                <div class="slider-items slider-width-col4">
                                                    @foreach($same_category as $item)
                                                    <!-- Item -->
                                                    <div class="item" style="padding-bottom: 10px">
                                                        <div class="col-item">
                                                            @if( $item->price_sale !== NULL )
                                                                <div class="sale-label sale-top-right">{{ trans('user/label.sale') }}</div>
                                                            @endif
                                                                <div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ url($item->url) }}" class="img-responsive" alt="a" /> </a>
                                                                    <div class="actions">
                                                                        <div class="actions-inner">
                                                                            <ul class="add-to-links">
                                                                                <li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>{{ trans('user/label.add_wishlist') }}</span></a></li>
                                                                                <li><a href="compare.html" title="Add to Compare" class="link-compare "><span>{{ trans('user/label.add_compare') }}</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>{{ trans('user/label.quick_view') }}</span></span></a> </div>
                                                                </div>
                                                                <div class="info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> {{ $item->name }} </a> </div>
                                                                        <!--item-title-->
                                                                        <div class="item-content">
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div style="width:{{ $item->score }}%" class="rating"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                @if( $item->price_sale !== NULL )
                                                                                    <p class="special-price"> <span class="price"> {{ $item->price_sale }} </span> </p>
                                                                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> {{ $item->price }} </span> </p>
                                                                                @else
                                                                                    <p class="special-price"> <span class="price"> {{ $item->price }} </span> </p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <!--item-content-->
                                                                    </div>
                                                                    <!--info-inner-->
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart"><span>{{ trans('user/label.add_cart') }}</span></button>
                                                                    </div>
                                                                    <!--actions-->
                                                                    <div class="clearfix"> </div>
                                                                </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Item -->
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="upsell-pro wow">
                                        <div class="slider-items-products">
                                            <div class="new_title center">
                                                <h2>{{ trans('user/label.sameBrand') }}</h2>
                                            </div>
                                            <div id="upsell-products-slider" class="product-flexslider hidden-buttons">
                                                <div class="slider-items slider-width-col4">
                                                @foreach($same_brand as $item)
                                                    <!-- Item -->
                                                        <div class="item">
                                                            <div class="col-item">
                                                                @if( $item->price_sale !== NULL )
                                                                    <div class="sale-label sale-top-right">{{ trans('user/label.sale') }}</div>
                                                                @endif
                                                                <div class="images-container"> <a class="product-image" title="Sample Product" href="product_detail.html"> <img src="{{ url($item->url) }}" class="img-responsive" alt="a" /> </a>
                                                                    <div class="actions">
                                                                        <div class="actions-inner">
                                                                            <ul class="add-to-links">
                                                                                <li><a href="wishlist.html" title="Add to Wishlist" class="link-wishlist"><span>{{ trans('user/label.add_wishlist') }}</span></a></li>
                                                                                <li><a href="compare.html" title="Add to Compare" class="link-compare "><span>{{ trans('user/label.add_compare') }}</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="qv-button-container"> <a href="quick_view.html" class="qv-e-button btn-quickview-1"><span><span>{{ trans('user/label.quick_view') }}</span></span></a> </div>
                                                                </div>
                                                                <div class="info">
                                                                    <div class="info-inner">
                                                                        <div class="item-title"> <a title=" Sample Product" href="product_detail.html"> {{ $item->name }} </a> </div>
                                                                        <!--item-title-->
                                                                        <div class="item-content">
                                                                            <div class="ratings">
                                                                                <div class="rating-box">
                                                                                    <div style="width:{{ $item->score }}%" class="rating"></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="price-box">
                                                                                @if( $item->price_sale !== NULL )
                                                                                    <p class="special-price"> <span class="price"> {{ $item->price_sale }} </span> </p>
                                                                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> {{ $item->price }} </span> </p>
                                                                                @else
                                                                                    <p class="special-price"> <span class="price"> {{ $item->price }} </span> </p>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                        <!--item-content-->
                                                                    </div>
                                                                    <!--info-inner-->
                                                                    <div class="actions">
                                                                        <button type="button" title="Add to Cart" class="button btn-cart"><span>{{ trans('user/label.add_cart') }}</span></button>
                                                                    </div>
                                                                    <!--actions-->
                                                                    <div class="clearfix"> </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Item -->
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection