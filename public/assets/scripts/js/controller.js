const base_url = window.location.host;
const [host, port] = base_url.split(':');
const $base_url = (port ? `http://${host}:${port}` : `https://${host}`);

$(document).ready(function () {
    $.getScript(`${$base_url}/assets/scripts/js/functions.js`, async function () {
        DisableRightClickOnMouse();
    });

    $("#loadingAjax").hide();
    $("#loadingContetLoader").hide();
});

function ConvertToIDR($val) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 }).format($val);
}
