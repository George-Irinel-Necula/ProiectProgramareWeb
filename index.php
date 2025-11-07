<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elixirul Tineretii</title>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="./index.css">
  <link rel="stylesheet" href="./theme.css">
  <?php include_once __DIR__ . '/vite-client.php'; ?>
</head>

<body data-theme="elixirul-tineretii">
  <div class="soft-light">
  </div>
  <nav class="navbar w-full shadow-base-100/50 shadow-sm px-6 fixed backdrop-blur-sm z-2">
    <div class="flex w-full md:w-3/4 justify-between mx-auto ">
      <div class="flex flex-1 items-center gap-2 ">
        <svg class="icon-[tabler--spray] size-6 hidden sm:flex"></svg>
        <a class="text-base-content text-2xl font-bold no-underline" href="./index.php">
          ElixirulTineretii
        </a>
      </div>
      <div class="navbar-end flex items-center gap-4">
        <div class="dropdown relative  hidden md:inline-flex">
  <button id="dropdown-default" type="button" class="dropdown-toggle btn btn-primary btn-outline" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
     <span class="icon-[tabler--droplet] size-6 rtl:rotate-180"></span>
     <h1>Teme</h1>
    <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
  </button>
  
              <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                aria-orientation="vertical" aria-labelledby="scope-dropdown-nested">
                <li><a class="dropdown-item" href="#"><span class="icon-[tabler--moon] size-6"></span>Dark Mode</a></li>
                <li><a class="dropdown-item" href="#"><span class="icon-[tabler--sun] size-6"></span>Light Mode</a></li>
              </ul>
