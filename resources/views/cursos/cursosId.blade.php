<x-app-layout>
    <x-slot name="header">

    <div class="d-flex justify-content-between align-items-center">
        <a href="{{route('cursos')}}" class="btn btn-primary mb-2"> < Todos los cursos</a>
        <a href="{{route('cursos.edit',$curso)}}" class="btn btn-primary mb-2 "> Editar curso</a>
    </div>
</x-slot>

    <div class="container">
        <div class="row">
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

    
</x-app-layout>