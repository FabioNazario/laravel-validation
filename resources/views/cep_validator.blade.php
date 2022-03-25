<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="padding:20px;margin:20px;">
        <form action="#" method="POST">
            {{ csrf_field() }}
            <label for="cep">Cep:</label>
            <input type="text" name="cep" id="cep">
            <input type="submit" value="Validar">
            @if(session()->has('flash_message'))
                <h1>{{ session()->get('flash_message') }}</h1>
            @endif
        </form>
        
    </div>
</body>
</html>
