<?php

	$conteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eleifend fringilla dolor, in porttitor urna laoreet eu. Nam eu nisi aliquet, efficitur risus ut, ultrices urna. Pellentesque malesuada pulvinar consectetur. Vivamus sit amet est hendrerit massa sollicitudin rhoncus at eu nulla. Nullam et feugiat nisi. Nunc et tellus sed felis gravida tincidunt. Pellentesque viverra nibh magna, ut luctus quam suscipit placerat. Integer sit amet accumsan augue, at vestibulum dolor. Fusce ac faucibus nibh, non blandit eros. Sed posuere hendrerit magna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ut neque est. Integer accumsan nec enim et elementum. Curabitur laoreet enim felis, ac ultrices nibh porttitor at. Donec malesuada, est eget fermentum fermentum, lacus nisi eleifend ante, non efficitur nibh dui sed erat. Mauris gravida augue a dui gravida, vel vehicula nulla faucibus.';

	//Serve para recortar uma string.
	//echo substr($conteudo,0,20);


	$nome = 'Roger Schmidt de Paula';

	$nomes = explode(' ',$nome);

	//print_r($nomes);

	//Serve para juntar um array com um delimitador.
	//No caso o espaco.

	$nomes = implode(' ',$nomes);

	//echo $nomes;

	//Strip_tags = retira codigos html
	$conteudo = '<h1>Roger</h1>Outra coisa';

	//echo strip_tags($conteudo);


	// htmlentities = mostra o codigo html na pagina.

	echo htmlentities('<div></div>');
	
?>