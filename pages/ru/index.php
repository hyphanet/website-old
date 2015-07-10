<!--
  jQuery library
-->
<script type="text/javascript" src="/js/jquery-1.3.min.js"></script>

<!--
  jCarousel library
-->
<script type="text/javascript" src="/js/jcarousel/lib/jquery.jcarousel.pack.js"></script>
<!--
  jCarousel core stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/lib/jquery.jcarousel.css" />
<!--
  jCarousel skin stylesheet
-->
<link rel="stylesheet" type="text/css" href="/js/jcarousel/skins/tango/skin.css" />

<script type="text/javascript" src="/js/jcarousel/lib/thickbox/thickbox.js"></script>
<link rel="stylesheet" href="/js/jcarousel/lib/thickbox/thickbox.css" type="text/css" media="screen" />

<script type="text/javascript">
<!--
$(document).ready(function() {
    $("#mycarousel").jcarousel({
      'visible': 1,
      'scroll': 1,
      'wrap': 'both'
    });
});
//-->
</script>

<!-- Contents -->

      <div id="whatistitle" style="margin-bottom: 10px";>
  <h1>Делись файлами, общайся, смотри. Анонимно. В свободной сети.</h1>
      </div>
      <div class="whatis">
  <p>
    Меняйся файлами, общайся в форумах, смотри и публикуйся, анонимно не боясь блокировки и цензуры! Подключите в сеть друзей для большей безопасности!
    <br/>
    <a href="whatis.html">Узнать больше!</a>
  </p>
      </div>

      <div id="screenshots_container">
  <div id="screenshot_nojs">
	     <a href="image/screenshot/browse.png"><img src="image/screenshot/browse.png"
	     alt="Bookmarks" width="383" height="309" /></a>
       <p style="text-align: center;"><a href="screenshots.html">Другие скриншоты</a></p>
  </div>
  <div id="screenshot_js" style="display: none;">
           <ul id="mycarousel" class="jcarousel-skin-tango">
             <li><a href="image/screenshot/browse.png" class="thickbox"><img src="image/screenshot/browse.png" width="383" height="311" alt="Bookmarks" /></a></li>
             <li><a href="image/screenshot/sone.png" class="thickbox"><img src="image/screenshot/sone.png" width="383" height="298" alt="Sone" /></a></li>
             <li><a href="image/screenshot/fms.png" class="thickbox"><img src="image/screenshot/fms.png" width="383" height="298" alt="FMS forum" /></a></li>
           </ul>
  </div>
      </div>


      <div id="default" class="whatis" style="clear:left; margin-top: 10px; color: red;">
           <p>Не удалось определить вашу операционную систему. Пожалуйста, включите поддержку javascript или перейдите на <a href="download.html">страницу загрузки</a> для установки Фринет.</p>
      </div>

      <div id="windows" class="sprites download">
     <a href="https://freenetproject.org/jnlp/FreenetInstaller.exe">
        <span id="software">Фринет</span>
        <span id="action">Загрузить</span>
        <span id="version">0.7.5 для Windows</span>
     </a>
      </div>

      <div id="macos" class="sprites download">
        <a href="/jnlp/freenet.jnlp">
        <span id="software">Фринет</span>
        <span id="action">Установить</span>
        <span id="version">0.7.5 для OS X</span>
     </a>
      </div>

  <div id="unix">
       <div class="download sprites">
           <a href="/jnlp/freenet.jnlp">
              <span id="software">Фринет</span>
              <span id="action">Установить</span>
              <span id="version">0.7.5 для GNU/Linux / Unix</span>
           </a>
       </div>
       <p style="clear: left;">
    Если что-то не работает, пожалуйста, обратитесь к  
         <a href="download.html#unix">руководству по установке</a>. Возможно, вам так же пригодится <a href="http://freesocial.draketo.de/">другое руководство</a> для настройки Фринет и связанного программнного обеспечения для общения и т.д.
       </p>
  </div>
  
  <p style="clear:left; padding-left: 20px; font-size: 12px;"><a href="download.html">Инструкции и дистрибутивы для других операционных систем.</a></p>

  <div style="clear: both"></div>

  <div id="donate_button">
       <h4>Сделать дарение</h4>
       <p>Мы никого не принуждаем загружать и использовать Фринет. Использование Фринет полностью бесплатно. Мы некоммерческая организация, которая живет за счет ваших пожертвований.</p>
       <p>Наш текущий баланс <b>$MONEYBALANCE</b>.</p>
<!--       <p>Наш текущий баланс <b>$MONEYBALANCE</b> используется для содержания этого сервера и для наших разовых выплат разработчам и для чего-нибудь еще <b>когда потребуется</b>.</p> -->
       <p><a href="donate.html">Подарить!</a></p>
  </div>

      <div id="news">
  <h4>Последние новости</h4>
    <p>
	<?php
		include("pages/en/latestnews.php");
	?>
    </p>

  <p>
        (26 июня 2013) <a href="news.html#2013-second-developer-xor">Фринет нанимает второго разработчика!</a><br/>
        (8 апреля 2013) <a href="news.html#2013-summer-of-code-accepted">Фринет принят на Google Summer of Code 2013!</a><br/>
        (12 сентября 2012) <a href="https://emu.freenetproject.org/pipermail/devl/2012-September/036546.html">Релиз Фринет 0.7.5 билд 1413</a><br/>
        (11 сентября 2012) <a href="news.html#2012-traceback-attack">Ответ Университету Гаваев на «Экспериментальное изучение ответственности в существующих анонимных сетях»</a><br/>
        (14 апреля 2012) <a href="https://emu.freenetproject.org/pipermail/devl/2012-April/036354.html">Релиз Фринет 0.7.5 билд 1407</a><br/>
        (13 апреля 2011) <a href="news.html#freedom-house-april-2011">Фринет был отмечен, как один из лучших инструментов противодействия цензуре в обзоре китайских пользователей!</a><br/>
    <a href="news.html">Более старые новости</a>
  </p>
      </div>


      <script type="text/javascript">
         hideDiv("windows");
       hideDiv("macos");
       hideDiv("unix");
       hideDiv("screenshot_nojs");
       showDiv("screenshot_js");
       // Try to detect if Sun Java 1.6.0 or higher is installed
       var Java = PluginDetect.isMinVersion('Java', '1,6,0');

       // Os detection
       var OSName="";
       if (navigator.appVersion.indexOf("Win")!=-1)
          OSName="windows";
       else if (navigator.appVersion.indexOf("Mac")!=-1)
            OSName="macos";
       else if (navigator.appVersion.indexOf("X11")!=-1)
            OSName="unix";
       else if (navigator.appVersion.indexOf("Linux")!=-1)
            OSName="unix";

         if(OSName == "windows") {
        showDiv("windows");
        hideDiv("default");
          } else if (OSName != "") {
               showDiv(OSName);
        hideDiv("default");
       } else {
           showDiv("windows");
        showDiv("macos");
        showDiv("unix");
        showDiv("default");
       }
      </script>
