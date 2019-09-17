# StackITP
Stackoverflow testcase made with a :heart: by Jan Temmerman for [In The Pocket](https://inthepocket.com/).
## Framework
---
For this case I chose to work with Laravel. I did this because Laravel is a relevant framework with a ton of built in features that I could use, like authentication, database handling and templating. 

## Structure
---
- I started by making a database model on paper and transferring it to my mysql database via Laravel migrations. (database/migrations)

- Then I proceeded to make models for the Question and Answer table. (app/Models)

- Next up was making the routes. (routes/web.php)

- With these routes i could make the controllers with the necessary fuctions that return a view and some variables if needed. (app/Http/Controllers)

- Finally I made the views where the data is visualized with blade templating. (resources/views)

- Styling is found in "resources/sass/layout.scss".

- To make the up-/downvote system I made an api within the project and handled the button handling with js so that the page wouldn't refresh on an up- or downvote. When pressed, the votes get in- or decremented within the database, the number on the page will change with js. When you refresh the number will remain the same because of the database update. (routes/api.php, app/Http/Controllers/ApiController.php, resources/js/vote.js)

## Conclusion
---
When I got the assignment I was a bit scared for the docker part because I had never used it. Because of this I thought it was best to start with the docker environment and be done with it. This was bad move because docker is way harder than I imagined. I tried all different kinds of setups I found online because none of them were the same. When I finally found one that worked I initialized my Laravel project and got to the conclusion I could not see my Laravel errors, which are very important while working with Laravel. This demotivated me a little because no one was able to help me.

Then I did what I should have done from the beginning, which was starting with the Laravel project and dockerizing it when I'm ready. So when I thought I was ready, I copied the docker setup from before and by my surprise, this time the Laravel errors showed.. So I was able to continue working on it within docker. 

All of this aside, I really enjoyed working on this project because I love working with Laravel and love seeing a project come together. I also liked having to make a little api to make the vote system because that was new to me.

![A happy developer](https://github.com/gdm-1718-jantemme/stackITP/blob/master/storage/Readme/Images/jan.JPG)
