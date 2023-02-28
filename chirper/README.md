laravel bc kata:

- setup new laravel project
    - create new project
    - setup db
    - run server

- setup user module with breeze
    - download breeze
    - install breeze
    - install dependecies
    - migrate db
    - test at frontend
- crud module
    - create model,migration, controller with resources
  
    - Routing: 
        - create route + middleware for index and store
  
    - Index method in Controller + index page view
      - create index controller that return a blade template view
      - create the index blade template
      - test the index page at browser
    
    - Navigation Menu
      - update nav blade to add link to chirps index page
    
    - Saving
      - update the store method
        - validation
        - save with user id relationship
        - redirect to index page after save
      - add relationship user has many chirps in model
      - set mass assigment fillable to message column in chirp model
      - update chirp migration add user id and message column and migrate it
      - test create + validation new chip message
      - sue tinker to see the data insert or not in db
    
    - Show
        - update index method to select user message from db
        - set user relationship to chirp model so we can display the author name
        - update index view blade file
        - test index page at browser 
