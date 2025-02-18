<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="components-carousel.html">
              <i class="bi bi-circle"></i><span>Carousel</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

        <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span data-bs-toggle="tooltip" data-bs-placement="right" title="Anda bisa melihat hasil test anda disini">Riwayat Test</span>
          <i class="bi bi-chevron-down ms-auto" data-bs-toggle="tooltip" data-bs-placement="right" title="Anda bisa melihat hasil test anda disini"></i>
          {{-- <button type="button" class="btn btn-default" data-bs-toggle="tooltip" data-bs-placement="right" title="Tooltip on right">
          </button> --}}
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>General Tables</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Data Tables</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      {{-- <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav2" data-bs-toggle="collapse" href="{{route('personalities.index')}}">
          <i class="bi bi-layout-text-window-reverse"></i><span data-bs-toggle="tooltip" data-bs-placement="right" title="Anda bisa melihat tabel seputar tipe kepribadian disini">Tables Personalities</span>
        </a>
      </li><!-- End Tables Nav --> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{ route('personalities.index') }}">
            <i class="bi bi-layout-text-window-reverse"></i>
            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Anda bisa melihat tabel seputar tipe kepribadian disini">
                Tables Personalities
            </span>
        </a>
    </li><!-- End Tables Nav -->
    

      <li class="nav-item">
        <a class="nav-link" href="{{ url('/mulai-test-mbti') }}">
            <i class="bi bi-journals"></i>
            <span data-bs-toggle="tooltip" data-bs-placement="right" title="Anda bisa mulai test di halaman ini">Mulai Test</span>
        </a>
    </li>
    

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-bar-chart"></i>
          <span data-bs-toggle="tooltip" data-bs-placement="right" title="Menampilkan visualisasi data seperti diagram batang, pie chart, atau line chart untuk statistik MBTI.">
            Charts Statistik MBTI</span>
            <i class="bi bi-chevron-down ms-auto" data-bs-toggle="tooltip" data-bs-placement="right" title="Menampilkan visualisasi data seperti diagram batang, pie chart, atau line chart untuk statistik MBTI."></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="charts-chartjs.html">
              <i class="bi bi-circle"></i><span>Chart.js</span>
            </a>
          </li>
          <li>
            <a href="charts-apexcharts.html">
              <i class="bi bi-circle"></i><span>ApexCharts</span>
            </a>
          </li>
          <li>
            <a href="charts-echarts.html">
              <i class="bi bi-circle"></i><span>ECharts</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->
      <!-- End Charts Nav -->

      <!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile User</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed href="#">
          <i class="bi bi-box-arrow-right"></i>
          <span>Sign Out</span>
        </a>
    <form action="{{route('logout')}}" method="post" id="logout-form">
        @csrf
    </form>
      </li>

    </ul>

  </aside><!-- End Sidebar-->