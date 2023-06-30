const myToastEl = document.getElementById('inform');
const inform = bootstrap.Toast.getOrCreateInstance(myToastEl);

function changeCount(cart_id, type_change) {
    console.log(cart_id, type_change);

    $.ajax({
        url: '/?view=cart',
        type: 'GET',
        data: {
            id: cart_id,
            type: type_change,
        },
        success: function (res) {
            if (res == 'no_null') {
                console.log(res);
                $('div.toast-body').text('Количество не может быть меньше 1!');
                inform.show();
                return;
            }
            if (res == 'no_count') {
                console.log(res);
                $('div.toast-body').text('У нас нет такого количества товара!');
                inform.show();
                return;
            }
            res = JSON.parse(res);
            console.log(res.count, res.sum);
            $('span#count' + cart_id).text(res.count);
            $('span#sum' + cart_id).text(res.sum);
            $('span#sum_all').text(res.sum_all);
            $('span#count_all').text(res.count_all);
        }
    });
    console.clear();
}

function changeStatus(status, id) {
    $.ajax({
        url: '/?view=allOrders',
        type: 'GET',
        data: {
            new_status: status,
            id_order: id,
        },
        success: function () {
            window.location.href = '/?view=allOrders';
        },
    });
}