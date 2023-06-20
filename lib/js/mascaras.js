//validação de campos

const form = document.getElementById('formLogin');
const campos = document.querySelectorAll('.required');
const spans = document.querySelectorAll('.span-required');

function setError(index){
    campos[index].style.border = '3px solid #B2292C';
    spans[index].style.display = 'block';
}

function removeError(index) {
    campos[index].style.border = '';
    spans[index].style.display = 'none';
}

function nameValidate() {
    if(campos[0].value.length < 3) {
        setError(0);
    }
    else {
        removeError(0);
    }
}

function passValidate() {
    if(campos[1].value.length < 8) {
        setError(1);
    }
    else {
        removeError(1);
    }
}

//mascaras


function mascaraCPF(){
    const input = document.getElementById("CPF")
    
    input.addEventListener('keypress', () => {
        let inputlength = input.value.length
        
        if(inputlength === 3 || inputlength === 7){
            input.value += '.';
        }
        else if (inputlength === 11) {
            input.value += '-';
        }
    })
}

function mascaraDate () {
    const input = document.getElementById("DateNasc")

    input.addEventListener('keypress', () => {
        let inputlength = input.value.length

        if(inputlength === 2 || inputlength === 5) {
            input.value += '/';
        }
    })
}

function mascaraCEP () {
    const input = document.getElementById("cep")

    input.addEventListener('keypress', () => {
        let inputlength = input.value.length

        if(inputlength === 2){
            input.value += '.';
        }
        if(inputlength === 6) {
            input.value += '-';
        }
    })
}

function macaraTelefone() {
    const input = document.getElementById("tell")

    input.addEventListener('keypress', () => {
        let inputlength = input.value.length

        if(inputlength === 2 || inputlength === 4){
            input.value += ' ';
        }
        if(inputlength === 9){
            input.value += '-';
        }
    })
}

//(19)99718-8369


