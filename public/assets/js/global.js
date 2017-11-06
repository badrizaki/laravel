listManager = {
    publicUrlAdmin : "",
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
        listManager.listTable();

        $('#dataTables_filter input').bind('keyup', function(e) {
            if (e.which == 13) {
                listManager.listTable();
            }
        });
    },
    listTable : function()
    {
        oTable = $('#dataTables')
            .on( 'error.dt', function ( e, settings, techNote, message ) {
                alert("Data error, silahkan coba lagi atau hubungi administrator");
            })
            .DataTable({
                retrieve: true,
                "responsive": true,
                "processing": true,
                "serverSide": true,
                "bLengthChange": false,
                'bSortable': false,
                'aTargets': [ 0 ],
                // "searching": false,
                "aaSorting": listManager.sorting,
                "ajax": {
                    "url": this.listUrl+this.param,
                    "type": "POST",
                },
                initComplete: function() {
                    $('div.dataTables_filter input').unbind();
                    $('div.dataTables_filter input').bind('keyup', function(e) {
                        if(e.keyCode == 13) {
                            oTable.search( this.value ).draw();
                        }
                    });
                },
                "columns": listManager.dataTable
            });
    },
    delete : function(id,imageId){
        var yes = confirm('Anda ingin menghapus data ini?');
        if (yes) {
            $.ajax({
                type:"POST",
                url:this.deleteUrl,
                data:listManager.deleteTypeId+"="+id,
                dataType:"JSON",
                success:function(resp){
                    try {
                        if(resp.content.statusCode == "001") {
                            alert("Data berhasil di hapus");
                            location.reload();
                        } else {
                            alert("Data gagal di hapus atau Anda tidak mempunyai akses, silahkan hubungi administrator");
                        }
                    } catch(e) {
                        alert("Data gagal di hapus atau Anda tidak mempunyai akses, silahkan hubungi administrator" + e);
                    }
                },
                error:function(){
                    alert("Data gagal di hapus atau Anda tidak mempunyai akses, silahkan hubungi administrator");
                }
            });
        }
    }
}

addUpdateManager = {
    urlRedirect : "",
    publicUrl : "",
    ready : function()
    {
        $('.tooltip-cont').tooltip({
            selector: "[data-toggle=tooltip]",
            container: "body"
        });
    },
    submit : function(formId, url)
    {
        $('#'+formId).on('submit',(function(e)
        {
            e.preventDefault();
            /*if ($("form")[0].checkValidity())
            {*/
                $.LoadingOverlay("show");
                $.ajax({
                    method: "POST",
                    url : url,
                    data : new FormData(this),
                    cache:false,
                    contentType: false,
                    processData: false,
                    dataType: 'json',
                    success:function(resp)
                    {
                        if (resp.statusCode == "200")
                        {
                            // functions.ShowDialogBox('Info', resp.message);
                            if (addUpdateManager.urlRedirect == "") {
                                location.reload();
                            } else {
                                window.location.href = addUpdateManager.urlRedirect;
                            };
                        } else {
                            functions.ShowDialogBox('Warning', resp.message);
                        };
                        $.LoadingOverlay("hide");
                    },
                    error:function(resp)
                    {
                        functions.ShowDialogBox('Warning', 'Maaf terjadi kesalahan, silahkan hubungi administrator');
                        $.LoadingOverlay("hide");
                    }
                });
            // } else alert("Lengkapi semua data !!");
            return false;
        }));
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

select = {
    urlItem : "",
    urlBranch : "",
    ready : function()
    {
        $('#branch').selectize({
            valueField: 'BranchID',
            labelField: 'BranchName',
            searchField: 'BranchName',
            create: false,
            render: {
                option: function(item, escape)
                {
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="BranchName">' + escape(item.BranchName) + '</span>' +
                        '</span><br>' +
                        // '<span class="description">' + escape(item.Description) + '</span>' +
                    '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.ajax({
                    url: select.urlBranch,
                    type: 'POST',
                    data : "search="+encodeURIComponent(query),
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res.repositories);
                        // callback(res.repositories.slice(0, 10));
                    }
                });
            }
        });

        $('#item').selectize({
            valueField: 'ItemID',
            labelField: 'nama1',
            searchField: 'nama1',
            create: false,
            render: {
                option: function(item, escape)
                {
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="nama1">' + escape(item.nama1) + '</span>' +
                        '</span><br>' +
                        // '<span class="description">' + escape(item.Description) + '</span>' +
                    '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.ajax({
                    url: select.urlItem,
                    type: 'POST',
                    data : "search="+encodeURIComponent(query),
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res.repositories);
                        // callback(res.repositories.slice(0, 10));
                    }
                });
            }
        });

        $('.selectBranch').selectize({
            valueField: 'BranchID',
            labelField: 'BranchName',
            searchField: 'BranchName',
            create: false,
            render: {
                option: function(item, escape)
                {
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="BranchName">' + escape(item.BranchName) + '</span>' +
                        '</span><br>' +
                        // '<span class="description">' + escape(item.Description) + '</span>' +
                    '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.ajax({
                    url: select.urlBranch,
                    type: 'POST',
                    data : "search="+encodeURIComponent(query),
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res.repositories);
                        // callback(res.repositories.slice(0, 10));
                    }
                });
            }
        });

        $('.selectItem').selectize({
            valueField: 'ItemID',
            labelField: 'nama1',
            searchField: 'nama1',
            create: false,
            render: {
                option: function(item, escape)
                {
                    return '<div>' +
                        '<span class="title">' +
                            '<span class="nama1">' + escape(item.nama1) + '</span>' +
                        '</span><br>' +
                        // '<span class="description">' + escape(item.Description) + '</span>' +
                    '</div>';
                }
            },
            load: function(query, callback) {
                if (!query.length) return callback();
                $.ajax({
                    url: select.urlItem,
                    type: 'POST',
                    data : "search="+encodeURIComponent(query),
                    error: function() {
                        callback();
                    },
                    success: function(res) {
                        callback(res.repositories);
                        // callback(res.repositories.slice(0, 10));
                    }
                });
            }
        });

    }
}