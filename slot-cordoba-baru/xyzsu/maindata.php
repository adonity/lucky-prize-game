<div class="card mb-3">
    <div class="card-body">
        <div class="card-body">
            <form id="signupForm" class="col-md-10 mx-auto" method="POST" action="./vd/adm.php">
                <div class="form-group">
                    <div class="text-center">
                        <h4><b>Panduan hadiah</b></h4>
                        <br>

                        <img src="../img/panduan.jpg" width="570px"> <br><br>
                        <p>List hadiah : <b> 500  , 1.000 , 2.000 , 3.000 , 5.000 , 7.000 , 8.000 , 10.000 , 20.000 , 50.000 , 100.000 , 250.000 , 500.000 </b></p>
                        <p><b>Jumlah hadiah</b> yang akan diinput adalah <b> hasil dari penjumlahan 3 nominal diatas</b></p>
                        <P>Contoh : 500 + 100.000 + 7.000 = <b> 107.500</b></P>
                        <P>Berarti jumlah hadiah yang akan diinput adalah <b> 107.500</b></P>
                        <br>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="card mb-3">
    <div class="card-body">
        <div class="card-body">
            <?php
                if (isset($_GET['pesan'])) {
                    if ($_GET['pesan'] == "gagal") {
                        echo "
                            <div id='alert' class='alert alert-danger'>
                                <strong>Gagal !</strong> Username sudah ada.
                            </div>
                        ";
                    } else if ($_GET['pesan'] == "berhasil") {
                        echo "
                            <div id='alert' class='alert alert-success'>
                                <strong>Berhasil !</strong> User berhasil dibuat.
                            </div>
                        ";
                    }
                }
            ?>
            <script>
                setTimeout(function() {
                    var alert = document.getElementById("alert");
                    alert.style.transition = "opacity 0.5s linear 0s";
                    alert.style.opacity = "0";
                    setTimeout(function() {
                    alert.style.display = "none";
                    }, 2000);
                }, 3000);
            </script>
            <form id="signupForm" class="col-md-10 mx-auto" method="POST" action="./vd/adm.php">
                <div class="form-group">
                    <div>
                        <b>Username</b>
                        <input type="text" class="form-control" id="firstname" name="unme" placeholder="Masukkan username" required/>
                        <br>
                        <b for="unme">Jumlah Hadiah <span class="text-danger"><b>*Ikuti panduan di atas</b></span></b>
                        <input type="text" class="form-control" id="rupiah" name="depo" placeholder="Masukkan jumlah hadiah per 1 voucher" required/>

                        <input type="text" class="form-control" name="vid" value="1" hidden/>
                    </div>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit" value="Sign up">CREATE MEMBER
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="card mb-3">
    <div class="card-body">
        <table style="width: 100%" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Username</th>
                    <th>Voucher</th>
                    <th>Create</th>
                    <th>Game start</th>
                    <th>Total win</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr>
                    <?php
                    include '../vd/validation.php';
                    $no = 1;
                    $query = mysqli_query($conn, "SELECT * FROM uvc ORDER BY usid DESC");

                    if (mysqli_num_rows($query)) {
                        while ($row = mysqli_fetch_array($query)) :
                    ?>
                            <td><?= $no++; ?></td>
                            <td><?= $row['unme']; ?></td>
                            <td>
                                <?= $row['vpwd']; ?>
                                <button type="button" data-clipboard-text="<?= $row['vpwd']; ?>" class="btn btn-primary clipboard-trigger float-right">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </td>
                            <td><?= $row['ucreate']; ?></td>
                            <td><?= $row['ply']; ?></td>
                            <td>
                                <?php
                                if ($row['prize'] == 0) {
                                    echo "-";
                                } else {
                                    echo rupiah($row['prize']);
                                }

                                ?>
                            </td>
                             <td>
                                <a href="./vd/del.php?&usid=<?= $row['usid']; ?>" onclick="return confirm('Yakin ingin menghapus ?');">
                                    <button type="button" class="btn btn-danger" title="Delete user">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </a>
                            </td>
                </tr>
                    <?php
                        endwhile;
                    } ?>
            </tbody>
        </table>
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
