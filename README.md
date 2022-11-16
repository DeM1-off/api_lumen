# Lumen PHP Framework

* <b>Controller AuthController.php, 
* Model User
* Seed UserSeed, 
* Factory UserFactory
* Servece UserService,serServiceInterface
* Request LoginRequest,RegisterRequest</b>

- POST-> login
-  https://domain.com/api/user/sign-in
<hr>

* <b>Controller PasswordController, 
* Model User,
* Service ResetPasswordInterface,ResetPasswordService
* Request EmailRequest,ResetPasswordRequest </b>

- POST-> Send new password in email
- https://domain.com/api/user/recover-password
- POST-> Reset new password
- https://domain.com/api/user/reset
<hr>

* <b>Controller CompanyController.php, 
* Model Company
* Seed CompanySeed, 
* Factory CompanyFactory,CompanyResource,
* Request CompanyRequest,
* Repositories CompanyRepositories.php,CompanyRepositoriesInterface.php,
* Services CompanyService.php,CompanyServiceInterface.php</b>

- GET->  company user
- https://domain.com/api/user/companies
- POST-> creaty new company for user
- https://domain.com/api/user/companies
 <hr>


## Requirements

- PHP >= 7.3.0

## Installation

- Just clone the project to anywhere in your computer.
  -Run  composer install  <br>
- php artisan migrate
- php artisan db:seed

Now you are done.
<br>

` php artisan serve ` and open the project on the browser. 
