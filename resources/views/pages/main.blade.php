{{--
Main event view
--}}
@extends('partials.master')

@section('page-content')
    @if(!$events)
        <div class="alert alert-danger">
            <strong>Unable to load event.</strong>
        </div>
    @endif
@endsection