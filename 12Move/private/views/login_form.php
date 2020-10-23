<?php $this->layout('website'); ?>

<h3 id="LoginText1">Al een account?</h3>
<h3 id="LoginText2">Login</h3>

<form action="<?php echo url ("login.handle")?>" method="POST" autocomplete="off">
    <label for="email">Email</label>
    <br>
    <input type="email" name="email" value="<?php echo input('email')?>" id=email>
    <?php if(isset($errors['email'])):?>
    <?php echo $errors['email']?>
    <?php endif;?>
    <br>
    <label for="wachtwoord" >Wachtwoord</label>
    <br>
    <input type="password" name="wachtwoord" id="wachtwoord" autocomplete="off">
    <?php if(isset($errors['wachtwoord'])):?>
    <?php echo $errors['wachtwoord']?>
    <?php endif;?>

    <br>
    <button type="submit">Login</button>
</form>