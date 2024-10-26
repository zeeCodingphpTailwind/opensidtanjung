<div id="isi_popup_dusun">
    <?php $__currentLoopData = $dusun_gis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key_dusun => $dusun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div id="isi_popup_dusun_<?php echo e($key_dusun); ?>" style="visibility: hidden;">
            <div id="content">
                <?php
                    $link = underscore($dusun['dusun']);
                    $data_title = "{$wilayah} {$dusun['dusun']}";
                ?>
                <h5 id="firstHeading" class="firstHeading">Wilayah <?php echo e($data_title); ?></h5>
                <p><a
                        href="#collapseStatPenduduk"
                        class="btn btn-social bg-navy btn-sm btn-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block btn-modal"
                        title="Statistik Penduduk"
                        data-toggle="collapse"
                        data-target="#collapseStatPenduduk"
                        aria-expanded="false"
                        aria-controls="collapseStatPenduduk"
                    ><i class="fa fa-bar-chart"></i>Statistik Penduduk</a></p>
                <div class="collapse box-body no-padding" id="collapseStatPenduduk">
                    <div id="bodyContent">
                        <div class="card card-body">
                            <?php $__currentLoopData = $list_ref; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li <?php echo e(jecho($lap, $key, 'class="active"')); ?>><a href="<?php echo e(ci_route("statistik.chart_gis_dusun.{$key}.{$link}")); ?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Statistik Penduduk <?php echo e($data_title); ?>"><?php echo e($value); ?></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>

                <p><a
                        href="#collapseStatBantuan"
                        class="btn btn-social bg-navy btn-sm btn-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block btn-modal"
                        title="Statistik Bantuan"
                        data-toggle="collapse"
                        data-target="#collapseStatBantuan"
                        aria-expanded="false"
                        aria-controls="collapseStatBantuan"
                    ><i class="fa fa-heart"></i>Statistik Bantuan</a></p>
                <div class="collapse box-body no-padding" id="collapseStatBantuan">
                    <div class="card card-body">
                        <?php $__currentLoopData = $list_bantuan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li <?php echo e(jecho($lap, $key, 'class="active"')); ?>><a href="<?php echo e(ci_route("statistik.chart_gis_dusun.{$key}.{$link}")); ?>" data-remote="false" data-toggle="modal" data-target="#modalBox" data-title="Statistik Bantuan <?php echo e($data_title); ?>"><?php echo e($value); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\laragon\www\opensid\resources\views/admin/gis/content_dusun.blade.php ENDPATH**/ ?>