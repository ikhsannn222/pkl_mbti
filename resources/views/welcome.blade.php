<!DOCTYPE html>
<html>
<head>
    <title>MBTI Test</title>
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
            position: relative;
            animation: float 3s ease-in-out infinite;
            color: #fff;
            padding: 50px; /* Adjust padding to create space around the text */
            box-sizing: border-box;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-20px);
            }
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
        .top-left {
            top: 10px;
            left: 10px;
        }
        .top-right {
            top: 10px;
            right: 10px;
        }
        .bottom-left {
            bottom: 10px;
            left: 10px;
        }
        .bottom-right {
            bottom: 10px;
            right: 10px;
        }
        .slide-in-from-bottom {
            animation: slideInFromBottom 1s ease-out forwards;
        }
        @keyframes slideInFromBottom {
            0% {
                transform: translateY(100%);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="{{ asset('backend/image/2-removebg-preview.png') }}" class="corner-image top-left" alt="Top Left Image">
        <img src="{{ asset('backend/image/3-removebg-preview.png') }}" class="corner-image top-right" alt="Top Right Image">
        <h1>Welcome to Web Test SANBTI</h1>
        <p>Discover your personality type with our MBTI test.</p>
        <a href="{{ route('tes.index') }}" class="custom-btn btn-5" onclick="animateImages()">Test MBTI</a>
        <a href="{{ route('tipe.index') }}" class="custom-btn btn-5" onclick="animateImages()">Tipe Kepribadian</a>
        <img src="{{ asset('backend/image/4-removebg-preview.png') }}" class="corner-image bottom-left" alt="Bottom Left Image">
        <img src="{{ asset('backend/image/matching_pfp__2_3___1_-removebg-preview.png') }}" class="corner-image bottom-right" alt="Bottom Right Image">
    </div>

    <script>
        function animateImages() {
            var images = document.querySelectorAll('.corner-image');
            images.forEach(function(img) {
                img.classList.add('slide-in-from-bottom');
            });
        }
    </script>
</body>
</html>
