<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Sortable</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">
<script src="{{ URL::asset('public/js/script.js') }}"></script>

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="draggable1">
    <ul id="sortable1" class="connectedSortable">
  <li class="ui-state-default draggable">Page 1</li>
  <li class="ui-state-default draggable">Page 2</li>
  <li class="ui-state-default draggable">Page 3</li>
  <li class="ui-state-default draggable">Page 4</li>
  <li class="ui-state-default draggable">Page 5</li>
</ul>
</div>
<div class="draggable2">
    <ul id="sortable2" class="connectedSortable">
  <li class="ui-state-default draggable">Category 1</li>
  <li class="ui-state-default draggable">Category 2</li>
  <li class="ui-state-default draggable">Category 3</li>
  <li class="ui-state-default draggable">Category 4</li>
  <li class="ui-state-default draggable">Category 5</li>
</ul>
</div>


<div id="sortable" class="droppable connectedSortable"> </div>


 

 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js" type="text/javascript"></script>
 
</body>
</html>



<!--doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!--link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!--script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script-->
        <!--script src="{{ URL::asset('public/js/script.js') }}"></script>
  
    </head>
    <body>
    <div class="container-fluid topspace">
      <div class="row">
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Panel 1</h1>
            </div>
            <div id="container1" class="panel-body box-container">
              <div Pageid="itm-1" class="ui-state-default box-Page">Page 1<span class="fa-trash"></span></div>
              <div Pageid="itm-2" class="ui-state-default box-Page">Page 2</div>
              <div Pageid="itm-3" class="ui-state-default box-Page">Page 3</div>
              <div Pageid="itm-4" class="ui-state-default box-Page">Page 4</div>
              <div Pageid="itm-5" class="ui-state-default box-Page">Page 5</div>
            </div>
          </div>
        </div>
        <div class="col-xs-3">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">Panel 2</h1>
            </div>
            <div id="container2" class="panel-body box-container connectedSortable"></div>
          </div>
        </div>
      </div>
    </div>
    </body>
</html-->
