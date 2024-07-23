<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&display=swap");

* {
  box-sizing: border-box;
  margin: 0px;
  padding: 0px;
  font-family: "Jost", sans-serif;
}

body {
  padding: 60px 20px;
  color: rgb(211, 211, 211);
  background: rgb(12,12,12);
}

p{
  margin: 10px 0px;
  letter-spacing: 2px;
}

.flex-container-cards {
  filter: drop-shadow(rgb(255, 100, 0) 0px 0px 1px);
  display: flex;
  flex-wrap: wrap;
  gap: 40px;
  justify-content: center;
  align-items: center;
}

.flex-container-cards .card {
  background: linear-gradient(240deg, rgba(0,0,0,1) 0%, rgba(36,36,36,1) 100%);
  width: 300px;
  -webkit-clip-path: polygon(0 0, 200px 0, 210px 10px, 280px 10px, 290px 0, 100% 0, 100% 150px, 290px 160px, 290px 300px, 100% 310px, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0 400px, 10px 390px, 10px 100px, 0 90px);
          clip-path: polygon(0 0, 200px 0, 210px 10px, 280px 10px, 290px 0, 100% 0, 100% 150px, 290px 160px, 290px 300px, 100% 310px, 100% calc(100% - 30px), calc(100% - 30px) 100%, 0 100%, 0 400px, 10px 390px, 10px 100px, 0 90px);
  transition: all 0.2s linear;
  filter: drop-shadow(rgb(255, 0, 0) 0px 0px 10px);
}
.flex-container-cards .card:hover {
  transform: scale(1.1);
}
.flex-container-cards .card .card-img-shadow {
  filter: drop-shadow(rgb(255, 0, 0) 0px 0px 10px);
}
.flex-container-cards .card .card-img-shadow img {
  width: 100%;
  height: 170px;
  object-fit: cover;
  margin-bottom: 30px;
  -webkit-clip-path: polygon(0 0, 100% 0, 100% 100%, 30px 100%, 0 calc(100% - 30px));
          clip-path: polygon(0 0, 100% 0, 100% 100%, 30px 100%, 0 calc(100% - 30px));
}
.flex-container-cards .card .card-content {
  margin: 0px 30px;
}
.flex-container-cards .card h2 {
  color: rgb(255, 128, 0);
  text-align: center;
}
.flex-container-cards .card .button-shadow {
  filter: drop-shadow(rgb(255, 64, 0) 0px 0px 5px);
  transition: all 0.2s ease-in;
}
.flex-container-cards .card .button-shadow:hover {
  filter: drop-shadow(rgb(255, 64, 0) 0px 0px 10px);
}
.flex-container-cards .card .button-shadow .card-button {
  text-align: center;
  margin: 20px 0px;
  padding: 10px 0px;
  background: linear-gradient(45deg, rgb(255, 30, 0) 0%, rgb(255, 89, 0) 100%);
  -webkit-clip-path: polygon(0 0, 100% 0%, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%);
          clip-path: polygon(0 0, 100% 0%, 100% calc(100% - 15px), calc(100% - 15px) 100%, 0 100%);
  color: black;
  font-weight: 600;
  transition: all 0.2s ease-in;
}
.flex-container-cards .card .button-shadow .card-button:hover {
  color: white;
}

    </style>

<div class="flex-container-cards">

    <div class="card">
      <div class="card-img-shadow"><img src="{{asset('backend/image/Librarian.jpeg')}}"></div>
      <div class="card-content">
        <h2>INTJ</h2>
        <div class="button-shadow">
            <a href="{{route('intj.index')}}"><div class="card-button">Detail</div></a>
        </div>
      </div>
    </div>

    <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon (1).jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>INTP</h2>
          <div class="button-shadow">
            <a href="{{route('intp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/p.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ENTJ</h2>
           <div class="button-shadow">
            <a href="{{route('entj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ENTP</h2>
          <div class="button-shadow">
            <a href="{{route('entp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/matching pfp (3_3) (1).jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>INFJ</h2>
          <div class="button-shadow">
            <a href="{{route('infj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/7cbd8aca-177d-4ccd-b170-fea1d472c754.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>INFP</h2>
          <div class="button-shadow">
            <a href="{{route('infp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/_3.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ENFJ</h2>
          <div class="button-shadow">
            <a href="{{route('enfj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon (6).jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ENFP</h2>
          <div class="button-shadow">
            <a href="{{route('enfp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/1a061480-4736-4b0b-b83c-006fa3d7869b.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ISTJ</h2>
          <div class="button-shadow">
            <a href="{{route('istj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon (9).jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ISFJ</h2>
          <div class="button-shadow">
            <a href="{{route('isfj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/k.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ESTJ</h2>
          <div class="button-shadow">
            <a href="{{route('estj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/✧ ➳ 𝘙𝘢𝘣𝘣𝘪𝘵𝘴 𝘪𝘯𝘷𝘢𝘴𝘪𝘰𝘯 𝘪𝘤𝘰𝘯𝘴 ❏.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ESFJ</h2>
          <div class="button-shadow">
            <a href="{{route('esfj.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/matching pfp (1_3).jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ISTP</h2>
          <div class="button-shadow">
            <a href="{{route('istp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-img-shadow"><img src="{{asset('backend/image/7a7b314e-7e23-499e-bc31-54c9d26f292d.jpeg')}}" alt="wanda"></div>
        <div class="card-content">
          <h2>ISFP</h2>
          <div class="button-shadow">
            <a href="{{route('isfp.index')}}"><div class="card-button">Detail</div></a>
          </div>
        </div>
      </div>

    <div class="card">
      <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon (1).jpeg')}}" alt="natasha"></div>
      <div class="card-content">
        <h2>ESTP</h2>
        <div class="button-shadow">
            <a href="{{route('estp.index')}}"><div class="card-button">Detail</div></a>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-img-shadow"><img src="{{asset('backend/image/rabbids invasion icon (15).jpeg')}}" alt="thor"></div>
      <div class="card-content">
        <h2>ESFP</h2>
        <div class="button-shadow">
          <a href="{{route('esfp.index')}}"><div class="card-button">Detail</div></a>
        </div>
      </div>
    </div>

    <div class="card">
        <div class="button-shadow">
          <a href="/"> <div class="card-button">Kembali Ke Home Page </div></a>
        </div>
        </div>
      <div class="card">
      <div class="button-shadow">
        <a href="{{route('tes.index')}}"><div class="card-button">Test MBTI </div></a>
      </div>
      </div>
  </div>

</body>
</html>
