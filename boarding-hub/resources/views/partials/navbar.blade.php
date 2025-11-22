<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg border-bottom border-secondary fixed-top">
    <div class="container px-4">
        <a class="navbar-brand fs-4 fw-bold custom-blue" href="{{ url('/') }}">BoardingHub</a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item ms-lg-4 me-lg-3"> 
                    <a class="nav-link @if(Request::is('boarding-house-lists')) active @endif" href="{{ url('boarding-house-lists') }}">Boarding House lists</a>
                </li>
                <li class="nav-item me-lg-3">
                    <a class="nav-link @if(Request::is('landlords-owners')) active @endif" href="{{ url('landlords-owners') }}">Landlords & Owners</a>
                </li>
            </ul>
            <a href="#" class="btn custom-bg-blue text-white rounded-pill px-4 py-2" role="button">Login</a>
        </div>
    </div>
</nav>