<div class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Program Studi</b></h3>
                </div>
                <div class="card-body">
                    {!! $chart->container() !!}
                </div>
            </div>
        </div>
        <div class="col-lg-12">
        <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"><b>Mata Kuliah</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                <table class="table">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Kode MK</th>
                        <th>Mata Kuliah</th>
                        <th>Jumlah mahasiswa yang mengikuti</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($courses as $key=>$val)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ strtoupper($val->code) }}</td>
                        <td>{{ $val->name }}</td>
                        <td>
                            <div class="progress progress-xs">
                                <div class="progress-bar progress-bar-danger" style="width: {{ $val->total/$countStudent*100 }}%"></div>
                            </div>
                            @if($val->total > 0)
                                <span><b>{{ $val->total }}</b>/ {{ $countStudent }}</span>
                            @else
                                <span>-</span>
                            @endif
                        </td>
                    </tr>

                    @endforeach
                    
                    </tbody>
                </table>
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                    
                </div>
            </div>
        </div>
            
        </div>
        <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>

{!! $chart->script() !!}