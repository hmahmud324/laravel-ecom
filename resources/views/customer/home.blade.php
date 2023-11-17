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
                        @include('customer.includes.change-image')



                    <form action="{{ route('customer.update-profile') }}" method="POST">
                            @csrf
                        <!-- account inforamation end -->
                        <div class="flex flex-col md:flex-row gap-6">
                            <div class="box xl:w-[800px]">
                                <div class="w-full ">
                                    <div class="p-6">
                                        <h2 class="text-start xl:text-2xl acc-title text-[22px] text-[#272343] font-medium mb-6 font-display">Account Information</h2>
                                        <div class="flex flex-col sm:flex-row gap-5 items-center mb-5">
                                            <div class="w-full">
                                                <input type="text" placeholder="Full Name" name="name" value="{{ $customer->name }}" class="input-box focus:outline-none focus:ring-2 focus:ring-accents transition duration-300 ease-in-out">
                                            </div>
                                        </div>
                                        <div class="w-full mb-5">
                                            <input type="text" name="email" value="{{ $customer->email }}" placeholder="Email" class="input-box focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                                        </div>
                                        <div class="w-full mb-3">
                                            <input type="text" placeholder="Mobile" name="mobile" value="{{ $customer->mobile }} " class="input-box focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                                        </div>
                                        <div class="relative">
                                            <!-- input-box focus:outline-none focus:ring-2 focus:ring-accents transition duration-300 ease-in-out -->
                                            <input type="password"  name="current_password" placeholder="Current passowrd" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="CurrentPasswordInput" >
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
                                            <span class="text-danger error-msg">{{ $errors->has('current_password') ? $errors->first('current_password') : '' }}</span>
                                        </div>
    
                                        <div class="relative">
                                            <input type="password" placeholder="New passowrd" name="password" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="CreatePasswordInput" >
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
                                            <span class="text-danger error-msg">{{ $errors->has('password') ? $errors->first('password') : '' }}</span>
                                        </div>
    
                                        <div class="relative">
                                            <input type="password" placeholder="Confirm passowrd" name="password_confirmation" class="form_password focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out" id="myInput" >
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
                                            <span class="text-danger error-msg">{{ $errors->has('password_confirmation') ? $errors->first('password_confirmation') : '' }}</span>
                                        </div>
                                        <button type="submit" class="btn-primary">Save Changes</button>
                                        {{-- <button type="submit" class="btn-primary">Save Changes</button> --}}
                                    </div>
                                </form>
                                </div>
                            </div>
                            <!-- user profile change end -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Account Setting End -->


            @include('customer.includes.order-history')

            @include('customer.includes.order-details')

            @include('customer.includes.wishlist')

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