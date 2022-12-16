window.addEventListener("load", () => {
    const handleClickInscri = () => {
        let xhr = new XMLHttpRequest()
        xhr.open('post', './../php/inscri-back.php', true)

        let form = document.querySelector("#inscription")
        let formdata = new FormData(form)

        xhr.send(formdata)

        xhr.addEventListener('load', () => {
            let res = xhr.responseText
            let data = JSON.parse(res)

            if(data.inscri === 'yes') {
                window.location.href = './../../index.html'
            }
            else {
                const diverror = document.querySelector('.error')
                diverror.innerHTML = 'Erreur du serveur'
                diverror.style.color = 'red'
            }
        })
    }
    const btn = document.querySelector('.signin')
    btn.addEventListener('click', (event) => {
        event.preventDefault()
        handleClickInscri()
    })
})