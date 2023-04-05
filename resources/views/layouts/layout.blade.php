<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="https://cdn.icon-icons.com/icons2/3921/PNG/512/you_can_toucan_yes_you_can_sticker_icon_249883.png">

</head>

<body>
    <nav class="navbar">
        <div class="navbar-brand">
            <a class="navbar-item" href="/">
                <img src="/images/logo.webp" alt="Logo">
            </a>
        </div>

        <div class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    Accueil
                </a>

                <a class="navbar-item" href="/blog">
                    Films
                </a>

                <a class="navbar-item" href="/blog">
                    Séries
                </a>
            </div>
            <div>
                <a class="navbar-item" href="/blog/create">ajouter une Série</a>
            </div>

            <div class="navbar-end">
                <a class="navbar-item" href="/compte">
                    Mon compte
                </a>
            </div>

        </div>
    </nav>

    <div class="body">

        <h1>@yield('title')</h1> <!--yield pour indiquer que
du contenu prendra cette place -->
        <hr>
        <div class="main-section">
            @yield('content')
        </div>


        <footer>
            <div class="footer">
                <div class="footer-info">
                    <h2>CineSeries</h3>
                        <img class="img" src="https://www.shutterstock.com/image-vector/tv-series-neon-text-popcorn-260nw-1339146254.jpg" alt="Twi">

                </div>
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Accueil</a></li>

                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-social">
                    <h3>Suivez-nous</h3>
                    <a href="#"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAMAAAD04JH5AAAAY1BMVEUAAAD////29vb7+/tcXFw7OztHR0dsbGzR0dEoKCjr6+uWlpYwMDDm5ubAwMBZWVl1dXXe3t6tra2QkJAVFRVCQkKfn5+3t7fX19cMDAzGxsZRUVFMTEyIiIgjIyMeHh6AgIB8RUZ6AAAEpElEQVR4nO2b26KqIBCG8ZCWpXlILauV7/+Ue7dby1IG+Ado7Zv+a2U+hRkGGETwnyU+AB+AD8AH4ANg/2qYV+uhKIZ1lYe/DFD1XdqKmVZp11e/ARBVdXwTCt3i+vhWgKhqkoPK+kOnpKmiNwGE9V5v/Ef7mjEmYID8ill/6Jp7BqhSjvm7UnA0QABZeeLa/zsayswTQNQZBp5Khw4YjmaAY2s2pdJq7QwQNfbm72pMP8EAUJ3d7AtxNsRHPUBh2fuvOhT2AJ27+bs6W4DSj30hSiuAMPZlX4hYHZvVAIk/+0IkfACv9jUECoDI2f2WuigCggKAPfeYlXIAWFMvqisOULAaXqXlt9I01bkOGZEogAo3nnSLzOOoe5qKygRACE9/q156ea17viXCAQEwovZTIuPQAogRARhQ+2SA1QOIwQwQodnXhbJvAjhJ0UACQD3wROe9BgDZF5cAsAc0pH0jgOQJSwA0BN4Uib8RYBkQBfN9VTt4A4s8dQEAz0FyBEABzjoA2AWFaumljYQPzV1xDgAnQZtFTMu67UOj+d1YDYBPAskcAPjuF1VKAHwRsp8HFF760CgB8DbiGQA+fT2kAmCkAQuAFQ+gUAAw1gFuACUNkDHWYW4Ah4wEwIOAK8BrKHgBGH8PYCQBLowW9m4AFwqggobAKbmrLecAcZv8CMpnDhUBgDnhLg//KZgp/FF0VG6jzlQQAFgY3Bm2vsCgvCUAsInIBAC60nNCegJ8eQHoMYAvGSDEwpAJANzVOUyDaAIAO88EMGLNiGkjdwIAO88EgKY0UyycAMDOMwGgIWnKKSeA2g8Auq6q3wQAL+xkgK0XgBy0/4xEEwCYD+7yILpr8eHfwhc2jS2A2Nz1lc4no8vX5iEsmpEAYBd8y3E6prqAtzHtmJC8bGBzvcAXgLUbvg+AtzfoDFBIALAD+QFYSwA562jQFeC5wzQBRKzjIVeAWyABBKwFpitASwCwTohcAUoCgOWHrgA1AcByA1eANQGQcVpxBFhlBEAA1kf4ANgHFABnOnIE6EgAOJtxB8hJAM5RnRvAOSIBODmJG8A2oAEYfeAGkCkAGH7gBLAPVADg6sgVoFcCBNj2hiPALVADwKHABaDTAGSb9wNsMg0A7IkOANu5xQUA+gvsARY/QDo1A7MCe4B6YVA6uMTasgZYLe1JAFheYg0gFZfJh9dQbmgLIB94ywAhMg4tAZaHbSQA1AmWAER1H1XCAQSD+dkfuqagisrIIhbzZt8mnQmbQ2LKFgkQWpSQmnUiC8roOiLeShUUfdysqKTiLdYhKcpLVcVsvP0KQKq6SmU1HZ4dQVLVG2jqCb3+A6V9XUnn4G8kyuVDCEBQ7fyY3+kqe7VVtaGXsspEW+xvKGz2UFhIlxGiAMEAZ+q0bpruhwCCzKm6NzaW+APl/T2aq0vaqL2PAxCEvK38SVvkqgl2xSMb+eZH6IIFfMklH+HDkLtuI3rrCb/mk3dwXNps4Us2vItOA5QxlybPswf4q+Kqzf/aUX+dwR3gfsmuL/dEb+zOZW9x7c7yul92HPqmjM+Xtr2c47KphyM26H0B+NMH4APwBydwPoHGBdB6AAAAAElFTkSuQmCC" alt="Facebook"></a>
                    <a href="#"><img src="https://w7.pngwing.com/pngs/515/1/png-transparent-twitter-logo-computer-icons-logo-twitter-icon-computer-wallpaper-monochrome-bird-thumbnail.png" alt="Twitter"></a>


                </div>
            </div>
        </footer>


</body>

</html>