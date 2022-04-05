<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased h-full">
        <div class="flex flex-col items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-2xl w-full space-y-8">
                <div>
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">CODE TEST</h2>
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <div>
                    <div class="hidden sm:block">
                        <nav class="relative z-0 rounded-lg shadow flex divide-x divide-gray-200" aria-label="Tabs">
                        <!-- Current: "text-gray-900", Default: "text-gray-500 hover:text-gray-700" -->
                        <a href="{{ route('companies.index') }}" class="{{ request()->is('companies*') ? ' text-gray-900' : 'text-gray-500' }} rounded-l-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10" aria-current="page">
                            <span>Companies</span>
                            <span aria-hidden="true" class="{{ request()->is('companies*') ? ' bg-indigo-500' : 'bg-transparent' }} absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>

                        <a href="{{ route('employees.index') }}" class="{{ request()->is('employees*') ? ' text-gray-900' : 'text-gray-500' }}  hover:text-gray-700 group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                            <span>Employees</span>
                            <span aria-hidden="true" class="{{ request()->is('employees*') ? ' bg-indigo-500' : 'bg-transparent' }} absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>

                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" 
                            class="text-gray-500 hover:text-gray-700 rounded-r-lg group relative min-w-0 flex-1 overflow-hidden bg-white py-4 px-4 text-sm font-medium text-center hover:bg-gray-50 focus:z-10">
                            <span>Logout</span>
                            <span aria-hidden="true" class="bg-transparent absolute inset-x-0 bottom-0 h-0.5"></span>
                        </a>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="mt-12 px-12 w-full space-y-8">
                @yield('content')
            </div>
        </div>
    </body>
</html>
