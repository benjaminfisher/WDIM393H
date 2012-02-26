/**
 * @author Benjamin
 */

$(function(){
	var content = [
		"Charlie has an uncle named OJ. Enough said.",
		"April loves ferrets. She has owned over 25 in her life time and has 8 of her ferrets tattooed on her body.",
		"Benjamin does the poetry thing. He produces and hosts a monthly reading series featuring local open mike poets.",
		"Nate was named after Nathaniel Hawthorne."
	];
	
	$("#about").text(content[Math.floor(Math.random() * (content.length))]);
});