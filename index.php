<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Поиск экскурсий и гидов</title>
    <link rel="stylesheet" href="static/css/style.css">
  </head>
  <body>
    <header class="header container clearfix">
      <a href="#" class="header__logo link">excursapp</a>
      <ul class="header__nav">
        <li><a class="link" href="index.html#contacts">Контакты</a></li>
        <!-- <li><a class="link" href="#">Экскурсоводам</a></li> -->
        <li><a class="header__lang link" href="eng.html">eng</a></li>
      </ul>
    </header>

    <section class="cta clearfix">
      <h1 class="cta__title">Простой способ найти гида и забронировать экскурсию</h1>
      <div class="cta__email">

        <form class="cta__form clearfix" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input class="cta__input" type="text" name="email" value="" placeholder="E-mail" required>
          <input class="cta__button" type="submit" value="Узнать о запуске">
        </form>

        <p>Приложение в разработке.<br> Оставь e-mail, чтобы узнать о запуске.</p>
      </div>
    </section>

    <section class="content content--promo clearfix">
      <h3 class="content__title container">Экскурсии, которые подходят именно тебе</h3>

      <div class="content__row clearfix">
        <div class="content__tour content__tour--private">
          <h4>Индивидуальные туры</h4>
        </div>
        <div class="content__tour content__tour--authors">
          <h4>Авторские экскурсии</h4>
        </div>
        <div class="content__tour content__tour--locals">
          <h4>Прогулки с местными энтузиастами</h4>
        </div>
        <div class="content__tour content__tour--sightseeing">
          <h4>Обзорные экскурсии</h4>
        </div>
      </div>

      <div class="content__row clearfix">
        <div class="content__tour content__tour--gastro">
          <h4>Гастротуры</h4>
        </div>
        <div class="content__tour content__tour--museum">
          <h4>Туры по музейным экспозициям</h4>
        </div>
        <div class="content__tour content__tour--nightlife">
          <h4>Андерграунд и ночная жизнь</h4>
        </div>
        <div class="content__tour content__tour--car">
          <h4>Туры на автомобиле</h4>
        </div>
      </div>
    </section>

    <section class="content content--feature content--alignleft container clearfix">
      <img class="content__img" alt="Feature Map" src="static/img/landing_app-map.png" srcset="static/img/landing_app-map@2x.png 2x">

      <div class="content__text">
        <h3 class="content__title">Гиды здесь и сейчас</h3>
        <p>Приложение покажет гидов, свободных неподалеку от тебя и готовых провести экскурсию прямо сейчас.</p>
      </div>
    </section>

    <section class="content content--feature content--alignright container clearfix">
      <img class="content__img" alt="Feature Map" src="static/img/landing_app-book.png" srcset="static/img/landing_app-book@2x.png 2x">

      <div class="content__text">
        <h3 class="content__title">Бронируй заранее</h3>
        <p>Планируешь отдых заранее? Открой расписание гида и выбери удобные для тебя дату и время. </p>
      </div>
    </section>

    <section class="content content--feature content--alignleft container clearfix">
      <img class="content__img" alt="Feature Guide" src="static/img/landing_app-guide.png" srcset="static/img/landing_app-guide@2x.png 2x">

      <div class="content__text">
        <h3 class="content__title">Экскурсоводы с такими же интересами, как у тебя</h3>
        <p>Мы верим, что экскурсия становится ещё интереснее, когда вы с гидом на одной волне. Поиск по интересам поможет найти твоего идеального гида.</p>
      </div>
    </section>

    <section class="cta cta--second clearfix">
      <h2 class="cta__title">Подпишись на наши новости</h2>
      <div class="cta__email">
        <form class="cta__form clearfix" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          <input class="cta__input" type="text" name="email" value="" placeholder="E-mail" required>
          <input class="cta__button" type="submit" value="Узнать о запуске">
        </form>
      </div>
    </section>

    <section class="footer" id="contacts">
      По любым вопросам: <a class="link" href="mailto:info@excursapp.com">info@excursapp.com</a>
    </section>

    <!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45841890 = new Ya.Metrika({ id:45841890, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45841890" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
  </body>
</html>
