
@extends('structure.layout')
@section('title')
    Cibil Check Result
@endsection

@section('content')

<div class="w-full px-4 md:px-7 lg:px-5 xl:px-[35px]">
    <div class="wow fadeInUp flex items-center justify-center space-x-3 pt-10 pb-[70px]" data-wow-delay=".2s">
        <div class="w-full md:w-1/2 bg-white p-8 rounded shadow-lg dark:bg-dark dark:text-white">
            <div class="text-center mb-6">
                <h2 class="text-2xl font-semibold text-black dark:text-white">Your CIBIL Score</h2>
                <p class="text-lg text-gray-600 dark:text-gray-300">Check your credit score for a better financial future</p>
            </div>

            <div class="flex justify-center items-center space-x-4">
                <!-- Credit Score Value -->
                <div class="flex items-center justify-center h-20 w-20 rounded-full bg-gray-200 text-xl font-bold text-black dark:bg-gray-700 dark:text-white">
                    {{ 500 }} <!-- This is where the actual credit score number will go -->
                </div>
            </div>

            <!-- Score Range Indication -->
            <div class="mt-6">
                <div class="text-center text-lg font-medium text-black dark:text-white">
                    @if (500 >= 750)
                        <span class="text-green-500">Excellent</span>
                    @elseif (500 >= 650)
                        <span class="text-yellow-500">Good</span>
                    @elseif (500 >= 550)
                        <span class="text-orange-500">Fair</span>
                    @else
                        <span class="text-red-500">Poor</span>
                    @endif
                </div>

                <!-- Additional Information -->
                <div class="mt-4 text-center text-gray-500 dark:text-gray-300">
                    <p>Your credit score is an important factor in determining your loan eligibility, interest rates, and financial opportunities.</p>
                </div>
            </div>

            <!-- Action Button -->
            {{-- <div class="mt-8 text-center">
                <a href="{{ route('user.details') }}" class="inline-block px-6 py-3 bg-primary text-white rounded-full font-medium hover:bg-primary-dark transition-colors dark:bg-primary-dark dark:hover:bg-primary">
                    View Details
                </a>
            </div> --}}
        </div>
    </div>
</div>
@endsection
