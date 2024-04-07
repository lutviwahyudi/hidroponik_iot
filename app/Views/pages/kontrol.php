<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card-block table-border-style">
                        <div class="container">
                            <div class="row">
                                <div class="card" style="width: 18rem; margin: 5px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Pompa PH Down</h5>
                                        <p class="card-text">Untuk mengontrol pompa ph down pada sistem</p>
                                        <div class="form-check form-switch" style="font-size: 40px;">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="phdown(this.checked)">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status1">OFF</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem; margin: 5px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Pompa PH Up</h5>
                                        <p class="card-text">Untuk mengontrol pompa ph up pada sistem</p>
                                        <div class="form-check form-switch" style="font-size: 40px;">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="phup(this.checked)">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status2">OFF</span></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="card" style="width: 18rem; margin: 5px;">
                                    <div class="card-body">
                                        <h5 class="card-title">Pompa PH Nutrisi</h5>
                                        <p class="card-text">Untuk mengontrol pompa ph nutrisi pada sistem</p>
                                        <div class="form-check form-switch" style="font-size: 40px;">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" onchange="nutrisi(this.checked)">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"> <span id="status3">OFF</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>