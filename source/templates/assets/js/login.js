let spanClose = document.getElementById('close-modal')

let modalContainer = document.querySelector('.modal-container')
let contentLogin = document.querySelector('.content-login')
let contentRegister = document.querySelector('.content-register')

let btnSingUp = document.querySelector('.sing-up')
let btnLogIn = document.querySelector('.log-in')

let linkSingUp = document.getElementById('sing-up')
let linkLogIn = document.getElementById('log-in')

spanClose.addEventListener('click', () => {
    modalContainer.style.display = 'none'
})

const showModal = (logInDisplay = 'none', singUpDisplay = 'none') => {
    modalContainer.style.display = 'flex'
    contentLogin.style.display = logInDisplay
    contentRegister.style.display = singUpDisplay
}

btnSingUp.addEventListener('click', () => {
    showModal('none', 'block')
})

btnLogIn.addEventListener('click', () => {
    showModal('block', 'none')
})

linkSingUp.addEventListener('click', (el) => {
    el.preventDefault()
    showModal('none', 'block')
})

linkLogIn.addEventListener('click', (el) => {
    el.preventDefault()
    showModal('block', 'none')
})

