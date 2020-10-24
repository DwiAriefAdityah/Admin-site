<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?> </h1>

    <div class="row">
        <div class="col-lg-8">
            <?= form_open_multipart('menu/edit/' . $subMenu['id']); ?>

            <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Menu</label>
                <div class="col-sm-10">
                    <select name="menu_id" id="menu_id" class="form-control">
                        <?php foreach ($menu as $m) : ?>
                            <option value="<?= $m['id']; ?>" <?php if ($subMenu['menu_id'] == $m['id']) {
                                                                    echo "selected";
                                                                } ?>>
                                <?= $m['menu']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="title" name="title" value="<?= $subMenu['title']; ?>">
                    <?= form_error('title', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="url" class="col-sm-2 col-form-label">Url Access</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="url" name="url" value="<?= $subMenu['url']; ?>">
                    <?= form_error('url', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="icon" class="col-sm-2 col-form-label">Icon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $subMenu['icon']; ?>">
                    <?= form_error('icon', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>
            </div>
            <div class="form-group row">
                <label for="is_active" class="col-sm-2 col-form-label">Activation</label>
                <div class="col-sm-10">
                    <select name="is_active" id="is_active" class="form-control">
                        <option value="1" <?php if ($subMenu['is_active'] == 1) {
                                                echo "selected";
                                            } ?>>Active</option>
                        <option value="2" <?php if ($subMenu['is_active'] == 2) {
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