$(document).ready(function(){


$.post (
    "functions.php", // l'endroit ou on envoie les données
     { path : "/"}, // l'objet que nous allons envoyer (sous la forme d'un tableau assiocatif
     function (data){ // on recupère la valeur dans data
    $('#result').html(data); //je remplace le contenue de ma page principal par 
});

$(".folder").click(function(){
    $.post (
        "functions.php",
        {folder : "/"},
        (function (data){
            $('#result').html(data);

        }),

    )
})




})