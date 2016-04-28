<?php
/**
 * Created by PhpStorm.
 * User: Anthony
 * Date: 28-04-16
 * Time: 16:26
 */
?>
<form action="index.php" method="post">
    <div>
        <label for="pseudo">Pseudo</label>
        <input type="text" id="pseudo" name="pseudo">
    </div>
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email">
    </div>
    <div>
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="passwword">
    </div>
    <button type="submit">Envoyez</button>
    <div>
        <input type="hidden" value="a" name="postLogin">
        <input type="hidden" value="r" name="postRegister">
    </div>
</form>