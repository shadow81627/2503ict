/*
* returns the titles of the blogs witht eh string "Japan" in the title 
*/
SELECT b.TITLE FROM BLOG AS b
WHERE b.TITLE LIKE "% Japan %";

/*
* returns the title of blogs whose articles contian the string "Japan" 
* in the article headline
*/
SELECT b.TITLE FROM BLOG AS b
WHERE b.ID IN(SELECT a.BLOG_ID FROM ARTICLE AS a
    WHERE a.HEADLINE LIKE "% Japan %");
    
/*
* returns the title of blogs that contain an article written by the blog creator
*/
SELECT b.TITLE FROM BLOG AS b, ARTICLE AS a
WHERE b.CREATOR = a.AUTHOR_ID;