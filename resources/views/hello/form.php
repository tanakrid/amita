<?php $this->layout('layouts/app') ?>

<form action="/hello/formSubmit" method="post">
    <div>
        <label for="name">Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <button type="submit">Send Name</button>
    </div>
</form>
