$(function() {
    let $table = null;
    let rows = [];

    function initTable() {
        function getDeleteButtonElement(row){
            return `<button class="btn btn-danger deleteButton" row-id="${row.wordId}">Delete</button>`
        }

        function getUpdateButtonElement(row) {
            return `<button class="btn btn-warning editButton" row-id="${row.wordId}">Update</button>`
        }

        $.ajax({
            url: "api/get.php",
            type: "GET",
            data: {query: "OK"},
            success: (res) => {
                var json = JSON.parse(res);
                if(json.status){
                    rows = json.rows;
                    if($table == null){
                        $table = new DataTable('#myTable', {
                            responsive: true,
                            data: rows,
                            columns: [
                                {data: "wordId", orderable: true},
                                {data: "wordTextTarget", orderable: false},
                                {data: "wordTextNative", orderable: false},
                                {data: "wordType", orderable: true, render: function (data, type, row) { return getWordTypeName(data)}},
                                {data: "wordStudyType", orderable: true, render: function (data, type, row) { return getStudyTypeName(data)}},
                                {data: "wordId", orderable: false, render: function (data, type, row) { return getUpdateButtonElement(row)}},
                                {data: "wordId", orderable: false, render: function (data, type, row) { return getDeleteButtonElement(row)}}
                            ]
                        });
                    }else {
                        $table.clear();
                        $table.rows.add(rows);
                        $table.draw();
                    }
                }
            },
            error: () => {
                Swal.fire({
                    icon: 'error',
                    title: "Server Error!",
                    text: 'Please you should contact to admin.'
                })
            }
        })
    }

    $("#addForm").on("submit", function (e) {
        e.preventDefault();

        let data = $(this).serializeObject();

        if(
            Variable.isEmpty(data.textTarget) ||
            Variable.isEmpty(data.textNative) ||
            Variable.isEmpty(data.wordType) ||
            Variable.isEmpty(data.studyType)
        ){
            Swal.fire({
                icon: 'error',
                title: 'Do not leave empty boxes!',
                text: `Please do not leave empty boxes.`,
            });
            return false;
        }

        $.Toast.showToast({
            "title": "Adding...",
            "icon": "loading",
            "duration": 0
        });

        $.ajax({
            url: "api/add.php",
            type: "POST",
            data: data,
            success: (res) => {
                $.Toast.hideToast();
                var json = JSON.parse(res);
                if(json.status){

                    let $form = $("#addForm");

                    $form.find("input[name='textTarget']").val("");
                    $form.find("input[name='textNative']").val("");
                    $form.find("input[name='comment']").val("");

                    initTable();

                    Swal.fire({
                        icon: 'success',
                        title: 'Added!',
                        text: `'${data.textNative}' has successfully added.`,
                    });
                }else {
                    Api.showErrorMessage(json.error_code)
                }
            },
            error: () => {
                $.Toast.hideToast();
                Swal.fire({
                    icon: 'error',
                    title: "Server Error!",
                    text: 'Please you should contact to admin.'
                })
            }
        })
    })

    $(document).on("click", ".deleteButton", async function (e) {
        let row = ArrayList.find(rows, $(this).attr("row-id"), "wordId");

        let swal = await Swal.fire({
            title: 'Are you sure?',
            text: `Are you sure about delete this word '${row.wordTextNative}'?`,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes!',
            cancelButtonText: "No"
        })

        if(swal.value){
            $.Toast.showToast({
                "title": "Deleting...",
                "icon": "loading",
                "duration": 0
            });

            $.ajax({
                url: "api/delete.php",
                type: "POST",
                data: {wordId: row.wordId},
                success: (res) => {
                    $.Toast.hideToast();

                    var json = JSON.parse(res);

                    if(json.status){
                        initTable();
                    }else {
                        Api.showErrorMessage(json.error_code)
                    }
                },
                error: () => {
                    $.Toast.hideToast();
                    Swal.fire({
                        icon: 'error',
                        title: "Server Error!",
                        text: 'Please you should contact to admin.'
                    })
                }
            })
        }
    });

    $(document).on("click", ".editButton", function (e) {
        let row = ArrayList.find(rows, $(this).attr("row-id"), "wordId");

        let $form = $("#editForm");

        $form.find("input[name='textTarget']").val(row.wordTextTarget);
        $form.find("input[name='textNative']").val(row.wordTextNative);
        $form.find("input[name='comment']").val(row.wordComment);
        $form.find("input[name='wordType'][value='" + row.wordType + "']").prop('checked', true);
        $form.find("input[name='studyType'][value='" + row.wordStudyType + "']").prop('checked', true);

        $("#editModal").modal("toggle");
    });

    initTable();
});