<?php $__env->startPush('css'); ?>
    <style>
        .radius {
            border-radius: 5px;
        }

        .info-box-sdgs {
            border: 1px solid;
            border-radius: 10px;
            background-color: #fff;
            border-color: #d8dbe0;
        }

        .info-box-sdgs-icon {
            width: 120px;
            height: 120px;
        }

        .info-box-sdgs-content {
            padding: 5px 10px;
            margin-left: 130px;
        }

        .info-box-sdgs-icon {
            padding-top: 0;
            background: white;
        }

        .info-box-sdgs-text {
            text-transform: capitalize;
        }

        .info-box-icon-sdgs {
            border-radius: 5px;
        }

        .sdgs-logo {
            width: 120px;
            height: 100px;
        }

        .total-bumds {
            font-size: 32px;
            font-weight: bold;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #232b39;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .desc-bumds {
            margin-top: 8px;
            font-size: 21px;
            font-weight: normal;
            font-stretch: normal;
            font-style: normal;
            line-height: normal;
            letter-spacing: normal;
            text-align: left;
            color: #5a677d;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('title'); ?>
    <h1>
        Status SDGS Desa
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Status SDGS Desa</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('admin.status_desa.navigasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="box box-info">
        <?php if(can('u')): ?>
            <div class="box-header with-border">
                <a class="btn btn-social btn-success btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" <?php echo !cek_koneksi_internet() ? 'disabled title="Perangkat tidak terhubung dengan jaringan"' : 'id="perbarui"'; ?>><i class="fa fa-refresh"></i>Perbarui <?php echo e($header); ?></a>
            </div>
        <?php endif; ?>
        <div class="box-body">
            <?php if($sdgs->error_msg): ?>
                <div class="alert alert-danger">
                    <?php echo $sdgs->error_msg; ?>

                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="info-box info-box-sdgs" style="display: flex;justify-content: center;">
                            <span class="info-box-number total-bumds" style="text-align: center;"><?php echo e($sdgs->average); ?>

                                <span class="info-box-text info-box-sdgs-text desc-bumds" style="text-align: center;">Skor
                                    SDGs
                                    <?php echo e(setting('sebutan_desa')); ?></span>
                            </span>
                        </div>
                    </div>

                    <?php $__currentLoopData = $sdgs->data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="info-box info-box-sdgs">
                                <span class="info-box-icon info-box-icon-sdgs">
                                    <img class="sdgs-logo" src="<?php echo e(asset("images/sdgs/{$value->image}")); ?>" alt="<?php echo e($value->image); ?>">
                                </span>
                                <div class="info-box-content info-box-sdgs-content">
                                    <span class="info-box-number info-box-sdgs-number total-bumds"><?php echo e($value->score); ?>

                                        <span class="info-box-text info-box-sdgs-text desc-bumds">Nilai</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php if(can('u')): ?>
    <?php $__env->startPush('scripts'); ?>
        <script type="text/javascript">
            $(document).ready(function() {
                var server_pantau = "<?php echo e(config_item('server_pantau')); ?>";
                var token_pantau = "<?php echo e(config_item('token_pantau')); ?>";
                var kode_desa = "<?php echo e($kode_desa); ?>";

                $('#perbarui').click(function(event) {
                    event.preventDefault;
                    Swal.fire({
                        title: 'Sedang Memproses',
                        allowOutsideClick: false,
                        allowEscapeKey: false,
                        showConfirmButton: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });
                    $.ajax({
                            type: 'GET',
                            url: server_pantau + '/index.php/api/wilayah/kodedesa?token=' + token_pantau +
                                '&kode=' + kode_desa,
                            dataType: 'json',
                        })
                        .done(function(response) {
                            console.log(response);
                            $.ajax({
                                    url: '<?php echo e(ci_route('status_desa.perbarui_bps')); ?>',
                                    type: 'Post',
                                    dataType: 'json',
                                    data: {
                                        'kode_bps': response.bps_kemendagri_desa.kode_desa_bps
                                    }
                                })
                                .done(function(value) {
                                    if (value.status) {
                                        location.replace('<?php echo e(ci_route('status_desa.perbarui_sdgs')); ?>')
                                    } else {
                                        Swal.fire({
                                            icon: 'error',
                                            text: value.message,
                                            showCloseButton: false
                                        })
                                    }
                                })
                                .fail(function(e) {
                                    Swal.fire({
                                        icon: 'error',
                                        text: e,
                                        showCloseButton: false
                                    })
                                });
                        })
                        .fail(function(e) {
                            Swal.fire({
                                icon: 'error',
                                text: e,
                                showCloseButton: false
                            })
                        });
                });
            });
        </script>
    <?php $__env->stopPush(); ?>
<?php endif; ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/status_desa/sdgs.blade.php ENDPATH**/ ?>