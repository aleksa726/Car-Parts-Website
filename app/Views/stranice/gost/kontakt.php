<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2d89ef">
    <meta name="theme-color" content="#ffffff">

    <title>Auto Aleksa - Kontakt</title>
    
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="<?php echo base_url('kontakt.css'); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div class="meni">
        <div class="logo"></div>
        <div class="nav" id="navigacija">
            <ul>
                <a href="<?php echo base_url('/')?>">
                    <li>Pocetna</li>
                </a>
                <a href="<?php echo base_url('proizvodi')?>">
                    <li>Proizvodi</li>
                </a>
                <a href="<?php echo base_url('upit')?>">
                    <li>Upit</li>
                </a>
                <a href="<?php echo base_url('o_nama')?>">
                    <li>O nama</li>
                </a>
                <a href="<?php echo base_url('kontakt'); ?>">
                    <li>Kontakt</li>
                </a>
            </ul>
        </div>
        <div class="menu_mobile">
            <div class="menu_btn">
        </div>
    </div>
    </div>
    
    <div class="nav2" id="navigacijaMob">
        <ul>
            <a href="<?php echo base_url('/')?>">
                <li>Pocetna</li>
            </a>
            <a href="<?php echo base_url('proizvodi')?>">
                <li>Proizvodi</li>
            </a>
            <a href="<?php echo base_url('upit')?>">
                <li>Upit</li>
            </a>
            <a href="<?php echo base_url('o_nama')?>">
                <li>O nama</li>
            </a>
            <a href="<?php echo base_url('kontakt'); ?>">
                <li>Kontakt</li>
            </a>
        </ul>
    </div>
    <div class="slika_kontakt">
        <h1>Kontaktiraj nas</h1>
    </div>
    <div class="mapa_info">
        <div class="svi_kontakti">
            <div class="telefon">
                <h2>Telefon</h2>
                <span>032/343-155</span>
                <span>+38164 1742002</span>
            </div>
            <form name="postaviPitanje", action="<?= site_url("Gost/PostavljanjePitanja") ?>" method="post">
                <div class="mail">
                    <h2>Email</h2>
                    <span>autoaleksa@gmail.com</span>
                    <input name="ime" type="text" placeholder="Unesite Vase ime">
                    <input name="prezime" type="text" placeholder="Unesite Vase prezime">
                    <input name="email" type="text" placeholder="Unesite Vasu email adresu">
                    <textarea name="pitanje" id="" cols="30" rows="10" placeholder="Unesite Vase pitanje"></textarea>
                    <?php if($greska != null) echo "<span class='greska'>$greska</span>" ?>
                    <button>Posalji</button>
                </div>
            </form>
        </div>
        <div class="adresa_mapa">
            <div class="adresa">
                <h2>Adresa</h2>
                <span>Kneza Milosa 42</span>
                <span>32000 Cacak</span>
            </div>
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=serbia,%20cacak,%20auto%20aleksa&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://123movies-to.org">123movies</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            height: 500px;
                            width: 600px;
                        }
                    </style><a href="https://www.embedgooglemap.net">google maps web pages</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 500px;
                            width: 600px;
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
    <div class="kontakt_content">
        <div class="footer">
            <div class="info_kontakt">
                <div class="info">
                    <span>Auto Aleksa</span>
                    <span>Kneza Milosa 42, 32000 Cacak</span>
                    <span>032/343-155</span>
                    <span>+381 64 174 20 02</span>
                    <span>autoaleksa@gmail.com</span>
                    <br>
                        <br>
                        <span>Radno vreme:</span>
                        <div class="radno_vreme">
                            <div class="dani">
                                <span>Ponedeljak</span>
                                <span>Utorak</span>
                                <span>Sreda</span>
                                <span>Cetvrtak</span>
                                <span>Petak</span>
                                <span>Subota</span>
                                <span>Nedelja</span>
                            </div>
                            <div class="vreme">
                                <span>8:00 - 19:00</span>
                                <span>8:00 - 19:00</span>
                                <span>8:00 - 19:00</span>
                                <span>8:00 - 19:00</span>
                                <span>8:00 - 19:00</span>
                                <span>8:00 - 15:00</span>
                                <span>ne radimo</span>
                            </div>
                        </div>
                </div>
                <form  class="kontakt" name="postaviPitanje", action="<?= site_url("Gost/PostavljanjePitanja2") ?>" method="post">
                    <h3>Kontaktirajte nas</h3>
                    <input name="email" type="text" placeholder="Unesite Vasu email adresu">
                    <textarea name="pitanje" id="" cols="30" rows="10" placeholder="Unesite Vase pitanje"></textarea>
                    <button>Posalji</button>
                </form>
            </div>
            <hr>
            <span class="rights">&copy; 2021. All rights reserved. A.Vukovic</span>
        </div>
    </div>
<script src="<?php echo base_url('animacija.js'); ?>"></script>
</body>

</html>