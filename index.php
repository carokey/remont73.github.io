<html>

<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

  <link rel="stylesheet" href="css/main.css">
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link href="css/slider.sass" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">.
  <link rel="shortcut icon" href="img/ico.png">
  <meta name="description" content="Компьютерный мастер в Ульяновске, работаю каждый день без выходных">
  <script src="./js/jquery.mask.min.js"></script>






</head>

<body>





  <header>
    <nav>

      <a href="#" class="logo"><img src="img/Group%209.svg"></a>

      <a href="#" class="links-y first-l">Главная</a>
      <a href="#" class="links-y">Услуги и цены</a>
      <a href="#" class="links-y">Обо мне</a>

      <a href="#" class="phone-link">+7(908)486-05-29</a>

    </nav>

  </header>


  <div class="wrapper">
    <section class="section1">
      <div class="content-f">
        <div class="section-container">

          <div class="content-f-i">
            <h1>Компьютерный мастер</h1>
            <div class="banner-ms"></div>
            <div class="banner-locker"></div>

            <div class="time-n">
              <p class="time-np">20% скидка до 12:00</p>
              <p class="title-time">20% скидка до</p>

              <p class="time-o">12:00</p>

            </div>


            <div class="form-input">
              <form action="send.php" method="post" id="order">

                <textarea id="user_name" placeholder="Опишите свою проблему" class="txt-b-form" name="trouble"
                  style="padding-top: 10px; padding-left: 10px; resize: none; " form="order" required></textarea>

                <input id="user_phone" type="tel" placeholder="Ваш телефон" class="ph-form" name="phone" required>

                <script>

                  $(function () {

                    $("#user_phone").mask("8(999) 999-9999");
                  });
                </script>


                <button class="btn-form trigger modal-trigger" id="btn_submit"> <img src="img/Group%2013.svg"> </button>

              </form>
            </div>


            <div class="na-b">

              <div class="txt-na-b">
                <span><img src="img/Star%201.svg"></span>
                <p1>Выезд мастера - 0 ₽</p1>
                <p2>Приеду за час</p2>

              </div>


              <div class="txt-na-b sec-el">
                <span><img src="img/Star%201.svg"></span>
                <p1>Диагностика - 0 ₽</p1>
                <p2>Ремонт ~ 50 мин.</p2>

              </div>


            </div>

          </div>


        </div>
      </div>
    </section>

    <section class="section2">
      <div class="section-container">
        <div class="content-s">

          <div class="content-s-i">

            <div class="prv fc">
              <span><img src="img/img-fc/icon-power-on-fault.svg"></span>
              <p1>Не включается</p1>
              <br>
              <p2>300 ₽</p2>
            </div>
            <div class="prv sc">

              <span><img src="img/img-fc/icon-network-fault.svg"></span>
              <p1>Проблемы с сетью</p1>
              <br>
              <p2>350 ₽</p2>


            </div>
            <div class="prv tc">

              <span><img src="img/img-fc/icon-loading-fault.svg"></span>
              <p1>Не загружается</p1>
              <br>
              <p2>500 ₽</p2>

            </div>
            <div class="prv foc">

              <span><img src="img/img-fc/icon-devices-fault.svg"></span>
              <p1>Не видит устройство</p1>
              <br>
              <p2>200 ₽</p2>

            </div>
            <div class="prv fic">

              <span><img src="img/img-fc/icon-sound-fault.svg"></span>
              <p1>Нет звука</p1>
              <br>
              <p2>300 ₽</p2>


            </div>
            <div class="prv sci">

              <span><img src="img/img-fc/icon-malware-fault.svg"></span>
              <p1>Заражение вирусами</p1>
              <br>
              <p2>400 ₽</p2>


            </div>


          </div>

        </div>
      </div>
    </section>

    <section class="section3">
      <div class="section-cont">
        <div class="content-t">

          <div class="content-t-i section-container">

            <h1>Скидка 20% по акции
              “СЧАСТЛИВЫЕ ЧАСЫ”</h1>
            <p> 20% скидка на услуги с 12:00 до 16:00 </p>


            <img src="img/image%205.png">
            <div class="banner-l-2"></div>

            <div class="sh-h">
              <form type="tel" action="send.php" method="post" id="order-2">
                <input class="t-v" placeholder="Ваш телефон" style="resize: none;" form="order" style="overflow:auto"
                  name="phone" type="tel" id="ust" required>

                <script>

                  $(function () {

                    $("#ust").mask("8(999) 999-9999");
                  });
                </script>

                <button form="order-2" style="cursor: pointer; outline: none; border: none;" class="t-btn" disabled>

                  Вызвать

                </button>
              </form>
            </div>

          </div>





        </div>
      </div>
    </section>

    <section class="section4">
      <div class="section-container">
        <div class="section4__inner">
          <div class="section4__heading">
            <h3 class="section4__title">
              Отзывы<span> о моей работе:</span>
            </h3>
          </div>
          <div class="seiper-box">



            <div class="swiper">
              <div class="swiper-wrapper">
                <div class="swiper-slide swiper-slide--one">
                  <!-- <img src="img/image-ine.jpg" alt=""> -->
                  <div>

                  </div>
                </div>
                <div class="swiper-slide swiper-slide--two">

                  <div>

                  </div>
                </div>

                <div class="swiper-slide swiper-slide--three">

                  <div>

                  </div>
                </div>

                <div class="swiper-slide swiper-slide--four">

                  <div>

                  </div>
                </div>


              </div>
              <!-- Add Pagination -->
              <div class="swiper-pagination"></div>
            </div>





            <!-- <div class="content-fo">
              <div class="content-fo-i">
                <h1><span>Отзывы</span> о моей работе:</h1>


                <div class="container">



                  <input type="radio" name="slider" id="item-1" checked style="" class="point f-point">

                  <input type="radio" name="slider" id="item-2" style="" class="point t-point">

                  <input type="radio" name="slider" id="item-3" style="" class="point tr-point">

                  <div class="cards">
                    <label class="card" for="item-1" id="song-1">
                      <img class="img-slider" src="img/review/IMG_4456%20(1).png" alt="song">
                    </label>
                    <label class="card" for="item-2" id="song-2">
                      <img class="img-slider" src="img/review/IMG_4457.png" alt="song">
                    </label>
                    <label class="card" for="item-3" id="song-3">
                      <img class="img-slider" src="./img/review/IMG_4456%20(1).png" alt="song">
                    </label>
                  </div>
                  <div class="player">
                    <div class="upper-part">
                      <div class="play-icon">
                        <svg width="20" height="20" fill="#2992dc" stroke="#2992dc" stroke-linecap="round"
                          stroke-linejoin="round" stroke-width="2" class="feather feather-play" viewBox="0 0 24 24">
                          <defs />

                        </svg>
                      </div>

                    </div>

                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
    </section>

    <script>

      $('input').on('change', function () {
        $('body').toggleClass('blue');
      });

    </script>



  </div>
  </div>


  <div class="footer">

    <div class="cont-footer">

      <p>

        Все цены на сайте указаны от. Точную стоимость сможет определить мастер после диагностики. Не является публичной
        офертой.
      </p>

    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>
    // Get the input element using its class
    var input = document.querySelector('.t-v');

    // Get the button element
    var button = document.querySelector('.t-btn');

    // Add an event listener to the input element that listens for changes in its value
    input.addEventListener('input', function () {
      // Check if the input field is empty
      if (input.value === '') {
        // Disable the button
        button.disabled = true;
      } else {
        // Enable the button
        button.disabled = false;
      }
    });
  </script>
  <script>


    var swiper = new Swiper(".swiper", {
      effect: "coverflow",

      centeredSlides: true,
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 3,
        slideShadows: true
      },
      keyboard: {
        enabled: true
      },
      mousewheel: {
        thresholdDelta: 70
      },
      loop: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
          coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 0,
            modifier: 1,
            slideShadows: false
          }
        },
        768: {
          slidesPerView: 1
        },
        1024: {
          slidesPerView: 2
        },
        1560: {
          slidesPerView: 3
        }
      }
    });

  </script>
</body>


</html>