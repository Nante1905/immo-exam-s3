const generateHabCard = (data, root) => {
    const habcard = document.createElement('div')
    habcard.setAttribute('class', 'hab-card')

    const link = document.createElement('a')
    link.setAttribute('href', 'details.php?id=')
    habcard.appendChild(link)

    const divsary = document.createElement('div')
    divsary.setAttribute('class', 'sary')
    const sary = document.createElement('img')
    sary.setAttribute('src', './../../assets/img/'+data.img)
    divsary.appendChild(sary)
    link.appendChild(divsary)

    const divquartier = document.createElement('div')
    divquartier.setAttribute('class', 'quartier')
    divquartier.innerHTML = data.quartier
    link.appendChild(divquartier)

    const divtype = document.createElement('div')
    divtype.setAttribute('class', 'type')
    divtype.innerHTML = data.type
    link.appendChild(divtype)

    const divloyer = document.createElement('div')
    divloyer.setAttribute('class', 'loyer')
    divloyer.innerHTML = data.loyer
    link.appendChild(divloyer)

    root.appendChild(habcard)
}

const handleClick = (indice) => {
    const root = document.querySelector('.hab-list-container')
    root.replaceChildren('')
    tranos.map((trano) => {
        generateHabCard(trano, root)
    })   
}

const handleSearch = () => {
    let form = document.querySelector('#search-form')
    let xhr = new XMLHttpRequest()

    xhr.open()
    xhr.send(form)

    xhr.addEventListener('load', () => {
        let data = JSON.parse(xhr.responseText)
        const root = document.querySelector('.hab-list-container')
        for(let i=0; i<data.length; i++) {
            generateHabCard(data[i], root)
        }
    })
}

var tranos = [
    {
        "id": "1",
        "img": "trano.jpg",
        "quartier": "Andoharanofotsy",
        "type": "maison",
        "loyer": "2000"
    },
    {
        "id": "1",
        "img": "trano.jpg",
        "quartier": "Andoharanofotsy",
        "type": "maison",
        "loyer": "2000"
    },{
        "id": "1",
        "img": "trano.jpg",
        "quartier": "Andoharanofotsy",
        "type": "maison",
        "loyer": "2000"
    },{
        "id": "1",
        "img": "trano.jpg",
        "quartier": "Andoharanofotsy",
        "type": "maison",
        "loyer": "2000"
    },{
        "id": "1",
        "img": "trano.jpg",
        "quartier": "Andoharanofotsy",
        "type": "maison",
        "loyer": "2000"
    }
]

window.addEventListener('load', () => {
    const root = document.querySelector('.hab-list-container')
    tranos.map((trano) => {
        generateHabCard(trano, root)
    })

    const btns = document.querySelectorAll('.nav-item')
    for(let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => handleClick(i))
    }

    const searchBtn = document.querySelector('.search-sub')
    searchBtn.addEventListener('click', (event) => {
        event.preventDefault()
        handleSearch()
    })
})