<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>Login</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">

</head>

<body>




    <div class="wrapper">
        <?php
        include 'header.php';
        include 'product_data.php';


        ?>
        <div>
            <br>
            <br>
            <br>

        </div>

        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Vegetables <span class="badge badge-primary badge-pill"><?php echo $noOfDatav; ?></span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Fruits <span class="badge badge-primary badge-pill"><?php echo $noOfDataf; ?></span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> Spices <span class="badge badge-primary badge-pill"><?php echo $noOfDatas; ?></span> </li>
                        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category">Others <span class="badge badge-primary badge-pill"><?php echo $noOfDatao; ?></span> </li>
                    </ul>
                </div>
                <div class="py-3">
                    <h5 class="font-weight-bold">Rating</h5>
                    <form class="rating">
                        <div id="x" class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"><span class="bi bi-star-fill"></span> <span class="bi bi-star-fill"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                        <div class="form-inline d-flex align-items-center py-2"> <label class="tick"> <span class="bi bi-star-fill"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <span class="far fa-star px-1 text-muted"></span> <input type="checkbox"> <span class="check"></span> </label> </div>
                    </form>
                </div>
            </section>
        </div>

        <section id="products">
            <div class="container py-3">
                <div id='list' class="row">

                    <?php
                    $j = 0;

                    while ($j < $i) {
                        $rating = '';
                        while ((int)$products[$j]->rate--) {
                            $rating .= '<i class="bi bi-star-fill text-warning"></i>';
                        }

                        echo '
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="assets/images/product/product27.png" alt="">
                                        <h2 class="product_name">
                                            <p>' . $products[$j]->name . '</p>
                                        </h2>
                                        <div class="rating">
                                            ' . $rating . '
                                        </div>
                                        <h2 class="price">৳ '.$products[$j]->price.'</h2>
                                        <div class="btn d-flex justify-content-between align-items-center">
                                            <a href="" class="add-to-cart-btn">
                                                <i class="bi bi-cart4"></i> Add to Cart
                                            </a>
                                            <a href="" class="add-to-favorite text-success">
                                                <i class="bi bi-heart "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';


                        $j++;
                    }

                    ?>



                </div>
            </div>
        </section>





    </div>


</body>

</html>