<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="p-10">
    <!-- Begin TimeRex Widget -->
    <div id="timerex_calendar" data-url="https://timerex.net/s/reika02955_e7ab/e5335b45"></div>

    <script id="timerex_embed" src="https://timerex.net/js/embed.js"></script>
    <script type="text/javascript">
        TimerexCalendar({
            'onLoad': function() {
                console.log('Widget Loaded');
            },
            'onFormOpen': function() {
                console.log('Booking form opened');
            },
            'onBookingComplete': function() {
                console.log('Booking completed');
                window.location.href = '<?php echo home_url('/timerex-thanks'); ?>';
            },
        });
    </script>
    <!-- End TimeRex Widget -->
</body>

</html>