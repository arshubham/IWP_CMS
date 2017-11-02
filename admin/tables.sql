DROP TABLE IF EXISTS pages;
CREATE TABLE pages
(
  id           int  NOT NULL auto_increment,
  label        varchar(20) NOT NULL,
  title           varchar(255) NOT NULL,                      # Full title of the article
  slug         text NOT NULL,                              # A short summary of the article
  body         mediumtext NOT NULL,                        # The HTML content of the article
  created      date NOT NULL,                              # When the article was published
  updated       date,

  PRIMARY KEY     (id)
);
