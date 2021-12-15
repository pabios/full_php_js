# j'ai eu soucis dans la realisation exact du cahier chages.

#### Alors quand j'envois a php du res.text() cela marche Mais quand je converti   mes donnees en json et que je les envoie . cela ne marche plus 

### Details 
* Au lieu de bricoller comme ca pour que ca marche 
```
if(res.ok){
            return res.text()
        }
```
 Je dois pouvoir faire ceci 
```
if(res.ok){
            return res.json()
        }
```
le probleme est meme si je converti bien mes données en Json en fesant un 
```
 body : JSON.stringify(mesDonneeForm)
```
cela me renvoit une  erreur  ``` syntaxe erreur ```

Alors j'ai crus que mon en entete header ne prenait pas le bon content-type j'ai essayer plein d'autre. Mais le probleme reste toutjours le meme.

* Pour recuperer des donnees en json  (de php en vers js )   

````
echo json_encode($response); 
// exemple dans le  afficheUser.php

````
ici on prepare php  pour que nos donnees renvoyer soit du json . 
##### Mais comment doit-je dire a PHP de se preparer a recevoir du json . (c'est cette question que je me pose actuellement) 

### Tu pourais me données des pistes la dessus  ?
# merci
