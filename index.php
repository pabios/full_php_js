<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="post__item">
    <h1 id="info"> Api Post php js</h1>
        <form action="" method="POST" id="leForm">
            <input type="text" name="nom" id="nom" placeholder="votre nom">
            <input type="password" name="mdp" id="mdp" placeholder="votre mot de passe">
            <input type="submit" value="envoyer" id="envoyer">
        </form>

    </div>
    <div class="get__item">
        <h1> Api get  php js</h1>
        <a href="#" id="apiGet">Voir les users</a>
        <h3> Au click  le  Tableau s'affiche</h3>
        <table border="1" class="resultat">
             <tr>
                 <th>id</th>
                 <th>nom</th>
                 <td>ville</th>
             </tr>
        </table>
    </div>
    </div>

<script src="/js/form.js"></script>
</body>
</html>