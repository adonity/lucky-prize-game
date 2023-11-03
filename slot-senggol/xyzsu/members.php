<div class="app-inner-layout__content">
    <div class="tab-content">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-body">
                        <form id="signupForm" class="col-md-10 mx-auto" method="POST" action="./vd/adm.php">
                            <div class="form-group">
                                <label for="unme">Username</label>
                                <div>
                                    <input type="text" class="form-control" id="firstname" name="unme" placeholder="Username" />
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Pilih Jenis Voucher</label>
                                <select name="vid" id="exampleSelect" class="form-control">
                                    <option value="1">Silver</option>
                                    <option value="2">Gold</option>
                                    <option value="3">Platinum</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit" value="Sign up">CREATE MEMBER
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>