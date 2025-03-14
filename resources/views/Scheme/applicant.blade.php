
@extends('structure.layout')
@section('title')
    Schemes
@endsection

@section('content')

<div class="flex">
    <div class="w-1/4 flex-none ">
        {{-- filter --}}
        {{-- <div class="max-w-3xl mx-auto p-6">
            <form action=" {{url('schemes-applicant')}}" method="GET" class="space-y-4">
                @csrf

                <!-- Interest Rate Range -->
                <div class="space-y-2">
                    <label for="min_interest_rate" class="block text-lg font-medium">Interest Rate Range</label>
                    <div class="flex items-center space-x-4">
                        <input type="range" id="min_interest_rate" name="min_interest_rate" min="0" max="100" value="{{ request('min_interest_rate', 0) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="min_interest_rate_value" name="min_interest_rate_value" value="{{ request('min_interest_rate', 0) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                        <span class="text-lg">to</span>
                        <input type="range" id="max_interest_rate" name="max_interest_rate" min="0" max="100" value="{{ request('max_interest_rate', 100) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="max_interest_rate_value" name="max_interest_rate_value" value="{{ request('max_interest_rate', 100) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                    </div>
                </div>

                <!-- CIBIL Score Range -->
                <div class="space-y-2">
                    <label for="min_cibil" class="block text-lg font-medium">CIBIL Score Range</label>
                    <div class="flex items-center space-x-4">
                        <input type="range" id="min_cibil" name="min_cibil" min="0" max="900" value="{{ request('min_cibil', 0) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="min_cibil_value" name="min_cibil_value" value="{{ request('min_cibil', 0) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                        <span class="text-lg">to</span>
                        <input type="range" id="max_cibil" name="max_cibil" min="0" max="900" value="{{ request('max_cibil', 900) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="max_cibil_value" name="max_cibil_value" value="{{ request('max_cibil', 900) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                    </div>
                </div>

                <!-- Loan Tenure Range -->
                <div class="space-y-2">
                    <label for="min_tenure" class="block text-lg font-medium">Loan Tenure (Months)</label>
                    <div class="flex items-center space-x-4">
                        <input type="range" id="min_tenure" name="min_tenure" min="0" max="60" value="{{ request('min_tenure', 0) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="min_tenure_value" name="min_tenure_value" value="{{ request('min_tenure', 0) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                        <span class="text-lg">to</span>
                        <input type="range" id="max_tenure" name="max_tenure" min="0" max="60" value="{{ request('max_tenure', 60) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="max_tenure_value" name="max_tenure_value" value="{{ request('max_tenure', 60) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                    </div>
                </div>

                <!-- Loan Amount Range -->
                <div class="space-y-2">
                    <label for="min_amount" class="block text-lg font-medium">Loan Amount Range</label>
                    <div class="flex items-center space-x-4">
                        <input type="range" id="min_amount" name="min_amount" min="0" max="1000000" value="{{ request('min_amount', 0) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="min_amount_value" name="min_amount_value" value="{{ request('min_amount', 0) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                        <span class="text-lg">to</span>
                        <input type="range" id="max_amount" name="max_amount" min="0" max="1000000" value="{{ request('max_amount', 1000000) }}" class="w-full h-2 bg-gray-300 rounded-md" />
                        <input type="number" id="max_amount_value" name="max_amount_value" value="{{ request('max_amount', 1000000) }}" class="w-20 p-2 text-sm border rounded-md" readonly />
                    </div>
                </div>

                <!-- Apply Filters Button -->
                <div class="mt-4">
                    <button type="submit" class="w-full py-2 px-4 bg-blue-600 text-black text-sm font-medium rounded-md hover:bg-blue-700 transition duration-300">Apply Filters</button>
                </div>
            </form>
        </div>

        <script>
            // Sync range input with its associated number field
            document.querySelectorAll('input[type="range"]').forEach(range => {
                const numberInput = document.getElementById(range.id + '_value');
                range.addEventListener('input', () => {
                    numberInput.value = range.value;
                });
            });
        </script> --}}
    </div>
    <div class="w-3/4 flex-initial  p-4">
        <ul role="list" class="divide-y divide-gray-100 ">
            @foreach ($schemes as $scheme )

            <li class="flex justify-between gap-x-6 py-5">
              <div class="flex min-w-0 gap-x-4">
                <img class="size-40 flex-none rounded-full bg-gray-50"
                src="{{ $scheme->image }}"
                 alt="">
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
@endsection
