<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Downloads</title>

    <x-app-layout>
        <x-slot name="header">
            <h2>
                TC Games - Downloads
            </h2>
        </x-slot>
    <style>
         body {
                font-family: 'Arial', sans-serif;
                background-color: #f3f3f3;
                color: #333;
                padding: 5px;
                line-height: 1.6;
                text-align: center;
            }
            .link {
                margin-left: 10%;
                margin-right: 100px;
            }
            .icon-container {
        text-align: center; /* Centraliza os ícones na div */
            }
            h2 {
                color: #6B46C1;
                font-size: 2em;
                font-weight: bold;
                margin-bottom: 10px;
            }            

    .icon {
        display: inline-block;
        width: 20px; /* Ajuste conforme necessário */
        height: 20px; /* Ajuste conforme necessário */
        margin-right: 5px; /* Adicione espaçamento entre os ícones */
    }
    footer {
                margin-top: 33%;
                padding: 10px;
                background-color: #333;
                color: #fff;
            }
    </style>    
   
</head>
<body>
    <section class="container px-4 mx-auto py-4">        

        <div>
            <a href="{{ asset('storage/arquivos/windows.rar') }}">
                <img src="{{ asset('image/icons/windows.png') }}" alt="Linux Icon" class="icon">
                TC Games
                </a>     
           <a href="{{ asset('storage/arquivos/linux.rar') }}" class="link">
                <img src="{{ asset('image/icons/linux.png') }}" alt="Linux Icon" class="icon">
                TC Games
                </a>     
            <a href="{{ asset('storage/arquivos/ios.rar') }}">
                <img src="{{ asset('image/icons/ios.png') }}" alt="Linux Icon" class="icon">
                TC Games
                </a>     

        </div>

    </section>
    <footer>
        &copy; 2023 Thiago Castro. Todos os direitos reservados.
    </footer>
</body>
</x-app-layout>
</html>

