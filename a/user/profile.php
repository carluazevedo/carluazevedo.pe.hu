<?php

require_once(CONFIG . '/db.php');
require_once(CLASSES . '/Registration.php');
require_once(CLASSES . '/Usuarios.php');
$users = new Usuarios($db_connection);

$user_data = $users->searchUser($_GET['user']);

?>
<div class="col-sm-offset-2 custom-form">
	<h2>Perfil do usuário</h2>
	<form class="form-horizontal" method="post">
		<input type="hidden" name="id" value="<?php echo $user_data['user_id']; ?>">
		<fieldset>
			<div class="form-group">
				<label for="user_first_name" class="col-sm-2 control-label">Nome</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="user_first_name" id="user_first_name" value="<?php echo $user_data['user_first_name']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_last_name" class="col-sm-2 control-label">Sobrenome</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="user_last_name" id="user_last_name" value="<?php echo $user_data['user_last_name']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_name" class="col-sm-2 control-label">Nome de usuário</label>
				<div class="col-sm-3">
					<input type="text" class="form-control" name="user_name" id="user_name" value="<?php echo $user_data['user_name']; ?>" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_email" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-3">
					<input type="email" class="form-control" name="user_email" id="user_email" value="<?php echo $user_data['user_email']; ?>" required>
				</div>
			</div>

			<br>

			<div class="form-group">
				<label for="user_password_current" class="col-sm-2 control-label">Senha atual</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" name="user_password_current" id="user_password_current" value="" required>
				</div>
			</div>

			<div class="form-group">
				<label for="user_password_new" class="col-sm-2 control-label">Nova senha</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" name="user_password_new" id="user_password_new" value="">
				</div>
			</div>

			<div class="form-group">
				<label for="user_password_repeat" class="col-sm-2 control-label">Repetir nova senha</label>
				<div class="col-sm-3">
					<input type="password" class="form-control" name="user_password_repeat" id="user_password_repeat" value="">
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-3">
					<input type="submit" class="btn btn-primary" value="Atualizar perfil">
					<input type="button" class="btn btn-danger" value="Cancelar" onclick="location.href='./'">
				</div>
			</div>
		</fieldset>
	</form>
</div>