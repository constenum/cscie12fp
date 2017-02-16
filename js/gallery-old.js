$(document).ready(function() {
    $(".fancybox-button").fancybox({
        prevEffect		: 'fade',
        nextEffect		: 'fade',
        prevSpeed       : 'slow',
        nextSpeed       : 'slow',
        closeBtn		: false,
        helpers		: {
            title	: { type : 'inside' },
            buttons	: {}
        }
    });
});