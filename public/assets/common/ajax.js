
const request = (url, body, method) => {
    return new Promise((resolve, reject) => {
        $.ajax({
            url: url,
            type: method,
            data: body,
            async: true,
            success: function (data) {
                resolve(data);
            },
            error: function (jqXHR) {
                console.log(jqXHR.status);
                reject(jqXHR);
            },
        });
    });
}

const get = async (url, params) => {
    return await request(url, params, 'GET');
}

const post = async (url, body) => {
    return await request(url, body, 'POST');
}

const put = (url, body) => {
    return request(url, body, 'PUT');
}

const del = (url) => {
    return request(url, null, 'DELETE');
}

//format date
const formatDate = (date) => {
    return new Date(date).toLocaleDateString('vi-VN', {
        day: '2-digit',
        month: '2-digit',
        year: 'numeric',
        hour: '2-digit',
        minute: '2-digit',
    });
}


