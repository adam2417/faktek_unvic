<?php
$tipe_pengumuman = array('1'=>'AKADEMIK','2'=>'FAKULTAS','3'=>'REKTORAT');
?>
<!-- TinyMCE -->
<script type="text/javascript" src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/tinymce/tinymce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		  selector: '#elm1',  // change this value according to your html
          toolbar: 'undo redo | image code',
          plugins: "image,link,autosave,imagetools,codesample,emoticons,paste,autoresize,textcolor,table,preview,jbimages",
          menubar:false,
          statusbar: false,
          theme_advanced_resizing : true,
          toolbar1: 'insertfile undo redo | styleselect | table | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
          toolbar2: 'preview | forecolor backcolor | codesample emoticons',
          toolbar3: 'jbimages',
          relative_urls: false
	});
</script>
<form method="post" name="frmTambah" action="<?php echo site_url('pengumuman/tambah').'/'.$tipe;?>" enctype="multipart/form-data">
<h3><u>TAMBAH PENGUMUMAN <?php echo $tipe_pengumuman[$tipe]; ?></u></h3>
<input type="submit" name="btnSave" value="Save" class="btn" />
|
<input type="reset" name="btnClear" value="Clear" class="btn" />
|
<input type="button" name="btnClose" value="Back" class="btn" onclick="javascript:history.back(1);" />
<br /><br />
<?php
if((count($message) > 0) && ($message != '')){
	echo $message;
} 
?>
<br />
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td><input type="text" name="title" /></td>
	</tr>
	<tr>
		<td>Deskripsi</td>
		<td>:</td>
		<td>
            <textarea id="elm1" name="elm1" rows="15" cols="80" style="width: 100%">				
			</textarea>
		</td>
	</tr>	
</table>
</form>