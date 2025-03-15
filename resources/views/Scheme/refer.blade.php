@extends('structure.layout')
@section('title')
    Refer Scheme
@endsection

@section('content')


    <div class="flex">
        <div class="w-1/4 flex-none ">

        </div>
        <div class="w-3/4 flex-initial  p-4">

            <ul role="list" class="divide-y divide-gray-100 ">

                @foreach ($schemes as $scheme)

                    <li class="flex justify-between gap-x-6 py-5">
                        <div class="flex min-w-0 gap-x-4">
                            <img class="size-40 flex-none rounded-full bg-gray-50" src="{{ $scheme->image }}" alt="">
                            <div class="min-w-0 flex-auto">
                                <p class="text-sm/6 font-semibold text-gray-900">
                                    {{ $scheme->title }}
                                </p>
                                <p class="mt-1 truncate text-xs/5 text-gray-500">
                                    {{ $scheme->description }}
                                </p>
                            </div>
                        </div>
                        <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                            <p class="text-sm/6 text-gray-900">
                                {{ $scheme->min_interest_rate }} - {{ $scheme->max_interest_rate }} %
                            </p>
                            <a href="schemes-applicant/{{ $scheme->slug }}" class="mt-1 text-xs/5 text-gray-500">
                                View Details
                            </a>

                            <a class="show-toast py-0.5 px-5 my-2 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-full border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700"
                                data-id="{{ auth()->user()->slug }}" data-name="{{ $scheme->slug }}">
                                Refer Scheme
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>

        </div>

    </div>
    <div class="w-full px-4 md:px-7 lg:px-5 xl:px-[35px]">
        <div class="wow fadeInUp flex items-center justify-center space-x-3 pt-10 pb-[70px]" data-wow-delay=".2s">
            {{ $schemes->links('vendor.pagination.custom-pagination') }}
        </div>
    </div>

    <!-- Toast Notification container -->
    <div id="toast" class="fixed bottom-5 right-5 hidden bg-green-500 text-white py-2 px-4 rounded-lg shadow-lg">
        <!-- Toast message will go here -->
    </div>


    <script>
        $(document).ready(function () {
            // Handle the button click
            $(".show-toast").click(function () {
                // Get values from the clicked button's data attributes
                var userId = $(this).data("id");
                var userName = $(this).data("name");

                // Create a custom message for the toast
                var message = "Copied refer link";

                // Correctly generate the URL using JavaScript
                var path = "schemes-applicant/" + userName;
                var url = "{{ url('') }}/" + path + "?vid="+ userId; // Correct URL construction

                navigator.clipboard.writeText(url);

                // Show the toast notification with the user message
                $("#toast").text(message).removeClass("hidden").addClass("transition-all duration-500 opacity-100");

                // Hide the toast after 3 seconds
                setTimeout(function () {
                    $("#toast").removeClass("opacity-100").addClass("opacity-0");

                    // After the fade-out, hide the toast
                    setTimeout(function () {
                        $("#toast").addClass("hidden");
                    }, 500);
                }, 3000);
            });
        });

    </script>
@endsection
