<div class="row">
    <div class="col-md-7 offset-md-2">
        <form method="POST" action="<?php echo base_url('user/update'); ?>">
            <?php foreach ($dataUser as $value) { ?>
            <input type="hidden" name="usr_id" value="<?php echo $value->usr_id; ?>">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Profile
                </label>
                    <?php
                    $list = array();
                    foreach ($readProfile as $profile) {
                        $list[$profile->prf_id] = $profile->prf_name;
                    }
                    echo form_dropdown('prf_id', $list, $value->prf_id, 'class="form-control"');
                    ?>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Name
                </label>
                <input type="text" name="usr_name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->usr_name; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Nickname
                </label>
                <input type="text" name="usr_nickname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->usr_nickname; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">
                    Email
                </label>
                <input type="email" name="usr_email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?php echo $value->usr_email; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">
                   Telephone
                </label>
                <input type="text" name="usr_telephone" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usr_telephone; ?>">
            </div>
            <?php } ?>
            <button type="submit" class="btn btn-primary">
                Update User
            </button>
        </form>
    </div>
</div>
