  <!-- wishlist start -->
  <div id="wishlist" class="hidden">
    <section>
        <div class="container px-3 md:px-5 xl:px-0 xl:pt-10 xl:pb-20 py-8">
            <!-- shopping cart start -->
            <div class="shopping-cart">
                <div class="px-6 py-6 overflow-x-auto">
                    <table class="min-w-[872px] w-full leading-normal">
                        <thead>
                            <tr>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[340px]">
                                    Products
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[104px]">
                                    Price
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider">
                                    Stock Status
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider">
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlistItems as $wishlistItem)
                            <tr>
                                <td class="py-6 text-sm">
                                    <div class="flex gap-2 items-center">
                                        <form action="{{ route('wishlist.remove') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="customer_id" value="{{ session('customer_id') }}">
                                            <input type="hidden" name="product_id" value="{{ $wishlistItem->product->id }}">
                                            <button  type="submit" class="p-2">
                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M2 2L6.00003 6M6.00003 6L10 2M6.00003 6L2 10M6.00003 6L10 10" stroke="#9A9CAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </button>
                                        </form>
                                        <a href="{{ route('product-detail', ['id' => $wishlistItem->product->id]) }}" class="w-[70px] h-[70px]">
                                            <img class="w-full h-full rounded-lg" src="{{ asset($wishlistItem->product->image) }}" alt="{{ $wishlistItem->product->name }}" />
                                        </a>
                                        <a href="{{ route('product-detail', ['id' => $wishlistItem->product->id]) }}" class="ml-1">
                                            <p class="mb-0 text-[#272343] text-sm">{{ $wishlistItem->product->name }}</p>
                                        </a>
                                    </div>
                                </td>
                                <td class="py-6 text-sm">
                                    <p class="mb-0">$ {{ $wishlistItem->product->selling_price }}</p>
                                </td>
                                <td class="py-6 text-sm">
                                    @if($wishlistItem->product->stock_amount > 0)
                                    <p class="text-[#01AD5A] font-semibold">In Stock</p>
                                    @else
                                    <p class="text-[red] font-semibold">Out of Stock</p>
                                    @endif
                                </td>
                                <form action="{{ route('cart.add',['id' =>$wishlistItem->product->id]) }}" method="POST">
                                    @csrf
                                    <input type="hidden" value="1" name="qty"/>
                                <td class="py-6 text-sm text-right">
                                    <button type="submit" class="btn-wishlist">Add to cart</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- shopping cart end -->
        </div>
    </section>
</div>
<!-- wishlist end -->