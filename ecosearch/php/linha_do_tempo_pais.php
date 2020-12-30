<?php 
    session_start(); 

    if (isset($_SESSION["EcoSearch"]["logado"]) && $_SESSION["EcoSearch"]["logado"] == true) {$logado = true;} else {$logado = false; }

    include("conexao_db.php");
    include("banco_desastre.php");
?>
<?php
    $pais = $_GET['pais'];
    $evento = $_GET['evento'];
    if($pais == null && $evento == null) {
        $desastresPais = listaDesastre($conexao);
    } elseif($pais != null && $evento == null) {
        $desastresPais = listaDesastreUmPaisTodosEventos($conexao, $pais);
    } elseif($pais == null && $evento != null) {
        $desastresPais = listaDesastreTodosPaisUmEventos($conexao, $evento);
    } elseif($pais != null && $evento != null) {
        $desastresPais = listaDesastreUmPaisUmEventos($conexao, $pais, $evento);
    }
?>
<?php foreach($desastresPais as $desastre) : ?>
    <div class="cd-timeline-block">
    <?php if(substr($desastre['nm_evento'], 0, 8) == "Acidente") : ?>
    <div class="cd-timeline-img cd-movie"></div> <!--cd-picture = verde / cd-movie = vermelho-->
    <?php else : ?>
    <div class="cd-timeline-img cd-picture"></div> <!--cd-picture = verde / cd-movie = vermelho-->
    <?php endif ?>
        <div class="cd-timeline-content">
            <h2><?=$desastre['nm_desastre']?></h2>
            <p><?=$desastre['ds_desastre']?></p>
            <a href="<?=$desastre['lk_nome']?>" target="_blank" class="btn btn-info estilizacao-botoes-card">Ver mais</a>
            <?php if($logado == true && $_SESSION["EcoSearch"]["tipoUser"] == 0 || $logado == true && $_SESSION["EcoSearch"]["tipoUser"] == 1) : ?>
            <button type="button" class="btn btn-primary estilizacao-botoes-card" onclick="pegaValoresModal(<?=$desastre['cd_desastre']?>, '<?=$_SESSION['EcoSearch']['loginUser']?>');" data-toggle="modal" data-target="#exampleModal">
                Sugestão de Alteração
            </button>
            <?php endif ?>
            <span class="cd-date"><?=$desastre["dt_desastre_format"]?></span>
        </div>
    </div>
    </div>
<?php endforeach ?>
