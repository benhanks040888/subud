@extends('layouts.master')

@section('content')
  <div class="container main-container">
    <div class="content-disclaimer">
      <div class="row">
        <div class="col-xs-12 text-center disclaimer-container">
          <div class="disclaimer copy-base">
            <header>
              <h3>{{ getLang() == 'en' ? 'Disclaimer' : 'Sangkalan' }}</h3>
            </header>
            {{$content}}
          </div>
          <div class="verification-container">
            <a href="{{ route('main') }}" class="btn btn-subud btn-default">{{ getLang() == 'en' ? 'Agree' : 'Setuju' }}</a>
            <a href="{{ URL::previous() }}" class="btn btn-subud btn-danger">{{ getLang() == 'en' ? 'Not Agree' : 'Tidak Setuju' }}</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop