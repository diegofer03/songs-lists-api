<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs List</title>

    <style>
        *{
            font-family: Arial,Helvetica;
        }
        /* #title{
            color: blue;
        } */
        #container{
            display:flex;
            justify-content: space-around;
        }
    </style>
</head>
<body>

    <div id='image'>
        <img src="https://www.emqu.net/wp-content/uploads/2019/07/logo.png" alt="Logo">
    </div>


    <div id=''>
        <h1 id='title'>
            Songs List
        </h1>
        @foreach ($songs as $song)
            <li type="circle">{{$song->name}}</li>
        @endforeach
    </div>
    
</body>
</html>