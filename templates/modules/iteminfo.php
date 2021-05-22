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


function get_content(){ ?>

<?php
    $item_title = '';
    $item_text = '';
    $item1 = get_value('item-lamp', 0);
    $item2 = get_value('item-lipgloss', 0);
    $item3 = get_value('item-icebalm', 0);
    $item4 = get_value('item-brush', 0);
    $item5 = get_value('item-brushbh', 0);
    $item6 = get_value('item-brushmask', 0);
    $item7 = get_value('item-bag', 0);
    $item8 = get_value('item-rimmel', 0);

    if($item1){
        $item_title = 'برق لب قرصی';
        $item_text = '';
    }
    if($item2){
        $item_title = 'برق لب لامپی';
        $item_text = '';
    }
    if($item3){
        $item_title = 'بالم لب آبمیوه ای';
        $img_src = 'images/beautyandhealth/balmbastani1.jpg';
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
    }
    if($item4){
        $item_title = 'براش فانتزی 4تیکه';
        $item_text = '';
    }
    if($item5){
        $item_title = 'براش BH Cosmetics';
        $item_text = '';
    }
    if($item6){
        $item_title = 'براش ماسک';
        $item_text = '';
    }
    if($item7){
        $item_title = 'Victoria\'s secret کیف آرایشی';
        $img_src = 'images/compressed/bags2.jpg';
        $item_text = '';
    }
    if($item8){
        $item_title = 'ریمل Hudamoji';
        $price = '60,000 t';
        $categury = 'آرایشی و بهداشتی';
        $img_src = 'images/beautyandhealth/rimmel7.jpg';
        $item_text = '💜لطفا با لبخند ورق بزنيد 💜
        سلام دخترا امروز مي خوام اين ريمل ٢٤ ساعته و ضد آب از برند hudamoji رو معرفي كنم 💜
        بچه ها جدا از طراحي و زيبايي خاص اين ريمل بايد از كيفيتش بگم 💜
        اين ريمل موژه هارو دونه دونه مي كنه مشكي و پر رنگ ميكنه 💜
        و همون طور كه گفتم ضد آب هست 
        و به نسبت قيمت خوبي كه داره عاليه 💜
        
        ....';
    }
?>
				<div class="left2 col-l-1 col-12">
				</div>
				<div class="content2 col-l-9 col-12">

                <?php if($item3): ?>
                <div class="item-holder">
                    <a href="https://kikiq.herokuapp.com/showimages.php?image=13"> 
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
                        نام محصول: -
                        قیمت: -
                        دسته بندی: -
                        رنگ بندی: -
                        تخفیف: -
                    </p>
                </div>
                <?php endif; ?>

                <?php if($item8): ?>
                <div class="item-holder">
                    <a href="https://kikiq.herokuapp.com/showimages.php?image=12"> 
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
                        نام محصول: <?php echo $title; ?>
                        قیمت: <?php echo $price; ?>
                        دسته بندی: <?php $categury; ?>
                        رنگ بندی: -
                        تخفیف: -
                    </p>
                </div>
                <?php endif; ?>
				<div class="right2 col-l-2 col-12">
				</div>
<?php }

function get_style(){ ?>
        <style>
            #showitem{
                width: 300px;
				height: 600px;
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
            .showitem-datails{
                border-right: solid purple 3px;
                border-bottom: solid purple 1px;
            }
            @media only screen and (min-width: 768px){
                #showitem{
                    width: 600px;
                    height: 300px;
                    float: right;

                }
                .item-img{
                    width: 250px;
                    height: 300px;
                    float: right;
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