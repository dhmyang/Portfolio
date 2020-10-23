<?php $this->layout('default'); ?>

<?php $this->start('title'); echo "Home"; $this->stop(); ?>


<?php $this->start('stylesheets'); ?>
<link rel="stylesheet" href="<?php echo site_url('/css/home.css') ?>">
<?php $this->stop(); ?>


<?php $this->start('cont'); ?>

<div class="contact">
  <div class="contact__info">
    <h2 class="contact__title">Contact</h2>
    <div class="contact__box">
      <img class="contact__img" src="<?php echo site_url('/img/Locatie_icon.svg') ?>" alt="">
      <p class="contact__text">
        <b>Adress</b>
        <br>Contactweg 36,
        <br>1014 AN Amsterdam
      </p>
    </div>
    <div class="contact__box">
      <img class="contact__img" src="<?php echo site_url('/img/mail_icon.svg') ?>" alt="">
      <p class="contact__text">
        <b>Mail</b>
        <br>creativebape@gmail.com
      </p>
    </div>
    <div class="contact__box">
      <img class="contact__img" src="<?php echo site_url('/img/telefoon_icon.svg') ?>" alt="">
      <p class="contact__text">
        <b>Telefoon</b>
        <br>06 21 30 67 75
      </p>
    </div>
    <div class="contact__box">
      <img class="contact__img" src="<?php echo site_url('/img/Openingstijden_icon.svg') ?>" alt="">
      <p class="contact__text">
        <b>Openingstijden</b>
        <br>Ma t/m vrij
        <br>09:00 tot 17:00
      </p>
    </div>
  </div>
  <form class="contact__form" action="" method="post">
    <h2 class="contact__form__title">Contact opnemen? Vul onderstaand formulier in.</h2>
    <input class="contact__input" type="text" name="naam" id="" placeholder="Naam" required minlength="3" maxlength="30">
    <input class="contact__input" type="email" name="email" id="" placeholder="Email" required>
    <input class="contact__input" type="tel" name="tel" id="" placeholder="Telefoon nummer" required minlength="3" maxlength="30">
    <textarea class="contact__input__field" name="bericht" id="" cols="30" rows="10" placeholder="Bericht"></textarea>
    <input class="contact__submit" type="submit" value="Verzend">
  </form>
</div>

<iframe class="maps" width="600" height="450" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJLw1zSYjixUcR2-1A13XW_10&key=AIzaSyANMdfuXXj7py-5ySRH6l_x7rWTKZ8U948" allowfullscreen></iframe>

<?php $this->stop(); ?>