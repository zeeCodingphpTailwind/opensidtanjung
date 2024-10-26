<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('title'); ?>
    <h1>
        <?php echo e(SebutanDesa('Identitas [Desa]')); ?>

        <small>Ubah Data</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(ci_route('identitas_desa')); ?>"><?php echo e(SebutanDesa('Identitas [Desa]')); ?></a></li>
    <li class="active">Ubah Data</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('admin.identitas_desa.info_kades', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo form_open_multipart($form_action, 'class="form-horizontal" id="validasi"'); ?>

    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="<?php echo e(gambar_desa($main['path_logo'])); ?>" alt="Logo">
                    <br />
                    <p class="text-center text-bold">Lambang <?php echo e(ucwords($setting->sebutan_desa)); ?></p>
                    <p class="text-muted text-center text-red">(Kosongkan, jika logo tidak berubah)</p>
                    <br />
                    <div class="form-group">
                        <label class="col-sm-12 control-label" for="ukuran">Dimensi logo (persegi)</label>
                        <div class="col-sm-12">
                            <input
                                id="ukuran"
                                name="ukuran"
                                class="form-control input-sm number"
                                min="100"
                                max="400"
                                type="text"
                                placeholder="Kosongkan jika ingin dimensi bawaan"
                            />
                        </div>
                    </div>
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" id="file_path">
                        <input type="file" class="hidden" id="file" name="logo" accept=".gif,.jpg,.jpeg,.png">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="img-responsive" src="<?php echo e(gambar_desa($main['path_kantor_desa'], true)); ?>" alt="Kantor <?php echo e(ucwords($setting->sebutan_desa)); ?>">
                    <br />
                    <p class="text-center text-bold">Kantor <?php echo e(ucwords($setting->sebutan_desa)); ?></p>
                    <p class="text-muted text-center text-red">(Kosongkan, jika kantor
                        <?php echo e(ucwords($setting->sebutan_desa)); ?> tidak berubah)
                    </p>
                    <br />
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" id="file_path2">
                        <input type="file" class="hidden" id="file2" name="kantor_desa" accept=".gif,.jpg,.jpeg,.png">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" id="file_browser2"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="<?php echo e(ci_route('identitas_desa')); ?>" class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Data <?php echo e(ucwords($setting->sebutan_desa)); ?>"><i class="fa fa-arrow-circle-o-left"></i> Kembali
                        Ke
                        Data Identitas
                        <?php echo e(ucwords($setting->sebutan_desa)); ?></a>
                </div>
                <div class="box-body">
                    <?php $koneksi = cek_koneksi_internet() && $status_pantau ? true : false; ?>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama">Nama
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <?php if($koneksi): ?>
                                <select
                                    id="pilih_desa"
                                    name="pilih_desa"
                                    class="form-control input-sm select-nama-desa"
                                    data-placeholder="<?php echo e($main['nama_desa']); ?> - <?php echo e($main['nama_kecamatan']); ?> - <?php echo e($main['nama_kabupaten']); ?> - <?php echo e($main['nama_propinsi']); ?>"
                                    data-token="<?php echo e(config_item('token_pantau')); ?>"
                                    data-tracker='<?php echo e(config_item('server_pantau')); ?>'
                                    style="display: none;"
                                ></select>
                            <?php endif; ?>
                            <input
                                type="hidden"
                                id="nama_desa"
                                class="form-control input-sm nama_desa required"
                                minlength="3"
                                maxlength="50"
                                name="nama_desa"
                                value="<?php echo e($main['nama_desa']); ?>"
                            >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_desa">Kode
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_desa"
                                name="kode_desa"
                                class="form-control input-sm <?php echo e(jecho($koneksi, false, 'bilangan')); ?> required"
                                <?php echo e(jecho($koneksi, false, 'minlength="10" maxlength="10"')); ?>

                                type="text"
                                onkeyup="tampil_kode_desa()"
                                placeholder="Kode <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                value="<?php echo e($main['kode_desa']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_pos">Kode Pos
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-2">
                            <input
                                id="kode_pos"
                                name="kode_pos"
                                class="form-control input-sm number"
                                minlength="5"
                                maxlength="5"
                                type="text"
                                placeholder="Kode Pos <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                value="<?php echo e($main['kode_pos']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="pamong_id">
                            <?php echo e(ucwords(setting('sebutan_kepala_desa'))); ?></label>
                        <div class="col-sm-8">
                            <input class="form-control input-sm" type="text" placeholder="NIP <?php echo e(ucwords(setting('sebutan_kepala_desa'))); ?>" value="<?php echo e($main['nama_kepala_desa']); ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">NIP <?php echo e(ucwords(setting('sebutan_kepala_desa'))); ?></label>
                        <div class="col-sm-8">
                            <input class="form-control input-sm" type="text" placeholder="NIP <?php echo e(ucwords(setting('sebutan_kepala_desa'))); ?>" value="<?php echo e($main['nip_kepala_desa']); ?>" readonly />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="alamat_kantor">Alamat Kantor
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <textarea
                                id="alamat_kantor"
                                name="alamat_kantor"
                                class="form-control input-sm alamat required"
                                maxlength="100"
                                placeholder="Alamat Kantor <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                rows="3"
                                style="resize:none;"
                            ><?php echo e($main['alamat_kantor']); ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="email_desa">E-Mail
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <input
                                id="email_desa"
                                name="email_desa"
                                class="form-control input-sm email"
                                maxlength="50"
                                type="text"
                                placeholder="E-Mail <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                value="<?php echo e($main['email_desa']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="telepon">Nomor Telepon
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <input
                                id="telepon"
                                name="telepon"
                                class="form-control input-sm bilangan"
                                type="text"
                                maxlength="15"
                                placeholder="Telpon <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                value="<?php echo e($main['telepon']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="telepon">Nomor Ponsel
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <input
                                id="telepon-operator"
                                name="nomor_operator"
                                class="form-control input-sm bilangan"
                                type="text"
                                maxlength="15"
                                placeholder="Nomor Ponsel"
                                value="<?php echo e($main['nomor_operator']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="website">Website
                            <?php echo e(ucwords($setting->sebutan_desa)); ?></label>
                        <div class="col-sm-8">
                            <input
                                id="website"
                                name="website"
                                class="form-control input-sm url"
                                maxlength="50"
                                type="text"
                                placeholder="Website <?php echo e(ucwords($setting->sebutan_desa)); ?>"
                                value="<?php echo e($main['website']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kecamatan">Nama
                            <?php echo e(ucwords($setting->sebutan_kecamatan)); ?></label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_kecamatan"
                                name="nama_kecamatan"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama <?php echo e(ucwords($setting->sebutan_kecamatan)); ?>"
                                value="<?php echo e($main['nama_kecamatan']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_kecamatan">Kode
                            <?php echo e(ucwords($setting->sebutan_kecamatan)); ?></label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_kecamatan"
                                name="kode_kecamatan"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode <?php echo e(ucwords($setting->sebutan_kecamatan)); ?>"
                                value="<?php echo e($main['kode_kecamatan']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kecamatan">Nama
                            <?php echo e(ucwords($setting->sebutan_camat)); ?></label>
                        <div class="col-sm-8">
                            <input
                                id="nama_kepala_camat"
                                name="nama_kepala_camat"
                                class="form-control input-sm nama required"
                                maxlength="50"
                                type="text"
                                placeholder="Nama <?php echo e(ucwords($setting->sebutan_camat)); ?>"
                                value="<?php echo e($main['nama_kepala_camat']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nip_kepala_camat">NIP
                            <?php echo e(ucwords($setting->sebutan_camat)); ?></label>
                        <div class="col-sm-4">
                            <input
                                id="nip_kepala_camat"
                                name="nip_kepala_camat"
                                class="form-control input-sm nomor_sk"
                                maxlength="50"
                                type="text"
                                placeholder="NIP <?php echo e(ucwords($setting->sebutan_camat)); ?>"
                                value="<?php echo e($main['nip_kepala_camat']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_kabupaten">Nama
                            <?php echo e(ucwords($setting->sebutan_kabupaten)); ?></label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_kabupaten"
                                name="nama_kabupaten"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama <?php echo e(ucwords($setting->sebutan_kabupaten)); ?>"
                                value="<?php echo e($main['nama_kabupaten']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_kabupaten">Kode
                            <?php echo e(ucwords($setting->sebutan_kabupaten)); ?></label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_kabupaten"
                                name="kode_kabupaten"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode <?php echo e(ucwords($setting->sebutan_kabupaten)); ?>"
                                value="<?php echo e($main['kode_kabupaten']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="nama_propinsi">Nama Provinsi</label>
                        <div class="col-sm-8">
                            <input
                                readonly
                                id="nama_propinsi"
                                name="nama_propinsi"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Nama Propinsi"
                                value="<?php echo e($main['nama_propinsi']); ?>"
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="kode_propinsi">Kode Provinsi</label>
                        <div class="col-sm-2">
                            <input
                                readonly
                                id="kode_propinsi"
                                name="kode_propinsi"
                                class="form-control input-sm required"
                                type="text"
                                placeholder="Kode Provinsi"
                                value="<?php echo e($main['kode_propinsi']); ?>"
                            />
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i>
                        Batal</button>
                    <button type="submit" class="btn btn-social btn-info btn-sm pull-right simpan"><i class="fa fa-check"></i>
                        Simpan</button>
                </div>
            </div>
        </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <?php echo $__env->make('admin.layouts.components.select2_desa', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <script src="<?php echo e(asset('bootstrap/js/jquery.inputmask.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            var koneksi = "<?php echo e(cek_koneksi_internet()); ?>";
            var koneksi_pantau = <?php echo e($status_pantau); ?>

            var demo = "<?php echo e(config_item('demo')); ?>";

            tampil_kode_desa();

            if (koneksi && koneksi_pantau) {
                $("#nama_desa").attr('type', 'hidden');

                var server_pantau = "<?php echo e(config_item('server_pantau')); ?>";
                var token_pantau = "<?php echo e(config_item('token_pantau')); ?>";

                // Ambil Nama dan Kode Wilayah dari Pantau > Wilayah
                $('[name="pilih_desa"]').change(function() {
                    $.ajax({
                        type: 'GET',
                        url: server_pantau + '/index.php/api/wilayah/ambildesa?token=' +
                            token_pantau + '&id_desa=' + $(this).val(),
                        dataType: 'json',
                        success: function(data) {
                            $('[name="nama_desa"]').val(data.KODE_WILAYAH[0].nama_desa);
                            $('[name="kode_desa"]').val(data.KODE_WILAYAH[0].kode_desa);
                            $('[name="nama_kecamatan"]').val(data.KODE_WILAYAH[0].nama_kec);
                            $('[name="kode_kecamatan"]').val(data.KODE_WILAYAH[0].kode_kec);
                            $('[name="nama_kabupaten"]').val(hapus_kab_kota(huruf_awal_besar(
                                data.KODE_WILAYAH[0].nama_kab)));
                            $('[name="kode_kabupaten"]').val(data.KODE_WILAYAH[0].kode_kab);
                            $('[name="nama_propinsi"]').val(huruf_awal_besar(data.KODE_WILAYAH[
                                0].nama_prov));
                            $('[name="kode_propinsi"]').val(data.KODE_WILAYAH[0].kode_prov);
                        }
                    });
                });

                function hapus_kab_kota(str) {
                    return str.replace(/KAB |KOTA /gi, '');
                }
            } else {
                $("#nama_desa").attr('type', 'text');
                $("#kode_desa").removeAttr('readonly');
                $("#kode_desa").inputmask('9999999999');
                $("#nama_kecamatan").removeAttr('readonly');
                $("#nama_kabupaten").removeAttr('readonly');
                $("#nama_propinsi").removeAttr('readonly');
            }

            $('#kades').change(function() {
                var nip = $("#kades option:selected").attr("data-nip");
                $("#nip_kepala_desa").val(nip);
            });

            // simpan
            $(document).on("submit", "form#validasi", function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Sedang Menyimpan',
                    allowOutsideClick: false,
                    allowEscapeKey: false,
                    showConfirmButton: false,
                    didOpen: () => {
                        Swal.showLoading()
                    }
                });
                $.ajax({
                        url: $(this).attr("action"),
                        type: $(this).attr("method"),
                        dataType: "JSON",
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                    })
                    .done(function(response) {
                        if (demo == false) {
                            $.ajax({
                                    url: `<?= config_item('server_layanan') ?>/api/v1/pelanggan/pemesanan`,
                                    headers: {
                                        "Authorization": `Bearer <?= setting('layanan_opendesa_token') ?>`,
                                        "X-Requested-With": `XMLHttpRequest`,
                                    },
                                    type: 'Post',
                                })
                                .done(function(response) {
                                    let data = {
                                        body: response
                                    }

                                    $.ajax({
                                        url: `${SITE_URL}pelanggan/pemesanan`,
                                        type: 'Post',
                                        dataType: 'json',
                                        data: data,
                                    })
                                })
                        }

                        if (response.status) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Berhasil Ubah Data',
                            })
                            window.location.replace(`${SITE_URL}identitas_desa`);
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Gagal Ubah Data',
                                text: response.message,
                            })
                        }
                    })
                    .fail(function(response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal Ubah Data',
                            text: response.message,
                        })
                    });
            });

        });

        function tampil_kode_desa() {
            var kode_desa = $('#kode_desa').val();
            $('#kode_kecamatan').val(kode_desa.substr(0, 6));
            $('#kode_kabupaten').val(kode_desa.substr(0, 4));
            $('#kode_propinsi').val(kode_desa.substr(0, 2));
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opensid\resources\views/admin/identitas_desa/form.blade.php ENDPATH**/ ?>