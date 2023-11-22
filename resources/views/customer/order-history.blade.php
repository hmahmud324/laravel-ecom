 <!-- order History start -->
 <div id="order_history" class="hidden p-4">
    <div class="container">
        <div class="shopping-cart-wrapper pt-10 pb-20 flex items-start gap-6">
            <!-- shopping cart start -->
            <div class="shopping-cart w-full">
                <div class="px-6 py-6 overflow-x-auto">
                    <table class="min-w-[1240px] w-full leading-normal">
                        <thead>
                            <tr class="">
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[160px]">
                                    Order
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[200px]">
                                    Date
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[140px]">
                                    Total Product
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[120px]">
                                    Toral price
                                </th>
                                <th class="pb-6 border-b border-[#E1E3E6] text-left text-xs font-semibold text-[#272343] uppercase tracking-wider w-[100px]">
                                    Status
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td class="py-6 text-sm">
                                    <a href="order-details.html" class="text-[#007580] text-[14px] block font-display leading-[120%]  font-medium ">#{{ $order->id }}</a>
                                </td>
                                <td class="py-6 text-sm text-[#272343]">
                                    <a href="order-details.html" class="mb-0 block">{{ $order->created_at->format('M d,Y') }}</a>
                                </td>
                                @php
                                $orderDetails = $order->orderDetails;
                                @endphp
                                @foreach ($orderDetails as $orderDetail)
                                <td class="py-6 text-sm text-[#272343]">
                                    <a href="order-details.html" class="block">{{ $orderDetail->product_quantity }}</a>
                                </td>
                                @endforeach
                                <td class="py-6 text-sm text-[#272343]">
                                    <a href="order-details.html" class="block">${{ $order->order_total }}</a>
                                </td>
                                <td class="py-6 text-sm">
                                    @if ($order->order_status == 'Complete')
                                      <button class="btn-success2 px-3 py-2 text-[#01AD5A] text-[14px] leading-[120%] font-display">{{ $order->order_status }}</button>
                                    @else
                                      <button class="btn-warning px-3 py-2 inline-block text-[#F5813F] text-[14px] leading-[120%] font-display">{{ $order->order_status }}</button>
                                    @endif
                                  </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- order History end -->