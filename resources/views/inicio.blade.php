<style>
    
    .text-box {
        background-color: white;
        padding: 20px; 
        border-radius: 5px; 
    }

    
    .blue-box {
        background-color: #041D5B;
        color: white;
        padding: 20px; 
        border-radius: 5px; 
    }

    
    .img-fluid:hover {
        transform: scale(1.1); 
        transition: transform 0.3s ease; 
    }
    .card:hover {
        transform: scale(1.1); 
        transition: transform 0.3s ease; 
    }

 
    .services-container {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }

    .service-card {
        flex-basis: calc(33.33% - 20px); 
        margin-right: 20px;
        margin-bottom: 20px;
        background-color: #F0F0F0;
        border-radius: 5px;
        padding: 20px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: scale(1.05);
    }

    .service-title {
        font-weight: bold;
        font-size: 18px;
    }


    .details-button {
        background-color: ;
        color: white;
        border: none;
        border-radius: 5px;
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .details-button:hover {
        background-color: darkblue;
    }
</style>

<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center display-4">Eureka E-Learning Easy</h1>
        <p class="text-center">Somos una consultoría educativa que ofrece asesoramiento a medida para soluciones pedagógicas.</p>
    </x-slot>
    
    <div class="container text-center mt-5">
        <div class="mb-4 text-box"> 
            <div>
                
                <img src="https://i.ibb.co/txvrmGT/Qu-es.png" alt="Consultoría Educativa" class="img-fluid">
            </div>
        </div>
        
        <div class="mb-4 text-box"> 
            <h1 class="display-4">MODELO EDUCATIVO</h1>
            <p class="lead">Ofrecemos consultoría educativa para maestras de nivel preescolar, adaptándonos a la nueva modalidad de enseñanza para los jóvenes del futuro.</p>
            <div class="row">
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modelo pedagógico tradicional</h5>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modelo pedagógico conductista</h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modelo pedagógico constructivista</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modelo pedagógico romántico</h5>
                        </div>
                    </div>
                </div>
                
              
                <div class="col-md-4 mb-4">
                    <div class="card">
                        
                        <div class="card-body">
                            <h5 class="card-title">Modelo pedagógico desarrollo congnitivo</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Modelo de educaci¿ón social</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="mb-4 text-box"> 
            <h1 class="display-4">SERVICIOS</h1>
            <div class="services-container">
               
                <div class="service-card">
                    <h3 class="service-title">Cursos</h3>
                    <a href="{{ route('servicios') }}" class="details-button">Más detalles</a>
                </div>

             
                <div class="service-card">
                    <h3 class="service-title">Asesorías</h3>
                    <a href="{{ route('servicios') }}" class="details-button">Más detalles</a>
                </div>

             
                <div class="service-card">
                    <h3 class="service-title">Capacitaciones</h3>
                    <a href="{{ route('servicios') }}" class="details-button">Más detalles</a>
                </div>
            </div>
        </div>
        
        <div class="mb-4 text-box"> 
            <h1 class="display-4">ALGUNOS DE NUESTROS CLIENTES</h1>
            <div class="container mt-5">
                <div class="row">
                  <div class="col-md-4">
                    <img src="https://i.ibb.co/YkSfwh1/343406554-1177265499651243-7227673687122816031-n.jpg" alt="" class="img-fluid rounded-circle">
                  </div>
                  <div class="col-md-4">
                    <img src="https://i.ibb.co/2ZMbNNS/279807352-407578108037533-9209168661799013001-n.png" alt="" class="img-fluid rounded-circle">
                  </div>
                  <div class="col-md-4">
                    <img src="https://i.ibb.co/4NxP3FT/341143228-1138787880413506-1909102828464435370-n.jpg" alt="" class="img-fluid rounded-circle">
                  </div>
                </div>
            </div>
        </div>
        
        <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
        <div id="botman-costume"></div>
        <script>
            var botmanWidget = {
                    frameEndpoint: "/botman/chat",
                    chatServer: "/botman",
                    aboutText: '/',
                    mainColor:  "#041D5B",
                    bubbleBackground: "#041D5B",  
                    title: "",
                    introMessage: "Bienvenido a Eureka E-Learning Easy.",
                    placeholderText: "Manda un mensaje."
                };
        </script>
        </div>
    </div>  
</x-app-layout>
