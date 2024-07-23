<aside class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div class="logo-icon">
        <img src="assets/images/logo-icon.png" class="logo-img" alt="">
      </div>
      <div class="logo-name flex-grow-1">
        <h5 class="mb-1 text-center">PLANBTI</h5>
      </div>
      <div class="sidebar-close">
        <span class="material-icons-outlined">close</span>
      </div>
    </div>
    <div class="sidebar-nav">
        <!--navigation-->
        <ul class="metismenu" id="sidenav">
            <li>
                <a href="{{ route('user.index')}}">
                  <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                  </div>
                  <div class="menu-title">User</div>
                </a>
              </li>
          <li>

            <li>
                <a href="{{ route('biodata.index')}}">
                    <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                    </div>
                    <div class="menu-title">Biodata</div>
                  </a>
            </li>
                <li>
                    <a href="{{ route('jenis.index')}}">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">Jenis Kepribadian</div>
                      </a>
                </li>
                <li>
                    <a href="{{ route('pertanyaan.index')}}">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">Pertanyaan</div>
                      </a>
                </li>
                <li>
                    <a href="{{ route('jawaban.index')}}">
                        <div class="parent-icon"><i class="material-icons-outlined">inventory_2</i>
                        </div>
                        <div class="menu-title">Jawaban</div>
                      </a>
                </li>



        <!--end navigation-->
    </div>
  </aside>
