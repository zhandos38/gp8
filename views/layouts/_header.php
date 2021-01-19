<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-8 col-lg-8">
                <div class="header__content">
                    <a href="/">
                        <img class="header__symbol" src="/img/logo.png" alt="symbol">
                    </a>
                    <div style="padding-left: 40px">
                        <div class="header__name">
                            <?= Yii::t('site', '"УПРАВЛЕНИЕ ЗДРАВООХРАНЕНИЯ ГОРОДА ШЫМКЕНТ"') ?>
                        </div>
                        <div class="header__name">
                            <b><?= Yii::t('site', 'ГКП НА ПХВ "Городская поликлиника № 8"') ?></b>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4">
                <div class="header__lang pull-right">
                    <?= $this->render('select-language') ?>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="instagram-box">
    <button onclick="window.location.href='https://www.instagram.com/bibarystuimebek/?hl=ru'" type="button" id="whats-openPopup" class="instagram-button">
        <img class="icon-instagram" src="/img/instagram.svg">
    </button>
</div>
<div class="chat-box">
    <button onclick="window.location.href='https://wa.me/77021844295'" type="button" id="whats-openPopup" class="whatsapp-button">
        <img class="icon-whatsapp" src="https://image.flaticon.com/icons/svg/134/134937.svg">
    </button>
</div>