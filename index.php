<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row wrapper">
            <div class="header col-2 col-sm-7 col-md-5 col-lg-5 col-xl-4">
                <div class="header-left">
                    <img src="./img/svg/logo.svg" alt="LOGO_DA">
                    <div class="header__left-text d-none d-sm-block">
                        <h4 d-none d-sm-block>интернет-маркетинговое агентство</h4>
                    </div>
                </div>
            </div>
            <div class="header col-10 col-sm-5 col-md-7 col-lg-7 col-xl-8">
                <div class="header-right">
                    <h2><a href="tel:+78003508358"> 8 (800) 350-83-58</a></h2>                
                </div>
            </div>
        </div>
        <div class="row wrapper-center">
            <div class="header col-sm-11 col-md-9 col-lg-8 col-xl-7">
                <div class="header-left">
                    <h1>Узнай, как увеличить поток заявок через социальные сети</h1>
                </div>
                <div class="header-icons">
                    <a href="#"><img src="./img/insta.png" alt="INST"></a>
                    <a href="#"><img src="./img/facebook.png" alt="INST"></a>
                    <a href="#"><img src="./img/vk.png" alt="VK"></a>
                    <a href="#"><img src="./img/tiktok.png" alt="TIK-TOK"></a>
                </div>
            </div>
        </div>
        <div class="row wrapper-bot">
            <div class="content height-content col-12 сol-sm-9 col-lg-7 col-xl-8">
                <div class="yt-lazy content-left" data-youtube-id="vwTAF7Cz5MY"></div>
            </div>
            <div class="content col-lg-5 col-lg-5 col-xl-4">
                <div class="content-right">
                    <h3>Оставь заявку, чтобы получить бесплатную консультацию</h3>
                    <div id="callback" class="modal-form modal-form_hidden">
                        <form id="form" class="form" method="post" @submit.prevent="submit" novalidate>
                            <div class="form__fields">                         
                                <div class="search__form-top">
                                    <input type="text" name="name" class="form__input" placeholder="Имя*"
                                        v-model.trim="$v.name.$model"
                                        :class="[{invalid : $v.name.$error}, {valid : !this.$v.name.$invalid}]">
                                    <input type="tel" name="phone" class="form__input" placeholder="Номер телефона*"
                                        v-mask="'+# ### ###-##-##'" v-model.trim="$v.phone.$model"
                                        :class="[{invalid : $v.phone.$error}, {valid : !this.$v.phone.$invalid}]">
                                </div>
                            </div>
                            <div class="form__bottom">
                                <button id=submit-btn class="search-btn">Записаться</button>
                                <div class="content__right-text">
                                    <h5>Отправляя форму, вы принимаете <a href="#">Условия Пользовательского соглашения</a> «Digital Around».</h5>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
             


            



































    


 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous" ></script>
 <script defer src="https://cdn.jsdelivr.net/npm/vue@2"></script>
 <script defer src="js/vue.validators.min.js"></script>
 <script defer src="js/vue.vuelidate.min.js"></script>
 <script defer src="js/vue.v-mask.min.js"></script>
 <script defer src="js/main-v2.js"></script>
 <script defer src="js/lazyYT.js"></script>




</body>
</html>