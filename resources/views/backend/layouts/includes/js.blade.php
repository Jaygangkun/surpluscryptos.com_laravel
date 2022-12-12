<!-- jQuery -->
<script src="{{asset('/')}}plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('/')}}plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="{{asset('/')}}plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{asset('/')}}plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{asset('/')}}plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{asset('/')}}plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{asset('/')}}plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('/')}}plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{asset('/')}}plugins/moment/moment.min.js"></script>
<script src="{{asset('/')}}plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('/')}}plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{asset('/')}}plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('/')}}plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{asset('/')}}plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{asset('/')}}plugins/jszip/jszip.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{asset('/')}}plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/')}}plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script src="{{asset('/')}}plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<script src="{{asset('/')}}plugins/toastr/toastr.min.js"></script>
<script src="{{asset('/')}}plugins/fullcalendar/main.js"></script>
<script src="{{asset('/')}}plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE App -->
<script src="{{asset('/')}}dist/js/adminlte.js"></script>
<script src="{{asset('/')}}dist/js/jquery.repeater.min.js"></script>
<!-- AdminLTE for demo purposes -->
{{--<script src="{{asset('/')}}dist/js/demo.js"></script>--}}
<script src="{{asset('/')}}dist/js/custom.js?v={{config('constants.asset_v')}}"></script>
<script src="{{asset('/')}}plugins/select2/js/select2.js"></script>
<script src="{{asset('/')}}plugins/sweetalert2/sweetalert2.js"></script>

