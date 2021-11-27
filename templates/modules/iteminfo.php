<?php


$title = null;

function get_value($para, $default){
    if(isset($_GET[$para])){
        $value = $_GET[$para];
    }else{
        $value = $default;
    }
    return $value;
}

function get_title(){
    return 'iteminfo';
}



    #beauty
    $item1 = get_value('item-lamp', 0);
    $item2 = get_value('item-lipgloss', 0);
    $item3 = get_value('item-icebalm', 0);
    $item4 = get_value('item-brush', 0);
    $item5 = get_value('item-brushbh', 0);
    $item6 = get_value('item-brushmask', 0);
    $item7 = get_value('item-bag', 0);
    $item8 = get_value('item-rimmel', 0);
    #skin
    $item9 = get_value('item-handcream', 0);
    $item10 = get_value('item-facebrush', 0);
    #fantasy
    $item11 = get_value('item-mirror', 0);

    $_POST['item1'] = $item1;
    $_POST['item2'] = $item2;
    $_POST['item3'] = $item3;
    $_POST['item4'] = $item4;
    $_POST['item5'] = $item5;
    $_POST['item6'] = $item6;
    $_POST['item7'] = $item7;
    $_POST['item8'] = $item8;
    $_POST['item9'] = $item9;
    $_POST['item10'] = $item10;
    $_POST['item11'] = $item11;

    if($item1){
        $goods = get_goods_by_serial_number('104');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/lamp3.jpg';
        $max = 5;
        $item_text = '💜لطفا با لبخند ورق بزنيد💜
        ليپ گلاس هاي لامپي حرارتي آورديم 💜
        توي ٦ رنگ زيبا 💜
        اين ليپ گلاس ها حرارتي هستند و با توجه به حرارت بدنتون رنگشون كم و زياد ميشه 💜
        يه شاين خوشگل هم به لبا ميده 💜
        رنگ شاين و خود بدنه متفاوته اما رنگي كه به لب ميدن يكسان هست 💜
        كيفيت بسيار بالاااا 💜
        ٠٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item2){
        $goods = get_goods_by_serial_number('105');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/capsul5.jpg';
        $max = 6;
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        سلام دوستاي گلم با اولين پست و محصول ١٤٠٠ همراهتون هستيم 💜
        برق لب حرارتي مدل قرصي براتون شارژ كرديم 💜
        بچه ها اينا بوشون و اسانس هاشون فرق ميكنه اما رنگشون يكيه 💜
        توي ٦ اسانس مختلف شارژ كرديم 💜
        كيفت ++A هست 💜
        خودتون هر مدلي كه خواستين و انتخاب كنين 💜
        
        ٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item3){
        $goods = get_goods_by_serial_number('106');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/balmbastani1.jpg';
        $max = 6;
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        سلام دوستاي گلم 💜
        بالاخره بالم لب آبميوه اي پر طرفدار شارژ شد 💜
        بچه ها اين بالم لب ها به جز كيفيت و تنوع بالايي كه دارن خيلي خيلي خوش بو هستن 💜
        ٦ تا اسانس دارن :
        سيب ، توتفرنگي ، انگور ، پرتقال ، هلو ، انار 💜
        مي تونين هر كدوم كه دوست دارين انتخاب كنيد 💜
        خواص بالم لب : 
        بالم لب ها بي رنگ هستن اما به مرور زمان كه استفاده ميكنين رنگ خود لبتون رو خوش رنگ تر ميكنن علاوه بر اينكه از خشكي لب جلو گيري ميكنن خاصيت آبرساني و مرطوب كنندگي دارن 💜
        ميتونين بالم لب رو از توي روتين پوستي استفاده كنيد يا قبل از رژ لب زدت 💜
        
        ٠٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item4){
        $goods = get_goods_by_serial_number('108');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];
        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/bbrushes.jpg';
        $max = 4;
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        براش هاي مدل پري دريايي 💜
        ٤تيكه و با كيفيت 💜
        بدون ريزش و تراكم بالا 💜
        طرحشو خودتون ميتونيد انتخاب كنيد 💜
        ••••';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item5){
        $goods = get_goods_by_serial_number('109');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/cobrush2.jpg';
        $max = 0;
        $item_text = 'لطفا با لبخند ورق بزنيد 💜
        سلام دوستاي عزيزم 💜
        بالاخره پست براش هاي قشنگمون رو گذاشتم 💜
        دخنوا اين براش ها از برند Bh cosmetics هست همون طور كه ميدونين براش هاي اين برند به كيفيت عاليشون معروف هستن 
        اين براش ها ١٣ تيكه داره 💜
        براي آرايش حرفه اي هم حتي استفاده ميشه چون همه براش هاي كاربردي رو داره 💜
        توي شيك ترين رنگ (سفيد) شارژ شده 💜
        تراكم مو ها بسيار بالاس💜
        ريزش مو اصلا نداره 💜
        كيفيت عالي 💜
        قيمتش خيلي خوبه واقعا با بقيه پيج ها مقايسه كنيد 💜
        ';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item6){
        $goods = get_goods_by_serial_number('110');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/brushm7.jpg';
        $max = 5;
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        براش هاي سيليكوني مخصوص ماسك 💜
        توي ٣ رنگ شارژ شده 💜
        كيفيت خيلي بالاس💜
        هر دختري يدونه از اين براش ها براي ماسك نياز داره 💜
        ٠٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item7){
        $goods = get_goods_by_serial_number('103');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/compressed/bags2.jpg';
        $max = 4;
        $item_text = '';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item8){
        $goods = get_goods_by_serial_number('107');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/rimmel7.jpg';
        $max = 20;
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        سلام دخترا امروز مي خوام اين ريمل ٢٤ ساعته و ضد آب از برند hudamoji رو معرفي كنم 💜
        بچه ها جدا از طراحي و زيبايي خاص اين ريمل بايد از كيفيتش بگم 💜
        اين ريمل موژه هارو دونه دونه مي كنه مشكي و پر رنگ ميكنه 💜
        و همون طور كه گفتم ضد آب هست 
        و به نسبت قيمت خوبي كه داره عاليه 💜
        
        ....';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item9){
        $goods = get_goods_by_serial_number('101');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'پوست';
        $img_src = 'images/skin/mrtb55.jpg';
        $max = 10;
        $item_text = 'لطفا با لبخند ورق بزنيد 💜
        كرم دست مرطوب كننده براتون آورديم 💜
        مرطوب‌کننده پوست💜
        نرم کننده پوست💜
         بدون چربی اضافی💜
         آبرسانی قوی💜
         روشن کننده پوست💜
        با اسید میوه و آنتی اکسیدان💜
        پرکننده بافت پوست دست ها ضد خشکی💜
        ضد ترک پوست💜
        لطیف کننده پوست دست💜
        هم دونه اي داريم هم به صورت پك ٥ تايي 💜
        
        ٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item10){
        $goods = get_goods_by_serial_number('102');
		$name = $goods['name'];
		$price = $goods['price'];
        $_POST['price'] = $price;
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'پوست';
        $img_src = 'images/skin/facebrush1.jpg';
        $max = 3;
        $item_text = '💜لطفا با لبخند ورق بزنيد💜
        دخترا به درخواست خودتون فيس براش دستي آورديم 💜
        طرح هلوگرامي تازه 😍💜
        توي ٣ رنگ موجود هست كه مي تونين رنگش رو انتخاب كنين 💜
        براش ها كاملا نرم هستن و با بالاترين كيفت 💜
        تازه ٢ طرفه هست طرف ديگش براش سيليكوني داره كه مخصوص منافز باز صورته 💜
        ٠٠٠';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }
    if($item11){
        $goods = get_goods_by_serial_number('100');
		$name = $goods['name'];
		$price = $goods['price'];
		$off = $goods['off'];
		$serial_number = $goods['serial_number'];

        $item_title = "$name";
        $item_price = "$price تومان";
        $categury = 'فانتزی';
        $img_src = 'images/fantasy/mir6.jpg';
        $max = 12;
        $item_text = '💜لطفا با لبخند ورق بزنيد
        آينه هاي طرح دار خوشگلمون رسيد 💜
        دو طرفه هست يكي آينه معمولي و يك طرف هم بزرگ تر ميكنه 💜 
        طرح هاش خيلي متنوع هست و ميتونيد هر كدون رو كه خواستيد سفارش بديد 💜 
        مناسب براي كيف لوازم آرايش 💜 
        ••••';
        $_POST['price'] = $price;
        $_POST['off'] = $off;
        $_POST['serial_number'] = $serial_number;
        $_POST['item_title'] = $item_title;
        $_POST['item_price'] = $item_price;
        $_POST['categury'] = $categury;
        $_POST['img_src'] = $img_src;
        $_POST['max'] = $max;
        $_POST['item_text'] = $item_text;
    }


function get_content($price = null){ ?>

<?php

//    global $img_src,$item_title,$item_text,$item_price,$categury,$max,$price,$off;
//    global $item1,$item2,$item3,$item4,$item5,$item6,$item7,$item8,$item9,$item10,$item11;
    $price = $_POST['price'];
    $img_src = $_POST['img_src'];
    $item_title = $_POST['item_title'];
    $item_text = $_POST['item_text'];
    $item_price = $_POST['item_price'];
    $categury = $_POST['categury'];
    $max = $_POST['max'];
    $off = $_POST['off'];
    $item1 = $_POST['item1'];
    $item2 = $_POST['item2'];
    $item3 = $_POST['item3'];
    $item4 = $_POST['item4'];
    $item5 = $_POST['item5'];
    $item6 = $_POST['item6'];
    $item7 = $_POST['item7'];
    $item8 = $_POST['item8'];
    $item9 = $_POST['item9'];
    $item10 = $_POST['item10'];
    $item11 = $_POST['item11'];

?>
<div class="left2 col-l-1 col-12" xmlns="http://www.w3.org/1999/html">
				</div>
				<div class="content2 col-l-9 col-12">


                <?php if($item1): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=14">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item1</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>
                    <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>
                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item2): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=15">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item2</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item3): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=13">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item3</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item4): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=16">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item4</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item5): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=17">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item5</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item6): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=18">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item6</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item7): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=22">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item6</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item8): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=12">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item8</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item9): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=19">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item9</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item10): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=20">
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item10</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>

                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px; ">اضافه کردن</button>

                    <br/>

                </div>
                <?php endif; ?>

                <?php if($item11): ?>
                <div class="item-holder">
                    <a href="http://kikiq.herokuapp.com/showimages.php?image=21"> 
                        <img class="item-img" src="<?php echo $img_src; ?>" />
                    </a>
                    <p id = 'showitem'><?php echo $item_title; ?>
                        <br/>
                        <br/>
                        <span>item11</span> <br/>
                        <span><?php echo $item_text; ?></span> <br/>
                        <span>...</span> <br/>
                    </p>
                    <p class="showitem-details">
                        <span><b>نام محصول:</b> <?php echo $item_title; ?> </span> <br/>
                        <span id="price"><b>قیمت: </b><?php echo $item_price; ?></span> <br/>
                        <span><b>دسته بندی:</b> <?php echo $categury; ?> </span> <br/>
                        <span><b>موجود در انبار:</b> <?php echo $max==0 ? 'ناموجود' : 'موجود'; ?></span> <br/>
                        <span><b>رنگ بندی:</b> - </span> <br/>
                        <span><b>تخفیف:</b> - </span> <br/>
                    </p>
                    
                        <button  name="add" id="add" type="submit"  style="float:right; clear:both; margin-right: 50px;" >اضافه کردن</button>
                    
                    <br/>
                    
                </div>

                <?php endif; ?>

                <br/>
                <br/>
                <form id="number_form" action="" method="post" style="clear: both; float: right;">
                    <table id="bill_table">
                        <tr style="background-color:orange; color:white;">
                            <th>
                                <span>نام محصول</span>
                            </th>
                            <th>
                                <span>تعداد</span>
                            </th>
                            <th>
                                <span>قیمت کل</span>
                            </th>
                            <th> 
                                <span>کد تخفیف</span>
                            </th>
                            <th>

                            </th>
                        </tr>
                        <tr style="background-color:dodgerblue">
                            <td>
                                <span><?php echo $item_title; ?></span>
                            </td>
                            <td>
                                <input onkeyup="cal_price()" type="number" id="number" name="number" min="1" max="<?php echo $max; ?>" value="<?php echo $_POST['number']; ?>"/>
                            </td>
                            <td>
                                <span id="f_price"><?php echo $item_price; ?></span>
                            </td>
                            <td>
                                <span><?php echo $off; ?></span>
                            </td>
                            <td>
                                <button type="submit" name="buy" id="buy">ادامه فرایند خرید</button>
                            </td>
                        </tr>
                    </table>
                </form>
                <br>
                <br>


                <form id="address_form" action="#" method="post">
                    <div id="address">
                        <div>
                            <h2>اطلاعات آدرس خود را وارد کنید</h2>
                            <details>
                                <summary>
                                    * راهنما !
                                </summary>
                                لطفا مارا برای هرچه سریع تر رساندن کالای خریداری شده به دستتان یاری کرده
                                آدرس خود را دقیق و با وسواس وارد کنید :)
                            </details>
                        </div>
                        <br>
                        <br>
                        <br>
                        <?php $current_user = get_current_user_data(); ?>
                        <label for="postal_code">کد پستی خود را اینجا وارد کنید</label>
                        <input type="text" name="postal_code" id="postal_code" placeholder="کد پستی" value="<?php echo $current_user['postal_code']; ?>" />
                        <br>
                        <br>
                        <label for="address">آدرس خود را اینجا وارد کنید</label>
                        <textarea name="address" placeholder="آدرس" style="width: 85%; min-height: 150px" ><?php echo $current_user['address']; ?></textarea>
                        <br>
                        <button type="submit" name="final_level" id="final_level">تکمیل خرید</button>
                    </div>
                </form>

                <!-- <pre style="float:right; clear:both;">
                    <?php //print_r($_POST); ?>
                </pre> -->

				<div class="right2 col-l-2 col-12">
				</div>



