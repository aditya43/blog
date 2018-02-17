<header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-4 pt-1">
            <a class="text-muted" href="#">Subscribe</a>
        </div>
        <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Large</a>
        </div>
        <div class="col-4 d-flex justify-content-end align-items-center">
            @if (Auth::check())
                <div class="dropdown">
                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="/logout">Logout</a>
                    </div>
                </div>
            @else
                <a class="btn btn-sm btn-outline-secondary" href="/register">Sign up</a>
            @endif
        </div>
    </div>
</header>