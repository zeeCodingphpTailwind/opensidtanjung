                                        <div class="tab-pane <?php echo e($act_tab == 2 ? 'active' : ''); ?>">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="box-header with-border">
                                                        <h3 class="box-title"><strong>Migrasi Database Ke <?php echo e(config_item('nama_aplikasi')); ?> <?php echo e(AmbilVersi()); ?></strong></h3>
                                                    </div>
                                                    <div class="box-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <form action="<?php echo e($form_action); ?>" method="post" enctype="multipart/form-data" id="excell" class="form-horizontal">
                                                                    <p>Proses ini untuk mengubah database SID ke struktur database <?php echo e(config_item('nama_aplikasi')); ?> <?php echo e(AmbilVersi()); ?>.</p>
                                                                    <p class="text-muted text-red well well-sm no-shadow" style="margin-top: 10px;">
                                                                        <small>
                                                                            <strong><i class="fa fa-info-circle text-red"></i> Sebelum melakukan migrasi ini, pastikan database SID anda telah dibackup.</strong>
                                                                        </small>
                                                                    </p>
                                                                    <p>Apabila sesudah melakukan konversi ini, masih ditemukan masalah, laporkan di :</P>
                                                                    <ul>
                                                                        <li> <a href="https://github.com/OpenSID/OpenSID/issues">https://github.com/OpenSID/OpenSID/issues</a></li>
                                                                        <li> <a href="<?php echo e(config_item('fb_opendesa')); ?>"><?php echo e(config_item('fb_opendesa')); ?></a></li>
                                                                    </ul>
                                                                    <table class="table table-bordered">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td style="padding-top:20px;padding-bottom:10px;">
                                                                                    <div class="form-group">
                                                                                        <div class="col-sm-5 col-md-4">
                                                                                            <a href="#" class="btn btn-block btn-danger btn-sm ajax migrasi" title="Migrasi DB"></i> Migrasi Database Ke <?php echo e(config_item('nama_aplikasi')); ?> <?php echo e(AmbilVersi()); ?></a>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="ajax-content"></div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $__env->startPush('css'); ?>
                                            <link rel="stylesheet" href="<?php echo e(asset('js/sweetalert2/sweetalert2.min.css')); ?>">
                                        <?php $__env->stopPush(); ?>
                                        <?php $__env->startPush('scripts'); ?>
                                            <script src="<?php echo e(asset('js/sweetalert2/sweetalert2.all.min.js')); ?>"></script>
                                            <script src="<?php echo e(asset('js/backup.min.js')); ?>"></script>
                                            <script>
                                                $(function() {
                                                    $('.migrasi').click(function(e) {
                                                        e.preventDefault();
                                                        Swal.fire({
                                                            title: 'Apakah anda sudah melakukan backup database ?',
                                                            showDenyButton: true,
                                                            confirmButtonText: 'Sudah',
                                                            denyButtonText: `Belum`,
                                                        }).then((result) => {
                                                            /* Read more about isConfirmed, isDenied below */
                                                            if (result.isConfirmed) {
                                                                let f = new FormData
                                                                let _redirect = false
                                                                f.append("sidcsrf", getCsrfToken())

                                                                Swal.fire({
                                                                    title: "Proses migrasi database, mohon ditunggu ",
                                                                    html: "Progress : <b></b>",
                                                                    timerProgressBar: !0,
                                                                    didOpen() {
                                                                        Swal.showLoading();
                                                                        let lastResponseLength = false
                                                                        let a = Swal.getHtmlContainer().querySelector("b");
                                                                        $.ajax({
                                                                            url: '<?php echo e($form_action); ?>',
                                                                            type: "POST",
                                                                            data: f,
                                                                            dataType: 'json',
                                                                            processData: !1,
                                                                            contentType: !1,
                                                                            xhrFields: {
                                                                                // Getting on progress streaming response
                                                                                onprogress: function(e) {
                                                                                    var result, tmpJson;
                                                                                    var response = e.currentTarget.response;
                                                                                    var parsedResponse;
                                                                                    let lastPosition = 0;
                                                                                    if (lastResponseLength === false) {
                                                                                        result = response;
                                                                                        lastResponseLength = response.length;
                                                                                    } else {
                                                                                        result = response.substring(lastResponseLength);
                                                                                        lastResponseLength = response.length;
                                                                                    }

                                                                                    try {
                                                                                        lastPosition = result.lastIndexOf('{');
                                                                                        tmpJson = $.trim(result.substring(lastPosition));

                                                                                        parsedResponse = JSON.parse(tmpJson);

                                                                                        a.textContent = parsedResponse['message']
                                                                                        if (parsedResponse['status'] !== undefined) {
                                                                                            Swal.hideLoading()
                                                                                            Swal.disableButtons();
                                                                                            if (parsedResponse['status'] == 1) {
                                                                                                _redirect = true
                                                                                                Swal.enableButtons()
                                                                                            }
                                                                                        }
                                                                                    } catch (error) {
                                                                                        console.err(error)
                                                                                    }
                                                                                }
                                                                            },
                                                                            success: function(e) {
                                                                                Swal.hideLoading()
                                                                            },
                                                                            error: function(x, status, error) {
                                                                                // console.log(error)
                                                                            }
                                                                        })
                                                                    }
                                                                }).then((result) => {
                                                                    if (result && _redirect) {
                                                                        window.location.reload()
                                                                    }
                                                                });
                                                            }
                                                        })
                                                    })
                                                })
                                            </script>
                                        <?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\opensid\resources\views/admin/database/migrasi_cri.blade.php ENDPATH**/ ?>