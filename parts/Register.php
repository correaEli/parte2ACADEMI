<?php

//$uname = (isset($_POST['username'])) ? $_POST['username'] : '';
$uname = $_POST['username'] ?? '';

?>
<div class="ContenidoLogReg">
    <div>
      <div class="row">
        <div class="col-sm-3">
          &nbsp;
        </div>
        <div class="col-sm-6">
            <form method="post" action="index.php?a=doRegister">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" aria-describedby="emailHelp" placeholder="Enter username" value="<?php echo $uname; ?>">
              </div>
              <div class="form-group">
                <label for="FirstName">First Name</label>
                <input type="text" class="form-control" name="FirstName" placeholder="Enter First Name">
              </div>
              <div class="form-group">
                <label for="LastName">Last Name</label>
                <input type="text" class="form-control" name="LastName" placeholder="Enter Last Name">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="">
              </div>
              <div class="form-group">
                <label for="password1">Password</label>
                <input type="password" class="form-control" name="password1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="password2">Repeat Password</label>
                <input type="password" class="form-control" name="password2" placeholder="Repeat Password">
              </div>
              
              <button type="submit" class="botones_RegLog">Register</button>
            </form>
        </div>
        <div class="col-sm-3">
          &nbsp;
        </div>
      </div>
    </div>
</div>