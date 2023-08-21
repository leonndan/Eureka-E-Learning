<x-app-layout>
    <x-slot name="header">
        <h1>Crear cursos</h1>
    </x-slot>
    <title>Crear cursos</title>
    
    <form action="{{route('cursos.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre_curso" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_curso" class="form-label">Descripcion del curso</label>
            <textarea type="text" class="form-control" id="descripcion_curso" name="descripcion_curso" required></textarea>
        </div>
        <div class="mb-3">
            <label for="categoria_curso" class="form-label">Categoria del curso</label>
            <input type="text" class="form-control" id="categoria_curso" name="categoria_curso" required>
        </div>
        <div class="mb-3">
            <label for="precio_curso" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio_curso" name="precio_curso" >
        </div>
        <div class="mb-3">
            <label for="url_video_curso" class="form-label">URL del video</label>
            <input type="text" class="form-control" id="url_video_curso" name="url_video_curso" required>
        </div>
        <div class="mb-3">
            <label for="imagen_curso" class="form-label">Imagen del curso</label>
            <input type="text" class="form-control" id="imagen_curso" name="imagen_curso" required>
        </div>
        
        <button class="btn btn-primary" type="submit">Crear curso</button>
        
    </form>

</x-app-layout>