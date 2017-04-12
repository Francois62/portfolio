<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Portfolio de François Andrzejewski</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <script src="https://use.fontawesome.com/c9b70bfdc8.js"></script>
    <!-- Stylesheet -->
    <link href="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery-materialize.min.opt.css?11838297021386793225" rel="stylesheet">
    <link href="css/portfoliofinal.css" rel='stylesheet' type='text/css'>
    <link href="css/foundation.min.css" rel='stylesheet' type='text/css'>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <!-- Navbar and Header -->
    <nav class="nav-extended">
        <div id="nav"class="nav-wrapper">
            <a href="#" class="brand-logo"><i class="material-icons">camera</i>Acceuil</a>
            <!-- <a  data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i> -->
  					<button class="show-for-small-only menu-icon button-collapse" type="button" data-activates="slide-out"><i class="mdi-navigation-menu"></i></button>
            <ul class="bt hide-on-med-and-down">
                <li > <a href="#portfolio" class=" font js-scrollTo">Projets</a></li>
                <li> <a href="#comp" class=" font js-scrollTo">Compétences</a></li>
                <li> <a href="#about" class=" font js-scrollTo">A propos</a></li>
                <li> <a href="#footer" class="  font js-scrollTo">Contact</a></li>
                <li><a class='font dropdown-button' data-activates='feature-dropdown2' data-belowOrigin="true" data-constrainWidth="false">Style<i class="material-icons bt">arrow_drop_down</i></a></li>
                <li> <a class="font" href="http://franz.ovh/cv%20site/">CV</a></li>
            </ul>
            <!-- Dropdown Structure -->
            <ul id='feature-dropdown' class='dropdown-content'>
                <li><a id="bleu">Bleu</a></li>
                <li><a id="vert">Vert</a></li>
            </ul>
            <ul id='feature-dropdown2' class='dropdown-content'>
                <li><a id="bleu">Bleu</a></li>
                <li><a id="vert">Vert</a></li>
            </ul>
          </div>
              </nav>
              <ul id="slide-out" class="show-for-small-only side-nav">
                <li> <a href="#portfolio" class=" font js-scrollTo">Projets</a></li>
                <li> <a href="#comp" class=" font js-scrollTo">Compétences</a></li>
                <li> <a href="#about" class=" font js-scrollTo">A propos</a></li>
                <li> <a href="#footer" class="  font js-scrollTo">Contact</a></li>
                <li><a class='font dropdown-button' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Style<i class="material-icons bt">arrow_drop_down</i></a></li>
                <li> <a class="font" href="http://franz.ovh/cv%20site/">CV</a></li>
              </ul>
                <div id="hello"class="start row small-up-2 medium-up-3 large-up-4">
                <h1 class="title"><marquee>Portfolio de François Andrzejewski</marquee></h1>
                <div >
                    <p>Bonjour, je vous souhaite la bienvenue sur mon site.
                    </p>
                    <p>Il fait office de portfolio regroupant les compétences de développeur web que j'ai acquis.
                    </p>
                    <p>Bonne visite!</p>
                </div>
            </div>
    <div id="portfolio" class="row portfolio columns">
        <h2 class="text-center title">Projets</h2>
        <!-- <div class="small-up-6 medium-up-6 large-up-6 columns">
            <img class="thumbnail" src="images/hackaton.png">
            <h5>Application Web Selfies</h5>
        </div>
        <div class="small-up-6 medium-up-6 large-up-6 columns">
            <img class="thumbnail" src="images/CAB.png">
            <h5>Application Gestion Fibre Optique</h5>
        </div> -->
        <div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
        <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>
        <li class="orbit-slide is-active">
        <img src="images/hackaton.png">
        <h5>Application Web Selfies</h5>
        </li>
        <li class="orbit-slide">
        <img src="images/CAB.png">
          <h5>Application Gestion Fibre Optique</h5>
        </li>
        </ul>
        </div>
    </div>
    <div id="comp" class="row section">
        <div class="comp small-12 medium-12 large-12 columns">
            <h2 class="text-center title">Compétences</h2>
            <div id="html-css" class="small-3 medium-3 large-3 column" style="height:150px;">
            </div>
            <div id="bootstrap" class="small-3 medium-3 large-3 column" style="height:150px;">
            </div>
            <div id="js" class="small-3 medium-3 large-3 column" style="height:150px;">
            </div>
            <div id="PHP" class="small-3 medium-3 large-3 column" style="height:150px;">
            </div>
            <!-- <div id="jquery" class="large-3 columns" style="height:150px;">
                  </div> -->
        </div>
        <div class="comp small-12 medium-12 large-12 columns">
        <div id="jquery" class="small-3 medium-3 large-3 column" style="height:150px;">
        </div>
        <div id="foundation" class="small-3 mediuml-3 large-3 column" style="height:150px;">
        </div>
        <div id="materialize" class="small-3 medium-3 large-3 column" style="height:150px;">
        </div>
        <div id="ajax" class="small-3 medium-3 large-3 column" style="height:150px;">
        </div>
      </div>
    </div>
    <!-- <div class="parallax-background">

        <div class="intro-text">
            <p><i class="fi-arrow-down"></i></p>

        </div>

    </div>
    <div class="parallax-content">

