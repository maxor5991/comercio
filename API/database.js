const mysql = require('mysql');

const mysqlConnection = mysql.createConnection({
    host:'masgamers.cw7ynxxnroow.us-east-1.rds.amazonaws.com',
    user:'admin',
    password:'m4sg4m3rs',
    database:'mg2018'
});

mysqlConnection.connect(function(err)
{
    if(err){
        console.log(err);
        return;
    }else{
        console.log('Conexion Establecida')
    }
});