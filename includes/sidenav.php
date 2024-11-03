<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 my-2"
  id="sidenav-main">
  <div class="sidenav-header">

    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
      aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href="dashboard.php"
      >
      <img src="https://cdn-icons-png.flaticon.com/512/1/1430.png" class="navbar-brand-img" width="26" height="26"
        alt="main_logo">
      <span class="ms-1 text-sm nav-title">Advogados</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "processos") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=processos">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=processos">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=processos">';
        } ?>

        <i class="material-symbols-rounded opacity-5">dashboard</i>
        <span class="nav-link-text ms-1">Processos</span>
        </a>
      </li>
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "clientes") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=clientes">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=clientes">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=clientes">';
        } ?>

        <i class="material-symbols-rounded opacity-5">table_view</i>
        <span class="nav-link-text ms-1">Clientes</span>
        </a>
      </li>
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "funcionarios") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=funcionarios">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=funcionarios">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=funcionarios">';
        } ?>
        <i class="material-symbols-rounded opacity-5">receipt_long</i>
        <span class="nav-link-text ms-1">Funcionarios</span>
        </a>
      </li>
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "tarefas") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=tarefas">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=tarefas">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=tarefas">';
        } ?>
        <i class="material-symbols-rounded opacity-5">view_in_ar</i>
        <span class="nav-link-text ms-1">Tarefas</span>
        </a>
      </li>
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "acompanhamento") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=acompanhamento">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=acompanhamento">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=acompanhamento">';
        } ?>
        <i class="material-symbols-rounded opacity-5">format_textdirection_r_to_l</i>
        <span class="nav-link-text ms-1">Acompanhamento</span>
        </a>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder">Configuração de conta</h6>
      </li>
      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "perfil") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=perfil">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=perfil">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=perfil">';
        } ?>
        <i class="material-symbols-rounded opacity-5">person</i>
        <span class="nav-link-text ms-1">Perfil</span>
        </a>
      </li>

      <li class="nav-item">
        <?php if (isset($_GET["r"])) {
          if ($_GET["r"] == "resgistrar") {
            echo '<a class="nav-link active bg-gradient-dark text-white" href="dashboard.php?r=resgistrar">';
          } else {
            echo '<a class="nav-link text-dark" href="dashboard.php?r=resgistrar">';
          }
        } else {
          echo '<a class="nav-link text-dark" href="dashboard.php?r=resgistrar">';
        } ?>

        <i class="material-symbols-rounded opacity-5">assignment</i>
        <span class="nav-link-text ms-1">Resgistrar</span>
        </a>
      </li>
    </ul>
  </div>
</aside>