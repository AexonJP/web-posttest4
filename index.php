<?php session_start(); ?>

<!DOCTYPE HTML>
<HTML lang="en">
    <head >
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Anime AexonJP</title>
        <style>
            html {
                scroll-behavior: smooth;
            }
        </style>
        <link rel="stylesheet" href="cssabdullah.css">
        <?php
            if (!isset($_SESSION['username'])) {
                $_SESSION['priv'] ='default';
            }
        ?>
    </head>
    <body oncontextmenu='return false;' onkeydown='return false;' onmousedown='return false;' ondragstart='return false' onselectstart='return false' style='-moz-user-select: none; cursor: default;' class="body">
        <a class="gif" href="#menu"><img src= "menhera.gif"></a> 
        <header class="menu" id="menu">
            <ul>
                <?php if($_SESSION['priv'] == 'admin'){
                    echo("<a href=");
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");
                    echo(">Home</a><a href=");
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");
                    echo(">Daftar Anime</a><a href=");
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");
                    echo(">Movie</a><a href=");
                    echo("javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');");
                    echo(">Ongoing</a>");
                }?>
                <a href='about/'>About Me</a>
                <?php
                if (isset($_SESSION['username'])) {
                    echo("<a class='login' href='login/logout.php'>Logout</a>");
                    
                } else {
                    echo("<a class='login' href='login/'>Login</a>");}
                    ?>
            </ul>
        </header>
        
        <header class="border">
            <a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
            <img src="awal/oie_OyXVH1TPqSMu.png" alt="gambar"> 
            </a>
        </header>
        <?php
                    if ($_SESSION['priv'] == 'user') {
                        echo("<div class='masuk'>SELAMAT DATANG MEMBER KU TERSAYANG</div>");
                    }
                    elseif ($_SESSION['priv'] == 'admin'){
                        echo("<div class='masuk'>SELAMAT DATANG WAHAI SEPUH TERTINGGI</div>");
                    }
                    ?>
        <table border="0" width="90%" align="center">
            <tr>
                <td height="100px">
                    <div class="container-ongoing">
                            <div class="text">ONGOING</div>
                            <div class="more"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Ao-Ashi-640x360.jpg.webp" alt="gambar"> <div class="isi">Ao-Ashi</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Bucchigire-640x360.jpg.webp" alt="gambar"> <div class="isi">Bucchigire</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Love-All-Play-640x360.jpg.webp" alt="gambar"> <div class="isi">Love-All-Play</div>
                        </a></div>
                    </div>
                    <div class="content-ongoings">
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Luminous-Witches-640x360.jpg.webp" alt="gambar"> <div class="isi">Luminous-Witches</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Prima-Doll-640x360.png.webp" alt="gambar"> <div class="isi">Prima-Doll</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/ongoing/Teppen-640x360.jpg.webp" alt="gambar"> <div class="isi">Teppen</div>
                        </a></div>
                    </div>
                    <div class="container">
                        <div class="text">COMPLETED</div>
                        <div class="more"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                        <img src="gambar/completed/Isekai-Meikyuu-de-Harem-wo-640x360.jpg.webp" alt="gambar"> <div class="isi">Isekai-Meikyuu-de-Harem-wo</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                        <img src="gambar/completed/Jashin-chan-Dropkick-S3-640x360.jpg.webp" alt="gambar"> <div class="isi">Jashin-chan-Dropkick-S3</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/completed/Kinsou-no-Vermeil-640x360.png.webp" alt="gambar"> <div class="isi">Kinsou-no-Vermeil</div>
                        </a></div>
                    </div>
                    <div class="content-ongoings">
                        <div class="content-ongoing">
                        <a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/completed/Mamahaha-no-Tsurego-ga-Motokano-datta-640x360.png.webp" alt="gambar"> <div class="isi">Mamahaha-no-Tsurego-ga-Motokano-datta</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/completed/Pacar-Sewaan-S2-640x360.png.webp" alt="gambar"> <div class="isi">Pacar-Sewaan-S2</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/completed/Tokyo-Mew-Mew-New-640x360.png.webp" alt="gambar"> <div class="isi">Tokyo-Mew-Mew-New</div>
                        </a></div>
                    </div>
                    <div class="container">
                        <div class="text">MOVIE</div>
                        <div class="more"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">MORE</a></div>
                    </div>
                    <div class="content-ongoings">
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Ame-wo-Tsugeru-Hyouryuu-Danchi-640x360.jpg.webp" alt="gambar"> <div class="isi">Ame-wo-Tsugeru-Hyouryuu-Danchi</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Blue-Thermal-640x360.jpg.webp" alt="gambar"> <div class="isi">Blue-Thermal</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Bubble-640x360.jpg.webp" alt="gambar"> <div class="isi">Bubble</div>
                        </a></div>
                    </div>
                    <div class="content-ongoings">
                    <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Jujutsu-Kaisen-0-640x360.jpg.webp" alt="gambar"> <div class="isi">Jujutsu-Kaisen-0</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Kiniro-Mosaic-Thank-You-640x360.jpg.webp" alt="gambar"> <div class="isi">Kiniro-Mosaic-Thank-You</div>
                        </a></div>
                        <div class="content-ongoing"><a href="javascript:alert('fitur tersebut belum tersdia mohon menunggu update lebih lanjut');">
                            <img src="gambar/movie/Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night-640x360.png.webp" alt="gambar"> <div class="isi">Sword-Art-Online-the-Movie-Progressive-Aria-of-a-Starless-Night</div>
                        </a></div>
                    </div>
                </td>
            </tr>

        </table>
        
    </body>
</HTML>
