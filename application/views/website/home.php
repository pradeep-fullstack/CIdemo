<section>
<h1>Welcome in Student Information</h1>

<form action="<?php echo site_url(); ?>/First/stuadd" method="post">

<br>
<input type="text" name="txtname" placeholder="enter name" />
<br>
<br>
<input type="text" name="txtemail" placeholder="enter emial" />
<br>
<br>
<input type="text" name="txtpass" placeholder="enter pass" />
<br>
<br>
<input type="number" name="txtmob" placeholder="enter mobile" />
<br>
<br>
<input type="submit" name="btnsubmit" value="Insert" />
</form>

<a href="<?php echo site_url(); ?>/First/getCookie">getcookie</a>



<?php echo form_open_multipart('First/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>
<?php
echo @$res;
?>
</section>
