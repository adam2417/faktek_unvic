<h3><u>PENGUMUMAN EKSTERNAL</u></h3>
<?php
if(($role == '1') or ($role == '3')){
?>
<a href="<?php echo site_url('eksternalinfo/tambah')?>">Tambah Pengumuman</a>
<br/><br/>
<?php } ?>
<br/>
<table id="datatable">
<thead>
	<tr class="header">
        <th>Tanggal</th>
		<th>Judul</th>
		<th>&nbsp;</th>
	</tr>
<thead>
<tbody>
	<?php if(count($data) > 0) {?>
	{data}
	<tr>
        <td>{waktu}</td>
		<th>{header_title}</th>		
        <td><a href="<?php echo site_url('eksternalinfo/detail');?>/{id}">Detail</a></td>
	</tr>
	{/data}
    <?php } 
		else{
            echo "<tr>";
            echo "<td colspan='2' style='text-align:center;color:red;'>No Data To Display</td>";
            echo "</tr>";
        }

	?>
</tbody>
</table>