jQuery(function ($) {
    $(document).ready(function() {
        $("body").css("overflow", "auto");

        //Gallery post - overlay background on hover
        var projects = document.getElementsByClassName('overlay');
        Array.from(projects).forEach(function(v) {
            v.addEventListener("mouseenter", function() {
                var colors = ['#F6BCBB', '#0B6951', '#010101', '#E64C42', '#025A9A', '#E8B633', '#E27D60'];
                this.style.backgroundColor = colors[Math.floor(this.id % colors.length)];
            });
            v.addEventListener("mouseleave", function() {
                this.style.backgroundColor = "inherit";
            });
        });
    });
});