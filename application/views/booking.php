<!-- Stage- Bootstrap one page Event ticket booking theme 
Created by pixpalette.com - online design magazine -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>English Proficency Test | Lembaga Bahasa Widyatama</title>

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
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />

<div class="event-schedule-area-two bg-color pad100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <div class="title-text">
                        <h2>Jadwal English Prociency Tests</h2>
                        <h2>Lembaga Bahasa Widyatama</h2>
                    </div>
                    <p>
                        Silahkan pilih jadwal test yang masih tersedia dibawah ini dan registrasikan pada tanggal yang tersedia tersebut.
                    </p>
                </div>
            </div>
            <!-- /.col end-->
        </div>
        <!-- row end-->
        <div class="row" id="view_page">
            <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="text-center" scope="col">Date</th>
                                        <th scope="col">Venue</th>
                                        <th scope="col">Availability</th>
                                        <th scope="col">Booking</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    if (isset($event) and (count($event) > 0)){
                                        foreach ($event as $key => $ev) {
                                            
                                        ?>
                                    <tr class="inner-box">
                                        <th scope="row">
                                            <div class="event-date">
                                                <span class="event_date" id="event_date"> 
                                                    <?= $ev->tanggal_event; ?> 
                                                </span>
                                            </div>
                                        </th>
                                        <td>
                                            <div class="event-wrap">
                                                <h6><?= $ev->venue; ?></h6>
                                                
                                            </div>
                                        </td>
                                        <td>
                                            <div class="r-no">
                                                <span class="kuota" id="kuota"><?= $ev->sisa_kuota; ?></span>
                                            </div>
                                        </td>
                                        <td>
                                            
                                            <?php
                                            if($ev->sisa_kuota <= '0'){
                                                ?>
                                                <div class="primary-btn">
                                                <button class="btn btn-primary" disabled>Kuota Habis</button>
                                            </div>
                                            <?php
                                            }else{ ?>
                                            <div class="primary-btn">
                                                <a class="btn btn-primary register" type="submit" href="<?php echo base_url();?>booking/register/<?= $ev->id_event;?>" id="register" name="register">Register</a>
                                            </div>
                                            <?php
                                            }?>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /col end-->
        </div>
        <!-- /row end-->
    </div>
</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/allscript.js"></script> -->
    <script src="<?php echo base_url(); ?>assets/custom/js/booking.js" type="text/javascript"></script>
  </body>

</html>
