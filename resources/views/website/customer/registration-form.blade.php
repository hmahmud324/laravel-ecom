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
            <a href="#" class="text-[14px] font-normal leading-[110%] text-dark-gray">Account</a>
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.125 5.25L10.875 9L7.125 12.75" stroke="#636270" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
            <span class="text-[14px] font-medium leading-[110%] font-display text-gray-black inline-block">Sign
                Up</span>
        </div>
        <h2 class="pt-[13.5px] text-2xl font-semibold text-gray-black font-display">Sign Up</h2>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Sign In Form Start -->
<div class="container py-20">
    <div class="sign_in">
        <h2 class="text-center text-gray-black xl:text-[32px] text-[20px] font-semibold font-display">Sign Up</h2>
        <div class="form">
            <form action="{{route('customer.registration')}}" method="post">
                @csrf
                <div class="xl:flex flex-wrap justify-between items-center mb-4">
                    <div class="xl:w-[400px] w-full">
                        <input type="text" placeholder="Full Name" name="name"
                            class="input-box focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                    </div>
                </div>
                <div class="mb-4">
                    <input type="text" placeholder="Email" name="email"
                        class="input-box focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                </div>
                <div class="mb-4">
                    <input type="number" placeholder="Mobile" name="mobile"
                        class="input-box focus:outline-none focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out">
                </div>
                <div class="relative">
                    <input type="password" placeholder="Create Password"
                        class="form_password focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out"
                        id="CreatePasswordInput" name="password">
                    <span class="absolute top-[17px] right-5 cursor-pointer ">

                        <svg id="create-icon-show" onclick="CreatePasswordIcon()" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4.24902C4.5 4.24902 1.5 11.9999 1.5 11.9999C1.5 11.9999 4.5 19.749 12 19.749C19.5 19.749 22.5 11.9999 22.5 11.9999C22.5 11.9999 19.5 4.24902 12 4.24902V4.24902Z"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 15.75C12.9946 15.75 13.9484 15.3549 14.6517 14.6517C15.3549 13.9484 15.75 12.9946 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25C11.0054 8.25 10.0516 8.64509 9.34835 9.34835C8.64509 10.0516 8.25 11.0054 8.25 12C8.25 12.9946 8.64509 13.9484 9.34835 14.6517C10.0516 15.3549 11.0054 15.75 12 15.75V15.75Z"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg class="mt-[10px]" id="create-icon-hide" onclick="CreatePasswordIcon()" width="20"
                            height="10" viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.858 2.93481L18.9963 6.63906" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.4547 4.99353L13.1215 8.77578" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.53701 4.99133L6.86951 8.77433" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.13825 2.9325L0.989502 6.6525" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M1 0.83252C2.575 2.78252 5.4655 5.25002 10 5.25002C14.5345 5.25002 17.4235 2.78252 19 0.83252"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                <div class="relative">
                    <input type="password" placeholder="Confirm Password"
                        class="form_password focus:outline-none  focus:ring-2 focus:ring-accents font-display transition duration-300 ease-in-out"
                        id="myInput" name="password_confirmation">
                    <span class="absolute top-[17px] right-5 cursor-pointer ">
                        <svg id="icon-show" onclick="PasswordIcon()" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12 4.24902C4.5 4.24902 1.5 11.9999 1.5 11.9999C1.5 11.9999 4.5 19.749 12 19.749C19.5 19.749 22.5 11.9999 22.5 11.9999C22.5 11.9999 19.5 4.24902 12 4.24902V4.24902Z"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M12 15.75C12.9946 15.75 13.9484 15.3549 14.6517 14.6517C15.3549 13.9484 15.75 12.9946 15.75 12C15.75 11.0054 15.3549 10.0516 14.6517 9.34835C13.9484 8.64509 12.9946 8.25 12 8.25C11.0054 8.25 10.0516 8.64509 9.34835 9.34835C8.64509 10.0516 8.25 11.0054 8.25 12C8.25 12.9946 8.64509 13.9484 9.34835 14.6517C10.0516 15.3549 11.0054 15.75 12 15.75V15.75Z"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg class="mt-[10px]" id="icon-hide" onclick="PasswordIcon()" width="20" height="10"
                            viewBox="0 0 20 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.858 2.93481L18.9963 6.63906" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12.4547 4.99353L13.1215 8.77578" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M7.53701 4.99133L6.86951 8.77433" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.13825 2.9325L0.989502 6.6525" stroke="#272343" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M1 0.83252C2.575 2.78252 5.4655 5.25002 10 5.25002C14.5345 5.25002 17.4235 2.78252 19 0.83252"
                                stroke="#272343" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>
                <div class="flex justify-between items-center">
                </div>
                <button type="submit" class="form_btn w-full">
                    Sign Up
                    <span>
                        <svg width="25" height="24" viewBox="0 0 25 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7.5L20.5 12M20.5 12L16 16.5M20.5 12H4.5" stroke="white" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </span>
                </button>
            </form>
            <div class="font-display font-normal text-[14px] leading-[110%] text-gray-black mt-6 text-center">
                Already have account? <a href="sign-in.html"
                    class="text-dark-accents font-display font-medium text-[14px] leading-[110%]"> Sign In</a></div>
        </div>
    </div>
</div>
<!-- Sign In Form End -->

@endsection