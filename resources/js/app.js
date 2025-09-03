import './bootstrap';

window.confirmDelete = function(id){
Swal.fire({
  title: "Tem certeza?",
   text: "Essa ação não poderá ser desfeita!",
   icon: "warning",
showCancelButton: true,
  confirmButtonColor: "#dd3333",
  cancelButtonColor: "#3085d6",
  confirmButtonText: "Sim, excluir!",
  cancelButtonText: "Cancelar"
}).then((result) => {
    if(result.isConfirmed){
        document.getElementById("delete-form-"+ id).submit();
    }

})
}
