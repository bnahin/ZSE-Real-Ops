<nav>
    <div class="sidebar">
        @guest
            <p class="nav-item"><a href="#" id="login" class="nav-link"><strong><i class="fas fa-sign-in-alt"></i> Sign
                        in</strong></a></p>
        @endguest
        @auth
            <div class="card border-success mb-3" style="max-width: 18rem;">
                <div class="card-header"><h5>Welcome, <strong>{{ Auth::user()->name }}</strong></h5></div>
                <div class="card-body text-success">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        @endauth
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="fas fa-home"></i> RealOps Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Event Information
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    What is this?
                </a>
            </li>
            <!--Only if logged in-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Pilot Tools</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    My Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Charts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Preferred Routes (FlightAware Route Analyzer)
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ATC Info</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    ATC Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Event Controllers
                </a>
            </li>
            <!--Only for isAdmin in ZSE Database-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administration</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Manage Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Manage Pilots
                    <!--This includes mass mailer-->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    System Messages
                </a>
            </li>
        </ul>
    </div>
</nav>