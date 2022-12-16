window.addEventListener('load', () => {
    const handleClickLogin = () => {
        let xhr = new XMLHttpRequest()
        xhr.open('post', './src/php/login.php', true)

        let form = document.querySelector('#login')
        let formdata = new FormData(form)

        xhr.send(formdata)

        xhr.addEventListener('load', () => {
            let res = xhr.responseText
            let data = JSON.parse(res)

            if(data.logres === 'logged') {
                window.location.href = './src/pages/habitations.html'
            }
            else {
                const diverror = document.querySelector('.error')
                diverror.innerHTML = 'Email ou mdp invalide'
                // diverror.style.color = 'red'
                console.log('tsy tafa log')
            }
        })
    }

    const btn = document.querySelector('.login')

    btn.addEventListener('click', (event) => {
        event.preventDefault()
        handleClickLogin()
    })

})