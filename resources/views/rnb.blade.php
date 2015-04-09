<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

    <!-- METATAGS -->
    <title>Welcome - Recycle NB</title>

    <meta name='description' content=''/>
    <meta name='keywords' content=''/>
    <meta name='robots' content='index,follow,archive'/>

    <meta name='geo.position' content=','/>
    <meta name='geo.placename' content=''/>
    <meta name='geo.region' content=''/>


    <link rel='schema.DC' href='http://purl.org/dc/elements/1.1/'/>
    <link rel='schema.DCTERMS' href='http://purl.org/dc/terms/'/>
    <meta name='DC.title' content='Welcome - Recycle NB'/>
    <meta name='DC.creator' content='Administrator'/>
    <meta name='DC.subject' content=''/>
    <meta name='DC.description' content=''/>
    <meta name='DC.publisher' content=''/>
    <meta name='DC.date.created' scheme='DCTERMS.W3CDTF' content='2010-06-23T11:19:28-0400'/>
    <meta name='DC.date.modified' scheme='DCTERMS.W3CDTF' content='2010-11-25T16:07:29-0500'/>
    <meta name='DC.date.valid' scheme='DCTERMS.W3CDTF' content='2015-04-15T16:38:56-0400'/>
    <meta name='DC.type' scheme='DCTERMS.DCMIType' content='Text'/>
    <meta name='DC.rights' scheme='DCTERMS.URI' content=''/>
    <meta name='DC.format' content='text/html'/>
    <meta name='DC.identifier' scheme='DCTERMS.URI' content='http://www.recyclenb.com/en/en/'/>

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="/resource/css/screen.css" type="text/css" media="screen,projection"/>

    <!--[if IE 8]>
    <link rel="stylesheet" href="/resource/css/lib/ie8.css" type="text/css" media="screen,projection"/><![endif]-->
    <!--[if IE 7]>
    <link rel="stylesheet" href="/resource/css/lib/ie7.css" type="text/css" media="screen,projection"/><![endif]-->
    <!--[if IE 6]>
    <link rel="stylesheet" href="/resource/css/lib/ie6.css" type="text/css" media="screen,projection"/><![endif]-->

    <!-- PRINT STYLESHEET -->
    <link rel="stylesheet" href="/resource/css/print.css" type="text/css" media="print"/>

    <link rel="shortcut icon" type="image/x-icon" href="/resource/icons/favicon.ico">

    <!--[if IE 6]>
    <script type="text/javascript" src="/resource/js/ie6.js"></script>
    <![endif]-->

    <!-- JAVASCRIPT LIBRARIES -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

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
        <p><a href="http://www.recyclenb.com/en/fr/" title="Fran&ccedil;ais">Fran&ccedil;ais</a></p>

        <p><a href="http://www.recyclenb.com/en/boardmembers/" title="Login">Login</a></p>
    </div>
    <!-- /LANGUAGE -->


    <!-- LOGO -->
    <a href="http://www.recyclenb.com/en/" title="Recycle NB" id="logo">Recycle NB</a>
    <!-- /LOGO -->

    <!-- NAV -->
    <ul id="nav">
        <li class="aboutus "><a href="http://www.recyclenb.com/en/about_us/" title="About Us">About Us</a></li>
        <li class="calendar "><a href="http://www.recyclenb.com/en/calendar/" title="Calendar">Calendar</a></li>
        <li class="community "><a href="http://www.recyclenb.com/en/community/" title="Community">Community</a></li>
        <li class="media "><a href="http://www.recyclenb.com/en/media/" title="Media">Media</a></li>
        <li class="resources "><a href="http://www.recyclenb.com/en//resources/" title="Resources">Resources</a></li>
        <li class="contact "><a href="http://www.recyclenb.com/en/contact/" title="Contact">Contact</a></li>
    </ul>
    <!-- /NAV -->

    <!-- KIDSPAGE -->
    <a href="http://www.recyclenb.com/en/kids/" title="Kids Page" class="kids">Kids Page</a>
    <!-- /KIDSPAGE -->


</div>
<!-- /HEADER -->

