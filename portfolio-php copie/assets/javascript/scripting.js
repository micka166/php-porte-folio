function openJs(){
    document.getElementById("contacts").style.display="block"


}
function closeJs(){
    document.getElementById("contacts").style.display="none"


}


var texte = "MICKAEL                                                            ENFREIN";
var intervalID = setInterval(Animation ,100);
var position = 0;

function Animation(){
    position++
    document.getElementsByTagName("h1")[0].innerHTML =texte.substring(position, texte.length) +texte.substring(0 ,position);
    if(position ==texte.length){
        position = 0;
        
        
    }
    
}














 











