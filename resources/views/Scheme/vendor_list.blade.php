@extends('structure.layout')
@section('title')
    Schemes
@endsection

@section('content')

    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white   pb-[80px]">

        <h1 class="py-4 font-bold">
            Schemes
        </h1>
        <div class="flex flex-row-reverse my-5">
            <div class="flex justify-center mt-10">
                <a href="/schemes/create"
                    class="inline-block px-3 py-2 bg-green-600 text-white rounded-lg shadow-md hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-opacity-50">
                    Create
                </a>
            </div>
        </div>

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
                            Application List
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Application Count
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Created At
                        </p>
                    </th>
                    <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                        <p
                            class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                            Actions
                        </p>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($schemes as $scheme)
                    <tr>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                {{ $scheme->id }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{ $scheme->title }} <br>
                                {{ $scheme->memo() }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{-- {{ $scheme->slug }} --}}

                                View Applications
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{-- @foreach ( $scheme->users as $us)
                                {{ $us->id }} {{ $us->name }}
                                {{ $us->pivot}}
                                @endforeach --}}

                                {{-- {{ Storage::url($scheme->image) }} --}}
                                {{ $scheme->users->count() }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                {{-- {{ }} --}}
                                {{ \Carbon\Carbon::parse($scheme->created_at)->format('l, jS F Y h:i A') }}
                            </p>
                        </td>
                        <td class="p-4 border-b border-blue-gray-50">
                            <p class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">

                                <h5>
                                    <a href="/schemes/{{$scheme->id}}/edit"
                                        class="mb-3 inline-block text-xl font-semibold text-black hover:text-primary dark:text-white dark:hover:text-primary sm:text-2xl lg:text-xl xl:text-2xl">
                                        Edit
                                    </a>
                                </h5>


                                {{-- Delete --}}
                            <form method="POST" action="{{ url('schemes/' . $scheme->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            </p>

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
