@extends('layout.layout2')

@section('contenido')
    

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Noticias
        <small></small>
      </h1>

     

      <div class="row">
        @foreach ($noticias as $noticia)

        <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card h-100">
             <!-- <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>-->
            <a href="/publicaciones/{{$noticia->id}}"><img class="card-img-top" src="{{$noticia->img}}" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                <a href="/publicaciones/{{$noticia->id}}">{{$noticia->titulo}}</a>
                </h4>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur eum quasi sapiente nesciunt? Voluptatibus sit, repellat sequi itaque deserunt, dolores in, nesciunt, illum tempora ex quae? Nihil, dolorem!</p>
              </div>
            </div>
          </div>
            
        @endforeach     
       
      </div>
      {{ $noticias->links() }}
      <!-- Pagination 
      <ul class="pagination justify-content-center">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>-->


      @endsection