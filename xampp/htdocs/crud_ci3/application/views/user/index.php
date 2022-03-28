<h1>REGISTER FORM</h1>

<form method="POST" action="<?php echo base_url('user/create') ?>">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Profile
        </label>
        <select name="txtId" class="form-control">
            <?php foreach ($readProfile as $value) { ?>
                <option value="<?php echo $value->prf_id ?>"><?php echo $value->prf_name; ?></option>
            <?php } ?>
            
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Name
        </label>
        <input type="text" name="txtName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Nickname
        </label>
        <input type="text" name="txtNickname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nickname">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">
            Email
        </label>
        <input type="email" name="txtEmail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">
           Telephone
        </label>
        <input type="text" name="txtTelephone" class="form-control" id="exampleInputPassword1" placeholder="Telephone">
    </div>
    <button type="submit" class="btn btn-primary">
        Register User
    </button>
</form>

<?php

print_r($readProfile);

?>