</div> -->
    <div id="me" class="pres row">
        <h2 class="text-center title">A propos de moi</h2><br>
        <div id="about" class="small-12 medium-6 large-6 columns">

            <img class="profil img-responsive center-block" src="images/moi.jpg"><br>
            <!-- </div> -->
            <p>Cette partie du site est dedié à une présentation plus personnelle. Je m'appelle François Andrzejewski, agé de vingt-six ans, je suis né à Boulogne-sur-mer dans le Pas de Calais en France. Concernant mes compétences, j'ai effectué premièrement
                une formation de technicien réseaux via le BTS SIO pour ensuite me tourner vers le développement web notamment via la formation simplon récemment labelisée "Grande ecole du Numérique".</p>
            <p> J'ai trouvé un réel interêt dans la programmation du fait que ce travail amène à sans cesse s'interroger sur la manière d'améliorer un projet, le travail en équipe et la logique que ce travail implique. Je suis interessé par la musique que
                je pratique, le cinéma, le sport et la culture en général.
            </p>
        </div>



        <div class="small-12 medium-6 large-6 columns">
            <h4 class="text-center">Mes centres d'intérêts</h4>
            <div class=" row">
                <img id="guitar" class="img-responsive center-block pict" src="images/gibson.jpg">
                <p class="pos">En dehors de l'informatique, je suis passionné de musique et pratique la guitare depuis l'âge de mes quinze ans.</p>
            </div>
            <div class="row">
                <img id="film" class="img-responsive center-block pict" src="images/evadés.jpg">
                <p class="pos">J'aime également le cinéma en général, une préférence tout de même pour les films de Martin Scorsese, David Lynch, Tarantino etc...</p>
            </div>
        </div>
    </div>

    <section id="footer" class="contact-footer">
        <h2 class="text-center title">Contact</h2>
        <div class="row">

            <div class="small-10 medium-6 large-6 columns">

                <div class="row">

                    <div class="small-6 medium-12 large-12 columns">

                        <h4 class="location">Adresse</h4>

                        <p>12 rue Georges Docquois.<br>62200 Boulogne-sur-mer</p>



                        <h4 class="phone">Tel: 06.31.13.44.65</h4>

                    </div>

                    <div class="small-6 medium-12 large-12 columns">

                        <h4 class="email">Email</h4>

                        <p>fran.andrzejewski@laposte.net</p>



                        <h4>Social</h4>

                        <div class="social">

                            <ul class="inline-list">

                                <li><a href="#"><i class="fi-social-twitter"></i></a></li>

                                <li><a href="#"><i class="fi-social-facebook"></i></a></li>

                                <li><a href="https://www.linkedin.com/in/fran%C3%A7ois-andrzejewski-7a7134125/"><i class="fi-social-linkedin"></i></a></li>

                                <li><a href="https://github.com/Francois62/"><i class="fi-social-github"></i></a></li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>
            <div id="myModal" class="reveal" data-reveal >
            <h2 id="modalTitle">Awesome. I have it.</h2>
            <p class="lead">Your couch.  It is mine.</p>
            <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
            <a class="close-button" data-close>&#215;</a>
          </div>
            <div class="small-12 medium-6 large-6 columns">

                <p class="text-center form-lead-in">Formulaire</p>

                <form class="inputs" action="pages/contact.php" name="sentMessage" id="contactForm" novalidate method="POST">

                    <div class="row">


                      <div class="small-12 medium-6 large-6 columns">

                          <input type="text" placeholder="Sujet"  id="sujet" name="sujet" autocomplete=off value="" required="" required data-validation-required-message="Please enter your subject." />

                      </div>

                        <div class="small-12 medium-6 large-6 columns">
                          <label for="username" data-error="wrong" data-success="right">
                        <input type="text" placeholder="Nom" id="username" name="username" autocomplete=off value="" required="" required data-validation-required-message="Please enter your name." />
                      </label>
                        </div>

                        <div class="small-12 medium-6 large-6 columns">
                          <label for="email" data-error="wrong" data-success="right">
                            <input type="email" placeholder="Email" id="mail" name="mail"  autocomplete=off value="" required="" required data-validation-required-message="Please enter your email."/>
                          </label>
                        </div>

                        <div class="small-12 medium-6 large-6 columns">

                            <input type="text" placeholder="Telephone"  id="phone" name="phone" autocomplete=off value="" required="" required data-validation-required-message="Please enter your phone number." />

                        </div>

                        <div class="small-12 medium-12 large-12 columns">

                              <textarea id="message" name="message" autocomplete=off required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" ></textarea>

                            <button type="submit" class="valid button round" data-open="myModal">Envoyer</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <div class="row">
        <div class="totop small-1 medium-1 large-1 columns">
            <a href="#" class="js-scrollTo" ><i class="btn btn-default fa fa-arrow-circle-up fa-2x js-scrollTo" type="submit" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="row">
        <div class=" footer large-12 medium-12 small-12 columns ">
            <p class="text-center">@Andrzejewski.François Legal - Credits</p>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?11838297021386793225" crossorigin="anonymous"></script>
