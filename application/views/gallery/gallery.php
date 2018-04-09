<style type="text/css">
	#gallery, #upload {
		border: 1px solid #ccc; margin: 10px auto; width: 570px; padding: 10px;
	}
	#blank_gallery {
		font-family: Arial; font-size: 18px; font-weight: bold;
		text-align: center;
	}
	.thumb {
		float: left; width: 150px; height: 100px; padding: 10px; margin: 10px; background-color: #ddd;
	}
	.thumb:hover {
		outline: 1px solid #999;
	}
	img {
		border: 0;
	}
	#gallery:after {
		content: "."; visibility: hidden; display: block; clear: both; height: 0; font-size: 0;
	}
        .black_overlay{
                display: none;
                position: absolute;
                top: 0%;
                left: 0%;
                width: 100%;
                height: 100%;
                background-color: black;
                z-index:1001;
                -moz-opacity: 0.8;
                opacity:.80;
                filter: alpha(opacity=80);
        }
        .white_content {
                display: none;
                position: absolute;
                top: 25%;
                left: 25%;
                width: 50%;
                height: 50%;
                padding: 16px;
                border: 5px solid orange;
                background-color: white;
                z-index:1002;
                overflow: auto;
        }
</style>
<h3>GALLERY</h3>
<div id="gallery">
	<?php 
        $i = 0;
        if (isset($images) && count($images)):
		foreach($images as $image): $i++;?>
		<div id="galleria" class="thumb">
                    <a href = "javascript:void(0)" onclick = "document.getElementById('light_<?php echo $i?>').style.display='block';document.getElementById('fade_<?php echo $i?>').style.display='block'">			
			<img src="<?php echo $image['thumb_url']; ?>" />
                    </a>
                    <div id="light_<?php echo $i?>" class="white_content">                        
                        <a href = "javascript:void(0)" onclick = "document.getElementById('light_<?php echo $i?>').style.display='none';document.getElementById('fade_<?php echo $i?>').style.display='none'">Close</a>
                        <br/><br/>
                        <center><h1><u><?php echo $image['judul']?></u></h1></center>
                        <br/><br/>
                        <img src="<?php echo $image['url']; ?>" /><br/>                        
                    </div>
                    <div id="fade_<?php echo $i?>" class="black_overlay"></div>
		</div>
	<?php endforeach; else: ?>
		<div id="blank_gallery">Please Upload an Image</div>
	<?php endif; ?>
</div>
<?php if(isset($this->session->userdata['userid'])){ ?>
<div id="upload">
<?php
    echo form_open_multipart('gallery');
?>
    <table>
        <tr>
            <td>Judul</td>
            <td>:</td>
            <td><?php
                $data = array(
                  'name'        => 'judul',
                  'id'          => 'judul',
                  'value'       => '',
                  'maxlength'   => '100',
                  'size'        => '50',
                  'style'       => 'width:50%',
                );
                echo form_input($data);
            ?></td>
        </tr>
        <tr>
            <td>Upload</td>
            <td>:</td>
            <td><?php echo form_upload('userfile');?></td>
        </tr>
    </table>
<?php    
    echo form_submit('upload', 'Upload');
    echo form_close();
?>		
</div>
<?php }?>