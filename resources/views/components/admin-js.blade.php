<script>
    $(document).ready(function() {
        $(this).find('.admin-side-navigation ul li').eq(0).addClass('text-black bg-light') && $(this).find('.admin-side-navigation ul li').css({
            'cursor': 'pointer'
        });

        $(this).find('.admin-side-navigation ul').on('click', 'li', function() {
            $(this).siblings().removeClass('text-black bg-light').addClass('text-light');
            $(this).removeClass('text-light').addClass('text-black bg-light');
        });
    });
</script>