<script>

    function printComponent(cmpName) {
        var docHead = document.head.outerHTML;
        var printContents = document.getElementById(cmpName).outerHTML;
        var print_heading = $('.fc-toolbar-title')[0].outerHTML;
        var winAttr = "location=yes, statusbar=no, menubar=no, titlebar=no, toolbar=no,dependent=no, width=865, height=600, resizable=yes, screenX=200, screenY=200, personalbar=no, scrollbars=yes";
        var newWin = window.open("", "_blank", winAttr);
        var writeDoc = newWin.document;
        writeDoc.open();
        writeDoc.write('<!doctype html><html> <style>.fc-toolbar-title{text-align :center !important;} .fc-header-toolbar{display :none !important;} .fc-scroller.fc-scroller-liquid{overflow:visible !important;} .fc-view-harness.fc-view-harness-active{height:auto !important;}</style>' + docHead + '<body onLoad="window.print()">' + print_heading + printContents + '</body></html>');
        writeDoc.close();
        newWin.focus();
    }

    var gs_dt_default = {
        pageLength: '{{$gs->dt_page_length}}',
        searching: false,
        ordering: false,
        order: [],
    };

    var intVal = function (i) {
        return typeof i === 'string' ?
            i.replace(/[\$,]/g, '') * 1 :
            typeof i === 'number' ?
                i : 0;
    };

    function numberFormat(n, d = 100) {
        return Math.round(d * n) / d
    }

    $('.web-form').on('submit', function (e) {
        $(this).find("input[type='submit']").attr('disabled', true)
    })

    function toastAlert(heading, message, type) {
        switch (type) {
            case 'success':
                toastr.success(message)
                break;
            case 'error':
                toastr.error(message)
                break;
            case 'warning':
                toastr.warning(message)
                break;
            default:
                toastr.info(message)

        }
    }

    function initProductSelect2() {
        $(".product-select2").select2({
            ajax: {
                url: url + 'products',
                dataType: 'json',
                type: "GET",
                data: function (params) {
                    return {
                        q: params.term,
                        select2: '1',
                    };
                },
            }
        })
    }

    $(function () {
        @if(session('message'))
        toastAlert('', '{{session('message')}}', 'info')
        @endif
        $(':input[type="number"]').attr('step', '.0000000001')
    })

    $(document).on('click', '.compose-mail', function (e) {
        e.preventDefault()
        $('.compose-email').val($(this).data('email'))
        $('#user-files-content').html('')
    })

    $(document).on('click', '.edit-btn', function (e) {
        e.preventDefault()
        loading()
        var element = $(this);
        $.ajax({
            method: 'GET',
            url: element.data('href'),
            data: {},
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                $('#edit-modal-body').html(response)
                loading(false)
            },
            error: function (response) {
                console.log(response)
                loading(false)
                toastAlert('', (response.responseJSON ? response.responseJSON.message : 'something went wrong'), 'error')
            }
        })
    })

    $(document).on('click', '.delete-btn', function (e) {
        e.preventDefault()
        var element = $(this);
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: 'DELETE',
                    url: element.data('href'),
                    data: {},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {

                        if (response == 'img-delete') {
                            element.parent().hide()
                            return
                        }
                        var toast = response.toast;
                        if (toast) {
                            Swal.fire({
                                icon: 'success',
                                title: toast.heading,
                                text: toast.message,
                                showConfirmButton: false,
                                timer: 1200
                            })
                            // toastAlert(toast.heading, toast.message, toast.type);
                        }
                        if (myTable) {
                            myTable.ajax.reload()
                        } else {
                            location.reload()
                            location.reload()
                        }
                    },
                    error: function (response) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: (response.responseJSON ? response.responseJSON.message : 'something went wrong'),
                        })
                        // alert(response.responseJSON ? response.responseJSON.message : 'something went wrong');
                        // toastAlert('', (response.responseJSON ? response.responseJSON.message : 'something went wrong'), 'error')
                    }
                })


            }
        })
    })

    $(document).on('click', '#user-files-mail', function (e) {
        e.preventDefault();
        loading()
        $('#user-files-content').html('')
        var this_e = $(this);
        $.ajax({
            url: this_e.data('href'),
            data: {
                email: $('.compose-email').val()
            },
            success: function (data) {
                loading(false)
                $('#user-files-content').html(data)
            },
            error: function (data) {
                loading(false)
                var responseJSON = data.responseJSON
                if (responseJSON) {
                    toastAlert('', (responseJSON.message), 'error')
                } else {
                    toastAlert('', 'Something went wrong', 'error')
                }
            }
        });
    });

    $(document).on('submit', '.ajax-form', function (e) {
        e.preventDefault();

        loading()
        $('.invalid-feedback').remove()
        $('.is-invalid').removeClass('is-invalid')
        var this_form = $(this);
        var formdata = new FormData(this);

        $.ajax({
            method: this_form.prop('method'),
            url: this_form.prop('action'),
            data: formdata,
            dataType: 'JSON',
            contentType: false,
            cache: false,
            processData: false,
            success: function (data) {
                toastAlert('Message', data.message, 'success');
                setTimeout(function () {
                    if (data.redirect_url) {
                        window.location.href = data.redirect_url
                        return
                    }
                    window.location.href = this_form.data('redirect')
                }, 200)
            },
            error: function (data) {
                loading(false)
                var responseJSON = data.responseJSON
                if (responseJSON) {
                    toastAlert('', (responseJSON.message), 'error')
                    var errors = responseJSON.errors;
                    if (errors) {
                        for (var error in errors) {
                            var input_field_e = $('#' + error)
                            input_field_e.addClass('is-invalid')
                            input_field_e.after('<span  class="error invalid-feedback text-left">' + errors[error][0] + '</span>')
                        }
                    }
                }
            }
        });

        // if (this_form.find('#no_wait_response').length) {
        //     setTimeout(function () {
        //         toastAlert('Message', 'Success', 'success');
        //         window.location.href = this_form.data('redirect')
        //     }, 5000)
        // }

    });

    function loading(attr = true) {
        if (attr) {
            Swal.fire({
                title: 'Loading...',
                html: 'Please wait...',
                allowEscapeKey: false,
                allowOutsideClick: false,
                didOpen: () => {
                    Swal.showLoading()
                }
            });
        } else {
            swal.close();
        }
    }

    $(function () {
        $('.repeater').repeater()
        $('.select2').select2()
        $('.compose-textarea').summernote()
        setTimeout(function () {
            $('.disabled-input').removeAttr('disabled')
        }, 1000)
        $('ul.nav-sidebar a').filter(function () {
            return $(this).hasClass('active');
        }).parentsUntil(".sidebar-menu > .treeview-menu").siblings().removeClass('active menu-open').end().addClass('active menu-open');
    })

    $(document).on('change', '#email_template', function () {
        $('.compose-textarea').summernote('code', $(this).val())
    })

    $(document).on('select2:open', () => {
        document.querySelector('.select2-search__field').focus();
    });

    $(document).on('change', '.todo-checkbox', function (e) {
        var is_active = 1;
        if ($(this).is(':checked')) {
            is_active = 0
        }
        console.log(is_active)
        $.ajax({
            method: 'PUT',
            url: '{{url('todos')}}/' + $(this).val(),
            data: {
                is_active
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                toastAlert('Message', response.message, 'success');
            },
            error: function (response) {
                toastAlert('', (response.responseJSON ? response.responseJSON.message : 'something went wrong'), 'error')
            }
        })
    })

    // $(document).on('select2:open', () => {
    //     document.querySelector('.select2-search__field').focus();
    // });
    $(document).on('click', '.nav-link', function (e) {
        if ($(this).data('widget') == "pushmenu") {

        }
    })

    function checkNotifications() {
        $.ajax({
            method: 'post',
            url: '{{url('notifications')}}',
            data: {
                type: 'unread'
            },
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {
                if (response.unread_count > 0) {
                    $('.notifications-count').html(response.unread_count)
                }
                $('.notifications-dropdown').html(response.dropdown)

                setTimeout(function () {
                    checkNotifications()
                }, 10000)
            }
        })
    }

    $('.row-all-check').on('change', function (e) {
        if (e.target.checked) {
            $('.row-check').prop("checked", true)
        } else {
            $('.row-check').prop("checked", false)
        }
    })

    function getCheckedRows() {
        var result = [];
        $('.row-check:checked').each(function () {
            result.push($(this).val())
        });

        if (!result.length) {
            toastAlert('', 'Please select any record', 'error')
        }

        return result;
    }

    $(function () {
        // checkNotifications()
    })

</script>

<script src="{{asset('/')}}dist/js/filters-fields-custom.js?v={{config('constants.asset_v')}}"></script>
