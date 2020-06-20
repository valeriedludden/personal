const fs = require('fs');

let newFile = fs.readFileSync('///usr/local/lib/node_modules/learnyounode/docs-nodejs/fs.html').toString();

let newArray = newFile.split('\n');

console.log(newArray.length -1);