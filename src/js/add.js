const handleClickAddBtn = (displayRes) => {
    let form = document.querySelector('#add-form')
    let xhr = new XMLHttpRequest()
    xhr.open("")
    xhr.send(form)

    xhr.addEventListener('load', () => {
        if(xhr.status == 200) {
            let res = xhr.responseText
            let data = JSON.parse(res)

            if(data.state === 'ok') {
                displayRes.innerHTML = 'Ajouter avec succes'
                displayRes.style.color = 'green'
            }
            else {
                displayRes.innerHTML = 'Erreur interne du serveur'
                displayRes.style.color = 'red'
            }
        }
    })
}

window.addEventListener('load', () => {
    let displayResponse = document.querySelector('.response')
    let btn = document.querySelector('.btn-sub')

    btn.addEventListener('click', (event) => {
        event.preventDefault()
        handleClickAddBtn(displayResponse)
    })
})