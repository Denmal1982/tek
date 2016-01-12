<?php
$csrfParam = Yii::$app->request->csrfParam;
$csrfToken = Yii::$app->request->csrfToken;

use yii\helpers\Html;
use yii\widgets\Menu;

/* @var $this \yii\web\View */
/* @var $content string */

\yii\web\YiiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="<?= Yii::$app->request->getBaseUrl() ?>/css/site.css"/>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="">
    <div class="header">
        <div class="navbar-wrapper">
            <div class="row">
                <div class="bg-title">
                    <div class="container">
                        <nav class="navbar navbar-static-top">
                            <div class="navbar-header">
                                <a class="navbar-brand">
                                    <img src="<?=Yii::getAlias("@web")?>/images/TEK.png">

                                </a>
                            </div>
                            <div class="navbar">
                                <ul class="nav navbar-nav navbar-right">
                                    <li class="active" ><a href="#">О нас</a></li>
                                    <li><a href="#">Услуги</a></li>
                                    <li><a href="#">Контакты</a></li>
                                </ul>
                            </div>

                        </nav>
                    </div>
                    <div class="container">
                        <div class="title-note">
                            Ремонт и обслуживание нефтепромыслового оборудования
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="separator">

                </div>

            </div>

        </div>
    </div>

    <div class="content">

        <div class="container">
            <?= $content ?>
        </div>

    </div>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-lg-offset-8 col-sm-3 col-sm-offset-8">
                    <img src="<?=Yii::getAlias("@web")?>/images/TEK_color.png" height="40">
                    <p>
                    <address>
                        <strong>ТЭК-НЕФТЕСЕРВИС, ООО</strong><br>
                        г.Казань, ул.Дубравная,д.42а, оф-9а <br>
                        <strong>Тел/факс:</strong> (843) 272-62-53<br>
                        <strong>e-mail</strong>
                        <a href="mailto:#">texenerkomp@list.ru</a>
                    </address>
                    </p>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <p><?= date('Y') ?> ТЭК НЕФТЕСЕТВИС</p>
            </div>

        </div>

    </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
