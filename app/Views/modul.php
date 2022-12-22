<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>


<!-- Page Heading -->


<!-- Content Row -->
<div class="row">

    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Modul</th>
                <th scope="col">Semester</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pemrograman Web I</td>
                <td>Semester 2</td>
                <td><button type="button" class="btn btn-primary">Download</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Sistem Basis Data</td>
                <td>Semester 3</td>
                <td><button type="button" class="btn btn-primary">Download</button></td>
            </tr>
        </tbody>
    </table>
</div>


<?= $this->endSection(); ?>