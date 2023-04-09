@extends('layouts.main')

@section('content')
<main id="main">

 <!-- ======= Breadcrumbs ======= -->
 <section class="breadcrumbs">
   <div class="container">

     <ol>
       <li><a href="/">Home</a></li>
       <li><a href="/blog/">Blog</a></li>
       <li>{{ $post->slug }}</li>
     </ol>

   </div>
 </section><!-- End Breadcrumbs -->

 <!-- ======= Blog Single Section ======= -->
 <section id="blog" class="blog">
   <div class="container" data-aos="fade-up">

     <div class="row">

       <div class="col-lg-8 entries">

         <article class="entry entry-single">

           <div class="entry-img">
             <img src="/assets/img/blog/{{ $post->thumbnail }}" alt="{{ $post->title }}" class="img-fluid">
           </div>

           <h2 class="entry-title">
            {{ $post->title }}
           </h2>

           <div class="entry-meta">
             <ul>
               <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">{{ $post->user->name }}</a></li>
               <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="#">{{ $post->time }}</a></li>
               <li class="d-flex align-items-center"><i class="bi bi-tags"></i> <a href="/category/{{ $post->category->slug }}/">{{ $post->category->name }}</a></li>
               <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="#"> Comments</a></li>
             </ul>
           </div>

           <div class="entry-content">
             <p>
               {!! $post->body !!}
             </p>

           </div>

         </article><!-- End blog entry -->

         <div class="blog-author d-flex align-items-center">
           <img src="/assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
           <div>
             <h4>{{ $post->user->name }}</h4>
             <div class="social-links">
               <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
               <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
               <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
             </div>
             <p>
               Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
             </p>
           </div>
         </div><!-- End blog author bio -->

         <div class="blog-comments">

           <h4 class="comments-count">Comments</h4>

           <div id="comment-1" class="comment">
             <div class="d-flex">
               <div class="comment-img"><img src="/assets/img/blog/comments-1.jpg" alt=""></div>
               <div>
                 <h5>{{ $post->comment->name }}</h5>
                 <time datetime="2020-01-01">01 Jan, 2020</time>
                 <p>
                   Et rerum totam nisi. Molestiae vel quam dolorum vel voluptatem et et. Est ad aut sapiente quis molestiae est qui cum soluta.
                   Vero aut rerum vel. Rerum quos laboriosam placeat ex qui. Sint qui facilis et.
                 </p>
               </div>
             </div>
           </div><!-- End comment #1 -->

         </div><!-- End blog comments -->

       </div><!-- End blog entries list -->

       <div class="col-lg-4">

         <div class="sidebar">

           <h3 class="sidebar-title">Search</h3>
           <div class="sidebar-item search-form">
             <form action="">
               <input type="text">
               <button type="submit"><i class="bi bi-search"></i></button>
             </form>
           </div><!-- End sidebar search formn-->

           <h3 class="sidebar-title">Categories</h3>
           <div class="sidebar-item categories">
             <ul>
               @foreach ($category as $item)
               <li><a href="/category/{{ $item->slug }}/">{{ $item->name }} <span>(25)</span></a></li>                   
               @endforeach
             </ul>
           </div><!-- End sidebar categories-->

           <h3 class="sidebar-title">Recent Posts</h3>
           <div class="sidebar-item recent-posts">

            @foreach ($recentPost as $recent)
            <div class="post-item clearfix">
             <a href="/post/{{ $recent->slug }}/"> <img src="/assets/img/blog/{{ $recent->thumbnail }}" alt="{{ $recent->title }}"></a>
              <h4><a href="/post/{{ $recent->slug }}/">{{ $recent->title }}</a></h4>
              <time datetime="2020-01-01">{{ $recent->time }}</time>
            </div>
            @endforeach

           </div><!-- End sidebar recent posts-->

         </div><!-- End sidebar -->

       </div><!-- End blog sidebar -->

     </div>

   </div>
 </section><!-- End Blog Single Section -->

</main><!-- End #main -->

@endsection