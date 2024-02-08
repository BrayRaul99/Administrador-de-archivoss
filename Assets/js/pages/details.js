const id_carpeta = document.querySelector("#id_carpeta");
let tbl;

document.addEventListener("DOMContentLoaded", function () {
  tbl = $("#tblDetalle").DataTable({
    ajax: {
      url: base_url + "admin/listardetalle/" + id_carpeta.value,
      dataSrc: "",
    },
    columns: [{ data: "nombre" }, { data: "correo" }, { data: "estado" }, { data: "acciones" }],
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json",
    },
    responsive: true,
    destroy: true,
    order: [[1, "desc"]],
  });
});

function eliminarDetalle(id) {
  const url = base_url + "archivos/eliminarCompartido/" + id;
  eliminarRegistro(
    "ESTAS SEGURO DE ELIMINAR",
    "EL ARCHIVO COMPARTIDO SE ELIMINARA DE FORMA PERMANENTE EN 30 DIAS",
    "Eliminar",
    url,
    tbl
  );
}
