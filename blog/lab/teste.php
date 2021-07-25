<?php include 'header.php'; ?>
    <!DOCTYPE html>
    <html>
        <head>
            <title>Instafeed on Your Website</title>
            <style type="text/css">
                #img{ 
                    width: 100%;
                }
            </style>
        </head>
        <body>
            <h1 style="text-align: center">Instagram</h1>
                <div id="instafeed-container" id="img"></div>



            <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
            <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                target: "instafeed-container",
                resolution: 'low_resolution',
                accessToken: 'IGQVJWRzd5TFVZAZAmozVUwwdlptdktDZAWFYWFhTTDdRdE14RlRNVHFtNXVEa2QzMmxUUy0tSVNrTl9EVXhMZA3BqZAzV5eXJPcTd3SDBZAOWxHWGM5RTBoTGE0TnVoYmxLM2otdEczYVByOC0yQ2NqUWFWNwZDZD'
            });
            userFeed.run();
            </script>
        </body>
    </html>
<?php include 'footer.php'; ?>
