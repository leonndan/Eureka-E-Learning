<x-app-layout>
    <x-slot name="header">
        <title>$curso->nombre_curso</title>
        <h2 class="h4 font-weight-bold">
            {{ __('CURSOS') }}
        </h2>
        <h1>Pagina cursos</h1>
    </x-slot>

    
    {{-- <div class="container">
        <a href="{{route('cursos.create')}}" class="btn btn-primary mb-4">Crear curso</a>
        <div class="row">
        @foreach ($cursos as $curso)
            <div class="col-4">
                <div class="card mb-4" >
                    <img src="{{$curso->imagen_curso}}" class="bd-placeholder-img card-img-top" width="100%" height="255" preserveAspectRatio="xMidYMid slice" focusable="false" alt="" >
                    <div class="card-body">
                        <h5 class="card-title ">{{$curso->nombre_curso}}</h5>
                        <p class="card-text">{{$curso->descripcion_curso}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-primary">Ir a curso</a>
                            <small class="text-body-secondary">${{$curso->precio_curso}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>  --}}

    <div class="container">
        <a href="{{route('cursos.create')}}" class="btn btn-primary mb-4">Crear curso</a>
        <div class="row">
        @foreach ($data as $curso)
            <div class="col-4">
                <div class="card mb-4" >
                    <img src="{{$curso['imagen_curso']}}" class="bd-placeholder-img card-img-top" width="100%" height="255" preserveAspectRatio="xMidYMid slice" focusable="false" alt="" >
                    <div class="card-body">
                        <h5 class="card-title ">{{$curso['nombre_curso']}}</h5>
                        <p class="card-text">{{$curso['descripcion_curso']}}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('cursos.show',$curso['id'])}}" class="btn btn-primary">Ir a curso</a>
                            <small class="text-body-secondary">${{$curso['precio_curso']}}</small>
                            <a href="{{route('cursos.delete',$curso['id'])}}" class="btn btn-primary">Borrar curso</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div> 

    {{-- {{$cursos->links()}} --}}
</x-app-layout>