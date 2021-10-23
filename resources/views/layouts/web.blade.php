<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;600;700;900&amp;display=swap" rel="stylesheet">
    <style>
      *{
        margin: 0;
        font-family: 'Roboto', sans-serif;
        overflow-x: hidden;
      }
    </style>
</head>
<body>
    <header> 
    <main class="py-10">
        <div class="container mx-auto px-4 ">
            @yield('content')
            
        </div>
    </main>
</body>
</html>