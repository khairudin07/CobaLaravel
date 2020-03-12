<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
</head>
<body>
<form action="<?php echo e(url('daftar-siswa/')); ?>" method="GET">
        <select name="kelas">
            <option value="">Semua</option>
            <option value="6A">Kelas 6A</option>
            <option value="6B">Kelas 6B</option>
            <option value="6C">Kelas 6C</option>
            <option value="6D">Kelas 6D</option>
        </select>
        <button type="submit" btn btn-primary btn-block">Simpan
        </button>    
    </form>
    <table id="example" class="table table-outline table-active table-hover " style=" border-color: cornflowerblue;">
        <thead >
            <tr style="text-align: center; background-color: #20a8d8; color: #2f353a;">
            <th>Kelas</th>
            <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $daftar; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <tr>
                <td ><?php echo e($k->Kelas); ?></td>
                <td ><?php echo e($k->nama); ?></td>
                </tr>                  
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        </table>
</body>
</html><?php /**PATH C:\Users\Acer\Documents\Coba\coba\resources\views/daftarsiswa.blade.php ENDPATH**/ ?>