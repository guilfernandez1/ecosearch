<?php include("conexao_db.php"); ?>
<?php include("banco_desastre.php"); ?>
<?php include("banco_evento.php"); ?>
<?php 
    $id = $_GET['id'];
    $desastre = buscaDesastre($conexao, $id);
    $eventos = listaEvento($conexao);
?>
<div class="row">
    <div class="col">
        <label for="nome">Título</label>
        <input type="text" name="nome" id="nome" value="<?=$desastre['nm_desastre']?>" class="form-control">
    </div>
    <div class="col">
        <label for="evento">Evento</label>
        <select class="custom-select my-1 mr-sm-2" id="evento" name="evento_id" required>
        <?php 

        foreach($eventos as $evento) : 
            $esseEhOEvento = $desastre['evento_id'] == $evento['cd_evento'];
             $selecao = $esseEhOEvento ? "selected='selected'" : "";
        ?>
            <option value="<?=$evento['cd_evento']?>" <?=$selecao?>>
                    <?=$evento['nm_evento']?>
            </option>
        <?php endforeach ?>
        </select>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="pais">Pais</label>
        <select name="country" class="countries form-control" id="countryId" required>
                <option value="<?=$desastre['nm_pais']?>"><?=$desastre['nm_pais']?></option>
        </select>
    </div>
    <div class="col">
        <label for="estado">Estado</label>
        <select name="state" class="states form-control" id="stateId" required>
                <option value="<?=$desastre['nm_estado']?>" selected="selected"><?=$desastre['nm_estado']?></option>
        </select>
    </div>
    <div class="col">
        <label for="cidade">Cidade</label>
        <select name="city" class="cities form-control" id="cityId" required>
                <option value="<?=$desastre['nm_cidade']?>"><?=$desastre['nm_cidade']?></option>
        </select>
    </div>
    <div class="col">
        <label for="data">Data</label>
        <input type="date" name="data" id="data" value="<?=$desastre['dt_desastre']?>" class="form-control input_data">
    </div>
</div>
<div class="form-group">
    <label for="referencia">Link de Referência</label>
    <input type="text" name="referencia" id="referencia" class="form-control" value="<?=$desastre['lk_nome']?>" required>
</div>
<div class="form-group">    
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="3" class="form-control"><?=$desastre['ds_desastre']?></textarea>
</div>
<button type="submit" class="btn btn-warning">Alterar</button>
<script src="//geodata.solutions/includes/countrystatecity.js"></script>
