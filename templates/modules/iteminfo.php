<?php

//$price = null;
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
    $item11 = get_value('item-mirror', 0);

    if($item1){
        $goods = get_goods_by_serial_number('104');
		$name = $goods['name'];
		$price = $goods['price'];
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
    }


function get_content(){ ?>

<?php
    $fprice = $GLOBALS["price"];
    global $img_src,$item_title,$item_text,$item_price,$categury,$max,$off;
    $item11 = $_GET['item-mirror'];
//    global $item1,$item11;

    echo $fprice.'a'.'<br/>';
    echo $item11.'<br/>';
    echo $_GET['item-mirror'].'<br/>';

?>
				<div class="left2 col-l-1 col-12">
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
                <form action="#" method="post" style="clear: both; float: right;">
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
                                <button type="submit" name="buy" id="buy">تکمیل خرید</button>
                            </td>
                        </tr>
                    </table>
                </form>
                
                <!-- <pre style="float:right; clear:both;">
                    <?php //print_r($_POST); ?>
                </pre> -->

				<div class="right2 col-l-2 col-12">
				</div>

<?php }


echo $price.'b'.'<br/>';

function process_inputs(){
    global $price;
    if(!isset($_POST['buy'])){
        return;
    }
    if(is_user_logged_in()){
//        require_once ('lib/functions.php');

        echo $price.'c'.'<br/>';

//        $price = str_replace($price, ',', '');
//        echo $price.'d'.'<br/>';
//
//        $price = intval($price."0");
//        echo $price.'e'.'<br/>';

//        $number = intval($_POST['number']);
//        $final_price = ($price*$number);
//        $current_user = get_current_user_data();
//        $phone_number = $current_user['phone_number'];
//
//        $parameters = array(
//            "merchant"=> ZIBAL_MERCHANT_KEY,//required
//            "callbackUrl"=> ZIBAL_CALLBACK_URL,//required
//            "amount"=> $final_price,//required
//            "orderId"=> time(),//optional
//            "mobile"=> $phone_number,//optional for mpg
//        );
//
//        $response = postToZibal('request', $parameters);
//        var_dump($response);
//        if ($response->result == 100)
//        {
//            $startGateWayUrl = "https://gateway.zibal.ir/start/".$response->trackId;
//            header('location: '.$startGateWayUrl);
//        }
//        else{
//            echo "errorCode: ".$response->result."<br>";
//            echo "message: ".$response->message;
//        }


    }else{
        redirect_to(home_url('login'));
    }

}


function get_style(){ ?>
        <style>

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

            $('#add').click(function(){
                $('#bill_table').show(250)

                if($('#bill_table').css('display', 'visible')){
                    var elmnt = document.getElementById("bill_table");
                    elmnt.scrollIntoView(false); // Bottom
                    // if(window.scrollY == 79){
                    //     window.scrollBy(0,70)
                    // }
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
            })
            //---------------------------------------------------------


        })
    </script>
    <script>
        window.scrollBy(0,350);
    </script>

    

<?php }