<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>GreatHotel &raquo; Cetak Reservasi <?= $data['checkin'] ?> <?= $data['pemesan'] ?></title>
</head>

<body>
    <div style="text-align:center">
        <h3>Data Reservasi</h3>
    </div>
    <div class="container">
        <!-- Content here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="row" style="background-color: #f5f6fa; font-size:medium;">
                        <div class=" col-6 col-sm-6">
                            <hr>
                            Nama Pemesan :
                            <hr>
                            Nama Tamu :
                            <hr>
                            Tanggal Check In :
                            <hr>
                            Tanggal Check Out :
                            <hr>
                            Email :
                            <hr>
                            No Handphone :
                            <hr>
                            Tipe Kamar :
                            <hr>
                            Jumlah :
                            <hr>
                            Status :
                            <hr>
                        </div>
                        <div class="col-6 col-sm-6">
                            <hr>
                            <?= $data['pemesan'] ?>
                            <hr>
                            <?= $data['tamu'] ?>
                            <hr>
                            <?= $data['checkin'] ?>
                            <hr>
                            <?= $data['checkout'] ?>
                            <hr>
                            <?= $data['email'] ?>
                            <hr>
                            <?= $data['no_telp'] ?>
                            <hr>
                            <?= $data['tipe_kamar'] ?>
                            <hr>
                            <?= $data['jumlah'] ?>
                            <hr>
                            <?= $data['status'] ?>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<script type="text/javascript">
    window.onload = function() {
        window.print();
    }
</script>

</html>