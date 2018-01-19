<fieldset style="width: 400px; margin: auto;">
	<legend>Danh sách chức danh </legend>
	<table cellpadding="5" border="1" style="width: 100%; border-collapse: collapse;">
		<tr>
			<th>Tên chức danh</th>
			<th style="width: 100px;"></th>
		</tr>
		<?php 
		foreach($arr as $rows) 
		{
			?>
		
		<tr>
			<td><?php echo $rows->tenchucdanh; ?> </td>
			<td></td>
		</tr>
		<?php } ?>
	</table>
	
</fieldset>