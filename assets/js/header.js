// Récupérer le vw de la page
let vw = Math.max(document.documentElement.clientWidth || 0, window.innerWidth || 0)
if (vw <= 992) {
    let index = [100, 'HeroImage.png']   
}else{
    let index = [85, 'HeroImage.png']
}
let gallery = [50, 'GalleryImage.jpg']
let agenda = [50, 'AgendaImage.jpg']
let actu = [50, 'ActuImage.jpg']
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
    }else if (nom == 'actu'){
        document.querySelector('header').style.height = actu[0] + 'vh'
        document.querySelector('header').style.backgroundImage = 'url(../assets/img/header/' + actu[1] + ')'
    }
}