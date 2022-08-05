<?php
	session_start();
	$con = mysqli_connect("localhost","root","","1316441");
	$reference = $_SESSION['reference'];

	$query = mysqli_query($con,"select * from user_donation where reference_key = '$reference'");

	while($row = mysqli_fetch_array($query)){
		$first_name = $row['first_name'];
		$last_name = $row['last_name'];
		$email = $row['email'];
		$phone = $row['phone'];
		$address = $row['address'];
   
    $description = $row['description'];
		$image_name = $row['image'];
		$note = $row['note'];
		$date = date("d-m-Y", strtotime($row['date']));
    $status = $row['status'];
	}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>zakati</title>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
  var my_posts = $("[rel=tooltip]");
  for(i=0;i<my_posts.length;i++){
      the_post = $(my_posts[i]);
      if(the_post.hasClass('invert')){
          the_post.tooltip({ placement: 'left'});
          the_post.css("cursor","pointer");
      }else{
          the_post.tooltip({ placement: 'rigt'});
          the_post.css("cursor","pointer");
      }
  }
});
</script>
  </head>


  <body>
 
      <header>
    
   
  </nav>

</header>

      

<div class="container">
  <div class="row">
    <div class="col-sm-10" style="background-color:lightgrey;">

      <ul class="timeline">
        <li>
          <div class="timeline-badge primary"><a><i class="glyphicon glyphicon-record" rel="tooltip" title="11 hours ago" id=""></i></a></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <img class="img img-responsive" src="img/<?php echo $image_name;?>" />

            </div>
            <div class="timeline-body">
				<table class="table">
					<tr>
						<th>First Name</th>
						<td><?php echo $first_name;?></td>
					</tr>
					<tr>
						<th>Last Name</th>
						<td><?php echo $last_name;?></td>
					</tr>
					<tr>
						<th>Email</th>
						<td><?php echo $email;?></td>
					</tr>
					<tr>
						<th>Phone</th>
						<td><?php echo $phone;?></td>
					</tr>
					<tr>
						<th>Address</th>
						<td><?php echo $address;?></td>
					</tr>
          <tr>
						<th>description</th>
						<td><?php echo $description;?></td>
					</tr>
					<tr>
						<th>Donation Pickup Time</th>
						<td><?php echo $note;?></td>
					</tr>
					<tr>
						<th>Donation Submission Date</th>
						<td><?php echo $date;?></td>
					</tr>
          <tr>
						<th>status for your donation</th>
						<td><?php echo $status;?></td>
					</tr>
				</table>
            </div>

            <div class="timeline-footer">
                <p class="pull-left">Agent will arrive on <?php echo $note;?></p>
                <a class="pull-right">If you want to cancel your order please contact us at students@gmail.com</a>
            </div>
          </div>
        </li>
    </ul>

      </div>
    </div>
  </div>



  </body>
</html>
