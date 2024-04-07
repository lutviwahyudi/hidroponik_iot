<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">
                        <div class="card-block table-border-style">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nilai pH</th>
                                            <th scope="col">Nilai TDS</th>
                                            <th scope="col">Pompa_PH_Up</th>
                                            <th scope="col">Pompa_PH_Down</th>
                                            <th scope="col">Pompa Nutrisi</th>
                                            <th scope="col">Created</th>
                                            <th scope="col">Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $nomor = 1 ?>
                                        <?php foreach ($sensor as $row) : ?>
                                            <tr>
                                                <th scope="row"><?= $nomor++; ?></th>
                                                <td><?= $row['ph']; ?></td>
                                                <td><?= $row['tds']; ?></td>
                                                <td><?= $row['up']; ?></td>
                                                <td><?= $row['down']; ?></td>
                                                <td><?= $row['pompanutrisi']; ?></td>
                                                <td><?= $row['created_at']; ?></td>
                                                <td><?= $row['updated_at']; ?></td>
                                            <?php endforeach; ?>
                                            </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?= $this->endSection(); ?>                