<?=$this->extend('auth_template');?>
<?=$this->section('auth_content');?>

<div class="card" style="width: 24rem; align-items: center;">
  <div class="card-body">
    <form>
      <div class="d-flex justify-content-center mb-3">
        <div class="col-5">
          <img src="img/ls2j.png" class="img-fluid">
        </div>
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"
          placeholder="Nama">
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="NPM">
      </div>
      <div class="form-group">
        <input type="text" class="form-control form-control-user" id="exampleInputPassword" placeholder="NPM">
      </div>

      <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
      <hr>
      <p>Sudah punya akun lab? Silahkan <a href="<?= base_url('/')?>">Masuk!</a></p>
    </form>
  </div>

<?=$this->endsection();