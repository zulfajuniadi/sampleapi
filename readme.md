# Sample Laravel 5.2 JSON API


[Demo](https://sampleapi.demo.rocks)

A sample API implementation with Laravel 5.2 framework. Perfect for Mobile App consumption.

As this is a JSON api, all requests to the `/api` endpoints must have `Accept: appication/json` header.


[![Run in Postman](https://run.pstmn.io/button.svg)](https://app.getpostman.com/run-collection/07713cbc8eaf7ff466f2)


## Core Features:

- [JWT Auth](#jwt-auth)
- [API Auto Documentation](#api-auto-documentation)
- [Data Validation](#data-validation)
- [Controller ACL](#controller-acl)
- [JSON Error Handling](#json-error-handling)
- [Data Pagination and Query](#data-pagination-and-query)
- [CORS Implementation](#cors-implementation)
- [API Rate Limiting](#api-rate-limiting)

### JWT Auth

Authentication is handled using JSON Web Tokens where request to `/api/v1/login` with valid email and password will return a JSON object with a token property. Subsequent calls to authenticated endpoints will need an `Authorization` header in the http request with the token provided in `Bearer __token__` format. If the email or password is incorrect, a `400` JSON response will be returned. 

For example:

```json
{
  "error": "Invalid credentials"
}
```

More Documentation: [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth).

### API Auto Documentation

API Documentation can be automatically generated via the `php artisan docs:update` command. To register a new file, edit the `classes array` inside [`UpdateApiDocs.php`](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Console/Commands/UpdateApiDocs.php#L12-L15) file. The command will read comments from the registered files and generate a Laravel view.


More Documentation: [crada/php-apidoc](https://github.com/calinrada/php-apidoc).


### Data Validation

Data validation is using a custom `validate` middleware. The middleware is fired from within the controller's [`__construct`](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Http/Controllers/Api/V1/TasksController.php#L149) method and will run the provided [validation rules](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Validators/TasksValidator.php). The validation rules maps to the controller's method. E.g calling `TasksController@store` method will fire the `TasksValidator@store` method. The validation rules are using plain old [Laravel Validation](https://laravel.com/docs/5.2/validation#available-validation-rules) rules. If a validation error occurs, a `400` JSON response will be returned with the `errors` property.

Example validation error response:

```json
{
  "error": "Validation error.",
  "errors": [
    "The title field is required."
  ]
}
```

### Controller ACL


Controller ACL is using a custom `acl` middleware. The middleware is fired from within the controller's [`__construct`](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Http/Controllers/Api/V1/TasksController.php#L148) method and will run the provided [ACL rules](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Acls/TasksAcl.php). The ACL rules maps to the controller's method. E.g calling `TasksController@update` method will fire the `TasksAcl@update` method. The method should return either `true` or `false`. If an ACL error occurs, a `403` JSON response will be returned. 

For example:

```json
{
  "error": "Unauthorized."
}
```

### JSON Error Handling

If an `Accept=application\json` header is provided with the request, all occuring errors and exceptions will return a JSON object. This would allow for better error-handling client-side. Error handling is implemented via [`RestExceptionHandlerTrait.php`](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Traits/RestExceptionHandlerTrait.php). 

An example of an error:

```json
{
  "error": "Error Processing Request"
}
```

### Data Pagination and Query

By utilising [Laravel's Pagination]() function, all data returned inside the `index` method should be paginated. This would lessen the bandwidth and processing load everytime the `index` method is called. The response JSON will include both `next_page_url` and `prev_page_url` properties which you can use to call for subsequent data. The `size` of pagination can be changed by supplying the `per_page` query string in the request.

An example paginated response:

```json
{
  "total": 42,
  "per_page": 15,
  "current_page": 2,
  "last_page": 3,
  "next_page_url": "http://sampleapi.dev/api/v1/tasks?page=3",
  "prev_page_url": "http://sampleapi.dev/api/v1/tasks?page=1",
  "from": 16,
  "to": 30,
  "data": [
    {
      "id": 17,
      "user_id": 1,
      "title": "Buy some eggs",
      "is_done": 0,
      "created_at": "2016-03-23 16:47:39",
      "updated_at": "2016-03-23 16:47:39"
    },
    ...
  ]
}
```

As the paginated data is plain old [Laravel Eloquent](https://laravel.com/docs/5.2/eloquent), you can add custom rules to the query supplied by the user's query string. Example query implementation [is shown here](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Repositories/TasksRepository.php#L25-L36).


### CORS Implementation

Cross Origin Resource Sharing is implemented in the [`.htaccess`](https://github.com/zulfajuniadi/sampleapi/blob/master/public/.htaccess#L1-L3) file. When deployed, the server must be running the Apache web server and have the `headers` module enabled. 

To enable the module on a Ubuntu server run this command:

```bash
a2enmod headers
service apache2 restart
```

### API Rate Limiting

Rate limiting is used to reduce abuse by limiting request each unique client can make at any given time. This feature is implemented using the new Laravel Rate Limiting introduced in 5.2 and is set to 60 requests per minute. The settings can be changed [here](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Http/Kernel.php#L36). When a client hits the limit configured, a `429` error will be returned to the user. All responses from the server will have the `X-RateLimit-Limit` header to show the total number of requests a user can make and the `X-RateLimit-Remaining ` header to show the remaining request left. 


More information [here](https://mattstauffer.co/blog/api-rate-limiting-in-laravel-5-2).


## Installation

1. Create your database
2. Clone this repository
3. Copy `.env.example` to `.env`
4. Update your `.env` file with your database name, username and password
4. Run `composer install`
5. Run `php artisan key:generate`
6. Run `php artisan migrate --seed`

## Running In Development

Run `php artisan serve` in the project directory


## Running In Production

1. Set the `APP_ENV` property inside the `.env` file to production
2. If you are not running under https (you should though), you must disable the `RedirectHttps` middleware [here](https://github.com/zulfajuniadi/sampleapi/blob/master/app/Http/Kernel.php#L17).
3. Make sure your virtual host `DocumentRoot` is set to the `public` directory.

## License

The Sample API code is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
