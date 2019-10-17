<div class="container">
    <form action="<?php echo base_url("/")?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Eposta</label>
            <input type="email" name="user_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Eposta">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Şifre</label>
            <input type="password" name="user_password" class="form-control" id="exampleInputPassword1" placeholder="Şifre">
        </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
    </form>

    <?php echo @$form_error;?>

</div>

