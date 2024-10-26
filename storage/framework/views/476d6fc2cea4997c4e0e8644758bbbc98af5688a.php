<?php $__env->startPush('css'); ?>
    <style type="text/css">
        .mini-submenu {
            display: none;
            background-color: rgba(0, 0, 0, 0);
            border: 1px solid rgba(0, 0, 0, 0.9);
            border-radius: 4px;
            padding: 9px;
            /*position: relative;*/
            width: 42px;
            cursor: pointer;
        }

        #slide-submenu {
            display: inline-block;
            padding: 2px;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
<?php $__env->stopPush(); ?>

<button class="mini-submenu">
    <i class="fa fa-bars"></i>
</button>

<div class="list-group">
    <div class="box-footer no-padding col-sm-11">
        <ul class="nav nav-stacked">
            <li class="<?= ($selected_nav == 'peraturan') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('dokumen_sekretariat/perdes/3')); ?>"><?php echo e(SebutanDesa('Buku Peraturan di [Desa]')); ?></a>
            </li>
            <li class="<?= ($selected_nav == 'keputusan') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('dokumen_sekretariat/perdes/2')); ?>">Buku Keputusan <?php echo e(ucwords($setting->sebutan_kepala_desa)); ?></a></li>
            <li class="<?= ($selected_nav == 'inventaris') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('bumindes_inventaris_kekayaan')); ?>"><?php echo e(SebutanDesa('Buku Inventaris dan Kekayaan [Desa]')); ?></a>
            </li>
            <li class="<?= ($selected_nav == 'pengurus') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('pengurus')); ?>"><?php echo e('Buku ' . ucwords(setting('sebutan_pemerintah_desa'))); ?></a></li>
            <li class="<?= ($selected_nav == 'tanah_kas') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('bumindes_tanah_kas_desa/clear')); ?>"><?php echo e(SebutanDesa('Buku Tanah Kas [Desa]')); ?></a>
            </li>
            <li class="<?= ($selected_nav == 'tanah') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('bumindes_tanah_desa')); ?>"><?php echo e(SebutanDesa('Buku Tanah di [Desa]')); ?></a>
            </li>
            <li class="<?= ($selected_nav == 'agenda_keluar') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('surat_keluar')); ?>">Buku Agenda - Surat Keluar</a>
            </li>
            <li class="<?= ($selected_nav == 'agenda_masuk') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('surat_masuk')); ?>">Buku Agenda - Surat Masuk</a></li>
            <li class="<?= ($selected_nav == 'ekspedisi') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('ekspedisi/clear')); ?>">Buku Ekspedisi</a></li>
            <li class="<?= ($selected_nav == 'lembaran') ? 'active' : ''; ?>"><a href="<?php echo e(site_url('lembaran_desa/clear')); ?>"><?php echo e(SebutanDesa('Buku Lembaran [Desa] dan Berita [Desa]')); ?></a>
            </li>
        </ul>
    </div>
    <button class="hide-menu col-sm-1" id="slide-submenu">
        <i class="fa fa-bars"></i>
    </button>
</div>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(function() {

            $('#slide-submenu').on('click', function() {
                $(this).closest('.list-group').fadeOut('slow', function() {
                    $('.mini-submenu').fadeIn();
                });
                $('#umum-sidebar').removeClass("col-sm-3");
                $('#umum-sidebar').addClass("col-sm-1");
                $('#umum-content').removeClass("col-sm-9");
                $('#umum-content').addClass("col-sm-11");
            });

            $('.mini-submenu').on('click', function() {
                $(this).next('.list-group').fadeIn('slow');
                $('.mini-submenu').hide();
                $('#umum-sidebar').removeClass("col-sm-1");
                $('#umum-sidebar').addClass("col-sm-3");
                $('#umum-content').removeClass("col-sm-11");
                $('#umum-content').addClass("col-sm-9");
            })
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\opensid\resources\views/admin/layouts/components/side_bukudesa.blade.php ENDPATH**/ ?>