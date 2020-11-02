<?php
/**
 * User: TheCodeholic
 * Date: 4/18/2020
 * Time: 9:50 AM
 */

use yii\helpers\Url;

/** @var $this \yii\web\View */
/** @var $channel \common\models\User */
/**@var $dataProvider \yii\data\ActiveDataProvider */
?>
<!-- Channel Banner -->
<section class="channel-banner">

	<div class="channel-social-links">

		<ul>

			<li class="btn google-plus">
				<i class="fab fa-google-plus-square" aria-hidden="true"></i>
			</li>

			<li class="btn twitter">
				<i class="fab fa-twitter-square" aria-hidden="true"></i>
			</li>

			<li class="btn facebook">
				<i class="fab fa-facebook-square" aria-hidden="true"></i>
			</li>

		</ul>

	</div>

</section>
<!-- End of channel banner -->

<!-- Channel Info -->
<section class="channel-info">

	<div class="container">

		<div class="channel-icon">

			<img src="https://images.unsplash.com/photo-1467912681710-2a73a89d88d6?w=80&h=80&fit=crop" alt="">

		</div>

		<div class="channel-title">

			<h1><?php echo $channel->username ?> <i class="fas fa-check-circle"></i></h1>

			<div class="channel-subscriber-count"><?php echo $channel->getSubscribers()->count() ?> Subscribers</div>

		</div>

		 <?php echo $this->render('_subscribe', [
        'channel' => $channel
    ]) ?>

	</div>

</section>
<!-- End of channel info section -->

<!-- <div class="jumbotron">
    <h1 class="display-4"><?php echo $channel->username ?></h1>
    <hr class="my-4">
    <?php \yii\widgets\Pjax::begin() ?>
    <?php echo $this->render('_subscribe', [
        'channel' => $channel
    ]) ?>
    <?php \yii\widgets\Pjax::end() ?>
</div> -->



<!-- Channel navigation -->
<nav class="channel-nav">

	<div class="container">

		<ul>

			<li class="nav-item">
				<a href="#" class="current">Home</a>
			</li>

			<li class="nav-item">
				<a href="#">Videos</a>
			</li>

			<li class="nav-item">
				<a href="#">Playlists</a>
			</li>

			<li class="nav-item">
				<a href="#">Community</a>
			</li>

			<li class="nav-item">
				<a href="#">Channels</a>
			</li>

			<li class="nav-item">
				<a href="#">About</a>
			</li>

		</ul>

	</div>

</nav>
<!-- End of channel navigation -->



<?php echo \yii\widgets\ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '@frontend/views/video/_video_item',
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]) ?>

