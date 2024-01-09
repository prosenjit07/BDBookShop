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
                        <h2 style="color: black;"><mark style="background-color: #add8e6;">✋ Success Feedbacks 😇</mark>
                        </h2>
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
                                            <h3 class="customer-name">সানজিদা, গৃহিণী ⭐⭐⭐⭐⭐</h3>
                                            <p class="customer-address">Mirpur, Dhaka, Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="feedback-text">
                                        <p>
                                            আমি একজন গৃহিণী, দুই বাচ্চার মা। দিনের বেশিরভাগ সময়টাই ঘর-সংসার সামলাতেই
                                            কেটে যায়। নিজের জন্য একটু সময় পাওয়াও দুর্লভ। কিন্তু আমার সবসময়ই একটা
                                            ছোট্ট স্বপ্ন ছিল, কিছু করে নিজের আয় রোজগার করা। কিন্তু কী করব, কীভাবে শুরু
                                            করব, এই নিয়ে দ্বন্দ্বে ছিলাম। একদিন বইমেলায় ঘুরতে গিয়ে চোখ আটকে গেল আপনার
                                            বইটিতে, "দুই সপ্তাহে শিখুন ফেসবুক মার্কেটিং"। শিরোনামটা এত আকর্ষণীয় লাগলো
                                            যে, আর
                                            দেরি করিনি, কিনে ফেললাম। ঘরে ফিরে ছেলেমেয়েরা ঘুমিয়ে পড়ার পর লাইনে লাইনে
                                            পড়তে শুরু করলাম। মনে
                                            হচ্ছে যেন কোনো জাদুকরের ঝুলি থেকে নতুন নতুন সোনা বেরিয়ে আসছে।১৪ দিনের
                                            চেকলিস্টটা এত চমৎকার যে, ধাপে ধাপে ঠিক কী করতে হবে সবুজে বুঝিয়ে দিয়েছে।
                                            ফ্রি কোর্সের লিংকও দিয়েছেন, আর কি চাই! এত সহজ
                                            ভাষায়, এত সুন্দর উদাহরণ দিয়ে অনলাইন ব্যবসা শুরুর পুরো প্রক্রিয়াটা বুঝিয়ে
                                            দিয়েছেন যে, মনে হলো, আমিও তো পারি!

                                            ফেসবুক, ইনস্টাগ্রাম -সব জায়গায় আমার হস্তশিল্পের ছবি দিয়ে পেজ খুললাম।
                                            বইয়ে দেয়া কৌশলগুলো এক এক করে ফলো করলাম। ভাবলাম, হয়তো কেউই আসবে না, হয়তো
                                            চলবে না। কিন্তু না, ম্যাজিক ঘটলো। প্রথমে একজন, দুজন, তারপর ধীরে ধীরে আসতে
                                            শুরু করলো অর্ডার। আমার হাতের তৈরি জিনিসগুলো মানুষ কিনছে, পছন্দ করছে! আনন্দে
                                            চোখে জল এসে যায়।

                                            এখন আমার নিজের অনলাইন দোকান আছে, নাম দিয়েছি "সানজিদার হাতের কাজ"। প্রতিদিন
                                            নতুন নতুন অর্ডারে মনে হয়, স্বপ্ন দেখছি। আমার সংসারে এসেছে নতুন আলো, নতুন
                                            আশা। এই সবই সম্ভব হয়েছে BDBookShopর অসাধারণ বইয়ের জন্য। BDBookShop কে কোটি কোটি
                                            ধন্যবাদ।
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
                                            <h3 class="customer-name">রায়হান, গ্রাফিক ডিজাইনার⭐⭐⭐⭐</h3>
                                            <p class="customer-address">Khulna, Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="feedback-text">
                                        <p>
                                            "আমি একজন ফ্রিল্যান্সার গ্রাফিক ডিজাইনার। আমার কাজের মান ভালো, কিন্তু
                                            ক্লায়েন্ট খুঁজে পেতে খুব সমস্যা হচ্ছিল। আমি অনলাইনে বিভিন্নভাবে ক্লায়েন্ট
                                            খোঁজার চেষ্টা করেছি, কিন্তু খুব একটা সফলতা আসেনি।

                                            আপনার বইয়ে ক্লায়েন্ট আকর্ষণের কৌশলগুলো খুবই কার্যকর। বিশেষ করে, সোশ্যাল
                                            মিডিয়া মার্কেটিংয়ের বিষয়টা খুবই ভালোভাবে বুঝিয়েছেন। আপনার বইয়ের
                                            নির্দেশনা অনুসরণ করে আমি আমার সোশ্যাল মিডিয়া প্রোফাইলগুলোকে আরও আকর্ষণীয়
                                            করে তুলেছি। পাশাপাশি, ক্লায়েন্টদের আগ্রহের বিষয়গুলো বুঝতে পারছি এবং সেই
                                            অনুযায়ী অ্যাড পোস্ট তৈরি করছি।

                                            এর ফলে, আমার অ্যাডগুলো এখন অনেক বেশি আকর্ষণীয় হচ্ছে এবং অনেক বেশি মানুষ
                                            সেগুলো দেখে। ইতিমধ্যেই ৩ জন নতুন ক্লায়েন্ট পেয়েছি এবং আমার আয়ও বেড়েছে।

                                            আপনার বইয়ের আইডিয়া ব্যাংকটাও আমার জন্য খুবই উপকারী। নতুন নতুন কাজের
                                            আইডিয়া পেয়ে আমি নিজেকে আরও উন্নত করতে পারছি। আপনার বইয়ের পরামর্শ অনুসরণ
                                            করে আমি এখন আরও বেশি সফল একজন ফ্রিল্যান্সার গ্রাফিক ডিজাইনার হতে পারছি।"
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
                                            <h3 class="customer-name">মিতা, শিক্ষার্থী ⭐⭐⭐⭐⭐</h3>
                                            <p class="customer-address">Sadar, Chittagong, Bangladesh</p>
                                        </div>
                                    </div>
                                    <div class="feedback-text">
                                        <p>
                                            আমি কলেজে পড়ি, ভবিষ্যৎ নিয়ে চিন্তা হয়, রাতে ঘুম আসে না। চাকরি পাওয়া যাবে
                                            কিনা, নিজের স্বপ্ন পূরণ করতে পারব কিনা, কেমন জীবন হবে... এই একটাই প্রশ্ন
                                            ঘুরপাক খায় মাথায়। একদিন লাইব্রেরিতে ঘাটতে গিয়ে চোখ আটকে গেল আপনার বইয়ে,
                                            "দুই সপ্তাহে শিখুন ফেসবুক মার্কেটিং"। শিরোনামটা এত ইনস্পায়ারিং লাগলো যে, আর
                                            দেরি করিনি, ধার নিয়েই পড়ে ফেললাম।

                                            পড়তে পড়তে আমার চোখ খুলে গেল। বুঝলাম, চাকরির পেছনে না ছুটে নিজের ব্যবসা
                                            শুরু করেই তো আমার মতো অল্প বয়সীরাও স্বাবলম্বী হতে পারি। বইয়ে দেয়া
                                            ইনস্পায়ারিং গল্পগুলো পড়ে মনে হলো, যদি তারা পারে, আমি কেন পারব না? আর
                                            সবথেকে দারুণ, বইয়ে শুরু থেকেই কীভাবে কাজ করতে হবে সেটা এত সুন্দর করে বলা
                                            আছে, মনে হয় আর দেরি করা ঠিক না!

                                            আমি আমার ছবি আঁকা শখকে কাজে লাগানোর সিদ্ধান্ত নিলাম। বইয়ে দেয়া টিপসগুলো
                                            ফলো করে ফেসবুকে একটা পেজ খুললাম, "মিতার ম্যাজিকাল ব্রাশ"। প্রথমে কেউ আসবে
                                            না, হয়তো চলবে না, এই ভয় ছিল। কিন্তু ঠিক আপনার বইয়ে বলা মতো, ধীরে ধীরে
                                            মানুষ আসতে শুরু করলো। আমার আঁকা ছবিগুলো পছন্দ করছে, অর্ডার দিচ্ছে! প্রথম
                                            অর্ডার পেয়েছিলাম যখন, মনে হয়েছিল একটা পাহাড় জয় করেছি।

                                            এখন আমার পেজে রয়েছে নানান রকম ছবি, কার্ড, এমনকি পোস্টারও। প্রতি মাসে একটা
                                            নির্দিষ্ট থিম নিয়ে আঁকি, মানুষ সেটা অপেক্ষা করে। আমার পেজটা এখন শুধু ব্যবসা
                                            নয়, একটা আর্ট কমিউনিটি হয়ে গেছে। এটা সবই সম্ভব হয়েছে BDBookShopর অসাধারণ বইয়ের
                                            জন্য। BDBookShop আমার জীবনে আলো এনেছেন, আত্মবিশ্বাস এনেছেন, ধন্যবাদ।
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <br>
    <!-- 
    শ্যামল, কৃষক 
    আমি একজন কৃষক, দক্ষিণাঞ্চলের গ্রামে জন্ম। আগে থেকে পুরুষানুক্রমে চাষাবাদই
    আমাদের রুটি-রুজির একমাত্র উপায় ছিল। কিন্তু জমি কমে যাওয়া, লাভ কমে যাওয়া,
    আর খরচা বাড়তে থাকায় হালুয়া দিন দেখছিলাম। কৃষি ছেড়ে শহরে গিয়ে শ্রমিক
    মজুর করার চিন্তাই মাথায় ঘুরপাক খেতো।

    একদিন পুকুর পাড়ে বসে আছিলাম, হতাশায় ডুবে। হঠাৎ চোখ পড়লো ছোট্ট ছেলের হাতে
    ধরা একটা বইয়ে, "টাকার গাছ: অনলাইনে কৃষির নতুন দিগন্ত"। শিরোনামটা এত
    আকর্ষণীয় লাগলো যে, ছোট্টুকে জিজ্ঞেস করলাম, কোথা থেকে পেয়েছে। সে বললো,
    পাশের গ্রামের বন্ধুর বাস থেকে এনেছে। বইটা কিনে আনতে বেশ কিছু টাকা লাগলো,
    কিন্তু সেদিনের সেরা সিদ্ধান্ত ছিল সেটা।

    লাইনে লাইনে পড়তে পড়তে মনে হলো, চোখ খুলে গেছে। বইয়ে এত সহজ ভাষায়, এত
    উদাহরণ দিয়ে অনলাইনে কৃষিপণ্য বিক্রির পদ্ধতি বুঝিয়ে দিয়েছেন যে, হতাশা উবে
    গেল, বদলে জাগলো আশা। বুঝলাম, জমি কম হলেও, লাভ কম হলেও, আমিও আমার শস্য সারা
    দেশে বিক্রি করতে পারি!

    ফোনটা স্মার্ট না, তাই ছেলের সাথে মিলে লাপটপে ঘাঁটতে শুরু করলাম। বইয়ে দেয়া
    টিপসগুলো মেনে একটা অনলাইন দোকান খুললাম, নাম দিলাম "শ্যামলের স্বাদ"। প্রথমে
    ক্রেতা আসবে না, ভয় ছিল। কিন্তু ধীরে ধীরে অর্ডার আসতে শুরু করলো। আমাদের
    গ্রামের লেবু, মধু, তেঁতুলের চচ্চি- এসব এখন সারা দেশের মানুষ খাচ্ছে!

    এখন আয় কয়েক গুণ বাড়িয়েছে, ছেলে লাপটপ নিয়ে মার্কেটিং করে, স্ত্রী পণ্য
    প্যাকেজ করে দেয়। আমার ছেলেমেয়েরা ভবিষ্যৎ নিয়ে আর চিন্তিত নেই, তারা জানে
    কৃষিই আমাদের ভরসা। এই সবই সম্ভব হয়েছে আপনার অসাধারণ বইয়ের জন্য। আপনি
    আমাদের জীবন বদলে দিয়েছেন। আপনাকে কোটি কোটি ধন্যবাদ। -->

