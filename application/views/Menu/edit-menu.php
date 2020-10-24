<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('menu/menuEdit/' . $menu['id']); ?>

            <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Menu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
                    <?= form_error('menu', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="is_active" class="col-sm-2 col-form-label">Activation</label>
                <div class="col-sm-10">
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1" <?php if ($menu['is_active'] == 1) {
                                                echo "selected";
                                            } ?>>Active</option>
                        <option value="2" <?php if ($menu['is_active'] == 2) {
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