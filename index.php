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
                <li><a class='font dropdown-button' data-activates='feature-dropdown' data-belowOrigin="true" data-constrainWidth="false">Style<i class="material-icons bt">arrow_drop_down</i></a></li>
                <li> <a class="font" href="http://franz.ovh/cv%20site/">CV</a></li>
            </ul>
            <!-- Dropdown Structure -->
            <ul id='feature-dropdown' class='dropdown-content'>
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
                <h1><marquee>Portfolio de François Andrzejewski</marquee></h1>
                <div >
                    <p>Bonjour, je vous souhaite la bienvenue sur mon site.
                    </p>
                    <p>Il fait office de portfolio regroupant les compétences de développeur web que j'ai acquis.
                    </p>
                    <p>Bonne visite!</p>
                </div>
            </div>
    <div id="portfolio" class="row portfolio small-up-5 medium-up-5 large-up-5 columns">
        <h2 class="text-center title">Projets</h2>
        <div class="small-up-12 medium-up-12 large-up-12 columns">
            <img class="thumbnail" src="images/hackaton.png">
            <h5>Application Web Selfies</h5>
        </div>
        <div class="small-up-12 medium-up-12 large-up-12 columns">
            <img class="thumbnail" src="images/CAB.png">
            <h5>Application Gestion Fibre Optique</h5>
        </div>
    </div>
    <!-- Fixed Masonry Filters -->
    <!-- <div class="categories-wrapper af lighten-1">
        <div class="categories-container">
          <ul class="categories db">
            <li class="k"><a href="#all">All</a></li>
            <li><a href="#polygon">Polygon</a></li>
            <li><a href="#bigbang">Big Bang</a></li>
            <li><a href="#sacred">Sacred Geometry</a></li>
          </ul>
        </div>
      </div> -->

    <!-- <ul class="side-nav" id="nav-mobile">
      <li class="k"><a href="/pages/demo"><i class="material-icons">camera</i>Gallery</a></li>
      <li><a href="/pages/blog"><i class="material-icons">edit</i>Blog</a></li>
      <li><a href="/pages/docs"><i class="material-icons">school</i>Docs</a></li>
      <li><a href="/pages/full-header"><i class="material-icontexture</i>No Image Expand</a></li>
    </ul> -->
    <div id="comp" class="row section">
        <div class="comp large-12 columns">
            <h2 class="text-center title">Compétences</h2>
            <div id="html-css" class="small-3 large-3 column" style="height:150px;">
            </div>
            <div id="bootstrap" class="small-3 large-3 column" style="height:150px;">
            </div>
            <div id="js" class="small-3 large-3 column" style="height:150px;">
            </div>
            <div id="PHP" class="small-3 large-3 column" style="height:150px;">
            </div>
            <!-- <div id="jquery" class="large-3 columns" style="height:150px;">
                  </div> -->
        </div>
        <div id="jquery" class="small-3 large-3 column" style="height:150px;">
        </div>
        <div id="foundation" class="small-3 large-3 column" style="height:150px;">
        </div>
        <div id="materialize" class="small-3 large-3 column" style="height:150px;">
        </div>
        <div id="ajax" class="small-3 large-3 column" style="height:150px;">
        </div>
    </div>
    <!-- <div class="parallax-background">

        <div class="intro-text">
            <p><i class="fi-arrow-down"></i></p>

        </div>

    </div>
    </div> -->
    <!-- <div><a class="carousel-item" href="#one!"><img src="images/hotcold.png" crossOrigin="anonymous"></a></div>
        <div><a class="carousel-item" href="#one!"><img src="images/hotcold.png" crossOrigin="anonymous"></a></div>
        <div>your content</div> -->

    <!-- <div class="parallax-content">

