<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/edit_user/' . $user_id['id']); ?>

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="name" name="name" value="<?= $user_id['name']; ?>">
                    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $user_id['email']; ?>">
                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                    <input type="password" class="form-control" id="password" name="password" value="<?= $user_id['password']; ?>">
                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
                <p class="col-sm-2 col-form-label font-italic">Security*</p>
            </div>

            <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Role</label>
                <div class="col-sm-10">
                    <select name="role_id" id="role_id" class="form-control">
                        <?php foreach ($allRole as $AR) : ?>
                            <option value="<?= $AR['id']; ?>" <?php if ($user_id['role_id'] == $AR['id']) {
                                                                    echo "selected";
                                                                } ?>>
                                <?= $AR['role']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="is_active" class="col-sm-2 col-form-label">Activation</label>
                <div class="col-sm-10">
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1" <?php if ($user_id['is_active'] == 1) {
                                                echo "selected";
                                            } ?>>Active</option>
                        <option value="2" <?php if ($user_id['is_active'] == 2) {
                                                echo "selected";
                                            } ?>>Non Active</option>
                    </select>
                </div>
            </div>

            <div class="div form-group row justify-content-end">
                <div class="div col-sm-10">
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
            </div>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->