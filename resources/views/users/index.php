<?php $this->layout('layouts/app') ?>

<?php foreach ($users as $user) : ?>
<div>
    (<?= $user->id ?>) <?= $user->name ?>
</div>
<?php endforeach; ?>
