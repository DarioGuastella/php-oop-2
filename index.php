<?php
require __DIR__ . '/data.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="container">
        <div class="row">
            <h2>Prodotti</h2>
        </div>
        <div class="row">
            <?php foreach ($prodotti as $prodotto) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?= $prodotto->image . "<br>" . $prodotto->title . "<br>" . $prodotto->price ?>

                            </h5>
                            <h6 class="card-subtitle mb-2 text-muted">
                                <!-- nullsafe operator -->
                                <?= $prodotto->category?->productType . "<br>"; ?>
                                <?= $prodotto->description . "<br>"; ?>
                                <?php echo isset($prodotto->color) ? "Colore: " . $prodotto->color : "" . "<br>"; ?>
                                <?php echo isset($prodotto->weight) ? "Peso: " . $prodotto->weight : "" . "<br>"; ?>
                                <?php echo isset($prodotto->size) ? "Peso: " . $prodotto->size : "" . "<br>"; ?>

                            </h6>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>