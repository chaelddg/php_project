<div class="container">

    <div class="row">
        <form class="form-horizontal" action="register-process.php" method="POST" role="form" >
            <div class="form-group">
                <label for="username" class="control-label col-xs-2">Username</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="password" class="control-label col-xs-2">Password</label>
                <div class="col-xs-8">
                    <input type="password" class="form-control" name="password" id="password" placeholder="********" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="control-label col-xs-2">First Name</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name" required="required">
                </div>
            </div>
            <div class="form-group">
                <label for="lastname" class="control-label col-xs-2">Last Name</label>
                <div class="col-xs-8">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name" required="required">
                </div>
            </div>
            <input type="hidden" name="role" value="2">
            <div class="form-group">
                <div class="col-xs-offset-2 col-xs-10">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>
            </div>
        </form>
    </div>

</div>
