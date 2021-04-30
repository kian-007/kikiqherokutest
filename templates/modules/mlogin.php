<?php
function get_title(){
    return 'ورود به صفحه کاربری';
}

function get_content(){ ?>
	<p>This is a Test</p>
<?php }

function get_style(){ ?>
    <style>
          p{
              background-color: yellow;
              width: 100px;
              height: 100px;
          }
    </style>
<?php }

function css_link(){ ?>
    <link type="text/css"	rel="stylesheet"	href="index.css" />
    <link type="text/css"	rel="stylesheet"	href="index3.css" />

<?php }