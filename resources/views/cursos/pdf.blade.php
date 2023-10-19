<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado</title>

    <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: linear-gradient(135deg, #041D5B, #e74c3c);
            background-size: 100% 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
        .student-info h2:after {
            content: "";
            display: block;
            width: 450px; /* Ancho de la línea */
            height: 3px; /* Altura de la línea */
            background-color: #041D5B; /* Color azul */
            margin-top: 10px; /* Espacio entre el nombre y la línea */
            margin-left: auto;
            margin-right: auto;
        }
        .certificate {
            border: 1px solid #041D5B;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            margin-bottom: 20px;
        }

        .header img {
            max-width: 200px;
            margin: 0 auto;
            display: block;
        }

        .header h1 {
            font-size: 28px;
            margin: 0;
            color: white;
        }

        .course {
            margin-top: 20px;
        }

        .course h2 {
            font-size: 24px;
            margin: 0;
            color: white;
        }

        .student-info {
            margin-top: 20px;
        }

        .student-info p {
            font-size: 18px;
            margin: 5px 0;
            color: white;
        }

        .signature {
            margin-top: 30px;
        }

        .signature img {
            max-width: 150px;
        }

        .date {
            margin-top: 10px;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: black;
        }
        .titulo{
            background-color: #041D5B;
            color: white;
        }
    </style>
</head>
<body>
    <div class="certificate">
        <div class="header">
            <img src="{{ public_path('images/LogoEureka.png') }}" alt="Logo de la página de cursos">
        </div>
        <div class="titulo">
            <h1>Eureka E-Learning Easy</h1>
        </div>
        <div>
            <h2>OTORGA EL PRESENTE RECONOCIMIENTO A:</h2>
        </div>
        <div class="student-info">
            <h2 class="name"><strong>{{Auth::user()->name}}</strong></h2>
        </div>
        <div class="course">
            <p>Por haber concluido el curso "{{$data[1]['nombre_curso']}}".</p>
        </div>
        <div class="signature">
            <img src="{{ public_path('images/firma.png') }}" alt="Firma del Instructor">
            <p>FIRMA DEL INSTRUCTOR</p>
        </div>
        <div class="date">
            Fecha: <strong>{{$time = Carbon\Carbon::now()->format('d-m-Y')}}</strong>
        </div>
        <div class="footer">
            Este certificado se otorga en reconocimiento de la finalización exitosa del curso.
        </div>
    </div>
</body>
</html>
