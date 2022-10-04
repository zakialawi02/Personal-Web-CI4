<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>

    <link rel="stylesheet" href="/css/styleCrud.css">
    <link rel="stylesheet" href="/assets/css/main/app.css">
    <link rel="stylesheet" href="/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="/assets/extensions/simple-datatables/style.css" />
    <link rel="stylesheet" href="/assets/css/pages/simple-datatables.css" />

    <script src="https://kit.fontawesome.com/80c2a21e0c.js" crossorigin="anonymous"></script>
    <!-- custom css file link  -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

</head>

<body>
    <div id="app">
        <!-- SIDEBAR -->
        <?= $this->include('_Layout/templateAdmin/sidebar'); ?>

        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <?= $this->renderSection('content'); ?>

            <!-- Footer -->
            <?= $this->include('_Layout/templateAdmin/footer'); ?>

        </div>
    </div>
    <script src="/assets/js/bootstrap.js"></script>
    <script src="/assets/js/app.js"></script>

    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="/assets/js/pages/simple-datatables.js"></script>

    <!-- datatable jquery -->
    <!-- gak dipakek -->
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>

    <script>
        $("#kehadiran").change(function() {
            if ($(this).val() == "Tidak Hadir") {
                $('#THadir').show();
                $('#keterangan').attr('required', '');
                $('#keterangan').attr('data-error', 'This field is required.');

            } else {
                $('#THadir').hide();
                $('#keterangan').removeAttr('required');
                $('#keterangan').removeAttr('data-error');

            }
        });
        $("#kehadiran").trigger("change");
    </script>

</body>

</html>