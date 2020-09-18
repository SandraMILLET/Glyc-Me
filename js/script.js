window.onload = function () {
    console.log('page load');


    /*********FETCH METHOD*********/
    /*récupère le DOM*/
    let fetchResult = document.getElementById("test");
    /*affiche dans l'HTML*/
    fetchResult.innerHTML = '<p>OUI ! Le DOM est récupéré ! Ca marche !</p>';
}

/**************affiche JSON dans CheckBox*********** */
let urlAPI = "js/aliments.json";

fetch(urlAPI)
    .then(function (response) {
        return response.json();
    })
    //affiche le résultat de tel élément du json
    .then(function (data) {
        appendData(data);
    })
    //si erreur alors affiche ça
    .catch(function (err) {
        console.log('error: ' + err);
    });
//boucle data
function appendData(data) {
    var mainContainer = document.getElementById("aliments");
    for (var i = 0; i < data.length; i++) {
        // creating checkbox element 
        var checkbox = document.createElement('input');
        // Assigning the attributes 
        // to created checkbox 
        checkbox.type = "checkbox";
        checkbox.name = "IG";
        checkbox.value = data[i].nom;
        checkbox.id = data[i].IG;
        checkbox.className = "IG";
        //console.log(checkbox.value);
        // creating label for checkbox 
        var label = document.createElement('label');
        // assigning attributes for  
        // the created label tag  
        label.htmlFor = "id";
        // appending the created text to  
        // the created label tag  
        var img = '<img class="ing" src="'+data[i].img+'"/>';
        console.log(img);
        var test = document.getElementById('aliments');
    test.appendChild(document.createElement('img')).src = data[i].img;

        label.appendChild(document.createTextNode(data[i].nom + ' ' + "IG : " + data[i].IG));
        // appending the checkbox 
        // and label to div 
        
        mainContainer.appendChild(checkbox);
        mainContainer.appendChild(label);
    }
}


/***********condition du checked true or false ************** */
/* function checked(){
   var x = document.getElementById("id").checked;
   document.getElementById("result").innerHTML = x;
 }
console.log();*/


/***********calcule le nombre de checked************** */
/*function calcul(){
        var inputElems = document.getElementsByTagName("input"),
        count = 0;
        for (var i=0; i<inputElems.length; i++) {
        if (inputElems[i].type === "checkbox" && inputElems[i].checked === true){
            count++;
            console.log(count);
            var result = document.getElementById("result");
            result.innerHTML = count;
        }
    }
}*/
ingredients = [] //le tableau//
/***********reporte la selection************** */
function total() {

    let checkboxes = document.getElementsByClassName("IG");
    // ici il faut mettre un élément commun à tout les chekboxe, afin de//
    // pouvoir agir sur chacun de ceux-ci, donc, une classe//
    for (i = 0; i < checkboxes.length; i++) { // boucle for //
        if (checkboxes[i].checked) { // si la boite est cochée //
            ingredients.push(parseInt(checkboxes[i].id)); // Ajouter l'élément à la liste // 
            let result = document.getElementById("result");
            var label = document.createElement('div');
            label.appendChild(document.createTextNode( checkboxes[i].value));
            result.appendChild(label);

        }
    }
}

function somme() {
    function ajouter(a, b) {
        return a + b;
    }
    const total = ingredients.reduce(ajouter, 0);
    console.log(total);
    let resul = document.getElementById("Total");
    resul.innerHTML = total;
}
