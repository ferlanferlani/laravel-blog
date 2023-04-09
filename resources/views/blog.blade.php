@extends('layouts.main')

@section('content')
<main id="main">

 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog mt-5">
   <div class="container" data-aos="fade-up">

     <div class="row justify-content-center">

     @foreach ($posts as $item)
     <div class="col-lg-4 entries">

      <article class="entry">

        <div class="entry-img">
          <a href="/post/{{ $item->slug }}/"><img src="/assets/img/blog/{{ $item->thumbnail }}" alt="{{ $item->title }}" class="img-fluid"></a>
        </div>

        <h2 class="entry-title">
          <a href="/post/{{ $item->slug }}/">{{ $item->title }}</a>
        </h2>

        <div class="entry-meta">
          <ul>
            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $item->user->name }}</a></li>
            <li class="d-flex align-items-center"><i class="bi bi-tags"></i> <a href="/category/{{ $item->category->slug }}/">{{ $item->category->name }}</a></li>
            <li class="d-flex align-items-center"></li>
          </ul>
        </div>

        <div class="entry-content">
          <p>
            {{ $item->excerpt }}
          </p>
        </div>

      </article><!-- End blog entry -->

    </div><!-- End blog entries list -->
     @endforeach

     <div class="blog-pagination">
      <ul class="justify-content-center">
        <li><a href="#">1</a></li>
        <li class="active"><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
    
     </div>

   </div>
 </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection