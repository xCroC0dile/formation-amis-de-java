 var mdp=document.getElementById("idmdp")
 var spn=document.getElementById("idspan")
 var eye=document.getElementById("ideye")
 var eyeslash=document.getElementById("eyeslash")
 spn.addEventListener("click",function () {
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