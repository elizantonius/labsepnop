<?= $this->extend('laboran/template'); ?>
<?= $this->section('content'); ?>


<!-- Page Heading -->


<!-- Content Row -->
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card">
            <div class="card-header">
                Upload Modul
            </div>
            <div class="card-body">
                <form action="<?= base_url('laboran/upmodul/postmodul'); ?>" method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Judul Modul</label>
                        <input type="text" class="form-control"  placeholder="Judul Modul" name="judul">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Semester</label>
                        <input type="text" class="form-control"  placeholder="Modul Untuk Semester" name="smt">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                    <div class="custom-file">
                    <label for="exampleInputEmail1">Judul Modul</label>
                        <input type="file" class="custom-file-input" id="validatedCustomFile" required name="modulku">
                        <label class="custom-file-label" for="validatedCustomFile">Upload Modul...</label>
                        <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>
                    <hr>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>


    <?= $this->endSection(); ?>