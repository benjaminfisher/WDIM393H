/**
 * @author Benjamin
 */

$(function(){
	var content = [
		"Charlie has an uncle named OJ. Enough said.",
		"April loves ferrets. She has owned over 25 in her life time and has 8 of her ferrets tattooed on her body.",
		"April can bellydance. She started dancing back in 1997.",
		"Benjamin does the poetry thing. He produces and hosts a monthly reading series featuring local open mike poets.",
		"Benjamin can juggle. He currently juggles up to 4 balls, 3 clubs, and contact juggles.",
		"Nate was named after one of the earliest authors of American literature, Nathaniel Hawthorne.",
		"Nate speaks four languages: English, French, Spanish and Italian. On a good day, he speaks a tiny bit of Korean, Greek and Japanese too."
	];
	
	$("#about").text(content[Math.floor(Math.random() * (content.length))]);
});