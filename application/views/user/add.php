<form method="post" action="<?php echo site_url('user/tambahUser');?>" onsubmit="javascript:return validate(this);" enctype="multipart/form-data">
<h3><u>TAMBAH USER</u></h3>
<input type="submit" name="btnSave" value="Save" class="btn" />
|
<input type="reset" name="btnClear" value="Clear" class="btn" />
|
<input type="button" name="btnClose" value="Back" class="btn" onclick="javascript:history.back(1);" />
<br />
<br />
<table>
	<tr>
		<td>Username</td>
		<td>:</td>
		<td><input type="text" name="username" /></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" /></td>
	</tr>
	<tr>
		<td>Full Name</td>
		<td>:</td>
		<td><input type="text" name="fname" /></td>
	</tr>
	<tr>
		<td>Role</td>
		<td>:</td>
		<td>
		<select name="role">
			{datacombo}
			<option value="{role_id}">{role_name}</option>
			{/datacombo}
		</select></td>
	</tr>
    <tr>
        <td>Upload</td>
        <td>:</td>
        <td><input type="file" name="photo" value=""  /></td>
    </tr>
</table>
</form>