<?= $this->include('layout/header'); ?>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
        <!-- Navbar start -->
        <?= $this->include('layout/navbar'); ?>
        <!-- Navbar end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                <!-- sidebar start -->
                <?= $this->include('layout/sidebar'); ?>
                <!-- sidebar end -->
                <!-- content start -->
                <?= $this->renderSection('content'); ?>
                <!-- content end -->
                </div>
            </div>
        </div>
    </div>
    </div>
   <!-- javascript start-->
   <?= $this->include('layout/javascript'); ?>
   <!-- javascript end -->
</body>

</html>