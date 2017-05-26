<?php
use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use app\assets\AppAsset;
AppAsset::register($this);
 ?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

  </head>
  <body>
    <?php $this->beginBody() ?>
    <div class="wrap">

      <?php
      NavBar::begin([
          'brandLabel' => $this->title,
          'brandUrl' => Yii::$app->homeUrl,
          'options' => [
              'class' => 'navbar-inverse navbar-fixed-top',
          ],
      ]);
      echo Nav::widget([
          'options' => ['class' => 'navbar-nav navbar-right'],
          'items' => [
              ['label' => 'หน้าแรก', 'url' => ['/site/index']],
              ['label' => 'ข้อมูลโปรโมชั่น', 'url' => ['/hello/index']],
              ['label' => 'ผลิตภัณฑ์', 'url' => ['/product'],
              'items'=>[
                  ['label' => 'รายการสินค้า', 'url' => ['/product'] ],
                  ['label' => 'ประเภทสินค้า', 'url' => ['/product-type'] ]
                ]
            ],
              ['label' => 'เกี่ยวกับ', 'url' => ['/site/about']],
              ['label' => 'ติดต่อเรา', 'url' => ['/site/contact']],
              Yii::$app->user->isGuest ? (
                  ['label' => 'เข้าสู่ระบบ', 'url' => ['/site/login']]
              ) : (
                  '<li>'
                  . Html::beginForm(['/site/logout'], 'post')
                  . Html::submitButton(
                      'Logout (' . Yii::$app->user->identity->username . ')',
                      ['class' => 'btn btn-link logout']
                  )
                  . Html::endForm()
                  . '</li>'
              )
          ],
      ]);
      NavBar::end();
      ?>

  <div class="container">

    <div class="row">

      <div class="col-sm-12">
          <?=$content?>
      </div>
    </div>

  </div>

</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; Ahamad <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>