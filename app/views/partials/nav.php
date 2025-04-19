<nav class="navbar nav-underline navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="/">
            <span class="fw-bold fs-4 fst-italic">
                Pahan<span class="text-primary">App</span>
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item me-1">
                    <a class="nav-link <?= isActive('/') ? 'active text-primary' : '' ?>" aria-current="page"
                        href="/">Newsfeed</a>
                </li>
                <li class="nav-item me-1">
                    <a class="nav-link <?= isActive('/posts') ? 'active text-primary' : '' ?>" aria-current="page"
                        href="/posts">Posts</a>
                </li>
            </ul>
        </div>
    </div>
</nav>