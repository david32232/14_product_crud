<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>NEWSROOM - Free Bootstrap Magazine Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row align-items-center bg-light px-lg-5">
            <div class="col-12 col-md-8">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-white text-center py-2" style="width: 100px;">Tranding</div>
                    <div class="owl-carousel owl-carousel-1 tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 100px); padding-left: 90px;">
                        <div class="text-truncate"><a class="text-secondary" href="">Labore sit justo amet eos sed, et sanctus dolor diam eos</a></div>
                        <div class="text-truncate"><a class="text-secondary" href="">Gubergren elitr amet eirmod et lorem diam elitr, ut est erat Gubergren elitr amet eirmod et lorem diam elitr, ut est erat</a></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                Monday, January 01, 2045
            </div>
        </div>
        <div class="row align-items-center py-2 px-lg-5">
            <div class="col-lg-4">
                <a href="" class="navbar-brand d-none d-lg-block">
                    <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
            </div>
            <div class="col-lg-8 text-center text-lg-right">
                <img class="img-fluid" src="/img/ads-700x70.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0 mb-3">
        <nav class="navbar navbar-expand-lg bg-light navbar-light py-2 py-lg-0 px-lg-5">
            <a href="" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="index" class="nav-item nav-link active">Home</a>
                    <a href="category" class="nav-item nav-link">Categories</a>
                    <a href="contact" class="nav-item nav-link">Contact</a>
                    <a href="my_blog" class="nav-item nav-link">Admin</a>
                </div>
                <div class="input-group ml-auto" style="width: 100%; max-width: 300px;">
                    <input type="text" class="form-control" placeholder="Keyword">
                    <div class="input-group-append">
                        <button class="input-group-text text-secondary"><i class="fa fa-search"></i></button>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Top News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="owl-carousel owl-carousel-2 carousel-item-3 position-relative">
                <div class="d-flex">
                    <img src="/img/news-100x100-1.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="/img/news-100x100-2.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="/img/news-100x100-3.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
                <div class="d-flex">
                    <img src="/img/news-100x100-4.jpg" style="width: 80px; height: 80px; object-fit: cover;">
                    <div class="d-flex align-items-center bg-light px-3" style="height: 80px;">
                        <a class="text-secondary font-weight-semi-bold" href="">Lorem ipsum dolor sit amet consec adipis elit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Top News Slider End -->


    <!-- Main News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">
                        <?php foreach($posts as $post): ?>
                        <div class="position-relative overflow-hidden" style="height: 720px;">
                            <img class="img-fluid h-100" src="<?php echo $post['image'] ?>" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href=""><?php echo $post['created-at'] ?></a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                            </div>
                        </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Categories</h3>
                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                    </div>
                    <?php foreach($posts as $post): ?>
                    <div class="position-relative overflow-hidden mb-3" style="height: 80px;">
                        <img class="img-fluid w-100 h-100" src="<?php echo $post['image'] ?>" style="object-fit: cover;">
                        <a href="category?id=<?php echo $post['topic'] ?>" class="overlay align-items-center justify-content-center h4 m-0 text-white text-decoration-none"><?php echo $post['blog_topic']?></a>
                    </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
    <!-- Main News Slider End -->


    <!-- Featured News Slider Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                <h3 class="m-0">Featured</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                <?php foreach($posts as $post): ?>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="<?php echo $post['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href=""><?php echo $post['created-at'] ?></a>
                        </div>
                        <a class="h4 m-0 text-white" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Featured News Slider End -->


    <!-- Category News Slider Start -->
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <?php foreach ($postsByTopic as $sp) { ?>
                    <div class="col-lg-6 py-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0"><?= $sp['topic'] ?></h3>
                        </div>
                        <div class="owl-carousel owl-carousel-3 carousel-item-2 position-relative">
                            <?php foreach ($sp['posts'] as $post) : ?>
                                <div class="position-relative">
                                    <img class="img-fluid w-100" src="<?= $post['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                    <div class="overlay position-relative bg-light">
                                        <div class="mb-2" style="font-size: 13px;">
                                            <a href="category?id=<?php echo $post['topic'] ?>"><?= $sp['topic'] ?></a>
                                            <span class="px-1">/</span>
                                            <span><?= $post['created-at'] ?></span>
                                        </div>
                                        <a class="h4 m-0" href="single?id=<?php echo $post['ID'] ?>"><?= $post['title'] ?></a>
                                    </div>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    </div>
    <!-- Category News Slider End -->
    <!-- News With Sidebar Start -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <?php
                    $maxPost = 4;
                    for ($i = 0; $i < min(count($posts), $maxPost); $i += 2) {
                        // Check if there are at least two posts remaining
                        if ($i + 1 < count($posts)) {
                            $post1 = $posts[$i];
                            $post2 = $posts[$i + 1];
                    ?>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                        <h3 class="m-0">Popular</h3>
                                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="<?php echo $post1['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post1['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post1['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="category?id=<?php echo $post['topic'] ?>"><?php echo $post1['blog_topic'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post1['description']) > $maxLength) {
                                                    echo substr($post1['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post1['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="<?php echo $post2['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post2['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post2['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="single?id=<?php echo $post2['ID'] ?>"><?php echo $post2['title'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post2['description']) > $maxLength) {
                                                    echo substr($post2['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post2['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                            // Display single post if there's only one left
                            $post = $posts[$i];
                        ?>
                            <div class="row mb-3">
                                <div class="col-12">
                                    <div class="d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                        <h3 class="m-0">Popular</h3>
                                        <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="<?php echo $post['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post['description']) > $maxLength) {
                                                    echo substr($post['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="<?php echo $post['image'] ?>" style="width: 100px; height: 100px; object-fit: cover; width: 290px; height:280px">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h6 m-0" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="<?php echo $post['image'] ?>" style="width: 100px; height: 100px; object-fit: cover; width: 290px; height:280px">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h6 m-0" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="position-relative mb-3">
                                        <img class="img-fluid w-100" src="<?php echo $post['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post['description']) > $maxLength) {
                                                    echo substr($post['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="<?php echo $post['image'] ?>" style="width: 100px; height: 100px; object-fit: cover; width: 290px; height:280px">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h6 m-0" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <img src="<?php echo $post['image'] ?>" style="width: 100px; height: 100px; object-fit: cover; width: 290px; height:280px">
                                        <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                            <div class="mb-1" style="font-size: 13px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h6 m-0" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid w-100" src="/img/ads-700x70.jpg" alt=""></a>
                    </div>

                    <?php
                    $maxPost = 4;
                    for ($i = 0; $i < min(count($posts), $maxPost); $i += 2) {
                        // Check if there are at least two posts remaining
                        if ($i + 1 < count($posts)) {
                            $post1 = $posts[$i];
                            $post2 = $posts[$i + 1];
                    ?>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="<?php echo $post1['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post1['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post1['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="single?id=<?php echo $post1['ID'] ?>"><?php echo $post1['title'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post1['description']) > $maxLength) {
                                                    echo substr($post1['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post1['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mb-3">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="<?php echo $post2['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post2['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post2['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post2['title'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post2['description']) > $maxLength) {
                                                    echo substr($post2['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post2['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        } else {
                            // Display single post if there's only one left
                            $post = $posts[$i];
                        ?>
                            <div class="row">
                                <div class="col-lg-6 mb-3">
                                    <div class="position-relative">
                                        <img class="img-fluid" src="<?php echo $post['image'] ?>" style="object-fit: cover; width: 290px; height:280px">
                                        <div class="overlay position-relative bg-light">
                                            <div class="mb-2" style="font-size: 14px;">
                                                <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                                <span class="px-1">/</span>
                                                <span><?php echo $post['created-at'] ?></span>
                                            </div>
                                            <a class="h4" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                            <p class="m-0">
                                                <?php
                                                $maxLength = 200;
                                                if (strlen($post['description']) > $maxLength) {
                                                    echo substr($post['description'], 0, $maxLength) . '...';
                                                } else {
                                                    echo $post['description'];
                                                }
                                                ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>

                </div>

                <div class="col-lg-4 pt-3 pt-lg-0">
                    <!-- Social Follow Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Follow Us</h3>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #39569E;">
                                <small class="fab fa-facebook-f mr-2"></small><small>12,345 Fans</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #52AAF4;">
                                <small class="fab fa-twitter mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #0185AE;">
                                <small class="fab fa-linkedin-in mr-2"></small><small>12,345 Connects</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #C8359D;">
                                <small class="fab fa-instagram mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                        <div class="d-flex mb-3">
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none mr-2" style="background: #DC472E;">
                                <small class="fab fa-youtube mr-2"></small><small>12,345 Subscribers</small>
                            </a>
                            <a href="" class="d-block w-50 py-2 px-3 text-white text-decoration-none ml-2" style="background: #1AB7EA;">
                                <small class="fab fa-vimeo-v mr-2"></small><small>12,345 Followers</small>
                            </a>
                        </div>
                    </div>
                    <!-- Social Follow End -->

                    <!-- Newsletter Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Newsletter</h3>
                        </div>
                        <div class="bg-light text-center p-4 mb-3">
                            <p>Aliqu justo et labore at eirmod justo sea erat diam dolor diam vero kasd</p>
                            <div class="input-group" style="width: 100%;">
                                <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                            <small>Sit eirmod nonumy kasd eirmod</small>
                        </div>
                    </div>
                    <!-- Newsletter End -->

                    <!-- Ads Start -->
                    <div class="mb-3 pb-3">
                        <a href=""><img class="img-fluid" src="/img/news-500x280-4.jpg" alt=""></a>
                    </div>
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-1">
                            <h3 class="m-0">Trending</h3>
                        </div>
                        <?php
                        $maxPost = 5;
                        for ($i = 0; $i < min(count($posts), $maxPost); $i++) {
                            $post = $posts[$i];
                        ?>
                            <div class="d-flex mb-3">
                                <img src="<?php echo $post['image'] ?>" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 bg-light px-3" style="height: 100px;">
                                    <div class="mt-2" style="font-size: 13px;">
                                        <a href="category?id=<?php echo $post['topic'] ?>"><?php echo $post['blog_topic'] ?></a>
                                        <span class="px-1">/</span>
                                        <span><?php echo $post['created-at'] ?></span>
                                    </div>
                                    <a class="h6 m-0 mt-1" href="single?id=<?php echo $post['ID'] ?>"><?php echo $post['title'] ?></a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>

                    <!-- Popular News End -->

                    <!-- Tags Start -->
                    <div class="pb-3">
                        <div class="bg-light py-2 px-4 mb-3">
                            <h3 class="m-0">Tags</h3>
                        </div>
                        <div class="d-flex flex-wrap m-n1">
                            <?php foreach ($topics as $topic) : ?>
                                <div class="m-1">
                                    <a href="category?id=<?php echo $post['topic'] ?>" class="btn btn-sm btn-outline-secondary"><?php echo $topic['topic']; ?></a>
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>
                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-light pt-5 px-sm-3 px-md-5">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="index" class="navbar-brand">
                    <h1 class="mb-2 mt-n2 display-5 text-uppercase"><span class="text-primary">News</span>Room</h1>
                </a>
                <p>Volup amet magna clita tempor. Tempor sea eos vero ipsum. Lorem lorem sit sed elitr sed kasd et</p>
                <div class="d-flex justify-content-start mt-4">
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-secondary text-center mr-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Categories</h4>
                <div class="d-flex flex-wrap m-n1">
                    <?php foreach ($topics as $topic) : ?>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1"><?php echo $topic['topic']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Tags</h4>
                <div class="d-flex flex-wrap m-n1">
                    <?php foreach ($topics as $topic) : ?>
                        <a href="" class="btn btn-sm btn-outline-secondary m-1"><?php echo $topic['topic']; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="font-weight-bold mb-4">Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>About</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Advertise</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Privacy & policy</a>
                    <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Terms & conditions</a>
                    <a class="text-secondary" href="#"><i class="fa fa-angle-right text-dark mr-2"></i>Contact</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center">
            &copy; <a class="font-weight-bold" href="#">Your Site Name</a>. All Rights Reserved.

            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
            Designed by <a class="font-weight-bold" href="https://htmlcodex.com">HTML Codex</a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="/lib/easing/easing.min.js"></script>
    <script src="/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="/mail/jqBootstrapValidation.min.js"></script>
    <script src="/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="/js/main.js"></script>
</body>

</html>