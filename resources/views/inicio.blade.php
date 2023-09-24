<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center display-4">Eureka E-Learning Easy</h1>
    </x-slot>
    <div class="container text-center mt-5">
        <div class="mb-4">
            <p class="lead">Somos una consultoría educativa que ofrece asesoramiento a medida para soluciones pedagógicas.</p>
            <img src="https://i.ibb.co/txvrmGT/Qu-es.png" alt="Consultoría Educativa" class="img-fluid">
        </div>
        
        <div class="mb-4">
            <h1 class="display-4">MODELO EDUCATIVO</h1>
            <p class="lead">Ofrecemos consultoría educativa para maestras de nivel preescolar, adaptándonos a la nueva modalidad de enseñanza para los jóvenes del futuro.</p>
        </div>
        
        <div class="mb-4">
            <h1 class="display-4">SERVICIOS</h1>
            <img src="https://i.ibb.co/D4yn1Lt/162914877-219009603247659-3852866649843772718-n.png" alt="Servicios" class="img-fluid">
        </div>
        
        <div class="mb-4">
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
                    <img src="https://i.ibb.co/4NxP3FT/341143228-1138787880413506-1909102828464435370-n.jpg"alt="" class="img-fluid rounded-circle">
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