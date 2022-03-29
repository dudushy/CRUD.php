<h1>REGISTER FORM</h1>

<div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...1</div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...2</div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...3</div>
        <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="settings-tab">...4</div>
    </div>
</div>

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