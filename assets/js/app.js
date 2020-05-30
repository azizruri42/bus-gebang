$(document).ready(function() {
    $('#now-time').html(headerTime())
})

function headerTime() {
    const fullMonth = ['', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
    let time = new Date();
    let day = time.getDate();
    let month = fullMonth[time.getMonth()];
    let year = time.getFullYear();
    return day + ' ' + month + ' ' + year;
}