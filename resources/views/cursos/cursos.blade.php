<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Pagina cursos</h1>
            <a href="{{ route('cursos.create') }}" class="btn btn-primary mb-4">Crear curso</a>
        </div>
    </x-slot>

    <div class="container mt-5">
        <h2 class="text-center">Tips del día</h2>
        <div id="custom-carousel" class="carousel slide shadow p-3 mb-5 bg-white rounded" data-bs-ride="carousel" style="max-width: 800px; margin: 0 auto;">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="https://i.ibb.co/r0XRw1L/118308811-118895359925751-6915506507627142888-n.png" class="d-block w-100" alt="Image 1">
            </div>
            <div class="carousel-item">
              <img src="https://i.ibb.co/tx3PSys/118395476-118895436592410-6520837588854180624-n.png" class="d-block w-100" alt="Image 2">
            </div>
            <div class="carousel-item">
              <img src="https://i.ibb.co/yV1PJnq/120550600-131524505329503-8977864481759685397-n.png" class="d-block w-100" alt="Image 3">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#custom-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#custom-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      
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
        <div class="row">
            @foreach ($data as $curso)
                <div class="col-4">
                    <div class="card mb-4 shadow">
                        <img src="{{ $curso['imagen_curso'] }}" class="bd-placeholder-img card-img-top" width="100%" height="255" preserveAspectRatio="xMidYMid slice" focusable="false" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $curso['nombre_curso'] }}</h5>
                            <p class="card-text">{{ $curso['descripcion_curso'] }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('cursos.show', $curso['id']) }}" class="btn btn-primary">Ir a curso</a>
                                {{-- <a href="{{ route('subcursos.show',$curso['id']) }}" class="btn btn-primary">Ir a curso</a> --}}
                                <small class="text-body-secondary">${{ $curso['precio_curso'] }}</small>
                                <a href="{{ route('cursos.delete', $curso['id']) }}" class="btn btn-primary">Borrar curso</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    @include('chat');

    {{-- {{$cursos->links()}} --}}
</x-app-layout>