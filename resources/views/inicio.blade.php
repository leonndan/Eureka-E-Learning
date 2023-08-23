<style>
    #botman-costume{
        background-color: red;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h1 class="text-center display-4">Eureka E-Learning Easy</h1>
    </x-slot>
    <div class="container text-center mt-5">
        <div class="mb-4">
            <p class="lead">Somos una consultoría educativa que ofrece asesoramiento a medida para soluciones pedagógicas.</p>
            <img src="https://i.ibb.co/qNvmfQT/218571906-289337966214822-1400696873420064741-n.jpg" alt="Consultoría Educativa" class="img-fluid">
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
                    title: "Chat Bot",
                    introMessage: "Hola"
                };
               
        </script>
        </div>
    </div>
    
    
</x-app-layout>