<?php include('header.php'); ?>
	<section class="main">
		<div class="wrapp-m">
			<div class="mensaje">
				<h1>Cliente</h1>
			</div>
			<div class="articulos">
				<article>
                <form action="/action_page.php">
					<?php include ("crud_cliente/index.php"); ?>
                </form>
				</article>
			</div>
			<a target="_blank" href="crud_cliente/registro.php" class="ingresar">Agregar registro</a>
		</div>
	</section>
<?php include('footer.php'); ?>
