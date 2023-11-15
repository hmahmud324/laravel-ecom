@extends('website.master')

@section('body')

 <!-- Breadcrumb Start -->
 <div class="breadcrumb">
    <div class="container px-3 md:px-5 xl:px-0">
        <div class="flex items-center gap-1 py-[1.5px]">
            <a href="#" class="text-[14px] font-normal leading-[110%] text-dark-gray">Home</a>

            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 5.25L10.875 9L7.125 12.75" stroke="#636270" stroke-linecap="round" stroke-linejoin="round" />
            </svg>

            <span class="text-[14px] font-medium leading-[110%] font-display text-gray-black inline-block">Shop</span>
        </div>

        <h2 class="pt-[13.5px] text-2xl font-semibold text-gray-black font-display">Shop</h2>
    </div>
</div>
<!-- Breadcrumb End -->

<section>
    <div class="container px-3 md:px-5 xl:px-0">
        <!-- shoping cart List Start -->
        <div class="shopping-cart-wrapper pt-10 pb-20 flex lg:flex-nowrap flex-wrap items-start gap-6">
            <!-- shopping cart start -->
            <div class="shopping-cart lg:w-2/3 w-full">
                <div class="px-6 py-6 overflow-x-auto">
                    <table class="w-[824px] leading-normal">
                        <thead>
                            <tr>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[240px]">
                                    Products
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[104px]">
                                    Unit Price
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[164px]">
                                    Quantity
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[96px]">
                                    Sub Total
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @php($sum = 0)
                            @foreach ($cart_products as $cart_product )
                            <tr class="cart-item">
                                <td class="py-6 text-sm">
                                    <div class="flex gap-2 items-center">
                                        <a href="{{route('cart.delete',['id' => $cart_product->rowId])}}" class="del" onclick="return confirm('Are you sure to delete this?...')">
                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M2 2L6.00003 6M6.00003 6L10 2M6.00003 6L2 10M6.00003 6L10 10" stroke="#9A9CAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                        <div class="w-[70px] h-[70px]">
                                            <img class="w-full h-full rounded-lg" src="{{ asset($cart_product->options->image) }}" alt="" />
                                        </div>
                                        <div class="ml-1">
                                            <p class="mb-0 text-[#272343] text-sm">{{ $cart_product->name }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pb-6 text-sm">
                                    <p class="mb-0">${{$cart_product->price}}</p>
                                </td>
                                <form action="{{route('cart.update',['id' => $cart_product->rowId])}}" method="POST">
                                     @csrf
                                    <input type="hidden" class="form-control" name="id" value="{{$cart_product->id}}" min="1"/>
                                <td class="pb-6 text-sm">
                                    <div>
                                        <input type="number"
                                            class="form-control border rounded-0 pt-5"
                                            name="qty"
                                            value="{{$cart_product->qty}}"
                                            min="1"
                                            style="width: 75px; padding: 5px; border: 1px solid #007580; text-align: center;"
                                            required
                                        />
                                      
                                        <button type="submit"
                                            class="btn btn-success ml-3 text-white"
                                            style="padding: 7px 20px; background-color: #007580; color: #fff; border-radius: 4px;"
                                        >
                                            Update
                                        </button>
                                      </div>
                                </td>
                                </form>
                                <td class="pb-6 text-sm">
                                    <p>${{$cart_product->price * $cart_product->qty}}</p>
                                </td>
                            </tr>
                            @php($sum = $sum + ($cart_product->price * $cart_product->qty))
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <hr class="my-0">
                <div class="coupon-wrap p-6">
                    <input type="text" name="" id="" class="px-5 py-[18px] bg-[#F0F2F3] rounded-lg border-none focus:outline-none coupon-input coupon-btn w-full block focus:ring-2 ring-[#029FAE]" placeholder="Coupon Code">
                    <button type="submit" class="bg-[#007580] hover:bg-[#272343] transition-all duration-300 inline-flex font-semibold text-gray-white coupon-btn px-6 py-[17px] rounded-lg">Apply Coupon Code</button>
                    <button class="bg-off-white text-[#272343] coupon-btn font-semibold py-[17px] px-6 rounded-lg">Update Cart</button>
                </div>

            </div>
            <!-- shopping cart end -->

            <!-- Cart Total End -->
            <div class="cart-total p-8 lg:w-1/3 w-full">
                <div class="subtotal-info">
                    <div class="flex justify-between items-center">
                        <p class="common-hedding">subtotal</p>
                        <p class="text-gray-black text-[16px] leading-[120%] font-display font-medium">${{ number_format($sum) }}</p>
                    </div>
                    @if(count(Cart::content()) == 0)
                    <div class="flex justify-between items-center pt-4">
                        <p class="common-hedding">shipping </p>
                        <p class="text-gray-black text-[16px] leading-[120%] font-display font-medium">${{ $shipping = 0 }}</p>
                    </div>
                    <hr>
                    <div class="flex justify-between items-center">
                        <p class="common-hedding">Total:</p>
                        <p class="text-gray-black text-[22px] leading-[120%] font-display font-semibold">${{ $shipping + $sum = 0 }}</p>
                    </div>
                    @else
                    <div class="flex justify-between items-center pt-4">
                        <p class="common-hedding">shipping </p>
                        <p class="text-gray-black text-[16px] leading-[120%] font-display font-medium">${{ $shipping = 100 }}</p>
                    </div>
                    <hr>
                    @php($totalBill = $sum + $shipping)
                    <div class="flex justify-between items-center">
                        <p class="common-hedding">Total:</p>
                        <p class="text-gray-black text-[22px] leading-[120%] font-display font-semibold">${{ number_format($totalBill) }}</p>
                    </div>
                    @endif
                    <button class="mt-6 bg-accents hover:bg-[#272343] transition-all duration-300 py-[19px] rounded-lg text-[18px] font-bold font-display leading-[110%] text-gray-white text-center w-full">proceed to Checkout</button>
                </div>
            </div>
            <!-- Cart Total Start -->
        </div>
    </div>
</section>   

<!-- shoping cart List End -->

@endsection