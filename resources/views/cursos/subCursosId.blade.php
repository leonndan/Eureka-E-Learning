<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between"> 
            <div class=" align-items-start">
                <a href="{{route('cursos')}}" class="btn btn-primary mb-2"> < Todos los cursos</a>
            </div>
            <div class="align-items-end">
                <a href="{{route('subcursos.edit',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Editar curso</a>
                <a href="{{route('subcursos.create',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Agregar Video</a>

            </div>
        </div>
    </x-slot>

    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post content-->
                <article>
                    <!-- Post header-->
                    <header class="mb-4">
                        <!-- Post title-->
                        <h1 class="fw-bolder mb-1"> {{$data[0]['subtitulo']}}</h1>
                        <!-- Post meta content-->
                        {{-- <div class="text-muted fst-italic mb-2">Posted on January 1, 2023 by Start Bootstrap</div> --}}
                        <!-- Post categories-->
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">Puntuación: {{$data[1]['calificacion_curso']}}/5</a>
                        <a class="badge bg-secondary text-decoration-none link-light" href="#!">{{$data[1]['categoria_curso']}}</a>
                    </header>
                    <!-- Preview image figure-->
                    <figure class="mb-4">
                        <div class="ratio ratio-16x9">
                            <iframe 
                            src="https://www.youtube.com/embed/{{$data[0]['video']}}" 
                            title="YouTube video player" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            allowfullscreen>
                            </iframe>
                        </div>
                    </figure>
                    <!-- Post content-->
                    <section class="mb-5">
                        <h2 class="fw-bolder mb-4 mt-5">Descripcion</h2>
                        <p class="fs-5 mb-4">{{$data[0]['descripcion']}}</p>
                    </section>
                </article>
                <!-- Comments section-->
                <section class="mb-5">
                    <div class="card bg-light">
                        <div class="card-body">
                            <!-- Comment form-->
                            <h2 class="fw-bolder mb-4 mt-5">Comentarios</h2>
                            <form action="{{route('comments.store', $data[0]['id'])}}" method="POST" class="mb-4">
                                @csrf
                                <textarea class="form-control" rows="3" name="comment_body" placeholder="Qué te parece este curso?"></textarea>
                                <button class="btn btn-primary" type="submit">Comentar</button>
                            </form>
                            <!-- Single comment-->
                            <h3 class="fw-bolder mb-4 mt-5">Comentarios de este curso</h3>
                            @forelse ($comments as $item)
                            <div class="card card-body shadow-sm ms-3 mt-3">
                                    <div class="detail-area">
                                        <div class="fw-bold">
                                            {{$item['user']['name']}}
                                            <small class="ms-3 text-primary">Comentario creado: {{$item['created_at']->format('d-m-y')}}</small>
                                        </div>
                                    </div>
                                    {{$item['comment_body']}}
                            </div>
                            @empty
                            <h6>No hay comentarios</h6>
                            @endforelse
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
                        @foreach ($data[2] as $subcurso)
                            <ul class="list-group ">
                                <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                @if ($subcurso['id'] == $data[0]['id'])
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