<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php
    $title = ucfirst($ci->controller);
?>

<?php $__env->startSection('title'); ?>
    <h1>
        Master <?php echo e($title); ?>

        <small><?php echo e($action); ?> Data</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(site_url($ci->controller)); ?>">Daftar <?php echo e($title); ?></a></li>
    <li class="active">Master <?php echo e($title); ?> <?php echo e($action); ?> Data</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <a href="<?php echo e(site_url($ci->controller)); ?>" class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-arrow-circle-left "></i> Kembali Ke Daftar <?= $title ?></a>
        </div>
        <form id="validasi" action="<?php echo e($form_action); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="box-body">
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="nama">Nama <?php echo e($title); ?></label>
                    <div class="col-sm-7">
                        <input
                            id="nama"
                            class="form-control input-sm nama_terbatas required"
                            type="text"
                            placeholder="Nama <?php echo e($title); ?>"
                            name="nama"
                            value="<?php echo e($kelompok['nama']); ?>"
                            maxlength="50"
                        >
                    </div>
                </div>
                <div class="form-group ">
                    <label class="col-sm-3 control-label" for="kode">Kode <?php echo e($title); ?></label>
                    <div class="col-sm-7">
                        <input
                            id="kode"
                            class="form-control input-sm nomor_sk required"
                            type="text"
                            placeholder="Kode <?php echo e($title); ?>"
                            name="kode"
                            value="<?php echo e($kelompok['kode']); ?>"
                            maxlength="16"
                        >
                        <p><code>*Pastikan kode belum pernah dipakai di data lembaga / di data kelompok.</code></p>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="id_master">Kategori <?= $title ?></label>
                    <div class="col-sm-7">
                        <select class="form-control input-sm select2 required" id="id_master" name="id_master">
                            <option value="">-- Silakan Masukkan Kategori <?php echo e($title); ?>--</option>
                            <?php $__currentLoopData = $list_master; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data['id']); ?>" <?= ($kelompok['id_master'] == $data['id']) ? 'selected' : ''; ?>><?php echo e($data['kelompok']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="id_ketua">Ketua <?= $title ?></label>
                    <div class="col-sm-7">
                        <select class="form-control input-sm select2 required" id="kelompok_penduduk" name="id_ketua">
                            <option value="">-- Silakan Masukkan NIK / Nama--</option>
                            <?php $__currentLoopData = $list_penduduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data['id']); ?>" <?= ($data['id'] == $kelompok['id_ketua']) ? 'selected' : ''; ?> }}>NIK :<?php echo e($data['nik'] . ' - ' . $data['nama'] . ' - ' . $data['alamat']); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="keterangan">Deskripsi <?= $title ?></label>
                    <div class="col-sm-7">
                        <textarea name="keterangan" class="form-control input-sm" placeholder="Deskripsi <?php echo e($title); ?>" rows="3" maxlength="300"><?php echo e($kelompok['keterangan']); ?></textarea>
                    </div>
                </div>
            </div>
            <div class="box-footer">
                <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i> Simpan</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/kelompok/form.blade.php ENDPATH**/ ?>