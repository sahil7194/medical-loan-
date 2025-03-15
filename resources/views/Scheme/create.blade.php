@extends('structure.layout')
@section('title')
    Create Schemes
@endsection

@section('content')

    <div>
        <form class="w-1/2" action="{{url('schemes')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="space-y-12">
                <div class=" pb-12">
                    <h2 class="text-base/7 font-semibold text-gray-900">Create Scheme</h2>
                    <p class="mt-1 text-sm/6 text-gray-600">This information will be displayed publicly so be careful what
                        you share.</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                        <div class="sm:col-span-4">
                            <label for="title" class="block text-sm/6 font-medium text-gray-900">title</label>
                            <div class="mt-2">
                                <input id="title" name="title" type="text" autocomplete="title"
                                    class="block w-full rounded-md bg-white px-5 py-2.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm/6 font-medium text-gray-900">About</label>
                            <div class="mt-2">
                                <textarea name="description" id="description" rows="3"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"></textarea>
                            </div>
                            <p class="mt-3 text-sm/6 text-gray-600">Write a few sentences description.</p>
                        </div>

                        <div class="sm:col-span-4">
                            <label for="redirection_link" class="block text-sm/6 font-medium text-gray-900">Redirection Link</label>
                            <div class="mt-2">
                                <input id="redirection_link" name="redirection_link" type="text" autocomplete="redirection_link"
                                    class="block w-full rounded-md bg-white px-5 py-2.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm/6 font-medium text-gray-900">Cover photo</label>
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                <div class="text-center">
                                    <svg class="mx-auto size-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor"
                                        aria-hidden="true" data-slot="icon">
                                        <path fill-rule="evenodd"
                                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    <div class="mt-4 flex text-sm/6 text-gray-600">
                                        <label for="file-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 focus-within:outline-hidden hover:text-indigo-500">
                                            <span>Upload a file</span>
                                            <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" pb-12 border-b border-gray-900/10">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="min_interest_rate" class="block text-sm/6 font-medium text-gray-900">Min Interest Rate</label>
                            <div class="mt-2">
                                <input type="number" name="min_interest_rate" id="min_interest_rate"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="max_interest_rate" class="block text-sm/6 font-medium text-gray-900">Max Interest Rate</label>
                            <div class="mt-2">
                                <input type="number" name="max_interest_rate" id="max_interest_rate"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="min_cibil" class="block text-sm/6 font-medium text-gray-900">Min Cibil</label>
                            <div class="mt-2">
                                <input type="number" name="min_cibil" id="min_cibil" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="max_cibil" class="block text-sm/6 font-medium text-gray-900">Max Cibil</label>
                            <div class="mt-2">
                                <input type="number" name="max_cibil" id="max_cibil" autocomplete="family-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="min_tenure" class="block text-sm/6 font-medium text-gray-900">Min Tenure</label>
                            <div class="mt-2">
                                <input type="text" name="min_tenure" id="min_tenure" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="max_tenure" class="block text-sm/6 font-medium text-gray-900">Max Tenure</label>
                            <div class="mt-2">
                                <input type="text" name="max_tenure" id="max_tenure" autocomplete="family-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>


                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="min_amount" class="block text-sm/6 font-medium text-gray-900">Min amount</label>
                            <div class="mt-2">
                                <input type="text" name="min_amount" id="min_amount" autocomplete="given-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                            <label for="max_amount" class="block text-sm/6 font-medium text-gray-900">Max Amount</label>
                            <div class="mt-2">
                                <input type="text" name="max_amount" id="max_amount" autocomplete="family-name"
                                    class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-black shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>

    </div>
@endsection
