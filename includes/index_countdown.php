<!-- Countdown dashboard start -->
<div id="counter_container">

  <div id="countdown_dashboard">
    <div class="dash weeks_dash">
      <span class="dash_title">weeks</span>
      <div class="digit">0</div>
      <div class="digit">0</div>
    </div>

    <div class="dash days_dash">
      <span class="dash_title">days</span>
      <div class="digit">0</div>
      <div class="digit">0</div>
    </div>

    <div class="dash hours_dash">
      <span class="dash_title">hours</span>
      <div class="digit">0</div>
      <div class="digit">0</div>
    </div>

    <div class="dash minutes_dash">
      <span class="dash_title">minutes</span>
      <div class="digit">0</div>
      <div class="digit">0</div>
    </div>

    <div class="dash seconds_dash">
      <span class="dash_title">seconds</span>
      <div class="digit">0</div>
      <div class="digit">0</div>
    </div>
  </div>

  <script language="javascript" type="text/javascript">
  jQuery(document).ready(function() {
    $('#countdown_dashboard').countDown({
      targetDate: {
        'day': 		4,
        'month': 	1,
        'year': 	2013,
        'hour': 	19,
        'min': 		00,
        'sec': 		00
      }
    });
  });
  </script>
</div>
<!-- Countdown dashboard end -->