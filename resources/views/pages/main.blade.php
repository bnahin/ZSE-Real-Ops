@extends('partials.master')

@section('page-content')
    <section id="home-intro">
    <h2>Welcome to Seattle ARTCC's RealOps!</h2>
    <p> This system provides pilots and ATC on the VATSIM network to schedule flights according to real world times,
        using airports within the ZSE airspace. This is mainly used to coordinate events and plan accordingly. See below for the current event information.</p>
    </section>
    <hr>
    <section id="upcoming">
        <h2>Upcoming Events</h2>
        <div class="card">
            <img class="card-img-top" src="images/events/45.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Spokane Showdown</h5>
                <p class="card-text">{{ Faker\Factory::create()->paragraph }}</p>
                <a href="#" class="btn btn-success">Book Now <i class="fas fa-arrow-right"></i></a>
            </div>
        </div>
    </section>
@endsection