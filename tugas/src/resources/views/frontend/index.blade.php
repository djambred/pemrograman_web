@extends('layouts.frontend')
@section('title', 'JEFRY')

@section('content')
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          @foreach($dataabout as $d)
          <h1>{!! $d->description !!}<span>.</span></h1>
          <h2>{!! $d->vision !!}</h2>
          <h2>{!! $d->mission !!}</h2>
        </div>
      </div>
      @endforeach
      <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
        @foreach ($datatable as $dt)
        <div class="col-xl-2 col-md-4">
          <div class="icon-box">
            <i class="ri-store-line"></i>
            <h3><a href="">{{$dt->name}}</a></h3>
          </div>
        </div>
        @endforeach
        </div>
      </div>

    </div>
  </section><!-- End Hero -->
@endsection
