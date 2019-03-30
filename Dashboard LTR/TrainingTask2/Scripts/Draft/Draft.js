$(document).ready(function () {
    /*start deleted msgs*/
    var Draft = [
    ["1", "System Architect", "2011/04/25"],
    ["2", "Accountant", "2011/04/25"],
    ["3", "Junior Technical Author", "2011/04/25"],
    ["4", "Senior Javascript Developer", "2011/04/25"],
    ["5", "Ibrahim", "Accountant", "2011/04/25"],
    ];

    var table = $('#Draft').DataTable({
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
        data: Draft,
        'columnDefs': [
           {
               'targets': 0,
               'checkboxes': true
           }
        ],
        'order': [[1, 'asc']],
        columns: [
            {},
     

            { title: "Subject" },
            { title: "Date" },
     
        ],
        responsive: true
    });

    /*end deleted msgs*/

    $('#Draft :checkbox').change(function () {
        var checkedboxes = $('#Draft input[type="checkbox"]:checked').length;
        var uncheckedboxes = $('#Draft :checkbox').not(':checked').length;
        if (checkedboxes == 1) {
            $(".action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action-undo").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
   
        } else if (checkedboxes > 1) {

            $(".action-empty").css({ 'color': 'red', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
            $(".action-undo").css({ 'color': '#3e3ef5', 'pointer-events': 'auto ', 'cursor': 'pointer' }).removeClass('disable1');
  
        }
        else {

            $(".action-empty").addClass('disable1');
            $(".action-undo").addClass('disable1');
   
        }
        /* End change on*/
    });
});

function delte(title) {
    remove(title)
}