@push('css')


<link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.jqueryui.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/rowgroup/1.2.0/css/rowGroup.jqueryui.min.css" rel="stylesheet" type="text/css" />

<link href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css"  rel="stylesheet" type="text/css" />


<style>

    .ui-widget-header {
        border: 1px solid #fff;
        background: #fff;
        color: #333333;
        font-weight: bold;
      }

      #DataTables_Table_0 th,
        #DataTables_Table_0 td {
             text-align: center !important;
        }

        table.dataTable.display > tbody > tr.odd > .sorting_1, table.dataTable.order-column.stripe > tbody > tr.odd > .sorting_1 {
            box-shadow: none;
          }

          #DataTables_Table_0 th{
            border-color: #04040414;
          }

          table.dataTable.stripe > tbody > tr.odd > *, table.dataTable.display > tbody > tr.odd > * {
            box-shadow: none;
          }
        #DataTables_Table_0 th {
            border-color: rgb(var(--color-primary))/*#31405e*/;
            background: rgb(var(--color-primary)/0.85)/*#2d3b5a;*/;
            color: #fff;
        }

        .dataTables_wrapper .dataTables_filter input {
            border: 1px solid #e2e8f0;
            border-radius: 9px;
            padding: 5px;
            background-color: #fff;
            margin-left: 3px;
            margin-right: 6px;
          }

          .dataTables_wrapper .dataTables_length select {
            border: 1px solid #e2e8f0;
            border-radius: 3px;
            padding: 5px;
            background-color: transparent;
            padding: 4px;
            width: 42px;
          }

          .dataTables_wrapper .dataTables_paginate .fg-button {
            box-sizing: border-box;
            display: inline-block;
            min-width: 1.5em;
            padding: .5em;
            margin-left: 2px;
            text-align: center;
            text-decoration: none !important;
            cursor: pointer;
            border: 1px solid transparent;
            width: 40px;
            height: 40px;
            line-height: 25px;
            font-weight: bold;
          }

          .ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .ui-state-disabled {
            opacity: 1;
            -ms-filter: "alpha(opacity=35)";
            background-image: none;
            background:rgb(var(--color-primary));/* #2c3c5a;*/
            color: #fff;
          }

        #DataTables_Table_0_next{
            background: #37445f99;
            width: auto;
            border-radius: 0;
            border-top-left-radius: 10px;
        }

        #DataTables_Table_0_previous{

                background: #37445f99;
                width: auto;
                border-radius: 0;
                  border-top-right-radius: 0px;
                border-top-right-radius: 10px;

        }

        #DataTables_Table_0_info{
            font-weight: 600;
            color: #878e9f;
        }

        .dt-button{
            background:  rgb(var(--color-primary))!important;/*#2d3c5a !important;*/
            border-color: rgb(var(--color-primary))!important;/*#2d3c5a !important;*/
            color: #fff !important;
            border-radius: 7px !important;
            font-weight: bold;
            box-shadow: 0px 5px 6px #0003;
        }

        #printTable_previous,
        #printTable_next,
        #DataTables_Table_2_next,
        #DataTables_Table_2_previous,
        #DataTables_Table_3_next,
        #DataTables_Table_3_previous,
        #DataTables_Table_4_next,
        #DataTables_Table_4_previous,
        #DataTables_Table_5_next,
        #DataTables_Table_5_previous,
        #DataTables_Table_6_next,
        #DataTables_Table_6_previous{
            background: #2c3b593b;
            border-color: transparent;
            color: #000 !important;
            border-radius: 7px !important;
            font-weight: bold;
            width: auto;
        }

        .compact  {

            direction: rtl
        }

        @media print {
            .noprint {
                display: none;
            }
        }

        @print {
            .noprint {
                display: none;
            }
        }


</style>


@endpush



@push('js')


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.jqueryui.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.2.0/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.2.0/js/rowGroup.jqueryui.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.3.0-beta.2/vfs_fonts.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>



<script>

    $(document).ready(function() {


        $('table').DataTable({

            "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],

            "aLengthMenu": [

                    [10, 25, "All"]
                ],

                dom: 'Bfrtip',

                // show length menu

                lengthMenu: [
                    [10, 25, "All"]
                ],


                buttons: [
                    {
                        extend: 'print',
                        customize: function ( win ) {
                            $(win.document.body)
                                .css( 'font-size', '10pt' )
                                .prepend(
                                    '<img src="https://tafaya.shokranegypt.com/images/Tj3Pvx5ieoqkYfXfJvFP.png" style="position:absolute; top:50%; left:25%; width:60%; opacity:.5" />'
                                );

                            $(win.document.body).find( 'table' )
                                .addClass( 'compact' )
                                .css({
                                    color: '#000',
                                    'font-size': '10pt',
                                    'text-align': 'center',
                                    'border': '1px solid #000'



                                } );

                                $(win.document.body).addClass('nobackground');
                        }
                    },
                    'excel', 'copy',


                ],



            "iDisplayLength": 10,

                // Sorting

                "order": [@php echo isset($table_order)? $table_order: '[ 0, "desc" ]'; @endphp],

                 lengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
                 pageLength: 10,



                "language": {
                    "sCopy":"نسخ",               
                    "sProcessing": "جارٍ التحميل...",
                    "sLengthMenu": "أظهر _MENU_ مدخلات",
                    "sZeroRecords": "لم يعثر على أية سجلات",
                    "sInfo": "عرض من  _START_ إلى _END_ من أصل _TOTAL_ مدخل",
                    "sInfoEmpty": "يعرض 0 إلى 0 من أصل 0 سجل",
                    "sInfoFiltered": "(منتقاة من مجموع _MAX_ مُدخل)",
                    "sInfoPostFix": "",
                    "sSearch": "ابحث:",
                    "sUrl": "",
                    "oPaginate": {
                        "sFirst": "الأول",
                        "sPrevious": "السابق",
                        "sNext": "التالي",
                        "sLast": "الأخير"
                    }
                }
            });


            });




</script>


<script>

    // Export pdf in arabic

    $.extend( true, $.fn.dataTable.defaults, {
        
        "language": {
            buttons: {
                copy:"نسخ",
                excel:"اكسل",
                print:"طباعة",
                copyTitle: 'نسخ إلى الحافظة',
                copySuccess: {
                    _: 'نسخ %d سطر',
                    1: 'نسخ سطر واحد'
                }
            },
            "url": "http://cdn.datatables.net/plug-ins/1.10.21/i18n/Arabic.json"
        }
    } );


</script>
@endpush
