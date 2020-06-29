<!DOCTYPE html> 
<html>
    <head>
        <title> Contacts </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./vitrine.css">
    <body>
            <?php
            include "header.php"
            ?>

        <main>
            <h2> Contacts</h2>

            <form> 
                <section> <label for= "fname"> Nom Prénom </label>
                <input type= "text" id="fname"> </section> 
                <section> <label for= "email"> E-mail </label>
                <input type="text" id="email"> </section> 
                <section> <label for= "message"> Message </label>
                <input type="text" id="message"> </section>
                <section> <input type="submit" value="Envoyer"> </section>
            </form>
        </main>

        <?php
            include "footer.php"
        ?>
    </body>
</html>