function randomImg() {
    // garment product images randomly from unsplash
    document.getElementById('img-container').innerHTML = '<img src="https://source.unsplash.com/random/300x300/?garment">';
    // document.getElementById('img-container').innerHTML = '<img src="https://source.unsplash.com/random/'+width+'x'+height+'">';
}


// on dom load

document.addEventListener('DOMContentLoaded', function() {
    randomImg();
});