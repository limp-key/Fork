<!doctype html>
<html>
    <head>
	<title>Fork</title>
	<style>
	 html,body{
	     height:100%;
	     padding:0;
	     margin:0;
	     background: #F1F1F1;
	 }
	 .element{
	     padding-top:20px;
	 }
	 .wrap{
	     width: 600px;
	     margin-left:auto;
	     margin-right:auto;

	 }
	 .wrap > *{
	     padding:20px;
	     background: #fff;
	     box-shadow: 0 0 15px #d3d3d3;
	     margin-bottom:20px;
	 }
	 h2{
	     margin:0;
	     color: grey;
	 }
	 p{
	     color: grey;
	 }
	</style>
    </head>
    <body>
	<div class="element">
	    <div class="wrap">
		<h2>Hello <?php echo $parameters[0]; ?><br>This is test page in the Fork</h2>	
		<p>If you saw this text, then everything works fine</p>
	    </div>
	</div>
    </body>
</html>
