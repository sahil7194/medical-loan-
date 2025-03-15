@extends('structure.layout')
@section('title')
    Reference History
@endsection

@section('content')

    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white   pb-[80px]">

        <h1 class="py-4 font-bold">
            Reference History
        </h1>
        <table class="w-full text-left table-auto min-w-max">
            <thead>
                <tr>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Scheme id
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Scheme Slug
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Application Count
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $scheme)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $scheme->id }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{ $scheme->slug }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{-- @foreach ( $scheme->users as $us)
                                    {{ $us->id }}  {{ $us->name }}
                                    {{ $us->pivot}}
                                @endforeach --}}

                                {{ $scheme->users->count() }}
                            </p>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div class="w-full px-4 md:px-7 lg:px-5 xl:px-[35px]">
        <div class="wow fadeInUp flex items-center justify-center space-x-3 pt-10 pb-[70px]" data-wow-delay=".2s">
            {{ $user->links('vendor.pagination.custom-pagination') }}
        </div>

    </div>
@endsection
