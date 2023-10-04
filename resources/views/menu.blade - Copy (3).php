<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!--link rel="stylesheet" href="/resources/demos/style.css"-->
        <link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}">
        <script src="{{ URL::asset('public/js/script.js') }}"></script>

        <!-- Styles -->
<style>
  #sortable1, #sortable2 {
    border: 1px solid #eee;
    width: 142px;
    min-height: 20px;
    list-style-type: none;
    margin: 0;
    padding: 5px 0 0 0;
    float: left;
    margin-right: 10px;
  }
  #sortable1 li, #sortable2 li {
    margin: 10px 5px 5px 5px;
    padding: 5px;
    font-size: 1.2em;
    width: 120px;
  }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#sortable1, #sortable2", "#finalsortable" ).sortable({
      connectWith: ".connectedSortable"
    }).disableSelection();
  } );
  </script>
    </head>
    <body>
    <div class="container topspace">
    <div class="row">
    <div class="col-sm-3 col-md-3 col-lg-3">
      <h3>Pages</h3>
  <ul id="sortable1" class="connectedSortable">
  <li itemid="page-1" class="ui-state-default">Page 1</li>
  <li itemid="page-2" class="ui-state-default">Page 2</li>
  <li itemid="page-3" class="ui-state-default">Page 3</li>
  <li itemid="page-4" class="ui-state-default">Page 4</li>
  <li itemid="page-5" class="ui-state-default">Page 5</li>
</ul>
      <h3>Category</h3>
  <ul id="sortable2" class="connectedSortable">
  <li itemid="category-1" class="ui-state-default">Category 1</li>
  <li itemid="category-2" class="ui-state-default">Category 2</li>
  <li itemid="category-3" class="ui-state-default">Category 3</li>
  <li itemid="category-4" class="ui-state-default">Category 4</li>
  <li itemid="category-5" class="ui-state-default">Category 5</li>
</ul>
</div>
<div class="col-sm-3 col-md-3 col-lg-3">
 <h3>Result</h3>
<ul id="finalsortable" class="connectedSortable result_here">
    Drop Menu Here
</ul>
</div>
    <div class="col-sm-6 col-md-6 col-lg-6">
        <form class="form-inline" action="/action_page.php">
    <label for="email">menu:</label>
    <input type="email" class="form-control" id="menu" placeholder="Enter email" name="menu">  
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
</div>
</div>
    </body>
</html>
