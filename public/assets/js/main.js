var loader = '<div style="color: #053966;"><i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i><span class="sr-only">Loading...</span></div>';
var errorMessage = 'Sorry an error occurred';

listManager = {
    retrieve    : true,
    responsive  : true,
    processing  : true,
    serverSide  : true,
    bLengthChange  : false,
    bSortable  : false,
    searching  : false,
    token       : "",
    search      : "",
    listUrl     : "",
    deleteUrl   : "",
    deleteTypeId: "",
    dataTable   : [""],
    oTable      : "",
    param       : "",
    sorting     : [ [0,'desc'] ],
    ready : function()
    {
        $.fn.dataTable.ext.errMode = 'none';
        this.listTable();

        $('#dataTables_filter input').bind('keyup', function(e) {
            if (e.which == 13) {
                this.listTable();
            }
        });
    },
    listTable : function()
    {
        oTable = $('#dataTables')
            .on( 'error.dt', function ( e, settings, techNote, message ) {
                alert("Sory error, please retry");
            })
            .DataTable({
                "retrieve": this.retrieve,
                "responsive": this.responsive,
                "processing": this.processing,
                "serverSide": this.serverSide,
                "bLengthChange": this.bLengthChange,
                'bSortable': this.bSortable,
                "searching": this.searching,
                "aaSorting": this.sorting,
                'aTargets': [ 0 ],
                "ajax": {
                    "url": this.listUrl,
                    "data": {
                       _token: this.token,
                       search: this.search,
                    },
                    "type": "POST",
                },
                initComplete: function() {
                    $('div.dataTables_filter input').unbind();
                    $('div.dataTables_filter input').bind('keyup', function(e) {
                        if(e.keyCode == 13) {
                            oTable.search( this.value ).draw();
                            
                            /*this.api().columns().every(function () {
                                var column = this;
                                var input = document.createElement("input");
                                $(input).appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });*/
                        }
                    });
                },
                "columns": this.dataTable
            });
    },
    delete : function(id)
    {
        console.log(this.deleteUrl+'/'+id);
        var yes = confirm('Are you sure ?');
        if (yes)
        {
            $.ajax({
                type:"DELETE",
                url:this.deleteUrl+'/'+id,
                dataType:"JSON",
                data: {
                    method: '_DELETE',
                    submit: true,
                    _token: this.token
                },
                success:function(resp){
                    try {
                        if(resp.statusCode == "200") {
                            location.reload();
                        } else {
                            location.reload();
                            // alert(errorMessage);
                        }
                    } catch(e) {
                        location.reload();
                        // alert(errorMessage + e);
                    }
                },
                error:function(){
                    location.reload();
                    // alert(errorMessage);
                }
            });
        }
    }
}

popupManager = {
    urlAdd : "",
    urlUpdate : "",
    token : "",
    add : function()
    {
        $.ajax({
            url: this.urlAdd,
            type: "post",
            async: true,
            data: {
                _token: this.token,
            },
            success: function (data) {
                $('#popup').html(data);
                $('#popup').modal('show');
            }
        });
    },
    update : function(id)
    {
        $.ajax({
            url: this.urlUpdate,
            type: "post",
            async: true,
            data: {
                _token: this.token,
                id: id,
            },
            success: function (data) {
                $('#popup').html(data);
                $('#popup').modal('show');
            }
        });
    }
}

saveManager = {
    urlRedirect : "",
    submit : function(formId, url)
    {
        $('#'+formId).on('submit',(function(e)
        {
            e.preventDefault();
            var dataString = $("#"+formId).serialize();
            $.LoadingOverlay("show");
            $.ajax({
                url : url,
                type: "PUT",
                data : dataString,
                dataType: 'JSON',
                success:function(resp)
                {
                    // $("#alert").html('<div class="alert alert-success">'+resp.message+'</div>');
                    $.LoadingOverlay("hide");
                    location.reload();
                },
                error:function(resp)
                {
                    try{

                        var obj = jQuery.parseJSON(resp.responseText);
                        var errorsArr = [];
                        for (error in obj.errors)
                        {
                            // errorsArr.push(obj.errors[error][0]);
                            // $("#alert").html('<div class="alert alert-danger">'+errorsArr+'</div>');
                            $("#alert").html('<div class="alert alert-danger">'+obj.errors[error][0]+'</div>');
                            $.LoadingOverlay("hide");
                            return false;
                        }
                        $("#alert").html('<div class="alert alert-danger">'+errorMessage+'</div>');
                        $.LoadingOverlay("hide");
                        return false;
                    }
                    catch(e) {
                        $("#alert").html('<div class="alert alert-danger">'+errorMessage+'</div>');
                        $.LoadingOverlay("hide");
                        return false;
                    }
                }
            });
            return false;
        }));
    }
}

select = {
    urlRedirect : "",
    load : function(self, url, divId)
    {
        $('#'+divId).html(loader);
        var _token = $(self).data('token');
        var val = $(self).val();
        var selectedid = $(self).data('selectedid');
        $.ajax({
            url : url,
            type: "POST",
            data : {
                "id": val,
                "selectedId": selectedid,
            },
            headers: {
                'X-CSRF-TOKEN': _token
            },
            success:function(resp)
            {
                $('#'+divId).html(resp);
            },
            error:function(resp)
            {
                // functions.ShowDialogBox('Warning', errorMessage);
            }
        });
    }

}

functions = {
    url : "",
    urlRedirect : "",

    removeDiv : function(id)
    {
        $("#"+id).remove();
    },
    ShowDialogBox : function(title, content)
    {
        var elem = $(this).closest('.item');
        
        $.confirm({
            'title'     : title,
            'message'   : content,
            'buttons'   : {
                OK   : {
                    'class' : 'blue',
                    'action': function(){
                        // elem.slideUp();
                    }
                }
            }
        });
    }
}

$(".onlyNumeric").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl+A, Command+A
        (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
         // Allow: home, end, left, right, down, up
        (e.keyCode >= 35 && e.keyCode <= 40)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});