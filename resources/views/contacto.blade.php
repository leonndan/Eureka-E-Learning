<x-app-layout>
    <x-slot name="header">
        <div>
            <h1>Quienes somos?</h1>
            <a>Eureka E-Learning Easy es una empresa especializada en el desarrollo de programas educativos para alumnos de educacion preescolar desde 2020.</a>
            <a></a>
        </div>
        <div class="container text-center">
            <h1>Recibe asesoria de un experto</h1>
        </div>
        <div class="container text-center">
            <div class="row align-items-start">
              <div class="col">
                <img src="https://i.ibb.co/pnZvkGk/kisspng-telephone-mobile-phones-computer-icons-logo-telephone-5abd19ef252ee5-0891575115223423831523.png" alt="kisspng-telephone-mobile-phones-computer-icons-logo-telephone-5abd19ef252ee5-0891575115223423831523" width="75px">
                
                <div class="row align-items-center">
                    <a>33 3147 2735</a>
                </div>
              </div>
              <div class="col">
                <img src="https://i.ibb.co/BNSz1nr/kisspng-united-states-computer-icons-google-maps-location-icon-5abbd6aaeae4f2-1819545315222596269621.png" alt="kisspng-united-states-computer-icons-google-maps-location-icon-5abbd6aaeae4f2-1819545315222596269621" width="75px">
                <div class="row align-items-center">
                  <a>Guadalajara, Jalisco, México</a>
              </div>
              </div>
              <div class="col">
                <img src="https://i.ibb.co/ZKtM93Y/kisspng-ipma-email-telephone-message-email-icon-5acf36458d39e5-4305648115235292855785.png" alt="kisspng-ipma-email-telephone-message-email-icon-5acf36458d39e5-4305648115235292855785" width="75px">
                <div class="row align-items-center">
                  <a href="mailto:eurekaelearningeasy@gmail.com">eurekaelearningeasy@gmail.com</a>
              </div>
              </div>
            </div>
          </div>
          <form class="form-contacto" method="POST" action="{{ route('contacto') }}">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" name="asunto" required>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" name="mensaje" rows="3" required></textarea>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </x-slot>

    
</x-app-layout>