<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->

<div class="about" style="margin-top: 70px;">
  <div class="intro-txt">
        <h2>Diensten</h2>
        <p>
        Wij zijn een ontwerpers bureau dat bedrijven helpt bij het ontwikkelen
        van hun uitstraling en andere media uitingen. Ook zijn wij gespecialiseerd
        op het online bedied en kunnen wij u ondersteunen met gepersonaliseerde materialen.

        <br><br>

        Kijk verder voor meer informatie!
        </p>
  </div>
  <img src="<?php echo site_url('/img/Cecile_enzler_MV4A_drukwerk.jpg') ?>" alt="foto">
</div>

<div class="cta" id="cta">
    <h2 style="font-size: 30px; padding-top: 60px; padding-bottom: 60px; margin-bottom: 4em;">Er staat een gespecialiseerd team voor u klaar! <br> Laten we vandaag nog beginnen aan uw eigen website!</h2>
</div>

<div class="dienst">
    <h2 class="dienst__title">ONLINE DESIGN</h2>
    <div class="diensten">
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Arjan_vBatenburg_MV4A_Stadalsspel.png') ?>" alt="">
            <h2 class="dienst__naam">Berlina</h2>
            <p class="dienst__tekst">
            Berlina is een spel gemaakt voor jongeren en studenten om op een leuke manier Berlijn te ontdekken, Je kan doormiddel van progressie en currentie nieuwe outfits kopen voor je berlinian
            <br><br>
            - Arjan van Batenburg
        </p>
        </div>
    </div>

    <h2 class="dienst__title">DRUKWERK</h2>
    <div class="diensten">
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Arjan_vBatenburg_kiekie.jpg') ?>" alt="">
            <h2 class="dienst__naam">Emotion through music | Kiekie krant</h2>
            <p class="dienst__tekst">
            Bij het ontwerp van de cover voor Emotio Tgrough Music heb ik het opgebouwd zoals ze dat ook bij de echte kiekie krant doen. Ze hebben het logo precies zo groot op de voorkant staan met het nummer eronder gevolgd door `FotoLabKiekie` en daar het seizoen met het jaartal erachter.
            <br><br>
            - Arjan van Batenburg
        </p>
        </div>
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Cecile_enzler_ONV-verslag.png') ?>" alt="">
            <h2 class="dienst__naam">Verslag ondernemend gedrag | Examenonderdeel</h2>
            <p class="dienst__tekst">
            Een van de opdrachten tijdens mijn tweede stage was om een Ondernemensvaardigheid verslag te ontwikkelen.
            <br><br>
            - Cecile Enzler
        </p>
        </div>
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Cecile_Enzler_Urban.png') ?>" alt="">
            <h2 class="dienst__naam">Urbancarrier | QWIC</h2>
            <p class="dienst__tekst">
            Tijdens mijn stage heb ik een handleiding mogen ontwikkelen voor een montage en demontage van een drager.
            <br><br>
            - Cecile Enzler
        </p>
        </div>
    </div>

    <h2 class="dienst__title">GRAVERINGEN</h2>
    <div class="diensten">
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Arjan_vBatenburg_popart.jpg') ?>" alt="">
            <h2 class="dienst__naam">Popart | Hout</h2>
            <p class="dienst__tekst">
            Ik heb tijdens mijn stage bij Undercover lab een heleboel experimenten mogen doen waaronder deze schoonheid graveren.
            <br><br>
            - Arjan van Batenburg
        </p>
        </div>
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Cecile_Enzler_BETTY  kopie.jpg') ?>" alt="">
            <h2 class="dienst__naam">Handdoeken | Betty</h2>
            <p class="dienst__tekst">
            Dit was een opdracht van mijzelf die ik heb laten uitwerken door Marleen's Atelier. Betty is mijn oldtimer uit 1970, donkerblauwe kleur, rood imitatieleer interieur. bij de warme dagen zweet ik mij de auto uit en vandaar dat ik persoonlijke handdoeken heb laten realiseren.
            <br><br>
            - Cecile Enzler
        </p>
        </div>
    </div>

    <h2 class="dienst__title">FOTOGRAFIE</h2>
    <div class="diensten">
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Arjan_vBatenburg_spotyfy.png') ?>" alt="">
            <h2 class="dienst__naam">Editing | Spotify cover</h2>
            <p class="dienst__tekst">
            Als oefening heb ik mijn spotify cover ontworpen.
            <br><br>
            - Arjan van Batenburg
        </p>
        </div>
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/Cecile_enzler_fotoedit.jpg') ?>" alt="">
            <h2 class="dienst__naam">Editing | Photoshop explosie</h2>
            <p class="dienst__tekst">
            Als oefening heb ik mijzelf gefotoshopt in een explosie.
            <br><br>
            - Cecile Enzler
        </p>
        </div>
    </div>

    <h2 class="dienst__title">DEVELOPMENT</h2>
    <div class="diensten">
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/mike_12move.jpg') ?>" alt="">
            <h2 class="dienst__naam">12Move</h2>
            <p class="dienst__tekst">
            Want To Move! Het is een site gemaakt om lekker thuis te trainen zonder gym-equipment! je kan een account aanmaken en daily challenges doen!
            <br><br>
            - Mike Yang
        </p>
        </div>
        <div>
            <img class="dienst__img" src="<?php echo site_url('/img/JustinMontoya_portfolio.png') ?>" alt="">
            <h2 class="dienst__naam">Portfolio Layout</h2>
            <p class="dienst__tekst">
            Ik heb alvast een lekker lopende layout ontwikkeld om straks al mijn schoolwerk te kunnen verzamelen.
            <br><br>
            - Justin Rodriguez Montoya
        </p>
        </div>
    </div>

    <script type="text/javascript" src="<?php echo site_url('/slick/slick.min.js'); ?>"></script>

    <script>
        $(document).ready(function(){
            $('.diensten').slick({
                infinite: true,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '0px',
                arrows: false,
                dots: true,
            });
        });
    </script>
</div>

<?php $this->stop(); ?>