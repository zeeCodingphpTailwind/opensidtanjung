<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title'); ?>
    <h1>
        <h1>Teks Berjalan
            <small><?php echo e($teks ? 'Ubah' : 'tambah'); ?> Data</small>
        </h1>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(ci_route('teks_berjalan')); ?>">Teks Berjalan</a></li>
    <?php echo e($teks ? 'Ubah' : 'tambah'); ?> Data
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo form_open($form_action, 'class="form-horizontal" id="validasi"'); ?>

    <div class="box box-info">
        <div class="box-header with-border">
            <a href="<?php echo e(ci_route('teks_berjalan')); ?>" class="btn btn-social  btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Teks Berjalan">
                <i class="fa fa-arrow-circle-left "></i>Kembali Ke Teks Berjalan
            </a>
        </div>
        <div class="box-body">
            <div class="col-md-12">
                <div class="form-group">
                    <label class="control-label" for="isi_teks_berjalan">Isi teks berjalan</label>
                    <textarea id="teks" class="form-control input-sm required" placeholder="Isi teks berjalan" name="teks" rows="5" style="resize:none;"><?php echo e($teks['teks']); ?></textarea>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="form-group">
                    <label class="control-label">Tautan ke artikel</label>
                    <select class="form-control select2 " id="tautan" name="tautan">
                        <option value="">-- Cari Judul Artikel --</option>
                        <?php $__currentLoopData = $list_artikel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $artikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($artikel['id']); ?>" <?= ($artikel['id'] == $teks['tautan']) ? 'selected' : ''; ?>>
                                <?php echo e(tgl_indo($artikel['tgl_upload']) . ' | ' . $artikel['judul']); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <div class="col-md-12" id="box_judul_tautan" style="display: <?php echo e($teks['tautan'] ? '' : 'none'); ?>">
                <div class="form-group">
                    <label class="control-label">Judul tautan</label>
                    <input
                        <?php echo e($teks['tautan'] ? '' : 'disabled'); ?>

                        class="form-control input-sm required"
                        placeholder="Judul tautan ke artikel atau url"
                        name="judul_tautan"
                        id="input_judul_tautan"
                        value="<?php echo e($teks['judul_tautan']); ?>"
                        maxlength="150"
                    />
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label class="control-label">Status</label>
                    <select class="form-control select2" id="status" name="status">
                        <?php $__currentLoopData = \App\Enums\StatusEnum::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?= ($key == $teks['status']) ? 'selected' : ''; ?>>
                                <?php echo e($data); ?>

                            </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class='box-footer'>
            <button type='reset' class='btn btn-social  btn-danger btn-sm'><i class='fa fa-times'></i>
                Batal</button>
            <button type='submit' class='btn btn-social  btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
        </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            $('#tautan').on('change', function() {
                if (this.value == "") {
                    $('#box_judul_tautan').hide();
                    $('#input_judul_tautan').prop("disabled", true);
                } else {
                    $('#box_judul_tautan').show();
                    $('#input_judul_tautan').prop("disabled", false);
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/web/teks_berjalan/form.blade.php ENDPATH**/ ?>