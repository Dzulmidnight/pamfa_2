<table class="table table-striped">
	<thead>
		<tr>
			<th>Producto</th>
			<th>Descripción</th>
			<th>...</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		if(isset($consulta_mex)){
			foreach ($consulta_mex as $fila) {
			?>
				<tr>
					<td>
						<? echo $fila->mex_producto;?>
					</td>
					<td>
						<? echo $fila->descripcion;?>
					</td>
					<td>
						<button class="btn u-btn-red g-mr-10 g-mb-15" type="button" onclick="<?php echo "quitar(".$fila->id_hecho_mexico.")"?>" >
							<i class="fa fa-trash" ></i> Eliminar
						</button>
					</td>
					
					
				</tr>
			<?php
			}
		}
		 ?>
	</tbody>
</table>