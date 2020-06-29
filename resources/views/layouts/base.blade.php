<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @hasSection('title')
            <title>@yield('title') - {{ config('app.name') }}</title>
        @else
            <title>{{ config('app.name') }}</title>
        @endif

        <!-- Fonts -->
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @livewireStyles

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <style>
            h1 {
                font-size: 32px;
            }
            h2{
                font-size: 24px;
            }
        </style>
    </head>

    <body class="bg-gray-900">
        
        <nav class="flex justify-center flex-wrap p-4">
            <div class="flex items-center flex-shrink-0 border-2 border-whitw-800 mt-8 px-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 172 172"><g fill="none" stroke-miterlimit="10" style="mix-blend-mode:normal"><path d="M0 172V0h172v172z"/><path d="M122.543 29.257a11.41 11.41 0 00-2.607.168c-1.675.31-3.2 1.033-4.414 2.247l-72.018 72.032a1.72 1.72 0 00-.38.578l-13.76 34.4a1.72 1.72 0 00.38 1.854l1.72 1.72a1.72 1.72 0 001.854.38l34.4-13.76a1.72 1.72 0 00.578-.38l72.032-72.022c2.427-2.427 2.895-6.094 2.019-9.735-.877-3.641-3.07-7.437-6.36-10.726-3.289-3.29-7.088-5.483-10.73-6.36-.91-.219-1.82-.355-2.714-.396zm-1.055 3.43c.892-.049 1.885.052 2.967.312 2.884.694 6.213 2.559 9.1 5.446 2.887 2.887 4.752 6.216 5.446 9.1.694 2.884.245 5.144-1.109 6.497l-4.337 4.337-1.367-1.367a.86.86 0 10-1.216 1.216l1.367 1.367-3.191 3.192-19.935-19.935 3.084-3.084 15.127 15.128a.86.86 0 101.217-1.217l-15.128-15.127 4.445-4.444c.676-.677 1.579-1.13 2.674-1.324.274-.049.56-.081.856-.097zm-13.49 11.381l19.934 19.935-3.229 3.228-19.934-19.934zm-5.661 5.66l2.445 2.446-55.188 55.188-2.442-2.442zm3.661 3.663l3.162 3.16-55.185 55.192-3.164-3.165zm4.378 4.377l3.9 3.9-3.944 3.944a.86.86 0 101.216 1.216l3.944-3.944 3.084 3.084-46.084 46.084a.86.86 0 101.216 1.216l46.084-46.084 2.48 2.48-55.192 55.184-6.776-6.776 47.804-47.804a.86.86 0 10-1.216-1.216l-47.804 47.804-3.897-3.897zM45.348 107.98l18.672 18.672-19.508 7.804-6.968-6.968zm24.295 7.253a.86.86 0 00-.591.259l-1.72 1.72a.86.86 0 101.216 1.216l1.72-1.72a.86.86 0 00-.625-1.475zM36.85 129.225l5.926 5.926-9.682 3.87-.114-.114z" fill="#fff"/></g></svg>
              <span class="uppercase font-regular text-3xl text-blue-400 tracking-wider"> <a href="/">Simple Markdown Blog</a> </span>
            </div>
            </div>
        </nav>
        @yield('body')
        <script src="{{ mix('js/app.js') }}"></script>
        @livewireScripts
    </body>
</html>
