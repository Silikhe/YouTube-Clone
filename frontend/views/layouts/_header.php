<?php
/**
 * User: TheCodeholic
 * Date: 4/17/2020
 * Time: 9:20 AM
 */

use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\helpers\Url;
use yii\helpers\Html;


NavBar::begin([
    'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name, 'style' => 'height: 40px; width: 101px; top: 10px; left: 10px;']),
    'brandUrl' => Yii::$app->homeUrl,
    'options' => ['class' => 'navbar-expand-lg navbar-light bg-light shadow-sm'],
    'innerContainerOptions' => [
        'class' => 'container-fluid'
    ]
]);
if (Yii::$app->user->isGuest) {
    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
} else {
    $menuItems[] = [
        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
        'url' => ['/site/logout'],
        'linkOptions' => [
            'data-method' => 'post'
        ]
    ];
}
?>


  <form class="site-search ml-auto" action="<?php echo Url::to(['/video/search']) ?>"
        >
    <input class="form-control p-2" type="search" placeholder="Search"
           name="keyword"
           value="<?php echo Yii::$app->request->get('keyword') ?>">
           <button class="search-btn" aria-label="Search"><i class="fas fa-search" aria-hidden="true"></i></button>

  </form>
<?php

?>
<div class="user-menu">

<button class="btn" aria-label="Upload">
        <i class="fas fa-upload" aria-hidden="true"></i>
    </button>

<button class="btn" aria-label="YouTube Apps">
        <i class="fas fa-th" aria-hidden="true"></i>
    </button>

<button class="btn" aria-label="Notifications">
        <i class="fas fa-bell" aria-hidden="true"></i>
    </button>

<button class="btn" aria-label="Account">
        <i class="fas fa-user-circle" aria-hidden="true"></i>
    </button>

</div>


<?php

echo Nav::widget([
    'options' => ['class' => 'navbar-nav '],
    'items' => $menuItems,
]);
NavBar::end();
