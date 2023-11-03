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
                                    <input type="text" class="form-control" id="firstname" name="unme" placeholder="Masukkan username" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="unme">Jumlah</label>
                                <div>
                                    <input type="number" class="form-control" id="win" name="uget" placeholder="Masukkan jumlah kemenangan" />
                                </div>
                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">Pilih Jenis Voucher</label>
                                <select name="vid" id="exampleSelect" class="form-control">
                                    <option value="4">Custom User</option>
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