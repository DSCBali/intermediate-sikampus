(function($){
  deleteConfirmation();
  function deleteConfirmation(){
    $('.delete-link').on('click', function(e){
      e.preventDefault();
      var modal = $('#deleteModal');
      modal.modal('show');
      $('#deleteForm').attr('action',$(this).attr('data-url'));
    });
  }
  setDatepicker();
  function setDatepicker(){
    $('.datepicker').datepicker({
      format: 'yyyy-mm-dd',
      startView: 2,
      autoclose: true,
    });
  }
})(jQuery)
