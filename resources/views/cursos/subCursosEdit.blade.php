<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <h1>Editar cursos</h1>
            <a href="{{route('subcursos.show',$curso['id'])}}" class="btn btn-primary d-flex justify-content-between align-items-center">Regresar al curso</a>
        </div>
    </x-slot>
    <title>Editar cursos</title>

    <form action="{{route('subcursos.update')}}" method="POST">
    {{-- <form action="{{route('cursos.update',$curso)}}" method="POST"> --}}
        @csrf
        {{-- @method('put') --}}
        <input type="hidden" name="id" value="{{$curso['id']}}">
        <div class="mb-3">
            <label for="subtitulo" class="form-label">Nombre del video</label>
            <input type="text" class="form-control" id="subtitulo" name="subtitulo" value="{{$curso['subtitulo']}}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripcion del video</label>
            <textarea type="text" class="form-control" id="descripcion" name="descripcion"  required>{{$curso['descripcion']}}</textarea>
        </div>
        <div class="mb-3">
            <label for="video" class="form-label">URL del video</label>
            <input type="text" class="form-control" id="video" name="video" value="{{$curso['video']}}"required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen del Video</label>
            <input type="text" class="form-control" id="imagen" name="imagen" value="{{$curso['imagen']}}"required>
        </div>
        
        <button class="btn btn-primary" type="submit">Editar curso</button>
        
    </form>
</x-app-layout>