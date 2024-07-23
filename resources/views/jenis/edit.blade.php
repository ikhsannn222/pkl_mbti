@extends('layouts.backend')

@section('content')
<form action="{{ route('jenis.update', $jenis->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4">Edit Jenis Kepribadian {{$jenis->Jenis_kepribadian}}</h5>
            <div class="row mb-3">
                <label for="input42" class="col-sm-3 col-form-label">Jenis Kepribadian</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('Jenis_kepribadian') is-invalid @enderror"
                            name="Jenis_kepribadian" value="{{ $jenis->Jenis_kepribadian }}" id="input42" placeholder="Masukan Jenis_kepribadian">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                    </div>
                    @error('Jenis_kepribadian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="input43" class="col-sm-3 col-form-label">Pengertian</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('pengertian') is-invalid @enderror"
                            name="pengertian" value="{{ $jenis->pengertian }}" id="input43" placeholder="No pengertian">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">phone</i></span>
                    </div>
                    @error('pengertian')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-3">
                <label for="input44" class="col-sm-3 col-form-label">Kekurangan</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('kekurangan') is-invalid @enderror"
                            name="kekurangan" value="{{ $jenis->kekurangan }}" id="input44" placeholder="Alamat kekurangan">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">send</i></span>
                    </div>
                    @error('kekurangan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="input44" class="col-sm-3 col-form-label">Kelebihan</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="text" class="form-control @error('kelebihan') is-invalid @enderror"
                            name="kelebihan" value="{{ $jenis->kelebihan }}" id="input44" placeholder="Alamat kelebihan">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">send</i></span>
                    </div>
                    @error('kelebihan')
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
                        <button type="submit" class="btn btn-grd-primary px-4">Update</button>
                        <button type="reset" class="btn btn-grd-royal px-4">Reset</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
