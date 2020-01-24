@extends('layouts.app')

@section('content')
    <div class="container">
      {{-- HEADER IMAGE --}}
      <img src="
      {{Voyager::image($projects->header_image)}}
      " class="img-fluid" alt="Responsive image">

      {{-- DESCRIPTION --}}
      <div class="row text-justify my-5 r-margin lead">
        <div class="col-md-8">
          <h4 class="font-weight-bold">About The Project</h4>
          {!! $projects->about !!}
        </div>
        <div class="col-md-4">
          <div class="col">
            <h4 class="font-weight-bold">Context</h4>
            {!! $projects->context !!}
          </div>
          <div class="col">
            <h4 class="font-weight-bold">My Role</h4>
            {!! $projects->role !!}
          </div>
        </div>
      </div>

      {{-- VIDEOS --}}
      {{-- VIDEOS ARE CONDITIONAL SO DONT FORGET TO VALIDATE WHEN ITS BEEN SET --}}
      @if ($projects->video !== null)
        @foreach (json_decode($projects->video) as $video)
          <video class="w-100 my-5" controls>
            <source src="{{Storage::url($video->download_link)}}" type="video/mp4">
            Your browser does not support the video tag.
          </video>
        @endforeach
      @endif

      {{-- PROGRESS --}}
      {{-- PROGRESS SECTION ARE DYNAMICLY BUILT ON BACKEND --}}
      {{-- BELOW JUST FOR EXAMPLE --}}
      <div class="r-margin my-5">
        <h2 class="font-weight-bold">DESIGN PROCESS</h2>
        <ul class="list-group list-group-flush">
          @php
              $i = 1;
          @endphp
          @foreach ($steps as $step)
            <li class="list-group-item"><a href="#step-{{$step->id}}">0{{$i}} {{$step->name}}</a></li>
            @php
                $i++;
            @endphp
          @endforeach
        </ul>
      </div>

      @foreach ($steps as $step)
        <div class="r-margin r-padding-x" id="step-{{$step->id}}">
          <h2 class="font-weight-bold">0{{$step->id}} {{$step->name}}</h2>
          <div class="lead">
            {!! $step->description !!}
          </div>
        </div>  
      @endforeach
      
    </div>
@endsection