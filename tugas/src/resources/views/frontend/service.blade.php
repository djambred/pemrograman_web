@extends('layouts.frontend')
@section('title', 'HOME')

@section('content')

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
              @foreach($dataproduct as $d)
                <div class="swiper-slide">
                  <img src="{{ $d->getFirstMediaUrl('image','priview') }}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>{{$d->name}}</h3>
              <ul>
                <li><strong>Category</strong>: {{$d->category}}</li>
                <li><strong>Stock</strong>: {{$d->stock}} </li>
                <li><strong>Price</strong>: {{$d->price}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>{{$d->description}}</h2>
              <p>
              {{$d->description}}
              </p>
            </div>
            @endforeach
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

@endsection