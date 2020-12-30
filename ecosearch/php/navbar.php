<?php 
  session_start(); 
  if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {$logado = true;} else {$logado = false; }
?>

<!--BARRA DE NAVEGAÇÃO-->
<script src="js/bootstrap.bundle.js"></script>
<div id="barra_navegacao">
  <nav class="navbar navbar-expand-lg" id="nav_barra_navegacao">
    <a class="navbar-brand cor-branca-navbar" href="linha_do_tempo.html">EcoSearch</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
      <?php if($logado == true && $_SESSION["EcoSearch"]["tipoUser"] == 0) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle cor-branca-navbar" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Cadastros
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="formulario_usuario.html">Usuário</a>
              <a class="dropdown-item" href="formulario_cadastro_desastre.html">Evento</a>
              <a class="dropdown-item" href="formulario_categoria.html">Categoria</a>
            </div>
          </li>
      <?php elseif($logado == true && $_SESSION["EcoSearch"]["tipoUser"] == 1) : ?>
        <li class="nav-item active">
          <a class="nav-link" href="formulario_cadastro_desastre.html">Cadastro de Evento</a>
        </li>
        <li>
          <a class="nav-link" href="lista_desastre_pendente_usuario.html">Status de Evento</a>
        </li>
        <li>
          <a class="nav-link" href="lista_sugestao_usuario.html">Suas Sugestões</a>
        </li>
      <?php endif ?>
          
          <?php if($logado == true && $_SESSION["EcoSearch"]["tipoUser"] == 0) : ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle cor-branca-navbar" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Listas
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="lista_usuario.html">Usuários</a>
              <a class="dropdown-item" href="lista_desastre.html">Eventos</a>
              <a class="dropdown-item" href="lista_desastre_pendente.html">Eventos pendentes</a>
              <a class="dropdown-item" href="lista_categoria.html">Categorias</a>
              <a class="dropdown-item" href="lista_sugestao.html">Sugestões</a>
              
            </div>
          </li>
          <?php endif ?>
        </div>
        <?php if($logado == false) : ?>
        <button class="btn btn-primary my-2 my-sm-0" onClick="loga()">Entrar</button>
        <?php else : ?>
        <span class="navbar-text" id="nome-user">
          <?=$_SESSION["EcoSearch"]["nomeUser"]?>
        </span>
        <button class="btn btn-danger my-2 my-sm-0" onClick="sair()">Sair</button>
        <?php endif ?>
      </ul>
    </div>
  </nav>
</div>

<script>
  function sair() {
    $.ajax ({
      type: "GET",
      url: "php/desconecta.php"
    })
    .done(function(msg){
      window.location.reload();
    })
  }

  function loga() {
      location.href = "login.html";
  }
</script>