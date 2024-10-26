<?php echo $__env->make('admin.layouts.components.datetime_picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('title'); ?>
    <h1>Optimasi Gambar</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Optimasi Gambar</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="box box-info">
        <div class="row">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3 class="box-title"><strong>Ubah Ukuran Gambar</strong></h3>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="col-sm-10">Folder desa/upload/</td>
                                        <td class="col-sm-2">
                                            <?php if(can('u')): ?>
                                                <button type="button" class="btn btn-social btn-flat btn-block btn-info btn-sm resize-all" title="Resize Gambar"><i class="fa fa-picture-o"></i> Resize Gambar
                                                </button>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <table class="table table-bordered">
                                <tbody>
                                    <?php $__currentLoopData = $folders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dir): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="col-sm-10">Folder desa/upload/<b><?php echo e($dir); ?></b></td>
                                            <td class="col-sm-2">
                                                <?php if(can('u')): ?>
                                                    <button data-dir="<?php echo e($dir); ?>" type="button" class="btn btn-social btn-flat btn-block btn-info btn-sm resize" title="Resize Gambar"><i class="fa fa-picture-o"></i> Resize Gambar
                                                    </button>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <p>Proses Resize hanya merubah ukuran gambar yang melebihi ukuran lebar 880px dan tinggi 880px.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(function() {
            $('.resize').click(function(event) {
                Swal.fire({
                    title: 'Ubah ukuran gambar di folder ' + $(this).data('dir'),
                    showCancelButton: true,
                    confirmButtonText: 'Ok',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.isConfirmed) {
                        periksa($(this).data('dir'));

                    }
                })
            });

            $('.resize-all').click(function(event) {
                Swal.fire({
                    title: 'Ubah ukuran gambar di folder upload',
                    showCancelButton: true,
                    confirmButtonText: 'Ok',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.isConfirmed) {
                        periksa();
                    }
                })
            });

            periksa = function(dir = '') {
                Swal.fire({
                    title: 'Sedang Memeriksa',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                $.ajax({
                        url: "<?php echo e(ci_route('optimasi_gambar.get_image')); ?>/" + dir,
                        dataType: 'json',
                    })
                    .done(function(files) {
                        if (files.status == true) {
                            Swal.fire({
                                title: 'Sedang mengoptimasi gambar',
                                html: ` `,
                                didOpen: () => {
                                    Swal.showLoading();
                                    resize_gambar(files.data);
                                },
                            })
                        }
                    })
                    .fail(function(error) {
                        Swal.fire(err.responseText, '', 'warning')
                    });
            }
        });

        resize_gambar = async (files) => {
            var length = files.length;
            for (var i = 1; i < (length + 1); i++) {
                await $.ajax({
                        url: '<?php echo e(ci_route('optimasi_gambar.resize')); ?>',
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            'file': files[i - 1]
                        },
                    })
                    .done(function() {
                        $('#swal2-html-container').html(
                            `<div class="progress-bar" role="progressbar" aria-valuenow="${(i/length)*100}" aria-valuemin="0" aria-valuemax="100" style="width: ${(i/length)*100}%;">${i}/${length}</div>`
                        );
                    })
                    .fail(function(error) {
                        Swal.fire(err.responseText, '', 'warning')
                        return;
                    });
            }
            Swal.fire('Optimasi gambar selesai', '', 'info')
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/optimasi_gambar/index.blade.php ENDPATH**/ ?>