<!DOCTYPE html>
<html>
<head> <meta charset="utf-8" />
    <title>Un formulaire de connexion en AJAX</title></head>
 
<body>
    <div id="resultat">
        <!-- Nous allons afficher un retour en jQuery au visiteur -->
    </div>
         
        <h1>Un formulaire de connexion en AJAX</h1>
 
    <form>
        <p>
        Clé : <input type="text" id="cle" />
        ID : <input type="text" id="id" />
        <input type="submit" id="submit" value="Envoyer !" />
        </p>
    </form>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</body>
</html>
 
<script>
 
$(document).ready(function(){
 
    $("#submit").click(function(e){
        e.preventDefault();
 
        $.post(
            'connexion.php', // Un script PHP que l'on va créer juste après
            {
                username : $("#cle").val(),  // Nous récupérons la valeur de nos input que l'on fait passer à connexion.php
                password : $("#id").val()
            },
 
            function(data){
 
                if(data == 'Success'){
                     // Le membre est connecté. Ajoutons lui un message dans la page HTML.
 
                     $("#resultat").html("<p>Vous avez été connecté avec succès !</p>");
                }
                else{
                     // Le membre n'a pas été connecté. (data vaut ici "failed")
 
                     $("#resultat").html("<p>Erreur lors de la connexion...</p>");
                }
         
            },
            'text'
         );
    });
});
 
</script>