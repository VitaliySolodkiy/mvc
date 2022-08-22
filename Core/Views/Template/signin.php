<h1 class="text-center"><?= $title ?></h1>
<?php Core\Helpers\Message::get() ?>
<form action="/sendSignInForm" method="POST">
    <div class="form-group">
        <label for="emain" class="form-label">Email:</label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group mt-3">
        <label for="password" class="form-label">Password:</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
    <div>
        <button class="btn btn-primary mt-3" name="action" value="sendSignInForm">Login</button>
    </div>

</form>