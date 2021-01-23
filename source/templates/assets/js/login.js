$(document).ready(function() {

    const formRegister = $('#form-register')
    const formLogin = $('#form-login')

    formRegister.on('submit', (event) => {
        event.preventDefault()
        ajax(
            formRegister.serializeArray(), 
            formRegister.attr('action')
        )
    })
    
    formLogin.on('submit', (event) => {
        event.preventDefault()
        ajax(
            formLogin.serializeArray(), 
            formLogin.attr('action')
        )
    })

    const ajax = (data, url) => {
        $.ajax({
            method: 'POST',
            url: url,
            data: data,
        })
        .done((response) => {
            console.log(response)
        })
        .fail((error) => {
            console.log(`Erro: ${error}`)
        })
    }
})