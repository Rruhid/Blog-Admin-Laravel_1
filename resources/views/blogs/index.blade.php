
@extends('layouts.app')
@include ('partials.meta_static')

@section('content')

  <div class="container">

    <div class="row">
        <!-- Blog Entries Column -->
        <div class="col-md-8">
            @foreach ($blogs as $blog)

            <h2 class="card-title"><a href={{route ('blogs.show',[$blog->slug])}}>{{$blog->title}}</a></h2>

          
                  <div class="card mb-4">
                  
                      @if($blog->featured_image)
                      <img class="card-img-top" src="/images/featured_image/{{$blog->featured_image ?  $blog->featured_image:''}}" alt="{{str_limit($blog->title),50}}"/>
                           @endif
                                <div class="card-body">
                                      <p class="{!! str_limit($blog->body,200)!!}"></p>
                                      <a href="{{route ('blogs.show',[$blog->slug])}}" class="btn btn-primary">Read More &rarr;</a>                                 
                                 </div>
                                  <div class="card-footer text-muted">
                                      @if($blog->user)
                                        Author:&nbsp<a href="{{route('users.show',$blog->user->name)}}">{{$blog->user->name}}</a>&nbsp|&nbsp Posted:{{$blog->created_at->diffForHumans()}}
                                          
                                        @endif 
                                                 
                                 </div>
                        
                   </div>
                   <br><br> 
                @endforeach      
           </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
          <!-- Categories Widget -->
          <div class="card my-4">
   
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <li>
                        @foreach($categories as $category)
                        <h2><a href="{{route('categories.show',$category->slug)}}">{{ $category->name }}</a></h2>
                        
                        @endforeach
                    </li>
                </div>
               
              </div>
            </div>
      
          </div>
          <div class="card my-4">
            <h5 class="card-header">Side Widget</h5>
            <div class="card-body">
              You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
            </div>
          </div>


      </div>
      <!-- /.row -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
          <a class="page-link" href="#">&larr; Older</a>
        </li>
        <li class="page-item disabled">
          <a class="page-link" href="#">Newer &rarr;</a>
        </li>
      </ul>

    </div><!--footer-->

  </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
     
      </div>   <!-- /.container -->
    </footer>


  </body>

</html>
@endsection