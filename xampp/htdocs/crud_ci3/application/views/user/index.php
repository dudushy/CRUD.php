<h1>CRUD.php</h1>

<div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="consult-tab" data-bs-toggle="tab" data-bs-target="#consult" type="button" role="tab" aria-controls="consult" aria-selected="true">CONSULT</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">REGISTER</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="consult" role="tabpanel" aria-labelledby="consult-tab">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Nickname</th>
                    <th>E-mail</th>
                    <th>Telephone</th>
                    <th>ACTIONS</th>
                </thead>
                <tbody>
                    <?php foreach ($readUser as $value) {?>
                    <tr>
                        <td><?php echo $value->usr_id; ?></td>
                        <td><?php echo $value->prf_name; ?></td>
                        <td><?php echo $value->usr_name; ?></td>
                        <td><?php echo $value->usr_nickname; ?></td>
                        <td><?php echo $value->usr_email; ?></td>
                        <td><?php echo $value->usr_telephone; ?></td>
                        <td></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
            <div class="row">
                <div class="col-lg-7">
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
                </div>
                <div class="col-md-5">
                    
                </div>
            </div>
        </div>
    </div>
</div>
