module.exports = function(app) {

	app.get('/home', function(req, res) {
		res.render('home', {errosValidacao : {}, login : {}});
	});

	app.post('/home/login', function(req, res){
		var connection = app.infra.connectionFactory();
		var produtosDAO = new app.infra.ProdutosDAO(connection);

		produtosDAO.lista(function(err, results) {
			res.redirect('/produtos');
		});

		connection.end();
	});

}