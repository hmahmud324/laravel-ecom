 <!-- Order Details start -->
 <div id="order_details" class="hidden p-4">
    <div class="container pt-10 pb-20">
        <div class="box">
            <div class="">
                <div class="flex flex-wrap justify-between items-center px-8 py-[30px]">
                    <h2 class="text-[#272343] font-display xl:text-[32px] text-[18px] font-semibold leading-[110%] capitalize">Order Details</h2>
                    <button class="btn-primary capitalize">back to List</button>
                </div>
                <hr class="my-0">
                <div class="px-8 py-8 flex flex-col md:flex-row md:flex-wrap gap-6 xl:gap-2 xl:justify-between md:items-center">
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Order ID:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">#{{$order->id}}</span>
                    </div>
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Date:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">{{$order->created_at->format('D m,Y')}}</span>
                    </div>
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Email:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">{{$order->customer->email}}</span>
                    </div>
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Total:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">${{$order->order_total}}</span>
                    </div>
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Status:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">{{$order->order_status}}</span>
                    </div>
                    <div class="flex-wrap">
                        <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Payment Method:</p>
                        <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">{{$order->payment_type}}</span>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="overflow-x-auto">
                    <table class="min-w-full leading-normal">
                        <thead class="bg-off-white">
                            <tr class="">
                                <th class="pt-4 pb-4 px-8 border-b border-[#E1E3E6] text-left text-lg font-medium leading-[100%] text-[#272343] uppercase tracking-wider w-[305px]">
                                    Product
                                </th>
                                <th class="pt-4 pb-4 border-b border-[#E1E3E6] text-left text-lg font-medium leading-[100%] text-[#272343] uppercase tracking-wider w-[140px]">
                                    Price
                                </th>
                                <th class="pt-4 pb-4 border-b border-[#E1E3E6] text-left text-lg font-medium leading-[100%] text-[#272343] uppercase tracking-wider w-[145px]">
                                    Quantity
                                </th>
                                <th class="pt-4 pb-4 border-b border-[#E1E3E6] text-left text-lg font-medium leading-[100%] text-[#272343] uppercase tracking-wider w-[175px]">
                                    Subtotal
                                </th>
                                <th class="pt-4 pb-4 border-b border-[#E1E3E6] text-left text-lg font-medium leading-[100%] text-[#272343] uppercase tracking-wider w-[295px]">
                                    Info
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->orderDetails as $orderDetail)
                            <tr class="">
                                <td class="text-sm px-6 ">
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center gap-3">
                                            <div>
                                                <img src="{{ asset($orderDetail->product_image)}}" alt="" style="height:70px; width:70px;">
                                            </div>
                                            <p>{{$orderDetail->product_name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-sm">
                                    <p class="mb-0">${{$orderDetail->product_price}}</p>
                                </td>
                                <td class="text-sm">
                                    <p>x{{$orderDetail->product_quantity}}</p>
                                </td>
                                <td class="text-sm">
                                    <p>${{$orderDetail->product_price * $orderDetail->product_quantity}}</p>
                                </td>
                                <td class="text-sm pt-6">
                                    <div class="mb-6">
                                        <ul class="p-0 m-0">
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr class="my-0">

            <div class="px-8 py-8 flex flex-col md:flex-row md:flex-wrap gap-y-6 justify-between md:items-center">
                <div>
                    <h2 class="text-gray-black font-medium font-display xl:text-[32px] text-[20px] leading-[110%] capitalize">Shipping address</h2>
                    <p class="font-display text-[16px] leading-[120%] font-normal text-[#272343] pt-5 pb-2">{{$order->customer->name}}</p>
                    <p class="text-[#636270] text-[14px] leading-[150%] font-display font-normal pb-4">
                        {{$order->delivery_address}}
                    </p>
                    <p class="text-[#636270] text-[14px] leading-[100%] font-display font-normal pb-4">{{$order->customer->email}}</p>
                    <span class="text-[#636270] text-[14px] leading-[100%] font-display font-normal">{{$order->customer->mobile}}</span>
                </div>
                <div class="px-6 py-6 bg-off-white rounded-lg max-w-[348px] w-full">
                    <div class="">
                        <div class="flex justify-between pb-4">
                            <p>Subtotal</p>
                            <p>${{$orderDetail->product_price * $orderDetail->product_quantity}}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>shipping</p>
                            <p>$100</p>
                        </div>
                        <hr>
                        <div class="flex justify-between">
                            <p class="text-[18px] font-display text-dark-gray ">Total:</p>
                            <p class="text-[22px] font-display leading-[120%] font-sem">${{$order->order_total}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!-- Order Details end -->