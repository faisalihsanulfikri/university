<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <form method="get" action="{{ url('mahasiswa/update/'.$id) }}">
                        @csrf
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
                                            <input type="nim" class="form-control" name="nim" value="{{ $student->nim }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="name" class="form-control" name="name" value="{{ $student->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="studyprogram">Jurusan</label>
                                            <select class="form-control select2" style="width: 100%;" name="studyprogram">
                                                @foreach($studyprograms as $el)
                                                    @if($el->id == $student->studyprogram->id)
                                                    <option value="{{ $el->id }}" selected>{{ $el->name }}</option>
                                                    @else
                                                    <option value="{{ $el->id }}">{{ $el->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="faculty">Fakultas</label>
                                            <select class="form-control select2" style="width: 100%;" name="faculty">
                                                @foreach($faculties as $el)
                                                    @if($el->id == $student->faculty->id)
                                                    <option value="{{ $el->id }}" selected>{{ $el->name }}</option>
                                                    @else
                                                    <option value="{{ $el->id }}">{{ $el->name }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
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

                                            @foreach($courses as $el)
                                            <div class="custom-control">
                                                <input type="checkbox" name="courses[]" value="{{ $el->id }}" {{ $el->checked == true ? "checked" : "" }} /> <span class="courses-name">{{ strtoupper($el->code).' - '.$el->name }}</span>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="/mahasiswa/detail/{{ $id }}">
                                <button class="btn btn-danger">Cancel</button>
                            </a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>


<style lang="scss" scoped>
    .courses-name {
        padding-left: 10px;
    }

</style>