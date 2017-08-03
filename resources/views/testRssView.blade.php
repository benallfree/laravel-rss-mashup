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
        <div>
            <div class="chat-activity-list">
                @foreach ($feeds as $feed)
                    <div class="chat-element">
                        <div class="media-body ">
                            <small class="pull-right text-navy">{{ $feed->get_gmdate() }}</small>
                            <strong><a href="{{ $feed->get_link() }}">{{ $feed->get_title() }}</a></strong>
                            <p class="m-b-xs">
                                {!! $feed->get_content() !!}
                            </p>
                            <small class="text-muted">{{ $feed->get_gmdate() }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
