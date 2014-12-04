<html>
<header>
	<title>Sticky Footer</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" />
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css" />

	<script src="https://code.jquery.com/jquery-1.11.1.js"></script>
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<style>
		/*hide checkbox and radio buttons*/
		input[type=checkbox], 
		input[type=radio] {
			width: 2em;
			margin: 0;
			padding: 0;
			font-size: 1em;
			opacity: 0; /*This is the part tht actually hides it*/
		}

		/*normalize the spacing*/
		input[type=checkbox] + label,
		input[type=radio] + label {
			display: inline-block;
			margin-left: -2em;
			line-height: 1.5em;
		}

		/*unchecked css*/
		input[type=checkbox] + label > span,
		input[type=radio] + label > span {
			display: inline-block;
			background-color: #D5E1ED;
			width: 35px;
			height: 35px;
			border-radius: 30px;
		}

		/*selected checkbox css*/
		input[type=checkbox]:checked + label > span > span {
			/*content: 'x'*/;
			display: block;
			width: 35px;
			height: 35px;
			/*color: red;
			font-size: 1em;
			line-height: 1em;*/
			background-image: url('img/checked.jpg');
		}

		/*selected radio css*/
		input[type=radio]:checked + label > span > span {
			display: block;
			width: 35px;
			height: 35px;
			background-image: url('img/checked.jpg');
			background-repeat: no-repeat;
		}


/*****CUSTOM INPUT CSS******/
.blue-textbox {
	background-color: #D5E1ED;
	font-size: 17px;
	font-weight: bold;
	border-radius: 0px;
	border: none;
	/*webkit-box-shadow: none;*/
	box-shadow: none;
}
.blue-textbox:focus {
	border: none;
	/*webkit-box-shadow: none;*/
	box-shadow: none;
}

/*hide checkbox and radio buttons*/
input[type=checkbox].blue-input, 
input[type=radio].blue-input {
	width: 35px;
	height: 35px;
	margin: 0;
	padding: 0;
	font-size: 1em;
	opacity: 0; /*This is the part tht actually hides it*/
	z-index: 1;
}
/*This makes the input overlap the image*/
input[type=checkbox].blue-input {
	margin-left: -35px;
	margin-right: 0px;
}
.checkbox-label {
	width: 35px;
	height: 35px;
	margin-bottom: 0;
}
input[type=radio].blue-input {
	margin-left: 0px !important;
}
/*normalize the spacing*/
input[type=checkbox].blue-input + label,
input[type=radio].blue-input + label {
	display: inline-block;
	margin-left: -20px;
	line-height: 1.5em;
}
/*unchecked css*/
input[type=checkbox].blue-input + label > span,
input[type=radio].blue-input + label > span {
	display: inline-block;
	background-color: #D5E1ED;
	width: 35px;
	height: 35px;
	border-radius: 30px;
}
input[type=radio].blue-input + label > span {
	margin-right: 10px;
}
.blue-input:checked + label > span > span {
	display: block;
	width: 35px;
	height: 35px;
	background-image: url('/content/img/checked.jpg');
	background-repeat: no-repeat;
}
.radio-check-text {
	display: inline;
	position: absolute;
	margin-top: 7px;
	z-index: -1;
}
input[type=checkbox].blue-input:checked .radio-check-text{
	font-weight: bold;
}
input[type=checkbox].blue-input:hover , 
input[type=radio].blue-input:hover {
	cursor: pointer;
}
	</style>
</header>
<body>
	<div>
		<input id="check1" type="checkbox" name="check1" value="check1" />
		<label for="check1"><span><span></span></span>Value</label>
	</div>
	<div>
		<input id="radio1" type="radio" name="radio" value="radio1" />
		<label for="radio1"><span><span></span></span>Radio1</label>
	</div>
	<div>
		<input id="radio2" type="radio" name="radio" value="radio2" />
		<label for="radio2"><span><span></span></span>Radio2</label>
	</div>
</body>
</html>