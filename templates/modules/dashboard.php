<?php

function authentication_required(){
	return true;
}

function get_title(){
    return 'صفحه کاربری';
}

function get_content(){ ?>

				
				<div class="left2 col-l-1 col-12">
				</div>

				<div class="content2 col-l-9 col-12 clearfix">
                    			<div>
				        	<p id ='p1'> این صفحه فقظ به کاربران نمایش داده میشود. </p>
                    			</div>
				</div>
				
				<div class="right2 col-l-2 col-12">
				</div>
<?php }

function get_style(){ ?>
    <style>
        #p1
        {
            margin-top: 100px;
            background-color: gray;
            height: 25px;
	        border-radius: 35px;
	        text-align: right;
        }
    </style>
<?php }

function css_link(){ ?>

<link type="text/css"	rel="stylesheet"	href="index.css" />
<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }