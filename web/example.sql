CREATE TABLE scripturesToTopics (
  id int primary key,
  scripture_id int references scriptures(id),
  topic_id int references topics(id) 
)
