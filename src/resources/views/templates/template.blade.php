<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

        <!-- Script -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js' type='text/javascript'></script>

        <!-- Font Awesome JS -->
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"> </script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"> </script>
        <script src="https://kit.fontawesome.com/4ba4f68096.js" crossorigin="anonymous"></script>

        <title>Burgerzito</title>
    </head>
    <body>
        <div class="container">
            @component('layouts.components.navbar')
            @endcomponent
            @yield('content')
        </div>
    </body>
    <style>
        * {
            margin: 0;
            padding: 0;
            outline: 0;
            box-sizing: border-box;
        }

        html, body,  {
            height: 100%;
        }

        body {
            font-family: "Open Sans", sans-serif;
            -webkit-font-smooting: antialised !important;
            background: #ececec;
            height: 100vh;
        }

        ul {
            list-style: none;;
        }

        .container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start
        }

    </style>
</html>