</div>
        <a class="btn btn-primary hidden md:flex" href="./login.php">
          <svg class="icon-[tabler--login-2] size-6"></svg>
          <span class="hidden sm:inline">Logare</span>
        </a>
        <a class="btn btn-primary hidden md:flex" href="./profile.php">
          <svg class="icon-[tabler--user] size-6"></svg>
          <span class="hidden sm:inline">Nume</span>
        </a>
       
        <div class="dropdown relative inline-flex md:hidden">
          <button id="scope-dropdown" type="button" class="dropdown-toggle btn btn-primary" aria-haspopup="menu"
            aria-expanded="false" aria-label="Dropdown">
            <span class="hidden sm:inline">Meniu</span>
            <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
          </button>
          <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu" aria-orientation="vertical"
            aria-labelledby="scope-dropdown">
            
            
            <li><a class="dropdown-item" href="#"><svg class="icon-[tabler--login-2] size-6"></svg>
                <span>Logare</span></a></li>
                <div class="divider"></div>
                <li class="dropdown relative flex items-center [--scope:window] [--offset:15] [--placement:bottom]">

              <button id="scope-dropdown-nested" class="dropdown-toggle dropdown-item" aria-haspopup="menu"
                aria-expanded="false" aria-label="Dropdown">
                <span class="icon-[tabler--droplet] size-6 rtl:rotate-180"></span>
                Teme
                <span class="icon-[tabler--chevron-right] size-6 rtl:rotate-180 ml-auto"></span>
              </button>

              <ul class="dropdown-menu dropdown-open:opacity-100 hidden min-w-60" role="menu"
                aria-orientation="vertical" aria-labelledby="scope-dropdown-nested">
                <li><a class="dropdown-item" href="#"><span class="icon-[tabler--moon] size-6"></span>Dark Mode</a></li>
                <li><a class="dropdown-item" href="#"><span class="icon-[tabler--sun] size-6"></span>Light Mode</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <main class="">
    <section class="hero xl:min-h-[calc(85vh)] flex w-full justify-center items-center md:py-36 py-24 px-6">
      <div class="hero-container w-full md:w-3/4 flex md:flex-row flex-col-reverse gap-6">
        <div class="hero-left md:w-1/2 flex flex-col gap-8 justify-center">
          <h1 class="font-extrabold lg:text-7xl md:text-6xl text-5xl">Descoperiti gama noastra de produse de <span
              class="text-primary">calitate premium</span>
          </h1>
          <p class="text-lg">Suntem distribuitori de produse cosmetice premium, special concepute pentru a satisface
            cele mai exigente cerinte ale clientilor nostri. Cu o gama variata de produse, de la ingrijirea pielii la
            machiaj, ne angajam sa oferim doar cele mai bune solutii pentru frumusetea si ingrijirea ta.</p>
          <div class="w-full gap-4 flex flex-wrap">
            <a class="btn btn-primary btn-lg" href="./shop.html">Vezi produse</a>
            <a class="btn btn-secondary btn-outline btn-lg" href="#">Afla Mai Multe</a>
          </div>
        </div>
        <div class="hero-right md:w-1/2 flex items-center justify-center ">
          <div class="size-3/4 md:size-full lg:size-full xl:size-3/4 flex items-center justify-center"><img
              class="rounded-xl" src="./Resources/Hero-Photo.png" alt="" srcset=""></div>
        </div>
      </div>
    </section>
    <section class="parteners bg-base-200 border-y-1 flex w-full justify-center items-center py-6 px-6">
      <div class="parteners-container w-full md:w-3/4 flex flex-col justify-center px-6 gap-12 py-6">
        <h2 class="text-center text-3xl font-semibold">Partenerii nostrii</h2>
        <div
          class="parteners-photos flex text-2xl gap-4 font-extrabold justify-between overflow-y-scroll text-gray-300 hover:text-white">
          <h1>L’Oréal</h1>
          <h1>Estée Lauder</h1>
          <h1>Chanel</h1>
          <h1>Avon</h1>
          <h1>Bioderma</h1>
        </div>
      </div>
    </section>
    <section class="bestsellers flex w-full justify-center px-6 py-16">
      <div class="bestsellers-container w-full items-center md:w-3/4 flex flex-col gap-4">
        <h1 class="text-4xl font-bold">Produsele noastre de top</h1>
        <p>Aici puteti vedea selectia noastra de produse celebre si apreciate de clienti.</p>
        <div class="cards w-full grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center mt-6">


          <div class="card card-xs sm:max-w-xs">
            <figure><img
                src="https://s13emagst.akamaized.net/products/32486/32485503/images/res_d47f98e338339276191b5af1b379c15d.jpg?width=720&height=720&hash=F73B29ABE0874998AB7E0E6C9ECACC36"
                alt=""></figure>
            <div class="card-body p-4">
              <h5 class="card-title min-h-12 line-clamp-2">Ruj lichid mat L'Oreal Paris Rouge Signature 104 I Rebel
                Aubergine
              </h5>
              <div class="flex gap-1 py-2 items-center">
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <h5>(2500)</h5>
                <div class="rating"></div>
              </div>
              <div class="card-actions justify-end mt-2">
                <button class="btn btn-primary btn-outline btn-sm sm:btn-md">Vezi detalii</button>
                <button class="btn btn-secondary btn-sm sm:btn-md">Cumpara</button>
              </div>
            </div>
          </div>
          <div class="card card-xs sm:max-w-xs">
            <figure><img
                src="https://s13emagst.akamaized.net/products/84539/84538532/images/res_946306bc8d70ed18492619af95a11d0f.jpg?width=720&height=720&hash=5F3B05ECF63117240DEAF3697AFA19AD"
                alt=""></figure>
            <div class="card-body p-4">
              <h5 class="card-title min-h-12 line-clamp-2">Ruj mat L'Oréal Rouge Signature - 142,
              </h5>
              <div class="flex gap-1 py-2 items-center">
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <h5>(2500)</h5>
                <div class="rating"></div>
              </div>
              <div class="card-actions justify-end mt-2">
                <button class="btn btn-primary btn-outline btn-sm sm:btn-md">Vezi detalii</button>
                <button class="btn btn-secondary btn-sm sm:btn-md">Cumpara</button>
              </div>
            </div>
          </div>

          <div class="card card-xs sm:max-w-xs">
            <figure><img
                src="https://s13emagst.akamaized.net/products/88006/88005427/images/res_ab5e3f54ec0855a701e114458cea7e88.jpg?width=720&height=720&hash=D9B9676384CC538C9E79F65124F5DEBE"
                alt=""></figure>
            <div class="card-body p-4">
              <h5 class="card-title min-h-12 line-clamp-2">Ruj Ultra Mat, Ideal Lilac, Avon
              </h5>
              <div class="flex gap-1 py-2 items-center">
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <h5>(2500)</h5>
                <div class="rating"></div>
              </div>
              <div class="card-actions justify-end mt-auto">
                <button class="btn btn-primary btn-outline btn-sm sm:btn-md">Vezi detalii</button>
                <button class="btn btn-secondary btn-sm sm:btn-md">Cumpara</button>
              </div>
            </div>
          </div>

          <div class="card card-xs sm:max-w-xs">
            <figure><img
                src="https://s13emagst.akamaized.net/products/8945/8944471/images/res_4963013a79849082f31fc3d99ee8afc2.jpg?width=720&height=720&hash=D4CAF4F03D29F4A7D7A2AB5DE4816DFD"
                alt=""></figure>
            <div class="card-body p-4">
              <h5 class="card-title min-h-12 line-clamp-2">Ruj lichid mat, rezistent la transfer L'Oreal Paris
                Infaillible Matte Resistance
              </h5>
              <div class="flex gap-1 py-2 items-center">
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <span class="icon-[tabler--star-filled]"></span>
                <h5>(2500)</h5>
                <div class="rating"></div>
              </div>
              <div class="card-actions justify-end mt-2">
                <button class="btn btn-primary btn-outline btn-sm sm:btn-md">Vezi detalii</button>
                <button class="btn btn-secondary btn-sm sm:btn-md">Cumpara</button>
              </div>
            </div>
          </div>





        </div>

      </div>
    </section>
    <section class="statistics bg-base-200 border-y-1 flex w-full justify-center items-center py-6 px-6">
      <div class="statistics-container w-full md:w-3/4 flex flex-col justify-center gap-12 py-6">
        <h2 class="text-center text-3xl font-semibold">Statistici</h2>
        <div class="cards grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 justify-center">
          <div class="card card-xs items-center p-4 border-t-6 border-primary">
            <div class="card-header text-center gap-2 flex flex-col">
              <h1 class="text-5xl font-bold text-primary">10+</h1>
              <h3 class="text-xl">Branduri disponibile</h3>
            </div>
            <div class="card-body wrap-break-word pt-2">
              <p class="text-sm">O varietate de branduri de top pentru toate preferintele.O varietate de branduri de top
                pentru toate preferintele</p>
            </div>
          </div>
          <div class="card card-xs items-center p-4 border-t-6 border-secondary">
            <div class="card-header text-center gap-2 flex flex-col">
              <h1 class="text-5xl font-bold text-secondary">300k+</h1>
              <h3 class="text-xl">Vanzari produse</h3>
            </div>
            <div class="card-body wrap-break-word pt-2">
              <p class="text-sm">Totalul de vanzari de anul acesta in colaborare cu partenerii nostrii</p>
            </div>
          </div>
          <div class="card card-xs items-center p-4 border-t-6 border-primary">
            <div class="card-header text-center gap-2 flex flex-col">
              <h1 class="text-5xl font-bold text-primary">99.5%</h1>
              <h3 class="text-xl">Rata de satisfactie</h3>
            </div>
            <div class="card-body wrap-break-word pt-2">
              <p class="text-sm">Toti colaboratorii nostri sunt multumiti de produsele noastre</p>
            </div>
          </div>
          <div class="card card-xs items-center p-4 border-t-6 border-secondary">
            <div class="card-header text-center gap-2 flex flex-col">
              <h1 class="text-5xl font-bold text-secondary">1000+</h1>
              <h3 class="text-xl">Produse diferite</h3>
            </div>
            <div class="card-body wrap-break-word pt-2">
              <p class="text-sm">O varietate de produse pentru toate preferintele</p>
            </div>
          </div>

        </div>
      </div>
    </section>
    <section class="categories flex w-full justify-center px-6 py-16">
      <div class="categories-container grid-col-1 w-full items-center md:w-3/4 gap-4">
        <h1 class="text-4xl font-bold">Categorii de cosmetice disponibile</h1>
        <p>Aici puteti explora diversele categorii de cosmetice pe care le oferim.</p>
        <div class="cards w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 justify-center mt-6">
          <div class="card image-full sm:max-w-sm">
            <figure><img src="https://upload.cdn.baselinker.com/products/1002169/7091af6e371a751fd94b638fe665cb94.jpg"
                alt="" /></figure>
            <div class="card-body pt-24">
              <h2 class="card-title mb-2.5 text-white">Machiaj</h2>
              <p class="text-white mt-auto">Exploreaza gama noastra de produse de machiaj, de la fond de ten la rujuri.
              </p>
            </div>
          </div>
          <div class="card image-full sm:max-w-sm">
            <figure><img
                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqO-Xt5eu99oeyAnczPZxt4viUoBh9GgovDg&s"
                alt="" /></figure>
            <div class="card-body pt-24">
              <h2 class="card-title mb-2.5 text-white">Ingrijirea parului</h2>
              <p class="text-white mt-auto">Exploreaza gama noastra de produse pentru ingrijirea parului, de la sampoane
                la tratamente.</p>
            </div>
          </div>

          <div class="card image-full sm:max-w-sm">
            <figure><img
                src="data:image/jpeg;base64,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"
                alt="" /></figure>
            <div class="card-body pt-24">
              <h2 class="card-title mb-2.5 text-white">Ingrijirea pielii</h2>
              <p class="text-white mt-auto">Exploreaza gama noastra de produse pentru ingrijirea pielii, de la creme
                hidratante la seruri.</p>
            </div>
          </div>
        </div>

      </div>
    </section>
    <section class="faq bg-base-200 border-y-1 flex w-full justify-center items-center py-6 px-6">
      <div class="faq-container w-full md:w-3/4 flex flex-col justify-center gap-12 py-6">
        <h2 class="text-center text-4xl font-semibold">Intrebari des puse</h2>
        <div class="accordions">
          <div class="accordion divide-neutral/20 divide-y ">
            <div class="accordion-item active border-b-2 border-white/20" id="payment-basic">
              <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                aria-controls="payment-basic-collapse" aria-expanded="true">
                <span
                  class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                <span
                  class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                Cand se face plata pentru comanda?
              </button>
              <div id="payment-basic-collapse"
                class="accordion-content w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="payment-basic" role="region">
                <div class="px-5 pb-4">
                  <p class="text-base-content/80 font-normal">
                    Plata se face in momentul plasarii comenzii, prin card bancar, transfer bancar sau ramburs la
                    livrare.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item border-b-2 border-white/20" id="delivery-basic">
              <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                aria-controls="delivery-basic-collapse" aria-expanded="false">
                <span
                  class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                <span
                  class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                Cum se face livrarea produselor?
              </button>
              <div id="delivery-basic-collapse"
                class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="delivery-basic" role="region">
                <div class="px-5 pb-4">
                  <p class="text-base-content/80 font-normal">
                    Pentru produsele mari, livrarea se face printr-o companie de logistica terță parte, oferindu-vă
                    serviciul de livrare programată „room of choice”. Pentru produsele mici, oferim livrare gratuită
                    prin colet.
                  </p>
                </div>
              </div>
            </div>
            <div class="accordion-item border-b-2 border-white/20" id="cancel-basic">
              <button class="accordion-toggle inline-flex items-center gap-x-4 text-start"
                aria-controls="cancel-basic-collapse" aria-expanded="false">
                <span
                  class="icon-[tabler--plus] accordion-item-active:hidden text-base-content size-4.5 block shrink-0"></span>
                <span
                  class="icon-[tabler--minus] accordion-item-active:block text-base-content size-4.5 hidden shrink-0"></span>
                Pot anula comanda?
              </button>
              <div id="cancel-basic-collapse"
                class="accordion-content hidden w-full overflow-hidden transition-[height] duration-300"
                aria-labelledby="cancel-basic" role="region">
                <div class="px-5 pb-4">
                  <p class="text-base-content/80 font-normal">
                    Comenzile cu livrare programată pot fi anulate cu 72 de ore înainte de data de livrare aleasă pentru
                    rambursare completă.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer bg-base-200 px-6 py-4">
    <div class="flex flex-wrap items-center justify-between w-3/4 mx-auto">
      <div class="flex items-center gap-2 text-xl font-bold text-base-content">
        <span class="icon-[tabler--spray] size-5"></span>
        <span>ElixirulTineretii</span>
      </div>
      <aside class="grid-flow-col items-center">
        <p> ©2025 <a class="link link-hover font-medium" href="#">ElixirulTineretii</a> </p>
      </aside>
      <div class="flex h-5 gap-4">
        <a href="https://github.com/George-Irinel-Necula" class="link" aria-label="Github Link">
          <span class="icon-[tabler--brand-github] size-5"></span>
        </a>
        <a href="#" class="link" aria-label="Facebook Link">
          <span class="icon-[tabler--brand-facebook] size-5"></span>
        </a>
        <a href="#" class="link" aria-label="X Link">
          <span class="icon-[tabler--brand-x] size-5"></span>
        </a>
        <a href="#" class="link" aria-label="Google Link">
          <span class="icon-[tabler--brand-google] size-5"></span>
        </a>
      </div>
    </div>
  </footer>
  <script type="module" src="./main.js"></script>
</body>

</html>