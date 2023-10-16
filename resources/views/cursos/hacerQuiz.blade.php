<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Quiz </h1>
            <a href="{{route('cursos.show',$id)}}" class="btn btn-primary">Regresar al curso</a>
        </div>
    </x-slot>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/quiz.css') }}" >
    
    <title>Crear quiz</title>

    
    {{-- <form action="{{route('quiz.store')}}" method="POST">
        @csrf
        <div class="list-group">
            @foreach ($test as $pregunta)
            <ul class="list-group">
                <section id="{{$pregunta->id}}">
                    <li class="list-group-item">
                        <h4 class="list-group-item-heading">{{$pregunta->pregunta}}</h4>
                        <div class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$pregunta->id}}" value="respuesta1">
                                    {{$pregunta->respuesta1}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$pregunta->id}}" value="respuesta2">
                                    {{$pregunta->respuesta2}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$pregunta->id}}" value="respuesta3">
                                    {{$pregunta->respuesta3}}
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="{{$pregunta->id}}" value="respuesta4">
                                    {{$pregunta->respuesta4}}
                                </label>
                            </div>
                        </div>
                    </li>
                </section>
            </ul>
            @endforeach
            <button class="btn btn-primary" type="submit">Entregar quiz</button>
            <h2>Cantidad acertadas: <span id="resultado"></span></h2>
        </div>
    </form> --}}

    <div class="container">
        <section id="p0">
            <h3>1- ¿Que es el LSM?</h3>
            <label><input type="radio" value="1" name="p0" id="" onclick="respuesta(0,this)">Lenguaje de Señas mexicano</label>
            <label><input type="radio" value="2" name="p0" id="" onclick="respuesta(0,this)">Las Señas mexicanas</label>
            <label><input type="radio" value="3" name="p0" id="" onclick="respuesta(0,this)">Lenguaje de Mudos</label>
            <label><input type="radio" value="4" name="p0" id="" onclick="respuesta(0,this)">Lenguaje de Sordos</label>
        </section>
        <section id="p1">
            <h3>2- ¿Cuantas letras tiene el LSM?</h3>
            <label><input type="radio" value="1" name="p1" id="" onclick="respuesta(1,this)">29</label>
            <label><input type="radio" value="2" name="p1" id="" onclick="respuesta(1,this)">28</label>
            <label><input type="radio" value="3" name="p1" id="" onclick="respuesta(1,this)">27</label>
            <label><input type="radio" value="4" name="p1" id="" onclick="respuesta(1,this)">26</label>
        </section>

        <button onclick="corregir()">Corregir</button>
        <h2>Cantidad de respuestas correctas: <span id="resultado"></span></h2>


    </div>
        {{-- <button onclick="certificado()">Certificado</button> --}}


<script src="{{asset('js/quiz.js')}}"></script>
</x-app-layout>