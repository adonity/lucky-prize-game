<div class="card mb-3">
    <div class="card-body">
        <table style="width: 100%" id="example" class="table table-hover table-striped table-bordered">
            <thead>
                <tr class="text-center">
                    <th>No</th>
                    <th>Username</th>
                    <th>Type</th>
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
                            <?php
                            if ($row['vid'] == "1") {
                                $voucher = 'Silver';
                            } else if ($row['vid'] == "2") {
                                $voucher = 'Gold';
                            } else if ($row['vid'] == "3") {
                                $voucher = 'Platinum';
                            } else if ($row['vid'] == "4") {
                                $voucher = 'Custom User';
                            }
                            ?>
                            <td><?= $voucher ?></td>
                            <td>
                                <?= $row['vpwd']; ?>
                                <button type="button" data-clipboard-text="<?= $row['vpwd']; ?>" class="btn btn-primary clipboard-trigger float-right">
                                    <i class="fa fa-copy"></i>
                                </button>
                            </td>
                            <td><?= $row['ucreate']; ?></td>
                            <td><?= $row['ply']; ?></td>
                            <td><?php echo rupiah($row['prize']); ?></td>
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
