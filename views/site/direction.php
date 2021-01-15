<div class="direction">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-md-12">
                <div class="card text-center direction-img-trigger">
                    <img class="card-img-top director-img" src="/img/director.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">
                            Сара Кобландыевна Оспанов
                        </h5>
                        <p class="card-text">
                            <?= Yii::t('site', 'Главный врач') ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$js =<<<JS
$('.direction-img-trigger').click(function () {
    $(this).find('.direction-working-hours').toggle('ease');
});
JS;

$this->registerJs($js);
?>