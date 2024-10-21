let indexSlide = 0;

function showSlide(index) {
    const carrossel = document.querySelector('.carrossel');
    const totalSlide = document.querySelectorAll('.carrossel img').length;
    const dots = document.querySelectorAll('.dots li');
    const dotActive = document.querySelector('.dots li.active');

    if (index >= totalSlide) {
        indexSlide = 0;
    } else if (index < 0) {
        indexSlide = totalSlide - 1;
    } else {
        indexSlide = index;
    }

    const offset = -indexSlide * 100;
    carrossel.style.transform = `translateX(${offset}%)`;

    dotActive.classList.remove('active');
    dots[indexSlide].classList.add('active');

    dots.forEach((li, key) => {
        li.addEventListener('click', function () {
            indexSlide = key;
            showSlide(indexSlide);
        });
    });
}

function prevSlide() {
    indexSlide = indexSlide - 1;
    showSlide(indexSlide);
}

function nextSlide() {
    indexSlide = indexSlide + 1;
    showSlide(indexSlide);
}

setInterval(() => {
    nextSlide();
}, 10000);
