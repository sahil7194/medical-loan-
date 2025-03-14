@extends('structure.layout')
@section('title')
    Application History
@endsection

@section('content')

    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white   pb-[80px]">

        <h1 class="py-4 font-bold">
            Application History
        </h1>
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Scheme Title
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Status
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Applied Date
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            View Details
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schemes as $scheme)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $scheme->title }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{ $scheme['pivot']['status'] }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ \Carbon\Carbon::parse($scheme['pivot']['created_at'])->format('l, jS F Y h:i A') }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">

                            <a href="schemes-applicant/{{ $scheme->slug }}" class="mt-1 text-xs/5 text-gray-500">
                                Details
                            </a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="w-full px-4 md:px-7 lg:px-5 xl:px-[35px]">
        <div class="wow fadeInUp flex items-center justify-center space-x-3 pt-10 pb-[70px]" data-wow-delay=".2s">
            {{ $schemes->links('vendor.pagination.custom-pagination') }}
        </div>

    </div>
@endsection
