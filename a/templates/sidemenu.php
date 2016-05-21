<?php

/**
 * '$current_dir' recebe o diretório atual pré-definido de cada página
 */

?>
<aside class="col-md-2 site-menu">
	<ul class="nav nav-pills nav-stacked" role="navigation">
		<li <?php echo ($current_dir == 'index') ? 'class="active"' : '' ;?>>
			<a href="<?php echo $menu_links[0]; ?>">
				Início<?php echo ($current_dir == 'index') ? ' <span class="sr-only">(current)</span>'.PHP_EOL : PHP_EOL ;?>
			</a>
		</li>

		<li <?php echo ($current_dir == 'registroponto') ? 'class="active"' : '' ;?>>
			<a href="<?php echo $menu_links[1]; ?>">
				Registro de Ponto<?php echo ($current_dir == 'registroponto') ? ' <span class="sr-only">(current)</span>'.PHP_EOL : PHP_EOL ;?>
			</a>
		</li>

		<li <?php echo ($current_dir == 'kronacalc') ? 'class="active"' : '' ;?>>
			<a href="<?php echo $menu_links[2]; ?>">
				KronaCalc<?php echo ($current_dir == 'kronacalc') ? ' <span class="sr-only">(current)</span>'.PHP_EOL : PHP_EOL ;?>
			</a>
		</li>
	</ul>
</aside>