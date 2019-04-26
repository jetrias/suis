<?php $this->beginContent('@app/modules/sala/views/layouts/main'); ?>
<?php 
if (isset($this->params['breadcrumbs'])) {
    array_unshift($this->params['breadcrumbs'], ['label' => 'Sala Situacional Despacho', 'url' => ['/sala']]);
}
?>

<?= $content ?>

<?php $this->endContent(); ?>