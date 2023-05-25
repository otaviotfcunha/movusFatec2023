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
    const input = document.getElementById("CEP")

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


