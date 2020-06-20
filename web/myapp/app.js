const express = require('express')
const app = express();
const port = 3000;

// app.get('/', (req, res) => res.send('Hello World!'))

// app.get('/', function (req, res) {
//     res.send('Hello World meeee !')
// })
// app.post('/', function (req, res) {
//     res.send('Got a POST request')
// })
// app.put('/user', function (req, res) {
//     res.send('Got a PUT request at /user')
// })
// app.get('/user', function (req, res) {
//     res.send('Got a PUT request at /user')
// })
// app.delete('/user', function (req, res) {
//     res.send('Got a DELETE request at /user')
// })
// app.listen(port, () => console.log(`Example app listening at http://localhost:${port}`))

// set the view engine to ejs
app.set('view engine', 'ejs');

// use res.render to load up an ejs view file

// index page
app.get('/', function(req, res) {
    res.render('pages/index');
});

// about page
app.get('/about', function(req, res) {
    res.render('pages/about');
});

app.listen(3000);
console.log('3000 is the magic port');