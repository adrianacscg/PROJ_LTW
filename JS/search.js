'use strict'

let dataAtual= new Date()

let dd = String(dataAtual.getDate()).padStart(2, '0')
let mm = String(dataAtual.getMonth() + 1).padStart(2, '0') 
let yyyy = dataAtual.getFullYear()

let dataAtualS = yyyy + '-' + mm + '-' + dd

let dateI = document.getElementById('datIni')
let dateF = document.getElementById('datFim')

dateI.value= dataAtualS

dateI.addEventListener('change', dateChangeI)
dateF.addEventListener('change', dateChangeF)

function dateChangeI(event){

    let DateToChange= new Date(event.target.value)
    let DateFinal= new Date(dateF.value)

    if(DateToChange < dataAtual || DateToChange > DateFinal){
        event.target.value=dataAtualS
        //nao será com alert
        alert("Hey dumbass, introduce a fucking valid date")
    }
}

function dateChangeF(event){
    let DateToChange= new Date(event.target.value)
    let DateInicial= new Date(dateI.value)

    if(DateInicial > DateToChange){
        event.target.value=dateI
        //nao será com alert
        alert("Hey dumbshit, introduce a fucking valid date") 
    }
}

//Button submit

let submit=document.getElementById('Sform')


submit.addEventListener('submit',LetsSubmit)

function LetsSubmit(event){

    
    if( (dateI.value!="" && dateF.value=="") || (dateI.value=="" && dateF.value!="")){
        event.preventDefault()
        alert("Get your fucking shit together and input some fcking dates")
    }
}


