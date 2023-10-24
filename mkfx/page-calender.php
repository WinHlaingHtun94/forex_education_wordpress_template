<?php get_header()?>
    <!-- ctArea -->
    <div id="ctArea">
        <div class="ctCalender">
            <h2 class="leadTitle">Forex Calender</h2>
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-events.js" async>
            {
            "width": "100%",
            "height": "100%",
            "colorTheme": "light",
            "isTransparent": false,
            "locale": "en",
            "importanceFilter": "-1,0,1",
            "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </div>
    <!-- ctArea -->
<?php get_footer()?>