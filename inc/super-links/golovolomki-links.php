<?php

function webg_create_link() {
  $webg_links = webg_links();
  // Получаем случайное число соответсвующее какому-то объекту
  $i = random_int(1,count($webg_links));

  // Генерируем случайное число для Анкора
  $count_anchors_array = count($webg_links[$i]['anchors']) - 1;
  $a = random_int(0,$count_anchors_array);

  $random_link = $webg_links[$i]['link'];
  $random_anchor = $webg_links[$i]['anchors'][$a];
  $prepare_link = '<a href="'.$random_link.'">'.$random_anchor.'</a>';

  return $prepare_link; 
}

function webg_links() {
		
  $webg_links = Array(
    1 =>
    array (
      "link" => "https://webgolovolomki.com/add-js-in-html/",
      "anchors" => array (
        "как подключить javascript в html",
"как подключить js к html",
      )
    ),
    2 =>
    array (
      "link" => "https://webgolovolomki.com/all-about-description/",
      "anchors" => array (
        "мета-тег description как заполнять",
"мета-тег description что это",
"что писать в мета-тег description",
"что такое мета-тег description",
"что такое мета-тег description для сайта",
"что такое мета-теги description",
"meta description примеры правильного написания",
"пример хорошего description",
"мета тег description",
"правильный description",
"для чего используется тег description",
      )
    ),
    3 =>
    array (
      "link" => "https://webgolovolomki.com/all-about-title/",
      "anchors" => array (
        "как писать title",
"как правильно заполнять title",
"как правильно написать title",
"как прописать title в wordpress",
"как узнать title страницы",
"какой длины должен быть title",
"мета-тег title что это",
"сколько символов в title",
"что писать в title",
"что такое title",
"что такое атрибут title в wordpress",
"что такое мета-тег title",
"что такое title страницы",
"meta title что это",
"seo title что это",
"title как правильно написать",
"title что писать",
"title что это",
      )
    ),
    4 =>
    array (
      "link" => "https://webgolovolomki.com/change-color-in-svg/",
      "anchors" => array (
        "как изменить цвет svg при наведении",
"как поменять цвет svg при наведении",
"перекрасить svg css",
"как поменять цвет svg картинки в css",
"как изменить цвет svg css",
"изменение цвета svg при наведении",
      )
    ),
    5 =>
    array (
      "link" => "https://webgolovolomki.com/child-theme-wordpress/",
      "anchors" => array (
        "дочерняя тема wordpress",
"создание дочерней темы wordpress",
"wordpress дочерняя тема",
      )
    ),
    6 =>
    array (
      "link" => "https://webgolovolomki.com/comment-in-css/",
      "anchors" => array (
        "как закомментировать строку в css",
"как закомментировать css",
"как закомментировать в css",
"как закомментировать код в css",
"закомментировать в css",
"закомментировать css",
      )
    ),
    7 =>
    array (
      "link" => "https://webgolovolomki.com/delaem-pravilnoe-tz-dlya-kopirajtera/",
      "anchors" => array (
        "задание для копирайтера",
"как написать тз для копирайтера",
"пример задания для копирайтера",
"пример тз для копирайтера",
"пример тз копирайтеру",
"техническое задание +для копирайтера",
"техническое задание для копирайтера",
"техническое задание копирайтеру образец",
"тз для копирайтера",
"тз для копирайтера пример",
"тз копирайтерам",
"тз копирайтеру",
"тз копирайтеру пример",
"тз на копирайтинг",
"тз на текст для копирайтера",
"шаблон тз для копирайтера",
"тз для копирайтера шаблон",
"техническое задание для копирайтера пример",
      )
    ),
    8 =>
    array (
      "link" => "https://webgolovolomki.com/dlya-chego-nuzhno-seo-prodvizhenie-sajta/",
      "anchors" => array (
        "для чего нужно сео",
"для чего нужно сео продвижение",
"для чего нужно seo",
"для чего нужно seo продвижение",
"для чего нужно seo продвижение сайта",
"зачем нужно продвижение сайта",
"зачем нужно сео",
"зачем нужно сео продвижение",
"зачем нужно seo",
"зачем нужно seo продвижение",
"зачем нужно seo продвижение сайта",
"зачем нужно seo-продвижение",
"сео продвижение сайта что это такое",
"сео продвижение что это",
"сео-продвижение что это такое",
      )
    ),
    9 =>
    array (
      "link" => "https://webgolovolomki.com/edit-css-wordpress/",
      "anchors" => array (
        "как редактировать css в wordpress",
      )
    ),
    10 =>
    array (
      "link" => "https://webgolovolomki.com/en/appearance-of-elements-on-scrolling/",
      "anchors" => array (
        "show elements on scroll",
"how to make elements appear on scroll",
      )
    ),
    11 =>
    array (
      "link" => "https://webgolovolomki.com/en/button-with-flare-how-to-make-an-animated-flare-on-pure-css/",
      "anchors" => array (
        "css flare effect",
"flare animation css",
      )
    ),
    12 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-add-comment-in-css/",
      "anchors" => array (
        "how to add comment in css",
"comments in css",
"commenting css",
      )
    ),
    13 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-darken-the-background-images-in-css/",
      "anchors" => array (
        "how to darken background image css",
"how to make background image darker in css",
      )
    ),
    14 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-make-a-burger-menu-complete-code-and-detailed-explanation/",
      "anchors" => array (
        "burger menu js",
"burger menu html",
"burger html",
"burger menu css js",
"js burger menu",
"menu burger css",
"how to make burger menu",
      )
    ),
    15 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-make-a-button-click-effect-in-css/",
      "anchors" => array (
        "button click effect css",
"css button pressed effect",
      )
    ),
    16 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-make-a-smooth-zoom-of-the-image-on-hover-effect-on-pure-css/",
      "anchors" => array (
        "image hover scale css",
"css scale image on hover",
"image scale on hover",
"scale on hover css",
"scale on hover",
"scale image on hover css",
"transform: scale css hover",
"css scale image hover",
"on hover image zoom",
      )
    ),
    17 =>
    array (
      "link" => "https://webgolovolomki.com/en/how-to-use-css-to-change-the-image-on-hover/",
      "anchors" => array (
        "change image on hover",
"change image on hover css",
"change image on hover with transition",
"css change image on hover",
"css hover change image",
"hover image change css",
"html change image on hover",
"change image hover css",
"change class on scroll javascript",
"hover change image",
      )
    ),
    18 =>
    array (
      "link" => "https://webgolovolomki.com/en/smooth-link-underlining-on-hover-with-pure-css/",
      "anchors" => array (
        "hover underline css",
"smooth underline on hover",
      )
    ),
    19 =>
    array (
      "link" => "https://webgolovolomki.com/free-seo-audit/",
      "anchors" => array (
        "аудит сайта как сделать",
"аудит сайта пример отчета",
"аудит сайта своими руками",
"аудит сайта чек лист",
"аудит сайта что это",
"seo аудит сайта пример",
"seo аудит сайта чек лист",
      )
    ),
    20 =>
    array (
      "link" => "https://webgolovolomki.com/how-add-class-with-scroll/",
      "anchors" => array (
        "добавить класс при прокрутке js",
"при скролле добавить класс js",
      )
    ),
    21 =>
    array (
      "link" => "https://webgolovolomki.com/how-add-font/",
      "anchors" => array (
        "как добавить шрифт на сайт",
"подключить шрифт к сайту",
"как подключать шрифты в css",
"как подключить шрифт из папки",
      )
    ),
    22 =>
    array (
      "link" => "https://webgolovolomki.com/how-black-in-image/",
      "anchors" => array (
        "как сделать затемнение фона css",
"как затемнить изображение css",
"как затемнить фон css",
      )
    ),
    23 =>
    array (
      "link" => "https://webgolovolomki.com/how-center-block/",
      "anchors" => array (
        "как выровнять div по центру",
"как выровнять блок по центру css",
      )
    ),
    24 =>
    array (
      "link" => "https://webgolovolomki.com/how-change-color-in-css/",
      "anchors" => array (
        "как задать цвет текста в css",
"как задать цвет шрифта в css",
"как изменить цвет текста в css",
"как изменить цвет текста в html",
      )
    ),
    25 =>
    array (
      "link" => "https://webgolovolomki.com/how-css-to-html/",
      "anchors" => array (
        "как вставить css в html",
"как привязать css к html",
"как связать html и css",
"как подключить стили css",
"как подключить файл css",
"как подключить css",
"как подключить css в html",
"как подключить css к html",
"как подключить css-файл к документу html",
"как подключить файл css к html",
      )
    ),
    26 =>
    array (
      "link" => "https://webgolovolomki.com/how-disable-copy-website/",
      "anchors" => array (
        "запретить копирование текста css",
"как запретить копирование текста на сайте",
      )
    ),
    27 =>
    array (
      "link" => "https://webgolovolomki.com/how-nomer-click/",
      "anchors" => array (
        "как сделать кликабельный номер телефона на сайте",
"как сделать кликабельный телефон на сайте",
"как сделать номер телефона на сайте кликабельным",
"как сделать телефон кликабельным на сайте",
"как сделать телефон на сайте кликабельным",
"кликабельный номер телефона на сайте",
"кликабельный телефон на сайте",
"кликабельный номер телефона html",
"как сделать номер телефона кликабельным",
      )
    ),
    28 =>
    array (
      "link" => "https://webgolovolomki.com/how-remove-wp-theme/",
      "anchors" => array (
        "как удалить тему wordpress",
      )
    ),
    29 =>
    array (
      "link" => "https://webgolovolomki.com/how-to-enter-to-wp-admin/",
      "anchors" => array (
        "вход в админку wordpress",
"wordpress войти",
"wordpress вход в админку",
"как войти в админку wordpress",
"не могу зайти в админку wordpress",
"как зайти в админ панель wordpress",
"как зайти в админку вордпресс",
"wordpress не могу зайти в админку",
      )
    ),
    30 =>
    array (
      "link" => "https://webgolovolomki.com/how-to-top/",
      "anchors" => array (
        "вывести на первые позиции",
"вывести сайт в первые позиции",
"вывести сайт на первые позиции",
"вывести сайт на первые позиции при поиске",
"вывести сайт первые позиции",
"как вывести сайт в топ самому",
"как вывести сайт на первые позиции",
"как вывести сайт на первые позиции в гугле",
"как вывести сайт на первые позиции в поиске",
"как вывести сайт на первые позиции в поисковиках",
"как вывести свой сайт на первые позиции",
"как вывести свой сайт на первые позиции в поисковике",
      )
    ),
    31 =>
    array (
      "link" => "https://webgolovolomki.com/how-youtube-html/",
      "anchors" => array (
        "как вставить видео в html с youtube",
"как вставить видео с ютуба в html",
"как вставить видео из ютуба в html",
"html вставить видео с youtube",
"как добавить видео с ютуба в html",
"встроить видео с youtube на сайт",
"как вставить ютуб видео в html",
"как вставить видео с ютуба на сайт",
      )
    ),
    32 =>
    array (
      "link" => "https://webgolovolomki.com/internal-linking/",
      "anchors" => array (
        "внутренняя перелинковка",
"внутренняя перелинковка интернет магазина",
"внутренняя перелинковка сайта и основы ссылочного ранжирования",
"внутренняя перелинковка страниц сайта",
"внутренняя перелинковка это",
"грамотная перелинковка",
"зачем нужна перелинковка",
"перелинковка для seo",
"перелинковка интернет магазина",
"перелинковка как сделать",
"перелинковка на сайте",
"перелинковка пример",
"перелинковка сайта",
"перелинковка сайта это",
"перелинковка сайта wordpress",
"перелинковка статей",
"перелинковка страниц",
"перелинковка страниц сайта",
"перелинковка страниц wordpress",
"перелинковка что это",
"перелинковка это",
"перелинковка opencart",
"перелинковка seo",
"перелинковка wordpress",
"правильная перелинковка",
"правильная перелинковка интернет магазина",
"правильная перелинковка на сайте",
"правильная перелинковка страниц",
"правильная перелинковка страниц сайта",
"правильная перелинковка wordpress",
"что такое внутренняя перелинковка сайта",
"что такое перелинковка",
"что такое перелинковка сайта",
"что такое перелинковка страниц на сайте",
"bitrix перелинковка",
"seo перелинковка",
"wordpress внутренняя перелинковка",
"wordpress перелинковка",
      )
    ),
    33 =>
    array (
      "link" => "https://webgolovolomki.com/kak-polzovatsya-rils-v-instagram/",
      "anchors" => array (
        "как пользоваться рилс в Instagram",
"как пользоваться reels в Instagram",
      )
    ),
    34 =>
    array (
      "link" => "https://webgolovolomki.com/kak-popast-v-rekomendacii-v-tiktok/",
      "anchors" => array (
        "как попасть в рекомендации в ТикТок",
      )
    ),
    35 =>
    array (
      "link" => "https://webgolovolomki.com/kak-s-pomoshhyu-css-izmenit-kartinku-pri-navedenii-kursora/",
      "anchors" => array (
        "как изменить картинку при наведении курсора css",
"смена картинки при наведении css",
      )
    ),
    36 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sdelat-effekt-nazhatiya-knopki-na-css/",
      "anchors" => array (
        "как сделать эффект нажатия кнопки css",
      )
    ),
    37 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sdelat-gamburger-menyu-gotovyj-kod-i-podrobnoe-obyasnenie/",
      "anchors" => array (
        "бургер меню css",
"бургер меню css js",
"бургер меню js",
"гамбургер меню",
"гамбургер меню для сайта",
"гамбургер меню css",
"гамбургер меню js",
"гамбургер html",
"как сделать бургер меню js",
"как сделать гамбургер меню",
"как сделать гамбургер меню css",
"burger menu css",
"burger menu",
"меню бургер css",
"как сделать бургер меню",
"бургер меню",
"как сделать бургер меню css",
"меню бургер js",
"как сделать меню бургер",
"бургер меню html",
"готовые бургер меню css",
"burger css",
"меню гамбургер css",
"бургер меню html css",
"бургер меню на чистом css",
"адаптивное меню гамбургер css",
"бургер меню для сайта",
"css меню бургер",
"бургер меню на сайте",
      )
    ),
    38 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sdelat-repost-v-instagrame/",
      "anchors" => array (
        "как сделать репост в инстаграме",
"как сделать репост в инстаграме на айфоне",
"как сделать репост в сторис",
"как сделать репост видео в инстаграме",
"как правильно сделать репост в Instagram",
"как сделать репост чужой сторис в инстаграме",
"как поделиться записью в instagram",
"как поделиться чужой сторис в инстаграме",
      )
    ),
    39 =>
    array (
      "link" => "https://webgolovolomki.com/kak-skachat-video-iz-instagram/",
      "anchors" => array (
        "как скачать видео с Instagram",
"как скачать видео с Instagram на iPhone",
"как скачать видео с Instagram на андроид",
"как скачать видео с Instagram на телефон",
"как скачать видео с Instagram на компьютер",
"как скачать reels с инстаграма",
"как скачать видео сторис с Instagram",
"как скачать stories",
"скачать видео с инстаграма 2023",
      )
    ),
    40 =>
    array (
      "link" => "https://webgolovolomki.com/kak-skryt-svoj-setevoj-status-v-telegram/",
      "anchors" => array (
        "как скрыть в Telegram свой сетевой статус",
"как скрыть свой статус онлайн в Телеграмме",
"как не показывать когда был последний раз в Telegram",
"как работает сетевой статус в Telegram",
"как скрыть сетевой статус в телеграмме на андроид",
"как скрыть сетевой статус в телеграмме на айфоне",
      )
    ),
    41 =>
    array (
      "link" => "https://webgolovolomki.com/kak-uznat-kakaya-tema-wordpress-ustanovlena-na-sajte/",
      "anchors" => array (
        "определить тему wordpress",
"узнать тему вордпресс",
"узнать тему wordpress",
"узнать тему wordpress онлайн",
"как узнать какая тема wordpress на сайте",
"как узнать тему сайта на wordpress",
"как узнать тему wordpress сайта",
      )
    ),
    42 =>
    array (
      "link" => "https://webgolovolomki.com/kak-v-telegramme-vosstanovit-perepisku/",
      "anchors" => array (
        "как в Телеграмме восстановить переписку",
"как восстановить удаленные разговоры в Telegram",
"как восстановить удаленную переписку в Telegram",
"как вернуть удаленное сообщение в Telegram",
"как восстановить чат в Telegram",
"как восстановить переписку в Телеграмме",
      )
    ),
    43 =>
    array (
      "link" => "https://webgolovolomki.com/kak-v-wordpress-sdelat-straniczu-glavnoj/",
      "anchors" => array (
        "главная страница wordpress",
"изменить главную страницу wordpress",
"как в вордпресс сделать главную страницу",
"как в wordpress сделать страницу главной",
"как сделать страницу главной в wordpress",
"как сделать страницу главной wordpress",
"как назначить главную страницу в wordpress",
      )
    ),
    44 =>
    array (
      "link" => "https://webgolovolomki.com/kak-vyrovnyat-kartinku-po-czentru-s-pomoshhyu-css/",
      "anchors" => array (
        "выровнять изображение по центру css",
"выровнять картинку по центру",
"выровнять картинку по центру css",
"выровнять картинку по центру div",
"изображение по центру css",
"как в css выровнять картинку по центру",
"как выровнять изображение по центру css",
"как выровнять картинку по центру",
"как выровнять картинку по центру блока",
"как выровнять картинку по центру в css",
"как выровнять картинку по центру css",
"как разместить картинку по центру",
"картинку по центру css",
"css изображение по центру",
"css картинка по центру",
"css картинка по центру блока",
"css картинка по центру по горизонтали",
"как выровнять картинку",
"как выровнять картинку по вертикали css",
"css выровнять картинку по центру",
"расположить картинку по центру css",
"как поставить картинку по центру в css",
"разместить картинку по центру css",
      )
    ),
    45 =>
    array (
      "link" => "https://webgolovolomki.com/knopka-s-blikom-kak-sdelat-animirovannyj-blik-na-chistom-css/",
      "anchors" => array (
        "анимация блика css",
"блик на кнопке css",
      )
    ),
    46 =>
    array (
      "link" => "https://webgolovolomki.com/plavnoe-podcherkivanie-ssylki-pri-navedenii-na-chistom-css/",
      "anchors" => array (
        "плавное подчеркивание css",
"подчеркивание ссылок при наведении css",
"подчеркивание ссылки css",
"убрать подчеркивание ссылки при наведении css",
      )
    ),
    47 =>
    array (
      "link" => "https://webgolovolomki.com/poyavlenie-elementov-pri-skrolle/",
      "anchors" => array (
        "анимация блоков при скролле страницы",
"анимация плавного появления css",
"анимация появления блока",
"анимация появления блока при скролле",
"анимация появления блока css",
"анимация появления блока js",
"анимация появления css",
"анимация при появлении блока css",
"анимация при прокрутке страницы",
"анимация при прокрутке страницы css",
"анимация при скролле",
"анимация при скролле css",
"анимация при скролле js",
"анимация css появление",
"всплывающий блок при прокрутке страницы",
      )
    ),
    48 =>
    array (
      "link" => "https://webgolovolomki.com/questions/how-remove-padding-margin-last-of-type/",
      "anchors" => array (
        "как убрать отступ у последнего элемента css",
"убрать отступ у последнего элемента css",
      )
    ),
    49 =>
    array (
      "link" => "https://webgolovolomki.com/questions/how-to-center-placeholder-text-input/",
      "anchors" => array (
        "placeholder по центру",
"как выровнять placeholder",
      )
    ),
    50 =>
    array (
      "link" => "https://webgolovolomki.com/smm-manager-what-do/",
      "anchors" => array (
        "что делает SMM менеджер",
"кто такой SMM-щик",
"что должен делать смм менеджер",
"что входит в обязанности smm-специалиста",
"сколько зарабатывает smm менеджер",
"зарплата smm менеджера",
      )
    ),
    51 =>
    array (
      "link" => "https://webgolovolomki.com/test-css/",
      "anchors" => array (
        "тест по css с ответами",
"вопросы по css",
      )
    ),
    52 =>
    array (
      "link" => "https://webgolovolomki.com/title-in-wordpress/",
      "anchors" => array (
        "как изменить title в wordpress",
"title в wordpress",
      )
    ),
    53 =>
    array (
      "link" => "https://webgolovolomki.com/uk/how-add-css-ua/",
      "anchors" => array (
        "як підключити шрифти в css",
      )
    ),
    54 =>
    array (
      "link" => "https://webgolovolomki.com/uk/how-center-image/",
      "anchors" => array (
        "як вирівняти картинку по центру ",
"центрування картинки css",
      )
    ),
    55 =>
    array (
      "link" => "https://webgolovolomki.com/uk/how-insert-css-in-html-ua/",
      "anchors" => array (
        "як підключити файл css до html",
"як підключити стилі css",
      )
    ),
    56 =>
    array (
      "link" => "https://webgolovolomki.com/uk/pravylno-pidkliuchaiemo-javascript-do-html/",
      "anchors" => array (
        "як підключити js до html",
"підключення js до html",
      )
    ),
    57 =>
    array (
      "link" => "https://webgolovolomki.com/uk/shcho-robyt-smm-menedzher/",
      "anchors" => array (
        "що робить SMM менеджер",
"хто такий SMM-ник",
"що повинен робити смм менеджер",
"що входить в обов’язки smm-фахівця",
"скільки заробляє smm менеджер",
"зарплата smm менеджера",
      )
    ),
    58 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-korystuvatys-rils-v-instahram/",
      "anchors" => array (
        "як користуватись рілс в Instagram",
"як користуватись reels в Instagram",
      )
    ),
    59 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-potrapyty-v-rekomendatsii-v-tiktok/",
      "anchors" => array (
        "як потрапити в рекомендації в ТікТок",
      )
    ),
    60 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-prykhovaty-svii-merezhevyi-status-u-telegram/",
      "anchors" => array (
        "як приховати в Telegram свій мережевий статус",
"як приховати свій статус онлайн в Телеграмі",
"як не показувати коли був останній раз в Telegram",
"як працює мережевий статус в Telegram",
"як приховати мережевий статус в Телеграмі на андроїд",
"як приховати мережевий статус в Телеграмі на айфоні",
      )
    ),
    61 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-skachaty-video-z-instagram/",
      "anchors" => array (
        "як скачати відео з Instagram",
"як скачати відео з Instagram на айфон",
"як скачати відео з Instagram на андроїд",
"як скачати відео з Instagram на телефон",
"як скачати відео з Instagram на комп’ютер",
"як скачати reels з інстаграму",
"як скачати відео історію з інстаграма",
"як скачати stories",
      )
    ),
    62 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-v-telehrami-vidnovyty-perepysku/",
      "anchors" => array (
        "як в Телеграмі відновити переписку",
"як відновити видалені розмови в Telegram",
"як відновити вилучену переписку в Telegram",
"як відновити повідомлення в Telegram",
"як відновити чат в Telegram",
"як відновити листування в Телеграмі",
      )
    ),
    63 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zadaty-kolir-tekstu-v-css-zminiuiemo-kolir-tekstu-za-dopomohoiu-styliv/",
      "anchors" => array (
        "як змінити колір тексту в css",
"колір тексту css",
      )
    ),
    64 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zakomentuvaty-kod-u-css/",
      "anchors" => array (
        "як закоментувати в css",
"як правильно додавати коментарі в css документ",
      )
    ),
    65 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zminyty-kolir-knopky-povna-instruktsiia-dlia-novachkiv/",
      "anchors" => array (
        "как изменить цвет кнопки в html",
"как задать цвет кнопки css",
      )
    ),
    66 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zrobyty-repost-v-instahrami/",
      "anchors" => array (
        "як зробити репост в інстаграмі",
"як зробити репост в інстаграмі на айфоні",
"як зробити репост в сторіс",
"як зробити репост відео в інстаграмі",
"як правильно зробити репост в Instagram",
"як зробити репост чужої історії в інстаграмі",
"як поширити допис в instagram",
"як поширити чужу історію в інстаграмі",
      )
    ),
    67 =>
    array (
      "link" => "https://webgolovolomki.com/ultimativnyj-gajd-vse-pro-indeksacziyu-sajta-na-wordpress/",
      "anchors" => array (
        "wordpress индексация в поисковиках",
"индексация сайта на вордпресс",
      )
    ),
    68 =>
    array (
      "link" => "https://webgolovolomki.com/what-is-html-for-beginners/",
      "anchors" => array (
        "что такое html простыми словами",
"что такое верстка сайта простыми словами",
      )
    ),
    69 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-stvoryty-hrupu-v-telegram/",
      "anchors" => array (
        "як створити групу в Telegram",
"як створити групу в Телеграмі на телефоні",
"створити групу в Телеграмі на айфоні",
"як створити групу в Telegram для Android iOS і Windows",
"як створити закриту групу в Телеграмі",
"створити публічну групу в Телеграмі",
"як зробити свою групу в Telegram",
"як створити чат в Telegram",
"створити окремий чат в Телеграмі",
      )
    ),
    70 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sozdat-gruppu-v-telegram/",
      "anchors" => array (
        "как создать группу в Telegram",
"как создать группу в Телеграме на телефоне",
"создать группу в Телеграме на айфоне",
"как создать группу в Telegram для Android iOS и Windows",
"как создать закрытую группу в Телеграме",
"создать публичную группу в Телеграме",
"как сделать свою группу в Telegram",
"как создать чат в Telegram",
"создать отдельный чат в Телеграме",
      )
    ),
    71 =>
    array (
      "link" => "https://webgolovolomki.com/uk/shcho-robyty-yakshcho-zablokuvaly-instahram/",
      "anchors" => array (
        "заблокували Instagram на 30 днів",
"заблокували Інстаграм через вік",
"заблокували сторінку в Instagram",
"тимчасово заблокували Інстаграм",
"як розблокувати сторінку в Instagram",
"як розблокувати акаунт в інстаграмі",
"як відновити Instagram",
"обліковий запис Instagram заблоковано",
"як відновити тимчасово заблокований аккаунт Instagram",
"як зрозуміти що забанили в Інстаграмі",
      )
    ),
    72 =>
    array (
      "link" => "https://webgolovolomki.com/chto-delat-esli-zablokirovali-instagram/",
      "anchors" => array (
        "заблокировали Instagram на 30 дней",
"заблокировали Инстаграм через возраст",
"заблокировали страницу в Instagram",
"временно заблокировали Инстаграм",
"как разблокировать страницу в Instagram",
"как разблокировать аккаунт в инстаграмме",
"как восстановить Instagram",
"аккаунт Instagram заблокирован",
"как восстановить временно заблокированный аккаунт Instagram",
"как понять что забанили в Инстаграмме",
      )
    ),
    73 =>
    array (
      "link" => "https://webgolovolomki.com/uk/nick-v-telegram/",
      "anchors" => array (
        "що таке юзернейм в Телеграм",
"як змінити ім’я користувача в Telegram",
"як дізнатися свій ник в Телеграмі",
"як створити ім’я в Телеграмі",
"як скопіювати nickname в Telegram",
      )
    ),
    74 =>
    array (
      "link" => "https://webgolovolomki.com/nick-v-telegram/",
      "anchors" => array (
        "что такое юзернейм в Telegram",
"как изменить имя пользователя в Telegram",
"как узнать свой ник в Telegram",
"как создать имя в Telegram",
"как скопировать nickname в Telegram",
      )
    ),
    75 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-stvoryty-v-telegram-svii-kanal/",
      "anchors" => array (
        "інструкція як створити в Телеграмі канал",
"як створити телеграм-канал",
"створити свій канал в Telegram із коментарями",
"як створити в Telegram свій канал",
      )
    ),
    76 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sozdat-v-telegram-svoj-kanal/",
      "anchors" => array (
        "инструкция как создать в Телеграме канал",
"как создать Telegram-канал",
"создать свой канал в Telegram с комментариями",
"как создать в Telegram свой канал",
      )
    ),
    77 =>
    array (
      "link" => "https://webgolovolomki.com/uk/rozkadrovka-video-shcho-tse-take-ta-yak-robyty/",
      "anchors" => array (
        "як робити розкадрування",
"з чого почати розкадрування",
"‎як зробити розкадровку відео",
"розкадровка відео простими словами",
      )
    ),
    78 =>
    array (
      "link" => "https://webgolovolomki.com/raskadrovka-video-chto-eto-takoe-i-kak-delat/",
      "anchors" => array (
        "как делать раскадрование",
"с чего начать раскадрование",
"как сделать раскадровку видео",
"раскадровка видео простыми словами",
      )
    ),
    79 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-vydalyty-akaunt-v-instahrami/",
      "anchors" => array (
        "видалити акаунт в Instagram на iPhone",
"видалити акаунт в Instagram на Android",
"як видалити свій акаунт в Instagram",
"покрокова інструкція як видалити акаунт в Інстаграмі",
"видалення облікового запису Instagram",
"як заморозити сторінку в Інстаграмі",
"як видалити сторінку в Інстаграм тимчасово",
"як видалити сторінку в інстаграм з комп'ютера",
      )
    ),
    80 =>
    array (
      "link" => "https://webgolovolomki.com/kak-udalit-akkaunt-v-instagrame/",
      "anchors" => array (
        "удалить аккаунт в Instagram на iPhone",
"удалить аккаунт в Instagram на Android",
"как удалить свой аккаунт в Instagram",
"пошаговая инструкция как удалить аккаунт в Instagram",
"удаление аккаунта Instagram",
"как заморозить страницу в Instagram",
"как удалить страницу в Instagram временно",
"как удалить страницу в Instagram с компьютера",
      )
    ),
    81 =>
    array (
      "link" => "https://webgolovolomki.com/uk/highlights-v-instagrami/",
      "anchors" => array (
        "як зробити Highlights в Інстаграмі",
"де знайти Highlights в Інстаграм",
"як додати хайлайтс в Інстаграм",
"для чого потрібен хайлайтс в Інстаграмі",
"ідеї для Highlights",
"як додати сторіс в хайлайтс",
      )
    ),
    82 =>
    array (
      "link" => "https://webgolovolomki.com/highlights-v-instagrame/",
      "anchors" => array (
        "как сделать Highlights в Instagram",
"где найти Highlights в Instagram",
"как добавить хайлайтс в Инстаграм",
"для чего нужен хайлайтс в Instagram",
"идеи для Highlights",
"добавить в хайлайтс",
      )
    ),
    83 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zarobliaty-v-instagram/",
      "anchors" => array (
        "як заробляти в Інстаграмі на лайках",
"як можна заробити в Інстаграмі у 2023 році",
"скільки можна заробляти в Інстаграмі",
"скільки заробляють блогери мільйонники",
"скільки заробляють блогери в місяць",
"як заробити гроші в Instagram",
      )
    ),
    84 =>
    array (
      "link" => "https://webgolovolomki.com/kak-zarabatyvat-v-instagram/",
      "anchors" => array (
        "как зарабатывать в Instagram на лайках",
"как можно заработать в Instagram в 2023 году",
"сколько можно зарабатывать в Instagram",
"сколько зарабатывают блоггеры миллионники",
"сколько зарабатывают блоггеры в месяц",
"как заработать деньги в Instagram",
      )
    ),
    85 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zrobyty-stikery-v-telegram/",
      "anchors" => array (
        "стікери в Telegram",
"як зробити стікери в Telegram",
"як додати стікери в Telegram",
"розмір та формат стікерів в Telegram",
"як зробити анімовані стікери в Telegram",
"інструменти для створення стікерів в Telegram",
"рекомендації щодо створення стікерів в Telegram",
"як додати стікери до свого набору в Telegram",
"як додати набір стікерів до Telegram-каналу",
"розміщення стікерів в магазині стікерів Telegram",
      )
    ),
    86 =>
    array (
      "link" => "https://webgolovolomki.com/kak-sdelat-stikery-v-telegram/",
      "anchors" => array (
        "стикеры в Telegram",
"как сделать стикеры в Telegram",
"как добавить стикеры в Telegram",
"размер и формат стикеров в Telegram",
"как сделать анимированные стикеры в Telegram",
"инструменты для создания стикеров в Telegram",
"рекомендации по созданию стикеров в Telegram",
"добавить стикеры в свой набор в Telegram",
"как добавить набор стикеров к Telegram-каналу",
"размещение стикеров в магазине стикеров Telegram",
      )
    ),
    87 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-ochystyty-kesh-v-telegram/",
      "anchors" => array (
        "кеш Telegram",
"обсяг кешу Telegram",
"видалення кешу Telegram",
"очистити кеш Telegram на Android",
"очистити кеш Telegram на iOS",
"як очистити кеш Telegram на комп'ютері",
"що буде якщо очистити кеш в Telegram",
"проблеми з кешем Telegram",
"видалення тимчасових файлів Telegram",
"видалення кешу медіафайлів в Telegram",
      )
    ),
    88 =>
    array (
      "link" => "https://webgolovolomki.com/kak-ochistit-kesh-v-telegram/",
      "anchors" => array (
        "кэш Telegram",
"объем кэша Telegram",
"удаление кэша Telegram",
"очистить кэш Telegram на Android",
"очистить кэш Telegram на iOS",
"как очистить кэш Telegram на компьютере",
"что будет если очистить кэш в Telegram",
"проблемы с кэшем Telegram",
"удаление временных файлов Telegram",
"удаление кэша медиафайлов в Telegram",
      )
    ),
    89 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-poskarzhytysia-na-telegram-kanal-detalna-instruktsiia/",
      "anchors" => array (
        "як подати скаргу на Telegram канал",
"як відправити скаргу на Telegram канал",
"як пожалітися на Telegram канал",
"як звернутися до адміністрації Telegram каналу",
"які порушення вважаються недопустимими на Telegram каналах",
"як заблокувати Telegram канал",
"що робити якщо Telegram канал порушує законодавство",
      )
    ),
    90 =>
    array (
      "link" => "https://webgolovolomki.com/kak-pozhalovatsya-na-telegram-kanal-podrobnaya-instrukciya/",
      "anchors" => array (
        "как подать жалобу на Telegram канал",
"как отправить жалобу на Telegram канал",
"как пожаловаться на Telegram канал",
"как обратиться в администрацию Telegram канала",
"какие нарушения считаются недопустимыми на Telegram каналах",
"как заблокировать Telegram канал",
"что делать если Telegram канал нарушает законодательство",
      )
    ),
    91 =>
    array (
      "link" => "https://webgolovolomki.com/uk/yak-zavantazhyty-holosove-povidomlennia-v-telegram/",
      "anchors" => array (
        "завантажити голосове повідомлення в Telegram",
"як скачати голосове повідомлення в Telegram",
"як зберегти голосове повідомлення в Telegram",
      )
    ),
    92 =>
    array (
      "link" => "https://webgolovolomki.com/kak-zagruzit-golosovoe-soobshchenie-v-telegram/",
      "anchors" => array (
        "скачать голосовое сообщение в Telegram",
"как скачать голосовое сообщение в Telegram",
"как сохранить голосовое сообщение в Telegram",
      )
    ),
    // 93 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 94 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 95 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 96 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 97 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 98 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 99 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 100 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 101 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 102 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 103 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 104 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 105 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 106 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 107 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 108 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 109 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 110 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 111 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 112 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 113 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 114 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 115 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 116 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 117 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 118 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 119 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 120 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 121 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 122 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 123 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 124 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 125 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 126 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 127 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 128 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 129 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 130 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 131 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 132 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 133 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 134 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 135 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 136 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 137 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 138 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 139 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 140 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 141 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 142 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 143 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 144 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 145 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 146 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 147 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 148 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 149 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 150 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 151 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 152 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 153 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 154 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 155 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 156 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 157 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 158 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 159 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 160 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 161 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 162 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 163 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 164 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 165 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 166 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 167 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 168 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 169 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 170 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 171 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 172 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 173 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 174 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 175 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 176 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 177 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 178 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 179 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 180 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 181 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 182 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 183 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 184 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 185 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 186 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 187 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 188 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 189 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 190 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 191 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 192 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 193 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 194 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 195 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 196 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 197 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 198 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 199 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
    // 200 =>
    // array (
    //   "link" => "",
    //   "anchors" => array (
        
    //   )
    // ),
  );

  return $webg_links;
}
?>