<!doctype html>
<html lang="en-GB">

<head>
	<!-- Global site tag (gtag.js) - Google Analytics --> 
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-6314706-14"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-6314706-14');
    </script>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-gb">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="<?php echo $color ?>">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="<?php echo $color ?>">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="<?php echo $color ?>">
    <!-- /CHANGING ADDRESS AND NAVIGATION BARS' COLORS -->
    <?php if ($body_class == "index"): ?>
        <title><?php echo $titulo ?></title>
    <?php else: ?>
        <title><?php echo $titulo ?> | UNITAR</title>
    <?php endif; ?>
    <meta name="description" content="<?php echo $descricao ?>">
    <meta name="robots" content="index, follow">

    <link href="/favicon.ico" rel="shortcut icon" />
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/estilo.css">
    
    <script src="https://unpkg.com/scrollreveal"></script>

    <style>
        .reveal {
            visibility: hidden;
        }
        #loader {
            position: fixed;
            display: flex;
            align-items: center;
            justify-content: center;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 99999;
            background-color: #fff;
            transition: all 0.5s ease-in-out;
        }
        #loader img {
            width: 30%;
            min-width: 260px;
            max-width: 300px;
            height: auto;
        }
        #loader.hide {
            opacity: 0;
            visibility: hidden;
        }
    </style>

</head>
<?php if(!isset($page_class)){ $page_class=""; } ?>
<body class="<?php echo $body_class ?> bg-<?php echo $page_class ?>">
    <div id="loader" class="bg-<?php echo $page_class ?>">
        <?php if ( $body_class == 'index' ) { ?>
            <img src="assets/images/logo-unitar.png" alt="Unitar | United Nations Institute for Training and Research">
        <?php } else { ?>
            <img src="assets/images/logo-unitar-white.png" alt="Unitar | United Nations Institute for Training and Research">
        <?php } ?>
    </div>
    <header class="header-main bg-white">
        <div class="container">
            <div class="row align-items-center">
            <a class="navbar" href="/"><img src="assets/images/logo-unitar.svg" alt="Unitar | United Nations Institute for Training and Research"></a>
                <nav class="navbar navbar-inverse bg-inverse navbar-expand-xxl ml-auto" id="header-navbar">
                    <button class="ml-auto navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#foreword">Foreword</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#primary-output">Primary Output</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#covid-19-crisis">Our Response to the COVID-19 Crisis</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link goto" href="/#partnerships">Partnerships</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pillars</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="nav-link" href="/peace">Peace</a></li>
                                    <li><a class="nav-link" href="/people">People</a></li>
                                    <li><a class="nav-link" href="/planet">Planet</a></li>
                                    <li><a class="nav-link" href="/prosperity">Prosperity</a></li>
                                    <li><a class="nav-link" href="/multilateral-diplomacy">Multilateral Diplomacy</a></li>
                                    <li><a class="nav-link" href="/2030-agenda">2030 Agenda</a></li>
                                    <li><a class="nav-link" href="/unosat">UNOSAT</a></li>
                                    <li><a class="nav-link" href="/ncd">The Defeat-NCD Partnership</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="navbar-spacer"></div>
                        <a class="btn" href="/download/unitar_results_report_2020.pdf" target="_blank"><i><svg xmlns="http://www.w3.org/2000/svg" width="36.474" height="28.298" viewBox="0 0 36.474 28.298"><path d="M13951.332,637.3v-8.1h3.757v4.339h28.961V629.2h3.756v8.1Zm8.38-17.605,2.355-2.924,5.624,4.534V609h3.756v12.416l5.62-4.531,2.359,2.924-9.787,7.888Z" transform="translate(-13951.332 -609.001)" fill="#538dd7"/></svg></i></a>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <main class="bg-white">