<x-app-layout>
    <x-slot name="header">
        <title>$curso->nombre_curso</title>
        <h2 class="h4 font-weight-bold">
            {{ __('CURSOS') }}
        </h2>
        <h1>Pagina cursos</h1>
    </x-slot>

    <a href="{{route('cursos.create')}}" class="btn btn-primary mb-4">Crear curso</a>

    <div class="container">
        <div class="row">
        @foreach ($cursos as $curso)
            <div class="col-4">
                <div class="card mb-4" >
                    {{-- <img src="{{$curso->imagen_curso}}" class="card-img-top img-fluid" alt="" > --}}
                    <img src="{{$curso->imagen_curso}}" class="bd-placeholder-img card-img-top" width="100%" height="255" preserveAspectRatio="xMidYMid slice" focusable="false" alt="" >
                    {{-- <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2F2.bp.blogspot.com%2F-sIqPQIqG7O0%2FT-LOX4ioIrI%2FAAAAAAAAEJI%2FIlvdjBJ3HTc%2Fs1600%2Feiffel%252Btower%252Bwallpaper%252B(6).jpg&f=1&nofb=1&ipt=aa3c6f3283da19f3288522a05bbfc8305d70b7c7ef5736f763b939ac0ca7e6f8&ipo=images" class="card-img-top img-fluid" alt="" > --}}
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
    </div> 

    {{$cursos->links()}}
</x-app-layout>