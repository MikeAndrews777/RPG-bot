<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
{{--
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
--}}


    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }
    </style>

    <div class="topnav">
        <a href="/home">Home</a>
        <a href="/play">Play</a>
        <a href="/encounters" >Encounters</a>
        <a href="/characters" >Characters</a>
    </div>

    <style>
        #characters {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            display: block;

            width: 100%;
        }

        #characters td, #characters th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #characters tr:nth-child(even){background-color: #f2f2f2;}

        #characters tr:hover {background-color: #ddd;}

        #characters th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #aaa9ad;
            color: white;
        }
    </style>


</head>
<body>

<!-- Start Content -->

    @yield ('basecontent')

<!-- End Content -->
</div>

</body>
</html>
