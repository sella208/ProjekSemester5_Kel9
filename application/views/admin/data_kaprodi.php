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

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <?php include('component/sidebar1.php')?>

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        <?php include('component/header1.php')?>

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Data Kaprodi</h1>
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
                    <div class="col-xs-12">
                        

                            <form>
                                <input class="search" type="text" placeholder="Cari..." required>
                                <input class="button" type="button" value="Cari">
                            </form>
                            <div class="box box-success">
                            <div class="box-header">
                                <a class="btn btn-primary btn-sm" href=""><i class="fa fa-plus"> </i> Tambah Data</a>
                            </div>
                            
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table id="datatb" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Password</th>
                                            <th>Alamat</th>
                                            <th>No. HP</th>
                                            <th>E-mail</th>
                                            <th>NIDN</th>
                                            <th>Jabatan</th>
                                            <th>Status Pegawai</th>
                                            <th>Golongan</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Program Studi</th>
                                            <th>Foto</th>
                                            <th colspan="2"> Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                        //$nomor=1;
                                        foreach ($kaprodi as $kpr) :
                                        ?>
                                        <tr>
                                
                                            <td><?php echo $kpr->id_kaprodi ?></td> 
                                            <td><?php echo $kpr->nip_kaprodi ?></td>
                                            <td><?php echo $kpr->nama_kaprodi ?></td>
                                            <td><?php echo $kpr->password_kaprodi ?></td>
                                            <td><?php echo $kpr->alamat_kaprodi ?></td>
                                            <td><?php echo $kpr->nohp_kaprodi ?></td>
                                            <td><?php echo $kpr->email_kaprodi ?></td>
                                            <td><?php echo $kpr->nidn_kaprodi ?></td>
                                            <td><?php echo $kpr->jabatan_kaprodi ?></td>
                                            <td><?php echo $kpr->status_kaprodi ?></td>
                                            <td><?php echo $kpr->golongan_kaprodi ?></td>
                                            <td><?php echo $kpr->tempat_lahir ?></td>
                                            <td><?php echo $kpr->tanggal_lahir ?></td>
                                            <td><?php echo $kpr->prodi_kaprodi ?></td>
                                            <td><?php echo $kpr->foto_kaprodi ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin hapus?')">
                                            <?php echo anchor('kaprodi/hapus/'. $kpr->id_kaprodi, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                            <td></div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div></td>
                                        </tr>
                                        <?php endforeach; ?>
                                            
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </div>
                </div>
                <!-- /.row -->
            </section>
        </div>

    <div class="clearfix"></div>

    <?php include('component/footer1.php')?>

    </div><!-- /#right-panel -->

<!-- Right Panel -->

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="<?php echo base_url()?>admin/assets/js/main.js"></script>


</body>
</html>
