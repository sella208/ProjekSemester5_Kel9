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
                        <div class="page-header">
                            <div class="page-title" >
                                <h1 class=" float-left" style="display:inline!important;">Data Dosen Wali</h1> 
                                <form style="display:inline!important;float:right!important">
                                    <input class="search" type="text" placeholder="Cari..." required>
                                    <input class="button" type="button" value="Cari">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content-wrapper">
            <section class="content">
                <table class="table">

                <!-- Main row -->
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box box-success">
                            

                            
                            <div class="box-header">
                                <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" ><i class="fa fa-plus"> </i> Tambah Data</a>
                            <table class="table">
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
                                            <th colspan="2">Aksi</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        //$nomor=1;
                                        foreach ((array)$dosenwali as $dsw) :
                                        ?>
                                        <tr>
                                            <td><?php echo $dsw->id_doswal ?></td> 
                                            <td><?php echo $dsw->nip_doswal ?></td>
                                            <td><?php echo $dsw->nama_doswal ?></td>
                                            <td><?php echo $dsw->password_doswal ?></td>
                                            <td><?php echo $dsw->alamat_doswal ?></td>
                                            <td><?php echo $dsw->nohp_doswal ?></td>
                                            <td><?php echo $dsw->email_doswal ?></td>
                                            <td><?php echo $dsw->nidn_doswal ?></td>
                                            <td><?php echo $dsw->jabatan_doswal ?></td>
                                            <td><?php echo $dsw->status_pegawai ?></td>
                                            <td><?php echo $dsw->gol_doswal ?></td>
                                            <td><?php echo $dsw->tempat_lahir ?></td>
                                            <td><?php echo $dsw->tanggal_lahir ?></td>
                                            <td><?php echo $dsw->prodi_doswal ?></td>
                                            <td><?php echo $dsw->foto_doswal ?></td>
                                            <td onclick="javascript: return confirm('Anda yakin hapus?')">
                                            <?php echo anchor('admin/data_doswal/hapus/'. $dsw->id_doswal, '<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>') ?></td>
                                            <td></div class="btn btn-primary btn-sm"><button data-toggle="modal" data-target="#exampleModal<?= $dsw->id_doswal ?>"><i class="fa fa-edit"></i></button></div></td>
                                            <div class="modal fade" id="exampleModal<?= $dsw->id_doswal ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DOSEN WALI</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="post" action="<?php echo base_url().'admin/data_doswal/update_aksi/'. $dsw->id_doswal ?>">

                                                                    <div class="form-group">
                                                                        <label>NAMA</label>
                                                                        <input type="text" name="nama" class="form-control" value="<?= $dsw->nama_doswal ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>NIP</label>
                                                                        <input type="text" name="nip" class="form-control" value="<?= $dsw->nip_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>NAMA</label>
                                                                        <input type="text" name="nama" class="form-control" value="<?= $dsw->nama_doswal ?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>NIP</label>
                                                                        <input type="text" name="nip" class="form-control" value="<?= $dsw->nip_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>ALAMAT</label>
                                                                        <input type="text" name="alamat" class="form-control" value="<?= $dsw->alamat_doswal?>">
                                                                    </div>
                                                                    

                                                                    <div class="form-group">
                                                                        <label>NO.TELEPON</label>
                                                                        <input type="text" name="no_hp" class="form-control" value="<?= $dsw->nohp_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>E-MAIL</label>
                                                                        <input type="text" name="email" class="form-control" value="<?= $dsw->email_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>NIDN</label>
                                                                        <input type="text" name="nidn" class="form-control" value="<?= $dsw->nidn_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>JABATAN</label>
                                                                        <input type="text" name="Jabatan" class="form-control" value="<?= $dsw->jabatan_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>STATUS PEGAWAI</label>
                                                                        <input type="text" name="status_pegawai" class="form-control" value="<?= $dsw->status_pegawai?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>GOLONGAN</label>
                                                                        <input type="text" name="golongan" class="form-control" value="<?= $dsw->gol_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>TEMPAT LAHIR</label>
                                                                        <input type="text" name="tempat_lahir" class="form-control" value="<?= $dsw->tempat_lahir?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>TANGGAL LAHIR</label>
                                                                        <input type="date" name="tanggal_lahir" class="form-control" value="<?= $dsw->tanggal_lahir?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>PROGRAM STUDI</label>
                                                                        <input type="text" name="program_studi" class="form-control" value="<?= $dsw->prodi_doswal?>">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label>FOTO</label>
                                                                        <input type="file" name="foto" class="form-control" value="<?= $dsw->foto_doswal?>">
                                                                    </div>

                                                            

                                                            
                                                            <div class="form-group">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php endforeach; ?>    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.box-body --
                        </div>
                         /.box -->
                    </div>
                </div>
                <!-- /.row -->
            </section>
        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">FORM INPUT DATA DOSEN WALI</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="<?php echo base_url().'admin/data_doswal/tambah_aksi'; ?>">

                <div class="form-group">
                    <label>NAMA</label>
                    <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                    <label>NIP</label>
                    <input type="text" name="nip" class="form-control">
                </div>

                <div class="form-group">
                    <label>ALAMAT</label>
                    <input type="text" name="alamat" class="form-control">
                </div>

                <div class="form-group">
                    <label>NO.TELEPON</label>
                    <input type="text" name="no_hp" class="form-control">
                </div>

                <div class="form-group">
                    <label>E-MAIL</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>NIDN</label>
                    <input type="text" name="nidn" class="form-control">
                </div>

                <div class="form-group">
                    <label>JABATAN</label>
                    <input type="text" name="Jabatan" class="form-control">
                </div>

                <div class="form-group">
                    <label>STATUS PEGAWAI</label>
                    <input type="text" name="status_pegawai" class="form-control">
                </div>

                <div class="form-group">
                    <label>GOLONGAN</label>
                    <input type="text" name="golongan" class="form-control">
                </div>

                <div class="form-group">
                    <label>TEMPAT LAHIR</label>
                    <input type="text" name="tempat_lahir" class="form-control">
                </div>

                <div class="form-group">
                    <label>TANGGAL LAHIR</label>
                    <input type="date" name="tanggal_lahir" class="form-control">
                </div>

                <div class="form-group">
                    <label>PROGRAM STUDI</label>
                    <input type="text" name="program_studi" class="form-control">
                </div>

                <div class="form-group">
                    <label>FOTO</label>
                    <input type="file" name="foto" class="form-control">
                </div>

        

        
        <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
      
        
      </div>
    </div>
  </div>
</div>
            
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
