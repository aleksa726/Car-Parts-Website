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

    <title>Admin</title>
    
    <link rel="stylesheet" href="<?php echo base_url('admin_prijavljen.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body style="height: auto; background-image: none;">
    <div class="pozadina">
        <div class="overlay"></div>
    </div>
    <div class="meni">
        <div class="logo"></div>
        <div class="nav" onclick="prikazMenija()" id="navigacija">
            <ul>
                <a href="<?php echo base_url('/')?>">
                    <li>Pocetna</li>
                </a>
                <a href="<?php echo base_url('neodgovoreniUpiti')?>">
                    <li>Neodgovoreni upiti</li>
                </a>
                <a href="<?php echo base_url('odgovoreniUpiti')?>">
                    <li>Odgovoreni upiti</li>
                </a>
                <a href="<?php echo base_url('odjava')?>">
                    <li>Odjavi se</li>
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
            <a href="<?php echo base_url('neodgovoreniUpiti')?>">
                <li>Neodgovoreni upiti</li>
            </a>
            <a href="<?php echo base_url('odgovoreniUpiti')?>">
                <li>Odgovoreni upiti</li>
            </a>
            <a href="<?php echo base_url('odjava')?>">
                <li>Odjavi se</li>
            </a>
        </ul>
    </div>
    <div class="div_pregleda_upita">
        <div class="pregled_upita">
            <?php 
                $url = site_url("Gost/promeniOdgovorPitanja/$pitanje->idK");
                $odgovoreno = "";
                if($pitanje->odgovor)
                    $odgovoreno = "Neodgovoreno";
                else
                    $odgovoreno = "Odgovoreno";
                echo "
                    <span class='polje'>Ime:</span>
                    <span class='podatak'>$pitanje->ime</span>
                    <span class='polje'>Prezime:</span>
                    <span class='podatak'>$pitanje->prezime</span>
                    <span class='polje'>Email:</span>
                    <span class='podatak'>$pitanje->email</span>
                    <span class='polje'>Poruka:</span>
                    <span class='podatak poruka'>$pitanje->pitanje</span>
                    <form style='display: flex; justify-content: center;' action='$url' method='post'>
                        <button>$odgovoreno</button>
                    </form>
                ";
            ?>
            
        </div>
    </div>
    <script src="<?php echo base_url('animacija.js'); ?>"></script>
</body>

</html>