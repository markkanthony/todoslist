<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            .task{
                margin-top: 5%;
            }
            .task-todo{
                display: block;
                text-align: center;
                font-size: 24px;
                text-transform: uppercase;
                padding-top: 10px;
            }

            .task-todo button{
                margin-left: 20px;
            }
            .visit{
                display: block;
                text-transform: uppercase;
                font-size: 36px;
                text-align: center;
                margin: 20%;
                transform: translateY(-50%);
            }

        </style>
     
    </head>
    <body>
        <div class="row">
                <div class="col-lg-12">
                        @yield('content')
                </div>
        </div>
    </body>
</html>
