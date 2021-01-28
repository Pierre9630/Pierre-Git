var express    = require('express');
var app        = express();
var mysql      = require('mysql');
var bodyParser = require('body-parser');
const jsdom = require("jsdom");
const { JSDOM } = jsdom;



app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));
//app.use(express.json());
//app.use(express.urlencoded());
//app.use(app.router);
app.use(express.static('public'));


var connection = mysql.createConnection({

  host     : '192.168.1.34',
  user     : 'root',
  password : 'test44',
  database : 'test'

});

connection.connect();

/*
app.get('/', function (req, res) {

    res.sendFile(__dirname + '/index.html');

});


app.post('/data', function(req, res){
    var username=req.body.name;
    connection.query("INSERT INTO `Demandes` (Nom) VALUES (?)", username.toString(), function(err, result){
        if(err) throw err;
            console.log("1 record inserted");
        });
    res.send(username);
});
*/
//connection.end();

app.listen(3000, function () {
console.log('Example app listening on port 3000');
});

function handleSubmit(event) {
    event.preventDefault();
  
    const data = new FormData(event.target);
  
    const value = data.get('email');
  
    console.log({ value });
  }
  global.document = new JSDOM(html).window.document;
  const form = document.querySelector('form');
  form.addEventListener('submit', handleSubmit);