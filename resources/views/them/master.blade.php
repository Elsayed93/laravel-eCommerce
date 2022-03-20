<!DOCTYPE html>
<html lang="en">

@include('them.includes.head')

<body class="home-page home-01 ">

    @include('them.includes.header')

    <main id="main">
        @yield('content')
    </main>

    @include('them.includes.footer')
    @include('them.includes.js')

</body>

</html>
