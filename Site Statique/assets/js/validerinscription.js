var nom = document.getElementById("idnom")
var validenom = document.getElementById("valnom")
nom.addEventListener("focus", function () {
    // focus : quand il y a le curseur
    validenom.textContent = "Veuillez saisir votre nom"
    validenom.style.color = "green"

})
nom.addEventListener("blur", function () {
    // blur : quand il perd le curseur
    if (nom.value == "") {
        validenom.textContent = "champs Non obligatoire!!"
        validenom.style.color = "red"
    } else {
        validenom.textContent = ""
        nom.value = nom.value.toUpperCase()
    }
})

var prenom = document.getElementById("idprenom")
var valideprenom = document.getElementById("valprenom")
function focusedprenom() {
    valideprenom.textContent = "Veuillez saisir le prenom"
    valideprenom.style.color = "green"
}

prenom.addEventListener("focus", focusedprenom)
function blurredprenom() {
    if (prenom.value == "") {
        valideprenom.textContent = "le champs Prénom obligatoire!"
        valideprenom.style.color = "red"
    } else {
        valideprenom.textContent=""
        prenom.value=prenom.value.substring(0,1).toUpperCase()
        +prenom.value.substring(1).toLowerCase()


    }
}
prenom.addEventListener("blur",blurredprenom)



var mdp=document.getElementById("idmdp")
var validemdp=document.getElementById("valmdp")
mdp.addEventListener("input",function(){
if (mdp.value.length<4) {
    validemdp.textContent="faible"
    validemdp.style.color="red"
} else if(mdp.value.length>=4 && mdp.value.length<8) {
    validemdp.textContent="moyen"
    validemdp.style.color="orange"
}else{
     validemdp.textContent="fort"
    validemdp.style.color="green"
}
})

var email=document.getElementById("idemail")
var validermail=document.getElementById("valmail")
email.addEventListener("input",function(){
    if (email.value.indexOf("@")!=-1) {
        validermail.textContent="E-mail Valide"
        validermail.style.color="green"
    } else {
        validermail.textContent="E-mail non Valide"
        validermail.style.color="red"
    }
})