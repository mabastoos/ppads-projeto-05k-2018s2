function LoginDAO(connection){
	this._connection = connection;
}

LoginDAO.prototype.login = function(loginUsr, callback) {
	this._connection.query("select * from usuarios where email=\'"+ loginUsr.email + "\'", callback);
}

module.exports = function() {
	return LoginDAO;
}