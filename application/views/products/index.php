<html>
	<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  

		<style>
			 @import url(http://fonts.googleapis.com/css?family=Calibri:400,300,700);

			body {
				background-color: #673AB7;
				font-family: 'Calibri', sans-serif !important
			}

			.container {
				margin-top: 100px
			}

			.card {
				position: relative;
				display: -webkit-box;
				display: -ms-flexbox;
				display: flex;
				-webkit-box-orient: vertical;
				-webkit-box-direction: normal;
				-ms-flex-direction: column;
				flex-direction: column;
				min-width: 0;
				word-wrap: break-word;
				background-color: #fff;
				background-clip: border-box;
				border: 0px solid transparent;
				border-radius: 0px
			}
			}

			.card-body {
				-webkit-box-flex: 1;
				-ms-flex: 1 1 auto;
				flex: 1 1 auto;
				padding: 1.25rem
			}

			.card .card-title {
				position: relative;
				font-weight: 600;
				margin-bottom: 10px
			}

			.table {
				width: 100%;
				max-width: 100%;
				margin-bottom: 1rem;
				background-color: transparent
			}

			* {
				outline: none
			}

			.table th,
			.table thead th {
				font-weight: 500
			}

			.table thead th {
				vertical-align: bottom;
				border-bottom: 2px solid #dee2e6
			}

			.table th {
				padding: 1rem;
				vertical-align: top;
				border-top: 1px solid #dee2e6
			}

			.table th,
			.table thead th {
				font-weight: 500
			}

			th {
				text-align: inherit
			}
		</style>
	</head>
	<body>
	
		<div class="container">
			<div class="row">

			<div class="col-12 mb-3 text-right">
				<a href="<?=base_url('Product/create')?>" class="btn btn-primary">Create Product</a>
			</div>
		
				<div class="col-12">
					<div class="card">

<!--permisionn id start-->

					<form id="submit_id">
					<select class="form-control" name ="pid" >
            <?php 

            foreach($products as $row)
            { 
              echo '<option  value="'.$row->permision_id.'">'.$row->customer_name.'</option>';
            }
            ?>
			<input data-toggle = "modal" data-target= "#myModal"  class="permision_id" type="submit" value="Submit" name="submit">  
            </select>
  </form>

<!--permision id send -->

						<div class="card-body text-center">
							<h5 class="card-title m-b-0"><?=$title?></h5>
						
						</div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">customer Id</th>
									<th scope="col">customer Name</th>
									<th scope="col">Description</th>
									<th scope="col">Title</th>								

								</tr>
							</thead>
							<tbody>

								<?php 
								if(count($products)>0){
									foreach($products as $product){ ?>
									<tr>
									<td scope="row">
									<button type="button" class="mybutton"  id="mybutton"><?=$product->permision_id?></button></td>
										<td><?=$product->customer_name?></td>
										<td><?=$product->description?></td>
										<td><?=$product->title?></td>

										<!--  -->
									</tr>
									<?php 
									}
								}else{ ?>
								<tr><td>No Products</td></tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->

        <div class="modal-header">
          <h4 class="modal-title">Customer Data</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>


<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script>
      $(function () {

        $('#submit_id').on('submit', function (e) {

          e.preventDefault();

          $.ajax({
            type: 'post',
            url: 'product/getDataByID',
            data: $('form').serialize(),
			success: function(response){ 
	 // Add response in Modal body
	 $('.modal-body').html(response);

	 // Display Modal
	 $('#empModal').modal('show'); 
   }
          });

        });

      });
    </script>


	</body>
	<!-- <script>

$(document).ready(function(){

$('.permision_id').click(function(){
  
  var username = this.id;
	// var username = $("'.$row->customer_name.'").val();
	// console.log(username);

  // AJAX request
  $.ajax({
   url: 'product/getDataByID',
   type: 'post',
   data: {username: username},
   success: function(response){ 
	 // Add response in Modal body
	 $('.modal-body').html(response);

	 // Display Modal
	 $('#empModal').modal('show'); 
   }
 });
});
});

</script> -->
</html>
