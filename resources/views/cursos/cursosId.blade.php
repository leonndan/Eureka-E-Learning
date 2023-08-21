<x-app-layout>
    <x-slot name="header">
        
        <a href="{{route('cursos')}}" class="btn btn-primary mb-2"> < Todos los cursos</a>
        <a href="{{route('cursos.edit',$curso)}}" class="btn btn-primary mb-2 position-absolute end-0"> Editar curso</a>

        <title>{{$curso->nombre_curso}}</title>
        <h1>Cursos {{$curso->nombre_curso}} </h1>
        <p>Categoria: {{$curso->categoria_curso}}</p>
        <p>Descripcion: {{$curso->descripcion_curso}}</p>
        <p>Precio: {{$curso->precio_curso}}</p>
    </x-slot>

    
</x-app-layout>