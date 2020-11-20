<?php 
    // initialize errors variable
	$errors = "";

	// connect to database
	$db = mysqli_connect("localhost", "id13886614_jay", "jacklopP09#2", "id13886614_moltres");

	// insert a quote if submit button is clicked
	if (isset($_POST['submit'])) {
		if (empty($_POST['task'])) {
			$errors = "You must fill in the task";
		}else{
			$task = $_POST['task'];
			$sql = "INSERT INTO stars (rateIndex) VALUES ('$task')";
			mysqli_query($db, $sql);
			header('location: index.php');
		}
	}	

if (isset($_GET['del_task'])) {
	$id = $_GET['del_task'];

	mysqli_query($db, "DELETE FROM stars WHERE id=".$id);
	header('location: index.php');
}

?>



<html>
    <head>
        <title>
            MOLTRES 
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <a class="navbar-brand" href="index.php">
            <img src="images/logo.png" width="50 rem" height="50 rem" alt="" loading="lazy">
          </a>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="login.html">Login</a>
                </li>
                
              </ul>
              <ul class="nav ">
                <li class="nav-item">
                  <a class="nav-link active" href="register.html">Register</a>
                </li>
                
              </ul>
              
            </div>
          </nav>
          <blockquote class="blockquote text-center">
            <p class="mb-0"></p>
            <h1>MOLTRES</h1>
            <footer class="blockquote-footer"> <cite title="Source Title"></cite> helps you to achieve your goals!</footer>
        </blockquote>
        

        <div class="card mx-auto bg-warning " style="width: 50rem;">
            <div class="card-header">
              Special Offer!
            </div>
            <div class="card-body">
              <h5 class="card-title">Special offer</h5>
              <div class="card-deck mx-auto">
                <div class="row row-cols-3 row-cols-md-2">
                    <div class="col mb-4">
                      <div class="card" style="width: 20rem;">
                         <div class="card-body" >
                         
        
                          
                            <form method="post" action="index.php" >
                                <div class="form-row align-items-center">
                                  <div class="col-auto">
                                    <label class="sr-only" for="inlineFormInput">Taskkkk</label>
                                    <input type="text" class="form-control mb-2" name="task" id="inlineFormInput" placeholder="enter your task">
                                  </div>
                                  
                                  
                                  <div class="col-auto">
                                    <button type="submit" name="submit" class="btn btn-primary mb-2">Add Task</button>
                                  </div>
                                </div>
                                <?php if (isset($errors)) { ?>
                                    <p><?php echo $errors; ?></p>
                                <?php } ?>
                              </form>


                              <table class="table">
                                <thead class="thead-dark">
                                  <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Task</th>
                                   
                                    <th scope="col">Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    // select all tasks if page is visited or refreshed
                                    $tasks = mysqli_query($db, "SELECT * FROM stars");
                            
                                    $i = 1; while ($row = mysqli_fetch_array($tasks)) { ?>
                                        <tr>
                                            <td> <?php echo $i; ?> </td>
                                            <td class="task"> <?php echo $row['rateIndex']; ?> </td>
                                            <td class="delete"> 
                                                <a href="index.php?del_task=<?php echo $row['id'] ?>">x</a> 
                                            </td>
                                        </tr>
                                    <?php $i++; } ?>
                                </tbody>
                              </table>




                        </div>
        
                      </div>
                    </div>
                 
                    </div>
                    </div>
               </div>
          </div>









    </body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</html>