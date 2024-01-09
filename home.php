<!-- Header-->

<!-- use pic for home page -->
<!-- <header class="bg-dark py-5" id="main-header"> -->

<header class="bg-dark py-2">
    <div class="container px-2 px-lg-3 my-2">
        <div class="text-center text-white">
            <!-- <h1 class="display-4 fw-bolder"></h1> -->
            <h4>BDBookShop এ স্বাগতম</h4>
            <p class="lead fw-normal text-white-50 mb-0">☎️হটলাইন:+8801960230293</p><br>
        </div>
        <div>
        </div>

    </div>
</header>

<!-- Section-->
<br>
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="container2">
                <div class="black-box">
                    <img src="images/artofcontest.jpg" class="img-fluid" alt="Book Image">
                </div>

                <div class="green-box">
                    <img src="images/qr.png" class="zoom-in-out-box" alt="qr" />
                    <style>
                    .container2 {
                        position: relative;
                    }

                    .black-box {
                        position: relative;
                    }

                    .green-box {
                        position: absolute;
                        bottom: 20px;
                        left: 150px;
                        /* left: 150px;
  top: 250px; */
                    }
                    </style>
                </div>
            </div>


            <style>
            .zoom-in-out-box {
                margin: 24px;
                width: 50px;
                height: 50px;
                background: #f50057;
                animation: zoom-in-zoom-out 1s ease infinite;
            }

            @keyframes zoom-in-zoom-out {
                0% {
                    transform: scale(1, 1.5);
                }

                50% {
                    transform: scale(2.5, 3);
                }

                100% {
                    transform: scale(1, 1.5);
                }
            }
            </style>

        </div>
        <div class="col-md-4">
            <h1>📆&#160মাত্র দুই</h1>
            <h1>সপ্তাহে দার </h1>
            <h1>&#160 &#160 &#160 করান</h1>
            <h1 style="color: black;"><mark style="background-color: yellow;">💪🏻স্থায়ী &#160বড়</mark></h1>
            <h1 style="color: black;"><mark style="background-color: #ffc0cb;">ব্যবসা📈👑</mark></h1>
        </div>

        <div class="col-md-4">
            <h2 style="color: black;"><mark style="background-color: #add8e6;">📢বইয়ের প্যাকেজটিতে ফ্রি পাচ্ছেনঃ</mark>
            </h2>

            <h3>📝14 দিনের চেকলিস্ট</h3>
            <h3>🎓বিখ্যাত ১৬ টি কোর্সের </h3>
            <h3 class="shake-animation">Free Drive Link!</h3>
            <h3>🚀Idea Bank</h3>
            <h3 class="shake-animation">⚡Ad Post + Video</h3>
            <style>
            .shake-animation {
                animation: shake 0.5s ease-in-out infinite;
            }

            @keyframes shake {
                0% {
                    transform: translateX(0);
                }

                25% {
                    transform: translateX(-5px);
                }

                50% {
                    transform: translateX(5px);
                }

                75% {
                    transform: translateX(-5px);
                }

                100% {
                    transform: translateX(0);
                }
            }
            </style>

        </div>
    </div>
</div>

