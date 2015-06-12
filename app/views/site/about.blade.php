@extends('layouts.master')

@section('content')
  <div class="container main-container">
    <div class="row content-about">
      <div class="section-navigation-container">
        <a href="{{ route('splash') }}" class="section-link prev-section"></a>
        <a href="{{ route('gallery') }}" class="section-link next-section"></a>
      </div>

      <figure class="col-xs-5 col-no-padding featured-image">
        <img src="{{ assets_url('images/m-subuh.jpg') }}" alt="Muhammad Subuh Sumohadiwidjojo">
      </figure>
      <div class="col-xs-7 intro-right-container">
        <header><h1><span>Tentang</span><br>Bapak Muhammad Subuh Sumohadiwidjojo</h1></header>
        <div class="copy-base">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas mi fermentum, luctus mauris quis, commodo est. Curabitur in ante a neque cursus auctor eu ac felis. In dolor felis, dapibus ut congue et, vestibulum sit amet libero. </p>
          <p>Maecenas ultrices suscipit sem, eu ultrices dui iaculis porta. Phasellus ullamcorper nisi sit amet ante fermentum, sed accumsan dolor consequat. Cras ultricies tempus lobortis. Nulla facilisi. Sed non luctus massa, a egestas dolor. Cras egestas diam eu tortor consectetur mattis. Vivamus ut massa vel lectus vulputate fringilla ac a velit. </p>
          <p>Integer ac diam a turpis mollis egestas. Fusce aliquet, purus ac lobortis sagittis, quam metus dapibus erat, id lobortis quam ligula id eros. Cras in molestie dui, non mattis erat. Nunc fermentum nisi fermentum ante tristique dapibus. Nunc ultrices in neque nec ultricies. Vestibulum ut magna sit amet sapien consequat pulvinar.</p>
          <p>Mauris ultricies enim vitae quam finibus, fringilla interdum lorem ultrices. Cras ut felis vehicula, ultricies arcu dapibus, mattis quam. In tempus volutpat sapien, nec consectetur velit posuere ut. Suspendisse mollis pharetra ante, ac facilisis lectus suscipit nec. Nullam leo lacus, ullamcorper at euismod dictum, eleifend laoreet sapien. Aliquam ultrices aliquam tellus vitae feugiat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam luctus sapien ac malesuada maximus. Phasellus vel consequat lorem. In ac diam in purus feugiat mattis. Pellentesque a lacus in nibh interdum pharetra. Ut tempus nisl non fermentum iaculis. Praesent dui erat, finibus eu consequat non, viverra quis metus. Etiam quam magna, tempus eget eros ut, pulvinar ultricies diam. Phasellus odio nisl, feugiat at ex in, porta ornare nisi. Nulla mattis vel mauris vitae vulputate.</p>
          <p>Proin vulputate erat efficitur consectetur pretium. Morbi vitae ipsum bibendum, elementum eros non, volutpat quam. Maecenas efficitur nunc velit, ut porttitor massa mollis a. Curabitur eu leo eget arcu ornare accumsan et vel nisl. Proin cursus dolor at velit cursus blandit. Proin sed convallis leo. Nulla ac mollis nibh. Pellentesque porta, enim eu finibus tincidunt, ipsum justo luctus diam, eget dictum neque purus sit amet diam. Mauris in sodales dolor. Curabitur scelerisque scelerisque nulla malesuada interdum. Donec nulla eros, accumsan id imperdiet vel, vestibulum quis tortor. Mauris nisi urna, viverra ut odio ac, vehicula sollicitudin nibh. In urna sapien, ornare fermentum mollis vel, pellentesque ac metus. Mauris scelerisque massa nunc, vitae vulputate nulla pharetra ac. Donec euismod, magna ac fermentum euismod, lacus ante imperdiet ligula, non ultricies ipsum neque nec turpis. Proin arcu nisl, sagittis quis massa quis, efficitur condimentum leo.</p>
        </div>
        <nav class="bottom-navigation">
          <ul>
            <li><a href="{{ route('about') }}"><span class="label label-default">Tentang Bapak</span></a></li>
            <li><a href="{{ route('gallery') }}"><span class="label label-default">Photo Gallery</span></a></li>
            <li><a href="{{ route('disclaimer') }}"><span class="label label-default">Go To Surat dan Ceramah</span></a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
@stop