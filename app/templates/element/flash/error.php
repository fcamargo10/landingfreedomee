<?php
/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
    $message = h($message);
}
?>
<div class="alert alert-danger mx-4" role="alert" onclick="this.classList.add('hidden')">
    <strong><?= __("Erro") ?>:</strong> <?= $message ?>
</div>