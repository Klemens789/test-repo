const prevButton = document.getElementById('prevButton');
const nextButton = document.getElementById('nextButton');
const galeria = document.getElementById('galeria');
const images = galeria.getElementsByTagName('img');
let currentIndex = 0;

prevButton.addEventListener('click', showPreviousImage);
nextButton.addEventListener('click', showNextImage);

function showPreviousImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  showImage();
}

function showNextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  showImage();
}

function showImage() {
  for (let i = 0; i < images.length; i++) {
    images[i].style.display = 'none';
  }
  images[currentIndex].style.display = 'block';
}

showImage(); // Wyświetlenie pierwszego zdjęcia na początku