<?php }



function process_inputs(){
    echo '<pre>';
    var_dump($_POST); echo '<br>';
    echo '</pre>';
    $price = $_POST['price'];
    $item_title = $_POST['item_title'];

    if(!isset($_POST['final_level'])){
        return;
    }

    if(is_user_logged_in()){
        require_once ('lib/functions.php');

        //------add address to database-----
        $postal_code = $_POST['postal_code'];
        $address = $_POST['address'];
        $current_user = get_current_user_data();
        $current_user['postal_code'] = $postal_code;
        $current_user['address'] = $address;
        $flag = 1;
        update_user($current_user,$flag);
        //----------------------------------

        $price = str_replace(',', '', $price);
        $price = intval($price."0");

        $number = intval($_POST['number']);
        $final_price = ($price*$number);
        $current_user = get_current_user_data();
        $phone_number = $current_user['phone_number'];

        $parameters = array(
            "merchant"=> ZIBAL_MERCHANT_KEY,//required
            "callbackUrl"=> ZIBAL_CALLBACK_URL,//required
            "amount"=> $final_price,//required
            "orderId"=> time(),//optional
            "mobile"=> $phone_number,//optional for mpg
            "description"=> $item_title,
        );

        $response = postToZibal('request', $parameters);
        var_dump($response);
        if ($response->result == 100)
        {
            $startGateWayUrl = "https://gateway.zibal.ir/start/".$response->trackId;
            header('location: '.$startGateWayUrl);
        }
        else{
            echo "errorCode: ".$response->result."<br>";
            echo "message: ".$response->message;
        }


    }else{
        add_message('برای ادامه فرایند خرید ورود یا ثبت نام شما لازم است!', 'error');
        redirect_to(home_url('login'));
    }

}


