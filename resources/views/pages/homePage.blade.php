 @extends('layout.master')
 @section('homepage')
     <div class="fullwidthbanner-container">
         <div class="fullwidthbanner">
             <div class="bannercontainer">
                 <div class="banner">
                     <ul>
                         <!-- THE FIRST SLIDE -->
						 @foreach ($slides as $slide)
                         <li data-transition="boxfade" data-slotamount="20" class="active-revslide"
                             style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                             <div class="slotholder" style="width:100%;height:100%;" data-duration="undefined"
                                 data-zoomstart="undefined" data-zoomend="undefined" data-rotationstart="undefined"
                                 data-rotationend="undefined" data-ease="undefined" data-bgpositionend="undefined"
                                 data-bgposition="undefined" data-kenburns="undefined" data-easeme="undefined"
                                 data-bgfit="undefined" data-bgfitend="undefined" data-owidth="undefined"
                                 data-oheight="undefined">
                                 <div class="tp-bgimg defaultimg" data-lazyload="undefined" data-bgfit="cover"
                                     data-bgposition="center center" data-bgrepeat="no-repeat" data-lazydone="undefined"
                                     src="/source/image/slide/{{$slide->img}}"
                                     data-src="/source/image/slide/{{$slide->img}}"
                                     style="background-color: rgba(0, 0, 0, 0); background-repeat: no-repeat; background-image: url('/source/image/slide/{{$slide->img}}'); background-size: cover; background-position: center center; width: 100%; height: 100%; opacity: 1; visibility: inherit;">
                                 </div>
                             </div>
                         </li>
						 @endforeach
                     </ul>
                 </div>
             </div>
             <div class="tp-bannertimer"></div>
         </div>
         <!--slider-->
     </div>
     <div class="container">
         <div id="content" class="space-top-none">
             <div class="main-content">
                 <div class="space60">&nbsp;</div>
                 <div class="row">
                     <div class="col-sm-12">
                         <div class="beta-products-list">
                             <h4>New Bakeries</h4>
                             <div class="beta-products-details">
                                 <p class="pull-left">{{ count($newBakeryList) }} cake(s) were found.</p>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="row">
                                 @foreach ($newBakeryList as $bakery)
                                     <div class="col-3">
                                         <div class="single-item">
                                             <div class="ribbon-wrapper">
                                                 <div class="ribbon sale">Sale</div>
                                             </div>
                                             <div class="single-item-header">
                                                 <a href="product.html"><img
                                                         src="/source/image/product/{{ $bakery->img }}" alt=""
                                                         style="width: 15rem; height: 15rem; object-fit: cover; object-position: 50% 50%"></a>
                                             </div>
                                             <div class="single-item-body">
                                                 <p class="single-item-title">{{ $bakery->name }}</p>
                                                 <p class="single-item-price">
                                                     {{-- <span class="flash-del">$34.55</span> --}}
                                                     <span class="flash-sale">${{ $bakery->price }}</span>
                                                 </p>
                                             </div>
                                             <div class="single-item-caption">
                                                 <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                         class="fa fa-shopping-cart"></i></a>
                                                 <a class="beta-btn primary" href="product.html">Details <i
                                                         class="fa fa-chevron-right"></i></a>
                                                 <div class="clearfix"></div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div> <!-- .beta-products-list -->
						 {{-- {{ $newBakeryList->links() }} --}}
                         <div class="space50">&nbsp;</div>

                         <div class="beta-products-list">
                             <h4>Old Bakeries</h4>
                             <div class="beta-products-details">
                                 <p class="pull-left">{{ count($oldBakeryList) }}</p>
                                 <div class="clearfix"></div>
                             </div>
                             <div class="row">
                                 @foreach ($oldBakeryList as $bakery)
                                     <div class="col-sm-3">
                                         <div class="single-item">
                                             <div class="single-item-header">
                                                 <a href="product.html"><img
                                                         src="/source/image/product/{{ $bakery->img }}"
                                                         alt=""></a>
                                             </div>
                                             <div class="single-item-body">
                                                 <p class="single-item-title">{{ $bakery->name }}</p>
                                                 <p class="single-item-price">
                                                     <span>$ {{ $bakery->price }}</span>
                                                 </p>
                                             </div>
                                             <div class="single-item-caption">
                                                 <a class="add-to-cart pull-left" href="shopping_cart.html"><i
                                                         class="fa fa-shopping-cart"></i></a>
                                                 <a class="beta-btn primary" href="product.html">Details <i
                                                         class="fa fa-chevron-right"></i></a>
                                                 <div class="clearfix"></div>
                                             </div>
                                         </div>
                                     </div>
                                 @endforeach
                             </div>
                         </div> <!-- .beta-products-list -->
                     </div>
                 </div> <!-- end section with sidebar and main content -->


             </div> <!-- .main-content -->
         </div> <!-- #content -->
     </div> <!-- .container -->
 @endsection
