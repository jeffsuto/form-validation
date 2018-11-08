<?php $__env->startSection('title'); ?>
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<form class="form-horizontal col-md-8 col-md-offset-2" action="/biodata/output" method="POST">
    <?php echo e(csrf_field()); ?>

    <div class="form-group">
        <label class="col-sm-2 control-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" name="nama" class="form-control"  placeholder="Nama Lengkap">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Tempat Lahir</label>
        <div class="col-sm-10">
            <input type="text" name="tempat_lahir" class="form-control"  placeholder="Tempat Lahir">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Tanggal Lahir</label>
        <div class="col-sm-10">
            <input type="date" name="tanggal_lahir" class="form-control">
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
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
            <input type="email" name="email" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="col-md-3 col-md-offset-6 btn btn-success">Save</button>
    </div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>