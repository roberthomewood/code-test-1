@extends('layouts.app')

@section('content')
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Companies</h1>
                </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <a href="{{ route('companies.create') }}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Add company</a>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 md:pl-0">Name</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Email</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Website</th>
                                <th scope="col" class="py-3.5 px-3 text-left text-sm font-semibold text-gray-900">Employees</th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6 md:pr-0">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach ($companies as $company)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 md:pl-0">{{ $company->name }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $company->email }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $company->website }}</td>
                                    <td class="whitespace-nowrap py-4 px-3 text-sm text-gray-500">{{ $company->employees_count }}</td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6 md:pr-0">
                                        <a href="{{ route('companies.show', ['company' => $company->id]) }}" class="text-indigo-600 hover:text-indigo-900 mr-2">View<span class="sr-only">, {{ $company->name }}</span></a>
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit<span class="sr-only">, {{ $company->name }}</span></a>
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Delete<span class="sr-only">, {{ $company->name }}</span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="py-4">
                        {{ $companies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection