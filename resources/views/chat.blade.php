<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
        }

        #chat-container {
            position: fixed;
            bottom: 0;
            right: 0;
            width: 300px;
            background-color: #ffffff;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }

        #chat-header {
            background-color: #041D5B;
            color: #fff;
            padding: 10px;
            text-align: center;
            border-top-right-radius: 10px;
            border-top-left-radius: 10px;
            cursor: pointer;
        }

        #chat-body {
            padding: 10px;
            max-height: 300px;
            overflow-y: auto;
        }

        .message {
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            max-width: 70%;
            word-wrap: break-word;
        }

        .user-message {
            background-color: #041D5B;
            color: #fff;
            float: right;
        }

        .received-message {
            background-color: #e0e0e0;
            float: left;
        }

        #chat-input {
            width: 100%;
            padding: 10px;
            border: none;
            outline: none;
        }

        #send-button {
            background-color: #041D5B;
            color: #fff;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.socket.io/4.0.1/socket.io.min.js" integrity="sha384-LzhRnpGmQP+lOvWruF/lgkcqD+WDVt9fU3H4BWmwP5u5LTmkUGafMcpZKNObVMLU" crossorigin="anonymous"></script>
</head>
<body>

<div id="chat-container">
    <div id="chat-header"> <span id="chat-toggle-button">CHAT</span></div>
    <div id="chat-body">
        <ul>
            <!-- Chat messages will be displayed here -->
        </ul>
    </div>
    <div>
        <input type="text" id="chat-input" placeholder="Escribe un mensaje...">
       
    </div>
</div>
<script>
    var currentUser = {!! json_encode(auth()->user()) !!};
</script>
<script>
    $(function() {
        let ip_address = '127.0.0.1';
        // let ip_address = '';
        let socket_port = '3000';
        let socket = io(ip_address + ':' + socket_port);
        // let socket = io("chat-8zwb030y2-andertorne.vercel.app");

        let chatInput = $('#chat-input');
        let handle = $('#handle');
        let lastMessageTime = 0; // Variable para controlar los saltos de línea

        let chatIsOpen = true; // Variable para controlar si el chat está abierto o minimizado
        const $chatContainer = $('#chat-container');
        const $chatToggleButton = $('#chat-toggle-button');
        const $chatBody = $('#chat-body');

        function toggleChat() {
            chatIsOpen = !chatIsOpen;
            if (chatIsOpen) {
                $chatContainer.css('height', 'auto');
                $chatBody.show();
            } else {
                $chatContainer.css('height', '50px'); // Altura mínima para el encabezado
                $chatBody.hide();
            }
        }

        // Manejar clic en el botón de alternar
        $chatToggleButton.on('click', function() {
            toggleChat();
        });

        // Restaurar el chat a su estado abierto al cargar la página
        toggleChat();

        chatInput.keypress(function(e) {
            if (e.which === 13 && !e.shiftKey) {
                let message = chatInput.val();
                let userName= currentUser.name;

                // Dividir los mensajes por saltos de línea y enviar cada uno por separado
                message.split('\n').forEach(function(data) {
                    if (data.trim() !== '') {
                        socket.emit('sendChatToServer', {userName,message});
                        displayMessage(userName,message, true);
                    }
                });

                chatInput.val(''); // Limpia el campo de entrada
                return false;
            }
        });

        

        socket.on('sendChatToClient', function(data) {
            displayMessage(data.userName,data.message, false);
        });

        function displayMessage(userName,message, isUserMessage) {
            // Elimina los puntos al principio del mensaje, si los hay
            message = message.replace(/^\.+/g, '');

            const messageClass = isUserMessage ? 'user-message' : 'received-message';
            const $chatBody = $('#chat-body');

            // Calcula el tiempo actual
            const currentTime = new Date();
            const formattedTime = currentTime.toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' });

            // Verifica si han pasado menos de 2 segundos desde el último mensaje
            if (currentTime - lastMessageTime < 1000) {
                // Agregar dos saltos de línea
                $chatBody.append('<br><br>');
            }

            // Crea un nuevo elemento <p> para mostrar el mensaje con el formato deseado
            const $message = $('<p></p>').addClass(`message ${messageClass}`);

            if (isUserMessage) {
                // Si es un mensaje del usuario, muestra "Tú" como nombre de usuario
                $message.html(`<strong>Tú, ${formattedTime}</strong><br>${message}`);
            } else {
                // Si es un mensaje recibido, muestra el nombre de usuario y la hora
                $message.html(`<strong>${userName}, ${formattedTime}</strong><br>${message}`);
            }

            // Agrega el mensaje al chat
            $chatBody.append($message);

            // Agregar un salto de línea después de cada mensaje
            $chatBody.append('<br>');

            // Desplazarse hacia abajo para mostrar el mensaje más reciente en la parte inferior
            $chatBody.scrollTop($chatBody[0].scrollHeight);

            // Actualiza el tiempo del último mensaje
            lastMessageTime = currentTime;
        }
    });
</script>
</body>
</html>