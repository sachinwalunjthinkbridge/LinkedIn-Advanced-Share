<DOCTYPE html>
<html lang="en">
<head>
  <title>Linkedin Share Link With Image, Choose Picture for Hyperlink Thumbnail, JSON Post Developer, Web Tool, Without Meta Property og: tag Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- add jQuery -->
  <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <!-- add bootstrap -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <!-- user typed js for form -->
  <script src="postscript.js"></script>
  
   <!-- initialize LinkedIn JS SDK -->
  <script type="text/javascript" src="//platform.linkedin.com/in.js">
  api_key: //YOUR API KEY HERE
  authorize: true
  //onLoad: onLinkedInLoad
  </script>
</head>
<body>
	
<div class="wrap"> 
<h1 align="center">Create An Advanced LinkedIn Post</h1>
<p align="center">Configure a share post for Linkedin. First, authorize through LinkedIn by logging in.</br> Then, fill out all of the fields below and click submit to share the content.</br></br><script type="in/Login"></script></p> <br><br>

<div class="col-md-4"><!--quick spacer :)--></div>
	<div class="col-md-5">
		<form name="post_content" action="" method="post">
			<label for="comment">Comment: </label>
			<input type="text" class="form-control" name="comment" placeholder="Comment" required></input><br>
			<label for="title">Title: </label>
			<input type="text" class="form-control" name="title" placeholder="Title" required></input><br>
			<label for="description">Description: </label>
			<input type="text" class="form-control" name="description" placeholder="Description" required></input><br>
			<label for="image-content">Link to Content: </label>
			<input type="text" class="form-control" name="image-content" placeholder="http://example.com/content" required></input><br>
			<label for="image-location">Image Location: </label>
			<input type="text" class="form-control" name="image-url" placeholder="http://example.com/images/example.jpg" required></input><br><br>
			<input type="button" id="submit_button" value="Submit" class="btn btn-default"></input>
			
		</form>
	</div>
</div>
</div>

<div id="VINoutput"></div>
</body>
</html>

