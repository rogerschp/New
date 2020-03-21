<section class="banner-container">
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>pictures/background-slide1.jpg');" class="banner-single"></div>
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>pictures/banner-principal.jpg');" class="banner-single"></div>
	<div style="background-image: url('<?php echo INCLUDE_PATH; ?>pictures/background-slide2.jpg');" class="banner-single"></div>

	<?php
		if(isset($_POST['acao'])){
			//Enviei o Formulario.
			if($_POST['email'] != ''){
				$email = $_POST['email'];
				if(filter_var($email, FILTER_VALIDATE_EMAIL)){
					//Tudo certo, e um email.
					//So enviar.
					$mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456','Guilherme');
					$mail->addAddress('contato@dankicode.com','Guilherme');
					$corpo = "E-mail cadastrado na home do site:<hr>$email";
					$info = array('assunto'=>'Um novo e-mail cadastrado no site!','corpo'=>$email);
					$mail->formatarEmail($info);
					if($mail->enviarEmail()){
						echo '<script>alert("Enviado com sucesso!")</script>';
					}else{
						echo '<script>alert("Algo deu errado.")</script>';
					}
				}else{
					echo '<script>alert("Nao e um e-mail valido.")</script>';
				}
			}else{
				echo '<script>alert("Campos vazios nao sao permitidos!")</script>';
			}
		}
	?>
			<form method="post">
				<h2>Insira seu E-mail para cadastro!</h2>
				<input type="email" name="email" required />
				<input type="hidden" name="identificador" value="form_home" />
				<input type="submit" name="acao" value="Cadastrar!">	
			</form><!--Formulario de cadastro!-->
		<div class="textCenter">
			<h1>Smoking On</h1>
				<h4>Tudo e mais um pouco para sua sessão</h4>
		</div><!--Text Center-->
		<div class="overlay"><div class="center"></div><!--center--> </div><!--overlay-->
		<div class="bullets"></div><!--Bullets-->
	</section><!--banner-principal-->

	<section class="descricao-autor">
		<div class="center">
		<div class="w50 left
		<h4>Tudo e mais um pouco para sua sessão</h4>">
			<h2>Tabacaria Complicada</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna ex, molestie eu ante vel, placerat molestie diam. Duis ex nibh, fermentum eu congue sed, malesuada ut purus. Aliquam volutpat quam mauris, vitae efficitur ante varius ac. Fusce tincidunt sagittis justo eget ultrices. Mauris vel tortor imperdiet, laoreet purus quis, fermentum massa. Proin sit amet nunc id leo varius venenatis. Suspendisse efficitur libero nunc, sed pretium nisi laoreet sed. Maecenas viverra dui ac magna cursus, eu commodo purus consectetur. Etiam odio nisi, bibendum in lorem sagittis, malesuada consectetur nisi.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna ex, molestie eu ante vel, placerat molestie diam. Duis ex nibh, fermentum eu congue sed, malesuada ut purus. Aliquam volutpat quam mauris, vitae efficitur ante varius ac. Fusce tincidunt sagittis justo eget ultrices. Mauris vel tortor imperdiet, laoreet purus quis, fermentum massa.</p>
		</div><!--w50 largura da tela-->
		<div class="w50 left">
			<!--pegar img depois-->
			<img class="right" src="<?php echo INCLUDE_PATH; ?>pictures/foto.jpg" />
		</div><!--w50 largura da tela-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--Descriçao do site-->

	<section class="especialidades">

		<div class="center">
			<h2 class="titulo">Especialidades</h2>
			<div class="w33 left box-especialidade">
			<h3><i class="fa fa-fire"></i></h3>
			<h4>Essencias</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			</div><!--especialidade-->
			<div class="w33 left box-especialidade">
			<h3><i class="fa fa-filter"></i></h3>
			<h4>Narguile</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
			</div><!--especialidade-->
			<div class="w33 left box-especialidade">
			<h3><i class="fa fa-truck"></i></h3>
			<h4>Delivery</h4>
			<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			</div><!--especialidade-->
			<div class="clear"></div>
		</div><!--Centro-->
	</section><!--especialidades-->

	<section class="extras">

			<div class="center">
				<div id="sobre" class="w50 left depoimentos-container">
					<h2 class="tittle">Depoimentos dos nossos clientes</h2>
					<div class="depoimentos-single">
						<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu. In mollis diam ut lorem condimentum congue. Nam eget suscipit libero. In tristique porta mi, a pellentesque velit aliquam at. Cras et augue non odio malesuada laoreet. Fusce ac lacus est. In convallis non enim sed consequat. Donec cursus purus a nulla malesuada, sit amet tristique ipsum dictum. Morbi efficitur finibus lorem, nec hendrerit est rhoncus quis. Nulla non malesuada ligula. Fusce nec placerat tortor. Aenean accumsan diam in aliquet vestibulum."</p>
						<p class="nome-autor">Lorem Ipsum</p>
					</div><!--depoimentos-->
					<div class="depoimentos-single">
						<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu. In mollis diam ut lorem condimentum congue. Nullam quis maximus tellus. Proin commodo egestas volutpat. Vivamus fringilla erat metus, at imperdiet mi eleifend in."</p>
						<p class="nome-autor">Lorem Ipsum</p>
					</div><!--depoimentos-->
					<div class="depoimentos-single">
						<p class="depoimento-descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu."</p>
						<p class="nome-autor">Lorem Ipsum</p>
					</div><!--depoimentos-->
				</div><!--w50-->
							<div id="servicos" class="w50 left servicos-container">
							<h2 class="tittle">Serviços</h2>
							<div class="servicos">
							<ul>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu. In mollis diam ut lorem condimentum congue.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu. In mollis diam ut lorem condimentum congue.</li>
								<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam venenatis, nunc nec finibus molestie, lacus mauris pulvinar libero, et lobortis ex urna et justo. Sed vel lectus luctus, imperdiet sapien eget, imperdiet arcu. In mollis diam ut lorem condimentum congue.</li>
							</ul>
						</div><!--servicos-->
						</div><!--w50-->
						<div class="clear"></div>
			</div><!--center-->
	</section><!--extras caso tenha-->