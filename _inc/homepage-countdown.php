<div class="count-down">
  <ul>
    <li><span id="days"></span>days</li>
    <li><span id="hours"></span>Hours</li>
    <li><span id="minutes"></span>Minutes</li>
    <li><span id="seconds"></span>Seconds</li>
  </ul>
</div>


<script type="text/javascript">
    const second = 1000,
          minute = second * 60,
            hour = minute * 60,
             day = hour * 24;

    let countDown = new Date('Apr 29, 2019 13:00:00')
    .getTime(),
    x = setInterval(function() {

        let now = new Date().getTime(),
        distance = countDown - now;

        document.getElementById('days').innerText = Math.floor(distance / (day)),
        document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
        document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
        document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
    
    }, second)
</script>