<!DOCTYPE html>
<html lang="en">
@include('layouts.inc.header')
<body>

  <main id="main">
  <!-- <br>   -->
  <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ url ('/') }}">Home</a></li>
          <li><a href="{{ URL::current() }}">@yield('title')</a></li>
        </ol>
      </div>
    </section>
    @yield('content')
  </main>
  <!-- End #main -->
</body>

@include('layouts.inc.footer')

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

@include('layouts.inc.script')
</html>