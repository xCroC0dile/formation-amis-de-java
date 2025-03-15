var nom = document.getElementById("idnom")
var validnom = document.getElementById("valnom")
nom.addEventListener("focus", function () {  // pour programmer un click ou le focus
    validnom.textContent = "veuillez saisir votre nom"
    validnom.style.color = "green"
})
nom.addEventListener("blur", function () {  // blur=pour rendre le focus lorsque on le perds
    if (nom.value == "") {
        validnom.textContent = "champs nom obligatoir"
        validnom.style.color = "red"

    } else {
        validnom.textContent = ""
        nom.value = nom.value.toUpperCase()
    }
})
var prenom = document.getElementById("idprenom")
var validprenom = document.getElementById("valprenom")
function focusprenom() {
    validprenom.textContent = "veuillez saisir le prenom"
    validprenom.style.color = "green"
}
prenom.addEventListener("focus", focusprenom)
function blurredprenom() {
    if (prenom.value == "") {
        validprenom.textContent = "Le champs prenom est obligatoire"
        validprenom.style.color = "red"
    } else {
        validprenom.textContent = ""
        prenom.value=prenom.value.substring(0,1).toUpperCase()    // substring=traite les sous chaines 
        +prenom.value.substring(1).toLowerCase()

    }
}
prenom.addEventListener("blur",  blurredprenom)

var mdp=document.getElementById("idmdp")
var validemdp=document.getElementById("valmdp")
mdp.addEventListener("input",function(){
    if (mdp.value.length<4) {
        validemdp.textContent="Faible"
        validemdp.style.color="red"
        mdp.style.color="red"
    } else if(mdp.value.length>=4 && mdp.value.length<8) {
        validemdp.textContent="Moyen"
        validemdp.style.color="orange"
        mdp.style.color="orange"
    }else{
        validemdp.textContent="Fort"
        validemdp.style.color="green"
        mdp.style.color="green"
    }
})
var email= document.getElementById("idemail")
var valideemail=document.getElementById("valemail")
email.addEventListener("input",function(){
    if (email.value.indexOf("@")!=-1) {
        valideemail.textContent="e-mail valide"
    } else {
        valideemail.textContent="e-mail non valide" 
    }
})