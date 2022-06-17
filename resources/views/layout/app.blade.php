<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

@include('includes.navbar')

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success mb-3">
            {{ session()->get('success') }}
        </div>
    @endif

    @yield('content')
</div>

@include('includes.footer')

</body>
</html>
