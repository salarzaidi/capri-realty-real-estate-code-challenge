## Capri Realty Real Estate Code Challenge

Requirements

Create a Laravel Application with SQLite as your database (feel free to
utilize a Laravel starter app or other pre-built components like Breeze,
Jetstream or suggest Fortify);

      Add standard authentication features such as login, registration,
password reset, email verification, and password confirmation;
Using our GET accessible endpoint
https://cspf-dev-challenge.herokuapp.com/ (there are no parameters
to/from required), create a new endpoint in Laravel that:

      1. Can be used only when logged in;
      2. Calls the above endpoint to get the data to return;
      3. Which when called always returns the data, but regardless of when/how many times it is called should never request the data from our server more than 1 time per hour, and data should saved in DB;
      4. Once logged in the user should see a single webpage with TailwindCSS, Alpinejs that shows a styled table-like display containing information fetched from your local endpoint;
      5. Add a button below the table which, when clicked will force a refresh of the data in the table;
      6. Create an Artisan command that can be used to force the refresh of this data the next time the Laravel endpoint is called;
      7. Use traits and interfaces


end result

![img.png](img.png)

point 1 to 7 are done in the repo

- Sqlite db caching implement
- User trail implement to handle data from remote to caching mechanism
- Artisan Command implement to force-fully flush local db data and repopulate with new data from https://cspf-dev-challenge.herokuapp.com/
- api implement to refresh data with alpine js call with loading event 
- login and register implemented by breeze
- laravel version 10, node version 16.16.0, alpinejs version 3.4.2

Sir thanks for this opportunity, and wait for your response   
