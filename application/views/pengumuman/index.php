<?php
$tipe_pengumuman = array('1'=>'AKADEMIK','2'=>'FAKULTAS','3'=>'REKTORAT');
$role = $this->session->userdata('role');
?>
<h3><u>PENGUMUMAN <?php echo $tipe_pengumuman[$tipe]; ?></u></h3>
<?php
if(($role == '1') or ($role == '2')){
?>
<a href="<?php echo site_url('pengumuman/tambah').'/'.$tipe;?>">Tambah Pengumuman <?php echo ucfirst(strtolower($tipe_pengumuman[$tipe])); ?></a>
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
        <td><a href="<?php echo site_url('pengumuman/detail');?>/{tipe}/{id}">Detail</a>&nbsp;|&nbsp;
            <?php if(!(isset($this->session->userdata['userid'])) or ($this->session->userdata['role'] == '1')) { ?>
            <a href="<?php echo site_url('pengumuman/hapus');?>/{tipe}/{id}">Hapus</a></td>
        <?php } ?>
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