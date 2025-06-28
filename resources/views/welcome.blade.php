<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Master com Vue.js</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <h1>Bem-vindo ao Grade Master!</h1>
        <p>Conteúdo do Laravel aqui.</p>

        {{-- Aqui é onde seu componente Vue será renderizado --}}
        <welcome-component></welcome-component>

    </div>
</body>
</html>