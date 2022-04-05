@extends('layouts.app')

@section('content')
    <div class=" max-w-xl mx-auto">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Create Company</h1>
            </div>
        </div>
    </div>

    <div class="rounded shadow flex bg-white px-4 py-8 max-w-xl mx-auto">
        <form class="w-full" method="POST" action="{{ '/'.request()->path() }}" enctype="multipart/form-data">
            @csrf 
            <div class="space-y-8 divide-y divide-gray-200">
                <div>
                    <div class="grid gap-y-6 gap-x-4">

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700"> Name (required) </label>
                            <div class="mt-1">
                                <input type="text" name="name" id="name" value="{{ old('name') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @if ($errors->has('name'))
                                <p class="mt-2 text-sm text-red-500">{{ $errors->first('name') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700"> Email </label>
                            <div class="mt-1">
                                <input type="email" name="email" id="email" value="{{ old('email') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @if ($errors->has('email'))
                                <p class="mt-2 text-sm text-red-500">{{ $errors->first('email') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="website" class="block text-sm font-medium text-gray-700"> Website </label>
                            <div class="mt-1">
                                <input type="text" name="website" id="website" value="{{ old('website') }}" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @if ($errors->has('website'))
                                <p class="mt-2 text-sm text-red-500">{{ $errors->first('website') }}</p>
                            @endif
                        </div>

                        <div>
                            <label for="logo" class="block text-sm font-medium text-gray-700"> Logo (min 100x100) </label>
                            <div class="mt-1">
                                <input type="file" name="logo" id="logo" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                            </div>
                            @if ($errors->has('logo'))
                                <p class="mt-2 text-sm text-red-500">{{ $errors->first('logo') }}</p>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="mt-12">
                <div class="flex justify-end">
                <button
                    type="button"
                    class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                    >
                    Save
                </button>
                </div>
            </div>            
        </form>
    </div>


@endsection