<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('admin/roleEdit/' . $role['id']); ?>

            <div class="form-group row">
                <label for="role" class="col-sm-2 col-form-label">role</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>">
                    <?= form_error('role', '<small class="text-danger pl-3">', '</small>'); ?>
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