@extends('structure.layout')
@section('title')
    Cibil Check
@endsection

@section('content')

    <div class="container overflow-hidden lg:max-w-[1250px]">
        <div class="wow fadeInUp mx-auto w-full max-w-[520px] rounded-lg bg-[#F8FAFB] py-10 px-6 shadow-card dark:bg-[#15182A] dark:shadow-card-dark sm:p-[50px]"
            data-wow-delay=".2s">

            <div class="text-center">
                <h3 class="mb-[10px] text-2xl font-bold text-black dark:text-white sm:text-[28px]">
                    Check you Cibil Score
                </h3>
                <p class="mb-11 text-base text-body">
                    It's totally free and super easy
                </p>

                <div class="relative z-10 mb-[30px] flex items-center">
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                    <p class="w-full px-5 text-base text-body">
                        {{-- sign up with your email --}}
                    </p>
                    <span class="hidden h-[1px] w-full max-w-[70px] bg-stroke dark:bg-stroke-dark sm:block"></span>
                </div>
            </div>

            <form method="POST" action="{{url('cibil-check')}}">
                @csrf

                <div class="mb-5">
                    <label for="name" class="mb-[10px] block text-sm text-black dark:text-white">
                        Full Name
                    </label>

                    @if (auth()->user())
                        <input type="text" name="name" value="{{ auth()->user()->name }}" placeholder="First and last name"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />

                    @else
                        <input type="text" name="name" value="" placeholder="First and last name"
                            class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                    @endif
                </div>

                <div class="mb-5">
                    <label for="mobile" class="mb-[10px] block text-sm text-black dark:text-white">
                        Mobile Number
                    </label>
                    @if (auth()->user())
                        <input type="text" name="mobile" value="{{ auth()->user()->mobile }}" placeholder="Mobile Number"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />

                    @else
                        <input type="text" name="mobile" value="" placeholder="Mobile Number"
                            class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                    @endif
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-[10px] block text-sm text-black dark:text-white">
                        Email
                    </label>
                    @if (auth()->user())
                        <input type="text" name="email" value="{{ auth()->user()->email }}" placeholder="Email"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />

                    @else
                        <input type="text" name="email" value="" placeholder="Email"
                            class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                    @endif
                </div>

                <div class="mb-6">
                    <label for="pan_card" class="mb-[10px] block text-sm text-black dark:text-white">
                        Pan Card Number
                    </label>
                    <input type="text" name="pan_card" placeholder="Enter your pan card number"
                        class="w-full rounded-md border border-stroke bg-white py-3 px-6 text-base font-medium text-body outline-none focus:border-primary focus:shadow-input dark:border-stroke-dark dark:bg-black dark:text-white dark:focus:border-primary" />
                </div>

                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-primary p-3 text-base font-medium text-white hover:bg-opacity-90">
                    Check Score
                </button>
            </form>
        </div>
</div>@endsection
