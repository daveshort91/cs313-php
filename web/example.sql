CREATE TABLE names (
  id SERIAL PRIMARY KEY NOT NULL,
  first_name VARCHAR(30) NOT NULL,
  last_name VARCHAR(30) NOT NULL
);

CREATE TABLE emails (
  id SERIAL PRIMARY KEY NOT NULL,
  email VARCHAR(100) NOT NULL
);

CREATE TABLE user_types (
  id SERIAL PRIMARY KEY NOT NULL,
  type VARCHAR(50) NOT NULL
);

CREATE TABLE users (
  id SERIAL PRIMARY KEY NOT NULL,
  name_id INT NOT NULL REFERENCES names(id),
  email_id INT NOT NULL REFERENCES emails(id),
  user_type_id INT NOT NULL REFERENCES user_types(id)
);

CREATE TABLE entries (
  id SERIAL PRIMARY KEY NOT NULL,
  title VARCHAR(100) NOT NULL,
  image BYTEA NOT NULL,
  user_id INT NOT NULL REFERENCES users(id)
);


INSERT INTO names (first_name, last_name) VALUES
('Harry', 'Potter'),
('Ron', 'Weasley'),
('Hermione', 'Granger');

INSERT INTO user_types (type) values
('Judge'),
('Contestant');

INSERT INTO emails (email) VALUES
('hpotter@hogwarts.edu'),
('rweasley@hogwarts.edu'),
('hgranger@hogwarts.edu');

INSERT INTO users (name_id, email_id, user_type_id) VALUES
((SELECT id FROM names WHERE first_name = 'Harry'), (SELECT id FROM emails WHERE email = 'hpotter@hogwarts.edu'), (SELECT id FROM user_types WHERE type = 'Contestant')),
((SELECT id FROM names WHERE first_name = 'Ron'), (SELECT id FROM emails WHERE email = 'rweasley@hogwarts.edu'), (SELECT id FROM user_types WHERE type = 'Contestant')),
((SELECT id FROM names WHERE first_name = 'Hermione'),(SELECT id FROM emails WHERE email = 'hgranger@hogwarts.edu'), (SELECT id FROM user_types WHERE type = 'Contestant'));

SELECT n.first_name, n.last_name, e.email FROM names n INNER JOIN users u ON u.name_id = n.id INNER JOIN emails e ON u.email_id = e.id;

SELECT u.id FROM users u INNER JOIN emails e ON u.email_id = e.id WHERE e.email = 'hpotter@hogwarts.edu';
