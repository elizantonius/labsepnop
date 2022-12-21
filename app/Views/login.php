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
        <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp"
          placeholder="NPM">
      </div>
      <div class="form-group">
        <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
      </div>

      <button type="submit" class="btn btn-primary btn-user btn-block">Masuk</button>
      <hr>
      <p>Belum punya akun lab? Silahkan <a href="<?= base_url('/regis')?>">Mendaftar!</a></p>
    </form>
  </div>
</div>
<?=$this->endsection();?>