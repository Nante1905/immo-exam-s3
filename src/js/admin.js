const generateListItem = (id, type, chambres, loyer, quartier, descri) => {
    const parent = document.createElement('div')
    parent.className = 'list-item'

    const divtype = document.createElement('div')
    divtype.innerHTML = type
    divtype.className = 'type'
    parent.appendChild(divtype)

    const divchambres = document.createElement('div')
    divchambres.innerHTML = chambres
    divchambres.className = 'chambres'
    parent.appendChild(divchambres)

    const divloyer = document.createElement('div')
    divloyer.innerHTML = loyer
    divloyer.className = 'loyer'
    parent.appendChild(divloyer)

    const divquartier = document.createElement('div')
    divquartier.innerHTML = quartier
    divquartier.className = 'quartier'
    parent.appendChild(divquartier)

    const divdescri = document.createElement('div')
    divdescri.innerHTML = descri
    divdescri.className = 'descri'
    parent.appendChild(divdescri)

    const btnModif = document.createElement('button')
    btnModif.textContent = 'Modifier'
    const divupdate = document.createElement('div')
    divupdate.className = 'update'
    const link = document.createElement('a')
    link.setAttribute('href', 'modif.php?id='+id)
    divupdate.appendChild(link)
    link.appendChild(btnModif)
    parent.appendChild(divupdate)

    const btnSupp = document.createElement('button')
    btnModif.textContent = 'supprimer'
    const divsupp = document.createElement('div')
    divsupp.className = 'delete'
    divsupp.appendChild(btnSupp)
    parent.appendChild(divsupp)

    return parent
}

const displayAllHab = () => {
    let xhr = new XMLHttpRequest()

    xhr.open('GET', '', true)

    xhr.send()

    let root = document.querySelector('.list-component')

    xhr.addEventListener('load', () => {
        let res = xhr.responseText
        let data = JSON.parse(res)
        for(let i = 0; i<data.length; i++) {
            let item = generateListItem(data.id, data.type, data.chambres, data.loyer, data.quartier, data.descri)
            root.appendChild(item)
        }
    })
}

window.addEventListener('load', () => {
    displayAllHab()
})