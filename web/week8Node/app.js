let http = require('http');
let url = require('url');
let fs = require('fs');

function sayHello(req, res) {
     console.log("Received a request for: " + req.url);

    let q = url.parse(req.url, true);
    if(q.pathname === '/home'){
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write("<h1>Welcome to the Home Page</h1>");
    }
    else if(q.pathname.includes('/getData/')){
        res.writeHead(200,{'Content-Type': 'application/json'});
        let student = {
            "name": q.pathname.split('/getData/')[1],
            "class": "CS341"
        };
        let json = JSON.stringify(student);
        res.write(json);
    }
    else if(q.pathname ==='/getData'){
        res.writeHead(200,{'Content-Type': 'application/json'});
        let student = {
            "name": "Valerie",
            "class": "CS341"
        };
        let json = JSON.stringify(student);
        res.write(json);
    }
    else{
        res.writeHead(404, {'Content-Type': 'text/html'});
        res.write("Page Not Found");
    }
    return res.end();
}

let server = http.createServer(sayHello);
server.listen(8888);

console.log("The server is now listening on port 8888");

