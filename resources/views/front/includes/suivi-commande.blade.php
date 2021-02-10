<style type="text/css">
    .modal[data-modal-color] {
  color: #fff;
}

.modal .modal-header {
  padding: 23px 26px;
  border-bottom: 1px solid transparent;
}

.modal .modal-content {
  box-shadow: 0 5px 20px rgba(0, 0, 0, 0.31);
  border-radius: 3px;
  border: 0;
}

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid transparent;
}

.modal[data-modal-color] .modal-footer {
  background: rgba(0, 0, 0, 0.1);
}

.modal[data-modal-color] .modal-footer .btn-link {
  font-weight: 400;
}

.modal[data-modal-color] .modal-title, .modal[data-modal-color] .modal-footer .btn-link {
  color: #fff;
}

.modal .modal-footer .btn-link {
  font-size: 14px;
  color: #000;
  font-weight: 500;
}

.btn-link {
  color: #797979;
  text-decoration: none;
  border-radius: 2px;
}

.modal[data-modal-color] .modal-footer .btn-link:hover {
  background-color: rgba(0, 0, 0, 0.1);
  text-decoration:none;
}

.modal[data-modal-color] .modal-footer .btn-link {
  font-weight: 400;
}
</style>

<div class="modal fade" data-modal-color="" id="modalColor" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color: black">Suivi la commande</h4>
            </div>
            <div class="modal-body" style="color: black">
                <form method="get" action="{{route('commande.suivi-commande')}}">
                    <label>Code de la commande: </label>
                    <input type="text" name="code" class="form-control" required>
                    <button class="btn btn-info" >Suivi</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link" data-dismiss="modal" style="color: black">Fermer</button>
            </div>
        </div>
    </div>
</div>