<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Static Template</title>
  <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
  <style>
    
    .carousel-height {
      height: 500px; /* Adjust the height as needed */
    }
    .carousel-height-phone{
      height: 400px;
    }


  </style>
</head>

<body>

  <div class="w-100 rounded mx-auto">

    <div id="default-carousel" class=" relative" data-carousel="static">

      <!-- Apply the carousel-height class here -->
      <div class="overflow-hidden relative carousel-height ">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <!-- Apply the carousel-height class to the image as well -->
          <img src="../images/annonce1.jpg" class=" hidden md:block carousel-height absolute center  top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          <img src="../images/annonce1phone.jpg" class=" md:hidden block carousel-height absolute center  top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">

        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="../images/annonce2phone.jpg" class=" md:hidden block carousel-height absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">  
        <img src="../images/annonce2.jpg" class=" hidden md:block carousel-height absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>

        <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="../images/annonce3phone.jpg" class="md:hidden block  carousel-height absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          <img src="../images/annonce3.jpg" class="hidden md:block  carousel-height absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
      </div>

      <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
      </div>

      <button type="button" class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
          </svg>
          <span class="hidden">Anterior</span>
        </span>
      </button>
      <button type="button" class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 0 group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
          <svg class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
          <span class="hidden">Siguiente</span>
        </span>
      </button>
    </div>
  </div>

</body>

</html>
