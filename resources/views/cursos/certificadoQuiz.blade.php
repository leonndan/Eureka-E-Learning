<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Quiz </h1>
            <a href="{{route('subcursos.show',$id)}}" class="btn btn-primary">Regresar al curso</a>
        </div>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quiz.css') }}" >
    
    <title>Crear quiz</title>
    <div>
        
    
    
    
   
    {{-- @if ($puntaje !== null)
        <p>Tu puntaje no es aprobtorio: {{ $puntaje }} de {{ $puntajeMaximo }}</p>
        <a href="{{route('cursos.show',$id)}}" class="btn btn-primary">Regresar al curso</a>
    @endif --}}
    </div>
    @if ($puntaje == $puntajeMaximo)

        <p>Felicidades has completado este curso</p>
        {{-- {{$curso['id']}} --}}
        <a href="{{route('subcursos.pdf',$id)}}" class="btn btn-success">Descargar Certificado</a>
        
    @else
        <p>Tu puntaje no es aprobtorio: {{ $puntaje }} de {{ $puntajeMaximo }}</p>
        <a href="{{route('subcursos.show',$id)}}" class="btn btn-primary">Regresar al curso</a>
    @endif
    


    <script src="{{asset('js/quiz.js')}}"></script>
</x-app-layout>