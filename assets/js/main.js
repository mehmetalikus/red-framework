$(function(){
	console.log("Main.js");

	function language(key){
		var lang = init.language;
		var lang = this[lang];

		if( (lang[key]) != null){
			return lang[key];
		}
		else
			return key;
	}

});