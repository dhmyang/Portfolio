<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->

<div class="about" style="margin-top: 70px;">
  <img src="<?php echo site_url('/img/Groepsfoto.jpg') ?>" alt="foto">
  <div class="intro-txt">
        <h2>Over ons</h2>
        <p>
        In 2020 is Creative Bape gestart door vier studenten van het Mediacollege in Amsterdam.
        Het is een ontwerpers bureau wat vier man personeel bevat.
        Een team bestaande uit twee developers en twee vormgevers.

        <br><br>

        Lees verder voor meer informatie!
        </p>
  </div>
</div>

<div class="cta" id="cta" style="padding-bottom: 30px; margin-bottom: 100px;">
    <h2>Contact</h2>
    <p>Wilt u een innovatieve en persoonlijke samenwerking? <br>Neem dan gauw contact met ons op!</p>
</div>

<div class="wij">
    <div class="wij__persoon">
        <img class="wij__img" src="<?php echo site_url('/img/Cecile_Enzler_MV4A-239kb.jpg') ?>" alt="">
        <h2 class="wij__naam">Cecile Enzer</h2>
        <p class="wij__tekst">
            Goedendag, <br>
            mijn naam is Cecile en ik ben een van de vormgevers bij Creative Bape. Ik ben gespecialiseerd in het webdesign en maak
            vaak magazine's en catalogus. Ook ben ik bezig met de branding van bedrijven en zorg ik voor de styleboarden.

            <br><br>
            <b>Let's engrave a smile on both of our faces?</b>
        </p>
    </div>
    <div class="wij__persoon">
        <img class="wij__img" src="<?php echo site_url('/img/Mike_Yang.jpg') ?>" alt="">
        <h2 class="wij__naam">Mike Yang</h2>
        <p class="wij__tekst">
            Goedendag, <br>
            Nog geen tekst beschikbaar.
        </p>
    </div>
    <div class="wij__persoon">
        <img class="wij__img" src="<?php echo site_url('/img/Arjan_van_Batenburg.jpg') ?>" alt="">
        <h2 class="wij__naam">Arjan van Batenburg</h2>
        <p class="wij__tekst">
            Goedendag, <br>
            Nog geen tekst beschikbaar.
        </p>
    </div>
    <div class="wij__persoon">
        <img class="wij__img" src="<?php echo site_url('/img/Justin_Rodrigues_Montoya.jpg') ?>" alt="">
        <h2 class="wij__naam">Justin Rodriguez Montoya</h2>
        <p class="wij__tekst">
         Hallo! <br>
         Mijn naam is Justin en ik ben een van de media developers bij Creative Bape. 
         Ik specialiseer mij in de back-end kant van een website wat inhoud dat ik een van de koppies achter uw draaiende site ben!
        </p>
    </div>
</div>

<div style="display:block; width: 100%; height: 100px;"></div>

<script type="text/javascript" src="<?php echo site_url('/slick/slick.min.js'); ?>"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.wij').slick({
    infinite: true,
    slidesToShow: 1,
    centerMode: true,
    centerPadding: '0px',
    arrows: false,
    dots: true,
    });
});
</script>


<?php $this->stop(); ?>