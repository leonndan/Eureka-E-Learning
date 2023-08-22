<x-app-layout>
    <x-slot name="header">
        
        <a href="{{route('cursos')}}" class="btn btn-primary mb-2 position-absolute begin-0"> < Todos los cursos</a>
        <a href="{{route('cursos.edit',$curso)}}" class="btn btn-primary mb-2 position-absolute end-0"> Editar curso</a>
        <br>
        <br>
        <title>{{$curso->nombre_curso}}</title>
        <h1>Cursos {{$curso->nombre_curso}} </h1>
        <p>Categoria: {{$curso->categoria_curso}}</p>
        <p>Descripcion: {{$curso->descripcion_curso}}</p>
        <p>Precio: {{$curso->precio_curso}}</p>

        <iframe 
            width="1280" height="720" src="https://www.youtube.com/embed/{{$curso->url_video_curso}}" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
            allowfullscreen>
        </iframe>

    </x-slot>

    
</x-app-layout>