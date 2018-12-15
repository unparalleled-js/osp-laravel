@extends('layouts.app')

@section('content')
    <div class="hero-section black-bg">
        <h1 class="text-center text-uppercase">
            Where the world creates
            <br>
            and big ideas grow.
        </h1>
        <p class="text-center">
            Talent is universal and evenly distributed.
            <br>
            Opportunities  aren`t. Help us change that.
        </p>

        @include('chunks.forms.projects-search-form')
    </div>
@endsection