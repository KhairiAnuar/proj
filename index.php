<http>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="styles.css">
    </head>

    <body>
        <div class="container">
            <div class="row ">
                <div class="col-xs-1 ">
                    <form action="search.php" method="get">

                        <script>
                            (function() {
                                //search api
                                var cx = '013562356057062446115:fhyiygpryes';
                                var gcse = document.createElement('script');
                                gcse.type = 'text/javascript';
                                gcse.async = true;
                                gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
                                var s = document.getElementsByTagName('script')[0];
                                s.parentNode.insertBefore(gcse, s);
                            })();

                        </script>

                        <p>Enter keyword</p>
                        <div class="center-block">
                            <gcse:search enableAutoComplete="true" ></gcse:search>
                        </div>
                    </form>

                <script>
                    var apiKey='AIzaSyD4WaKSSRrkabUrPDiyN0NrNRF2pAYRnlU';
                    var cx= '013562356057062446115:fhyiygpryes';
                    var q='hello';
                    $.get('https://www.googleapis.com/customsearch/v1?key='+apiKey+'&cx='+cx+'&q='+q,function (data) {
                        console.log(data);
                    })
                </script>


                </div>
            </div>
        </div>
    </body>
</http>