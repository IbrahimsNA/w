$(document).ready(function () {

    /*start deleted msgs*/

    var Sent = [
    ["1", "Ahmad", "System Architect", "2011/04/25"],
    ["2", "Majed", "Accountant", "2011/04/25"],
    ["3", "Waleed", "Junior Technical Author", "2011/04/25"],
    ["4", "Khaled", "Senior Javascript Developer", "2011/04/25"],
    ["5", "Ibrahim", "Accountant", "2011/04/25"],
    ];

    var table = $('#Sent').DataTable({
        "searching": false,
        "bPaginate": true,
        "bLengthChange": true,
        "bFilter": true,
        "bInfo": true,
        "bAutoWidth": false,
        "lengthMenu": [5, 10, 50, 100],
        "pageLength": 5,
        deferRender: true,
        dom: 'Bfrtip',
        data: Sent,
        'columnDefs': [
           {
               'targets': 0,
               'checkboxes': true
           }
        ],
        'order': [[1, 'asc']],
        columns: [
            {},
            { title: "To" },

            { title: "Subject" },
            { title: "Date" },
       
        ],
        responsive: true
    });

    /*end deleted msgs*/






    $('#Sent :checkbox').change(function () {
        var checkedboxes = $('#Sent input[type="checkbox"]:checked').length;
        var uncheckedboxes = $('#Sent :checkbox').not(':checked').length;



        if (checkedboxes == 1) {

            $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            //$(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action ,.fa-eye").css({ 'color': 'black', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1')
        } else if (checkedboxes > 1) {

            $(".action ,.action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            //$(".action ,.fa-undo-alt").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action ,.fa-eye").addClass('disable1')
        }
        else {

            $(".action ,.action-empty").addClass('disable1');
            $(".action ,.fa-undo-alt").addClass('disable1');
            $(".action ,.fa-eye").addClass('disable1')
        }









        /* End change on*/
    });


});

function delte(title) {
    remove(title)
}