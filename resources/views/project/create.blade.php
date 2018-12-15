@extends('layouts.app')

@section('title', __('New Project'))

@section('content')

  <div class="row justify-content-center">
    <div class="col-sm-5">
      <h1>{{__('New Project')}}</h1>

      <form action="" method="post">
        <div class="input-group">
          <label for="name">{{  __('Project name') }}</label>
          <input id="name" name="name" type="text" class="form-control" placeholder="{{ __('FlyingCars') }}">
        </div>
        <div class="input-group">
          <label for="short_description">{{__('What are you making?')}}</label>
          <input id="short_description" name="short_description" type="text" class="form-control" placeholder="{{ __('A flying car') }}">
        </div>
        <div class="input-group">
          <label for="problem_solved">{{__('What problem you are solving?')}}</label>
          <input id="problem_solved" name="problem_solved" type="text" class="form-control" placeholder="{{ __('Traffic in big cities') }}">
        </div>
        <div class="input-group">
          <label for="location">{{__('Location')}}</label>
          <input id="location" name="location" type="text" class="form-control" placeholder="{{ __('New York') }}">
        </div>
        <div class="input-group">
          <label for="web_site">{{__('Website url')}}</label>
          <input id="web_site" name="web_site" type="text" class="form-control" placeholder="https://flyingcars.com/">
        </div>
        <div class="input-group">
          <label for="description">
            {{__('Tell the world more details')}}
          </label>
          <textarea name="description" id="description" cols="30" rows="10">
            {{__('FlyingCars')}}
          </textarea>
        </div>
      </form>
    </div>
  </div> <!-- end .row -->

@endsection