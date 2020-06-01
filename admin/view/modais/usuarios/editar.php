<div class="modal inmodal fade" id="editar_usuario" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Fechar</span></button>
                <h4 class="modal-title">Usuário</h4>
                <small class="font-bold">Área destinada a visualiazção e edição de usuários</small>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label>Nome:</label>
                    <input type="text" class="form-control" name="nome">
                </div>
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label>Senha:</label>
                    <input type="password" class="form-control" name="senha">
                </div>
                <div class="form-group">
                    <label>Nível</label>
                    <select class="form-control" name="nivel">
                        <option value="1">Administrador(a)</option>
                        <option value="2">Funcionário(a)</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-delete pull-left">Excluir</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-edit">Salvar</button>
            </div>
        </div>
    </div>
</div>