//create a database for our feeds
CREATE TABLE Author (
  author_id INTEGER NOT NULL AUTO_INCREMENT, 
  author_name VARCHAR(128),
  imgsrc VARCHAR(128),
  email VARCHAR(128),
  facebook VARCHAR(128),
  twitter VARCHAR(128),
  linkedin VARCHAR(128),
  PRIMARY KEY(author_id),
  INDEX ( author_name )
)ENGINE = InnoDB;

INSERT INTO `author` (`author_id`, `author_name`, `imgsrc`, `email`, `facebook`, `twitter`, `linkedin`) VALUES (NULL, 'Lule Moses', 'pp.jpg', 'lulemoses67@gmail.com', 'hulmosha', 'lulemoses67', 'lulemoses67');

CREATE TABLE Feed_class(
	feedClass_id INTEGER NOT NULL AUTO_INCREMENT,
	class_name VARCHAR(128),
	PRIMARY KEY(feedClass_id),
    INDEX ( class_name )
)ENGINE = InnoDB;

INSERT INTO `feed_class` (`feedClass_id`, `class_name`) VALUES (NULL, 'devices');

CREATE TABLE feed(
	feed_id INTEGER NOT NULL AUTO_INCREMENT,
	title VARCHAR(128),
	imgsrc VARCHAR(255),
	details VARCHAR(255),
	create_at timestamp,
    author_id INTEGER,
    feedClass_id INTEGER,
    
    PRIMARY KEY(feed_id),
    INDEX USING BTREE (title),
    
    CONSTRAINT FOREIGN KEY (author_id) REFERENCES Author (author_id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FOREIGN KEY (feedClass_id) REFERENCES Feed_class (feedClass_id)
    ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB;

INSERT INTO `feed` (`feed_id`, `title`, `imgsrc`, `details`, `create_at`, `author_id`, `feedClass_id`) VALUES (NULL, 'Human mission to mars', 'mars.jpg', 'blah...', current_timestamp(), '1', '1');

SELECT feed.title, feed.imgsrc, feed.details, Author.author_name, Feed_class.class_name, feed.create_at 
    FROM feed JOIN Author JOIN Feed_class 
    ON feed.author_id = Author.author_id AND feed.feedClass_id = 
    Feed_class.feedClass_id ORDER BY feed.create_at;