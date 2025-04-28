Table follows {
  following_user_id integer
  followed_user_id integer
  created_at timestamp 
}

Table users {
  id integer [primary key]
  lastname varchar
  firstname varchar
  email varchar UNIQUE
  password varchar 
  date_creation datetime
  created_at timestamp
}

Table posts {
  id integer [primary key]
  title varchar
  body text [note: 'Content of the post']
  user_id integer
  status varchar
  created_at timestamp
}

Table Tweets {
  id integer [primary key] 
  user_id integer [primary key] 
  contenu text(140) 
  date_creation datetime
  image_url varchar
}

Table hasthag {
  id integer [primary key]
  tag varchar UNIQUE
}

Table messages {
  id integer [primary key]
  sender_id (int, clé étrangère vers users)
  receiver_id (int, clé étrangère vers users)
  message text
  date_creation datetime
}