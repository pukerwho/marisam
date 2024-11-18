const slider = document.getElementById('slider');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentSlide = 0;
const totalSlides = 2;

function updateSlider() {
  slider.style.transform = `translateX(-${currentSlide * 100}%)`;
}

prevBtn.addEventListener('click', () => {
  currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
  updateSlider();
});

nextBtn.addEventListener('click', () => {
  currentSlide = (currentSlide + 1) % totalSlides;
  updateSlider();
});