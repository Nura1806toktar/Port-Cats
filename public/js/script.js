document.addEventListener("DOMContentLoaded", function () {
    const slides = document.querySelectorAll('.swiper-slide');
    const dots = document.querySelectorAll('.dot');
    const prevButton = document.getElementById('prev-button');
    const nextButton = document.getElementById('next-button');
    let currentSlide = 0;

    // Барлық слайдтарды жасыру
    function hideAllSlides() {
        slides.forEach(slide => slide.classList.add('hidden'));
        dots.forEach(dot => dot.classList.remove('active')); // Барлық нүктелердің белсенділігін алып тастау
    }

    // Белсенді слайд пен нүктені көрсету
    function showSlide(index) {
        slides[index].classList.remove('hidden');
        dots[index].classList.add('active');
    }

    // "Келесі" кнопкасы
    nextButton.addEventListener('click', function () {
        hideAllSlides();
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    });

    // "Алдыңғы" кнопкасы
    prevButton.addEventListener('click', function () {
        hideAllSlides();
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(currentSlide);
    });

    // Нүктелерді басу арқылы ауыстыру
    dots.forEach(dot => {
        dot.addEventListener('click', function () {
            hideAllSlides();
            currentSlide = parseInt(this.getAttribute('data-slide')); // Нүктенің индексті алу
            showSlide(currentSlide);
        });
    });

    // Алғашқы слайдты көрсету
    showSlide(currentSlide);
});

// Барлық сілтемелерді таңдау
document.querySelectorAll('nav ul li a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault(); // Әдепкі әрекетті болдырмау
        const targetId = this.getAttribute('href').slice(1); // "href" мәнін алу
        const targetSection = document.getElementById(targetId);

        // Жұмсақ айналдыру
        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});



// Dropdown функционалдылығы
document.querySelector('.sort-toggle').addEventListener('click', function () {
    const dropdown = this.parentElement;
    dropdown.classList.toggle('open'); // Ашылу/жабылу
});

// Таңдау элементін басқан кезде мәнді алу
document.querySelectorAll('.sort-menu li').forEach(item => {
    item.addEventListener('click', function () {
        const value = this.getAttribute('data-option');
        document.querySelector('.sort-toggle').textContent = this.textContent; // Мәзір атауын жаңарту
        alert(`Сіз таңдадыңыз: ${value}`);
        // Dropdown жабу
        this.closest('.sort-dropdown').classList.remove('open');
    });
});









