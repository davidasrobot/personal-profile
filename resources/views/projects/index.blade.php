@extends('layouts/app')

@section('content')
    <div class="container">
      @if (Request::path() === '/')
        <div class="welcome-words py-3 mx-5">
            <h2>Hi, I'm {{$abouts->name}}</h2>
            <div class="lead text-secondary">
              {!! substr($abouts->about, 0, 200) !!}...
            </div>
            <a href="/me" class="read-more">Read More &#8594;</a>
        </div>
      @endif

      <div class="content-display">
        <div class="row">

          @foreach ($projects as $project)
          {{-- START SINGLE PROJECT DISPLAY --}}
          <div class="col-md-6 my-3">
            <a href="/projects/{{$project->slug}}">
              <div class="img-container">
                <img src="
                {{Voyager::image($project->display_image)}}
                " alt="Avatar" class="image">
                <div class="overlay">
                  <div class="text">
                    <h4 class="font-weight-bold text-uppercase">{{$project->name}}</h4>
                    <p>{{substr($project->about, 3, 100)}}...</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          {{-- END SINGLE PROJECT DISPLAY --}}    
          @endforeach

        </div>
      </div>
    </div>
@endsection