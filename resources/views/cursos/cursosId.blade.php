<x-app-layout>
    <x-slot name="header">
        
        <a href="{{route('cursos')}}" class="btn btn-primary mb-2 position-absolute begin-0"> < Todos los cursos</a>
        <a href="{{route('cursos.edit',$curso)}}" class="btn btn-primary mb-2 position-absolute end-0"> Editar curso</a>
        <br>
        <br>
        {{-- <title>{{$curso->nombre_curso}}</title>
        <h1>Curso: {{$curso->nombre_curso}} </h1>
        <p>Categoria: {{$curso->categoria_curso}}</p>
        <p>Descripcion: {{$curso->descripcion_curso}}</p>
        <p>Precio: {{$curso->precio_curso}}</p>

        <iframe 
            width="1280" height="720" src="https://www.youtube.com/embed/{{$curso->url_video_curso}}" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe> --}}

        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="card mb-4"  >
                        <div class="card-body">
                            <iframe 
                                width="1024" height="576" src="https://www.youtube.com/embed/{{$curso->url_video_curso}}" 
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                allowfullscreen>
                            </iframe>
                        
                            <h2 class="card-title">Curso: {{$curso->nombre_curso}}</h2>
                            <h3 class="card-text">Categoria: {{$curso->descripcion_curso}}</h3>
                            <h3 class="card-text">Precio: {{$curso->precio_curso}}</h3>
                            <h3 class="card-text">Valoracion: {{$curso->calificacion_curso}}/5</h3>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div> 

    </x-slot>

    
</x-app-layout>