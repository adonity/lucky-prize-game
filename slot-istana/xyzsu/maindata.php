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
                        <input type="text" class="form-control" id="firstname" name="unme" placeholder="Username" />
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
