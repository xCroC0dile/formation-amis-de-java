var mdp=document.getElementById("idmdp")
var span=document.getElementById("idspan")
var eye=document.getElementById("eye")
var eyeslash=document.getElementById("eyeslash")

span.addEventListener("click",function(){
    if (mdp.type=="password") {
        mdp.type="text"
        eye.style.display="none"
        eyeslash.style.display="inline"
    } else {
        mdp.type="password"
        eyeslash.style.display="none"
        eye.style.display="inline"
        
    }
})