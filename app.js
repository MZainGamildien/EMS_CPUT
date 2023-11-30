const express = require('express');
const bodyparser = require('body-parser');
const request = require('request');




const app = express();
app.use(bodyparser.urlencoded({extended: true}));
app.use(express.static("public"));
app.get("/",(req,res)=>{
    res.sendFile(__dirname + "/signup.html");

})

app.post("/",(req,res)=>{
    var firstName = req.body.fName;
    var lastName = req.body.lName;
    var email = req.body.email;

    console.log(firstName,lastName,email);
})  



app.listen(3000,function(){
    console.log("server is running on localhost 3000");
})
//API KEY
//ceb76ba2d7cb9d6334067d6667493548-us21
//List ID
//84cdf310af