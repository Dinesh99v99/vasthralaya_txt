<h3>Upload a picture!</h3>
<hr />.
<?php
  $i=1;
  foreach($data as $row)
// print_r($row->pic_file);die;
{
  ?>
  <form action="<?php echo base_url()?>/Upload/update_upload" method="post" >
  <div class="form-group">
    <label for="pic_title">Picture Title*:</label>
    <input type="text" class="form-control" name="pic_title" value="<?php echo $row->pic_title; ?>" id="pic_title">
  </div>
  <div class="form-group">
    <label for="pic_desc">Picture desc*:</label>
    <input type="text" class="form-control" name="pic_desc" value="<?php echo $row->pic_desc; ?>" id="pic_desc">
  </div>
  <div class="form-group">
    <label for="pic_file">Select Image*:</label>
    <input type="file" name="pic_file" class="form-control" value="<?php echo $row->pic_file; ?>"  id="pic_file">
  </div>
  <a href="<?=base_url();?>" class="btn btn-warning">Back</a>
  <button type="submit" name="submit" class="btn btn-success">Submit</button>
</form>
<?php } ?>