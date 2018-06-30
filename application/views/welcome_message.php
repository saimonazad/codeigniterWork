<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
	<script src="<?php echo base_url('assets/js/jquery-3.1.0.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
</head>
<body>
<!-------------------------------navbar----------------------------- -->


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-------------------------------End  navbar----------------------------- -->


<div class="container">
<h3>View All Posts</h3>
<?php echo anchor('welcome', 'Add Post', ['class'=>'btn btn-primary']);?>
<table class="table table-striped table-hover ">
  <thead>
    <tr>
      
      <th>Title</th>
      <th>Description</th>
	  <th>Date_created</th>
	  <th>Action</th>
    </tr>
  </thead>
  <tbody>
  <?php if(count($posts)):?>
	<?php foreach($posts as $post):?>
    <tr>
      <td><?php echo $post->title?></td>
      <td><?php echo $post->description?></td>
      <td><?php echo $post->date_created?></td>
      
	  <td>
	  <?php echo anchor('welcome/view', 'View', ['class'=>'label label-primary']);?>
	  <?php echo anchor('welcome/update', 'Update', ['class'=>'label label-success']);?>
	  <?php echo anchor('welcome/delete', 'Delete', ['class'=>'label label-primary']);?>
	  </td>
    </tr>
<?php endforeach;?>
<?php else: ?>
<tr>
<td>no data found</td>
</tr>
<?php endif;?>
  </tbody>
</table> 
</div>


<!-----------------------------end table---------------------------->


</body>
</html>