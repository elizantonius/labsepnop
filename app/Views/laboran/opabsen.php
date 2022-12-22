<?=$this->extend('laboran/template');?>
<?=$this->section('content');?>


<!-- Page Heading -->


<!-- Content Row -->
<div class="row">

<table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Shift</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">Semester</th>
                <th scope="col">Jam</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">P</th>
                <td>Pemrograman Web I</td>
                <td>Semester 2</td>
                <td>10:00-11:45</td>
                <td><button type="button" class="btn btn-primary">Buka Absen</button></td>
            </tr>
            <tr>
                <th scope="row">S</th>
                <td>Sistem Basis Data</td>
                <td>Semester 3</td>
                <td>13:00-14:30</td>
                <td><button type="button" class="btn btn-primary">Buka Absen</button></td>
            </tr>
        </tbody>
    </table>
</div>


<?=$this->endSection();?>