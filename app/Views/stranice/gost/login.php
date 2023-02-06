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

    <title>Admin - Prijava</title>
    
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('admin.css'); ?>" />
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
</head>

<body>
    <div class="overlay">
        <div class="logo" style="margin-top: 2vh;"></div>
        <div class="prijava">
            <form name="prijava", action="<?= site_url("prijava") ?>" method="post">
                <div class="div_prijave">
                    <h1>Prijava</h1>
                    <span>Korisnicko ime:</span>
                    <input name="username" type="text">
                    <span>Lozinka:</span>
                    <input name="password" type="password">
                    <?php if($poruka != null) echo "<span class='greska'>$poruka</span>" ?>
                    <button>Prijavi se</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>