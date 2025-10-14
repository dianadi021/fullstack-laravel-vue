import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

// import * as bootstrap from "bootstrap";
// import moment from "moment";
import jszip from "jszip";
import pdfmake from "pdfmake";
import DataTable from "datatables.net-vue3";
import DataTablesCore from "datatables.net-bs4";
import "datatables.net-autofill-bs4";
import "datatables.net-buttons-bs4";
import "datatables.net-buttons/js/buttons.colVis.mjs";
import "datatables.net-buttons/js/buttons.html5.mjs";
import "datatables.net-buttons/js/buttons.print.mjs";
import "datatables.net-colreorder-bs4";
import "datatables.net-columncontrol-bs4";
import DateTime from "datatables.net-datetime";
import "datatables.net-fixedcolumns-bs4";
import "datatables.net-fixedheader-bs4";
import "datatables.net-keytable-bs4";
import "datatables.net-responsive-bs4";
import "datatables.net-rowgroup-bs4";
import "datatables.net-rowreorder-bs4";
import "datatables.net-scroller-bs4";
import "datatables.net-searchbuilder-bs4";
import "datatables.net-searchpanes-bs4";
import "datatables.net-select-bs4";
import "datatables.net-staterestore-bs4";

DataTablesCore.Buttons.jszip(jszip);
DataTablesCore.Buttons.pdfMake(pdfmake);
DataTable.use(DataTablesCore);

import Alpine from 'alpinejs'

window.Alpine = Alpine

Alpine.start()
