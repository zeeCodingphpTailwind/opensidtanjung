<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->startSection('title'); ?>
    <h1>
        Tipe Lokasi
        <small><?php echo e($aksi); ?> Data</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(ci_route('area')); ?>"> Area</a></li>
    <li class="active"><?php echo e($aksi); ?> Data</li>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('css'); ?>
    <style>
        .bs-glyphicons {
            padding-left: 0;
            padding-bottom: 1px;
            margin-bottom: 20px;
            list-style: none;
            overflow: hidden;
        }

        .bs-glyphicons .glyphicon {
            margin-top: 5px;
            margin-bottom: 10px;
            font-size: 24px;
        }

        .bs-glyphicons .glyphicon-class {
            display: block;
            text-align: center;
            word-wrap: break-word;
            /* Help out IE10+ with class names */
        }

        .bs-glyphicons li {
            float: left;
            width: 25%;
            height: 115px;
            padding: 10px;
            margin: 0 -1px -1px 0;
            font-size: 12px;
            line-height: 1.4;
            text-align: center;
            border: 1px solid #ddd;
        }

        .bs-glyphicons li:hover,
        .bs-glyphicons li.active {
            background-color: #605ca8;
            color: #fff;
        }

        @media (min-width: 768px) {
            .bs-glyphicons li {
                width: 12.5%;
            }
        }

        .vertical-scrollbar {
            overflow-x: hidden;
            overflow-y: auto;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-md-3">
            <?php echo $__env->make('admin.peta.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-9">
            <?php echo form_open_multipart($form_action, 'class="form-horizontal" id="validasi"'); ?>

            <div class="box box-info">
                <div class="box-header with-border">
                    <a href="<?php echo e(ci_route('point')); ?>" class="btn btn-social btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block">
                        <i class="fa fa-arrow-circle-left "></i>Kembali ke Tipe Lokasi
                    </a>
                </div>
                <div class="box-body">
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Jenis Lokasi</label>
                        <div class="col-sm-8">
                            <input
                                id="nama"
                                class="form-control input-sm nomor_sk required"
                                maxlength="100"
                                type="text"
                                placeholder="Nama Jenis Lokasi"
                                name="nama"
                                required=""
                                value="<?= $point['nama'] ?>"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomor" class="col-sm-2 control-label">Simbol</label>
                        <div class="col-sm-4">
                            <?php if($point['simbol'] != ''): ?>
                                <img src="<?php echo e(base_url(LOKASI_SIMBOL_LOKASI) . $point['simbol']); ?>" />
                            <?php else: ?>
                                <img src="<?php echo e(base_url(LOKASI_SIMBOL_LOKASI)); ?>default.png" />
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="id_master" class="col-sm-2 control-label">Ganti Simbol</label>
                        <div class="col-sm-10">
                            <div class="vertical-scrollbar" style="max-height:300px;">
                                <ul id="icons" class="bs-glyphicons">
                                    <?php $__currentLoopData = $simbol; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li <?php if($point['simbol'] == $data['simbol']): ?> class="active" id="simbol_active" <?php endif; ?> onclick="li_active($(this).val());">
                                            <label>
                                                <input type="radio" name="simbol" id="simbol" class="hidden" value="<?php echo e($data['simbol']); ?>" <?= ($point['simbol'] == $data['simbol']) ? 'checked' : ''; ?>>
                                                <img src="<?php echo e(base_url(LOKASI_SIMBOL_LOKASI) . $data['simbol']); ?>">
                                                <span class="glyphicon-class"><?php echo e($data['simbol']); ?></span>
                                            </label>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='box-footer'>
                    <div>
                        <button type='reset' class='btn btn-social btn-danger btn-sm'><i class='fa fa-times'></i>
                            Batal</button>
                        <button type='submit' class='btn btn-social btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i> Simpan</button>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        function li_active() {
            $('li').click(function() {
                $('li.active').removeClass('active');
                $(this).addClass('active');
                $(this).children("input[type=radio]").click();
            });
        };

        function reset_form() {
            $('li.active').removeClass('active');
            $('#simbol_active').addClass('active');
        };
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/peta/point/form.blade.php ENDPATH**/ ?>