<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Please Sign In</h3>
                </div>
                <div class="panel-body">
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <button name='submit' type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            <p style="padding-top:10px; color:red;font-weight:600"><?=@$data['data']?></p>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>