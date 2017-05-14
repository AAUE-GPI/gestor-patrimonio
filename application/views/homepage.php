<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?>

<div class="container">

			<a href="<?php echo base_url().'index.php/examples/logout'?>">logout</a>

	<div class="tabela-botoes">
			<div class="botao">
				<a href="<?php echo base_url().'index.php/carros'?>">
					<div class="imagem"><img src="http://www.practical.co.uk/vehicle_Images/v_small_refrigerated_van.jpg"></div>
					<div class="nome"><h1>Carros</h1></div>
				</a>
			</div>
			<div class="botao">
				<a href="<?php echo base_url().'index.php/camaras'?>">
					<div class="imagem"><img src="http://www.practical.co.uk/vehicle_Images/v_small_refrigerated_van.jpg"></div>
					<div class="nome"><h1>Maquinas</h1></div>
				</a>
			</div>
			<div class="botao">
					<a href="<?php echo base_url().'index.php/barris'?>">
						<div class="imagem"><img src="http://www.practical.co.uk/vehicle_Images/v_small_refrigerated_van.jpg"></div>
						<div class="nome"><h1>Barris</h1></div>
					</a>
			</div>
	</div>
</div>
