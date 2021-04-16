<?php
$title = null;

function get_title(){
    global $title;
    $title = 'صفحه کاربری';
    return $title;
}


function get_content(){ ?>

				
				<div class="left2">
				</div>

				<div class="content2">
				<p> این صفحه فقظ به کاربران نمایش داده میشود. </p>
				</div>
				
				<div class="right2">
				</div>
<?php }

function get_style(){ ?>
        <style>
            p
            {
                background-color: gray;
                border-radius: 45;
            }
		</style>
<?php }