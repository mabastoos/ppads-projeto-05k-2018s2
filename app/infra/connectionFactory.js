var mysql = require('mysql');

function createDbConnection() {

	return mysql.createConnection({
		host : 'localhost',
		user : 'root',
		password : 'root',
		database : 'queue_db'
	});

}

module.exports = function() {
	return createDbConnection;
}