<?php

/**
 * @var $this yii\web\View
 * @var $name string
 * @var $message string
 * @var $exception \yii\web\HttpException
 *
 *  public function actions()
 *  {
 *       return [
 *          "error" => [
 *              "class" => \yii\web\ErrorAction::className(),
 *              "view" => "@denchotsanov/views/error",
 *          ],
 *      ];
 *  }
 */

use yii\helpers\Html;

$this->title = $name;
$textColor = $exception->statusCode === 404 ? "text-yellow" : "text-red";
?>

<div class="error-page">
    <h2 class="headline <?= $textColor ?>"> <?= $exception->statusCode ?></h2>
    <div class="error-content">
        <h3><i class="fa fa-warning <?= $textColor ?>"></i> <?= nl2br(Html::encode($message)) ?></h3>
        <p>
            The above error occurred while the Web server was processing your request.
            Please contact us if you think this is a server error. Thank you.
            Meanwhile, you may <a href='<?= Yii::$app->homeUrl ?>'>return to dashboard</a> or try using the search
            form.
        </p>
    </div>
</div>