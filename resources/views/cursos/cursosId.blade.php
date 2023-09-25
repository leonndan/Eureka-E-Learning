<x-app-layout>
    <x-slot name="header">
    <div class="d-flex justify-content-between"> 
        <div class=" align-items-start">
            <a href="{{route('cursos')}}" class="btn btn-primary mb-2"> < Todos los cursos</a>
        </div>
        <div class="align-items-end">
            <a href="{{route('cursos.edit',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Editar curso</a>
            <a href="{{route('subcursos.create',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Agregar Video</a>
            {{-- <a href="{{route('subcursos.create')}}" class="btn btn-primary mb-2 "> Agregar Video</a> --}}
        </div>
    </div>
</x-slot>

    {{-- <div class="container" role="main">
        <div class="row">
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    
                    <div class="ratio ratio-16x9">
                        <iframe 
                        src="https://www.youtube.com/embed/{{$data[1][0]['video']}}" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                        </iframe>
                    </div>
                </div>
                    <h2 class="card-title">Curso: {{$data[1][0]['subtitulo']}}</h2>
                    <h3 class="card-text">Categoria: {{$data[1][0]['descripcion']}}</h3>
                    <h3 class="card-text">Precio: {{$data[0]['precio_curso']}}</h3>
                    <h3 class="card-text">Valoracion: {{$data[0]['calificacion_curso']}}/5</h3>
                </div>
                <div class="col-md-5 col-lg-4 order-md-last">

                    <div class="list-group">
                        @foreach ($data[1] as $subcurso)
                            <ul class="list-group ">

                                <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                @if ($subcurso['id'] == $data[1][0]['id'])
                                        <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                            <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                <img src="{{$subcurso['imagen']}}" alt="" style="width: 70px; height: 70px">
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-2">{{$subcurso['subtitulo']}}</p>
                                                        <p class="text-muted mb-0">{{$subcurso['descripcion']}}</p>
                                                </div>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                @else
                                <a href="{{route('subcursos.show',$subcurso['id'])}}">                                        <li class="list-group-item d-flex justify-content-between align-items-center">
                                            <div class="d-flex align-items-center">
                                            <img src="{{$subcurso['imagen']}}" alt="" style="width: 70px; height: 70px">
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-2">{{$subcurso['subtitulo']}}</p>
                                                    <p class="text-muted mb-0">{{$subcurso['descripcion']}}</p>
                                            </div>
                                            </div>
                                        </li>                                        
                                    </a>
                                @endif
                            </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
    </div>  --}}
    
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"> {{$data[1][0]['subtitulo']}}</h1>
                        <!-- Post meta content-->
                        {{-- <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div> --}}
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Puntuación: {{$data[0]['calificacion_curso']}}/5</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$data[0]['categoria_curso']}}</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4">
                        <div class="ratio ratio-16x9">
                            <iframe 
                            src="https://www.youtube.com/embed/{{$data[1][0]['video']}}" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                            </iframe>
                        </div>
                    </figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <h2 class="fw-bolder mb-4 mt-5">Descripcion</h2>
                        <p class="fs-5 mb-4">{{$data[1][0]['descripcion']}}</p>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <h2 class="fw-bolder mb-4 mt-5">Comentarios</h2>
                            <form class="mb-4"><textarea class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea></form>
                            <!-- Comment with nested comments-->
                            <div class="d-flex mb-4">
                                <!-- Parent comment-->
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    If you're going to lead a space frontier, it has to be government; it'll never be private enterprise. Because the space frontier is dangerous, and it's expensive, and it has unquantified risks.
                                    <!-- Child comment 1-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            And under those conditions, you cannot establish a capital-market evaluation of that enterprise. You can't get investors.
                                        </div>
                                    </div>
                                    <!-- Child comment 2-->
                                    <div class="d-flex mt-4">
                                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                        <div class="ms-3">
                                            <div class="fw-bold">Commenter Name</div>
                                            When you put money directly to a problem, it makes a good headline.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single comment-->
                            <div class="d-flex">
                                <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                                <div class="ms-3">
                                    <div class="fw-bold">Commenter Name</div>
                                    When I look at the universe and all the ways the universe wants to kill us, I find it hard to reconcile that with statements of beneficence.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                {{-- <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Search</div>
                    <div class="card-body">
                        <div class="input-group">
                            <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                        </div>
                    </div>
                </div> --}}
                <!-- Categories widget-->
                {{-- <div class="card mb-4">
                    <div class="card-header">Categorias</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">Web Design</a></li>
                                    <li><a href="#!">HTML</a></li>
                                    <li><a href="#!">Freebies</a></li>
                                </ul>
                            </div>
                            <div class="col-sm-6">
                                <ul class="list-unstyled mb-0">
                                    <li><a href="#!">JavaScript</a></li>
                                    <li><a href="#!">CSS</a></li>
                                    <li><a href="#!">Tutorials</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Videos del Curso</div>
                    <div class="list-group">
                        @foreach ($data[1] as $subcurso)
                            <ul class="list-group ">
                                <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                    @if ($subcurso['id'] == $data[1][0]['id'])
                                        <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                            <li class="list-group-item list-group-item-secondary d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center">
                                                <img src="{{$subcurso['imagen']}}" alt="" style="width: 70px; height: 70px">
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-2">{{$subcurso['subtitulo']}}</p>
                                                        <p class="text-muted mb-0">{{$subcurso['descripcion']}}</p>
                                                </div>
                                                </div>
                                            </li>
                                        </a>
                                    </ul>
                                @else
                                <a href="{{route('subcursos.show',$subcurso['id'])}}">                                        
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <div class="d-flex align-items-center">
                                        <img src="{{$subcurso['imagen']}}" alt="" style="width: 70px; height: 70px">
                                            <div class="ms-3">
                                                <p class="fw-bold mb-2">{{$subcurso['subtitulo']}}</p>
                                                <p class="text-muted mb-0">{{$subcurso['descripcion']}}</p>
                                            </div>
                                        </div>
                                    </li>                                        
                                </a>
                                @endif
                            </ul>
                        @endforeach
                    </div>
                </div>
                <!-- Actividad widget-->
                <div class="card mb-4">
                    <div class="card-header">Actividad</div>
                    <div class="card-body">Aqui van las actividades</div>
                </div>
                
            </div>
        </div>
    </div>

    
</x-app-layout>