<?php

use brazhnikov\yii2cadastre\components\SearchByCadastraNumberWidget;

?>
<?php if ( isset( $datas ) ): ?>
    <div class="block">
        <h3 class="red">Вывод тестовых данных</h3>
        <p><?= $datas ?></p>
        <p><?= $datas ?></p>
        <p><?= SearchByCadastraNumberWidget::widget(); ?></p>
    </div>
<?php endif; ?>
