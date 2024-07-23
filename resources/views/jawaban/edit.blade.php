    @extends('layouts.backend')

    @section('content')
    <form action="{{ route('jawaban.update', $jawaban->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Edit Pertanyaan</h5>
                <div class="row mb-3">
                    <label for="jawaban" class="col-sm-3 col-form-label">jawaban</label>
                    <div class="col-sm-9">
                        <div class="position-relative input-icon">
                            <input type="text" class="form-control @error('jawaban') is-invalid @enderror"
                                name="jawaban" value="{{ old('jawaban') }}" id="jawaban" placeholder="jawaban">
                            <span class="position-absolute top-50 translate-middle-y"><i class="material-icons-outlined fs-5">person_outline</i></span>
                        </div>
                        @error('jawaban')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
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
                <div class="row mb-3">
                    <label for="id_pertanyaan" class="col-sm-3 col-form-label">Pertanyaan</label>
                    <div class="col-sm-9">
                        <select class="form-select @error('id_pertanyaan') is-invalid @enderror" name="id_pertanyaan" id="id_pertanyaan">
                            <option value="">Pilih id_pertanyaan</option>
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
