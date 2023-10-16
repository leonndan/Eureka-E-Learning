<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificado</title>

    <link rel="stylesheet" type="text/css" href="{{ public_path('css/pdf.css') }}" >
</head>
<body>
    <h1>Certificado del Curso: {{$data[1]['nombre_curso']}}</h1>
    <h2>Otorgado a {{Auth::user()->name}}</h2>
    
    <h2>{{$time = Carbon\Carbon::now()->format('d-m-Y')}}</h2>
</body>
</html>