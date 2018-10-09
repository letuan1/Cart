<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/x-icon"
          href="https://static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico"/>
    <link rel="mask-icon" type=""
          href="https://static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg"
          color="#111"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <title>CodePen - Sortable Tabular Data</title>

    <script>
        window.console = window.console || function (t) {
        };
    </script>


    <script>
        if (document.location.search.match(/type=embed/gi)) {
            window.parent.postMessage("resize", "*");
        }
    </script>


</head>

<body translate="no">

<body>

<div id="wrapper">
    <h1>@yield('conten')</h1>
    <table id="keywords" cellspacing="0" cellpadding="0">
        <thead>
        <tr>
            <th>Id</th>
            <th><span>Name</span></th>
            <th><span>Auther</span></th>
            <th><span>Price</span></th>
            @yield('th')
        </tr>
        </thead>
        <tbody>
       @yield('tbody')
        </tbody>
    </table>
@yield('conten1')
</div>
</body>
<script src="//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js"></script>

<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.tablesorter/2.28.14/js/jquery.tablesorter.min.js'></script>


<script>
    $(function () {
        $('#keywords').tablesorter();
    });
    //# sourceURL=pen.js
</script>


</body>

</html>

