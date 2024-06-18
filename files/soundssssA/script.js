const slides = document.querySelectorAll('.slides');
    const dots = document.querySelectorAll('.dot');

    slides.forEach((slide, index) => {
        slide.addEventListener('scroll', () => {
            const scrollOffset = slide.scrollLeft;
            const slideIndex = Math.round(scrollOffset / window.innerWidth);
            dots.forEach(dot => dot.classList.remove('active'));
            dots[slideIndex].classList.add('active');
        });
    });
