<!DOCTYPE html>
<html data-theme="light" xmlns:th="http://www.thymeleaf.org" xmlns:sec="http://www.thymeleaf.org/extras/spring-security">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.6/dist/full.css" rel="stylesheet" type="text/css" />-->
  <link href="https://cdn.jsdelivr.net/npm/daisyui@3.1.0/dist/full.css" rel="stylesheet" type="text/css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://kit.fontawesome.com/87140d707c.js" crossorigin="anonymous"></script>
  <!-- toastr 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
  <link rel="stylesheet" href="https://jhs512.github.io/toastr/toastr.css">

  <script src="/resource/common/common.js"></script>
  <link href="/resource/common/common.css" rel="stylesheet">
  <script th:inline="javascript">
    // 타임리프 문법(파라미터, ? 뒤에 입력된 매개변수들)
    const params = JSON.parse('[( ${@rq.paramsJsonStr} )]');
    @font-face {
  font-family: "SUITE-Regular";
  src: url("https://cdn.jsdelivr.net/gh/projectnoonnu/noonfonts_2304-2@1.0/SUITE-Regular.woff2")
    format("woff2");
  font-weight: 400;
  font-style: normal;
}

html,
body {
  margin: 0;
  padding: 0;
  height: 100%;
  font-family: "SUITE-Regular";
}

  </script>
</head>

<body class="min-h-screen w-screen flex flex-col">
  <nav class="navbar bg-base-100 flex drop-shadow-md">
    <div class="navbar-start">
      <div class="dropdown">
      </div>
    </div>
    <div class="navbar-center justify-content hidden sm:block">
      <a href="/shop" class="btn btn-ghost normal-case">PLANBTI</a>
    </div>
    </div>
  </nav>
  <script th:inline="javascript">
    if (params.msg) {
      toastNotice(params.msg[0]);
    }
    if (params.errorMsg) {
      toastWarning(params.errorMsg[0]);
    }
    $(window).bind("pageshow", function(event) {
      const localStorageKeyAboutHistoryBackErrorMsg = "historyBackErrorMsg___" + location.href;
      if (localStorage.getItem(localStorageKeyAboutHistoryBackErrorMsg)) {
        toastWarning(localStorage.getItem(localStorageKeyAboutHistoryBackErrorMsg));
        localStorage.removeItem(localStorageKeyAboutHistoryBackErrorMsg);
      } else {
        const localStorageKeyAboutHistoryBackErrorMsg = "historyBackErrorMsg___null";
        if (localStorage.getItem(localStorageKeyAboutHistoryBackErrorMsg)) {
          toastWarning(localStorage.getItem(localStorageKeyAboutHistoryBackErrorMsg));
          localStorage.removeItem(localStorageKeyAboutHistoryBackErrorMsg);
        }
      }
    });
  </script>
  <footer class="flex content-end bg-green-100 py-8">
    <div class="container mx-auto text-center">
      <p><i class="fa-regular fa-copyright"></i> 2023 <b>PLANBTI</b>. All rights reserved.</p>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/jdenticon@3.2.0/dist/jdenticon.min.js" async integrity="sha384-yBhgDqxM50qJV5JPdayci8wCfooqvhFYbIKhv0hTtLvfeeyJMJCscRfFNKIxt43M" crossorigin="anonymous">
  </script>
</body>

</html>
