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
})(jQuery)
