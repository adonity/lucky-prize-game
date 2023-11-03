<div class="app-inner-layout__content">
    <div class="tab-content">
        <div class="container-fluid">
            <div class="card mb-3">
                <div class="card-body">
                    <div class="card-body">
                        <form id="signupForm" class="col-md-10 mx-auto" method="POST" action="./vd/limit.php">
                            <div class="form-group">
                                <label for="unme">Company Limit</label>
                                <div>
                                    <input type="text" class="form-control" id="rupiah" name="limit" placeholder="Insert company limit" />
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="submit" value="Sign up">ADD LIMIT
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var rupiah = document.getElementById('rupiah');
    rupiah.addEventListener('keyup', function(e) {
        rupiah.value = formatRupiah(this.value, '');
    });

    function formatRupiah(angka, prefix) {
        var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa = split[0].length % 3,
            rupiah = split[0].substr(0, sisa),
            ribuan = split[0].substr(sisa).match(/\d{3}/gi);

        if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
        }

        rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
        return prefix == undefined ? rupiah : (rupiah ? '' + rupiah : '');
    }
</script>