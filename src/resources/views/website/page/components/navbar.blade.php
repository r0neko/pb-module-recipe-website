<nav class="navbar sticky-top navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="{{ route("website.home") }}">Sweet & Chic Delights</a>
        <button aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler"
                data-bs-target="#navbarNav" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                @foreach($websiteNavigation->getItems() as $nav)
                <li class="nav-item">
                    <a @class(["nav-link", "active" => $nav->isActive()]) @if($nav->isActive()) aria-current="page" @endif href="{{ $nav->getUrl() }}">{{ $nav->getName() }}</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
