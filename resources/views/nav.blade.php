<div class="nav-bar">
    <div class="title" id="pageTitle" data-route-name="{{ Route::currentRouteName() }}">
        <span id="pageText" style=" text-transform: capitalize;"></span>
        <hr class="title-hr">
    </div>
    <nav class="navbar navbar-expand-lg nav-list">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('resume') }}">Resume</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects') }}">Projects</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<script>
    // Update the text inside the <span> element with id "pageText" dynamically with the route name
    let routeName = document.getElementById('pageTitle').getAttribute('data-route-name');
    document.getElementById('pageText').innerText = routeName;
</script>



