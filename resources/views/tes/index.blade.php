<!DOCTYPE html>
<html>
<head>
    <title>Modal Biodata</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #37374d;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
        .container {
            text-align: center;
            color: #fff
        }
        .custom-btn {
            width: 130px;
            height: 40px;
            color: #fff;
            border-radius: 5px;
            padding: 10px 25px;
            font-family: 'Lato', sans-serif;
            font-weight: 500;
            background: transparent;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            display: inline-block;
            box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
                        7px 7px 20px 0px rgba(0,0,0,.1),
                        4px 4px 5px 0px rgba(0,0,0,.1);
            outline: none;
        }
        .btn-5 {
            width: 130px;
            height: 40px;
            line-height: 42px;
            padding: 0;
            border: none;
            background: rgb(219, 205, 133);
            background: linear-gradient(0deg, rgb(145, 135, 214) 0%, rgb(134, 108, 97) 100%);
        }
        .btn-5:hover {
            color: #d2b6b6;
            background: transparent;
            box-shadow: none;
        }
        .btn-5:before,
        .btn-5:after {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            height: 2px;
            width: 0;
            background: #edd1d9;
            box-shadow: -1px -1px 5px 0px #fff,
                        7px 7px 20px 0px #0003,
                        4px 4px 5px 0px #0002;
            transition: 400ms ease all;
        }
        .btn-5:after {
            right: inherit;
            top: inherit;
            left: 0;
            bottom: 0;
        }
        .btn-5:hover:before,
        .btn-5:hover:after {
            width: 100%;
            transition: 800ms ease all;
        }
        .corner-image {
            width: 150px;
            height: auto;
            position: absolute;
            margin: 150px; /* Increase margin to create more space between images */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat datang di tampilan test <b>SANBTI</b></h1>
        <p><h3>Isi Biodata terlebih dahulu yuuuu sebelum test</h3></p>
        <button class="custom-btn btn-5" id="viewModalBtn">Isi Biodata</button>
        <a href="/" class="custom-btn btn-5">Home Page</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="formModalLabel">Form Pengisian Biodata</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form untuk mengisi biodata -->
                    <form action="{{ route('biodata.store') }}" method="POST" id="biodataForm">
                        @csrf

                        <!-- Nama -->
                        <div class="form-group">
                            <label for="nama">Nama:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" required>
                        </div>

                        <!-- Jenis Kelamin -->
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin:</label>
                            <select class="form-control" id="jk" name="jk" required>
                                <option selected disabled>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki" {{ old('jk') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                                <option value="Perempuan" {{ old('jk') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                            </select>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>

                        <!-- no_tlp -->
                        <div class="form-group">
                            <label for="no_tlp">Telephone:</label>
                            <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="{{ old('no_tlp') }}" required>
                        </div>

                        <!-- Tombol Simpan -->
                        <button type="submit" class="styled-button btn btn-primary btn-block">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script untuk menampilkan modal saat tombol diklik -->
    <script>
    $(document).ready(function(){
        $('#viewModalBtn').click(function(){
            $('#formModal').modal('show');
        });
    });
    </script>
</body>
</html>
