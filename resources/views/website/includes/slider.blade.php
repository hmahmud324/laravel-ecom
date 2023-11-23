 <!-- banner section start -->
 <section
     class="banner-section 2xl:mx-[90px] bg-grayscales-500 rounded-bl-[20px] rounded-br-[20px] font-display relative z-10">
     <div class="swiper bannerSwiper xl:pt-20 py-6 xl:pb-28 relative z-50">
         <div class="swiper-wrapper">
            @foreach ($hero_sliders as $hero_slider )
             <div class="swiper-slide">
                 <div class="container px-3 md:px-5 flex flex-col md:flex-row items-center">
                     <div class="md:w-1/2 w-full">
                         <p class="text-gray-black text-sm tracking-[0.12em] mb-2">{{ $hero_slider->subtitle }}</p>
                         <h1
                             class="xl:text-[68px] text-xl md:text-3xl xl:leading-[110%] text-gray-black font-semibold mb-6">
                             {{ $hero_slider->title }}</h1>
                         <div>
                             <a href="{{ route('product-detail',['id' =>$hero_slider->product->id]) }}" class="btn-primary">
                                 <span>Shop Now</span>
                                 <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                         <path d="M15.5 7.5L20 12M20 12L15.5 16.5M20 12H4" stroke="white"
                                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                     </svg>
                                 </span>
                             </a>
                         </div>
                     </div>
                     <div class="md:w-1/2 w-full flex justify-center items-center relative">
                         <img src="{{ asset($hero_slider->image) }}" alt="" style="height: 420px; wisth:420px;">
                         <div class="inline-block absolute top-0 right-0">
                             <img src="{{ asset('/') }}website/assets/images/all-img/discount.png" alt="">
                             <p class="absolute top-[33px] text-[#F05C52] text-4xl font-bold right-9">{{ $hero_slider->discount }}%</p>
                             <p class="absolute text-lg font-normal top-[68px] right-10">Discount</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         @endforeach
         <div class="swiper-button-next banner-slider-button"></div>
         <div class="swiper-button-prev banner-slider-button"></div>
         <div class="swiper-pagination"></div>
     </div>
     <img src="{{ asset('/') }}website/assets/images/svg/banner-shapes.svg" alt=""
         class="xl:absolute xl:right-[189px] xl:bottom-[299px] hidden z-10">
 </section>
 <!-- banner section end -->
