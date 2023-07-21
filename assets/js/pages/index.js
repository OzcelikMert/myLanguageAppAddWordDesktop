$(function() {
    let table = new DataTable('#myTable', {
        responsive: true
        // config options...
    });


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
                title: 'Boş Bırakmayın!',
                text: `Lütfen boş bırakmayınız. Gerekli yerleri doldurunuz.`,
            });
            return false;
        }

        $.Toast.showToast({
            "title": "Ekleniyor...",
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
                    Swal.fire({
                        icon: 'success',
                        title: 'Eklendi!',
                        text: `'${data.textNative}' Basari ile eklendi.`,
                    });
                }else {
                    Api.showErrorMessage(json.error_code)
                }
            },
            error: () => {
                $.Toast.hideToast();
                Swal.fire({
                    icon: 'error',
                    title: "Sunucu hatası!",
                    text: 'Lütfen yönetici ile iletişime geçin.'
                })
            }
        })
    })
});