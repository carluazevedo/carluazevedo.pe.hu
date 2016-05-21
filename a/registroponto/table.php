<?php

if (!isset($_POST['nol'])) {
	$_POST['nol'] = '10';
}

$registro_ponto->number_of_lines = $_POST['nol'];

$rows = $registro_ponto->queryRecords();

?>
<div class="col-sm-offset-2 custom-form">
    <h2>Registro de Ponto</h2>
    <a class="btn btn-primary" id="top" href="index.php?act=record" role="button">Gravar ponto</a>
	<form action="./" method="post" class="pull-right">
		<select class="form-control" id="number-of-lines" name="nol" onchange='this.form.submit()'>
			<option value="10" <?php echo ($_POST['nol'] == 10) ? 'selected' : '' ; ?>>10</option>
			<option value="30" <?php echo ($_POST['nol'] == 30) ? 'selected' : '' ; ?>>30</option>
			<option value="50" <?php echo ($_POST['nol'] == 50) ? 'selected' : '' ; ?>>50</option>
			<option value="100" <?php echo ($_POST['nol'] == 100) ? 'selected' : '' ; ?>>100</option>
		</select>
		<noscript><input type="submit" value=">>"></noscript>
	</form>
    <div class="table-responsive">
        <table class="table table-condensed">
            <tr>
                <th>Data</th>
                <th>Folga</th>
                <th>Entrada</th>
                <th>Saída</th>
                <th>Entrada</th>
                <th>Saída</th>
                <th>Observações</th>
                <th>Opções</th>
            </tr>
            <?php foreach($rows as $value) : ?>
            <tr>
                <td><?php echo $value['data']; ?></td>
                <td><?php echo ($value['folga'] == 1) ? '<gr>Sim</gr>' : '<rd>Não</rd>'; ?></td>
                <td><?php echo zeroTime($value['entrada_1']); ?></td>
                <td><?php echo zeroTime($value['saida_1']); ?></td>
                <td><?php echo zeroTime($value['entrada_2']); ?></td>
                <td><?php echo zeroTime($value['saida_2']); ?></td>
                <td><?php echo emptyObs($value['observacoes']); ?></td>
                <td>
                	<a class="btn btn-success btn-xs" href="index.php?act=edit&id=<?php echo $value['id']; ?>" role="button">Editar</a>
                	<a class="btn btn-danger btn-xs" href="index.php?act=remove&id=<?php echo $value['id']; ?>" role="button">Remover</a>
                </td>
            <tr>
            <?php endforeach; ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            <tr>
        </table>
    </div>
    <div class="text-center">
    	<nav>
    		<ul class="pagination">
    			<li class="disabled">
    				<a href="#" aria-label="Previous">
    					<span aria-hidden="true">&laquo;</span>
    				</a>
    			</li>
    			<li class="active">
    				<a href="#">1 <span class="sr-only">(current)</span></a>
    			</li>
    			<li>
    				<a href="#">2</a>
    			</li>
    			<li>
    				<a href="#">3</a>
    			</li>
    			<li>
    				<a href="#" aria-label="Next">
    					<span aria-hidden="true">&raquo;</span>
    				</a>
    			</li>
    		</ul>
    	</nav>
    </div>
</div>
<?php
	/**
	 * FORMATAÇÃO DE DATA E HORA EM MYSQL:
	 * SELECT *, DATE_FORMAT(data,'%d/%m/%Y') AS data, TIME_FORMAT(hora,'%H:%i') AS hora, FROM `tabela`
	 * 
	 * FONTES:
	 * https://mariadb.com/kb/en/mariadb/date_format/
	 * https://mariadb.com/kb/en/mariadb/time_format/
	 */
?>