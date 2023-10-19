<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Quiz </h1>
            <a href="{{route('subcursos.show',$data[0]['id'])}}" class="btn btn-primary">Regresar al curso</a>
        </div>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quiz.css') }}" >
    
    <title>Crear quiz</title>
    <div>
        <p>Para desbloquear el certificado, favor de responder correctamente el Quiz</p>
        {{-- {{$data[1]['id']}} --}}
    </div>
    
    
    <form action="{{ route('quiz.store',$data[0]['id'])}}" method="post">
        @csrf

        @if ($preguntas->isEmpty())
            <p>No hay preguntas para este quiz, ponte en contacto con el administrador </p>
            <a href="{{route('subcursos.show',$data[0]['id'])}}" class="btn btn-primary">Regresar al curso</a>
        
        @else
            @foreach ($preguntas as $pregunta)

                <h4>{{ $pregunta->pregunta }}</h4>
                @foreach (json_decode($pregunta->opciones) as $opcion)
                    <label>
                        {{-- {{$pregunta->id}} --}}
                        <input type="radio" name="pregunta_{{ $pregunta->id }}" value="{{ $opcion }}">
                        {{ $opcion }}
                    </label>
                @endforeach
            @endforeach
            <button type="submit" class="btn-submit">Enviar respuestas</button>
        </form>
        @endif


    {{-- @if ($puntaje !== null)
        <p>Tu puntaje: {{ $puntaje }} de {{ $puntajeMaximo }}</p>
    @endif --}}

    {{-- @if ($puntaje == $puntajeMaximo)
        <a href="{{route('cursos.pdf',$data[1]['id'])}}" class="btn btn-success">Descargar Certificado</a>
        
    @else
        <a href="{{route('cursos.pdf',$data[1]['id'])}}" class="btn">Descargar Certificado</a>
    @endif --}}
    
  

    <script src="{{asset('js/quiz.js')}}"></script>
</x-app-layout>