<aside class="col-md-4 blog-sidebar">
          <div class="p-3 mb-3 bg-light rounded">
            <h4 class="font-italic">Create New Article</h4>
            @if (auth()->check())
                <p class="mb-0">
                    You are logged in as <em>{{ auth()->user()->name }}</em><br><br>
                    You can create and publish new articles as well as post comments to existing articles.<br><br>
                    <a href="/posts/create" class="btn btn-primary">New Article</a>
                </p>
            @else
                <p class="mb-0">
                    You are not logged in. Create an account or login to your existing account to
                    create new articles or comment to existing articles.
                    <div class="btn-group" role="group" aria-label="Sign In/Up">
                        <a class="btn btn-primary" href="/login">Sign In</a>
                        <a class="btn btn-primary" href="/register">Sign Up</a>
                    </div>
                </p>
            @endif
          </div>

          <div class="p-3">
            <h4 class="font-italic">Archives</h4>
            <ol class="list-unstyled mb-0">
                @foreach ($archives as $archive)
                    <li><a href="/?month={{ $archive->month }}&year={{ $archive->year }}">
                        {{ $archive->month }} {{ $archive->year }} ({{ $archive->posts }})
                    </a></li>
                @endforeach
            </ol>
          </div>

          <div class="p-3">
            <h4 class="font-italic">Elsewhere</h4>
            <ol class="list-unstyled">
              <li><a href="#">GitHub</a></li>
              <li><a href="#">Twitter</a></li>
              <li><a href="#">Facebook</a></li>
            </ol>
          </div>
</aside><!-- /.blog-sidebar -->