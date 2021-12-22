$(document).ready(function (e) {

    $("#triggerOfModalDelete").on('click', function (e) {
        const triggerRef = $(this);

        const idMusic = triggerRef.data('id');
        const titleMusic = triggerRef.data('title');
        const targetModal = triggerRef.data('target');

        $("#myModalLabel").text("Are You Sure Want To Delete -" + titleMusic + "?");
        $("input[name='idOfMusic']").val(idMusic);
        $("#" + targetModal).modal();
    })
});