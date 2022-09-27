<hr>
<a class='btn btn-success' href='<?php echo base_url('/')."form"?>'>Crear Nuevo</a>
<hr>
<div class="container" align="justify">
	<table class="table table-striped">
  		<thead>
  			<tr>
  				<th scope="col" style="width:10%"></th>
  				<th style="width:30%">Fecha</th>
      			<th style="width:60%">Documento</th>
      		</tr>
      	</thead>
      <tbody>
<?php
$company = $this->session->userdata('company');
	echo '';
	$this->db->select('form_companie.id, form_companie.date, form_companie.formulario, formularios.name');
	$this->db->from('form_companie');
	$this->db->join('formularios','form_companie.formulario=formularios.id');
	$this->db->where('form_companie.companie',$company->id);
	$consulta = $this->db->get();
		foreach($consulta ->result() as $row){
LoadRow($row->id,$row->name,$row->date,$row->formulario);		
	}
function LoadRow($id,$name,$date,$form){
echo "<tr><td><a class='btn btn-success' href='".base_url('/')."form/documento/{$form}/{$id}'>Ver</a></td>";
echo "<td>".date("d-m-Y", $date)."</td>";
echo "<td>{$name}</td></tr>";	
	}
?>
  	</tbody>
	</table>
</div>
<hr>
