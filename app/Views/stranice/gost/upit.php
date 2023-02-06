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

    <title>Auto Aleksa - Upit</title>
    
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="<?php echo base_url('upit.css'); ?>">
    <script src="<?php echo base_url('aos.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('aos.css'); ?>" />
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
    <div class="pozadina_upit">
        <h1>Posalji nam upit</h1>
        <span>Zelis da proveris cenu nekog proizvoda? Zanima te koliko kostaju delovi za mali servis tvog
            automobila? <br> <b>Posalji nam upit i mi cemo ti odgovoriti u najkracem roku!</b> </span>
    </div>
    <form name="postaviUpit", action="<?= site_url("Gost/PostavljanjeUpita") ?>" method="post">
        <div class="upit_content" class="ponuda" data-aos="zoom-out-down" data-aos-once='true' data-aos-duration='1500'>
            <div class="div_upita">
                <h3>Kreiraj upit</h3>

                <div class="polje_labela">
                    <span class="labela"> Ime:</span>
                    <input name="ime" type="text" placeholder="Unesite Vase ime">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Prezime:</span>
                    <input name="prezime" type="text" placeholder="Unesite Vase prezime">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Email:</span>
                    <input name="email" type="text" placeholder="Unesite Vas email">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Marka automobila:</span>
                    <input name="marka" type="text" placeholder="Unesite marku Vaseg automobila">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Model automobila:</span>
                    <input name="model" type="text" placeholder="Unesite model Vaseg automobila">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Godiste automobila:</span>
                    <input name="godiste" type="number" placeholder="Unesite godiste Vaseg automobila">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Kubikaza:</span>
                    <input name="kubikaza" type="number" placeholder="Unesite kubikazu Vaseg automobila">
                </div>
                <div class="polje_labela">
                    <span class="labela"> Tekst upita:</span>
                    <textarea name="tekst" placeholder="Unesite tekst Vaseg upita"></textarea>
                </div>
                <?php if($greska != null) echo "<span class='greska'>$greska</span>" ?>
                <div class="polje_labela">
                    <button>Posalji upit</button>
                </div>
            </div>
        </div>
    </form>
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

    <script>
        AOS.init();
    </script>
    <script src="<?php echo base_url('animacija.js'); ?>"></script>
</body>

</html>