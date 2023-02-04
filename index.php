<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Gempa BMKG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <img class="d-block mx-auto mb-4" src="https://data.bmkg.go.id/include/assets/img/logo-bmkg.svg" alt=""
                    width="72" height="57">
                <h2>DATA GEMPA TERBARU</h2>
                <p class="lead">Data diambil dari data resmi BMKG dan akan selalu terupdate otomatis</p>
            </div>
            <?php
            $Infogempa = new SimpleXMLElement('https://data.bmkg.go.id/DataMKG/TEWS/autogempa.xml', null, true); //data diambil dari data BMKG

            // melakukan looping penampilan data pasien
            foreach ($Infogempa as $id) {;
            }
            ?>
            <div class="row g-5">
                <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Gempa Terkini</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <small class="text-muted"> <img
                                        src="https://data.bmkg.go.id/DataMKG/TEWS/<?php echo $id->Shakemap ?>"
                                        alt="shakemap" class="img-thumbnail"></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Tanggal</h6>
                                <small class="text-muted"><?php echo $id->Tanggal ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Jam</h6>
                                <small class="text-muted"><?php echo $id->Jam ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Date Time</h6>
                                <small class="text-muted"><?php echo $id->DateTime ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Koordinat</h6>
                                <small class="text-muted"><?php echo $id->point->coordinates ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Lintang dan Bujur</h6>
                                <small class="text-muted"><?php echo $id->Lintang ?> & <?php echo $id->Bujur ?> </small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Magnitude</h6>
                                <small class="text-muted"><b> <?php echo $id->Magnitude ?> </b></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Kedalaman</h6>
                                <small class="text-muted"><?php echo $id->Kedalaman ?> </small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Wilayah</h6>
                                <small class="text-muted"><?php echo $id->Wilayah ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Potensi</h6>
                                <small class="text-muted"> <?php echo $id->Potensi ?></small>
                            </div>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Dirasakan</h6>
                                <small class="text-muted"><?php echo $id->Dirasakan ?></small>
                            </div>
                        </li>
                    </ul>

                </div>
                <div class="col-md-7 col-lg-8">
                    <h2>Gempabumi Terkini (M ≥ 5.0)</h2>


                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Waktu Gempa</th>
                                <th scope="col">Lintang</th>
                                <th scope="col">Bujur</th>
                                <th scope="col">Magnitudo</th>
                                <th scope="col">Kedalaman</th>
                                <th scope="col">Wilayah</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no = 1;
                            $Infogempa = new SimpleXMLElement('https://data.bmkg.go.id/DataMKG/TEWS/gempaterkini.xml', null, true);

                            // melakukan looping penampilan data pasien
                            foreach ($Infogempa as $gempabaru) {;

                            ?>
                            <tr>
                                <th scope="row"><?php echo $no++ ?></th>
                                <td><?php echo $gempabaru->DateTime ?></td>
                                <td><?php echo $gempabaru->Lintang ?></td>
                                <td><?php echo $gempabaru->Bujur ?></td>
                                <td><?php echo $gempabaru->Magnitudo ?></td>
                                <td><?php echo $gempabaru->Kedalaman ?></td>
                                <td><?php echo $gempabaru->Wilayah ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
</body>

</html>