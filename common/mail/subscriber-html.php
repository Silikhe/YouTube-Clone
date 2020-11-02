<?php

/** @var $channel \common\models\User */
/** @var $user \common\models\User */
?>

<p>Hello <?php echo $channel->username ?></p>
Congrats you have 1+ sub
<p> <?php echo \common\helpers\Html::channelLink($user, true) ?>
    has subscribed to you</p>

<p>youtube-clone team,</p>

