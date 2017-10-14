$(document).ready(function() {
   var oTable = $('#order_data').DataTable({
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.13/i18n/Portuguese-Brasil.json"
        },
        dom: 'frtBp',
        buttons: [
            'pdf', 'print'
        ]
    });
});