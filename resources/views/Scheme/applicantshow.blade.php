@extends('structure.layout')

@section('title')
    {{$scheme->title}}
@endsection

@section('content')

<div class="container mx-auto p-6 lg:max-w-4xl">
    <!-- Scheme Image -->
    <div class="wow fadeInUp mb-10" data-wow-delay=".2s">
        <img
            src="{{$scheme->image}}"
            alt="scheme-details"
            class="w-full h-72 object-cover rounded-lg shadow-lg"
        />
    </div>

    <!-- Scheme Title and Info -->
    <div class="text-center">
        <h1 class="wow fadeInUp text-4xl font-semibold text-gray-800 dark:text-white mb-4" data-wow-delay=".25s">
            {{$scheme->title}}
        </h1>

        <div class="flex justify-center space-x-6 mb-8 text-gray-600 dark:text-gray-400">
            <div class="flex items-center">
                {{-- <p class="text-sm font-medium">{{$scheme->user->name}}</p> --}}
            </div>
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 dark:text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V5.236l7 3.236V7L12 4 3 7v1.472L10 5.236V11h7V7l-7-3.236z"></path>
                </svg>
                <span class="ml-2 text-sm">{{$scheme->created_at->format('d M, Y')}}</span>
            </div>
        </div>

        <p class="text-lg text-gray-700 dark:text-gray-300 mb-6 leading-7">
            {{$scheme->description}}
        </p>
    </div>

    <!-- Scheme Details Section (Interest Rate, CIBIL, etc.) -->
    <div class="mt-10 bg-white shadow-lg rounded-lg p-6">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-white mb-6">Details</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Interest Rates</h3>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Min: {{$scheme->min_interest_rate}}% | Max: {{$scheme->max_interest_rate}}%</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">CIBIL Score</h3>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Min: {{$scheme->min_cibil}} | Max: {{$scheme->max_cibil}}</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Tenure</h3>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Min: {{$scheme->min_tenure}} months | Max: {{$scheme->max_tenure}} months</p>
            </div>

            <div>
                <h3 class="text-lg font-medium text-gray-700 dark:text-gray-300">Loan Amount</h3>
                <p class="text-gray-600 dark:text-gray-400 mt-2">Min: ₹{{$scheme->min_amount}} | Max: ₹{{$scheme->max_amount}}</p>
            </div>
        </div>
    </div>

    <!-- Apply Button -->
    <div class="flex justify-center mt-10">
        <a href="/schemes-applicant/{{$scheme->slug}}/apply" class="inline-block px-6 py-3 bg-blue-600 text-white rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
            Apply Now
        </a>
    </div>

</div>

@endsection
