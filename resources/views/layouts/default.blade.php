<!DOCTYPE html>
<html lang="en">
    <head>

            @include('includes.frontsite.meta')

            <title>@yield('title') | MeetDoctor</title>

            @stack('before-style')
                @include('includes.frontsite.style')
            @stack('after-style')

    </head>
    <body>
            @include('components.frontsite.header')
                <!-- Fungsi Yield adalah untuk memasukkan fungsi HTML -->
                @yield('content')
            @include('components.frontsite.footer')


            {{-- stack adalah untuk meng-import script yang hanya jalan di pages tertentu saja --}}
            @stack('before-script')
                @include('includes.frontsite.script')
            @stack('after-script')

            {{--  modals --}}
            

    </body>
</html>