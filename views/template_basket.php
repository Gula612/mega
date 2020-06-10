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
  .b-popup{
    display: none;
    width:100%;
    min-height:100%;
    background-color: rgba(0,0,0,0.5);
    overflow:hidden;
    position:fixed;
    top:0px;
  }
  .b-popup .b-popup-content{
    margin:180px auto 0px auto;
    width:300px;
    padding:10px;
    background-color: #FFF;
    border-radius:0px;
    box-shadow: 0px 0px 10px #000;
  }

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
          <a href="/mega"><img src="/mega/resource/img/brand.png" class="mw-100" style="" alt="Мега-кератин"></a>
        </div>
      <!-- Корзина покупок --> 
        <div class="col-2" style="position: relative; left: 45%">
          <a href="/mega/basket"> <img src="/mega/resource/img/basket.png" class="mw-100" style="" alt="Ваша корзина"></a>
        </div>
      </div>  
    </div>
    
    
  <!-- Навигация -->   
    <nav class="navbar bg-white text-body">
      <div class="dropdown">
        <a class="btn btn-secondary dropdown-toggle  text-uppercase dropdown-item" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><b>Бренды</b></a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="/mega/ZOOM">ZOOM</a>
          <a class="dropdown-item" href="/mega/NATUREZA">NATUREZA</a>
          <a class="dropdown-item" href="/mega/VOGUE">VOGUE</a>
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
        <a class="btn btn-secondary text-uppercase dropdown-item" href="/mega/training"><b>Обучение</b></a>
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
          <a href="/mega"><img src="/mega/resource/img/gift1200b.png" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href="/mega/NATUREZA"><img src="/mega/resource/img/nat1200b.png" class="d-block w-100" alt="..."></a>
        </div>
        <div class="carousel-item">
          <a href="/mega/training"><img src="/mega/resource/img/webinar1200b.png" class="d-block w-100" alt="..."></a>
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
      
 
    <?= $content ?>  
  
 
 
  
      
        

      
        
          
  

            

  
  <!-- белая разделительная полоса над футером -->
  <div class="col-12 row bg-white border-bottom border-dark" style="height: 20px"></div>
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
            <a title="Соглашение о cookies" class="btn btn-light dropdown-item" style="font-size: 1.0rem; padding-left: 0px;" href="/mega/cookie" target="_self">Соглашение о собираемых данных</a>
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
    <a href="/mega"><img src="/mega/resource/img/brand1.png" class="mw-100" style=""  title="Интернет-магазин Mega-Keratin" alt="Интернет-магазин Mega-Keratin"></a>
  </div>
  <!--  <a href="/">  вариант на домашнюю страницу  <a href="#"> к заголовку -->
  <div class="col-12 text-center" style="height: 30px; font-size: 0.9rem;">© Мега-Кератин 2011-2020</div>  
  <div class="col-12 bg-white" style="height: 15px"></div>
      
          



 

    <!-- Optional JavaScript -->
    <?= $scripts ?>
    <script src=\"http://gula612.beget.tech/mega/resource/js/basket.js\"></script>
    <script src=\"http://code.jquery.com/jquery-2.0.2.min.js\"></script>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>