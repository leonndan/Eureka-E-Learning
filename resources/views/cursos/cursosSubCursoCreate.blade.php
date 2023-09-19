<x-app-layout>
  <x-slot name="header">
      <h1>Crear cursos</h1>
  </x-slot>
  <title>Crear cursos</title>
  
  <form action="{{route('subcursos.store')}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="nombre_curso" class="form-label">Nombre del subcurso</label>
          <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" required>
      </div>
      <div class="mb-3">
          <label for="descripcion_curso" class="form-label">Descripcion del subcurso</label>
          <textarea type="text" class="form-control" id="descripcion_curso" name="descripcion_curso" required></textarea>
      </div>
      <div class="mb-3">
          <label for="url_video_curso" class="form-label">URL del video</label>
          <input type="text" class="form-control" id="url_video_curso" name="url_video_curso" required>
      </div>
      <div class="mb-3">
          <label for="imagen_curso" class="form-label">Imagen del curso</label>
          <input type="text" class="form-control" id="imagen_curso" name="imagen_curso" required>
      </div>
      
      <button class="btn btn-primary" type="submit">Agregar curso</button>
      
  </form>

</x-app-layout>