@extends('layouts.main')

@section('content')
<main id="main">

 <!-- ======= Blog Section ======= -->
 <section id="blog" class="blog mt-5">
   <div class="container" data-aos="fade-up">

     <div class="row justify-content-center mt-5">
     <div class="col-md-12">
     <article class="entry">
      <div class="row g-0">
        <div class="col-md-4">
         <a href=""> <img src="/assets/img/blog/blog-4.jpg" class="img-fluid rounded-end rounded-start" alt="..."></a>
        </div>
        <div class="col-md-8 p-4">
          <div class="entry-title fs-3">
            <a href="">Cara Menjadi Hacker Dadakan</a>
          </div>
          <p class="card-text fs-5">This is a wider sit amet consectetur adipisicing elit. Deserunt animi obcaecati quos repudiandae eaque consectetur similique veniam quisquam iure nulla?.</p>
          <div class="entry-meta">
            <ul>
              <li class="d-flex align-items-center"><i class="bi bi-person fs-3"></i><a href="#">Ferlan Ferlani</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-tags fs-3"></i><a href="">Web Programming</a></li>
              <li class="d-flex align-items-center"><i class="bi bi-clock fs-3"></i><a href="">Selasa, 23 Agustus 2021</a></li>
            </ul>
          </div>
        </div>
      </div>
     </article>
     </div>
     @foreach ($posts as $item)
     <div class="col-lg-4 entries mt-4">

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
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
      </ul>
    </div>
    
     </div>

   </div>
 </section><!-- End Blog Section -->

</main><!-- End #main -->
@endsection