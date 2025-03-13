
@extends('structure.layout')
@section('title')
    Schemes
@endsection

@section('content')

<div class="flex">
    <div class="w-1/3 flex-none ">01</div>
    <div class="w-2/3 flex-initial  p-4">
        <ul role="list" class="divide-y divide-gray-100 ">
            @foreach ($schemes as $scheme )

            <li class="flex justify-between gap-x-6 py-5">
              <div class="flex min-w-0 gap-x-4">
                <img class="size-20 flex-none rounded-full bg-gray-50"
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
@endsection
