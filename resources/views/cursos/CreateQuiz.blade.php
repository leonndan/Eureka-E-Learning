<x-app-layout>
    <x-slot name="header">
        <h1>Crear quiz</h1>
    </x-slot>
    <title>Crear quiz</title>
    
    <form action="{{route('quiz.store')}}" method="POST">
        @csrf
        <input type="hidden" class="form-control" id="curso_id" name="curso_id" value=id>
        <div class="mb-3">
            <label for="pregunta" class="form-label">Pregunta: </label>
            <input type="text" class="form-control" id="pregunta" name="pregunta" required>
        </div>
        <div class="mb-3">
            <label for="respuesta3" class="form-label">Respuesta 1: </label>
            <input type="text" class="form-control" id="respuesta1" name="respuesta1" required>
        </div>
        <div class="mb-3">
            <label for="respuesta2" class="form-label">Respuesta 2: </label>
            <input type="text" class="form-control" id="respuesta2" name="respuesta2" required>
        </div>
        <div class="mb-3">
            <label for="respuesta3" class="form-label">Respuesta 3: </label>
            <input type="text" class="form-control" id="respuesta3" name="respuesta3" required>
        </div>
        <div class="mb-3">
            <label for="respuesta4" class="form-label">Respuesta 4: </label>
            <input type="text" class="form-control" id="respuesta4" name="respuesta4" required>
        </div>

        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="respuesta1">
            <label class="form-check-label" for="inlineCheckbox1">Pregunta1</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="respuesta2">
            <label class="form-check-label" for="inlineCheckbox2">Pregunta 2</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="respuesta3">
            <label class="form-check-label" for="inlineCheckbox3">Pregunta 3</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="respuesta4">
            <label class="form-check-label" for="inlineCheckbox3">Pregunta 4</label>
        </div>
        
        
        <button class="btn btn-primary" type="submit">Crear curso</button>
        
    </form>

</x-app-layout>