</div> -->
    <div id="me" class="pres row">
        <h2 class="text-center title">A propos de moi</h2><br>
        <div id="about" class="medium-6 columns">

            <img class="profil img-responsive center-block" src="images/moi.jpg"><br>
            <!-- </div> -->
            <p>Cette partie du site est dedié à une présentation plus personnelle. Je m'appelle François Andrzejewski, agé de vingt-six ans, je suis né à Boulogne-sur-mer dans le Pas de Calais en France. Concernant mes compétences, j'ai effectué premièrement
                une formation de technicien réseaux via le BTS SIO pour ensuite me tourner vers le développement web nottamment via la formation simplon récemment labelisée "Grande ecole du Numérique".</p>
            <p> J'ai trouvé un réel interêt dans la programation du fait que ce travail amène à sans cesse s'interroger sur la manière d'améliorer un projet, le travail en équipe et la logique que ce travail implique. Je suis interessé par la musique que
                je pratique, le cinéma, le sport et la culture en général.
            </p>
        </div>



        <div class="medium-6 columns">
            <h4 class="text-center">Mes centres d'interêts</h4>
            <div class=" row">
                <img id="guitar" class="img-responsive center-block pict" src="images/gibson.jpg">
                <p class="pos">En dehors de l'informatique, je suis passionné de musique et pratique la guitare depuis l'âge de mes quinze ans.</p>
            </div>
            <div class="row">
                <img id="film" class="img-responsive center-block pict" src="images/evadés.jpg">
                <p class="pos">J'aime également le cinema en general, une préférence tout de même pour les films de Martin Scorsese, David Lynch, Tarantino etc...</p>
            </div>
        </div>
    </div>

    <section id="footer" class="contact-footer">
        <h2 class="text-center title">Contact</h2>
        <div class="row">

            <div class="medium-6 columns">

                <div class="row">

                    <div class="small-6 medium-12 columns">

                        <h4 class="location">Adresse</h4>

                        <p>12 rue Georges Docquois.<br>62200 Boulogne-sur-mer</p>



                        <h4 class="phone">Tel: 06.31.13.44.65</h4>

                    </div>

                    <div class="small-6 medium-12 columns">

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
            <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
              <h2 id="modalTitle">Awesome. I have it.</h2>
              <p class="lead">Your couch.  It is mine.</p>
              <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
              <a class="close-reveal-modal" aria-label="Close">&#215;</a>
            </div>
            <div class="medium-6 columns">

                <p class="text-center form-lead-in">Formulaire</p>

                <form class="inputs" action="pages/contact.php" name="sentMessage" id="contactForm" novalidate method="POST">

                    <div class="row">

                        <div class="large-6 columns">
                          <label for="username" data-error="wrong" data-success="right">
                        <input type="text" placeholder="Name" id="username" name="username" autocomplete=off value="" required="" required data-validation-required-message="Please enter your name." />
                      </label>
                        </div>

                        <div class="large-6 columns">
                          <label for="email" data-error="wrong" data-success="right">
                            <input type="email" placeholder="Email" id="mail" name="mail"  autocomplete=off value="" required="" required data-validation-required-message="Please enter your email."/>
                          </label>
                        </div>

                        <div class="large-12 columns">

                            <input type="text" placeholder="Telephone"  id="phone" name="phone" autocomplete=off value="" required="" required data-validation-required-message="Please enter your phone number." />

                        </div>

                        <div class="large-12 columns">

                              <textarea id="message" name="message" autocomplete=off required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none" ></textarea>

                            <button type="submit" class="button round" data-reveal-id="myModal">Envoyer</button>

                        </div>

                    </div>

                </form>

            </div>

        </div>

    </section>

    <div class="row">
        <div class="totop col-xs-12 col-md-12 col-sm-12">
            <a href="#" class="js-scrollTo" ><i class="btn btn-default fa fa-arrow-circle-up fa-2x js-scrollTo" type="submit" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="row">
        <div class=" footer large-12 medium-12 small-12 columns ">
            <p class="text-center">@Andrzejewski.François Legal - Credits</p>
        </div>
    </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
      <script src="https://cdn.shopify.com/s/files/1/1775/8583/t/1/assets/gallery.min.opt.js?11838297021386793225" crossorigin="anonymous"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/foundation.min.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/color/jquery.color-2.1.2.min.js" integrity="sha256-H28SdxWrZ387Ldn0qogCzFiUDDxfPiNIyJX7BECQkDE=" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/js/foundation.core.js"></script>
    <script src="https://cdn.jsdelivr.net/foundation/6.2.4/js/foundation.reveal.js"></script>
        <script type="text/javascript">
//         $('.button-collapse').sideNav({
//     menuWidth: 150, // Default is 240
//     edge: 'right', // Choose the horizontal origin
//     closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
//   }
// );
        // $(document).ready(function(){
        //   $("button").click(function(){
        //   $.ajax({url: "pages/contact.php", success: function(result){
        //       $("#myModal").html(result);
        //   }});
        //   });
        // });
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
        // N'oubliez pas d'intégrer "jquery.color-2.1.2.min.js"
        // pour l'animation des couleurs
    </script>
</body>

</html>