<!-- 
    মীনা, শিক্ষক:

    "আমি একজন স্কুল শিক্ষক, কিন্তু অনলাইনে শিক্ষামূলক কন্টেন্ট তৈরি করে অতিরিক্ত আয় করার কথা মাথাতেও আসেনি। আপনার বইয়ে
    অনলাইন কোর্স তৈরির প্রক্রিয়া এত সহজ করে বুঝিয়েছেন যে, নিজেই একটা ছোট কোর্স তৈরি করে ফেলেছি। ইউটিউবে আপলোড করার পর
    প্রচুর ভিউ এবং ইতিবাচক কমেন্ট পাচ্ছি। এখন নিজের ইউটিউব চ্যানেলও শুরু করছি, আপনার বই সত্যিই আমার জীবনে নতুন দিগন্ত
    খুলে দিয়েছে।"

    এই তিনজন গ্রাহকের ফিডব্যাক দেখেই বুঝা যায়, আপনার বই কতটা কার্যকরী এবং কীভাবে বিভিন্ন ব্যক্তির অনলাইন ব্যবসা শুরু
    এবং বৃদ্ধিতে সাহায্য করছে। এই ধরনের ফিডব্যাকগুলো আপনার ওয়েবসাইটে প্রকাশ করলে নতুন ক্রেতাদের আকর্ষণ করতে আরও সহায়ক
    হবে। -->
    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <div>
                    <center>
                        <h2 style="color: black;"><mark style="background-color: #add8e6;">📢বইয়ের প্যাকেজটিতে ফ্রি
                                পাচ্ছেনঃ</mark></h2>
                    </center>
                </div>
                <br>
                <!-- <div class="card-deck">
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
        </div> -->

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
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="images/qr.png" class="img-fluid" alt="Product 1 Image">
                                        </div>
                                        <div class="col-md-6">

                                            <h4><span class="Misty-Rose">১৬ টি বিশ্বমানের ভিডিও কোর্স</span></h4>
                                            <p>ভিডিও কোর্সগুলোর বাজার মূল্য প্রায় ১৮ হাজার টাকা। বইটির সাথে ভিডিও
                                                কোর্সগুলো পাচ্ছেন একদম ফ্রি।
                                                শুধু মাত্র কিউয়ার কোর্ড স্ক্যান করেই সরাসরি ভিডিওগুলো দেখতে পাবেন।</p>
                                            <p>অনলাইসে যারা সফল হয়েছেন তাদের মূল্যবান বক্তব্য এবং তাদের সফল হওয়ার কৌশল
                                                পাচ্ছেন ভিডিওগুলোতে।</p>
                                            <p> ভিডিওগুলো আপনাকে সহজে অনলাইনে ব্যবসা দাড় করাতে সাহায্য করবে।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="images/checklist.png" class="img-fluid" alt="Product 1 Image">
                                        </div>
                                        <div class="col-md-6">
                                            <h4><span class="Misty-Rose">চেক লিস্ট</span></h4>
                                            <p>২ সপ্তাহের চেক লিস্ট আপনার ব্যবসাকে গোছালে‍া করবে।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="images/idea bank.jpg" class="img-fluid" alt="Product 1 Image">
                                        </div>
                                        <div class="col-md-6">
                                            <h4><span class="Misty-Rose">আইডিয়া ব্যাংক</span></h4>
                                            <p>আইডিয়া ব্যাংক আপনাকে সহজে এবং অল্পটাকায় ফেসবুকে স্থায়ী ব্যবসা দাড় করতে
                                                ১০০% সাহায্য করবে।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="images/sales.jpg" class="img-fluid" alt="Product 1 Image">
                                        </div>
                                        <div class="col-md-6">
                                            <h4><span class="Misty-Rose">সেলস সীট</span></h4>
                                            <p>২ সপ্তাহের সেলসীট আপনার ব্যবসাকে গোছালে‍া করবে।</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="card mt-5">
            <div class="card-body">
                <p class="card-text">
                <div>
                    <center>
                        <h2 style="color: black;"><mark style="background-color: #add8e6;">🤔কেন বইটি আপনার জীবনের সেরা
                                সিদ্ধান্ত হবে❓</mark></h2>
                    </center>
                </div>
                <br>
                <span class="lite-pink">ব্যবসা-বাণিজ্য সব কিছুই ইতিমধ্যে ডিজিটাল প্ল্যাটফর্মে রূপান্তরিত হয়েছে।</span>
                বিশেষ করে করোনাভাইরাস পরবর্তী পৃথিবীতে অনলাইনে ব্যবসা-বাণিজ্য পরিচালনা অপরিহার্য হয়ে উঠেছে। তাই সামাজিক
                যোগাযোগের মাধ্যমগুলো যেমন-<span class="highlighted-background">ফেসবুক, টুইটার, ইনস্টাগ্রাম, গুগল,
                    লিংকডিন</span> ব্যবহার করে ব্যবসায় বানিজ্য বহুগুণে বেড়ে গেছে।</p>
                <p><span class="lite-pink">সাম্প্রতিক এক রিপোর্ট অনুসারে</span> বাংলাদেশে ফেসবুকের মাধ্যমে অনলাইন
                    ব্যবসায় পরিচালনা করছে বা প্রচেষ্টা চালাচ্ছে <span class="highlighted-background">প্রায় ৫ লক্ষের বেশি
                        ক্ষুদ্র ও নতুন উদ্যোক্তা।</span>
                    হ্যাশট্যাগের দুনিয়াতে পৃথিবীর পরিবর্তনের জন্য একটি টুইট বা পোষ্টই বা ভিডিওই যথেষ্ট। এতে অনেকেই
                    রাতারাতি সফল হচ্ছে। এসব দেখে অনেকে অনুপ্রাণীত হচ্ছে তবে তার চেয়ে বেশি মানুষ হতাশ হচ্ছে ।
                    এমন কথা অনেককেই বলতে শুনি; আমি তো সারাদিনই অনলাইনে থাকি। নিয়মিত পোষ্ট দিচ্ছি, বুষ্ট করছি..শত শত
                    গ্রুপ ও নানা ফোরামে মেম্বার । আমার পণ্যের কোয়ালিটি ভালো, দামও কম তবুও আমার সেল হচ্ছে না। তারা শেষ
                    পর্যন্ত ভাগ্যর দোষ দিচ্ছে..!!
                    অনেক মনীষীরা বলেছেন বেশিরভাগ ব্যর্থ ও হতাশাগ্রস্থ্য মানুষ ভাগ্যকে দোষ দেয় এবং এটা আসেলে তাদের
                    ব্যর্থতা ঢাকার অজুহাত।
                    <span class="lite-pink">বাংলাদেশে ইন্টারনেট ব্যবহার কারির সংখ্যা ১০ কোটির বেশি।</span> যারা
                    ইন্টারনেট ব্যবহার করে তাদের মধ্যে<span class="highlighted-background"> ৮০ শতাংশ মানুষ ফেসবুক ও
                        অন্যান্য সামাজিক</span> মাধ্যম ব্যবহার করে। আর এসকল ব্যবহারকারীদের মধ্যে প্রায় ৮০ শতাংশের বেশি
                    ব্যবহারকরী তরুন । যার অনলাইন বা তথ্য প্রযুক্তি ব্যবহার করে পন্য সামগ্রী ক্রয়ে আগ্রহী বা ইতিবাচক
                    মনোভাবের অধিকারী।
                    এসব তথ্য প্রমান করে বাংলাদেশে অনলাইন ব্যবসার বিশাল বাজার বা সুযোগ আছে। তবুও কেন আমরা সফল হতে
                    পারছিনা?
                    একটি বিষয় মনে রাখতে হবে যে, ব্যবসার সব কিছুই অর্থাৎ সফলতা বা ব্যর্থতা নির্ভর করে কৌশল বা পরিকল্পনা ,
                    অভিজ্ঞতা বা দক্ষতা, প্ররিশ্রম, সময় ও সুযোগ কাজে লাগানোর উপর । সামাজিক মাধ্যমে বা অনলাইন ব্যবসায় তথা
                    ক্রয়-বিক্রয় ইত্যাদি করার ক্ষেত্রে একই ( উপরের) কথা প্রজোয্য।
                    আমরা সকলেই জানি ব্যবসার আয়ের একমাত্র উপায় হল বিক্রয়। বিক্রয় বাড়াতে পারলেই ব্যবসায় সফলতা আসবে। কেন
                    আপনার বইটি পড়ে উপকৃত হবেন, সে সম্পর্কে কয়েকটি কারণ দেয়া হল:
                <ul>
                    <li><b>প্রয়োজন এবং আগ্রহ:</b> অনেকেই অনলাইনে ব্যবসা শুরু করতে আগ্রহী, কিন্তু কোথায় শুরু করবেন তা
                        জানেন না। আপনার বইটি তাদের একটি রোডম্যাপ দিতে পারে এবং তাদের পথ দেখাতে পারে। এটি তাদের
                        প্রযুক্তিগত দক্ষতা উন্নত করতে, একটি লাভজনক ব্যবসা মডেল তৈরি করতে এবং তাদের অনলাইন উপস্থিতি
                        ঠিকভাবে কাজে লাগাতে সাহায্য করতে পারে।</li>
                    <li><b>জ্ঞান এবং দক্ষতা:</b> আপনার বইটি তাদের প্রয়োজনীয় জ্ঞান এবং দক্ষতা সরবরাহ করতে পারে। তারা
                        অনলাইন মার্কেটিং, সামাজিক মিডিয়া, ই-কমার্স, ডিজিটাল বিপণন ইত্যাদি বিষয়ে শিখতে পারে। এই দক্ষতা
                        তাদের ব্যবসা পরিচালনা করা এবং তাদের পণ্য বা পরিষেবা বিক্রি করার ক্ষেত্রে আরও আত্মবিশ্বাসী হতে
                        সাহায্য করবে।
                    </li>
                    <li><b>কেস স্টাডি এবং উদাহরণ:</b> আপনার বইটি সফল অনলাইন ব্যবসার কেস স্টাডি এবং উদাহরণ অন্তর্ভুক্ত
                        করতে পারে। এটি পাঠকদেরকে তাদের প্রচেষ্টাকে অনুসরণ করতে এবং অনুরূপ সাফল্য অর্জন করতে অনুপ্রেরণা
                        দেবে।
                    </li>
                    <li><b>অনুপ্রেরণা এবং উৎসাহিত করা:</b> আপনার বইটি পাঠকদেরকে তাদের লক্ষ্য অর্জনের জন্য অনুপ্রেরণা এবং
                        উৎসাহিত করতে পারে। আপনি অনলাইন ব্যবসার চ্যালেঞ্জ এবং বাধা, পাশাপাশি সাফল্যের গল্পগুলি শেয়ার
                        করতে পারেন।
                    </li>
                    <li><b>সমস্যা সমাধান:</b> আপনার বইটি পাঠকদের জন্য একটি মূল্যবান সম্পদ হতে পারে। এটি তাদের সাধারণ
                        অনলাইন ব্যবসা সমস্যা সমাধানে সাহায্য করতে পারে, যেমন ট্রাফিক আনা, বিক্রয় বাড়ানো এবং গ্রাহক ধরে
                        রাখা।
                    </li>
                </ul>
                </p>
                </p>
            </div>
        </div>
    </div>
    <br>

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