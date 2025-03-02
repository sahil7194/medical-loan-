@extends('structure.layout')
@section('title')
    Signup
@endsection

@section('content')

    <div class="container overflow-hidden lg:max-w-[1250px]">
        <div class="wow fadeInUp mx-auto w-full max-w-[520px] rounded-lg bg-[#F8FAFB] py-10 px-6 shadow-card dark:bg-[#15182A] dark:shadow-card-dark sm:p-[50px]"
            data-wow-delay=".2s">
            <div
                class="mb-9 flex items-center space-x-3 rounded-md border border-stroke bg-white py-2 px-[10px] dark:border-stroke-dark dark:bg-dark">
                <a href="/signin"
                    class="block w-full rounded p-2 text-center text-base font-medium text-black hover:bg-primary hover:text-white dark:text-white">
                    Sign In
                </a>
                <a href="/signup"
                    class="block w-full rounded bg-primary p-2 text-center text-base font-medium text-white hover:bg-opacity-90">
                    Sign Up
                </a>
            </div>

            <div class="text-center">
                <h3 class="mb-[10px] text-2xl font-bold text-black dark:text-white sm:text-[28px]">
                    Create your account
                </h3>
                <p class="mb-11 text-base text-body">
                    It's totally free and super easy
                </p>

                <div class="relative z-10 mb-[30px] flex items-center">
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                    <p class="w-full px-5 text-base text-body">
                        sign up with your email
                    </p>
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                </div>
            </div>

            <form method="POST" action="{{url('signup')}}">
                @csrf
                <input type="hidden" name="user_type" value="0">
                <div class="mb-5">
                    <label for="name" class="mb-[10px] block text-sm text-black dark:text-white">
                        Full Name
                    </label>
                    <input type="text" name="name" placeholder="First and last name"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                </div>

                <div class="mb-5">
                    <label for="mobile" class="mb-[10px] block text-sm text-black dark:text-white">
                        Mobile Number
                    </label>
                    <input type="text" name="mobile" placeholder="Enter your mobile number"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-[10px] block text-sm text-black dark:text-white">
                         Email
                    </label>
                    <input type="email" name="email" placeholder="Enter your email"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                </div>

                <div class="mb-6">
                    <label for="password" class="mb-[10px] block text-sm text-black dark:text-white">
                        Your password
                    </label>
                    <input type="password" name="password" placeholder="Enter your password"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                </div>
                <div class="mb-[30px]">
                    <label for="privacy-policy" class="flex cursor-pointer select-none text-base text-body">
                        <input type="checkbox" name="privacy-policy" id="privacy-policy" class="keep-signed sr-only" />
                        <span
                            class="box mr-[10px] mt-[4px] flex h-[22px] w-full max-w-[22px] items-center justify-center rounded-sm border-[.7px] border-stroke bg-white dark:border-stroke-dark dark:bg-black">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                                class="icon hidden">
                                <g clip-path="url(#clip0_73_381)">
                                    <path
                                        d="M6.66649 10.1148L12.7945 3.98608L13.7378 4.92875L6.66649 12.0001L2.42383 7.75742L3.36649 6.81475L6.66649 10.1148Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_73_381">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </span>
                        <p>
                            By creating account means you agree to the
                            <a href="terms-conditions" target="_blank" rel="noopener noreferrer"
                                class="text-primary hover:underline">
                                Terms and Conditions
                            </a>
                            , and our
                            <a href="/privacy-policy" target="_blank" rel="noopener noreferrer"
                                class="text-primary hover:underline">
                                Privacy Policy
                            </a>
                        </p>
                    </label>
                </div>

                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-primary p-3 text-base font-medium text-white hover:bg-opacity-90">
                    Sign Up
                </button>
            </form>
        </div>
</div>@endsection
