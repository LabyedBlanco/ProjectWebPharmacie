<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinite Tailwind Carousel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .carousel-container {
            display: flex;
            overflow: hidden;
            width: 100%;
        }
        .slides-container {
            display: flex;
            transition: transform 0.5s ease;
        }
        .slide {
            flex: 0 0 25.33%;
            box-sizing: border-box;
            text-align: center;
            padding: 0;
            margin: 0;
        }
        .arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            cursor: pointer;
            
            
            border-radius: 50%;
            padding: 0.5rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 10;
        }
        .arrow.left {
            left: 10px;
        }
        .arrow.right {
            right: 10px;
        }
        @media (max-width: 768px) {
            .slide {
                flex: 0 0 100%;
            }
        }
    </style>
</head>
<body class="relative">
<div class="relative w-full">
    <div class="carousel-container">
        <div class="flex slides-container">
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 1">
                <div class="text-xs">Product 1</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 2">
                <div class="text-xs">Product 2</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 3">
                <div class="text-xs">Product 3</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 4">
                <div class="text-xs">Product 4</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 5">
                <div class="text-xs">Product 5</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 6">
                <div class="text-xs">Product 6</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 1">
                <div class="text-xs">Product 1</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 2">
                <div class="text-xs">Product 2</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 3">
                <div class="text-xs">Product 3</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 4">
                <div class="text-xs">Product 4</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 5">
                <div class="text-xs">Product 5</div>
            </div>
            <div class="slide">
                <img class="object-cover w-24 h-24 mx-auto mb-1 rounded-full" src="https://via.placeholder.com/100" alt="Product 6">
                <div class="text-xs">Product 6</div>
            </div>
        </div>
    </div>
    <div class="arrow left" onclick="moveSlider('prev')">&#9664;</div>
    <div class="arrow right" onclick="moveSlider('next')">&#9654;</div>
</div>

<script>
    const slidesContainer = document.querySelector('.slides-container');
    let slideWidth = document.querySelector('.slide').offsetWidth;
    let currentSlide = 0;
    const totalSlides = slidesContainer.children.length / 2; 

    function moveSlider(direction) {
        if (direction === 'next') {
            currentSlide = (currentSlide + 1) % totalSlides;
        } else {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        }
        slidesContainer.style.transition = 'transform 0.5s ease';
        slidesContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;

        // Reset position for infinite effect
        if (currentSlide === totalSlides - 1 || currentSlide === 0) {
            setTimeout(() => {
                slidesContainer.style.transition = 'none';
                if (currentSlide === totalSlides - 1) {
                    slidesContainer.style.transform = `translateX(-${slideWidth}px)`;
                    currentSlide = 1;
                } else if (currentSlide === 0) {
                    slidesContainer.style.transform = `translateX(-${(totalSlides - 1) * slideWidth}px)`;
                    currentSlide = totalSlides - 2;
                }
            }, 500);
        }
    }

    function autoMoveSlider() {
        moveSlider('next');
        setTimeout(autoMoveSlider, 5000); 
    }

    autoMoveSlider();

    document.addEventListener('keydown', (event) => {
        if (event.key === 'ArrowRight') {
            moveSlider('next');
        } else if (event.key === 'ArrowLeft') {
            moveSlider('prev');
        }
    });

    window.addEventListener('resize', () => {
        slideWidth = document.querySelector('.slide').offsetWidth;
        slidesContainer.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
    });
</script>

</body>
</html>