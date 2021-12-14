let info = document.querySelector('#info');
let envoyer = document.querySelector('#envoyer')
let leForm = document.querySelector('#leForm')
let leNom = document.querySelector('#nom')
let mdp = document.querySelector('#mdp')

const api = '/back/form.php';

 

 


/**
 *  la fonction callback envoyer a l'evenement submit
 */
baldeApi = (e) => {
    e.preventDefault();
    let dataForm = new FormData(leForm);
     
    fetch(api,{
        method: "POST",
        body:  dataForm
    })
    .then(res => {
        if(res.ok){
            return res.text()
        }
    })
    .then(data =>{
        console.log(data)
    })
    .catch(e => {
        console.log('erreur de lecture'+e);
    })
}

leForm.addEventListener('submit',baldeApi,false)


/**
 * fetch api 
 * method -> get 
 * return json
 */

let lien = document.querySelector('#apiGet')

ismaApi = (e) => {
    e.preventDefault();
     let apiGet = '/back/afficheUser.php'

    fetch(apiGet)
    .then(res => {
        if(res.ok){
            return res.json()
        }
    })
    .then(data =>{
        console.log(data)
    })
    .catch(e => {
        console.log('erreur de lecture'+e);
    })
}


 lien.addEventListener('click',ismaApi,false)
