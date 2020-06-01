var Usuario = {

	data: {
		id: null,
		nome: null,
		email: null,
		senha: null,
		nivel: null,
	},

	users: [],

	modalAdd: $('#adicionar_usuario'),
	modalEdit: $('#editar_usuario'),

	buttonAdd: $('#adicionar_usuario .btn-add'),
	buttonEdit: $('#editar_usuario .btn-edit'),
	buttonDelete: $('#editar_usuario .btn-delete'),

	table: $('.user-table'),

	requiredFields: ['nome', 'email', 'senha', 'nivel'],
	tableFields: ['id', 'nome', 'email', 'nivel'],

	init: function () {
		if (this.users.length > 0)
			this.loadDataInTable();

		this.table.on('click', 'tr', function () {
			var id = $(this).data('id');
			if (id != undefined)
				Usuario.loadDataInModal(id);
		});

		this.buttonAdd.on('click', Usuario.save);
		this.buttonEdit.on('click', function () {
			var id = $(this).parents('.modal').data('user-id');
			if (id != undefined)
				Usuario.edit(id);
		});

		this.buttonDelete.on('click', function () {
			var id = $(this).parents('.modal').data('user-id');
			if (id != undefined)
				Usuario.delete(id);
		});
	},

	loadDataInModal: function (id) {
		var element = Usuario.findElementInArray(Usuario.users, id);
		if (element != false) {
			$.each(element, function (index, value) {
				Usuario.setField(Usuario.modalEdit, index, value, ['id']);
			});
			Usuario.modalEdit.data('user-id', id);
			Usuario.modalEdit.modal('show');
		}
	},

	loadData: function (modal) {
		$.each(Usuario.data, function (index, value) {
			Usuario.data[index] = modal.find('[name=' + index + ']').val();
		});
	},

	setField: function (form, index, value, excessoes = []) {
		var field = form.find('[name=' + index + ']');

		if (excessoes.indexOf(index) == -1) { // se valor estiver dento de 'excessoes', passa adiante
			var tag = field.prop('tagName').toLowerCase();
			if (tag == 'input' || tag == 'textarea' || tag == 'select')
				field.val(value);
			else if (tag == 'span' || tag == 'label' || tag == 'td')
				field.text(value);
		}
	},

	findElementInArray: function (array, value) {
		var result = false;
		$.each(array, function (idx, val) {
			if (val['id'] == value)
				result = val;
		});
		return result;
	},

	save: function () {
		Usuario.loadData(Usuario.modalAdd);

		if (Usuario.verificaObrigatorios()) {
			$.post('../../controller/usuario/insert.php', { user: Usuario.data }, function (respond) {
				if (!respond.includes('error')) {
					toastr.success('Usuário cadastrado com sucesso!', 'Notificação');
					Usuario.data.id = respond;
					Usuario.addInArray(Usuario.data);
					Usuario.addInTable(Usuario.data);
					Usuario.resetFields(Usuario.modalAdd);
					Usuario.modalAdd.modal('hide');
				}
				else{
					toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
				}
			});
		}
	},

	edit: function (id) {
		Usuario.loadData(Usuario.modalEdit);
		Usuario.data.id = id;

		if (Usuario.verificaObrigatorios()) {
			if (Usuario.verificaModificacoes()) {
				console.table(Usuario.data);
				$.post('../../controller/usuario/update.php', { user: Usuario.data }, function (respond) {
					// alert(respond);
					if (!respond.includes('error')) {
						toastr.success('Usuário editado com sucesso!', 'Notificação');
						Usuario.editInTable(Usuario.data);
						Usuario.resetFields(Usuario.modalEdit);
						Usuario.modalEdit.modal('hide');
					}
					else {
						toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
					}
				});
			}
		}
	},

	delete: function (id) {
		var element = Usuario.findElementInArray(Usuario.users, id);
		if (element != false) {
			$.post('../../controller/usuario/delete.php', { id: element.id }, function (respond) {
				// alert(respond);
				if (!respond.includes('error')) {
					toastr.success('Usuário removido com sucesso!', 'Notificação');
					Usuario.removeFromTable(element.id);
					Usuario.resetFields(Usuario.modalEdit);
					Usuario.modalEdit.modal('hide');
				}
				else{
					toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
				}
			});
		}
	},

	loadDataInTable: function () {
		$.each(this.users, function (index, value) {
			Usuario.addInTable(value);
		});
	},

	addInArray: function (user) {
		Usuario.users.push(user);
	},

	addInTable: function (user) {
		Usuario.table.append(Usuario.createHtml(user));
	},

	editInTable: function (user) {
		var form = Usuario.table.find('tr[data-id=' + user['id'] + ']');
		$.each(Usuario.tableFields, function (index, value) {
			var field = $(form).find('td').get(index);
			if (value == 'nivel')
				$(field).text(Usuario.fullName(user[value])); // melhorar isso
			else
				$(field).text(user[value]);
		});
	},

	removeFromTable: function (id) {
		Usuario.table.find('tr[data-id=' + id + ']').remove();
	},

	verificaObrigatorios: function () {
		var resultado = true;
		$.each(Usuario.requiredFields, function (index, value) {
			if (Usuario.data[value] == "" || Usuario.data[value] == null)
				resultado = false;
		});
		return resultado;
	},

	verificaModificacoes: function () {
		var result = true;
		var element = Usuario.findElementInArray(Usuario.data.id);
		if (element != false) {
			$.each(element, function (index, value) {
				if (Usuario.data[index] != value)
					result = false;
			});
		}
		return result;
	},

	createHtml: function (user) {
		var html = '<tr data-id="' + user['id'].trim() + '">';
		html += '<td> ' + user['id'] + ' </td>';
		html += '<td> ' + user['nome'] + ' </td>';
		html += '<td> ' + user['email'] + ' </td>';
		html += '<td> ' + Usuario.fullName(user['nivel']) + ' </td>';
		html += '</tr>';
		return html;
	},

	fullName: function (nivel) {
		nivel = parseInt(nivel);
		switch (nivel) {
			case 1:
				return 'Administrador(a)';
				break;
			case 2:
				return 'Funcionário(a)';
				break;
			default:
				return 'Funcionário(a)';
				break;
		}
	},

	resetFields: function (form) {
		form.find('input, textarea').each(function () {
			$(this).val("");
		});
	}

};