<!DOCTYPE html>
<html lang="en">

<head>
    <title>Monitoring Hidroponik NFT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="CodedThemes">
    <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="CodedThemes">
    <!-- Favicon icon -->
    <link rel="icon" href="<?= base_url('lib') ?>/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib/assets/css/bootstrap/css/bootstrap.min.css') ?>">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib/assets/icon/themify-icons/themify-icons.css') ?>">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib/assets/icon/icofont/css/icofont.css') ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib/assets/css/style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('lib/assets/css/jquery.mCustomScrollbar.css') ?>">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript">
        // js untuk mengontrol status kontrol pompa
        function phdown(value) {

            if (value == true) {
                value = "ON"
            } else {
                value = "OFF"
            }
            document.getElementById('status1').innerHTML = value

            var xmlHttp = new XMLHttpRequest()

            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    // ambil respon web
                    document.getElementById('status1').innerHTML = xmlHttp.responseText
                }
            }
            // merubah nilai didatabase
            xmlHttp.open("GET", "<?= base_url('pages/relayDown') ?>?stat=" + value, true)
            xmlHttp.send()
        }

        function phup(value) {

            if (value == true) {
                value = "ON"
            } else {
                value = "OFF"
            }
            document.getElementById('status2').innerHTML = value

            var xmlHttp = new XMLHttpRequest()
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    // ambil respon website
                    document.getElementById('status2').innerHTML = xmlHttp.responseText
                }
            }
            // merubah nilai didatabase
            xmlHttp.open("GET", "<?= base_url('pages/relayUp') ?>?stat=" + value, true)
            xmlHttp.send()
        }

        function nutrisi(value) {

            if (value == true) {
                value = "ON"
            } else {
                value = "OFF"
            }
            document.getElementById('status3').innerHTML = value

            var xmlHttp = new XMLHttpRequest()
            xmlHttp.onreadystatechange = function() {
                if (xmlHttp.readyState == 4 && xmlHttp.status == 200) {
                    // ambil respon website
                    document.getElementById('status3').innerHTML = xmlHttp.responseText
                }
            }
            // merubah nilai didatabase
            xmlHttp.open("GET", "<?= base_url('pages/relayNutrisi') ?>?stat=" + value, true)
            xmlHttp.send()
        }

        // js untuk mengambil nilai parameter pada url
        $(document).ready(function() {
            setInterval(function() {
                $("#ph").load("<?= site_url('pages/phSensor'); ?>")
            }, 2000);
        })

        $(document).ready(function() {
            setInterval(function() {
                $("#tds").load("<?= site_url('pages/tds'); ?>")
            }, 2000);
        })

        //pompa ph
        $(document).ready(function() {
            setInterval(function() {
                $("#up").load("<?= site_url('pages/up'); ?>")
            }, 2000);
        })
        $(document).ready(function() {
            setInterval(function() {
                $("#down").load("<?= site_url('pages/down'); ?>")
            }, 2000);
        })

        //pompa nutrisi
        $(document).ready(function() {
            setInterval(function() {
                $("#nutrisi").load("<?= site_url('pages/nutrisi'); ?>")
            }, 2000);
        })
    </script>
    <style>
        .img-logo {
            width: 240px;
            height: 90px;
        }
    </style>
</head>