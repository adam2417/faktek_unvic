<h3><u>USER PROFILE</u></h3>
<a href="javascript:history.back(1);"><< Back</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php 
$id = $this->uri->segment(3);
if(!$id){ ?>
<a href="<?php echo site_url('user/editProfile');?>">Edit</a>
<?php }?>
<br />
<br />
{userloop}
<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td>{uname}</td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td>:</td>
		<td>{name}</td>
	</tr>
	<tr>
		<td>Role</td>
		<td>:</td>
		<td>{roles}</td>
	</tr>
	<tr>
		<td>Last Login</td>
		<td>:</td>
		<td>{last_login}</td>
	</tr>
    <tr>
		<td>Photo</td>
		<td>:</td>
		<td><img src="<?php echo $this->load->config->item('base_url') . $this->load->config->item('inc_folder');?>images/login/{photo}" /></td>
	</tr>
</table>
{/userloop}
