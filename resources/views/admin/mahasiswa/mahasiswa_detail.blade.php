<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                    <h3 class="card-title">Detail Mahasiswa</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>NIM</th>
                            <td>{{ $student->nim }}</td>
                            </tr>
                            <tr>
                            <th>Nama</th>
                            <td>{{ $student->name }}</td>
                            </tr>
                            <tr>
                            <th>Jurusan</th>
                            <td>{{ $student->studyprogram->name }}</td>
                            </tr>
                            <tr>
                            <th>Fakultas</th>
                            <td>{{ $student->faculty->name }}</td>
                        </tr>
                    </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                            <a href="/mahasiswa">
                                <button type="submit" class="btn btn-danger">Back</button>
                            </a>
                            <a href="/mahasiswa/edit/{{ $id }}">
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </a>
                    </div>
                </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                <h3 class="card-title">Mata Kuliah Yang Diikuti</h3>

                
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kode MK</th>
                        <th>Mata Kuliah</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($studentcourses as $key=>$value)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ strtoupper($value->code) }}</td>
                        <td>{{ $value->name }}</td>
                    </tr>

                    @endforeach
                    
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    
                </div>
            </div>
            <!-- /.card -->
            <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
    <!-- /.row -->    
    </div><!-- /.container-fluid -->
</section>