<!-- WRAPPER -->
<div id="container">
    <div id="wrapper" class="clearfix  ">


        <!-- LEFTCOL -->
        <div id="leftCol">

            <h2>{!! $conference->conference_name !!}</h2>

            {!! $conference->description !!}

            <hr>

            <br>

            {!! Form::open(array(
                'url' => '/register',
                'role' => 'form',
                'name' => 'regform',
                'id' => 'regform',
                'method' => 'post'
                ))
                !!}

                <fieldset>
                    <legend>Registration Information</legend>
                    <br>
                    <label for="title">Title<br>
                        <input type="text" name="title" class="required">
                    </label>

                    <label for="first_name">First Name<br>
                        <input type="text" name="first_name" class="required">
                    </label>

                    <label for="last_name">Last Name<br>
                        <input type="text" name="last_name" class="required">
                    </label>

                    <label for="company">Company/Organization<br>
                        <input type="text" name="company" class="required">
                    </label>

                    <label for="email">Email address<br>
                        <input type="email" name="email" class="required email">
                    </label>

                    <label for="address">Mailing address<br>
                        <input type="text" name="address" class="required">
                    </label>

                    <label for="city">City/Town<br>
                        <input type="text" name="city" class="required">
                    </label>

                    <label for="zip">Postal Code<br>
                        <input type="text" name="zip" class="required">
                    </label>

                    <label for="phone">Phone<br>
                        <input type="text" name="phone" class="required">
                    </label>

                    <label for="commission">Regional Service Commission<br>
                        <select name="commission">
                            <option value="">N/A</option>
                            <option value="1">Northwest Regional Service Commission</option>
                            <option value="2">Restigouche Regional Service Commission //option>
                            <option value="3">Chaleur Regional Service Commission</option>
                            <option value="4">Acadian Peninsula Regional Service Commission</option>
                            <option value="5">Greater Miramichi Regional Service Commission</option>
                            <option value="6">Kent Regional Service Commission</option>
                            <option value="7">Southeast Regional Service Commission</option>
                            <option value="8">Regional Service Commission 8 </option>
                            <option value="9">Fundy Regional Service Commission</option>
                            <option value="10">Southwest New Brunswick Service Commission </option>
                            <option value="11">Regional Service Commission 11</option>
                            <option value="12">Regional Service Commission 12 (Western Valley Regional Service
                                Commission)</option>
                        </select>
                    </label>

                </fieldset>

                <hr>
                <p>You may wish to review our <a href="">privacy policy</a>. We will never share
                    your personal information with a third party, and only use it to organize the conference.</p>
                <button>Submit Registration</button>
            {!! Form::close() !!}

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
<div id="footerWrapper">

    <!-- FOOTER -->
    <div id="footer">

        <!-- RECYCLENB -->
        <a href="http://www.recyclenb.com/en/" title="Recycle NB" class="recyclenb">Recycle NB</a>
        <!-- /RECYCLENB -->

        <!-- SITEMAP -->
        <ul id="siteMap" class="clearfix">
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/en/" title="Home">Home</a></li>
                    <li><a href="http://www.recyclenb.com/en/about_us/" title="About Us">About Us</a></li>
                    <li><a href="http://www.recyclenb.com/en/calendar/" title="Calendar">Calendar</a></li>
                    <li><a href="http://www.recyclenb.com/en/community/" title="Community">Community</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/en/programs/" title="Programs">Programs</a></li>
                    <li><a href="http://www.recyclenb.com/en/recycling/" title="Recycling">Recycling by Region</a></li>
                    <li><a href="http://www.recyclenb.com/en/composting/" title="Composting">Composting</a></li>
                    <li><a href="http://www.recyclenb.com/en/teachers_resources/" title="Education">Education</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/en/programs/tire/" title="Tire Program">Tire Program</a></li>
                    <li><a href="http://www.recyclenb.com/en/programs/paint/" title="Paint Program (EPR)">Paint Program
                            (EPR)</a></li>
                    <li><a href="http://www.recyclenb.com/en/programs/oil/" title="Oil and Glycol Program (EPR)">Oil and
                            Glycol Program (EPR)</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/en/kids/" title="Kid's Page">Kid's Page</a></li>
                    <li><a href="http://www.recyclenb.com/en/teachers_resources/" title="Teacher's Resources">Teacher's
                            Resources</a></li>
                    <li><a href="http://www.recyclenb.com/en/recycling_dictionary/" title="Recycling Dictionary">Recycling
                            Dictionary</a></li>
                </ul>
            </li>
            <li>
                <ul>
                    <li><a href="http://www.recyclenb.com/en/media/" title="Media">Media</a></li>
                    <li><a href="http://www.recyclenb.com/en/resources/" title="Resources">Resources</a></li>
                    <li><a href="http://www.recyclenb.com/en/contact/" title="Contact">Contact</a></li>
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


<!-- GA -->
{{--<script type="text/javascript">--}}

{{--var _gaq = _gaq || [];--}}
{{--_gaq.push(['_setAccount', 'UA-36229613-1']);--}}
{{--_gaq.push(['_trackPageview']);--}}

{{--(function() {--}}
{{--var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;--}}
{{--ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';--}}
{{--var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);--}}
{{--})();--}}

{{--</script>--}}

<script>
    $(document).ready(function () {
        $("#regform").validate();
    });
</script>
</body>
</html>