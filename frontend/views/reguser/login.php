<?php
use \yii\widgets\ActiveForm;
?>

<?php $form = ActiveForm::begin(); ?>

<?= $form->field($login_model,'email')->textInput() ?>
<?= $form->field($login_model,'password')->passwordInput() ?>

    <div>
        <button class="btn btn-primary">Login</button>
    </div>

<?php ActiveForm::end(); ?>