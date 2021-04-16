<?php

function get_title(){
    return 'صفحه کاربری';
}

function get_content(){ ?>

				
				<div class="left2">
				</div>

				<div class="content2">
                    			<div>
				        	<p id ='p1'> این صفحه فقظ به کاربران نمایش داده میشود. </p>
                    			</div>
				</div>
				
				<div class="right2">
				</div>
<?php }

function get_style(){ ?>
    <style>
        #p1
        {
            background-color: gray;
            height: 25px;
	    border-radius: 35px;
        }
    </style>
<?php }

function css_link(){ ?>

<link type="text/css"	rel="stylesheet"	href="index.css" />
<link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }
