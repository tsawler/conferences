<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='robots' content='index,follow,archive'>

    <!-- METATAGS -->
    <title>Recycle NB</title>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="/resource/css/screen.css" type="text/css" media="screen,projection" />

    <!--[if IE 8]><link rel="stylesheet" href="/resource/css/lib/ie8.css" type="text/css" media="screen,projection" /><![endif]-->
    <!--[if IE 7]><link rel="stylesheet" href="/resource/css/lib/ie7.css" type="text/css" media="screen,projection" /><![endif]-->
    <!--[if IE 6]><link rel="stylesheet" href="/resource/css/lib/ie6.css" type="text/css" media="screen,projection" /><![endif]-->

    <!-- PRINT STYLESHEET -->
    <link rel="stylesheet" href="/resource/css/print.css" type="text/css" media="print" />

    <link rel="shortcut icon" type="image/x-icon" href="/resource/icons/favicon.ico">

    <style>
        input {
            width: 50%;
        }
        label {
            margin-bottom: 15px;
            display: block;
        }
        select {
            width: 50%;
        }
    </style>

</head>
<body class="homepage">

<!-- HEADER -->
<div id="header">



    <!-- LANGUAGE -->
    <div id="language">
        <p><a href="/changelanguage?lang=en&amp;url={!! URL::current() !!}" title="English">English</a></p>

        <p><a href="http://www.recyclenb.com/en/boardmembers/" title="Ouvrir une session" style="line-height:10px;padding-top:3px;">Ouvrir une session</a></p>
    </div>
    <!-- /LANGUAGE -->


    <!-- LOGO -->
    <a href="http://www.recyclenb.com/fr/" title="Recycle NB" id="logo">Recycle NB</a>
    <!-- /LOGO -->

    <!-- NAV -->
    <ul id="nav">
        <li class="anotresujet active"><a href="index.html" title="&Agrave; notre sujet">&Agrave; notre sujet</a></li>
        <li class="calendrier "><a href="http://www.recyclenb.com/fr/calendrier/" title="Calendrier">Calendrier</a></li>
        <li class="communaute "><a href="http://www.recyclenb.com/fr/communaute/" title="Communaut&eacute;">Communaut&eacute;</a></li>
        <li class="medias "><a href="http://www.recyclenb.com/fr/medias/" title="M&eacute;dias">M&eacute;dias</a></li>
        <li class="ressources "><a href="http://www.recyclenb.com/fr/ressources/" title="Ressources">Ressources</a></li>
        <li class="contacteznous "><a href="http://www.recyclenb.com/fr/pour_nous_joindre/" title="Pour Nouse Joindre">Pour Nouse Joindre</a></li>
    </ul>
    <!-- /NAV -->

    <!-- KIDSPAGE -->
    <a href="http://www.recyclenb.com/fr/pour_les_enfants/" title="Pour les enfants" class="kids_french">Pour les enfants</a>
    <!-- /KIDSPAGE -->


</div>
<!-- /HEADER -->

<!-- WRAPPER -->
<div id="container">
    <div id="wrapper" class="clearfix  ">

        <!-- LEFTCOL -->
        <div id="leftCol">


            <!-- CONTENT -->
            <div id="content">

        <h2>{!! $conference->conference_name_fr !!}</h2>

        {!! $conference->description_fr !!}

        <hr>

        <br>

        {!! Form::open(array(
        'url' => '/register',
        'name' => 'regform',
        'id' => 'regform',
        'method' => 'post'
        ))
        !!}

        <fieldset>
            <legend>Renseignements sur l'inscription</legend>
            <br>
            <label for="title">Titre<br>
                <input type="text" id="title" name="title" class="required">
            </label>

            <label for="first_name">Prénom<br>
                <input type="text" id="first_name" name="first_name" class="required">
            </label>

            <label for="last_name">Nom<br>
                <input type="text" id="last_name" name="last_name" class="required">
            </label>

            <label for="company">Entreprise ou organisme<br>
                <input type="text" id="company" name="company" class="required">
            </label>

            <label for="email">Courriel<br>
                <input type="email" id="email" name="email" class="required email">
            </label>

            <label for="address">Addresse<br>
                <input type="text" id="address" name="address" class="required">
            </label>

            <label for="city">Cité/Ville<br>
                <input type="text" id="city" name="city" class="required">
            </label>

            <label for="zip">Code postal<br>
                <input type="text" id="zip" name="zip" class="required">
            </label>

            <label for="phone">T&eacute;l&eacute;phone<br>
                <input type="text" id="phone" name="phone" class="required">
            </label>

            <label for="commission_id">Commissions de services régionaux<br>
                {!! Form::select('commission_id', $commissions,
                null) !!}
            </label>

        </fieldset>

        <hr>

        <p>Vous pouvez consulter notre <a href="/privacy">politique de confidentialité</a> . Nous ne allons jamais partager
            vos informations personnelles avec un tiers et ne l'utiliser pour organiser la conférence .</p>
        <button>Soumettre</button>
        <input type="hidden" name="conference_id" value="1">
        {!! Form::close() !!}







            </div>
            <!-- /CONTENT -->


        </div>
        <!-- /LEFTCOL -->

        <!-- SIDEBAR -->
        <div id="sidebar">

        </div>
        <!-- /SIDEBAR -->



    </div>
