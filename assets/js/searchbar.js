$(document).ready(function(){
    $('#searchbar').keyup(function(){
        const cards = $('#searchDiv .actuArticle');
        // console.log(cards[1].innerText.toLowerCase());
        const search = $('#searchbar').val().toLowerCase();
        for (let i = 0; i < cards.length; i++) {
            const card = cards[i];
            const cardTitle = card.innerText.toLowerCase();
            if(cardTitle.includes(search)){
                card.style.display = "flex";
            }else{
                card.style.display = "none";
            }
        }

    })
})