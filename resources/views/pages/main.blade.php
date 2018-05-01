{{--
Main event view
--}}
@extends('partials.master')

@section('page-content')
    @if(!$event)
        <div class="alert alert-danger">
            <strong><i class="fas fa-exclamation-triangle"></i> Unable to load event.</strong>
        </div>
    @endif
@endsection