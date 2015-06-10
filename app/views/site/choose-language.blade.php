@extends('layouts.simple')

@section('content')
  <div class="container main-container">
    <div class="content-home text-center">
      <div class="logo-container">
        <img src="{{ assets_url('images/logo.png') }}" alt="Logo">
      </div>
      <h1>Surat dan ceramah-ceramah pilihan <hr> SELECTED LETTERS AND TALKS</h1>
      <a href="{{ URL::route('splash') }}" class="btn btn-subud btn-default">English</a>
      <a href="{{ URL::route('splash') }}" class="btn btn-subud btn-default">Bahasa Indonesia</a>
    </div>
  </div>

  @include('../_partials/footer')
@stop