function get_style(){ ?>
        <style>
            #address_form{
                clear: both;
                float: right;
                margin-right: 50px;
                width: 85%;
                height: auto;
                text-align: right;
                direction: rtl;
                background-color: deepskyblue;
                border-radius: 25px;
            }
            #address{
                width: 100%;
                height: auto;
                display: none;
                text-align: right;
                direction: rtl;
                background-color: deepskyblue;
                border-radius: 25px;
                transition: visibility 2s;
            }

            details{
             background-color: deeppink;
             color: white;
             border-radius: 25px;
             width: 90%;
             height: 40px;
             margin-right: 5px;
            }
            summary{
                color: white;
                margin-right: 10px;
            }
            summary:hover{color: #666666;}
            details:hover{
                background-color: hotpink;
            }

            #address input{
                text-align: right;
                direction: rtl;
                border-radius: 15px;
                margin-right: 13px;
            }
            #address textarea{
                text-align: right;
                direction: rtl;
                border-radius: 15px;
                margin-right: 13px;
            }

            @media only screen and (max-width:768px){
                #address_form{
                    clear: both;
                    float: right;
                    margin-right: 50px;
                    margin-top: 150px;
                    width: 85%;
                    height: auto;
                    text-align: right;
                    direction: rtl;
                    background-color: deepskyblue;
                    border-radius: 25px;
                }
                details{
                     background-color: deeppink;
                     color: white;
                     border-radius: 25px;
                     width: 90%;
                     height: auto;
                     line-height: 80%;
                     margin-right: 5px;
                }
                #final_level{
                    margin-right: 70px;
                }
                #buy{
                    margin-right: 70px;
                }
            }

            #bill_table{
                clear: both;
                float: right;
                margin-top: 25px;
                margin-right: 50px;
                text-align: right;
                direction: rtl;
                border: 1px solid black;
                display: none;
            }

            #bill_table th,td{
                border: 1px solid black;
                min-width: 70px;
            }

            #showitem{
                width: 300px;
				height: auto;
				background-color: orange;
				border: solid red 2px;
				border-radius: 15px;
				color: white;
				font-size: 20pt;
                font-family: Sahel, Shabnam;
				text-align: center;
				margin-left: 50px;
			}
			#showitem span{
				text-align: left;
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 25px;
				font-size: 14pt;
                direction: rtl;
			}
            .item-img{
                width: auto;
                height: 200px;
                margin: 20px;
                margin-left: 95px;
            }
            .showitem-details{
                width: 300px;
				height: auto;
                border-right: solid purple 3px;
                border-bottom: solid gray 1px;
                clear: both;
                float: right;
                margin-right: 50px;
                text-align: right;
                direction: rtl;
            }
            .showitem-details span{
				font-size: 14pt;
                direction: rtl;
			}
            @media only screen and (min-width: 768px){
                #showitem{
                    width: 600px;
                    height: auto;
                    float: right;

                }
                .item-img{
                    width: 250px;
                    height: 300px;
                    float: right;
                }
                .showitem-details{
                    margin-right: 25px;
                }

            }
			button{
				margin-top: 10px;
				border-radius: 30px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
				color: pink;
				transition: background-color 1s;
				cursor: pointer;
			}
			button:hover {
                background-color: rgb(202, 67, 168);
            }
			.input{
				opacity: 0.7;
				border-radius: 30px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -4px -4px 7px rgba(255, 255, 255, 0.5), 6px 6px 7px rgba(0, 0, 0, 0.5);
                color: black;
			}
			fieldset
			{
				position: relative;
				right: 25px;
				background: linear-gradient(to top right, #cc208e , #6713d2);
				box-shadow: -6px -6px 7px rgb(255, 255, 255), 6px 10px 7px rgba(0, 0, 0, 0.8);
				border-radius: 25px;
			}
			form
			{
				width: 200px;
				height: 120px;
			}
			.ulmenue > li:nth-child(6)
			{
				background-image: url('images/threeline3.jpg');
				background-size: 45px 41px;
				background-repeat: no-repeat;
				background-position: 85px 4px;
				text-align: left;
			}
			.ulmenue > li:nth-child(6) span
			{
				line-height: 2.5;
				position: relative;
				left: 22px;
				top: 3px;
			}
			h2
			{
				margin-left: 150px;
			}

			@meida only screen and (orientation: landscape) {
				h2
				{
					margin-left: 450px;
				}
			}

			@-webkit-keyframes a7 {
			    from{
			        display: inline-block;
                    position:relative;
                    top: 400px;
			    }
			    to{
			        top: 0px;
			    }
			}
		</style>
<?php }

