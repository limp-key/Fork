<!doctype html>
<html>
    <head>
	<title>Exception</title>
	<style>
	 *{
	     box-sizing:border-box;
	 }
	 html,body{
	     margin:0;
	     padding:0;
	     height:100%;
	     width:100%;
	     background:#3b2c2c;
	 }
	 body{
	     padding:20px;
	 }
	 .wrap{
	     height:auto;
	     width:100%;
	     overflow:hidden;
	     margin-bottom:20px;
	 }
	 .wrap > div{
	     width:100%;
	     height:auto;
	     background:white;
	     margin-bottom:50px;
	     border-radius:1px;
	     font-family:Helvetica;
	     color:#3b2c2c;
	     box-shadow:0 0 1px white;
	 }
	 .wrap > div:last-child{
	     margin-bottom:0;
	 }
	 .Exception{
	     padding:20px;
	 }
	 .head{
	     padding:20px;
	     font-size:16px;
	     background:#ffea91;
	 }
	 .tail{
	     padding:20px;
	     font-size:14px;
	 }
	</style>
    </head>
    <body>

	<div class="wrap">
	    <div class="Exception">
		<h2>Fork Exception # <?php echo $Info->getCode() ?><h2>
	    </div>
	    
	    <div class="File">
		<div class="head">
		    Info file and line
		</div>
		<div class="tail">
		    In file <b><?php echo $Info->getFile() ?></b> on line <b><?php echo $Info->getLine() ?></b>
		</div>
	    </div>

	    <div class="Message">
		<div class="head">
		    Info message
		</div>
		<div class="tail">
		    <pre><?php echo $Info->getMessage() ?></pre>
		</div>
	    </div>

	    <div class="TraceAsString">
		<div class="head">
		    Info trace as string
		</div>
		<div class="tail">
		    <pre><?php echo $Info->getTraceAsString() ?></pre>
		</div>
	    </div>

	    <div class="Trace">
		<div class="head">
		    Info trace
		</div>
		<div class="tail">
		    <pre><?php var_dump($Info->getTrace()) ?></pre>
		</div>
	    </div>
	</div>
    </body>
</html>
