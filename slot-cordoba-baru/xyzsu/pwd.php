<div class="app-inner-layout__content">
    <div class="tab-content">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-body">
                        <form id="signupForm" class="col-md-10 mx-auto" method="POST" action="./vd/adm.php">
                            <div class="form-group">
                                <div>
                                    <label for="unme">New Password</label>
                                    <input type="password" class="form-control" id="myInput" name="pwd" placeholder="Insert new password" />
                                    <input type="checkbox" onclick="myFunction()"> Show Password
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit1" value="Sign up">Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>