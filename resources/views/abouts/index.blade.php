@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="py-3 mx-5">
        <div class="text-center">
          <img src="
          {{Voyager::image($abouts->picture)}}
          " class="img-thumbnail border-0 p-0 rounded-0" alt="my picture">
          <div class="text-center my-5">
            <h2 class="">Hi, I'm {{$abouts->name}}</h2>
            @foreach (json_decode($abouts->resume) as $resume)
              <a target="_blank" href="{{Storage::url($resume->download_link)}}" class="read-more">Read My Resume &#8594;</a>    
            @endforeach
          </div>
        </div>
        <div class="text-secondary lead r-margin">{!! $abouts->about !!}</div>
      </div>
    </div>
@endsection