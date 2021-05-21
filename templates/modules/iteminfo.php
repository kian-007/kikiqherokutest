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

    $item1 = get_value('item-lamp', 0);
    $item2 = get_value('item-lipgloss', 0);
    $item3 = get_value('item-icebalm', 0);
    $item4 = get_value('item-brush', 0);
    $item5 = get_value('item-brushbh', 0);
    $item6 = get_value('item-brushmask', 0);
    $item7 = get_value('item-bag', 0);
    $item8 = get_value('item-rimmel', 0);

?>
				<div class="left2 col-l-1 col-12">
				</div>
				<div class="content2 col-l-9 col-12">
                <?php if($item8): ?>
                <p id = 'showitem'>
                    <br/>
                    <br/>
                    <span>item8</span> <br/>
                    <span>...</span> <br/>
                    <span>...</span> <br/>
                </p>
                <?php endif; ?>

                <?php if($item2): ?>
                <p id = 'showitem'>
                    <br/>
                    <br/>
                    <span>item2</span> <br/>
                    <span>...</span> <br/>
                    <span>...</span> <br/>
                </p>
                <?php endif; ?>
				<div class="right2 col-l-2 col-12">
				</div>
<?php }

function get_style(){ ?>
        <style>
            #showitem{
				width: 300px;
				height: 200px;
				background-color: orange;
				border: solid red 2px;
				border-radius: 15px;
				color: white;
				font-size: 20pt;
				text-align: center;
				margin-left: 550px;
			}
			#showitem span{
				text-align: left;
				background-color: rgba(255, 255, 255, 0.5);
				border-radius: 25px;
				font-size: 14pt;
                direction: rtl;
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