<?php echo form_open(base_url('CloudUpload/file_upload_to_s3'), array('id' => 'file_upload_to_s3', 'data-toggle' => 'validator', 'role' => 'form', "enctype" => "multipart/form-data",)); ?>

<input type="file" name="image" required="">

<br>
<br>

<input type="submit" value="Upload">

<?php echo form_close(); ?>