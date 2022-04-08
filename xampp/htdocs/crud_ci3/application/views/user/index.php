<h1>CRUD.php</h1>

<div>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="create-tab" data-bs-toggle="tab" data-bs-target="#create" type="button" role="tab" aria-controls="create" aria-selected="false">Create</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="read-tab" data-bs-toggle="tab" data-bs-target="#read" type="button" role="tab" aria-controls="read" aria-selected="true">Read</button>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="create" role="tabpanel" aria-labelledby="create-tab">
            <div class="row">
                <div class="col-lg-7">
                    <form method="POST" action="<?php echo base_url('user/create'); ?>">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Profile
                            </label>
                            <select name="prf_id" class="form-control">
                                <?php foreach ($readProfile as $value) { ?>
                                    <option value="<?php echo $value->prf_id ?>"><?php echo $value->prf_name; ?></option>
                                <?php }; ?>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Name
                            </label>
                            <input type="text" name="usr_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Nickname
                            </label>
                            <input type="text" name="usr_nickname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nickname">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">
                                Email
                            </label>
                            <input type="email" name="usr_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">
                               Telephone
                            </label>
                            <input type="text" name="usr_telephone" class="form-control" id="exampleInputPassword1" placeholder="Telephone">
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Create User
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="tab-pane fade show active" id="read" role="tabpanel" aria-labelledby="read-tab">
            <table class="table table-hover">
                <thead>
                    <th>ID</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Nickname</th>
                    <th>E-mail</th>
                    <th>Telephone</th>
                    <th>
                        <center>
                            ACTIONS
                        </center>
                    </th>
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
                        <td>
                            <center>
                                <a href="<?php echo base_url('user/edit/') . $value->usr_id; ?>" title="Update"><i class="bi bi-pencil"></i></a>
                                <a href="<?php echo base_url('user/delete/') . $value->usr_id; ?>" title="Delete"><i class="bi bi-x-circle"></i></a>
                            </center>
                        </td>
                    </tr>
                    <?php }; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
