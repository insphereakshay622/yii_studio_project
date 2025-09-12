<?php

use yii\bootstrap5\Breadcrumbs;
use yii\helpers\Html;
use yii\helpers\Url;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
  <meta charset="<?= Yii::$app->charset ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
  <meta name="color-scheme" content="light dark">
  <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)">
  <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)">

  <?= Html::csrfMetaTags() ?>
  <title><?= Html::encode($this->title) ?> - Admin </title>

  <!-- Fonts -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css"
    crossorigin="anonymous" media="print" onload="this.media='all'">

  <!-- OverlayScrollbars -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/styles/overlayscrollbars.min.css"
    crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    crossorigin="anonymous">

  <!-- AdminLTE CSS -->
  <link rel="stylesheet" href="<?= Yii::getAlias('@web/adminlte/dist/css/adminlte.css') ?>">

  <!-- ApexCharts -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css"
    crossorigin="anonymous">

  <!-- JS Vector Map -->
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/css/jsvectormap.min.css"
    crossorigin="anonymous">

  <?php $this->head() ?>
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg sidebar-open bg-body-tertiary">
  <?php $this->beginBody() ?>
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
          <li class="nav-item d-none d-md-block"><a href="/" class="nav-link">Home</a></li>
          <!-- <li class="nav-item d-none d-md-block"><a href="#" class="nav-link">Contact</a></li> -->
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
          <?php if (!Yii::$app->user->isGuest): ?>
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">

              <span class="d-none d-md-inline">Logout</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <!--begin::User Image-->
              <li class="user-header text-bg-primary">
                <img
                  src="./assets/img/user2-160x160.jpg"
                  class="rounded-circle shadow"
                  alt="User Image" />
                <p>
                  Admin

                </p>
              </li>
              <!--end::User Image-->
              <!--begin::Menu Body-->
              <li class="user-body">

              </li>
              <!--end::Menu Body-->
              <!--begin::Menu Footer-->
              <li class="user-footer">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
                <a href="/admin/default/logout" class="btn btn-default btn-flat float-end">Sign out</a>
              </li>
              <!--end::Menu Footer-->
            </ul>
          </li>
          <?php endif; ?>

          <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <!--begin::Sidebar Brand-->
      <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link">
          <!--begin::Brand Image-->
          <!-- <img
              src="./assets/img/AdminLTELogo.png"
              alt="AdminLTE Logo"
              class="brand-image opacity-75 shadow"
            /> -->
          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">mystudio</span>
          <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
      </div>
      <!--end::Sidebar Brand-->
      <!--begin::Sidebar Wrapper-->
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            role="navigation"
            aria-label="Main navigation"
            data-accordion="false"
            id="navigation">

            <!-- set conditions -->

            <?php if (Yii::$app->user->isGuest): ?>
              <!-- If user is not logged in -->
              <li class="nav-item">
                <a href="<?= \yii\helpers\Url::to(['/admin']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Sign In</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= \yii\helpers\Url::to(['/admin/signup']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Sign Up</p>
                </a>
              </li>

            <?php else: ?>

              <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                  <i class="nav-icon bi bi-speedometer"></i>
                  <p>
                    Dashboard
                    <i class="nav-arrow bi bi-chevron-right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="<?= Url::to(['/admin'])?>" class="nav-link active">
                      <i class="nav-icon bi bi-circle"></i>
                      <p>Admin Dashboard</p>
                    </a>
                  </li>

                </ul>
              </li>
              <li class="nav-item">
                <a href="<?= Url::to(['/admin/project']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= Url::to(['/admin/team']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= Url::to(['/admin/service']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Service</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= Url::to(['/admin/contact']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Contact</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= Url::to(['/admin/logout']) ?>" class="nav-link">
                  <i class="nav-icon bi bi-patch-check-fill"></i>
                  <p>Logout</p>
                </a>
              </li>


            <?php endif; ?>
            <!-- end set conditions -->


          </ul>
          <!--end::Sidebar Menu-->
        </nav>
      </div>
      <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->

    <!-- begin:: Page content -->
    <!-- <main class="app-main"> -->
      <div>
      <?php if (!empty($this->params['breadcrumbs'])): ?>
        <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
      <?php endif ?>
      <?= $content ?>

      </div>
    <!-- end:: Page content -->


    <!--begin::App Main-->
    <!-- <main class="app-main">
        
      </main> -->
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
      <!--begin::To the end-->
      <div class="float-end d-none d-sm-inline">Anything you want</div>
      <!--end::To the end-->
      <!--begin::Copyright-->
      <strong>
        Copyright &copy; 2014-2025&nbsp;
        <a href="/" class="text-decoration-none">mystudio</a>.
      </strong>
      All rights reserved.
      <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <!-- OverlayScrollbars -->
  <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.11.0/browser/overlayscrollbars.browser.es6.min.js" crossorigin="anonymous"></script>

  <!-- Popper (for Bootstrap 5) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" crossorigin="anonymous"></script>

  <!-- Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

  <!-- AdminLTE -->
  <script src="<?= Yii::getAlias('@web/adminlte/dist/js/adminlte.js') ?>"></script>

  <!-- Configure OverlayScrollbars -->
  <script>
    const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
    const Default = {
      scrollbarTheme: 'os-theme-light',
      scrollbarAutoHide: 'leave',
      scrollbarClickScroll: true,
    };
    document.addEventListener('DOMContentLoaded', function() {
      const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
      if (sidebarWrapper && OverlayScrollbarsGlobal?.OverlayScrollbars !== undefined) {
        OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
          scrollbars: {
            theme: Default.scrollbarTheme,
            autoHide: Default.scrollbarAutoHide,
            clickScroll: Default.scrollbarClickScroll,
          },
        });
      }
    });
  </script>

  <!-- SortableJS -->
  <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js" crossorigin="anonymous"></script>
  <script>
    new Sortable(document.querySelector('.connectedSortable'), {
      group: 'shared',
      handle: '.card-header',
    });
    document.querySelectorAll('.connectedSortable .card-header').forEach((header) => {
      header.style.cursor = 'move';
    });
  </script>

  <!-- ApexCharts -->
  <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" crossorigin="anonymous"></script>
  <script>
    const sales_chart_options = {
      series: [{
          name: 'Digital Goods',
          data: [28, 48, 40, 19, 86, 27, 90]
        },
        {
          name: 'Electronics',
          data: [65, 59, 80, 81, 56, 55, 40]
        },
      ],
      chart: {
        height: 300,
        type: 'area',
        toolbar: {
          show: false
        }
      },
      legend: {
        show: false
      },
      colors: ['#0d6efd', '#20c997'],
      dataLabels: {
        enabled: false
      },
      stroke: {
        curve: 'smooth'
      },
      xaxis: {
        type: 'datetime',
        categories: [
          '2023-01-01', '2023-02-01', '2023-03-01', '2023-04-01',
          '2023-05-01', '2023-06-01', '2023-07-01',
        ],
      },
      tooltip: {
        x: {
          format: 'MMMM yyyy'
        }
      },
    };
    new ApexCharts(document.querySelector('#revenue-chart'), sales_chart_options).render();
  </script>

  <!-- JS Vector Map -->
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/js/jsvectormap.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/jsvectormap@1.5.3/dist/maps/world.js" crossorigin="anonymous"></script>
  <script>
    new jsVectorMap({
      selector: '#world-map',
      map: 'world'
    });

    // Example Sparklines
    function renderSparkline(selector, data) {
      new ApexCharts(document.querySelector(selector), {
        series: [{
          data
        }],
        chart: {
          type: 'area',
          height: 50,
          sparkline: {
            enabled: true
          }
        },
        stroke: {
          curve: 'straight'
        },
        fill: {
          opacity: 0.3
        },
        yaxis: {
          min: 0
        },
        colors: ['#DCE6EC'],
      }).render();
    }
    renderSparkline('#sparkline-1', [1000, 1200, 920, 927, 931, 1027, 819, 930, 1021]);
    renderSparkline('#sparkline-2', [515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921]);
    renderSparkline('#sparkline-3', [15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21]);
  </script>
  <!--end::Script-->
  <?php $this->endBody() ?>
</body>
<!--end::Body-->

</html>

<?php $this->endPage() ?>