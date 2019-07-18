<div class="gallery"  style="position: relative; width: 1150px; height: 1250px;">
    <?php $con=0 ?>
    @foreach($page_title as $publicacion) 
     
    
       @if($con==0)

          <!-- central-->
          <div class="gallery-item " data-id="{{$publicacion->id}}" data-width="2" data-height="2" style="position: absolute; left: 290px; top: 0px;">

            <div class="live-tile carousel" data-speed="750" data-delay="4000" data-mode="">
            <div class="slide-front slide active" style="transition-property: top; transition-duration: 750ms; transition-timing-function: ease; top: 0%; left: 0%;">
            <img src="asset/img/noticias/{{ $publicacion->img }}" alt="" class="image-responsive-height image-responsive-width">
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
                <img src="asset/img/noticias/{{ $publicacion->img }}" alt="" class="image-responsive-height image-responsive-width">
                
                
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

     