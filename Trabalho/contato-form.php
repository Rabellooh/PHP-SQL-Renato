<?php

$form = <<<EOT

<form method="post" action="contato-salva.php">
	<input type="hidden" name="id_contato" value="">
	<p>Nome: <input type="text" name="nome" size="40" value=""></p>
	<p>Email: <input type="text" name="email" size="40" value=""></p>
	<p>Telefone: <input type="text" name="telefone" size="40" value=""></p>
	<p>Modelo: <input type="text" name="modelo" size="40" value=""></p>
	<p>Chassi: <input type="text" name="chassi" size="40" value=""></p>
	<p><input type="submit" value="salva"></p>
</form>

EOT;

echo $form;

