<?php $this->layout('layouts/app'); ?>
<?php use App\Framework\Utilities\Session; ?>

<div>
    <p>
        Session ID: <?= Session::getSessionId() ?>
    </p>
    <p>
        Session Path: <?= session_save_path() ?>
    </p>
    <p>
        Cookie: <?= $_COOKIE['PHPSESSID']; ?>
    </p>
    <p>
        Cookies: <pre><?php print_r($_COOKIE); ?></pre>
    </p>
</div>
