@extends('structure.layout')
@section('title')
    Login
@endsection

@section('content')
    <div class="container overflow-hidden lg:max-w-[1250px]">
        <div class="wow fadeInUp mx-auto w-full max-w-[520px] rounded-lg bg-[#F8FAFB] py-10 px-6 shadow-card dark:bg-[#15182A] dark:shadow-card-dark sm:p-[50px]"
            data-wow-delay=".2s">
            <div
                class="mb-9 flex items-center space-x-3 rounded-md border border-stroke bg-white py-2 px-[10px] dark:border-stroke-dark dark:bg-dark">
                <a href="/signin"
                    class="block w-full rounded bg-primary p-2 text-center text-base font-medium text-white hover:bg-opacity-90">
                    Sign In
                </a>
                <a href="/signup"
                    class="block w-full rounded p-2 text-center text-base font-medium text-black hover:bg-primary hover:text-white dark:text-white">
                    Sign Up
                </a>
            </div>

            <div class="text-center">

                <div class="relative z-10 mb-[30px] flex items-center">
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                    <p class="w-full px-5 text-base text-body">
                        sign in with your email
                    </p>
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                </div>
            </div>

            <form action="{{url('signin')}}" method="POST">
                @csrf
                <div class="mb-5">
                    <label for="email" class="mb-[10px] block text-sm text-black dark:text-white">
                        Your Email
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
                <div class="-mx-2 mb-[30px] flex flex-wrap justify-between">

                    <div class="w-full px-2 sm:w-1/2">
                        <a href="/signup" class="text-base text-primary hover:underline sm:text-right">
                            Create New Account
                        </a>
                    </div>

                    <div class="w-full px-2 sm:w-1/2">
                        <a href="/forget-password" class="text-base text-primary hover:underline sm:text-right">
                            Forgot Password?
                        </a>
                    </div>
                </div>

                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-primary p-3 text-base font-medium text-white hover:bg-opacity-90">
                    Sign In
                </button>
            </form>
        </div>
    </div>
@endsection
