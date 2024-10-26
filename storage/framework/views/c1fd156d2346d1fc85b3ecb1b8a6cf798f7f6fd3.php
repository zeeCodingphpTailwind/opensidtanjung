<?php echo form_open_multipart(ci_route('notif.update_setting'), 'class="form-group" id="main_setting"'); ?>

<div class="modal-body">
    <?php $__currentLoopData = $list_setting; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $pengaturan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($pengaturan->jenis != 'upload' && $pengaturan->kategori == $kategori_pengaturan): ?>
            <div class="form-group" id="form_<?php echo e($pengaturan->key); ?>">
                <label><?php echo e(SebutanDesa($pengaturan->judul)); ?></label>
                <?php if($pengaturan->jenis == 'option' || $pengaturan->jenis == 'boolean'): ?>
                    <select <?php echo $pengaturan->attribute ? str_replace('class="', 'class="form-control input-sm select2 required ', $pengaturan->attribute) : 'class="form-control input-sm select2 required"'; ?> id="<?php echo e($pengaturan->key); ?>" name="<?php echo e($pengaturan->key); ?>">
                        <?php $__currentLoopData = $pengaturan->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($key); ?>" <?= ($pengaturan->value == $key) ? 'selected' : ''; ?>><?php echo e($value); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php elseif($pengaturan->jenis == 'multiple-option'): ?>
                    <select class="form-control input-sm select2 required" name="<?php echo e($pengaturan->key); ?>[]" multiple="multiple">
                        <?php $__currentLoopData = $pengaturan->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($val); ?>" <?php echo e(in_array($val, json_decode($pengaturan->value) ?? []) ? 'selected' : ''); ?>>
                                <?php echo e($val); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php elseif($pengaturan->jenis == 'multiple-option-array'): ?>
                    <input type="hidden" name="<?php echo e($pengaturan->key); ?>" value="[]">
                    <select class="form-control input-sm select2" name="<?php echo e($pengaturan->key); ?>[]" multiple="multiple">
                        <?php $__currentLoopData = $pengaturan->option; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($val['id']); ?>" <?php echo e(in_array($val['id'], json_decode($pengaturan->value) ?? []) ? 'selected' : ''); ?>><?php echo e($val['nama']); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                <?php elseif($pengaturan->jenis == 'datetime'): ?>
                    <div class="input-group input-group-sm date">
                        <div class="input-group-addon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <input <?php echo $pengaturan->attribute ? str_replace('class="', 'class="form-control input-sm pull-right tgl_1 ', $pengaturan->attribute) : 'class="form-control input-sm pull-right tgl_1"'; ?> id="<?php echo e($pengaturan->key); ?>" name="<?php echo e($pengaturan->key); ?>" type="text" value="<?php echo e($pengaturan->value); ?>">
                    </div>
                <?php elseif($pengaturan->jenis == 'unggah'): ?>
                    <div class="input-group">
                        <input type="text" class="form-control input-sm" id="file_path" name="<?php echo e($pengaturan->key); ?>">
                        <input type="file" class="hidden" id="file" name="<?php echo e($pengaturan->key); ?>">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-sm" id="file_browser"><i class="fa fa-search"></i>&nbsp;</button>
                            <a href="<?php echo e(file_exists(FCPATH . $pengaturan->value) ? asset($pengaturan->value, false) : asset('images/kehadiran/bg.jpg')); ?>" class="btn btn-danger btn-sm" title="Lihat Gambar" target="_blank"><i class="fa fa-eye"></i>&nbsp;</a>
                        </span>
                    </div>
                <?php elseif($pengaturan->jenis == 'textarea'): ?>
                    <textarea <?php echo $pengaturan->attribute ? str_replace('class="', 'class="form-control input-sm ', $pengaturan->attribute) : 'class="form-control input-sm"'; ?> name="<?php echo e($pengaturan->key); ?>" placeholder="<?php echo e($pengaturan->keterangan); ?>" rows="5"><?php echo e($pengaturan->value); ?></textarea>
                <?php elseif($pengaturan->jenis == 'referensi'): ?>
                    
                    <select class="form-control input-sm select2 required" name="<?php echo e($pengaturan->key); ?>[]" multiple="multiple">
                        <?php
                            $modelData = $pengaturan->option;
                            $referensiData = (new $modelData['model']())
                                ->select([$modelData['value'], $modelData['label']])
                                ->get()
                                ->toArray();
                            $selectedValue = json_decode($pengaturan->value, 1);
                        ?>
                        <option value="-" <?= (empty($selectedValue)) ? 'selected' : ''; ?>>Tanpa Referensi (kosong)</option>
                        <?php $__currentLoopData = $referensiData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($val[$modelData['value']]); ?>" <?= (in_array($val[$modelData['value']], $selectedValue ?? [])) ? 'selected' : ''; ?>><?php echo e($val[$modelData['label']]); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    
                <?php else: ?>
                    <input <?php echo $pengaturan->attribute ? str_replace('class="', 'class="form-control input-sm ', $pengaturan->attribute) : 'class="form-control input-sm"'; ?> id="<?php echo e($pengaturan->key); ?>" name="<?php echo e($pengaturan->key); ?>" <?php echo e(strpos($pengaturan->attribute, 'type=') ? '' : 'type="text"'); ?> value="<?php echo e($pengaturan->value); ?>" />
                <?php endif; ?>
                <label><code><?php echo SebutanDesa($pengaturan->keterangan); ?></code></label>
            </div>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<div class="modal-footer">
    <?php echo batal(); ?>

    <button type="submit" class="btn btn-social btn-info btn-sm"><i class="fa fa-check"></i> Simpan</button>
</div>
</form>

<?php $__env->startPush('scripts'); ?>
    <script src="<?php echo e(asset('js/validasi.js')); ?>"></script>
    <script>
        $(document).ready(function() {
            $("#main_setting").validate();
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\opensid\resources\views/admin/pengaturan/modal_form.blade.php ENDPATH**/ ?>