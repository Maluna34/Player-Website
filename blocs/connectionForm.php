<section class="connection">
    <h2 class="small">Connexion</h2>

    <form method="post" action="memberConnection.php">
        <table>
            <tr>
                <td><label for="login">Pseudo :</label></td>
                <td><input type="text" name="login" id="login" value="<?php if(isset($_POST['login'])){echo $_POST['login'];} ?>" maxlength="50" autofocus required /></td>
            </tr>
            <tr>
                <td><label for="password">Mot de passe :</label></td>
                <td><input type="password" name="password" id="password" required /></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Connexion" /></td>
            </tr>
        </table>
    </form>
</section>
