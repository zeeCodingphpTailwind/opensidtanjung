<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title'); ?>
    <h1>
        Pendaftar Layanan Mandiri
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Pendaftar Layanan Mandiri</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <?php if(can('u')): ?>
                <a href="<?php echo e(ci_route('mandiri.ajax_pin')); ?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Buat PIN Warga" class="btn btn-social btn-success btn-sm"><i class="fa fa-plus"></i> Tambah Pengguna</a>
            <?php endif; ?>
        </div>
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tabeldata">
                    <thead>
                        <tr>
                            <th class="padat">NO</th>
                            <th class="aksi">AKSI</th>
                            <th class="padat">NIK</th>
                            <th>Nama Penduduk</th>
                            <th class="padat">Tanggal Buat</th>
                            <th class="padat">Login Terakhir</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <?php echo $__env->make('admin.layouts.components.konfirmasi_hapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php if(session('info')): ?>
        <?php
            $info = session('info');
        ?>
        <div
            class="modal fade"
            id="pinBox"
            role="dialog"
            aria-labelledby="myModalLabel"
            aria-hidden="true"
            data-backdrop="false"
            data-keyboard="false"
        >
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header btn-info">
                        <button type='button' class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title' id='myModalLabel">PIN Warga (<?php echo e($info['nama']); ?>)</h4>
                    </div>
                    <form action="<?php echo e(ci_route('mandiri.kirim', $info['id_pend'])); ?>" method="post" id="validasi" target="_blank">
                        <input type="hidden" id="pin" name="pin" value="<?php echo e($info['pin']); ?>">
                        <div class="modal-body">
                            Berikut adalah kode pin yang baru saja di hasilkan, silakan dicatat atau di ingat dengan baik,
                            kode pin ini sangat rahasia, dan hanya bisa dilihat sekali ini lalu setelah itu hanya bisa di
                            reset saja.<br />

                            <h4>Kode PIN : <?php echo e($info['pin']); ?></h4>

                            <?php if(session('notif_kirim_verifikasi')): ?>
                                <?php
                                    $kirim_verifikasi = session('notif_kirim_verifikasi');
                                ?>
                                <div class="callout callout-<?php echo e($kirim_verifikasi['status'] == 1 ? 'success' : 'danger'); ?>" style="margin-top: 30px;">
                                    <p><?php echo e($kirim_verifikasi['pesan']); ?></p>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-social btn-warning btn-sm" data-dismiss="modal"><i class="fa fa-sign-out"></i> Tutup</button>
                            <?php if(cek_koneksi_internet() && $info['pin'] && $info['telepon']): ?>
                                <button type="submit" class="btn btn-social btn-success btn-sm"><i class="fa fa-whatsapp"></i> Kirim</button>
                            <?php endif; ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            <?php if(session('info')): ?>
                $('#pinBox').modal('show');
            <?php endif; ?>
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: "<?php echo e(ci_route('mandiri.datatables')); ?>",
                columns: [{
                        data: 'DT_RowIndex',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'aksi',
                        class: 'aksi',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'penduduk.nik',
                        name: 'penduduk.nik',
                        defaultContent: '',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'penduduk.nama',
                        name: 'penduduk.nama',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'tanggal_buat',
                        name: 'tanggal_buat',
                        searchable: false,
                        orderable: true,
                        class: 'padat'
                    },
                    {
                        data: 'last_login',
                        name: 'last_login',
                        searchable: false,
                        orderable: true,
                        class: 'padat'
                    },
                ],
                order: [
                    [4, 'desc']
                ],
                createdRow: function(row, data, dataIndex) {
                    if (!data.penduduk.telepon) {
                        $(row).addClass('select-row')
                    }
                },
            });

            if (ubah == 0 && hapus == 0) {
                TableData.column(1).visible(false);
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/layanan_mandiri/daftar/index.blade.php ENDPATH**/ ?>