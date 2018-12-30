<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="css/all.css" />
	<link rel="stylesheet" href="css/bootstrap_4.2.1.css" />

	<title>Bookmarker</title>
</head>
<body>
<div class="container">
		<div class="row my-3">
      <div class="col-md-12">
        <div class="card shadow-sm">
          <div class="card-header alert-secondary text-center" role="alert">
            <span><b>Dev Links</b></span>
          </div>
          <div class="card-body">
            <blockquote class="mb-0">
              <p class="mb-2">Collect your external resourses <b>(links)</b> here!</p>
              <hr>
              <form method="POST" action="addnew.php">
								<div class="row">
	                <div class="col-md-4">
	                  <div class="input-group input-group-sm mb-3">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fas fa-tag fa-fw fa-flip-horizontal text-primary"></i></span>
	                    </div>
	                    <input type="text" class="form-control" name="website_name" placeholder="Website name">
	                  </div>
	                </div>
	                <div class="col-md-8">
	                  <div class="input-group input-group-sm mb-3">
	                    <div class="input-group-prepend">
	                      <span class="input-group-text"><i class="fas fa-external-link-alt fa-fw text-primary"></i></span>
	                    </div>
	                    <input type="text" class="form-control" name="website_link" placeholder="Website address">
	                    <div class="input-group-append">
	                      <button class="btn btn-primary" type="submit" style="z-index: 0;">Add</button>
	                    </div>
	                  </div>
	                </div>
	              </div>
              </form>
            </blockquote>
          </div>
        </div>
      </div>
    </div>

		<!-- Link list -->
		<?php include('conn.php'); ?>
			<?php $query=mysqli_query($conn,"select * from `bookmark`"); ?>
				<?php while($row=mysqli_fetch_array($query)){ ?>
					<div class="input-group input-group-sm shadow-sm my-1">
						<div class="input-group-prepend">
							<span class="input-group-text text-truncate" style="width:10em;display: inline-block;"><b><?php echo $row['website_name']; ?></b></span>
						</div>
						<a href="<?php echo $row['website_link']; ?>" class="form-control text-truncate" target="_blank" style="text-decoration-line: none;border-right: 0;"><?php echo $row['website_link']; ?></a>
						<div class="input-group-append">
							<button class="btn text-danger" type="submit" style="z-index: 0;border-bottom: 1px solid #ced4da;border-top: 1px solid #ced4da;" href="#del<?php echo $row['website_id']; ?>" data-toggle="modal"><i class="far fa-trash-alt"></i></button>
							<button class="btn btn-primary rounded-right" type="submit" style="z-index: 0;" href="#edit<?php echo $row['website_id']; ?>" data-toggle="modal"><i class="far fa-edit"></i></button>
							<?php include('button.php'); ?>
						</div>
					</div>
		<?php } ?>


</div>
	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
