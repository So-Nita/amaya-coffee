{{-- mainlayout.blade.php --}}
<!DOCTYPE html>
<html lang="en">
    <head>
        
        @include('layout.partials.head')
        
    </head>

    <body>

        @include('layout.partials.footer-scripts')
        
        @include('layout.partials.nav')

        @include('layout.partials.header')

        @yield('content')

        @include('layout.partials.footer')


    </body>

</html>

{{--  --}}
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.partials.head')
</head>
<body>
    @include('layout.partials.footer-scripts')
    @include('layout.partials.nav')
    @include('layout.partials.header')

    @if (auth()->check())
        @if (auth()->user()->userType === 'admin')
            @include('admin.dashboard')
        @else
            @include('user.demo')
        @endif
    @endif

    @include('layout.partials.footer')
</body>
</html> --}}