<script src="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
      <script type="text/javascript" src="https://intercom.zurb.com/scripts/zcom.js"></script>
    <script>
        $(document).foundation();

    </script>
        <script type="text/javascript">
    $("#bleu").click(function() {
        $("body").animate({
          backgroundColor: "#0033FF",
          color: "white"
      }, 10000);
        $(".nav").animate({
            backgroundColor: "#0033FF",
            color: "white"
        }, 10000);
        $("#code").animate({
            backgroundColor: "#8DB6CD",
            color: "white"
        }, 10000);
        $("#hello").animate({
            backgroundColor: "#539DC2",
            color: "white"
        }, 10000);
        $("#portfolio").animate({
            backgroundColor: "#9AC0CD",
            color: "white"
        }, 10000);
        $("#footer").animate({
            backgroundColor: "blue",
            color: "white"
        }, 10000);
        $("#me").animate({
            backgroundColor: "#73B1B7",
            color: "white"
        }, 10000);
        // $("#start").animate({
        //     backgroundColor: "#B4CDCD",
        //     color: "white"
        // }, 10000);
        $("nav").animate({
            backgroundColor: "#1560BD",
            color: "white"
        }, 10000);
        $("#comp").animate({
            backgroundColor: "#ADD8E6",
            color: "white"
        }, 10000);
        // $("carousel-inner").animate({
        //     backgroundColor: "#006699",
        //     color: "white"
        // }), 10000;
        $("#info").animate({
            backgroundColor: "#73B1B7",
            color: "white"
        }, 10000);
        $("#prop").animate({
            backgroundColor: "#73B1B7",
            color: "white"
        }, 10000);
        $("#cont").animate({
            backgroundColor: "#73B1B7",
            color: "white"
        }, 10000);
    });
            $("#vert").click(function() {
                $("#comp").animate({
                    backgroundColor: "#98FB98",
                    color: "white"
                }, 10000);
                $("carousel-inner").animate({
                    backgroundColor: "#9AFF9A",
                    color: "white"
                }), 10000;
                $("#prop").animate({
                    backgroundColor: "#8CDD81",
                    color: "white"
                }, 10000);
                $("#cont").animate({
                    backgroundColor: "#9AFF9A",
                    color: "white"
                }, 10000);
                $("#hello").animate({
                    backgroundColor: "#8CDD81",
                    color: "white"                              // "#73B1B7"
                }, 10000);
                $("#portfolio").animate({
                    backgroundColor: "#86C67C",
                    color: "white"
                }, 10000);
                $("#footer").animate({
                    backgroundColor: "#057313",
                    color: "white"
                }, 10000);
                $("#me").animate({
                    backgroundColor: "#8CDD81",
                    color: "white"
                }, 10000);

                $("#start").animate({ backgroundColor: "#7BCC70",
                 color: "white"
               }, 10000);

                $("#info").animate({
                    backgroundColor: "#8CDD81",
                    color: "white"
                }, 10000);
                $("#code").animate({
                    backgroundColor: "#8FBC8F",
                    color: "white"
                }, 10000);
                $("#prop").animate({
                    backgroundColor: "#8CDD81",
                    color: "white"
                }, 10000);
                $("nav").animate({
                    backgroundColor: "#057814",
                    color: "white"
                }, 10000);
            });

        $('.js-scrollTo').on('click', function() { // Au clic sur un élément
            var page = $(this).attr('href'); // Page cible
            var speed = 1700; // Durée de l'animation (en ms)
            $('html, body').animate({
                scrollTop: $(page).offset().top
            }, speed); // Go
            return false;
        });
        $('.button-collapse').sideNav({
     menuWidth: 200, // Default is 300
     closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
     draggable: true // Choose whether you can drag to open on touch screens
   }
 );

    </script>
</body>

</html>
