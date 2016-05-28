/* social media netowrk database in SQLite. */

/*
 * Drops the tables of the database that we will be creating them so that there 
 * arent any problems when we create them. 
 */
DROP TABLE IF EXISTS posts;
DROP TABLE IF EXISTS comments;

/* 
 * Creates the posts table which stores all of the data for a post such as 
 * title, icon message and name of the poster.
 */
CREATE TABLE posts(
    ID INTEGER PRIMARY KEY AUTOINCREMENT,
    title VARCHAR(40) NOT NULL,
    icon VARCHAR(2083),
    message VARCHAR(40) NOT NULL,
    post_name VARCHAR(40)
);

/*
 * Create the comments table which stores the data of a commen including the ID 
 * of the post which the commen was made on, the message of the comment and the 
 * name of the poster. Post_ID is a foreign key matched with ID in posts.
 */
CREATE TABLE comments(
    comment_ID INTEGER PRIMARY KEY AUTOINCREMENT,
    post_ID INTEGER NOT NULL,
    comment VARCHAR(40) NOT NULL,
    comment_name VARCHAR(40) NOT NULL,
    FOREIGN KEY(post_ID) REFERENCES posts(ID)
);

/*
 * Insert some test data into the database
 */
INSERT INTO posts VALUES(NULL, "Post 1", "https://upload.wikimedia.org/wikipedia/en/2/2a/Griffith_University_logo.png", "message 1", "bob");
INSERT INTO posts VALUES(NULL, "Post 2", "https://pbs.twimg.com/profile_images/378800000003051007/01e9f11c2c487fe75f5ae6e1fd3e1d33_400x400.jpeg", " message 2", "tim");
INSERT INTO posts VALUES(NULL, "Post 3", "https://upload.wikimedia.org/wikipedia/commons/d/d9/Big_Bear_Valley,_California.jpg", " message 3", "jim");
INSERT INTO comments VALUES(NULL, 1, "comment 1", "ann");
INSERT INTO comments VALUES(NULL, 1, "comment 2", "harry");
INSERT INTO comments VALUES(NULL, 2, "comment 3", "max");


