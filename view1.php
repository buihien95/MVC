<fieldset style="width: 400px; margin: auto;">
	<legend>Danh sách phòng ban</legend>
	<table cellpadding="5" border="1" style="border-collapse: collapse; width: 100%;">
		
           <tr>
           	   <th>Tên phòng ban</th>
           	   <th style="width: 100px;"></th>
           </tr>
           <?php 
                foreach ($phongban as $rows)
                {
             ?>

           <tr>
           	<td>  <?php echo $rows->tenphongban; ?></td>
           	<td style="text-align: center;">
           		<a href="mvc.php?act=delete_phongban&maphongban <?php echo $rows->maphongban; ?> ">DELETE</a>
           	</td>
           </tr>

<?php }  ?>
	</table>
	
</fieldset>