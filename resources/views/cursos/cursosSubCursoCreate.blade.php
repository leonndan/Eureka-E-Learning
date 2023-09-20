<x-app-layout>
  <x-slot name="header">
      <h1>Añadir videos al cursos</h1>
  </x-slot>
  <title>Añadir videos al cursos</title>
  
  <form action="{{route('subcursos.store',$id)}}" method="POST">
  <form action="{{route('subcursos.store',compact('id'))}}" method="POST">
      @csrf
      <div class="mb-3">
          <label for="subtitulo" class="form-label">Nombre del subcurso {{$id}}</label>
          <input type="text" class="form-control" id="subtitulo" name="subtitulo" required>
      </div>
      <div class="mb-3">
          <label for="descripcion" class="form-label">Descripcion del subcurso</label>
          <textarea type="text" class="form-control" id="descripcion" name="descripcion" required></textarea>
      </div>
      <div class="mb-3">
          <label for="imagen" class="form-label">Imagen del curso</label>
          <input type="text" class="form-control" id="imagen" name="imagen" required>
      </div>
      <div class="mb-3">
          <label for="video" class="form-label">URL del video</label>
          <input type="text" class="form-control" id="video" name="video" required>
      </div>
      <div>
        <input type="hidden" id="curso_id" name="curso_id" value={{$id}}>
      </div>
      
      <button class="btn btn-primary" type="submit">Agregar curso</button>
      
  {{-- </form> --}}

</x-app-layout>