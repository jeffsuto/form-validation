<?php $__env->startSection('title'); ?>
    <?php echo e(@$title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <form class="form-horizontal col-md-8" action="<?php echo e(@$action); ?>" method="POST">
        <?php echo e(csrf_field()); ?>

        <?php echo e(@$method); ?>

        <div class="form-group">
            <label class="col-sm-2 control-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
                <label class="label label-danger control-label"><?php echo e($errors->first('nama')); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tempat Lahir</label>
            <div class="col-sm-10">
                <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir">
                <label class="label label-danger control-label"><?php echo e($errors->first('tempat_lahir')); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Tanggal Lahir</label>
            <div class="col-sm-10">
                <input type="date" name="tanggal_lahir" class="form-control">
                <label class="label label-danger control-label"><?php echo e($errors->first('tanggal_lahir')); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="radio-inline">
                <input type="radio" name="jenis_kelamin" value="Laki - Laki">Laki - Laki
            </div>
            <div class="radio-inline">
                <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
            </div>
            <label class="label label-danger control-label"><?php echo e($errors->first('jenis_kelamin')); ?></label>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="email" class="form-control">
                <label class="label label-danger control-label"><?php echo e($errors->first('email')); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
                <label class="label label-danger control-label"><?php echo e($errors->first('alamat')); ?></label>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Motto</label>
            <div class="col-sm-10">
                <textarea name="motto" class="form-control" cols="30" rows="10"></textarea>
                <label class="label label-danger control-label"><?php echo e($errors->first('motto')); ?></label>
            </div>
        </div>
        <div class="form-group pull-right">
            <button type="submit" class=" btn btn-success">Save</button>
            <a href="/" class="btn btn-primary">HOME</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>