@extends('website.master')


@section('body')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb">
        <div class="container">
            <div class="flex items-center gap-1 py-[1.5px]">
                <a href="#" class="text-[14px] font-normal leading-[110%] text-dark-gray">Home</a>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.125 5.25L10.875 9L7.125 12.75" stroke="#636270" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <a href="#" class="text-[14px] font-normal leading-[110%] text-dark-gray">Account</a>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.125 5.25L10.875 9L7.125 12.75" stroke="#636270" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span class="text-[14px] font-medium leading-[110%] font-display text-gray-black inline-block">Account Settings</span>
            </div>

            <h2 class="pt-[13.5px] xl:text-2xl text-[18px] font-semibold text-gray-black font-display">Account Settings</h2>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- user menu start -->
    <div class="user bg-red-600">
        <div class="container">
            <div class="usermenu flex flex-col md:flex-row justify-between md:items-center">
                <!-- Tabs -->
                <ul id="tabs" class="inline-flex flex-col md:flex-row w-full">

                    <li class="border-b-2 border-accents">
                        <a id="default-tab" href="#account_settings" class="text-[#636270] font-medium p-5 border-b border-transparent hover:text-gray-black font-display">Account Settings</a>
                    </li>

                    <li>
                        <a href="#order_history" class="text-[#636270] font-medium p-5 border-b border-transparent hover:text-gray-black font-display">Order History</a>
                    </li>
                    
                    <li>
                        <a href="#order_details" class="text-[#636270] font-medium p-5 border-b border-transparent hover:text-gray-black">Order Details</a>
                    </li>

                    <li>
                        <a href="#wishlist" class="text-[#636270] font-medium p-5 border-b border-transparent hover:text-gray-black font-display">Wishlist</a>
                    </li>
                </ul>
                <a href="#" class="font-display text-[16px] leading-[110%] font-medium capitalize text-[#636270] px-4 py-4 md:px-0">Logout</a>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- Tab Contents -->
        <div id="tab-contents">

            <!-- Account Setting Start -->
            <div id="account_settings">
                <div class="container px-3 md:px-5 xl:px-0 py-10">
                    <div class="accout-setting flex flex-col xl:flex-row gap-6">
                        <!-- account inforamation start -->
                        <div class="box xl:w-[536px]">
                            <div class="w-full ">
                                <div class="p-6">
                                    <h2 class="text-start xl:text-2xl acc-title text-[22px] text-[#272343] font-medium mb-6 font-display">Account Information</h2>
                                    <div class="flex flex-col sm:flex-row gap-5 items-center mb-5">
                                        <div class="w-full">
                                            <input type="text" placeholder="Kevin" class="input-box focus:outline-none focus:ring-2 focus:ring-accents transition duration-300 ease-in-out">
                                        </div>
                                        <div class="w-full">
                                            <input type="text" placeholder="Kevin Gilbert" class="input-box focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                                        </div>
                                    </div>

                                    <div class="w-full mb-5">
                                        <input type="text" placeholder="kevin.gilbert@gmail.com" class="input-box focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                                    </div>
                                    <div class="w-full mb-5">
                                        <input type="text" placeholder="+8801497 548244" class="input-box focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                                    </div>
                                    <button type="submit" class="btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                        <!-- account inforamation end -->

                        <div class="flex flex-col md:flex-row gap-6">
                            <!-- user password change start -->
                            <div class="box xl:w-[424px]">
                                <div class="">
                                    <div class="p-6">
                                        <h2 class="text-start xl:text-2xl acc-title text-[22px] text-[#272343] font-medium mb-6 font-display">Change Password</h2>

                                        <div class="relative">
                                            <!-- input-box focus:outline-none focus:ring-2 focus:ring-accents transition duration-300 ease-in-out -->

                                            <input type="password" placeholder="Current passowrd" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="CurrentPasswordInput" name="password">
                                            <span class="absolute top-[17px] right-5 cursor-pointer ">

                                                <svg id="current-icon-show" onclick="currentPasswordIcon()" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 4.24902C4.5 4.24902 1.5 11.9999 1.5 11.9999C1.5 11.9999 4.5 19.749 12 19.749C19.5 19.749 22.5 11.9999 22.5 11.9999C22.5 11.9999 19.5 4.24902 12 4.24902V4.24902Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 15.75C12.9946 15.75 13.9484 15.3549 14.6517 14.6517C15.3549 13.9484 15.75 12.9946 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25C11.0054 8.25 10.0516 8.64509 9.34835 9.34835C8.64509 10.0516 8.25 11.0054 8.25 12C8.25 12.9946 8.64509 13.9484 9.34835 14.6517C10.0516 15.3549 11.0054 15.75 12 15.75V15.75Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg id="current-icon-hide" onclick="currentPasswordIcon()" width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.858 2.93481L18.9963 6.63906" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.4547 4.99353L13.1215 8.77578" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.53701 4.99133L6.86951 8.77433" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.13825 2.9325L0.989502 6.6525" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 0.83252C2.575 2.78252 5.4655 5.25002 10 5.25002C14.5345 5.25002 17.4235 2.78252 19 0.83252" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="relative">
                                            <input type="password" placeholder="New passowrd" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="CreatePasswordInput" name="password">
                                            <span class="absolute top-[17px] right-5 cursor-pointer select-none ">

                                                <svg id="create-icon-show" onclick="CreatePasswordIcon()" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 4.24902C4.5 4.24902 1.5 11.9999 1.5 11.9999C1.5 11.9999 4.5 19.749 12 19.749C19.5 19.749 22.5 11.9999 22.5 11.9999C22.5 11.9999 19.5 4.24902 12 4.24902V4.24902Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 15.75C12.9946 15.75 13.9484 15.3549 14.6517 14.6517C15.3549 13.9484 15.75 12.9946 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25C11.0054 8.25 10.0516 8.64509 9.34835 9.34835C8.64509 10.0516 8.25 11.0054 8.25 12C8.25 12.9946 8.64509 13.9484 9.34835 14.6517C10.0516 15.3549 11.0054 15.75 12 15.75V15.75Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>

                                                <svg id="create-icon-hide" onclick="CreatePasswordIcon()" width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.858 2.93481L18.9963 6.63906" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.4547 4.99353L13.1215 8.77578" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.53701 4.99133L6.86951 8.77433" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.13825 2.9325L0.989502 6.6525" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 0.83252C2.575 2.78252 5.4655 5.25002 10 5.25002C14.5345 5.25002 17.4235 2.78252 19 0.83252" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>

                                        <div class="relative">
                                            <input type="password" placeholder="Confirm passowrd" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="myInput" name="password">
                                            <span class="absolute top-[17px] right-5 cursor-pointer ">
                                                <svg id="icon-show" onclick="PasswordIcon()" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12 4.24902C4.5 4.24902 1.5 11.9999 1.5 11.9999C1.5 11.9999 4.5 19.749 12 19.749C19.5 19.749 22.5 11.9999 22.5 11.9999C22.5 11.9999 19.5 4.24902 12 4.24902V4.24902Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 15.75C12.9946 15.75 13.9484 15.3549 14.6517 14.6517C15.3549 13.9484 15.75 12.9946 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25C11.0054 8.25 10.0516 8.64509 9.34835 9.34835C8.64509 10.0516 8.25 11.0054 8.25 12C8.25 12.9946 8.64509 13.9484 9.34835 14.6517C10.0516 15.3549 11.0054 15.75 12 15.75V15.75Z" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                                <svg id="icon-hide" onclick="PasswordIcon()" width="20" height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.858 2.93481L18.9963 6.63906" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12.4547 4.99353L13.1215 8.77578" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M7.53701 4.99133L6.86951 8.77433" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M3.13825 2.9325L0.989502 6.6525" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M1 0.83252C2.575 2.78252 5.4655 5.25002 10 5.25002C14.5345 5.25002 17.4235 2.78252 19 0.83252" stroke="#272343" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </div>


                                        <button class="btn-primary">Save Changes</button>
                                    </div>
                                </div>
                            </div>
                            <!-- user password change end -->

                            <!-- user profile change start -->
                            <div class="box xl:w-[312px]">
                                <div class="">
                                    <div class="p-6">
                                        <h2 class="xl:text-2xl acc-title text-[22px]  text-[#272343] font-medium mb-6 font-display text-center">Change Profile Photo</h2>

                                        <div class="pb-[26px] mx-auto">
                                            <img class="w-[150px] h-[150px] rounded-full mx-auto object-cover" src="./public/assets/images/all-img/profile-photo.png" alt="image description" id="blah">
                                        </div>

                                        <div class="flex justify-center pb-3">
                                           
                                            <input type="file" id="real-file" hidden="hidden" onchange="readURL(this);"  accept=".jpeg, .doc, .docx, .xls, .xlsx, .txt, .jpg, .png, .gif"  />
                                            <button type="button" id="custom-button" class="flex gap-3 items-center transition-all duration-300 hover:bg-[#272343] bg-accents text-white text-base font-semibold py-[17px] px-6 rounded-lg font-display">
                                                <span class="">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16 17H17.5C19.9853 17 22 14.9853 22 12.5C22 10.0147 19.9853 8 17.5 8H17.293C16.64 5.6915 14.5176 4 12 4C9.48245 4 7.35996 5.6915 6.70703 8H6.5C4.01472 8 2 10.0147 2 12.5C2 14.9853 4.01472 17 6.5 17H8" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M12 19.5V9.5M12 9.5L8.5 13M12 9.5L15.5 13" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>Upload Now</button>
                                            
                                        </div>
                                        <p class="text-center text-[#636270] text-sm font-display">JPG or PNG. max size of 500KB</p>
                                    </div>
                                </div>
                            </div>
                            <!-- user profile change end -->
                        </div>

                    </div>
                </div>
            </div>
            <!-- Account Setting End -->


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
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="text-[#007580] text-[14px] block font-display leading-[120%]  font-medium ">#2485</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="mb-0 block">02 April, 2021</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">05</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">$265.00</a>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="btn-warning px-3 py-2 inline-block text-[#F5813F] text-[14px] leading-[120%] font-display">Pending</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="text-[#007580] block text-[14px] font-display leading-[120%]  font-medium ">#8901</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="mb-0 block">29 May, 2021</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">01</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">$265.00</a>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="btn-success2 px-3 py-2 inline-block text-[#01AD5A] text-[14px] leading-[120%] font-display">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="text-[#007580] block text-[14px] font-display leading-[120%]  font-medium ">#8901</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="mb-0 block">29 May, 2021</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">01</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">$265.00</a>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="btn-success2 px-3 py-2 inline-block text-[#01AD5A] text-[14px] leading-[120%] font-display">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="text-[#007580] block text-[14px] font-display leading-[120%]  font-medium ">#8901</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="mb-0 block">29 May, 2021</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">01</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">$265.00</a>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="btn-success2 px-3 py-2 inline-block text-[#01AD5A] text-[14px] leading-[120%] font-display">Completed</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="text-[#007580] block text-[14px] font-display leading-[120%]  font-medium ">#8901</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="mb-0 block">29 May, 2021</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">01</a>
                                            </td>
                                            <td class="py-6 text-sm text-[#272343]">
                                                <a href="order-details.html" class="block">$265.00</a>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <a href="order-details.html" class="btn-success2 px-3 py-2 inline-block text-[#01AD5A] text-[14px] leading-[120%] font-display">Completed</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- order History end -->

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
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">#2485</span>
                                </div>
                                <div class="flex-wrap">
                                    <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Date:</p>
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">02 April, 2021</span>
                                </div>
                                <div class="flex-wrap">
                                    <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Email:</p>
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">kevin.gilbert@gmail.com</span>
                                </div>
                                <div class="flex-wrap">
                                    <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Total:</p>
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">$265.00</span>
                                </div>
                                <div class="flex-wrap">
                                    <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Status:</p>
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">Proccesing</span>
                                </div>
                                <div class="flex-wrap">
                                    <p class="text-[#9A9CAA] font-display text-[14px] leading-[100%] capitalize pb-[10px]">Payment Method:</p>
                                    <span class="text-gray-black font-display text-[20px] leading-[120%] font-medium">Paypal</span>
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

                                        <tr class="">
                                            <td class="text-sm px-6 pt-6">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center gap-3">
                                                        <div>
                                                            <img src="./public/assets/images/all-img/product1.png" alt="">
                                                        </div>

                                                        <p>Isolate Sofa Chair</p>

                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-sm">
                                                <p class="mb-0">$145.00</p>
                                            </td>
                                            <td class="text-sm">
                                                <p>x1</p>
                                            </td>
                                            <td class="text-sm">
                                                <p>$145.00</p>
                                            </td>
                                            <td class="text-sm pt-6">
                                                <div class="mb-6">
                                                    <ul class="p-0 m-0 ">
                                                        <li class="">
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Color:</span><span class="text-[#636270] font-medium">Black</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Material:</span><span class="text-[#636270] font-medium">Polyester, Fabric</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Brand:</span><span class="text-[#636270] font-medium">Purefit</span>
                                                            </p>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr class="">
                                            <td class="text-sm px-6 ">
                                                <div class="flex justify-between items-center">
                                                    <div class="flex items-center gap-3">
                                                        <div>
                                                            <img src="./public/assets/images/all-img/product1.png" alt="">
                                                        </div>

                                                        <p>Isolate Sofa Chair</p>

                                                    </div>

                                                </div>
                                            </td>
                                            <td class="text-sm">
                                                <p class="mb-0">$145.00</p>
                                            </td>
                                            <td class="text-sm">
                                                <p>x1</p>
                                            </td>
                                            <td class="text-sm">
                                                <p>$145.00</p>
                                            </td>
                                            <td class="text-sm pt-6">
                                                <div class="mb-6">
                                                    <ul class="p-0 m-0">
                                                        <li class="">
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Color:</span><span class="text-[#636270] font-medium">Black</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Material:</span><span class="text-[#636270] font-medium">Polyester, Fabric</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-[15px] inline-flex gap-2 items-center">
                                                                <span class="text-[#9A9CAA]">Brand:</span><span class="text-[#636270] font-medium">Purefit</span>
                                                            </p>
                                                        </li>

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
                                <h2 class="text-gray-black font-medium font-display xl:text-[32px] text-[20px] leading-[110%] capitalize ">Billing address</h2>
                                <p class="font-display text-[16px] leading-[120%] font-normal text-[#272343] pt-5 pb-2">Kevin Gilbert</p>
                                <p class="text-[#636270] text-[14px] leading-[150%] font-display font-normal pb-4">
                                    4140 Parker Rd. Allentown, New Mexico 31134
                                </p>
                                <p class="text-[#636270] text-[14px] leading-[100%] font-display font-normal pb-4">kevin.gilbert@gmail.com</p>
                                <span class="text-[#636270] text-[14px] leading-[100%] font-display font-normal">+8801497 548244</span>
                            </div>

                            <div>
                                <h2 class="text-gray-black font-medium font-display xl:text-[32px] text-[20px] leading-[110%] capitalize">Shipping address</h2>
                                <p class="font-display text-[16px] leading-[120%] font-normal text-[#272343] pt-5 pb-2">Kevin Gilbert</p>
                                <p class="text-[#636270] text-[14px] leading-[150%] font-display font-normal pb-4">
                                    4140 Parker Rd. Allentown, New Mexico 31134
                                </p>
                                <p class="text-[#636270] text-[14px] leading-[100%] font-display font-normal pb-4">kevin.gilbert@gmail.com</p>
                                <span class="text-[#636270] text-[14px] leading-[100%] font-display font-normal">+8801497 548244</span>
                            </div>

                            <div class="px-6 py-6 bg-off-white rounded-lg max-w-[348px] w-full">
                                <div class="">

                                    <div class="flex justify-between pb-4">
                                        <p>Subtotal</p>
                                        <p>$1,435.00</p>
                                    </div>
                                    <div class="flex justify-between pb-4">
                                        <p>discount</p>
                                        <p>26%</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p>shipping</p>
                                        <p>Free</p>
                                    </div>
                                    <hr>
                                    <div class="flex justify-between">
                                        <p class="text-[18px] font-display text-dark-gray ">Total:</p>
                                        <p class="text-[22px] font-display leading-[120%] font-sem">$1026.23</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Order Details end -->

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
                                        <tr>
                                            <td class="py-6 text-sm">
                                                <div class="flex gap-2 items-center">
                                                    <button class="p-2">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 2L6.00003 6M6.00003 6L10 2M6.00003 6L2 10M6.00003 6L10 10" stroke="#9A9CAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                    <div class="w-[70px] h-[70px]">
                                                        <img class="w-full h-full rounded-lg" src="./public/assets/images/all-img/shopping-cart-01.png" alt="" />
                                                    </div>
                                                    <div class="ml-1">
                                                        <p class="mb-0 text-[#272343] text-sm">Sofa for Living Room</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <p class="mb-0">$250.00</p>
                                            </td>
                                            <td class="py-6 text-sm">
                                                <p class="text-[#01AD5A] font-semibold">In Stock</p>
                                            </td>
                                            <td class="py-6 text-sm text-right">
                                                <button class="mt-6 bg-accents hover:bg-[#272343]  py-[17px] px-6 rounded-lg text-[18px] font-semibold font-display leading-[110%] transition-all duration-300 text-gray-white text-center capitalize">Add to cart</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="pb-6 text-sm">
                                                <div class="flex gap-2 items-center">
                                                    <button class="p-2">
                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M2 2L6.00003 6M6.00003 6L10 2M6.00003 6L2 10M6.00003 6L10 10" stroke="#9A9CAA" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                    <div class="w-[70px] h-[70px]">
                                                        <img class="w-full h-full rounded-lg" src="./public/assets/images/all-img/shopping-cart-01.png" alt="" />
                                                    </div>
                                                    <div class="ml-1">
                                                        <p class="mb-0 text-[#272343] text-sm">Sofa for Living Room</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="pb-6 text-sm">
                                                <p class="mb-0">$250.00</p>
                                            </td>
                                            <td class="pb-6 text-sm">
                                                <p class="text-[#F05C52] font-semibold">Out of stock</p>
                                            </td>
                                            <td class="pb-6 text-sm text-right">
                                                <button class="bg-off-white py-[17px] px-6 rounded-lg text-[18px] font-semibold font-display leading-[110%] text-[#9A9CAA] text-center capitalize">Add to cart</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- shopping cart end -->
                    </div>
                </section>
            </div>
            <!-- wishlist end -->

        </div>
    </div>
    @push('dashboard')
    <script>

        //tab section
        let tabsContainer = document.querySelector("#tabs");
        let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler) {
            toggler.addEventListener("click", function(e) {
                e.preventDefault();

                let tabName = this.getAttribute("href");
                
                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                    tabTogglers[i].parentElement.classList.remove("border-accents", "border-b-2");
                    tabContents.children[i].classList.remove("hidden");
                    if ("#" + tabContents.children[i].id === tabName) {
                        continue;
                    }
                    tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("border-b-2", "border-accents",  );
            });
        });


const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

//image preview
function readURL(input) {
    if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
        $('#blah')
            .attr('src', e.target.result);
    };

                reader.readAsDataURL(input.files[0]);
            }
            console.log(ïnput.files);
        }
    </script>
    @endpush
    <!-- user menu end -->
@endsection