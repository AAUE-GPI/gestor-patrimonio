<title> AAUE :: Torneio do Reitor - Calendário </title>
<body>
	<div class="container">

		<div class="btn-group btn-group-justified" role="group">
			<div class="btn-group" role="group">
				<a href="<?php echo base_url()?>index.php/calendario/index"><button type="button" class="btn botaoGrupos">Geral</button></a>
			</div>

			<?php 
			$grupo = 1;
			foreach ($grupos as $grupos): ?>
			<div class="btn-group" role="group">
				<a href="<?php echo base_url()?>index.php/calendario/grupos/<?php echo ($grupo) ?>"><button type="button" class="btn botaoGrupos"><?php echo ($grupos['nome']); ?></button></a>
			</div>
			<?php $grupo ++; endforeach; ?>
		</div>

		<div class="table-responsive">
			<table class="table">
				<table class="table tabela-riscada">
					<thead>
						<tr>
							<th>Jornada</th>
							<th>Dia</th>
							<th>Hora</th>
							<th>Local</th>
							<th>Equipas</th>
							<th>Resultado</th>
						</tr>
					</thead>

					<tbody>
						<?php 
						foreach($jogos as $jogos): ?>
						<tr>
							<td><?php echo $jogos['jornada']; ?></td>
							<td><?php echo $jogos['dia']; ?></td>
							<td><?php echo $jogos['hora']; ?></td>
							<td><?php echo $jogos['local']; ?></td>
							<td><?php echo $jogos['equipas']; ?></td>
							<td><?php echo $jogos['resultado']; ?></td>

						</tr>
					<?php endforeach; ?>
				</tbody>

			</table>
		</div> 
		<div class="table-responsive">
			<table class="table">
				<table class="table tabela-riscada">
					<thead>
						<tr>
							<th>Posição</th>
							<th>Equipa</th>
							<th>JR</th>
							<th>GM</th>
							<th>GS</th>
							<th>DIF</th>
							<th>PTS</th>
						</tr>
					</thead>

					<tbody>
						<?php
						$posicao = 1;
						foreach($equipas as $equipas): ?>
						<tr>
							<td><?php echo($posicao); $posicao ++;?></td>
							<td><?php echo $equipas['nome']; ?></td>
							<td><?php echo $equipas['jr']; ?></td>
							<td><?php echo $equipas['gm']; ?></td>
							<td><?php echo $equipas['gs']; ?></td>
							<td><?php echo ($equipas['gm'] - $equipas['gs']); ?></td>
							<td><?php echo $equipas['pontos']; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>

			</table>
		</div> 

	</div>
</body>