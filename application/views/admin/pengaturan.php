<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin E-konseling</title>
    <meta name="description" content="Admin E-konseling">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="<?php echo base_url()?>user/assets/images/polije.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo base_url()?>admin/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>
    <?php include('component/sidebar1.php') ?>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <?php include('component/header1.php') ?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="page-header ">
                            <div class="page-title">
                                <h1>Pengaturan</h1>
                                <div class="container mt-3">
                                    <form method="POST" action="<?= base_url('pengaturan_admin/reset_password') ?>">
                                    <?php if($this->session->flashdata('msg')){ ?>
                                    <div class="alert alert-info">
                                        <?php echo $this->session->flashdata('msg'); ?>
                                    </div>
                                    <?php  } ?>
                                    <input type="hidden" name="" value="">
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Type</label>
                                            <div class="col-md-6">
                                                <select name="type" id="type" class="form-control ">
                                                    <option>Pilh Type</option>
                                                    <option value="1">Mahasiswa</option>
                                                    <option value="2">Dosen Wali</option>
                                                    <option value="3">Kaprodi</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Nama / Nip</label>
                                            <div class="col-md-6">
                                                <select name="identitas" id="identitas" class="js-example-basic-single form-control">
                                                    <option>Pilh Nip</option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="form-group row">
                                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input id="password" type="password" class="form-control " name="password" required="" autocomplete="new-password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Konfirmasi Password</label>
                                            <div class="col-md-6">
                                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required="" autocomplete="new-password">
                                            </div>
                                        </div> -->
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Simpan
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    
                </div>
                <!-- /.row -->
            </section>
        </div>

    <div class="clearfix"></div>

    <?php include('component/footer1.php') ?>

    </div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url()?>admin/assets/js/main.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script type="text/javascript">
    jQuery(function($){
        $('.js-example-basic-single').select2();
        var base_url = '<?= base_url() ?>';
        $("#type").change(function(){
            var val = $(this).val();
            $.ajax({
                url: base_url+"pengaturan_admin/ambildata/"+val,
                type: 'GET',
                success: function(res) {
                    console.log(res);
                    var obj = JSON.parse(res);
                    // console.log(obj[0]);
                    var result = "<option>Pilh Nip</option>";
                    for (var i = 0; i < obj.length ; i++) {
                        result+="<option value='"+ obj[i].nomor +"'>"+ obj[i].nomor +"</option>";
                    }
                    $("#identitas").html(result);
                }
            });
        })
    })
</script>

</body>
</html>
