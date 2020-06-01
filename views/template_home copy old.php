<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title><?= $title ?></title>
    <style><?= $style ?></style>
    
  <style type="text/css">
   /*.header, .sidebar, .content, .footer { 
    /*padding: 10px; /* Поля */
    /*border: solid 1px #000; /* Параметры рамки */
    /*background: #e3e8cc; /* Цвет фона */
  /* }
  /* .header { /* Верхняя часть с заголовком */
  /*  background: #e3e8cc; /* Цвет фона */
  /*  font-size: 24px; /* Размер шрифта */
  /* }
   .layout {
    margin: 15px 0; /* Отступы сверху и снизу */ 
  /*  overflow: hidden; /* Отменяем действие float */
  /*  min-width: 800px; /* Минимальная ширина */
  /*  max-width: 1200px; /* Максимальная ширина */
  /* } */
   .sidebar { /* Левая колонка главной части */
    width: 84mm; /* Ширина левой колонки */
    margin-left: 0;
    float: left; /* Состыковка с другим слоем по горизонтали */
    margin-right: 20px;
   }
 </style>  
</head>
<body>
  <!-- Контакты --> 
    <nav class="navbar navbar-dark text-white bg-dark">
      <form class="col-3.3 form-inline">
        <a class="navbar-brand">Мы в социальных сетях</a>
        <a title="Мега-Кератин в Youtube" href="https://www.youtube.com/channel/UCBxbCoVt9BoMcqnBfERqB1g/videos" target="_blank" class="badge badge-dark" rel="nofollow">
          <svg class="bi bi-caret-right-square-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
          </svg>
        </a>
        <a title="Мега-Кератин в Instagram" href="https://www.instagram.com/mega_keratin" target="_blank" class="badge badge-dark" rel="nofollow">
          <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
          </svg>
        </a>
        <a title="Мега-Кератин ВКонтакте" href="https://vk.com/megakeratin" target="_blank" class="badge badge-dark" rel="nofollow">BK</a>
      </form>
      
      <form class="col-8.5 form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="Поиск" aria-label="Search">
        <button class="btn btn-outline-light text-white my-2 my-sm-0" type="submit">Поиск</button>
        
        <div class="col-auto header-tel">
          <a class="text-white" style="font-size: 1.4rem;" href="tel:88002007455">8 (800) 200-74-55</a>
          <span>по России</span>
        </div>
        <div class="col-auto header-tel">
          <a class="text-white" style="font-size: 1.4rem;" href="tel:+74991134777">8 (499) 11-34-777</a>
          <span>для других стран</span>
        </div>
      </form>
    </nav>
    
    
    <div class="col-12"> 
      <div class="row">
      <!-- Бренд -->   
        <div class="col-4" style="position: relative; left: 32%">
          <img src="/mega/resource/img/brand.png" class="mw-100" style="" alt="Мега-кератин">
        </div>
      <!-- Корзина покупок --> 
        <div class="col-2" style="position: relative; left: 45%">
          <a href=""> <img src="/mega/resource/img/basket.png" class="mw-100" style="" alt="Ваша корзина"></a>
        </div>
      </div>  
    </div>
    
    
  <!-- Навигация -->   
    <nav class="navbar bg-white text-body">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle  text-uppercase dropdown-item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Бренды</b></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">ZOOM</a>
          <a class="dropdown-item" href="#">NATUREZA</a>
          <a class="dropdown-item" href="#">VOGUE</a>
          <a class="dropdown-item" href="#">LOVE POTION</a>
          <a class="dropdown-item" href="#">BOMBSHELL</a>
          <a class="dropdown-item" href="#">BRASILIAN HAIR SEDUCTION</a>
          <a class="dropdown-item" href="#">EVOQUE</a>
          <a class="dropdown-item" href="#">ELEMENTS</a>
          <a class="dropdown-item" href="#">BRAZILIAN BLOWOUT</a>
          <a class="dropdown-item" href="#">DAVINES</a>
        </div>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Оплата и доставка</b></a>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Оптовый прайс</b></a>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Обучение</b></a>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Выбор состава</b></a>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Вопросы и ответы</b></a>
      </div>
      <div class="dropdown">
        <a class="btn btn-secondary text-uppercase dropdown-item" href="#"><b>Контакты</b></a>
      </div>
    </nav>   
  <!-- Карусель -->  
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/mega/resource/img/gift1200b.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/mega/resource/img/nat1200b.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/mega/resource/img/webinar1200b.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  <!-- белая разделительная полоса под каруселью -->
  <div class="col-12 bg-white" style="height: 40px"></div>
  
  <!-- главная часть сайта - начало -->
  <div class="">
    <div class="row">
      <!-- главная часть сайта - конец - 2 дива -->
    </div>
  </div>     
      
      
  <!-- Левая колонка - постоянная - начало -->    
      <div class="container sidebar" style="width: 84mm; float: left; margin-right: 20px;">
    <!-- Левая колонка - вертикальное меню в левой колонке -->
        <div class="btn-group-vertical">
          <div class="dropdown text-body text-center" id="mobile-menu">
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">ПРОБНЫЕ НАБОРЫ</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">СПЕЦПРЕДЛОЖЕНИЯ</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">КЕРАТИН</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">БОТОКС ДЛЯ ВОЛОС</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">НАНОПЛАСТИКА</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">ШГО 1 ЭТАП</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">МАСКИ 3 ЭТАП</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">ИНСТРУМЕНТЫ</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">ХОЛОДНОЕ ВОССТАНОВЛЕНИЕ</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">ДОМАШНИЙ УХОД</a>
            <a class="btn btn-dark text-uppercase dropdown-item border rounded-0 border-white" style="font-size: 1.2rem; background: #DCDCDC; padding: 9px;" href="#">БИОЗАВИВКА BOOST UP</a>
          </div> 
        </div>
  <!-- Левая колонка - белая разделительная полоса над ВК -->  
        <div class="bg-white" style="height: 20px"></div>
  
  <!-- Левая колонка - страница ВК --> 
        <div class="wrapper">
        <script src="//vk.com/js/api/openapi.js" async="async"></script>
          <div id="vk_groups" style="background: none; height: 340.9px;">
            <iframe name="fXDa9122" height="280" id="vkwidget1" src="https://vk.com/widget_community.php?app=0&amp;width=298px&amp;_ver=1&amp;gid=30833979&amp;mode=4&amp;color1=f3f3f3&amp;color2=2B587A&amp;color3=5B7FA6&amp;class_name=&amp;no_cover=1&amp;height=280&amp;url=https%3A%2F%2Fwww.mega-keratin.ru%2Fcontent%2F23%2Fobuchenie%2F1%2F&amp;referrer=https%3A%2F%2Fwww.mega-keratin.ru%2Fcontent%2F23%2Fobuchenie%2F1%2F&amp;title=%D0%9E%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5%20-%20%D0%B8%D0%BD%D1%82%D0%B5%D1%80%D0%BD%D0%B5%D1%82-%D0%BC%D0%B0%D0%B3%D0%B0%D0%B7%D0%B8%D0%BD%20%C2%AB%D0%9C%D0%B5%D0%B3%D0%B0-%D0%9A%D0%B5%D1%80%D0%B0%D1%82%D0%B8%D0%BD%C2%BB&amp;172459b8576" frameborder="0" scrolling="no" style="height: 340.9px; overflow: hidden;"></iframe>
          </div>
        </div>
        
    <!-- Левая колонка - Хиты продаж -->     
        <div class="wrapper panel">
          <div class="panel-head text-uppercase bg-dark text-white text-center border rounded-0 border-white" style="margin-right: -1rem; font-size: 1.2rem; padding: 9px;">Хиты продаж</div>
          <div class="panel-main bg-light text-dark">
            
            <div class="row col-clear shop-small-list border rounded-0 border-white" style="margin-left: 0.1rem; height: 90px; font-size: 0.9rem; background: #DCDCDC;">
              <div class="col-3"> <img title="Ботокс для волос NATUREZA NTOX Massa (для всех типов волос) 1000 ml" width="" height="70" alt="" src="/mega/resource/img/products/Ntox1000.jpg"></div>
              <div class="col">
                <div> <a title=" Ботокс для волос NATUREZA NTOX Massa 1000 ml - Ботокс для волос NATUREZA NTOX Massa (для всех типов волос) 1000 ml" class="stip text-dark" href="">Ботокс для волос NATUREZA NTOX Massa 1000 ml</a> </div> 
                <div class="text-bold"><b>5.000,00 руб.</b><span class="sup">* <s>5.500,00 руб.</s></span></div>
              </div>
            </div>
            
            <div class="row col-clear shop-small-list border rounded-0 border-white" style="margin-left: 0.1rem; height: 90px; font-size: 0.9rem; background: #DCDCDC;">
              <div class="col-3"> <img title="Нанопластика VOGUE Orghanlux 1000 ml"  width="" height="70" alt="" src="/mega/resource/img/products/Vogue1000.jpg"> </div>
              <div class="col"> 
                <div> <a title=" Нанопластика VOGUE Orghanlux 1000 ml - Нанопластика VOGUE Orghanlux 1000 ml" class="stip text-dark" href="">Нанопластика VOGUE Orghanlux 1000 ml</a> </div> 
                <div class="text-bold"><b>6.000,00 руб.</b><span class="">* <s>8.500,00 руб.</s></span></div>
              </div>
            </div>
            
            <div class="row col-clear shop-small-list border rounded-0 border-white" style="margin-left: 0.1rem; height: 90px; font-size: 0.9rem; background: #DCDCDC;">
              <div class="col-3"> <img title="Ботокс для волос ZOOM BTX Diamond 1000 ml" width="" height="70" alt="" src="/mega/resource/img/products/b_zoom_1000.jpg"> </div>
              <div class="col">
                <div> <a title=" Ботокс для волос ZOOM BTX Diamond 1000 ml - Ботокс для волос ZOOM BTX Diamond 1000 ml" class="stip text-dark" href=""> Ботокс для волос ZOOM BTX Diamond 1000 ml</a> </div>
                <div class="text-dark"><b>8.500,00 руб.</b><span class="sup">* <s></s></span></div>
              </div>
            </div>
          </div>  
        </div>  
            
  <!-- Левая колонка - конец - 1 див -->          
      </div>
   
      
      
      
      
  <!-- Правая главная колонка основного - например, КАРТОЧКА ТОВАРА ИНДИВИДУАЛЬНАЯ С ОПИСАНИЕМ - изменяемая, берется из контента -->
  
  <?= $content ?>  
  
  <style> 
    DIV.brends-item > A {   /* ссылки брендов продуктов */
    margin: 23px 50px 23px;
    padding: 30px; 
   }
 
   .training { /* картинка с обучением */
    margin-left: 0px;
    margin-bottom: -24px;
    padding-bottom: 0px;
    z-index: 1;
   }
   .training-box { /* блок с обучением внутри картинки */
    position: relative;
    transform: translateX(-50%);
    top: -200px; /* Сдвигаем текст вверх */
    left: 50%; /* Сдвигаем текст влево */
    z-index: 4;
   }
   .training-info { /* текст внутри блока обучения */
    background-color:  rgba(255, 255, 255, .5);
    margin-bottom: 10px;
   }
   .training-link { /* кнопка внутри блока обучения */
    padding: 1px 15px 1px;
   }
 </style>     
      
  
  
  
  
  <!-- главная страница -->  
      <div class="">
        <div class="content right">
          <div class="breadcrumb bg-white"></div>
          <div class="row wrapper" style="margin: 20px;">
            <div class="bg-white" style="height: 1px"></div>
            <h3 class="col-md-12 box-title" align="center">НАШИ БРЕНДЫ</h3>
            <div class="col-md-12 bg-white" style="height: 10px"></div>
            <div class="clearfix" style="padding-left: 20px; padding-right: 20px;">
              <div class="bg-white" style="height: 1px"></div>


     <!-- бренды со ссылками -->  
              <div class="slide-box"> 
                <div class="slide-main" style="display: block;"> 
                  <div class="brends-item  row justify-content-center"> 
                    <a href="/shop/show-products/96/1/50/zoom/#focushere"> <img src="/mega/resource/img/brand/zoom_b.jpg" alt="Zoom Cosmetics"> </a> 
                    <a href="/shop/show-products/98/1/50/vogue/#focushere"> <img src="/mega/resource/img/brand/Vogue.jpg" alt="Vogue Cosmetics"> </a> 
                    <a href="/shop/show-products/97/1/50/natureza/#focushere"> <img src="/mega/resource/img/brand/Natureza.jpg" alt="Natureza Cosmetics"> </a> 
                    <a href="/shop/show-products/9/1/50/brasilian-hair-seduction/#focushere"> <img src="/mega/resource/img/brand/bhsnew.jpg" alt="Brasilian Hair Seduction"> </a> 
                    <a href="/shop/show-products/73/1/50/bombshell-gloss/#focushere"> <img src="/mega/resource/img/brand/bombshell.jpg" alt="Bombshell Gloss"> </a> 
                    <a href="/shop/show-products/89/1/50/love-potion/#focushere"> <img src="/mega/resource/img/brand/love_potion.jpg" alt="Love Potion"> </a> 
                    <a href="/shop/show-products/77/1/50/evoque/#focushere"> <img src="/mega/resource/img/brand/evoque.jpg" alt="Evoque"> </a> 
                    <a href="/shop/show-products/93/1/50/elements/#focushere"> <img src="/mega/resource/img/brand/elements.jpg" alt="Elements"> </a> 
                    <a href="/shop/show-products/14/1/50/brazilian-blowout/#focushere"> <img src="/mega/resource/img/brand/brazilian_blowout.jpg" alt="Brazilian Blowout"> </a> 
                  </div> 
                </div> 
              </div> 

      <!-- еще 2 дива -->  
            </div>
          </div>
      <!-- белая разделительная полоса над картинкой -->
          <div class="col-12 row" style="height: 45px"></div>
      <!-- картинка с обучением -->
          <div class="training col-12 row">
            <img src="/mega/resource/img/training.jpg" class="d-block w-100" alt="Пройди обучение в нашем тренинг-центре или в формате Online"> 
            <div class="training-box col-3 row justify-content-center"> 
              <div class="training-info text-center"> Пройди обучение в нашем тренинг-центре или в формате Online </div> 
              <a class="training-link btn border rounded-0 border-white text-white" href="/content/23/obuchenie/1/"> ПОДРОБНЕЕ </a> 
            </div> 
          </div> 
            
      <!-- оставшиеся 2 дива -->      
        </div>
      </div>
      
        

      
        
          
  

            

  
  <!-- белая разделительная полоса над футером -->
  <div class="col-12 row bg-white border-bottom border-dark" style="height: 25px"></div>
  <div class="col-12 bg-white" style="height: 25px"></div>

  <!-- Футер - подвал верхняя часть - начало -->
  <div class="container col-12">
    <div class="row col-clear">
      
  <!-- Левая колонка - футер -->    
      <div class="col-md-5 show-md">
        <div class="btn-group-vertical">
          <div class="dropdown text-body text" id="mobile-menu">
            <div class="text-uppercase border-bottom border-dark rounded-0" style="font-size: 1.2rem; padding-left: 0px;" href="">Покупателям</div>
            <a title="Инструкции по применению" class="btn btn-light dropdown-item" style="padding-left: 0px;" href="#" target="_self">Инструкции по применению</a>
            <a title="Пользовательское соглашение" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Пользовательское соглашение</a>
            <a title="Соглашение о cookies" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Соглашение о собираемых данных</a>
            <a title="Возврат и обмен продукции" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Возврат и обмен продукции</a>
            <a title="Полезные статьи" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Полезные статьи</a>
          </div>
        </div>
      </div>
      
  <!-- Средняя колонка - футер -->    
      <div class="col-md-3 show-md">
        <div class="btn-group-vertical">
          <div class="dropdown text-body text" id="mobile-menu">
            <div class="text-uppercase border-bottom border-dark rounded-0" style="font-size: 1.2rem; padding-left: 0px;" href="">Информация</div>
            <a title="О компании" class="btn btn-light dropdown-item" style="padding-left: 0px;" href="#" target="_self">О компании</a>
            <a title="Оплата и доставка" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Оплата и доставка</a>
            <a title="Опт и сотрудничество" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Опт и сотрудничество</a>
            <a title="Сертификаты качества" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Сертификаты качества</a>
            <a title="Наши контакты" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="#" target="_self">Наши контакты</a>
          </div>
        </div>
      </div>
      
  <!-- Правая колонка - футер -->    
      <div class="col-md-4 show-md">
        <div class="btn-group-vertical position-relative" style="width: 100%; margin-left: 0px;">
          <div class="dropdown text-body text-right" id="mobile-menu" style="width: 100%;">
            <div class="text-uppercase border-bottom border-dark rounded-0" style="font-size: 1.2rem; padding-bottom: 0px;" href="">Контакты</div>
            
            <a href="tel:88002007455" class="text-dark" style="font-size: 1.6rem;">8 (800) 200-74-55</a>
            <div class="text-uppercase" style="font-size: 0.7rem; padding-top: 0px; padding-bottom: 6px;">звонок по России бесплатный</div>
            <a href="tel:+74991134777" class="text-dark" style="font-size: 1.6rem;">8 (499) 11-34-777</a>
            <div class="text-uppercase" style="font-size: 0.7rem; padding-top: 0px; padding-bottom: 6px;">для других стран</div>
             
            <div class="form-inline">
              <a title="Мега-Кератин ВКонтакте" href="https://vk.com/megakeratin" target="_blank" class="badge badge-dark"  style="font-size: 1.5rem;" rel="nofollow">BK</a>
      
              <a title="Мега-Кератин в Youtube" href="https://www.youtube.com/channel/UCBxbCoVt9BoMcqnBfERqB1g/videos" target="_blank" class="badge badge-dark" rel="nofollow">
                <svg class="bi bi-caret-right-square-fill" width="2.5em" height="2.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm5.5 10a.5.5 0 0 0 .832.374l4.5-4a.5.5 0 0 0 0-.748l-4.5-4A.5.5 0 0 0 5.5 4v8z"/>
                </svg>
              </a>
              
              <a title="Мега-Кератин в Instagram" href="https://www.instagram.com/mega_keratin" target="_blank" class="badge badge-dark" rel="nofollow">
                <svg class="bi bi-eye-fill" width="2.5em" height="2.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                  <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                </svg>
              </a>
            </div>
            
          </div>
        </div>
      </div>
  <!-- Футер - подвал верхняя часть - конец -->
    </div>
  </div>
  
  
  <div class="col-12 bg-white" style="height: 10px"></div>
    <!-- Бренд -->   
  <div class="col-4" style="position: relative; left: 32%">
    <a href="#"><img src="/mega/resource/img/brand1.png" class="mw-100" style=""  title="Интернет-магазин Mega-Keratin" alt="Интернет-магазин Mega-Keratin"></a>
  </div>
  <!--  <a href="/">  вариант на домашнюю страницу  <a href="#"> к заголовку -->
  <div class="col-12 text-center" style="height: 30px; font-size: 0.9rem;">© Мега-Кератин 2011-2020</div>  
  <div class="col-12 bg-white" style="height: 15px"></div>
      
          



 

    <!-- Optional JavaScript -->
    <?= $scripts ?>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>