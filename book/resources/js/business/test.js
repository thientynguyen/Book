require('../bootstrap');
require('./abc');
$(document).ready(function () {
    let url = $('input[name="txtHndUrlApiCate"]').val();
    fetchData(url);

    $(document).on('click', '.btn-edit', function () {
        clickBtnEdit(this);
    });
    $(document).on('click', '#btnSave', function () {
        updateCate(this);
    });
    $("#poupCategory").on('hide.bs.modal', function () {
        $(".form-err").remove();
    });
    $(document).on('click', '.deleteCate', function () {
        deleteCategory(this);
    })
    $('#confirm-delete').on('click', 'btn-ok', function (e) {
        console.log($(this).data(''))

    })
});

async function fetchData(url) {
    await axios.get(url).then((res) => {
        let data = res.data.data;
        $('.msg').html(data);
    });
}

function clickBtnEdit(obj) {
    let tdObject = $(obj).closest('td');
    let id = tdObject.find('input[name="txtHdnId"]').val();

    axios.get(`api/category/${id}`).then((res) => {
        let data = res.data.data;
        $('#categoryName').val(data.categoryName);
        $('#description').val(data.description);
        $('#txtId').val(data.id);
    });
}

function updateCate(obj) {
    let data = {
        categoryName: $('#categoryName').val(),
        description: $('#description').val(),
    };
    let id = $('#txtId').val();
    if (id) {
        axios.put(`api/category/${id}`, data)
            .then((res) => {
                fetchData('api/category');
                $('#poupCategory').modal('hide');
            })
            .catch((err) => {
                let error = err.response.data.error;
                if (error.code === 422) {
                    $(".form-err").remove();
                    $.each(error.message, function (key, value) {
                        $(`#${key}`).after(`<p class="form-err text-danger">${value}</p>`);
                    })
                }
            });
    } else {
        axios.post(`api/category`, data)
            .then((res) => {
                fetchData('api/category');
                $('#poupCategory').modal('hide');
            })
            .catch((err) => {
                let error = err.response.data.error;
                if (error.code === 422) {
                    $(".form-err").remove();
                    $.each(error.message, function (key, value) {
                        $(`#${key}`).after(`<p class="form-err text-danger">${value}</p>`);
                    })
                }
            });
    }
}

// function deleteCategory(obj) {
//     console.log('abc');
//     let id = $(obj).closest('td').find('input[name="txtHdnId"]').val();
//     axios.delete(`api/category/${id}`).then(res => {
//         fetchData('api/category');
//         // $('#poupCategory').modal('hide');
//     }).catch(err=>{
//         let error = err.response.data.error;
//         alert(error.message);
//     })
// }

// require('./abc');
