const form = document.querySelector('#form-register');

form.addEventListener('submit', (e) => {
    const elements = [
        document.querySelector('#name'),
        document.querySelector('#email'),
        document.querySelector('#senha'),
        document.querySelector('#repetir')
    ];
    const elementError = `
    <p class="wrong-field">
        O campo não pode ficar vazio.
    </p>`

    const errorMessages = document.querySelectorAll('.wrong-field');

    errorMessages.forEach(element => {
        element.remove();
    });

    let valid = true;
    elements.forEach(element => {
        element.className = '';

        if(element.value == ''){
            element.insertAdjacentHTML('afterend', elementError);
            element.className = 'errorInput';
            valid = false;
        }
    });

    if(!valid){
        e.preventDefault();
    }

    const password = elements[2];
    const passwordRepeat = elements[3];

    if (password.value !== passwordRepeat.value && passwordRepeat.value && password.value) {
        
        password.value = '';
        passwordRepeat.value = '';

        const elementError = `
        <p class="wrong-field">
            As senhas não coincidem.
        </p>`

        passwordRepeat.insertAdjacentHTML('afterend', elementError);
        passwordRepeat.className = 'errorInput';
        e.preventDefault();
    }
});