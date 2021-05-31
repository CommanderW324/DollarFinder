<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
<script>
$(function() {
    $('header a').each(function() {
        if ($(this).prop('href') == window.location.href) {
            $(this).addClass('curr-page');
        }

    });
});
</script>