<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between"> 
            <div class=" align-items-start">
                <a href="{{route('cursos')}}" class="btn btn-primary mb-2"> < Todos los cursos</a>
            </div>
            <div class="align-items-end">
                <a href="{{route('cursos.edit',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Editar curso</a>
                <a href="{{route('subcursos.create',$data[0]['id'])}}" class="btn btn-primary mb-2 "> Agregar Video</a>

            </div>
        </div>
    </x-slot>

    <div class="container" role="main">
        <div class="row">
            <div class="row g-5">
                <div class="col-md-7 col-lg-8">
                    
                    <div class="ratio ratio-16x9">
                        <iframe 
                        src="https://www.youtube.com/embed/{{$data[0]['video']}}" 
                        title="YouTube video player" frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                </div>
                    <h2 class="card-title">Curso: {{$data[0]['subtitulo']}}</h2>
                    <h3 class="card-text">Categoria: {{$data[0]['descripcion']}}</h3>
                    <h3 class="card-text">Precio: {{$data[1]['precio_curso']}}</h3>
                    <h3 class="card-text">Valoracion: {{$data[1]['calificacion_curso']}}/5</h3>
                </div>
                <div class="col-md-5 col-lg-4 order-md-last">

                    <div class="list-group">
                        @foreach ($data[2] as $subcurso)
                            <ul class="list-group ">
                                <a href="{{route('subcursos.show',$subcurso['id'])}}">
                                @if ($subcurso['activo'] == 1)
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

                        {{-- <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                          <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">{{$subcurso['subtitulo']}}</h5>
                          </div>
                          <p class="mb-1">{{$subcurso['descripcion']}}</p>
                          <aside><img src="{{$subcurso['imagen']}}" class="bd-placeholder-img card-img-top" width="100%" height="100" preserveAspectRatio="xMidYMid slice" focusable="false" alt="" ></aside>
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    

    
</x-app-layout>