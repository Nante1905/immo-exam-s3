const handleClickAddBtn = (displayRes) => {
    let form = document.querySelector('#add-form')
    let xhr = new XMLHttpRequest()
    xhr.open('POST', './../php/addHab-back.php', true)
    let formdata = new FormData(form)
    console.log(formdata.get('type'))
    xhr.send(formdata)

    xhr.addEventListener('load', () => {
        if(xhr.status == 200) {
            let res = xhr.responseText
            console.log(res)
            let data = JSON.parse(res)

            if(data.addstatus === 'true') {
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