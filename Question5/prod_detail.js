function randomImgLarge(){
    document.getElementById('img-container1').innerHTML = '<img src="https://source.unsplash.com/random/500x500/?garment">';
}

document.addEventListener('DOMContentLoaded', function() {
    randomImgLarge();
});