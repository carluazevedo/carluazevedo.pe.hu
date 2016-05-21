<?php

/**
 * Com este código, 'getcwd()' retorna o diretório atual,
 * 'explode()' quebra a string em partes e as armazena na
 * array '$currDir', e 'end()' retorna a última parte da
 * mesma array.
 */
$currDir = explode(DIRECTORY_SEPARATOR, __DIR__);

?>
<aside class="col-md-2 site-menu">
	<ul class="nav nav-pills nav-stacked">
		<?php
		if(end($currDir) == "a") {
            echo '<li class="active">';
        } else {
            echo '<li>';
        }
	    ?><a href="<?php echo $menu_links[0]; ?>">Início</a></li>

		<?php
		if(end($currDir) == "registroponto") {
            echo '<li class="active">';
        } else {
            echo '<li>';
        }
	    ?><a href="<?php echo $menu_links[1]; ?>">Registro de Ponto</a></li>

		<?php
		if(end($currDir) == "kronacalc") {
            echo '<li class="active">';
        } else {
            echo '<li>';
        }
	    ?><a href="<?php echo $menu_links[2]; ?>">KronaCalc</a></li>
	</ul>
</aside>