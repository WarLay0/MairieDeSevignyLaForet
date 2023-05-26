let index = [100, 'HeroImage.png']
let gallery = [50, 'GalleryImage.jpg']
let agenda = [50, 'AgendaImage.jpg']
function pageName(nom){
    if (nom == 'index'){
        document.querySelector('header').style.height = index[0] + 'vh'
        document.querySelector('header').style.backgroundImage = 'url(../assets/img/header/' + index[1] + ')'
    } else if (nom == 'gallery'){
        document.querySelector('header').style.height = gallery[0] + 'vh'
        document.querySelector('header').style.backgroundImage = 'url(../assets/img/header/' + gallery[1] + ')'
    }else if (nom == 'agenda'){
        document.querySelector('header').style.height = agenda[0] + 'vh'
        document.querySelector('header').style.backgroundImage = 'url(../assets/img/header/' + agenda[1] + ')'
    }
}