function css_link(){ ?>

	<link type="text/css"	rel="stylesheet"	href="index.css" />
	<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }

function get_script(){ ?>

    <script src="jquery-3.5.1.min.js"></script>
    <script>
        $.noConflict()
		jQuery(document).ready(function($){

            var main_price = $('#price').text()
            main_price = main_price.replace(" تومان", "")
            main_price = main_price.replace("قیمت: ", "")
            main_price = main_price.replace(",", "")
            main_price = (main_price*1)

            var num = $('#number').val()
            num = (1*num)

            var final_price = 0

            var test = 0
            $('#add').click(function(){
                $('#bill_table').css('display', 'inline-block')

                test = test + 1
                 if(test<2){
                    scrollBy(0,350)
                 }

                num = num + 1
                $('#number').val(num)

                if(num > 1){
                    final_price = main_price * num
                    final_price = final_price + " تومان"
                    $('#f_price').text(final_price)
                }
            })

            $('#number').click(function (){
                num = $('#number').val()
                num = (1*num)

                final_price = main_price * num
                final_price = final_price + " تومان"
                $('#f_price').text(final_price)

                var elmnt = document.getElementById("address");
                elmnt.scrollIntoView(false); // Bottom
            })

            //-------------------------------------------------------
            //--------------------------AJAX-------------------------

            $('#number').keyup(function(){
                num = $('#number').val()
                num = (1*num)

                $.post("calc.php",{ mainprice: main_price, num: num}, function(data, status, xhr) {
                    if (status == "success"){
                        $('#f_price').text(data)
                    }
                })
                <?php $module = get_module_name(); ?>
                $.post('https://kikiq.herokuapp.com/iteminfo?item-lamp=1',$('#number_form'))
            })
            //---------------------------------------------------------
            var test2 = 0
            $('#buy').click(function(event){
                event.preventDefault()

                test2 = test2 + 1
                 if(test2<2){
                    scrollBy(0,350)
                 }


                <?php
                 if(!is_user_logged_in()){
                     $login_url = home_url('login');
                     echo "window.location.href=\"$login_url\"";
                 }
                ?>

                $('#address_form').css('-webkit-animation', 'a7 3s')

                $('#address').css('display', 'inline-block')

            })



        })
    </script>
    <script>

        window.scrollBy(0,350);


    </script>

    

<?php }