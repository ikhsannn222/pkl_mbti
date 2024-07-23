@extends('layouts.backend')
@section('content')
<form action="{{ route('pertanyaan.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4"> Add Pertanyaan</h5>
            <div class="row mb-3">
                <label for="pertanyaan" class="col-sm-3 col-form-label">Pertanyaan</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                            name="pertanyaan" value="{{ old('pertanyaan') }}" id="pertanyaan" placeholder="Pertanyaan">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                    </div>
                    @error('pertanyaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="id_jenis_kepribadian" class="col-sm-3 col-form-label">Jenis Kepribadian</label>
                <div class="col-sm-9">
                    <select class="form-select @error('id_jenis_kepribadian') is-invalid @enderror" name="id_jenis_kepribadian" id="id_jenis_kepribadian">
                        <option value="">Pilih Jenis Kepribadian</option>
                        @foreach($jenis as $data)
                            <option value="{{ $data->id }}" {{ old('id_jenis_kepribadian') == $data->id ? 'selected' : '' }}>{{ $data->Jenis_kepribadian }}</option>
                        @endforeach
                    </select>
                    @error('id_jenis_kepribadian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9">
                    <div class="d-md-flex d-grid align-items-center gap-3">
                        <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
