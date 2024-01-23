<!DOCTYPE html>
<html data-bs-theme="dark" lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Sweet Treats</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset("/bundles/RNRecipeWebsite/css/website/style.css") }}" rel="stylesheet">
</head>
<body>
@include("website.page.components.navbar")
<div class="container mt-3 page-{{ $page ?: 'none' }}">
    @yield("content")
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-3 mb-md-0 text-muted">powered by <a
                    href="https://github.com/r0neko/pookieboard">PookieBoard CMS</a></span>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
