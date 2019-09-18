# StackITP
Stackoverflow testcase made with a :heart: by Jan Temmerman for [In The Pocket](https://inthepocket.com/).

## Running the project
In the root of the project, create an .env file and paste the code below:
```
APP_NAME=StackITP
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=stackoverflow
DB_USERNAME=itp
DB_PASSWORD=shift

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

Open a terminal and go to the directory where you cloned the repository.

Execute the following commands:
```
docker-compose up
```
(Open another terminal if the containers stop when stopping docker-compose)
With the containers running execute the following commands:
```
docker exec app composer install
docker exec app php artisan key:generate
docker exec app php artisan migrate
```

Go to http://localhost/ ! 

## Framework
For this case I chose to work with Laravel. I did this because Laravel is a relevant framework with a ton of built in features that I could use, like authentication, database handling and templating. 

## Structure
- I started by making a database model on paper and transferring it to my mysql database via Laravel migrations. (database/migrations)

- Then I proceeded to make models for the Question and Answer table. (app/Models)

- Next up was making the routes. (routes/web.php)

- With these routes i could make the controllers with the necessary fuctions that return a view and some variables if needed. (app/Http/Controllers)

- Finally I made the views where the data is visualized with blade templating. (resources/views)

- Styling is found in "resources/sass/layout.scss".

- To make the up-/downvote system I made an api within the project and handled the button handling with js so that the page wouldn't refresh on an up- or downvote. When pressed, the votes get in- or decremented within the database, the number on the page will change with js. When you refresh the number will remain the same because of the database update. (routes/api.php, app/Http/Controllers/ApiController.php, resources/js/vote.js)

## Conclusion
When I got the assignment I was a bit scared for the docker part because I had never used it. Because of this I thought it was best to start with the docker environment and be done with it. This was bad move because docker is way harder than I imagined. I tried all different kinds of setups I found online because none of them were the same. When I finally found one that worked I initialized my Laravel project and got to the conclusion I could not see my Laravel errors, which are very important while working with Laravel. This demotivated me a little because no one was able to help me.

Then I did what I should have done from the beginning, which was starting with the Laravel project and dockerizing it when I'm ready. So when I thought I was ready, I copied the docker setup from before and by my surprise, this time the Laravel errors showed.. So I was able to continue working on it within docker. 

All of this aside, I really enjoyed working on this project because I love working with Laravel and love seeing a project come together. I also liked having to make a little api to make the vote system because that was new to me.

![A happy developer](https://github.com/gdm-1718-jantemme/stackITP/blob/master/storage/Readme/Images/jan.JPG)