</div>
<!-- /WRAPPER -->

<!-- FOOTERWRAPPER -->
<div id="footerWrapper" class="fr">

    <!-- FOOTER -->
    <div id="footer">

        <!-- RECYCLENB -->
        <a href="http://www.recyclenb.com/fr/../" title="Recycle NB" class="recyclenb">Recycle NB</a>
        <!-- /RECYCLENB -->

        <!-- SITEMAP -->
        <ul id="siteMap" class="clearfix">
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/fr/" title="Accueil">Accueil</a></li>
                    <li><a href="" title="&Agrave; notre sujet">&Agrave; notre sujet</a></li>
                    <li><a href="http://www.recyclenb.com/fr/calendrier/" title="Calendrier">Calendrier</a></li>
                    <li><a href="http://www.recyclenb.com/fr/communaute/" title="Communaut&eacute;">Communaut&eacute;</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/fr/programmes/" title="Programmes">Programmes</a></li>
                    <li><a href="http://www.recyclenb.com/fr/recycling/" title="Recyclage">Recyclage par r&eacute;gion</a></li>
                    <li><a href="http://www.recyclenb.com/fr/le_compostage/" title="Le compostage">Le compostage</a></li>
                    <li><a href="http://www.recyclenb.com/fr/ressources_pour_les_enseignants/" title="L'&eacute;ducation">L'&eacute;ducation</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/fr/programmes/programmes_dintendance_des_pneus/" title="Programme de pneu">Programme de pneu</a></li>
                    <li><a href="http://www.recyclenb.com/fr/programmes/programme_decologisation_de_la_peinture/" title="Programme de peinture">Programme de peinture</a></li>
                    <li><a href="http://www.recyclenb.com/fr/programmes/petrole_et_programme_de_recyclage_de_glycol/" title="Programme de petrole et glycol">Programme de p&eacute;trole et glycol</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/fr/pour_les_enfants/" title="Pour les enfants">Pour les enfants</a></li>
                    <li><a href="http://www.recyclenb.com/fr/ressources_pour_les_enseignants/" title="Ressources pour les enseignants">Ressources pour les enseignants</a></li>
                    <li><a href="http://www.recyclenb.com/fr/dictionnaire_du_recyclage/" title="Dictionnaire du recyclage">Dictionnaire du recyclage</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/fr/medias/" title="M&eacute;dias">M&eacute;dias</a></li>
                    <li><a href="http://www.recyclenb.com/fr/ressources/" title="Ressources">Ressources</a></li>
                    <li><a href="http://www.recyclenb.com/fr/pour_nous_joindre/" title="Pour Nous Joindre">Pour nous joindre</a></li>
                </ul>
            </li>
        </ul>
        <!-- /SITEMAP -->

        <!-- COPYRIGHT -->
        <p class="copyright">&copy; 2015 Recycle NB</p>


        <!-- /COPYRIGHT -->

    </div>
    <!-- /FOOTER -->

</div>
<!-- /FOOTERWRAPPER -->

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

<script>
    $(document).ready(function () {
        $("#regform").validate();
    });
</script>

<!-- GA -->
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36229613-1']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>
</html>