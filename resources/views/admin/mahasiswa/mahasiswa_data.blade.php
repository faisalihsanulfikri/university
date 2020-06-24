<section class="content">
    <div class="container-fluid">
    
    <!-- /.row -->
        <div class="row">
            <div class="col-12">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Tabel Mahasiswa</h3>

                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap data-mhs">
                    <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>Fakultas</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1010</td>
                        <td>Faisal Ihsanul</td>
                        <td>Teknik Informatika</td>
                        <td>FTIK</td>
                        <td>
                            <div class="row">
                                <div>
                                    <a href="{{ Request::url() }}/detail/1">
                                        <i class="action far fa-eye"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ Request::url() }}/edit/1">
                                        <i class="action far fa-edit"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ Request::url() }}/delete/1">
                                        <i class="action far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>1010</td>
                        <td>Faisal Ihsanul</td>
                        <td>Teknik Informatika</td>
                        <td>FTIK</td>
                        <td>
                            <div class="row">
                                <div>
                                    <a href="{{ Request::url() }}/detail/1">
                                        <i class="action far fa-eye"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ Request::url() }}/edit/1">
                                        <i class="action far fa-edit"></i>
                                    </a>
                                </div>
                                <div>
                                    <a href="{{ Request::url() }}/delete/1">
                                        <i class="action far fa-trash-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    
                    
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
                </div>
            </div>
            <!-- /.card -->
            </div>
        </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>


<style lang="scss" scoped>
    .action {
        padding-left: 5px;
        padding-right: 5px;
    }
</style>