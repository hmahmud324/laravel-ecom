@extends('website.master')

@section('body')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb">
        <div class="container px-3 md:px-5 xl:px-0">
            <div class="flex items-center gap-1 py-[1.5px]">
                <a href="#" class="text-[14px] font-normal leading-[110%] text-dark-gray">Home</a>

                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.125 5.25L10.875 9L7.125 12.75" stroke="#636270" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>

                <span class="text-[14px] font-medium leading-[110%] font-display text-gray-black inline-block">Shop</span>
            </div>

            <h2 class="pt-[13.5px] text-2xl font-semibold text-gray-black font-display">Shop</h2>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- product List Start -->
    <section class="">
        <div class="container px-3 md:px-5 xl:px-0">
            <div class="product-list py-6">
                <div class="product-filter flex flex-col lg:flex-row gap-y-4 gap-x-6 lg:justify-between items-center">
                    <div class="relative xl:w-[536px] w-full">
                        <input type="text" name="" id="search2"
                            class="input-box2 bg-[#F0F2F3] px-5 py-[18px] rounded-lg focus:outline-none focus:ring-2 ring-[#029FAE] focus:bg-white transition duration-300 ease-in-out block w-full"
                            placeholder="Search here...">
                        <label for="search2" class="absolute top-[18px] right-5">
                            <svg width="23" height="23" viewBox="0 0 23 23" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.9881 20.6428C16.3663 20.6428 20.7262 16.2829 20.7262 10.9047C20.7262 5.52655 16.3663 1.16666 10.9881 1.16666C5.60989 1.16666 1.25 5.52655 1.25 10.9047C1.25 16.2829 5.60989 20.6428 10.9881 20.6428Z"
                                    stroke="#272343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M17.76 18.1826L21.5777 21.9905" stroke="#272343" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>
                    </div>
                    <div class="product-filter-menu">
                        <div class="w-full">
                            <ul class="flex flex-col md:flex-row justify-center gap-6 items-center">
                                <li class="inline-flex items-center justify-center category">
                                    <select class="custom-select2 relative" name="category">
                                        <option value="" disabled selected>Category</option>
                                        <option value="">All <span>(7234)</span></option>
                                        <option value="">Sofa <span>(143)</span></option>
                                        <option value="">Armchair <span>(143)</span></option>
                                        <option value="">Wing Chair <span>(143)</span></option>
                                        <option value="">Wooden Chair <span>(143)</span></option>
                                        <option value="">Park Bench <span>(143)</span></option>
                                    </select>
                                </li>

                                <li class="inline-flex items-center justify-center price">
                                    <select class="custom-select3" name="prices">
                                        <option value="" disabled selected>Prices</option>
                                        <option value="">all</option>
                                        <option value="">$0 - $100</option>
                                        <option value="">$100 - $300</option>
                                        <option value="">$300 - $500</option>
                                        <option value="">$500 - $700</option>
                                        <option value="">$700 - $900</option>
                                        <option value="">$900 - $1,000</option>
                                        <option value="">Max $1,000</option>
                                        <option value="">Min $1,000</option>
                                    </select>
                                </li>

                                <li class="inline-flex items-center justify-center color">
                                    <select class="custom-select4" name="color">
                                        <option value="" disabled selected>Color</option>
                                        <option value="">White</option>
                                        <option value="">Gray</option>
                                        <option value="">Black</option>
                                        <option value="">Brown</option>
                                        <option value="">Peach</option>
                                        <option value="">Grean</option>
                                    </select>
                                </li>

                                <li class="inline-flex items-center justify-center material">
                                    <select class="custom-select5" name="material">
                                        <option value="" disabled selected>Material</option>
                                        <option value="">Wooden</option>
                                        <option value="">Plywood</option>
                                    </select>
                                </li>
                                <li class="latest font-display">
                                    <select class="custom-select6" name="latest">
                                        <option value="" selected>Latest</option>
                                        <option value="">Classic</option>
                                        <option value="">Popular</option>
                                    </select>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="filter-history py-4 shadow-[inset_0px_1px_0px_#E1E3E6]">
            <div class="container px-3 md:px-5 xl:px-0">
                <div class="filter-history-list flex flex-wrap gap-y-4 justify-between items-center">

                    <div class="filter-activety flex flex-wrap gap-y-2 items-center gap-x-6">
                        <p>Active Filters:</p>
                        <p
                            class="text-[#272343] inline-flex items-center gap-2 font-display font-medium text-[14px] leading-[130%]">
                            <span>Wing Chair</span>
                            <span class="hover:text-[#272343] text-[#9A9CAA] cursor-pointer" onclick="dismiss(this);">
                                <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L5.00003 5M5.00003 5L9 1M5.00003 5L1 9M5.00003 5L9 9"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </p>
                        <p
                            class="text-[#272343] font-display inline-flex items-center gap-2 font-medium text-[14px] leading-[130%]">
                            <span>Min $300 - Max 500</span>
                            <span class="hover:text-[#272343] text-[#9A9CAA] cursor-pointer" onclick="dismiss(this);">
                                <svg width="10" height="11" viewBox="0 0 10 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1.5L5.00003 5.5M5.00003 5.5L9 1.5M5.00003 5.5L1 9.5M5.00003 5.5L9 9.5"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </span>
                        </p>
                    </div>

                    <div class="filter-result flex gap-1 items-center">
                        <h2 class="text-[#272343] text-[16px] font-medium font-display">2,547</h2>
                        <p class="text-[#636270] text-[16px] font-medium font-display">Results found.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="product-list-area shadow-[inset_0px_1px_0px_#E1E3E6]">
            <div class="container px-3 md:px-5 xl:px-0">
                <div class="products-wrapper py-6 xl:grid-cols-4 sm:grid-cols-2 md:grid-cols-3 grid grid-cols-1 gap-6">
                    @foreach ($products as $product )
                    <div class="product-card">
                        <a href="{{ route('product-detail',['id'=>$product->id]) }}">
                            <div class="product-thumb">
                                <img src="{{ asset($product->image) }}"
                                    alt="" style="height: 312px; width:312px;">
                                <span class="badge new">New</span>
                            </div>
                            <div class="product-info">
                                <div>
                                    <h2 class="product-name" href="">{{ $product->name }}</h2>
                                    <h3 class="product-price">${{ $product->selling_price }}&nbsp;<span style="color:rgb(176, 173, 173);"><strike>${{ $product->regular_price }}</strike></span></h3>
                                </div>
                                <div>
                                    <button class="cart-icon">
                                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M2.52081 2.97913L4.42748 3.30913L5.31023 13.826C5.34414 14.2399 5.53284 14.6257 5.83867 14.9066C6.14451 15.1875 6.545 15.3427 6.96023 15.3413H16.9611C17.3586 15.3417 17.743 15.1986 18.0435 14.9382C18.344 14.6778 18.5403 14.3177 18.5964 13.9241L19.4672 7.91263C19.4904 7.75275 19.4819 7.58987 19.4421 7.43329C19.4023 7.27671 19.3321 7.12951 19.2354 7.00011C19.1387 6.8707 19.0174 6.76163 18.8785 6.67913C18.7396 6.59663 18.5858 6.54231 18.4259 6.51929C18.3672 6.51288 4.73365 6.50829 4.73365 6.50829"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M12.9479 9.89539H15.4898" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.5578 18.5194C6.62502 18.5165 6.69213 18.5272 6.75509 18.551C6.81805 18.5747 6.87556 18.611 6.92414 18.6575C6.97273 18.704 7.01139 18.7599 7.03781 18.8218C7.06422 18.8837 7.07784 18.9503 7.07784 19.0176C7.07784 19.0849 7.06422 19.1515 7.03781 19.2133C7.01139 19.2752 6.97273 19.3311 6.92414 19.3777C6.87556 19.4242 6.81805 19.4605 6.75509 19.4842C6.69213 19.5079 6.62502 19.5187 6.5578 19.5158C6.42936 19.5103 6.30801 19.4554 6.21908 19.3626C6.13015 19.2697 6.08051 19.1461 6.08051 19.0176C6.08051 18.889 6.13015 18.7654 6.21908 18.6726C6.30801 18.5798 6.42936 18.5249 6.5578 18.5194Z"
                                                fill="#272343" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M16.8988 18.5194C17.0312 18.5194 17.1583 18.572 17.252 18.6657C17.3457 18.7594 17.3983 18.8865 17.3983 19.019C17.3983 19.1515 17.3457 19.2786 17.252 19.3723C17.1583 19.4659 17.0312 19.5186 16.8988 19.5186C16.7663 19.5186 16.6392 19.4659 16.5455 19.3723C16.4518 19.2786 16.3992 19.1515 16.3992 19.019C16.3992 18.8865 16.4518 18.7594 16.5455 18.6657C16.6392 18.572 16.7663 18.5194 16.8988 18.5194Z"
                                                fill="#272343" stroke="currentColor" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </a>
                        <a href="wishlist.html" class="heart-icon">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.63268 10.6315C1.64909 7.56068 2.79768 4.05077 6.02251 3.01218C6.85874 2.74461 7.74682 2.68088 8.61268 2.8263C9.47855 2.97173 10.2971 3.3221 11 3.84818C12.3338 2.81693 14.2743 2.4686 15.9683 3.01218C19.1923 4.05077 20.3491 7.56068 19.3664 10.6315C17.8356 15.499 11 19.2482 11 19.2482C11 19.2482 4.21484 15.5558 2.63268 10.6315V10.6315Z"
                                    stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </a>
                    </div>
                    @endforeach
                </div>
                <div class="flex justify-center pb-20">
                    <button class="btn-primary">Load more</button>
                </div>
            </div>
        </div>
    </section>
    <!-- product List End -->
    @push('script')
    <script>
     function dismiss(el){
     el.parentNode.style.display='none';
     };
   </script>
    @endpush
@endsection
