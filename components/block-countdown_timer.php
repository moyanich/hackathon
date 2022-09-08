<section class="block countdown-section position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">

                <?php
                $countDate = get_sub_field('event_start_date_and_time');

                echo '<div class="h_content">';

                    echo '<div class="countdown">';
                        echo '<div class="counter"><div id="week"></div><div class="count_text">Weeks</div></div>';
                        echo '<div class="counter"><div id="days"></div><div class="count_text">Days</div></div>';
                        echo '<div class="counter"><div id="hours"></div><div class="count_text">Hours</div></div>';
                        echo '<div class="counter"><div id="mins"></div><div class="count_text">Min</div></div>';
                        echo '<div class="counter"><div id="seconds"></div><div class="count_text">Sec</div></div>';
                    echo '</div>';

                echo '</div>';
                ?>

            </div>
        </div>
    </div>
</section>




<script type="text/javascript">
// Set the date we're counting down to
var date = "<?php echo $countDate ?>"; 
var countDownDate = new Date(date).getTime();
//console.log(countDownDate);

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var weeks = Math.floor((distance / (1000 * 60 * 60 * 24 * 7)));
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("week").innerHTML = weeks;
    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("mins").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("countdown").innerHTML = "The Comference has expired";
    }
}, 1000);
</script>
