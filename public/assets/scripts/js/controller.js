const base_url = window.location.host;
const [host, port] = base_url.split(':');
const $base_url = (port ? `http://${host}:${port}` : `https://${host}`);

$(document).ready(function () {
    $.getScript(`${$base_url}/assets/scripts/js/functions.js`, async function () {
        DisableRightClickOnMouse();
    });
});

function ConvertToIDR($val) {
    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', minimumFractionDigits: 2 }).format($val);
}

function SwalModal(optional) {
    const {
        title,
        html,
        icon,
        showCloseButton,
        confirmButtonText,
        showCancelButton,
        cancelButtonText,
        showDenyButton,
        denyButtonText,
        footer
    } = optional;

    return Swal.fire(optional);
}

function AllNotify(optional, section) {
    switch (section) {
        case "success":
            optional.title = "Berhasil!";
            optional.icon = "success";

            toastr.success(optional.msg, optional.title);
            break;

        case "error":
            optional.title = "Kesalahan!";
            optional.icon = "error";

            toastr.error(optional.msg, optional.title);
            break;

        case "warning":
            optional.title = "Peringatan!";
            optional.icon = "warning";

            toastr.warning(optional.msg, optional.title);
            break;

        case "info":
            optional.title = "Sekilas Informasi";
            optional.icon = "info";

            toastr.info(optional.msg, optional.title);
            break;

        default:
            break;
    }

    SwalModal(optional);
}
