$.ajax({
    url: "script.php",
    type: "POST",
    data: "campo1=dado1&campo2=dado2&campo3=dado3",
    dataType: "html"

}).done(function(resposta) {
    console.log(resposta);

}).fail(function(jqXHR, textStatus ) {
    console.log("Request failed: " + textStatus);

}).always(function() {
    console.log("completou");
    
});