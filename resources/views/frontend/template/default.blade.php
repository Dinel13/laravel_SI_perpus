<!DOCTYPE html>
<html lang="en">

@include('frontend.template.partial.head')

<body>

{{-- navigation --}}
@include('frontend.template.partial.navigation')

    <div class="container">
       @yield('content')
    </div>

<!-- script -->
@include('frontend.template.partial.script')
@include('frontend.template.partial.toast')

</body>

</html>