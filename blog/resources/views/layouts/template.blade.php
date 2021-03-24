<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title></title>
    <!--CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <!--END CSS-->
    <style>
        button:active, button:focus {
            outline: none !important;
        }
        button::-moz-focus-inner {
            border: 0 !important;
        }
        a:active, button:focus {
            outline: none !important;
        }
        a::-moz-focus-inner {
            border: 0 !important;
        }
    </style>

</head>
<body>

<!--HEADERS-->
    @include("layouts.partials.header")
    @include("layouts.partials.slider")
    <!--END HEADERS-->
    <!--MAIN-->
    @yield("content")
    <!--END MAIN-->
    <!--HEADERS-->
    @include("layouts.partials.footer")
    <!--END HEADERS-->


    <script src="js/jquery-3.5.1.js"></script>
    <script src="http://malsup.github.com/jquery.cycle2.js"></script>
    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/6ae8d5d795.js" crossorigin="anonymous"></script>
</body>
</html>
