<nav>
    <div class="sidebar">
        @guest
            <p class="nav-item"><a href="{{ url('/login') }}" id="login" class="nav-link"><strong><i
                            class="fas fa-sign-in-alt"></i> Sign
                        in</strong></a></p>
        @endguest
        @auth
            <div class="card border-success mb-3">

                <div class="card-header"><h5><i class="fas fa-user"></i> Welcome,
                        <strong>{{ Auth::user()->getFullName() }}</strong></h5></div>

                <div class="card-body">
                    <p class="text-muted"><i class="fas fa-paper-plane"></i> <strong>Controller 1</strong>
                        | {{-- Highest Endorsement --}} Center |
                        Seattle ARTCC</p>
                    <p class="text-muted"><i class="fas fa-plane"></i> Active Pilot <strong>P1</strong></p>
                    <p class="text-success"><strong><i class="fa fa-cogs"></i> Full Admin</strong></p>
                </div>

                <div class="card-footer">
                    <a style="color:#d20552;" href="{{ url('/logout') }}"><strong><i class="fas fa-sign-out-alt"></i>
                            Log Out</strong></a></div>
            </div>
        @endauth
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#"><i class="fas fa-home"></i> RealOps Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    Event Information and Booking
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
                    Pilot Briefing & SOP
                </a>
            </li>
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