$(function () {
    if ('ontouchstart' in window)
    {
        $('body').removeClass('no-touch').addClass('touch');
        $('div.boxInner img').click(function () {
            $(this).closest('.boxInner').toggleClass('touchFocus');
        });
    }
});