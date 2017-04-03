<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link href="jquery.flowchart.css" rel="stylesheet" type="text/css">
    <style>
      body { background-color:#fafafa;}
      .container { margin:150px auto;}
      .demo {
        height: 300px;
        margin-bottom: 10px;
      }

</style>
		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				color: #B0BEC5;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: middle;
			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
			}
		</style>
	</head>
	<body>

        <a href="">Link</a>
        <div class="container">
			<div class="content">
				<div class="title">Laravel 5</div>
				<div class="quote">{{ Inspiring::quote() }}</div>
			</div>
		</div>
        <button type="button">Create operator</button>
        <script src="{{asset('jquery/jquery-3.2.0.min.js')}}"></script>
        <script>
            $('.title').append(' & jquery included');
            $(document).ready(function() {
                $("a").click(function() {
                    alert("Hello jQuery!");
             });
            });


        </script>
        
       <script type="text/javascript" language="javascript">
    $(document).ready(function() {
        $("#btnShow").click(function(e) {
            $('#dialog').dialog("open");
        });
        $('#dialog').dialog({
            title: "Sample dialog",
            resizable: false,
            autoOpen: false,
            width: 400,
            height: 300,
            buttons: [{ text: "OK", click: function() { /* do something */ } },
                { text: "Cancel", click: function() { $(this).dialog("close") } }]
        });
        $('#divText1').draggable({
            containment: "parent",
            cursor: "move"
        }).resizable({
            containment: "parent",
            handles: "e, w"
        });
    });
</script>

    <input id="btnShow" type="button" value="Show" />

    <div id="dialog" title="Dialog Box" style="border: solid 1px black; margin: 0px 0px 0px 0px; padding: 5px 0px 0px 5x;">
        <div id="divText1" style="width: 200px; height: 30px;">
            <input type="text" style="width: 98%;" value="Hello world!" /><br /><br />
        </div>
    </div>
		
	
	</body>
</html>
