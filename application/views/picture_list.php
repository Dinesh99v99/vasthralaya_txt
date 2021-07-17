<style>

/* a { font-size:20px; } */
</style>
<h2>List of Pictures</h2>
  <?php if(count($picture_list)){?>
    <a style="float:right" href="<?=base_url().'upload/form';?>" class="btn btn-primary">Upload More</a>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Title</th>
            <th>Description</th>
            <th>image</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($picture_list as $pic): ?>
          <tr>
            <td><?=$pic->pic_title;?></td>
            <td><?=$pic->pic_desc;?></td>
            <td><a href="<?=base_url().'assets/image/'.$pic->pic_file;?>" target="_blank"><img src="<?=base_url().'assets/image/'.$pic->pic_file;?>" width="100"></a></td>
            <td><a href="<?php echo site_url() . "/Upload/delete_image/". $pic->pic_id;?>" onClick="return confirm('Are you sure want to delete')" class="fa fa-trash">delete</a>
            &nbsp;||&nbsp;<a href="<?php echo site_url() . "/Upload/update_image/". $pic->pic_id;?>" onClick="return confirm('Are you sure want to Update')" class="fa fa-trash">Update</a>
          </td>
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
      <br />
      
  <?php } else { ?>
    <h4>No Pictures have been uploaded!. Click this button to <a href="<?=base_url().'upload/form';?>" class="btn btn-primary">upload</a></h4>            
  <?php } ?>