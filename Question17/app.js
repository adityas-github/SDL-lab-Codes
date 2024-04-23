document.addEventListener("DOMContentLoaded", function () {
  const gallery = document.getElementById("imageGallery");

  // Function to fetch random cat images
  function fetchCatImages() {
    const baseURL = "https://source.unsplash.com/random/300x300/?cat";
    const numImages = 9; // Number of images to fetch

    for (let i = 1; i <= numImages; i++) {
      const img = document.createElement("img");
      img.src = `${baseURL}&${i}`;
      img.classList.add("img-fluid", "rounded");
      gallery.appendChild(img);
    }
  }

  fetchCatImages();
});

// document.querySelectorAll('.card').forEach(card => {
//     card.addEventListener('click', function() {
//        const imgSrc = this.querySelector('img').src;
//        document.querySelector('#imageModal img').src = imgSrc;
//        const modal = new bootstrap.Modal(document.getElementById('imageModal'));
//        modal.show();
//     });
// });
   