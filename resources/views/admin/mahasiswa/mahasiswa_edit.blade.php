<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form role="form" action="#">
                        <div class="row">
                            <!-- detail mahasiswa -->
                            <div class="col-md-6">
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Detail Mahasiswa</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="nim">NIM</label>
                                            <input type="nim" class="form-control" id="nim" placeholder="10115224">
                                        </div>
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="nama" class="form-control" id="nama" placeholder="Faisal Ihsanul Fikri">
                                        </div>
                                        <div class="form-group">
                                            <label for="jurusan">Jurusan</label>
                                            <input type="jurusan" class="form-control" id="jurusan" placeholder="Teknik Informatika">
                                        </div>
                                        <div class="form-group">
                                            <label for="fakultas">Fakultas</label>
                                            <input type="fakultas" class="form-control" id="fakultas" placeholder="FTIK">
                                        </div>
                                    </div>
                                </div>
                            </div>
        
                            <!-- mata kuliah -->
                            <div class="col-md-6">
                                <div class="card card-secondary">
                                    <div class="card-header">
                                        <h3 class="card-title">Mata Kuliah</h3>
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                                                <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                                                <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                                                <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>