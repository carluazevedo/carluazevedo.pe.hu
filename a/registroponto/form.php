<div class="col-sm-offset-2 custom-form">
	<h2><?php echo $page_title; ?></h2>
	<form class="form-horizontal" method="post">
		<input type="hidden" name="id" value="<?php echo $registro['id']; ?>">
		<fieldset>
			<div class="form-group ">
				<label for="data" class="col-sm-1 control-label">Data</label>
				<div class="col-sm-3">
					<input type="date" class="form-control" name="data" id="data" value="<?php echo $registro['data']; ?>" autofocus>
				</div>
			</div>

			<div class="form-group">
				<label for="folga" class="col-sm-1 control-label">Folga</label>
				<div class="col-sm-3">
					<label class="radio-inline">
						<input type="radio" name="folga" id="folga" value="1" <?php echo ($registro['folga'] == 1) ? 'checked ' : '' ;?>>
						Sim
					</label>
					<label class="radio-inline">
						<input type="radio" name="folga" value="0" <?php echo ($registro['folga'] == 0) ? 'checked ' : '' ;?>>
						Não
					</label>
				</div>
			</div>

			<div class="form-group">
				<label for="entrada_1" class="col-sm-1 control-label">Entrada</label>
				<div class="col-sm-3">
					<input type="time" class="form-control" name="entrada_1" id="entrada_1" value="<?php echo $registro['entrada_1']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="saida_1" class="col-sm-1 control-label">Saída</label>
				<div class="col-sm-3">
					<input type="time" class="form-control" name="saida_1" id="saida_1" value="<?php echo $registro['saida_1']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="entrada_2" class="col-sm-1 control-label">Entrada</label>
				<div class="col-sm-3">
					<input type="time" class="form-control" name="entrada_2" id="entrada_2" value="<?php echo $registro['entrada_2']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="saida_2" class="col-sm-1 control-label">Saída</label>
				<div class="col-sm-3">
					<input type="time" class="form-control" name="saida_2" id="saida_2" value="<?php echo $registro['saida_2']; ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="observacoes" class="col-sm-1 control-label">Obs.</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="observacoes" id="observacoes" value="<?php echo $registro['observacoes']; ?>">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-1 col-sm-3">
					<input type="submit" class="btn btn-primary" value="<?php echo ($registro['id'] > 0) ? 'Gravar alterações' : 'Gravar'; ?>">
					<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='./'">
				</div>
			</div>
		</fieldset>
	</form>
</div>