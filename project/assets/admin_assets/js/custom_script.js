
function editsgrouplink(id, sevname){
   var serviceID = id;
   var serviceName = sevname;
   var url=formaction+id;

    $('#editgroupname').modal('show');
    $('#editgroupname').modal('hide'); 
    $('#editgroupname').data('bs.modal',null);
    $('#editgroupname').modal({backdrop: 'static', keyboard: false}) ;
    var mbody = '<form id="editServGroup" method="POST" action="'+url+'"><div class="form-label-group"><label>Edit Group Name</label><input type="text" id="groupName" name="updatedServName" class="form-control" value="'+serviceName+'"></div><button type="submit" class="btn btn-primary mt-1">Submit</button></form>';
    $('.modal-body').html(mbody);
   
}   