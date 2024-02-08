const frm = document.querySelector("#formulario");
const btnNuevo = document.querySelector("#btnNuevo");
const title = document.querySelector("#title");

const nombre = document.querySelector("#nombre");

const modalRegistro = document.querySelector("#modalRegistro");

const myModal = new bootstrap.Modal(modalRegistro);

let tblUsuarios;

document.addEventListener("DOMContentLoaded", function () {
  //CARGAR DATOS CON DATATABLE
  tblUsuarios = $("#tblUsuarios").DataTable({
    ajax: {
      url: base_url + "usuarios/listar",
      dataSrc: "",
    },
    columns: [
      { data: "acciones" },
      { data: "id" },
      { data: "nombres" },
      { data: "correo" },
      { data: "telefono" },
      //{ data: "perfil" },
      { data: "fecha" },
    ],
    language: {
      url: "https://cdn.datatables.net/plug-ins/1.13.7/i18n/es-ES.json",
    },
    responsive: true,
    order: [[1, "asc"]],
  });

  btnNuevo.addEventListener("click", function () {
    title.textContent = "NUEVO USUARIO";
    frm.id_usuario.value = '';
    frm.reset();
    frm.clave.removeAttribute('readonly');
    myModal.show();
  });
  //registro usuario por ajax
  frm.addEventListener("submit", function (e) {
    e.preventDefault();
    if (
      frm.nombre.value == "" ||
      frm.apellido.value == "" ||
      frm.correo.value == "" ||
      frm.telefono.value == "" ||
      frm.clave.value == "" ||
      frm.rol.value == ""
    ) {
      alertaPerzonalizada("warning", "TODOS LOS CAMPOS SON REQUERIDOS");
    } else {
      const data = new FormData(frm);
      const http = new XMLHttpRequest();
      const url = base_url + "usuarios/guardar";
      http.open("POST", url, true);
      http.send(data);
      http.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          const res = JSON.parse(this.responseText);
          alertaPerzonalizada(res.tipo, res.mensaje);
          if (res.tipo == "success") {
            frm.reset();
            myModal.hide();
            tblUsuarios.ajax.reload();
          }
        }
      };
    }
  });
});

function eliminar(id) {
  const url = base_url + "usuarios/delete/" + id;
  eliminarRegistro(
    "Esta SEGURO DE ELIMINAR",
    "EL USUARIO NO SE ELIMINARA DE FORMA PERMANENTE",
    "Eliminar",
    url,
    tblUsuarios
  );
}

function editar(id) {
  const http = new XMLHttpRequest();

  const url = base_url + 'usuarios/editar/' + id;

  http.open("GET", url, true);

  http.send();

  http.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      const res = JSON.parse(this.responseText);
      title.textContent = 'EDITAR USUARIO' ;
      frm.id_usuario.value = res.id;
      frm.nombre.value = res.nombre;
      frm.apellido.value = res.apellido;
      frm.correo.value = res.correo;
      frm.telefono.value = res.telefono;
      frm.clave.value = '0000000000';
      frm.clave.setAttribute('readonly', 'readonly'); 
      frm.rol.value = res.rol;
      myModal.show();

    }
  };
}
