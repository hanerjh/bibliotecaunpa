<div class="gallery"  style="position: relative; width: 1150px; height: 1250px;">
    <?php $con=0 ?>
    @foreach($page_title as $publicacion) 
     
    
       @if($con==0)

          <!-- central-->
          <div class="gallery-item " data-id="{{$publicacion->id}}" data-width="2" data-height="2" style="position: absolute; left: 290px; top: 0px;">

            <div class="live-tile carousel" data-speed="750" data-delay="4000" data-mode="">
            <div class="slide-front slide active" style="transition-property: top; transition-duration: 750ms; transition-timing-function: ease; top: 0%; left: 0%;">
            <img src={{ $publicacion->img }} alt="" class="image-responsive-height image-responsive-width">
            </div>           
            </div>
            
            
            <div class="overlayer bottom-left full-width">
            <div class="overlayer-wrapper item-info more-content">
            <div class="gradient-grey p-l-20 p-r-20  p-b-5">
            <div class="">
              <span class="pull-right semi-bold text-black font-montserrat bold bg-tagcolor no-margin">Anuncio</span>
            <h5 class="pull-left bold text-white no-margin">{{ $publicacion->titulo }}</h5>
           
           
            <div class="clearfix"></div>
            <span class="hint-text pull-left text-white"></span>
            <div class="clearfix"></div>
            </div>
           
            </div>
            </div>
            </div>
            
            </div>
            <!-- fin central-->
            @else

          <div class="gallery-item first" data-id="{{$publicacion->id }}" data-width="1" data-height="1" style="position: absolute; left: 0px; top: 0px;">
                <img src={{ $publicacion->img }} alt="" class="image-responsive-height image-responsive-width">
                
                
                <div class="overlayer bottom-left full-width">
                <div class="overlayer-wrapper item-info ">
                <div class="gradient-grey p-l-20 p-r-20 p-t-20 p-b-5">
                <div class="">
                  <span class="pull-right  text-black font-montserrat bg-tagcolor bold">Noticia</span>
                <p class="pull-left bold text-white fs-14 ">{{ $publicacion->titulo }}</p>
               
                <div class="clearfix"></div>
                </div>
               
                </div>
                </div>
                </div>                  
              </div>

            @endif
            
                
                <?php $con++ ?>
                @endforeach
      </div>
  
      <!-- itemDetails1 -->

      <div id="itemDetails1" class="dialog item-details">
            <div class="dialog__overlay"></div>
            <div class="dialog__content">
            <div class="container-fluid">
            <div class="row dialog__overview">
            <div class="col-md-7 no-padding item-slideshow-wrapper full-height">
            <div class="item-slideshow full-height owl-carousel owl-loaded owl-drag">
            
            
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 984px;"><div class="owl-item active" style="width: 491.75px;"><div class="slide" data-image="asset/gridgallery/img/item-square.jpg" style="background-image: url(&quot;asset/gridgallery/img/item-square.jpg&quot;); background-size: cover;">
            </div></div><div class="owl-item" style="width: 491.75px;"><div class="slide" data-image="asset/gridgallery/img/item-square.jpg" style="background-image: url(&quot;asset/gridgallery/img/item-square.jpg&quot;); background-size: cover;">
            </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
            </div>
            <div class="col-md-12 d-md-none d-lg-none d-xl-none bg-info-dark">
            <div class="container-xs-height">
            <div class="row row-xs-height">
            <div class="col-8 col-xs-height col-middle no-padding">
            <div class="thumbnail-wrapper d32 circular inline">
            <img width="32" height="32" src="asset/gridgallery/img/2.jpg" data-src="asset/gridgallery/img/2.jpg" data-src-retina="asset/gridgallery/img/2x.jpg" alt="">
            </div>
            <div class="inline m-l-15">
            <p class="text-white no-margin">Alex Nester</p>
            <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
            </div>
            </div>
            <div class="col-4 col-xs-height col-middle text-right  no-padding">
            <h2 class="bold text-white price font-montserrat">$20.00</h2>
            </div>
            </div>
            </div>
            </div>
            <div class="col-md-5 p-r-35 p-t-35 p-l-35 full-height item-description">
            <h2 class="semi-bold no-margin font-montserrat">Happy Ninja</h2>
            <p class="rating fs-12 m-t-5">
            <i class="fa fa-star "></i>
            <i class="fa fa-star "></i>
            <i class="fa fa-star "></i>
            <i class="fa fa-star-o"></i>
            <i class="fa fa-star-o"></i>
            </p>
            <p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
            </p>
            <div class="row m-b-20 m-t-20">
            <div class="col-6"><span class="font-montserrat all-caps fs-11">Price ranges</span>
            </div>
            <div class="col-6 text-right">$20.00 - $40.00</div>
            </div>
            <div class="row m-t-20 m-b-10">
            <div class="col-6"><span class="font-montserrat all-caps fs-11">Paint sizes</span>
            </div>
            </div>
            <button class="btn btn-white">S</button>
            <button class="btn btn-white">M</button>
            <button class="btn btn-white">L</button>
            <button class="btn btn-white">XL</button>
            <br>
            <button class="btn btn-primary buy-now">Buy Now</button>
            </div>
            </div>
           
            </div>
            <button class="close action top-right" data-dialog-close=""><i class="pg-close fs-14"></i>
            </button>
            </div>
            </div>
  
            <div id="itemDetails2" class="dialog item-details">
              <div class="dialog__overlay"></div>
              <div class="dialog__content">
              <div class="container-fluid">
              <div class="row dialog__overview">
              <div class="col-md-7 no-padding item-slideshow-wrapper full-height">
              <div class="item-slideshow full-height owl-carousel owl-loaded owl-drag">
              
              
              <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 984px;"><div class="owl-item active" style="width: 491.75px;"><div class="slide" data-image="img/item-square.jpg" style="background-image: url(&quot;img/item-square.jpg&quot;); background-size: cover;">
              </div></div><div class="owl-item" style="width: 491.75px;"><div class="slide" data-image="img/item-square2.jpg" style="background-image: url(&quot;img/item-square2.jpg&quot;); background-size: cover;">
              </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev disabled"><i class="fa fa-chevron-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-chevron-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
              </div>
              <div class="col-md-12 d-md-none d-lg-none d-xl-none bg-info-dark">
              <div class="container-xs-height">
              <div class="row row-xs-height">
              <div class="col-8 col-xs-height col-middle no-padding">
              <div class="thumbnail-wrapper d32 circular inline">
              <img width="32" height="32" src="img/2.jpg" data-src="img/2.jpg" data-src-retina="img/2x.jpg" alt="">
              </div>
              <div class="inline m-l-15">
              <p class="text-white no-margin">Alex Nester</p>
              <p class="hint-text text-white no-margin fs-12">Senior UI/UX designer</p>
              </div>
              </div>
              <div class="col-4 col-xs-height col-middle text-right  no-padding">
              <h2 class="bold text-white price font-montserrat">$20.00</h2>
              </div>
              </div>
              </div>
              </div>
              <div class="col-md-5 p-r-35 p-t-35 p-l-35 full-height item-description">
              <h2 class="semi-bold no-margin font-montserrat">Happy Ninja</h2>
              <p class="rating fs-12 m-t-5">
              <i class="fa fa-star "></i>
              <i class="fa fa-star "></i>
              <i class="fa fa-star "></i>
              <i class="fa fa-star-o"></i>
              <i class="fa fa-star-o"></i>
              </p>
              <p class="fs-13">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful.
              </p>
              <div class="row m-b-20 m-t-20">
              <div class="col-6"><span class="font-montserrat all-caps fs-11">Price ranges</span>
              </div>
              <div class="col-6 text-right">$20.00 - $40.00</div>
              </div>
              <div class="row m-t-20 m-b-10">
              <div class="col-6"><span class="font-montserrat all-caps fs-11">Paint sizes</span>
              </div>
              </div>
              <button class="btn btn-white">S</button>
              <button class="btn btn-white">M</button>
              <button class="btn btn-white">L</button>
              <button class="btn btn-white">XL</button>
              <br>
              <button class="btn btn-primary buy-now">Buy Now</button>
              </div>
              </div>
              
              </div>
              <button class="close action top-right" data-dialog-close=""><i class="pg-close fs-14"></i>
              </button>
              </div>
              </div>