<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center">DASHBOARD</h1>
    </x-slot>    
    <div class="container-fluid">
        <div class="row">
          <nav class="col-md-2 d-none d-md-block  sidebar" style= background-color:#041D5B>
            <div class="position-sticky">
              <ul class="nav flex-column">
                <li class="nav-item ">
                  <a class="nav-link active text-light" href="{{ route('dashboard') }}">
                    GENERAL
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">
                    IMPRIMIR
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link text-light" href="#">
                    CURSOS
                  </a>
                </li>
               
              </ul>
            </div>
          </nav>
          <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 bg-#041D5B">
            <div class="container mt-4">
                <h1>Bienvenido a Eureka-Elearning Easy</h1>
                <p>Aquí puedes ver y administrar tus datos y estadísticas.</p>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Usuarios</h3>
                                <p class="card-text">Total de usuarios registrados: {{$totalUsuarios}} </p>
                                <p class="card-text">Total de usuarios activos: {{$totalUsuarios}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Cursos</h3>
                                <p class="card-text">Total de cursos: </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Mensajes</h3>
                                <p class="card-text">Mensajes totales: {{$totalMensajes}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Estadisticas</h3>
                                <p class="card-text">Estadisticas</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3>Usuarios</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo Electronico</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $usuario)
                                <tr>
                                    <td>{{ $usuario->name }}</td>
                                    <td>{{ $usuario->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="container">
                    <h3>Mensajes</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Correo Electronico</th>
                                <th>Asunto</th>
                                <th>Mensaje</th>
                                <th>Fecha</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mensajes as $mensaje)
                                <tr>
                                    <td>{{ $mensaje->nombre }}</td>
                                    <td>{{ $mensaje->correo }}</td>
                                    <td>{{ $mensaje->asunto }}</td>
                                    <td>{{ $mensaje->mensaje }}</td>
                                    <td>{{ $mensaje->created_at }}</td>
                                    <td ><a class="btn btn-primary" href="mailto:{{$mensaje->correo}}?subject={{$mensaje->asunto}}">Contestar</a></td>
                                    <td>
                                        <form action="{{ route('contacto.eliminar', $mensaje->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
          </main>
        </div>
      </div>
</x-app-layout>
