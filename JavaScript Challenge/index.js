// Author : Teo Wang Wei （ +65 8652 67 69） （e150088@e.ntu.edu.sg)

"use strict";

const fs = require('fs');
const Papa = require("./node_modules/papaparse/papaparse.js"); //only one third party library

fs.readdir('./', function(err, files) {    // Read all files from the directory (scalable)
 	let csvFiles = files.filter(function(file) { return file.substr(-4) === '.csv' ;});
    csvFiles.forEach(function(csvFile) { 
    	let name = csvFile.split(".");
    	let fileContent = fs.readFileSync( __dirname + '/'+ csvFile, 'utf-8');
    	let parseData = JSON.stringify(Papa.parse(fileContent));  
		fs.writeFileSync(name[0] + '.json', parseData); 
    });
});
