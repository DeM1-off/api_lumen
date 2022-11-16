# Lumen PHP Framework

* <b>Controller AuthController.php, 
* Model User
* seed UserSeed, 
* Factory UserFactory
* Servece UserService,serServiceInterface
* Request LoginRequest,RegisterRequest</b>
<br>
- post-> login
-  https://domain.com/api/user/sign-in


* Controller PasswordController, 
* Model User,
* Service ResetPasswordInterface,ResetPasswordService
* Request EmailRequest,ResetPasswordRequest
- post-> Send new password in email
- https://domain.com/api/user/recover-password
- post-> Reset new password
- https://domain.com/api/user/reset

* Controller CompanyController.php, 
* Model Company
* seed CompanySeed, 
* Factory CompanyFactory,CompanyResource,
* Request CompanyRequest,
* Repositories CompanyRepositories.php,CompanyRepositoriesInterface.php,
* Services CompanyService.php,CompanyServiceInterface.php
- get->  company user
- https://domain.com/api/user/companies
- post-> creaty new company for user
- https://domain.com/api/user/companies



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
