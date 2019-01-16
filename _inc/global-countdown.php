<div class="count-down">

    <div><span id="days"></span><div class="smalltext">Days</div></div>
    <div><span id="hours"></span><div class="smalltext">Hours</div></div>
    <div><span id="minutes"></span><div class="smalltext">Minutes</div></div>
    <div><span id="seconds"></span><div class="smalltext">Seconds</div></div>

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