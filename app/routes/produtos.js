module.exports = function(app) {

	var listaProdutos = function(req,res){

		var connection = app.infra.connectionFactory();
		var produtosDAO = new app.infra.ProdutosDAO(connection);

		produtosDAO.lista(function(err, results) {
			res.render('produtos/lista', {lista : results});
		});
		connection.end();
	}

	app.get('/produtos', listaProdutos);

	app.get('/produtos/form', function(req, res){
		res.render('produtos/form', {errosValidacao : {}, produto : {}});
	});

	app.post('/produtos', function(req, res){

		var produto = req.body;

		req.assert('titulo', 'Titulo é obrigatório').notEmpty();
		req.assert('preco', 'Formato inválido').isFloat();


		var erros = req.validationErrors();
		if (erros) {
			res.render('produtos/form', {errosValidacao : erros, produto : produto});
			return;
		}

		var connection = app.infra.connectionFactory();
		var produtosDAO = new app.infra.ProdutosDAO(connection);
		produtosDAO.salva(produto, function(err, result){
			res.redirect('/produtos')
		});
	});

}