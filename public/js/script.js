const slider = document.querySelector(".slider");
const slides = document.querySelectorAll(".slide");

let index = 0;

function nextSlide() {
    index = (index + 1) % slides.length;
    updateSlider();
}

function prevSlide() {
    index = (index - 1 + slides.length) % slides.length;
    updateSlider();
}

function updateSlider() {
    slider.style.transform = `translateX(-${index * 33.33}%)`;
}

// Intervalo de tiempo para cambiar de slide automáticamente (opcional)
setInterval(nextSlide, 3000); // Cambia de slide cada 3 segundos