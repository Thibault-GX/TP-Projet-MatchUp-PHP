<form id="userRegistration" class="" action="index.php" method="post">
  <div class="form-group row">
      <label for="lastName" class="col-form-label col-2">Nom :</label>
      <input id="lastName" name="lastName" type="text" value="<?= $lastName ?>" class="form-control col-8" placeholder="TOTO">
      <span class="text-danger"><?= ($errors['lastName']) ?? '' ?></span>
  </div>
  <div class="form-group row">
      <label for="firstName" class="col-form-label col-2">Prénom :</label>
      <input id="firstName" name="firstName" type="text" value="<?= $firstName ?>" class="form-control col-8" placeholder="Tata">
      <span class="text-danger"><?= ($errors['firstName']) ?? '' ?></span>
  </div>
  <div class="form-group row">
      <label for="age" class="col-form-label col-2">Âge :</label>
      <input id="age" name="age" type="text" value="<?= $age ?>" class="form-control col-8" placeholder="20">
      <span class="text-danger"><?= ($errors['age']) ?? '' ?></span>
  </div>
  <div class="form-group row">
    <label for="userName" class="col-form-label col-2">Pseudo :</label>
    <input id="userName" name="userName" type="text" value="<?= $userName ?>" class="form-control col-8" placeholder="Pseudo souhaité">
    <span class="text-danger"><?= ($errors['userName']) ?? '' ?></span>
  </div>
  <div class="form-group row">
    <label for="userPassword" class="col-form-label col-2">Mot de passe :</label>
    <input id="userPassword" name="userPassword" type="password" value="<?= $userPassword ?>" class="form-control col-8" placeholder="Mot de passe">
    <span class="text-danger"><?= ($errors['userPassword']) ?? '' ?></span>
  </div>
  <div class="form-group row">
    <label for="passwordConfirm" class="col-form-label col-2">Confirmation mot de passe :</label>
    <input id="passwordConfirm" name="passwordConfirm" type="password" value="<?= $passwordConfirm ?>" class="form-control col-8" placeholder="Confirmez votre mot de passe">
    <span class="text-danger"><?= ($errors['passwordConfirm']) ?? '' ?></span>
  </div>
</form>

<form id="userLogin" class="" action="" method="post">

</form>
