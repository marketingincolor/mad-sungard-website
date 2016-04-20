<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
<html>
<head>
<title>Welcome to CodeIgniter</title>
<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
</head>
<body>
<h1>Welcome to the upload CROP form!</h1>

<p>If you would like to edit this page you'll find it located at: system/application/views/upload_crop.php</p>

<p>The corresponding controller for this page is found at: system/application/controllers/upload.php</p>

<p>Form elements inserted below for the actual signup, based off code shown above.</p>
<br>
<img src="<?php echo base_url().'uploads/'.$clientpath.'/'.$upload_data['file_name']; ?>">
<br>
<?php echo form_open_multipart('upload/crop/'.$clientpath.'');?>
<br>
width:<?php echo $upload_data['image_width']; ?>
<br>
height:<?php echo $upload_data['image_height']; ?>
<br>

<!-- <input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" /> -->

</form>

</body>
</html>