<x-app-layout>
    <x-slot name="header">
        <title>$curso->nombre_curso</title>
        <h2 class="h4 font-weight-bold">
            {{ __('CURSOS') }}
        </h2>
        <h1>Pagina cursos</h1>
    </x-slot>
    <a href="{{route('cursos.create')}}" class="btn btn-primary mb-4">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <div class="card mb-4 mr-4" style="width: 20rem;">
                <img src="{{$curso->imagen_curso}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title ">{{$curso->nombre_curso}}</h5>
                  <p class="card-text">{{$curso->descripcion_curso}}</p>
                  <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-primary">Ir a curso</a>
                </div>
            </div>
        @endforeach
    </ul>
    {{$cursos->links()}}
</x-app-layout>