$(function () {
    $('.js-basic-example').DataTable({
        bFilter: true,
        "paging":   true,
        "ordering": false,
        "info":     false,
        responsive: true
    });

    //Exportable table
    $('.js-exportable').DataTable({
        bFilter: true,
        dom: 'Bfrtip',
        "paging":   true,
        "ordering": false,
        "info":     false,
        responsive: true,
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
});