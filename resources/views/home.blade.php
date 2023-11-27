    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite(['resources/js/bootstrap.js'])
        @vite(['resources/css/bootstrap/bootstrap.min.css'])
        <script type="module" src="./js/main.js"></script>
        <link rel="stylesheet" href="./css/home.css">
    </head>
    <body>
        <div class="top_bar">
            <p>Logo</p>
            <p>contenido</p>
        </div>
        <div class="box_main">
            <div class="lateral_bar">
                <p>opciones</p>
            </div>
            <div class="contenido_principal">
                <p>contenido principal</p>
            </div>
        </div>
        
        <!-- 
        <button onclick="Try()">Try</button>
        <button onclick="interna()">Global a interna</button>
        <button id="post">Post</button>
        -->
    </body>
    </html>