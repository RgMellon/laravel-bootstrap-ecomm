<button type="button" class="btn btn-info" data-toggle="modal" data-target="#EditModal{{$p->id}}">
  <i class="fas fa-edit"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="EditModal{{$p->id}}" tabindex="-1" role="dialog" aria-labelledby="EditModal{{$p->id}}Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="EditModal{{$p->id}}Label">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        @include('dashboard.form_update')
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>