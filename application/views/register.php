<!-- Stage- Bootstrap one page Event ticket booking theme 
Created by pixpalette.com - online design magazine -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Stage- Bootstrap one page Event ticket booking theme</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/custom/css/custom.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="col-lg-12">
      <form method="POST" action="<?php echo base_url(); ?>user/simpandata" enctype="multipart/form-data">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Registrasi Test </h6>
                </div>
                <div class="card-body">
                <h6>Tanggal Test : <?=(isset($event)) ? $event->tanggal_event : ''; ?></h6>
                <div class="form-group row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="nama">Nama Lengkap<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-user" placeholder="Masukkan Nama Lengkap" id="nama" name="nama" required="">
                        </div>

                        <div class="form-group m-form__group">
                        <label for="nama">NPM<span class="text-danger">*</span></label>
                            <input type="number" class="form-control form-control-user" placeholder="Masukkan NPM" id="npm" name="npm" required="">
                        </div>

                        <div class="form-group">
                            <label for="email">Alamat Email<span class="text-danger">*</span></label>
                            <input type="email" class="form-control form-control-user" aria-describedby="emailHelp" placeholder="Masukkan Alamat Email" id="email" name="email" required="">
                        </div>

                        <!-- <div class="form-group">
                            <label for="tgl_tes">Tanggal Tes<span class="m--font-danger">*</span></label>
                            <input type="text" class="form-control m-input" id="end_date_event" name="end_date_event">
                        </div> -->
                    </div>
                    
                    <div class="col-lg-6">

                    <div class="form-group">
                            <label for="handphone">No. Handphone<span class="text-danger">*</span></label>
                            <input type="text" class="form-control form-control-user" placeholder="Masukkan Nomor Handphone" id="handphone" name="handphone" required="">
                        </div>
                        
                    <div class="form-group">
                        <label for="fakultas">Fakultas<span class="text-danger">*</span></label>
                            <select name="fakultas" class="form-control form-control-user" required="">
                                <option>--Pilih Fakultas--</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label for="prodi">Program Studi<span class="text-danger">*</span></label>
                            <select name="prodi" class="form-control form-control-user" required="">
                                <option>--Pilih Program Studi--</option>
                            </select>
                        </div>

                    </div>
    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan Data</button>
                </div>
            </div>
        </form>
      </div>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/allscript.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/custom/js/booking.js" type="text/javascript"></script>
  </body>

</html>
