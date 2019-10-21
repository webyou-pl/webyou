<!-- <!DOCTYPE html> -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>404 web tou</title>

    <link href="https://fonts.googleapis.com/css?family=Dekko&display=swap" rel="stylesheet">
    <style>
        html, body, h1, p{
            padding: 0;
            margin: 0;
        }
        body{
            background: -webkit-linear-gradient(rgb(235, 236, 231), rgb(255, 255, 255));
            background: linear-gradient(rgb(235, 236, 231), rgb(255, 255, 255));
        }
        #main{
            width: 100vw;
            height: 100vh;
            background-size: cover;
            background-position: center right;
            position: relative;
        }
        .content{
            position: absolute;
            top: 50%;
            left: 25%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        h1{
            font-family: 'Dekko', cursive;
            font-size: 16vw;
            text-shadow:
                0 1px 0px rgb(63, 1, 1),
                1px 0 0px rgb(172, 172, 172),
                1px 2px 1px rgb(255, 0, 0),
                2px 1px 1px rgb(82, 49, 5),
                2px 3px 2px rgb(255, 0, 0),
                3px 2px 2px rgb(82, 49, 5),
                3px 4px 2px rgb(255, 0, 0),
                4px 3px 3px rgb(82, 49, 5),
                4px 5px 3px rgb(255, 0, 0),
                5px 4px 2px rgb(82, 49, 5),
                5px 6px 2px rgb(255, 0, 0),
                6px 5px 2px rgb(82, 49, 5),
                6px 7px 1px rgb(255, 0, 0),
                7px 6px 1px rgb(82, 49, 5),
                7px 8px 0px rgb(255, 0, 0),
                8px 7px 0px rgb(82, 49, 5);
            transform: rotate(-5deg);
            color: transparent;
        }
        p{
            font-size: 3vw;
            transform: rotate(-5deg);
        }
        a{
            color: transparent;
            text-decoration: none;
            text-shadow:
                0 1px 0px rgb(63, 1, 1),
                1px 0 0px rgb(255, 0, 0);
        }
        a:hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main id="main" style="background-image: url('<?= get_template_directory_uri(); ?>/images/other/404.jpg'); ">
        <article class="content">
            <h1>404</h1>
            <p><a href="www.webyou.pl">Wróć na drogę</a></p>
        </article>
    </main>
</body>
</html>