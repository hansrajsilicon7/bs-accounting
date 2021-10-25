
<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="mi-modal" style="margin-top:180px;">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Do You Really Want to Logout?</h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" id="modal-btn-si">Yes</button>
        <button type="button" class="btn btn-danger" id="modal-btn-no">No</button>
      </div>
    </div>
  </div>
</div>

<script>

var modalConfirm = function(callback){
  
  $("#btn-confirm").on("click", function(){
    $("#mi-modal").modal('show');
  });

  $("#modal-btn-si").on("click", function(){
    callback(true);
    $("#mi-modal").modal('hide');
  });
  
  $("#modal-btn-no").on("click", function(){
    callback(false);
    $("#mi-modal").modal('hide');
  });
};

modalConfirm(function(confirm){
  if(confirm){
    //Actions
   // $("#result").html("Logout");
	window.location = 'logout.php';
  }else{
    //Actions
   // $("#result").html("NO Logout");
  }
});

</script>
