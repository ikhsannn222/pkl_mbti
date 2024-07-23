@extends('layouts.backend')
@section('content')
<form action="{{ route('jawaban.store') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-body p-4">
            <h5 class="mb-4"> Add jawaban</h5>
            <div class="row mb-3">
                <label for="id_pertanyaan" class="col-sm-3 col-form-label">Pertanyaan</label>
                <div class="col-sm-9">
                    <select class="form-select @error('id_pertanyaan') is-invalid @enderror" name="id_pertanyaan" id="id_pertanyaan">
                        <option value="">Pilih Pertanyaan</option>
                        @foreach($pertanyaan as $data)
                            <option value="{{ $data->id }}" {{ old('id_pertanyaan') == $data->id ? 'selected' : '' }}>{{ $data->pertanyaan }}</option>
                        @endforeach
                    </select>
                    @error('id_pertanyaan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="input46" class="col-sm-3 col-form-label">Jawaban</label>
                <div class="col-sm-9">
                    <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios1" value="Yes" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      Yes
                    </label>
                    <br>
                    <input class="form-check-input" type="radio" name="jawaban" id="exampleRadios1" value="No" checked>
                    <label class="form-check-label" for="exampleRadios1">
                      No
                    </label>
                    @error('jawaban')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row mb-3">
                <label for="tanggal" class="col-sm-3 col-form-label">tanggal</label>
                <div class="col-sm-9">
                    <div class="position-relative input-icon">
                        <input type="date" class="form-control @error('tanggal') is-invalid @enderror"
                            name="tanggal" value="{{ old('tanggal') }}" id="tanggal" placeholder="tanggal">
                        <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                    </div>
                    @error('tanggal')
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
