<x-app-layout>
    <x-slot name="header">
        <h1>Editar cursos</h1>
    </x-slot>
    <title>Editar cursos</title>
    
    <form action="{{route('cursos.update',$curso)}}" method="POST">
        @csrf
        @method('put')
        <a href="{{route('cursos.show',$curso->id)}}" class="btn btn-primary">Regresar al curso</a>
        <div class="mb-3">
            <label for="nombre_curso" class="form-label">Nombre del curso</label>
            <input type="text" class="form-control" id="nombre_curso" name="nombre_curso" value="{{$curso->nombre_curso}}" required>
        </div>
        <div class="mb-3">
            <label for="descripcion_curso" class="form-label">Descripcion del curso</label>
            <textarea type="text" class="form-control" id="descripcion_curso" name="descripcion_curso"  required>{{$curso->descripcion_curso}}</textarea>
        </div>
        <div class="mb-3">
            <label for="categoria_curso" class="form-label">Categoria del curso</label>
            <input type="text" class="form-control" id="categoria_curso" name="categoria_curso" value="{{$curso->categoria_curso}}" required>
        </div>
        <div class="mb-3">
            <label for="precio_curso" class="form-label">Precio</label>
            <input type="number" class="form-control" id="precio_curso" name="precio_curso" value="{{$curso->precio_curso}}" required>
        </div>
        <div class="mb-3">
            <label for="url_video_curso" class="form-label">URL del video</label>
            <input type="text" class="form-control" id="url_video_curso" name="url_video_curso" value="{{$curso->url_video_curso}}"required>
        </div>
        <div class="mb-3">
            <label for="imagen_curso" class="form-label">Imagen del curso</label>
            <input type="text" class="form-control" id="imagen_curso" name="imagen_curso" value="{{$curso->imagen_curso}}"required>
        </div>
        
        <button class="btn btn-primary" type="submit">Editar curso</button>
        
    </form>

</x-app-layout>