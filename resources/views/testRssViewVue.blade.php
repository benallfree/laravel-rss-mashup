<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/all.css" rel="stylesheet">

</head>
<body>
<div class="ibox float-e-margins">
    <div class="ibox-content">
        <div id="app">
            <rss-list ref="rssList" :rss-url="rssUrl"></rss-list>
        </div>
    </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/axios/axios.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>
