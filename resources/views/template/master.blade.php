<!DOCTYPE html>
<html lang="en">
<head>
    @include('template.head')
</head>
<body>
    <div class="wrapper">
        @include('template.navbar')
        @include('template.sidebar')
        <div class="content-wrapper">
            <section class="content">
                <div class="content">
                    {{-- Ini Content --}}
                    @yield('content')
                </div>
            </section>
        </div>
    </div>
    @include('template.js')
</body>
</html>