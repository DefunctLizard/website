<!doctype html>
<html lang="en">
    <head>
	<meta charset="UTF-8">
	<link rel="icon" href="/icon.svg">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Grant Handy">
        <meta name="description" content="Main page Grant Handy's personal website.">
        <title>Grant Handy's Website</title>
    </head>
    <body>
        <div class="container">
        	<h2 align="center">Software Reccomendations</h2>
		<hr>	
		<div class="footer">
			<div>
				<a href="/">&larr; BACK</a>
			</div>
			
			<div>
				&copy; <?php echo date("Y"); ?>
			</div>

			<div></div>
		</div>
        </div>
    </body>
    <head>
        <style type="text/css">
	* {
	    -webkit-box-sizing: border-box;
	    -moz-box-sizing: border-box;
	    box-sizing: border-box;
	}
	body {
		margin: 0;
		font-family: 'equity_text_a', serif;
		font-size: 1em;
		line-height: 1.428em;
		color: #1e1e1e;
		-webkit-background-size: cover;
		background-color: #0055A4;
	  	background-size: cover;
	  	background-attachment: fixed;
		padding: 60px;
	  	min-height: 100vh;
	}
	h2 {
	    text-align: center;
	}
	.container {
	    width: 90%;
	    margin: 1% auto;
	    background: white;
	    border-radius: 3px;
	    padding: 50px; 25px;
	    text-align: left;
	}

	.footer {
		display: flex;
		flex-direction: row;
		justify-content: space-between;
		padding: 0px;	    
	}


/* *********************************
 *    Generic FlexBox Styling      *
 **********************************/
	.flexContainer {
	    display: flex;
	}
	.flexItem {
	    flex: 1;
	}
	.flexStart {
	    justify-content: flex-start;
	}
	.flexCenter {
	    justify-content: center;
	}
	.flexEnd {
	    justify-content: flex-end;
	}
	.flexWrap {
	    flex-wrap: wrap;
	}
	.itemCenter {
	    align-items: center;
	}
	.flexColumn {
	    flex-direction: column;
	}
	.flexSpaceBetween {
	    justify-content: space-between;
	}
	.flexSpaceAround {
	    justify-content: space-around;
	}

	@media (max-width: 650px) {
		body {
			margin: 0;
			font-size: 1em;
			line-height: 1.428em;
			color: #1e1e1e;
			-webkit-background-size: cover;
  			background-size: cover;
  			background-attachment: fixed;
			padding: 0px;
  			min-height: 100vh;
		}
		.container {
		    	width: 95%;
		    	margin: 10px auto;
		    	background: white;
		    	border-radius: 8px;
	    		padding: 50px; 25px;
	    		text-align: left;	
		}
	}

@font-face {
font-family: equity_text_a;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_a_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_a;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_a;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_a_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_a_bold_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_b;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_b_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_text_b;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_bold_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_italic.woff') format('woff');
}
@font-face {
font-family: equity_text_b;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_b_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_text_b_bold_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_text_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_a;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_a_bold_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_a_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_bold.woff') format('woff');
}
@font-face {
font-family: equity_caps_b;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_italic;
font-style: normal;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_italic;
font-style: italic;
font-weight: normal;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold_italic;
font-style: normal;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
@font-face {
font-family: equity_caps_b_bold_italic;
font-style: italic;
font-weight: bold;
font-stretch: normal;
src: url('/core/woffs/equity_caps_b_regular.woff') format('woff');
}
	</style>
    </body>
</html>
