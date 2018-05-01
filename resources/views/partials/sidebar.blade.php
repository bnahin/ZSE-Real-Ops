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
                        <strong>{{ Auth::user()->full_name }}</strong></h5></div>

                <div class="card-body">
                    <p class="text-muted"><i class="fas fa-paper-plane"></i> <strong>Controller 1</strong>
                        | {{-- Highest Endorsement --}} Center |
                        Seattle ARTCC</p>
                    <p class="text-muted"><i class="fas fa-plane"></i> Active Pilot <strong>P1</strong></p>
                    <p class="text-success"><strong><i class="fa fa-cogs"></i> Full Admin</strong></p>
                </div>

                <div class="card-footer">
                    <a style="color:#d20552;" href="{{ url('logout') }}"><strong><i class="fas fa-sign-out-alt"></i>
                            Log Out</strong></a></div>
            </div>
        @endauth
        <hr>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteNamed('home')) ? 'active' : '' }}" href="/"><i
                        class="fas fa-home"></i> RealOps Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ (Route::currentRouteNamed('event')) ? 'active' : '' }}" href="{{ url('event') }}">
                    <i class="fas fa-calendar-alt"></i> Event Information and Booking
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-question-circle"></i> What is this?
                </a>
            </li>
            <!--Only if logged in-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Pilot Tools</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-book"></i> Pilot Briefing & SOP
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-calendar-check"></i> My Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-location-arrow"></i> Charts
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="https://flightaware.com/statistics/ifr-route/">
                    <i class="fas fa-external-link-alt"></i> Preferred Routes (FlightAware Routes)
                </a>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>ATC Info</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-clock"></i> ATC Schedule
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-clipboard-list"></i> Event Controllers
                </a>
            </li>
            <!--Only for isAdmin in ZSE Database-->
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Administration</span>
            </h6>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-edit"></i> Edit Events
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="far fa-calendar-alt"></i> Manage Bookings
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-users"></i> Manage Pilots
                    <!--This includes mass mailer-->
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="fas fa-wrench"></i> System Messages
                </a>
            </li>
        </ul>
    </div>
</nav>