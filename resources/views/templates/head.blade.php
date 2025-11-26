<script src="{{ asset('/assets/vendor/jquery/jquery.min.js') }}"></script>

<script src="{{ asset('/assets/vendor/moment/moment.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/moment/id.min.js') }}"></script>

<script src="{{ asset('/assets/vendor/tostr/toastr.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/font-awesome/all.min.js') }}"></script>
<script src="{{ asset('/assets/vendor/sweetalert/sweetalert2@11.js') }}"></script>

<link rel="stylesheet" href="{{ asset("/assets/scripts/css/app.css") }}" media="all">

<!-- Scripts -->
@routes
@if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/js/app.js', "resources/js/**/{$page['component']}.vue"])
@endif

@inertiaHead