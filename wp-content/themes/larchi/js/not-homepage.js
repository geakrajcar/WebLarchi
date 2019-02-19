jQuery(function ($) {
    $(document).ready(function() {
        $("body").css("overflow", "auto");

        //Gallery post - overlay background on hover
        var projects = document.getElementsByClassName('overlay');
        Array.from(projects).forEach(function(v) {
            v.addEventListener("mouseenter", function() {
                var colors = ['#e64c42', '#f6bcbb', '#4bbca6', '#99738e', '#659dbd', '#e27d60', '#ac3b61'];
                this.style.backgroundColor = colors[Math.floor(this.id % colors.length)];
            });
            v.addEventListener("mouseleave", function() {
                this.style.backgroundColor = "inherit";
            });
        });
    });
});