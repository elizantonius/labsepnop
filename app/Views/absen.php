<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>


<!-- Page Heading -->


<!-- Content Row -->
<div class="row">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td><button type="button" class="btn btn-primary">Absen</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td><button type="button" class="btn btn-primary">Absen</button></td>
            </tr>
        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>