/**
 * All code written by Daniel Olanrewaju - danorelanre@gmail.com
 * By the grace of God the father
 * Strength of God the Son
 * And Encouragement from God the Holy Spirit
 * Feel free to use any part of this code... Stay blessed, stay safe
*/


$(document).ready(function () {
    const doc = $(document);
    // registeration page
    /**
     * Registration form handling
     */
    $('#studentship').change((e) => {
        let val = e.target.value;
        if(val === 'true') {
            $('#institution').fadeIn();
        } else {
            val = '';
            $('#institution').fadeOut();
        }
    });

    $('.swapForm').click(function(e) {
        show = $(this).attr('target-show');
        hide = $(this).attr('target-hide');
        $(show).show();
        $(hide).hide();
    });
});