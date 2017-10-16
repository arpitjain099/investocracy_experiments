var express        =        require("express");
var bodyParser     =        require("body-parser");
var app            =        express();
//Here we are configuring express to use body-parser as middle-ware.
app.use(bodyParser.urlencoded({ extended: false }));
app.use(bodyParser.json());


app.all('*', function(req, res, next) {
  res.header('Access-Control-Allow-Origin', '*');
  res.header('Access-Control-Allow-Methods', 'PUT, GET, POST, DELETE, OPTIONS');
  res.header('Access-Control-Allow-Headers', 'Content-Type');
  next();
});


app.post('/handle',function(request,response){
    console.log("handle");
var query1=request.body.var1;
var query2=request.body.var2;
console.log(query1)
console.log(query2)
});

app.get('/',function(request,response){
console.log("index");
});

app.listen(3000,function(){
  console.log("Started on PORT 3000");
})