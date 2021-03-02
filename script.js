$(document).ready(function(){


$.post ("functions.php", { path : "/"},function (data){
    $(".result").html(data);
});

$(".folder").click(function(){
    $.post (
        "functions.php",
        {folder : "/"},
        (function (data){
            $(".result").html(data);

        }),

    )
})




})