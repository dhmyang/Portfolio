<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>
<!-- INTRO BACKGROUND VIDEO -->
<div class="WrapperVideoBG" id="home">
    <video id="VideoBG" autoplay muted loop>
        <source src="<?php echo site_url('/videos/promo.mp4') ?>" type="video/mp4">
    </video>

    <button id="muteButton"><span class="fas fa-volume-up"></span></button>

    <script src="<?php echo site_url('/js/videomute.js') ?>"></script>
</div>

<div style="background: white;" class="cta" id="cta">
  <h2 style="font-size: 30px; color: #AE9A64; padding-bottom: 60px; padding-top: 60px; width: 90%;">
  Wij zijn een ontwerp bureau dat zich bezig houdt met de volledige uitstraling van uw bedrijf!
  
  </h2>
</div>

<div class="workFeed" style="padding-top: 0px">
  <div>
    <h3>ONLINE DESIGN</h3>
    <img src="<?php echo site_url('/img/Cecile_Enzler_MV4A _code.png') ?>" alt="">
  </div>
  <div>
    <h3>DRUKWERK</h3>
    <img src="<?php echo site_url('/img/Drukkerij_Cecile_Enzler_MV4A.jpg') ?>" alt="">
  </div>
  <div>
    <h3>GRAVERINGEN</h3>
    <img src="<?php echo site_url('/img/Arjan_vBatenburg_graveren.jpg') ?>" alt="">
  </div>
  <div>
    <h3>FOTOGRAFIE</h3>
    <img src="<?php echo site_url('/img/Foto_Cecile_Enzler_MV4A.jpg') ?>" alt="">
  </div>
  <div>
    <h3>FOTO EDITING</h3>
    <img src="<?php echo site_url('/img/Cecile_enzler_fotoedit.jpg') ?>" alt="">
  </div>
  <div>
    <h3>DEVELOPMENT</h3>
    <img src="<?php echo site_url('/img/web.jpg') ?>" alt="">
  </div>
</div>

<div class="cta" id="cta">
    <h2 style="font-size: 30px; padding-top: 60px; padding-bottom: 60px;">Let's engrave a smile!<br>Wij helpen u graag bij het realiseren van al uw ideeën.</h2>
</div>

<div class="howWork">
  <h2>Hoe werken wij</h2>
  <div class="howWorkWrapper">
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/innovatief.svg') ?>" alt="">
      <h3>Innovatief</h3>
    </div>
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/persoonlijk.svg') ?>" alt="">
      <h3>Persoonlijk</h3>
     </div>
     <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/communicatief.svg') ?>" alt="">
      <h3>Communicerend</h3>
    </div>
    <div class="howWorkIcon">
      <img class="howWorkIcons" src="<?php echo site_url('/img/kwaliteit.svg') ?>" alt="">
      <h3>Kwaliteit</h3>
     </div>
  </div>
</div>

<?php $this->stop(); ?>