<head>

    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    .custom-btn {
        background-color: red;
        color: white;
        transition: background-color 0.3s ease;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
    }

    .custom-btn:hover {
        background-color: rgb(0, 255, 0);
        cursor: pointer;
    }

    .text-div {
        margin-top: auto;
        padding: 10px;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <?php
  $product_id = md5(1);
  $products = $conn->query("SELECT * FROM `products`  where md5(id) = '$product_id' ");
  if ($products->num_rows > 0) {
    foreach ($products->fetch_assoc() as $k => $v) {
      $$k = stripslashes($v);
    }
    $inventory = $conn->query("SELECT * FROM inventory where product_id = " . $id);
    $inv = array();
    while ($ir = $inventory->fetch_assoc()) {
      $inv[] = $ir;
    }
  }
  ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="btn-group ">
                    <form id="add-cart" method="GET" action="./?p=checkout">
                        <input type="hidden" name="price" value="<?php echo $inv[0]['price'] ?>">
                        <input type="hidden" name="inventory_id" value="<?php echo $inv[0]['id'] ?>">
                        <input id="inputQuantity" type="hidden" value="1" name="quantity" />
                        <button class="animated-button btn" type="submit">👉অর্ডার
                            করুন👈</button>
                    </form>
                    <style>
                    /* CSS */
                    @keyframes buttonHover {
                        0% {
                            background-color: #FF0000;
                            transform: scale(1);
                        }

                        50% {
                            background-color: #ff9900;
                            transform: scale(1.2);
                        }

                        100% {
                            background-color: #FF0000;
                            transform: scale(1);
                        }
                    }

                    .animated-button {
                        background-color: #FF0000;
                        color: white;
                        border: none;
                        margin: 0px 0px 0px 40px;
                        padding: 10px 20px;
                        font-size: 16px;
                        cursor: pointer;
                        animation: buttonHover 1s infinite;
                        /* Apply animation on hover */
                    }

                    .animated-button:hover {
                        animation: none;
                        /* Disable animation on hover */
                        background-color: #FF0000;
                        transform: scale(1.2);
                    }
                    </style>
                </div>
                <p style="margin:  0px 0px 0px 70px;">⭐⭐⭐⭐⭐</p>
            </div>

            <div class="col-md-4">
                <div>
                    <p><span style="color: black;">মূল্য: </span><span style="color: red;"> <strike>৳১৫৯০/=
                                টাকা</strike></span></p>
                    <p style="color: green;">&#160 &#160 &#160 &#160 ৳৭৯৯/= টাকা
                    <p>
                    <p>💰Cash On Delivery</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <p>💰Cash On Delivery
                        🏠Free Home Delivery(সারাদেশে দ্রুততম ডেলিভারি)</p>
                    <p class="shake-animation"><span style="color: black;">📞কথা বলতে চাইলে কল:</span><span
                            style="color: black; background-color: orange;">+8801960230293</span></p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div>
        <center>
            <h2 style="color: black;"><mark style="background-color: #add8e6;">✋ Success Feedbacks 😇</mark></h2>
        </center>
    </div>
    <br>
    <style>
    .customer-photo {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #ccc;
        /* Placeholder color */
        margin-right: 15px;
    }

    .customer-name {
        margin: 0;
        font-size: 18px;
    }

    .customer-address {
        margin: 5px 0 0;
        font-size: 14px;
        color: #555;
    }

    .feedback-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        width: calc(100% - 10px);
        Adjust width for 3 cards in a row with margin margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }

    .feedback-text p {
        margin: 0;
        font-size: 16px;
        line-height: 1.5;
    }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">Tushar Khan ⭐⭐⭐⭐⭐</h3>
                                <p class="customer-address">Mirpur, Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                আমার বয়স ২১, আমি ১২ বছর বয়স থেকে রেগুলার পর্ণ দেখতাম আর হস্তমৈথুন করতাম, এক পর্যায়ে যত
                                উত্তেজক পর্ণই দেখি আগের মত উত্তেজিত হচ্ছিলামনা, সাথে আমার পুরুষাঙ্গের সেন্সিটিভিটিও কমে
                                যাচ্ছিল, এটার সাইজও যেন আগের থেকে কম আর নেতিয়ে পড়া মনে হচ্ছিল, বইটি দেখামাত্র কিনে নেই,
                                এন্ড বিশ্বাস করুন ! প্রথম সপ্তাহ থেকেই পুরুষাঙ্গ আর অণ্ডকোষ অনেক বেশি ভারী আর সেন্সিটিভ
                                হয়ে যায়, টেস্ট করার জন্য মনে আছে আমি ১১ দিনের মাথায় পর্ণ সাইটে যাই, একটা পর্ণের
                                থাম্বনেইল দেখেই আমার পুরুষাঙ্গ ১২ বছর বয়সের মত পূর্ণাঙ্গ খাড়া হয়ে যায়, ২৮ দিন শেষ হতে
                                আমার আর ২ দিন বাকি, অনেক অনেক অনেক কৃতজ্ঞ আমি।
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">John Doe ⭐⭐⭐⭐</h3>
                                <p class="customer-address">Khulna, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                Amar age 26, amr ek friend er kach theke boitar shomporke jante pari... First e mone
                                hoyechilo je try kore dekha jak ki hoy, erpor jokhon try korlam, ami nijeo obak, ami
                                onek onek kritoggo and amar girlfriend o result dekhe obak 28 diner mathay. Amar birjo
                                ager theke onek bere geche, amar ondokosh always vari and vorat thake, ekbar penis
                                khara hole shohoje namte chaena... Daily dine ontoto 13-14 bar khara hoye jae, and
                                raate ghumanor shomoy pray puro time e khara thake kather moto shokto hoye, shokal
                                belay amar washroom e giye wait korte hoy oita neme jawar etoi shokto thake, erpor
                                shokaler kaaj shuru korte pari.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">Mr.x ⭐⭐⭐⭐⭐</h3>
                                <p class="customer-address">Sadar, Chittagong, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                হ্যালো আমার বয়স ৩৫, বিবাহিত, আমার কয়েকটা সমস্যা ছিল, মাঝে মাঝে তাড়াতাড়ি বীর্যপাত হত,
                                আবার মাঝেমাঝে অনেক চেষ্টা করলেও কিছু হতনা, পুরুষাঙ্গ মরার মত হয়ে থাকত, পুরুষাঙ্গ একদিকে
                                বেকে ছিল, আগা মোটা গোড়া চিকনও ছিল, সাথে অণ্ডকোষ অনেক হালকা ছিল, সকালে মাঝে মাঝে হালকা
                                শক্ত হত তাও পুরো না, সাইজও অনেকটাই ছোট হয়ে গেছিল, পর্ণ দেখলেও খাড়া হয়না, পুরুষাঙ্গ টাচ
                                না করলে খালি চিন্তা দিয়ে খাড়া হতনা, এক ফ্রেন্ডের কাছে শুনে আমি ২৮ দিনের চ্যালেঞ্জটা
                                নিয়ে নিই, প্রতিটা টাস্ক পাই টু পাই ফলো করি সাথে ডায়েট প্ল্যানে বলা খাবারগুলোও খাই,
                                স্পষ্ট খেয়াল আছে ১৭ দিনের মাথায় সন্ধ্যায় বউয়ের হাসি দেখেই পুরো খাড়া হয়ে গেছিল, দেখে বউ
                                লজ্জ্বা পেয়ে গেছিল, আমি অনেক বেশি খুশি।
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div>
            <center>
                <h2 style="color: black;"><mark style="background-color: #add8e6;">📢বইয়ের প্যাকেজটিতে ফ্রি
                        পাচ্ছেনঃ</mark></h2>
            </center>
        </div>
        <br>


        <div class="card-deck">
            <div class="card">
                <img class="" src="images/prosenjit.jpg" alt="Customer Photo">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>

            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>

            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>

            </div>
        </div>

        <style>
        /* Add some custom styles if needed */
        .product-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .customer-photo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #ccc;
            /* Placeholder color */
            margin-right: 15px;
        }
        </style>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <img src="images/prosenjit.jpg" class="img-fluid" alt="Product 1 Image">
                            <h4>Product 1</h4>
                            <p>Product 1 details...</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <img src="product2-image.jpg" class="img-fluid" alt="Product 2 Image">
                            <h4>Product 2</h4>
                            <p>Product 2 details...</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <img src="product3-image.jpg" class="img-fluid" alt="Product 3 Image">
                            <h4>Product 3</h4>
                            <p>Product 3 details...</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <img src="product4-image.jpg" class="img-fluid" alt="Product 4 Image">
                            <h4>Product 4</h4>
                            <p>Product 4 details...</p>
                        </div>
                    </div>
                </div>
            </div>







            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="feedback-card">
                            <div class="customer-info">
                                <div class="customer-photo">
                                    <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                                </div>
                                <div class="customer-details">
                                    <h3 class="customer-name">Tushar Khan ⭐⭐⭐⭐⭐</h3>
                                    <p class="customer-address">Mirpur, Dhaka, Bangladesh</p>
                                </div>
                            </div>
                            <div class="feedback-text">
                                <p>
                                    আমার বয়স ২১, আমি ১২ বছর বয়স থেকে রেগুলার পর্ণ দেখতাম আর হস্তমৈথুন করতাম, এক পর্যায়ে
                                    যত উত্তেজক পর্ণই দেখি আগের মত উত্তেজিত হচ্ছিলামনা,
                                </p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="feedback-card">
                            <div class="customer-info">
                                <div class="customer-photo">
                                    <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                                </div>
                                <div class="customer-details">
                                    <h3 class="customer-name">John Doe ⭐⭐⭐⭐</h3>
                                    <p class="customer-address">Khulna, Bangladesh</p>
                                </div>
                            </div>
                            <div class="feedback-text">
                                <p>
                                    Amar age 26, amr ek friend er kach theke boitar shomporke jante pari... First e
                                    mone hoyechilo je try kore dekha jak ki hoy, erpor jokhon try korlam, ami nijeo
                                    obak.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>



            <!-- Bootstrap JS (Optional, for certain functionalities) -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </body>

        </html>

        <style>
        .book-cover {
            object-fit: contain !important;
            height: auto !important;
        }
        </style>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
          $products = $conn->query("SELECT * FROM `products` where status = 1 order by rand() limit 8 ");
          while ($row = $products->fetch_assoc()):
            $upload_path = base_app . '/uploads/product_' . $row['id'];
            $img = "";
            if (is_dir($upload_path)) {
              $fileO = scandir($upload_path);
              if (isset($fileO[2]))
                $img = "uploads/product_" . $row['id'] . "/" . $fileO[2];
              // var_dump($fileO);
            }
            foreach ($row as $k => $v) {
              $row[$k] = trim(stripslashes($v));
            }
            $inventory = $conn->query("SELECT * FROM inventory where product_id = " . $row['id']);
            $inv = array();
            while ($ir = $inventory->fetch_assoc()) {
              $inv[] = number_format($ir['price']);
            }
            ?>
                    <div class="col mb-5">
                        <div class="card product-item">
                            <!-- Product image-->
                            <img class="card-img-top w-100 book-cover" src="<?php echo validate_image($img) ?>"
                                alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">
                                        <?php echo $row['title'] ?>
                                    </h5>
                                    <!-- Product price-->
                                    <?php foreach ($inv as $k => $v): ?>
                                    <span><b>Price: </b>
                                        <?php echo $v ?>
                                    </span>
                                    <?php endforeach; ?>
                                </div>
                                <p class="m-0"><small>By:
                                        <?php echo $row['author'] ?>
                                    </small></p>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center">
                                    <a class="btn btn-flat btn-primary "
                                        href=".?p=view_product&id=<?php echo md5($row['id']) ?>">View</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </section>
        <script>
        var inv = $.parseJSON('<?php echo json_encode($inv) ?>');
        $(function() {
            $('#add-cart').submit(function(e) {
                e.preventDefault();
                if ('<?php echo $_settings->userdata('id') ?>' <= 0) {
                    uni_modal("", "login.php");
                    return false;
                }
                start_loader();
                $.ajax({
                    url: 'classes/Master.php?f=add_to_cart',
                    data: $(this).serialize(),
                    method: 'POST',
                    dataType: "json",
                    error: err => {
                        console.log(err)
                        alert_toast("an error occured", 'error')
                        end_loader()
                    },
                    success: function(resp) {
                        if (typeof resp == 'object' && resp.status == 'success') {
                            $('#cart-count').text(resp.cart_count)
                            window.location.href = './?p=checkout';
                        } else {
                            console.log(resp)
                            alert_toast("an error occured", 'error')
                        }
                        end_loader();
                    }
                })
            })
        })
        </script>