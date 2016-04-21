/* social media netowrk database in SQLite. */

/*
 * Drops the tables of the database that we will be creating them so that there 
 * arent any problems when we create them. 
 */
DROP TABLE IF EXISTS POSTS;
DROP TABLE IF EXISTS COMMENTS;

/* 
 * Creates the Posts table which stores all of the data for a post such as 
 * title, icon message and name of the poster.
 */
CREATE TABLE POSTS (
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    TITLE VARCHAR(40) NOT NULL,
    ICON VARCHAR(2083) NOT NULL,
    MESSAGE VARCHAR(40) NOT NULL,
    NAME VARCHAR(40)
);

/*
 * Create the comments table which stores the data of a commen including the ID 
 * of the post which the commen was made on, the message of the comment and the 
 * name of the poster. Post_ID is a foreign key matched with ID in Posts.
 */
CREATE TABLE COMMENTS(
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    POST_ID INTEGER NOT NULL,
    MESSAGE VARCHAR(40) NOT NULL,
    NAME VARCHAR(40) NOT NULL,
    FOREIGN KEY(POST_ID) REFERENCES POSTS(id)
);

/*
 * Insert some test data into the database
 */
INSERT INTO POSTS VALUES(NULL, "title", "https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png", "message", "name");
INSERT INTO COMMENTS VALUES(NULL, 1, "message", "name");



