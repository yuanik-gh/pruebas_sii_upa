<!DOCTYPE html>
<html>
    <head>
        <title>Pruebas SIIUPA</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="<?=base_url()?>css/bootstrap-formhelpers.css">
        <script type="text/javascript" src="<?=base_url()?>js/jquery-2.1.3.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/bootstrap.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?=base_url()?>js/bootstrap-formhelpers.js"></script>
        <!-- DatePicker -->
        <script>
            $(function(){
                $('.datepicker_fecha_inicio').datepicker();
            });
            $(function(){
                $('.datepicker_fecha_fin').datepicker();
            });
        </script>
        <!-- DataTables -->
        <style type="text/css">
            @import "<?=base_url()?>css/jquery.dataTables.css";
        </style>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#dataTable').DataTable();
            });
        </script>

    </head>

    <body>
        <div class="container">