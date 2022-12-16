const generateHabCard = (data, root) => {
    const habcard = document.createElement('div')
    habcard.setAttribute('class', 'hab-card')

    const link = document.createElement('a')
    link.setAttribute('href', 'details.php?id='+data.idhabitations)
    habcard.appendChild(link)

    const divsary = document.createElement('div')
    divsary.setAttribute('class', 'sary')
    const sary = document.createElement('img')
    sary.setAttribute('src', './../../assets/img/'+data.namefile)
    divsary.appendChild(sary)
    link.appendChild(divsary)

    const divquartier = document.createElement('div')
    divquartier.setAttribute('class', 'quartier')
    divquartier.innerHTML = data.quartier
    link.appendChild(divquartier)

    const divtype = document.createElement('div')
    divtype.setAttribute('class', 'type')
    divtype.innerHTML = data.nomtype
    link.appendChild(divtype)

    const divloyer = document.createElement('div')
    divloyer.setAttribute('class', 'loyer')
    divloyer.innerHTML = data.loyer+'€/jr'
    link.appendChild(divloyer)

    root.appendChild(habcard)
}

const handleClick = (indice) => {
    const root = document.querySelector('.hab-list-container')
    root.replaceChildren('')
    let xhr = new XMLHttpRequest()
    if(indice === 0) {
        xhr.open('get', './../php/selectAllHab.php', true)
    }
    else {
        xhr.open('get', './../php/selectAllHab.php?id='+indice, true)
    }
    xhr.send()

    xhr.addEventListener('load', () => {
        let res = xhr.responseText
        let data = JSON.parse(res)

        
        data.allHab.map((hab) => {
            generateHabCard(hab, root)
        })
    })
}

const handleSearch = () => {
    const root = document.querySelector('.hab-list-container')
    root.replaceChildren('')
    let form = document.querySelector('#search-form')
    let formdata = new FormData(form)
    let xhr = new XMLHttpRequest()

    xhr.open('post', './../php/recherche-descri.php', true)
    xhr.send(formdata)

    xhr.addEventListener('load', () => {
        let data = JSON.parse(xhr.responseText)
        console.log(data)
        for(let i=0; i<data.recherche.length; i++) {
            generateHabCard(data.recherche[i], root)
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
    let xhr = new XMLHttpRequest()
    xhr.open('get', './../php/selectAllHab.php', true)
    xhr.send()

    xhr.addEventListener('load', () => {
        let res = xhr.responseText
        let data = JSON.parse(res)

        
        data.allHab.map((hab) => {
            generateHabCard(hab, root)
        })
    })

    const btns = document.querySelectorAll('.filter')
    for(let i = 0; i < btns.length; i++) {
        btns[i].addEventListener('click', () => handleClick(i))
    }

    const searchBtn = document.querySelector('.search-sub')
    searchBtn.addEventListener('click', (event) => {
        event.preventDefault()
        handleSearch()
    })
})