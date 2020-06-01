var Post = {
	
	data: {
		id: null,
		titulo: null,
		corpo: null
	},

	post: [],

	posts: [],

	addForm: $('#add_post'),
	editForm: $('#edit_post'),
	viewForm: $('#view_post'),

	buttonAdd: $('#add_post .btn-add'),
	buttonEdit: $('#edit_post .btn-edit'),
	buttonDelete: $('#edit_post .btn-delete'),

	grid: $('.post-grid'),
	editor: null,

	viewFields: ['data', 'titulo', 'corpo'],
	requiredFields: ['titulo', 'corpo'],
	gridFields: ['titulo', 'corpo'],

	init: function(){

		if(this.posts.length > 0)
			this.loadDataInGrid(); // carrega os posts num grid

		if(Object.keys(this.post).length > 0){
			this.loadDatainView(); // carrega um post na página
			this.buttonDelete = $('#view_post .btn-delete');
		}

		this.buttonAdd.on('click', Post.save);

		this.buttonEdit.on('click', function(){
			var id = $(this).parents('form').data('post-id');
			if(id != undefined)
				Post.edit(id);
		});

		this.buttonDelete.on('click', function(){
			var id = $(this).parents('#view_post').data('post-id');
			if(id != undefined)
				Post.delete(id);
		});

	},

	loadDataInGrid: function(){
		$.each(this.posts, function(index, value){
			Post.addInGrid(value);
		});
	},

	loadDatainView: function(){
		$('.post-content').append(Post.createHtmlView(Post.post));
	},

	addInGrid: function(post){
		Post.grid.append(Post.createHtml(post));
	},

	loadDataInForm: function(id){
		$.each(Post.data, function(index, value){
			if(index == 'corpo')
				Post.editor.code(Post.post[index]);
			else
				Post.setField(Post.editForm, index, Post.post[index], ['id']);
		});
		Post.editForm.data('post-id', id);
	},

	loadData: function(form){
		$.each(Post.data, function(index, value){
			if(index == 'corpo')
				Post.data[index] = ($('.summernote').code()).replace(/(\r\n|\n|\r)/gm, "").trim();
			else
				Post.data[index] = form.find('[name='+index+']').val();
		});
	},

	setField: function(form, index, value, excessoes=[]){
		var field = form.find('[name='+index+']');

		if(excessoes.indexOf(index) == -1){
			var tag = field.prop('tagName').toLowerCase(); 
			if(tag == 'input' || tag == 'textarea' || tag == 'select')
				field.val(value);
			else if(tag == 'span' || tag == 'label' || tag == 'td')
				field.text(value);
		}
	},

	findElementInArray: function(array, value){
		var result = false;
		$.each(array, function(idx, val){
			if(val['id'] == value)
				result = val;
		});
		return result;
	},

	save: function(){
		Post.loadData(Post.addForm);
		if(Post.verificaObrigatorios()){
			$.post('../../controller/post/insert.php', {post: Post.data}, function(respond){
			// alert(respond);
			if(!respond.includes('error')){
				toastr.success('Post cadastrado com sucesso! Você será redirecionadx em 2 segundos.', 'Notificação');
				Post.data.id = respond;
				Post.addInArray(Post.data);
				setTimeout(function(){
					window.location.assign('index.php');
				}, 2000);
			}
			else{
				toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
			}
		});
		}
	},

	edit: function(id){
		Post.loadData(Post.editForm);
		Post.data.id = id;

		if(Post.verificaObrigatorios()){
			if(!Post.verificaModificacoes(false)){
				$.post('../../controller/post/update.php', {post: Post.data}, function(respond){
					if(!respond.includes('error')){
						toastr.success('Post atualizado com sucesso! Você será redirecionadx em 2 segundos.', 'Notificação');
						setTimeout(function(){
							window.location.assign('index.php');
						}, 2000);
					}
					else{
						toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
					}
				});
			}
		}
	},

	delete: function(id){
		$.post('../../controller/post/delete.php', {id: id}, function(respond){
		if(!respond.includes('error')){
			toastr.success('Post removido com sucesso! Você será redirecionadx em 2 segundos.', 'Notificação');
			setTimeout(function(){
				window.location.assign('index.php');
			}, 2000);
		}
		else{
			toastr.error('Ocorreu um erro durante a execução.', 'Notificação');
		}
	});
	},

	addInArray: function(post){
		Post.posts.push(post);
	},

	verificaObrigatorios: function(){
		var resultado = true;
		$.each(Post.requiredFields, function(index, value){
			if(Post.data[value] == "" || Post.data[value] == null)
				resultado = false;
		});
		return resultado;
	},

	verificaModificacoes: function(thereIsArray=true){
		var result = true;

		if(thereIsArray)
			var element = Post.findElementInArray(Post.Post.data.id);
		else
			var element = Post.data;

		if(element != false){
			$.each(element, function(index, value){
				if(Post.post[index] != value)
					result = false;
			});	
		}
		return result;
	},

	createHtml: function(post){
		var html = '<div class="col-md-3">';
		html += '<div class="ibox">';
		html += '<div class="ibox-content product-box">';
		html += '<a href="post.php?code='+ post['id'] +'">';
		html += '';
		html += '	<div class="product-desc">';
		html += '		<h3 class="product-name">'+ post['titulo'] +'</h3>';
		html += '		<div class="small m-t-xs text-introduction">';
		html += 			Post.stripHTML(post['corpo']);
		html += '		</div>';
		html += '	</div>';
		html += '</a>';
		return html;
	},

	createHtmlView: function(post){
		var html = '<div id="view_post" data-post-id='+ post.id +'>';
		html += '		<div class="text-center article-title">';
		html += '			<i class="fa fa-clock-o"></i> <span class="text-muted post-data">' + moment(post.data).format('L') + '</span>';
		html += '			<h1 class="post-titulo">';
		html += 			post.titulo;
		html += '			</h1>';
		html += '		</div>';
		html += '		<div class="post-corpo">';
		html += 			post.corpo;
		html += '		</div>';
		html += '		<hr>';
		html += '		<div class="row">';
		html += '			<div class="col-md-6">';
		html += '				<a href="edit.php?code='+ post.id +'"><button type="button" class="btn btn-primary btn-sm">Editar</button></a>';
		html += '				<button type="button" class="btn btn-danger btn-sm btn-delete">Excluir</button>';
		html += '			</div>';
		html += '			<div class="col-md-6 text-right">';
		html += '			<div class="small">';
		html += '				<i class="fa fa-heart"> </i> 33';
		html += '			</div>';
		html += '		</div>';
		html += '	</div>';
		html += '</div>';
		return html;
	},

	resetFields: function(form){
		form.find('input, textarea').each(function(){
			$(this).val("");
		});
	},

	stripHTML: function(text) {
		return text.replace(/<.*?>/g, '');
	}

};