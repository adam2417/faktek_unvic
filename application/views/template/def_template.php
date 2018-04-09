<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/logo_univ.png" />
<title>{page_title}</title>
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/new_design/new_style.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/new_design/styles.css" />    
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/content.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>styles/new_design/jssor_gallery.css" /> 
<script type="text/javascript"
	src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/highchart/jquery.min.js"></script>
<script type="text/javascript"
	src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/galleria/galleria-1.2.7.min.js"></script>
<script type="text/javascript"
	src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/jssor.slider-26.3.0.min.js"></script>
<!--<script type="text/javascript" src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/jquery.js"></script>-->
<script type="text/javascript"
	src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>scripts/highchart/highcharts.js"></script>
<script type="text/javascript">
<!--//
function validate(form){
    var message = 'Isilah Field-Field Di Bawah Ini:\n\n\t';
    var msg = '';
    for(var i=0; i<form.elements.length; i++){
        if(form.elements[i].value.length == 0){
            var field = form.elements[i].name.toUpperCase();            
            message+= field +'\n\t'; 
        }
    } 
    message+= '\n\nTekan OK untuk melakukan submit form atau CANCEL untuk kembali ke form';    
    message = confirm(message);
    if(!message){ return false; }
    else{ return true; }
}
//-->
</script>
<style>
.odd {
    background-color:rgb(120,183,228);
    color:white;
    font-family: "Arial Rounded MT","Arial Black","Times New Roman";
    font-size: 12pt;
    padding:15px;
}
.even {
    background-color:rgb(255,255,255);
    color:black;
    font-family: "Arial Rounded MT","Arial Black","Times New Roman";
    font-size: 12pt;
    padding:15px;
}
</style>
</head>
<body>
    <div id="upper_menu">
        <div class="header">
                <div class="left_header">
                    <div class="imagespan">
                        <img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/logo.PNG" width="105" height="105" /></div>
                    <div class="judul">FAKULTAS TEKNIK<br/>UNIVERSITAS VICTORY SORONG</div>
                </div>
                <div class="center_header">&nbsp;</div>
                <div class="right_header">
                    <div class="info_fak">
                        <table>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>fatek@unvicsorong.co.id</td>
                            </tr>
                            <tr>
                                <td>Website</td>
                                <td>:</td>
                                <td><a href="www.unvicsorong.ac.id">www.unvicsorong.ac.id</a></td>
                            </tr>
                        </table>
                    </div>
                </div>       
        </div>
        <div class="menu_head">
            <div id='cssmenu'>
                <ul>
                   <li><a href='<?php echo site_url('home');?>'><span>Beranda</span></a></li>
                   <li class='active has-sub'><a href='#'><span>Tentang</span></a>
                      <ul>
                          <li><a href='<?php echo site_url('sejarah');?>'><span>Sejarah Fakultas</span></a></li>
                          <li><a href='<?php echo site_url('visimisi');?>'><span>Visi dan Misi</span></a></li>
                          <li><a href='<?php echo site_url('strukturorg');?>'><span>Susunan Organisasi</span></a></li>                    
                      </ul>
                   </li>
                    <?php if(!(isset($this->session->userdata['userid'])) or ($this->session->userdata['role'] == '1') or ($this->session->userdata['role'] == '2')) { ?>
                    <li class='active has-sub'><a href='#'><span>Pengumuman</span></a>
                        <ul>
                            <li><a href='<?php echo site_url('pengumuman/index/1');?>'><span>Info Akademik</span></a></li>
                            <li><a href='<?php echo site_url('pengumuman/index/2');?>'><span>Info Fakultas</span></a></li>
                            <li class='last'><a href='<?php echo site_url('pengumuman/index/3');?>'><span>Info Rektorat</span></a></li>
                        </ul>
                    </li>
                    <?php } ?>
                        <?php if(!(isset($this->session->userdata['userid'])) or ($this->session->userdata['role'] == '1') or ($this->session->userdata['role'] == '3')) { ?>
                   <li><a href='<?php echo site_url('eksternalinfo');?>'><span>Eksternal Info</span></a></li>
                    <?php } ?>
                   <li><a href='<?php echo site_url('kurikulum');?>'><span>Kurikulum</span></a></li>
                    <li><a href='<?php echo site_url('gallery');?>'><span>Gallery</span></a></li>
                    <li><a href='<?php echo site_url('bukutamu');?>'><span>Buku Tamu</span></a></li>
                    <?php if(isset($this->session->userdata['userid'])){?>
                        <?php if($this->session->userdata['userid'] == '1'){?>	
                   <li class='last'><a href='<?php echo site_url('user');?>'><span>Management Login User</span></a></li>
                    <?php }}?>
                </ul>
            </div>            
        </div>
    </div>
    <div id="content">
        <div class="left">&nbsp;</div>
        <div class="center"><?php echo $content;?></div>
        <div class="right">
            <?php if(isset($this->session->userdata['userid'])){ ?>
            <div class="uprofile">
                <div class="uprofile_left">&nbsp;</div>
                <div class="uprofile_center"><div class="image" style="width: 75px; height: 75px; border-radius: 50%; background-image: url('<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder')?>images/login/thumbs/<?php echo $img_profile ?>');    background-position: center center; background-size: cover; margin-left:30%;"></div>
                Welcome <a href="<?php echo site_url('user/userProfile');?>"><?php echo $name ?></a>&nbsp;|&nbsp;<a href="<?php echo site_url('user/logout');?>">Logout</a></div>
                <div class="uprofile_right">&nbsp;</div>                
            </div>
            <?php } else{ ?>
            <div class="login">
                <h3>Please Login</h3>
                <form name="loginform" action="<?php echo site_url('login/loginProcess');?>" method="post">
                    <input type="text" name="username" placeholder="Username" required=" "><br/><br/>
                    <input type="password" name="password" class="password" placeholder="Password" required=" "><br/><br/>
                    <input type="submit" value="Login" name="login" class="loginbutton">
                </form>
			</div>
            <?php } ?>
            <div class="center_right">
                <h3>PENGUMUMAN</h3>
                <?php
                echo '<table>';
                $i = 0;
                $style = '';
                $fragment = 50;
                while($i < count($pengumuman)){
                    $str_pengumuman = $pengumuman[$i]->content;
                    if(strlen($str_pengumuman) >= $fragment){
                        $trimstr = substr($str_pengumuman,0,$fragment).'... <a href="'. site_url('pengumuman/detail').'/'.$pengumuman[$i]->tipe.'/'.$pengumuman[$i]->id.'">Read More</a>';   
                    }else {
                        $trimstr = $str_pengumuman;
                    }
                    if(($i % 2) == 0) $style = 'even'; else $style = 'odd';
                    echo '<tr class="'.$style.'">';
                    echo '<td>'.$trimstr.'</td>';
                    echo '</tr>';    
                    $i++;
                }
                echo '</table>';
                ?>
            </div>
        </div>
    </div>
    <div id="footer">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td height="1" class="bottom-menu">
                <a href="<?php echo site_url('home');?>">Beranda</a> | 
                <a href="<?php echo site_url('sejarah');?>">Tentang</a> | 
                <a href="<?php echo site_url('gallery');?>">Gallery</a> | 
                <a href="<?php echo site_url('bukutamu');?>">Buku Tamu</a>
            </tr>
            <tr>
                <td height="1" class="bottom_addr">&copy; 2017 Fakultas Teknik Universitas Victory Sorong
                <br>Designed by Admin
                </td>
            </tr>
        </table>
    </div>
</body>
</html>