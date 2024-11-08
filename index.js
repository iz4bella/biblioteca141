// Carrossel 
let currentSlide = 0;
const categoryItems = document.querySelectorAll('.category-item');
const totalCategories = categoryItems.length;

function moveSlide(step) {
    currentSlide += step;
    if (currentSlide >= totalCategories) {
        currentSlide = 0;
    } else if (currentSlide < 0) {
        currentSlide = totalCategories - 1;
    }
    updateCarousel();
}

function updateCarousel() {
    const carousel = document.querySelector('.carousel');
    const offset = -currentSlide * (categoryItems[0].offsetWidth + 30); 
    carousel.style.transform = `translateX(${offset}px)`;
}


let currentSlideBooks = 0;
const bookItems = document.querySelectorAll('.book-item');
const totalBooks = bookItems.length;

function moveSlideBooks(step) {
    currentSlideBooks += step;
    if (currentSlideBooks >= totalBooks) {
        currentSlideBooks = 0;
    } else if (currentSlideBooks < 0) {
        currentSlideBooks = totalBooks - 1;
    }
    updateCarouselBooks();
}

//Banner 

function updateCarouselBooks() {
    const carousel = document.querySelector('.book-section .carousel');
    const offset = -currentSlideBooks * (bookItems[0].offsetWidth + 30); 
    carousel.style.transform = `translateX(${offset}px)`;
}

let currentIndex = 0;
const items = document.querySelectorAll('.carousel-item');
const totalItems = items.length;

const prevButton = document.querySelector('.prev');
const nextButton = document.querySelector('.next');

function updateCarousel() {
    const offset = -currentIndex * 100; // Cada imagem tem 100% da largura
    document.querySelector('.carousel').style.transform = `translateX(${offset}%)`;
}

// Navegar para a imagem anterior
prevButton.addEventListener('click', () => {
    currentIndex = (currentIndex === 0) ? totalItems - 1 : currentIndex - 1;
    updateCarousel();
});

// Navegar para a imagem seguinte
nextButton.addEventListener('click', () => {
    currentIndex = (currentIndex === totalItems - 1) ? 0 : currentIndex + 1;
    updateCarousel();
});
