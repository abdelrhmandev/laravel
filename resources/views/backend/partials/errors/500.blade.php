<script>
    function loadDatatable(RouteListing,dynamicColumns){
 
        // Shared variables
        var table;
        var dt;
        var filterStatus;
    
  
            var lang = document.dir == 'rtl' ? 'ar' : 'en-GB';        
            dt = $("#kt_datatable").DataTable({
                searchDelay: 500,
                processing: true,
                serverSide: true,                
                info: true, 
                oLanguage: {
                    "zeroRecords" : '@include("backend.partials.abdo_files.empty",["msg"=>"No Match"])',
                    "sEmptyTable": '@include("backend.partials.abdo_files.empty",["msg"=>"No Records Founds"])'
                },
                 bPaginate: true,    
                orientation: 'landscape',     
                exportOptions: {
                    orthogonal: "myExport",
                },    
                pagingType: "full_numbers",
                language: {
                url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/"+lang+".json",
                },
                fnDrawCallback: function() {
                    if (Math.ceil((this.fnSettings().fnRecordsDisplay()) / this.fnSettings()._iDisplayLength) < 1) {
                        $('.dataTables_paginate').css("display", "none"); $('.dataTables_length').css("display", "none"); $('.dataTables_info').css("display", "none");            
                    }else{
                        $('.dataTables_paginate').css("display", "block"); $('.dataTables_length').css("display", "block"); $('.dataTables_info').css("display", "block");            
                    }   
                },            
                iDisplayLength: 10,
                bLengthChange: true,
                stateSave: false,
                lengthMenu: [[1, 10, 25, 50, -1], [1, 10, 25, 50, "{{ __('admin.all')}}"]],
                order: [],
                select: {
                    style: 'os',
                    selector: 'td:first-child input[type="checkbox"]',
                    className: 'row-selected'
                },
                ajax: {
                    url: RouteListing,
                },
                columns: dynamicColumns,  
                columnDefs: [
                    {
                        targets: 0,
                        exportable: false,
                        printable: false,
                        searchable: false,
                        orderable: false,
                            render: function (data) {
                                return `
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" name="ids" class="sub_chk" value="${data}" type="checkbox" />
                                    </div>`;
                            }
                    },{
                        targets: -1,
                        data: null,
                        exportable: false,
                        printable: false,
                        searchable: false,                    
                        orderable: false,
                        className: 'text-end',                        
                    },
                ],
                // Add data-filter attribute
                     // Add data-filter attribute
                     createdRow: function (row, data, dataIndex) {
                        // $(row).find('td:eq(2)').attr('data-filter', data.category_id);
                        // $(row).find('td:eq(3)').attr('data-filter', data.status);
                        // $(row).find('td:eq(4)').attr('data-filter', data.created_at);
                    }
            });    
            table = dt.$;    
            // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
            dt.on('draw', function () {
                initToggleToolbar();
                toggleToolbars();
                handleDeleteRows();
                KTMenu.createInstances();
            }); 
        
        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
 
        ///////abdo
             // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
 
            // Filter Datatable
            var handleSearchDatatable = function () {
                    const filterSearch = document.querySelector('[data-kt-table-filter="search"]');
                    filterSearch.addEventListener('keyup', function (e) {
                        dt.search(e.target.value).draw();
                    });
            }
    
            // Filter Datatable
            var handleFilterDatatable = function () {
                // Select filter options
                const filterForm = document.querySelector('[data-kt-table-filter="form"]');
                filterStatus = document.querySelectorAll('[data-kt-table-filter="status"][name="status"]');
                const filterCategory =  document.querySelectorAll('[data-kt-table-filter="category"][name="category"]');
                const filterButton = filterForm.querySelector('[data-kt-table-filter="filter"]');
                //const selectOptions = filterForm.querySelectorAll('select');
                // Filter datatable on submit
                filterButton.addEventListener('click', function () {
                    let  StatusValue = '';
                    let  CategoryValue =  '';
                    // Get filter Status Values
                    filterStatus.forEach(r => {
                        r.value === 'all' ? StatusValue = '' : StatusValue = r.value;                
                    });
                    //Get filter Categories Values
                    filterCategory.forEach(c => {
                        c.value === 'all' ? CategoryValue = '' : CategoryValue = c.value;                
                    });            
                    // Filter datatable --- official docs reference: https://datatables.net/reference/api/search()            
                    const filterString = StatusValue + ' ' + CategoryValue;
                    //dt.search(filterString).draw(); // Original Code
                        var searchStatus = StatusValue.toLowerCase(),regexStatus = '\\b' + searchStatus + '\\b';                    
                        dt.column(3).search(regexStatus, true, false).column(2).search(CategoryValue).draw();                
                    });    
            }
            // Delete customer
            var handleDeleteRows = () => {
                // Select all delete buttons
                const deleteButtons = document.querySelectorAll('[data-kt-table-filter="delete_row"]');

               
          
                

                deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();
                    // Select parent row
                    const parent = e.target.closest('tr');
                    // Get customer name
                    const itemName = parent.querySelectorAll('td')[1].innerText;

                    ///////////////
  

                //////////////////////////////


                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "{{ __('admin.confirmDeleteMessage') }}" + itemName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "{{ __('admin.confirmButtonText') }}",
                        cancelButtonText: "{{ __('admin.cancelButtonText') }}",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then((result) => {
                        $.ajax({
                        type: 'post',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                       
                        url: $(this).attr("data-destroy-route"),
                        data: {
                            '_method': 'delete'
                        },
                        success: function (response, textStatus, xhr) {
                            if (result.value) {
                                // Simulate delete request -- for demo purpose only
                                Swal.fire({
                                    text: "{{ __('admin.deletingItemMessage') }}",
                                    icon: "info",
                                    buttonsStyling: false,
                                    showConfirmButton: false,
                                    timer: 2000
                                }).then(function () {

                                    Swal.fire({
                                    text: response['msg'], // respose from controller
                                    icon: response['status'],
                                    buttonsStyling: false,
                                    confirmButtonText: "{{ __('admin.confirmButtonTextGotit') }}",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                    }).then(function () {
                                    // delete row data from server and re-draw datatable
                                    dt.draw();
                                    });
                                    // Remove header checked box
                                    const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
                                    headerCheckbox.checked = false;
                                });
                            }else if (result.dismiss === 'cancel') {
                                Swal.fire({
                                    text: "{{ __('admin.notdeletedMessage') }}",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "{{ __('admin.confirmButtonTextGotit') }}",
                                    customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                    }
                                });
                            } // end of cancel case
                        }
                        });
    
                    });
                })
                });
            }
     
            // Reset Filter
            var handleResetForm = () => {
                // Select reset button
                const resetButton = document.querySelector('[data-kt-table-filter="reset"]');
        
                // Reset datatable
                resetButton.addEventListener('click', function () {
                // Reset month
                // filterMonth.val(null).trigger('change');
              
                // Reset payment type
                $("#status").val("all").change();
                $("#category").val("all").change();
    
                // Reset datatable --- official docs reference: https://datatables.net/reference/api/search()
                dt.column(3).search('').column(2).search('').draw();  
            });
            }
     



            // Init toggle toolbar "Delete Selected Items"
            var initToggleToolbar = function () {
                // Toggle selected action toolbar
                // Select all checkboxes
                const container = document.querySelector('#kt_datatable');
                const checkboxes = container.querySelectorAll('[type="checkbox"]');
                //https://www.itsolutionstuff.com/post/how-to-delete-multiple-records-using-checkbox-in-laravel-5-example.html
                // Select elements
                const deleteSelected = document.querySelector('[data-kt-table-select="delete_selected"]');
               
             
                // Toggle delete selected toolbar
                checkboxes.forEach(c => {
                    // Checkbox on click event
                    c.addEventListener('click', function () {
                        setTimeout(function () {
                            toggleToolbars();
                        }, 50); 
                                          
                    });   
                });
                 

                // Deleted selected rows
                    deleteSelected.addEventListener('click', function () {

                    var checkedrows = [];
                     $("#kt_datatable input:checkbox[name=ids]:checked").each(function() {
                        checkedrows.push($(this).val());
                    });
                    var join_selected_values = checkedrows.join(","); 
                    
                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "{{ __('admin.confirmMultiDeleteMessage') }}"+"?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        showLoaderOnConfirm: true,
                        confirmButtonText: "{{ __('admin.confirmButtonText') }}",
                        cancelButtonText: "{{ __('admin.cancelButtonText') }}",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        },
                    }).then(function (result) {
                        const destroyMultipleRouteId = document.getElementById('destroyMultipleroute');
                        const destroyMultipleRoute = destroyMultipleRouteId.getAttribute('data-destroyMultiple-route');
                        $.ajax({
                        type: 'post',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: destroyMultipleRoute,
                        data: {
                            '_method': 'delete',
                            'ids': join_selected_values,
                        },                    
                        success: function (response, textStatus, xhr) {
                            if (result.value) {
                                    Swal.fire({
                                        text: "{{ __('admin.deletingselecteditem') }}",
                                        icon: "info",
                                        buttonsStyling: false,
                                        showConfirmButton: false,
                                        timer: 2000
                                    }).then(function () {
                                        Swal.fire({
                                            text: response['msg'], // respose from controller
                                            icon: response['status'],
                                            buttonsStyling: false,
                                            confirmButtonText: "{{ __('admin.confirmButtonTextGotit') }}",
                                            customClass: {
                                                confirmButton: "btn fw-bold btn-primary",
                                            }
                                        }).then(function () {
                                            // delete row data from server and re-draw datatable
                                            dt.draw();
                                        });
                
                                        // Remove header checked box
                                        const headerCheckbox = container.querySelectorAll('[type="checkbox"]')[0];
                                        headerCheckbox.checked = false;
                                    });
                                } else if (result.dismiss === 'cancel') {
                                    Swal.fire({
                                        text: "{{ __('admin.notdeletedMessage') }}",
                                        icon: "error",
                                        buttonsStyling: false,
                                        confirmButtonText: "{{ __('admin.confirmButtonTextGotit') }}",
                                        customClass: {
                                            confirmButton: "btn fw-bold btn-primary",
                    
                                        }
                                });
                                } // end of cancel case
                            }
                        });
                    });
            })
            }
        
            // Toggle toolbars
            var toggleToolbars = function () {
                // Define variables
                const container = document.querySelector('#kt_datatable');
                const toolbarBase = document.querySelector('[data-kt-table-toolbar="base"]');
                const toolbarSelected = document.querySelector('[data-kt-table-toolbar="selected"]');
                const selectedCount = document.querySelector('[data-kt-table-select="selected_count"]');
        
                // Select refreshed checkbox DOM elements
                const allCheckboxes = container.querySelectorAll('tbody [type="checkbox"]');
        
                // Detect checkboxes state & count
                let checkedState = false;
                let count = 0;
        
                // Count checked boxes
                allCheckboxes.forEach(c => {
                    if (c.checked) {
                        checkedState = true;
                        count++;
                    }
                });
        
                // Toggle toolbars
                if (checkedState) {
                    selectedCount.innerHTML = count;
                    toolbarBase.classList.add('d-none');
                    toolbarSelected.classList.remove('d-none');
                } else {
                    toolbarBase.classList.remove('d-none');
                    toolbarSelected.classList.add('d-none');
                }
            }
            // Handle Export 
            var exportButtons = function (){
                const documentTitle = 'بسم الله الرحمن الرحيم';
                var buttons = new $.fn.dataTable.Buttons(table, {
                    buttons: [
                        {
                            extend: 'copyHtml5',
                            title: documentTitle,
                            exportOptions: {
                                columns: "thead th:not(.noExport)"
                            },
                            charset: 'utf-8',
                            bom: 'true',                                                                  
                        },{
                            extend: 'excelHtml5',
                            title: documentTitle,
                            exportOptions: {
                                columns: "thead th:not(.noExport)"
                            },
                            charset: 'utf-8',
                            bom: 'true',                            
                        },{
                            extend: 'csvHtml5',
                            title: documentTitle,
                            exportOptions: {
                                columns: "thead th:not(.noExport)"
                            },
                            charset: 'utf-8',
                            bom: 'true',   
    
                        },{
                            extend: 'pdfHtml5',                           
                            title: documentTitle,
                            exportOptions: {
                                columns: "thead th:not(.noExport)",
                            },
                            charset: 'utf-8',
                            bom: 'true', 
                            customize: function(doc) {                           
                                proccessdoc(doc);
                            },                            
                        }
                    ]
                }).container().appendTo($('#kt_datatable_buttons'));
    
                // Hook dropdown menu click event to datatable export buttons
                const exportButtons = document.querySelectorAll('#kt_datatable_export_menu [data-kt-export]');
                exportButtons.forEach(exportButton => {
                    exportButton.addEventListener('click', e => {
                        e.preventDefault();
                        // Get clicked export value
                        const exportValue = e.target.getAttribute('data-kt-export');
                        const target = document.querySelector('.dt-buttons .buttons-' + exportValue);
                        // Trigger click event on hidden datatable export buttons
                        // ABDO //////////////////
                         Swal.fire({
                                    text: "Customer list has been successfully exported!",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                })                               
                                ///////////////////////////////
                        target.click();
                    });
                });
            }
        //// abdo
      
        
         
                handleSearchDatatable();
                initToggleToolbar();
                handleFilterDatatable();
                handleDeleteRows();
                handleResetForm();
                table = document.querySelector('#kt_datatable');
                if ( !table ) {
                return;
                }
                exportButtons();    
    }
    
    // On document ready
///////////////////////////////////////////////////////////////////////////////

</script>