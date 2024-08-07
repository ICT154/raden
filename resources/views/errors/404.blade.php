@include('templates.components.vendor-css')

<!-- page-wrapper Start-->
<main class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- error-404 start-->
    <div class="error-wrapper">
        <div class="container">
            <div class="col-md-8 offset-md-2">
                <h3>Page Not Found</h3>
                <p class="sub-content">The page you are attempting to reach is currently not available. This may be
                    because the page does not exist or has been moved.</p><a class="btn btn-primary"
                    href="{{ route('dashboard.index') }}">Back to Home</a>
            </div>
        </div>
    </div>
    <!-- error-404 end-->
</main>
