var fs = require('fs'),
	xml2js = require('xml2js');

var parser = new xml2js.Parser();
fs.readFile('test_scores/foo.xml',function(err,data){
	//console.log(data);
	parser.parseString(data,function(err,result){
		console.dir(result);
		console.log('done');
	})
});