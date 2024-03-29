<?php
$site_data      = json_decode(file_get_contents('http://local.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Vyklízení bytů'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title>
        <?= $title ?>
    </title>
</head>

<body>


    <!--Шапка сайта-->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 containerP0">
                    <div class="header__box">
                        <div class="header__left">
                            <div class="header__imgWrp">
                                <img class="header__img" src="./assets/img/mainFon.jpg" alt="skládka">
                            </div>
                            <h1 class="header__title"><?= $title ?></h1>
                        </div>
                        <div class="header__right">
                            <div class="header__subTitleWrp">
                                <h2 class="header__subTitle">Nákladní vůz</h2>
                                <p class="header__price">2 nosiče od 400 Kč</p>
                            </div>
                            <div class="header__commentsWrp">
                                <div class="header__commentsLeft">
                                    <div class="header__commentsImgWrp">
                                        <img class="header__commentsImg" src="./assets/img/smile.png" alt="smile" >
                                    </div>
                                    <p class="header__commentsName">Julia S.</p>
                                </div>
                                <div class="header__commentsRight">
                                    <p class="header__commentsTxt">Děkuji moc kluci za skvělé
                                        odvedenou práci. Výborný a rychlý  servis, mohu jen doporučit.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Основное содержимое страницы -->
    <main class="main">
        <section class="clearance">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="clearance__box">
                            <div class="clearance__left">
                                <div class="clearance__imgWrp">
                                    <img class="clearance__img" src="./assets/img/mainFon2.png" alt="Clearance" >
                                </div>
                                <h2 class="clearance__title">Vyklízení: Jasná cena,  nepřekonatelné balíčkové  nabídky</h2>
                            </div>
                            <p class="clearance__txt">Objevte naše služby odstranění nepotřebného  majetku s transparentními cenami pro byty,  kanceláře a další. K dispozici jsou individuálně  přizpůsobeny balickové ceny které najdete u  nás na stránkách. Každé vyklizení je  jedinečné, proto nabízíme flexibilní balíčkové  možnosti. Všechno najdete u nás na stránkách  a neváhejte nás kontaktovat..</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="price">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="price__box">
                            <div class="price__left">
                                <div class="price__imgWrp">
                                    <img class="price__img" src="./assets/img/mainFon3.png" alt="price">
                                </div>
                                <h2 class="price__title">Objekt jsme zpracovali  za nepouhou cenu 3.000 Kč</h2>
                            </div>
                            <p class="price__txt">Rozhodněte se pro naše kancelářské vyklízení  za pevnou cenu. Zaručujeme efektivitu,  transparentnost a bezproblémový průběh.
                                Naše balíčkové ceny jsou individuálně  přizpůsobeny ke každému objektu.. Informujte  se nyní!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="liquidation">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 containerP0">
                        <div class="liquidation__box">
                            <h2 class="liquidation__title">Likvidace bez čekací doby:  Rychlé, spolehlivé,  jednoduché</h2>
                            <p class="liquidation__txt">Získejte okamžitá řešení pro vyklizení Vašeho  domova s naši firmou. Poskytujeme kompletní  vyklízení včetně demontáže nábytku a odvozu  nepotřebných věcí. Naši zkušení koordinátoři  zajišťují plynulý průběh vyklízení a komunikují s  vámi od začátku až do konce procesu.
                                S ohledem na životní prostředí zajistíme  odpovědnou recyklaci a odvoz odpadu z  vyklízení.	Poskytujeme bezplatné konzultace  a odhady nákladů, abyste měli jasný přehled o  službách a cenách.
                                </p>
                            <p class="liquidation__txt">Váš uklízený prostor je pouze hovor daleko!  </p>
                            <p class="liquidation__txt">Rychlé a efektivně Okamžitá domluva a dostupnost</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class='forms'>
            <div class='forms__wrapper'>
                <div class='container-fluid'>
                    <div class='row'>
                        <div class='col-12 containerP0'>
                        <div class='forms__box'>
                            <h2 class='forms__title'>Kontaktuj nás</h2>
                            <form id='jq_form' class='mb-0 mt-3'>
                                <div class='my-0'>
                                    <input class='form-control' placeholder='Jméno' name='jq_name' type='text'>
                                    <div id='jq_name' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='Telefon' name='jq_phone' type='text'>
                                    <div id='jq_phone' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='Ulice' name='jq_street' type='text'>
                                    <div id='jq_street' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='PSČ / Město' name='jq_city' type='text'>
                                    <div id='jq_city' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div class='my-4'>
                                    <input class='form-control' placeholder='E-mail' name='jq_email' type='text'>
                                    <div id='jq_email' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div class='my-4'>
                                    <textarea rows='3' class='form-control' name='jq_text' placeholder='Zprávy'></textarea>
                                    <div id='jq_text' style='font-weight:700;font-size:15px;color:red;padding-top:2px;display:none'>Toto je požadované pole.</div>
                                </div>
                                <div>
                                    <input class='btn  text-uppercase fw-bold mb-0 px-3 py-2 forms__button' type='submit' id='jq_submit' value='Poslat'>
                                </div>
                                <div id='jq_success' style='display:none'>Díky za vaši zprávu. Byla odeslána.</div>
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
       </section>

        
        <section class='btnFixedD'>
            <div class='btnFixedD__box'>
                <a class="btnFixedD__btn" href="<?= $phone_href ?>" ><img class="btnFixedD__img" src="assets/icons/telephone-fill.svg" alt=""></a>
            </div>
        </section>
        <section class='btnFixed'>
            <div class='btnFixed__box'>
                <a class="btnFixed__btn" href="<?= $phone_href ?>" ><span><?= $phone_name ?></span></a>
            </div>
        </section>
    </main>
    <!--Нижний колонтитул страницы-->
    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 container">© 2024</div>
            </div>
        </div>
    </footer>
    <!--Style-->
    <link href="assets/css/reset.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <script src="assets/js/main.min.js"></script>
</body>

</html>