<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Portfolio

A single page personal website with dynamically configurable.

## Installation

To run this project simplly run the commands below.
Open your terminal in computer run these commands sequencially.

-   `git clone https://github.com/ashraful-raju/portfolio.git portfolio`
-   `cd portfolio`
-   `cp .env.example .env` and configure the `.env` file
-   `composer install`
-   `yarn install` or `npm install`
-   `php artisan key:generate`
-   `php artisan migrate --seed`
-   `yarn build`
-   `php artisan serve`

## Screenshots

![Login](./screenshots/login.png)
![register](./screenshots/register.png)
![Dashboard](./screenshots/dashboard.png)
![profile](./screenshots/profile.png)
![add-contact](./screenshots/add-contact.png)
![list-contact](./screenshots/list-contact.png)
![view-contact](./screenshots/view-contact.png)
![edit-contact](./screenshots/edit-contact.png)
![update_delete-info](./screenshots/update_delete-info.png)

## Notes

```
Portfolio Table Schema Example

columns: title, description, preview_link, technologies (array)
```
