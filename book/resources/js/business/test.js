require('../bootstrap');
require('./abc');
$(document).ready(function () {
    fetchData();
});

async function fetchData() {
    await axios.get('api/category').then((res) => {
        let data = res.data.data;
        $('.msg').html( buildTable(data));
    });
}
function buildTable(array) {
    var result = array.map((item, index) => {
        let data = `
        <tr>
            <td>${index}</td>
            <td>${item.categoryName}</td>
            <td>${item.description}</td>
            <td><button>Delete</button> <button>edit</button></td>
        </tr>
        `;

        return data;
    })
    return result;
}
// require('./abc');
