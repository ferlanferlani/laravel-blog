@extends('layouts.main')

@section('content')
   <div class="container">
    <div class="row justify-content-center">
     <div class="col-lg-8 data-category">
      <div class="card">
       <div class="card-body">
         <h3 class="sidebar-title">Categories</h3>
         <div class="sidebar-item categories">
           <ul>
             @foreach ($category as $item)
             <li><a href="/category/{{ $item->slug }}/">{{ $item->name }} <span>(25)</span></a></li>
             @endforeach
           </ul>
         </div><!-- End sidebar categories-->
       </div>
      </div>

     </div><!-- End blog sidebar -->
    </div>
   </div>
@endsection