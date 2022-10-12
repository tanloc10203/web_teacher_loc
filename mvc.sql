CREATE TABLE group_roles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  role VARCHAR(255),
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE = INNODB;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  fullname VARCHAR(255),
  thumb TEXT,
  username VARCHAR(255),
  password VARCHAR(255),
  group_id INT,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (group_id) REFERENCES group_roles(id)
) ENGINE = INNODB;

INSERT INTO
  group_roles (role)
VALUES
  ("ADMIN"),
  ("CLIENT"),
;