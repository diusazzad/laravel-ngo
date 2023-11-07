# NGO Management System

![GitHub stars](https://github.com/diusazzad?tab=stars)
![GitHub forks](https://github.com/diusazzad/laravel-ngo/fork)
![GitHub issues](https://github.com/diusazzad/laravel-ngo/pulls)

An open-source NGO (Non-Governmental Organization) Management System built with Laravel. This system allows NGOs to manage their operations, donors, beneficiaries, and projects efficiently.

![NGO Management System Screenshot](docs/screenshot/Screenshot%202023-11-07%20201451.jpg)

## Features

- **User Management**: Secure user registration and login.
- **Donor Management**: Manage donors, donations, and contribution history.
- **Beneficiary Management**: Track beneficiaries, their needs, and support provided.
- **Project Management**: Create and manage projects, allocate resources, and monitor progress.
- **Financial Management**: Record and manage finances, expenses, and generate reports.
- **Event Management**: Organize and track events, fundraisers, and activities.



## Usage

- Register as an admin or user.
- Use the admin account to manage the NGO's operations and data.
- Add donors, beneficiaries, projects, and track financial activities.
- Monitor project progress, view reports, and organize events.

## Contributing

Contributions are welcome! Please follow our [contribution guidelines](CONTRIBUTING.md).

## License

This project is open-source and available under the [MIT License](LICENSE).



## Contact

For inquiries and support, please contact [sazzad35-283@diu.edu.bd].


## Installation

```bash
# 1. Clone this repository
git clone https://github.com/diusazzad/laravel-ngo
# 2. Navigate to the project directory
cd your-repo

# 3. Install dependencies
composer install

# 4. Create a .env file by copying .env.example and configuring your database connection
cp .env.example .env
php artisan key:generate

# 5. Run database migrations and seed the database
php artisan migrate --seed

# 6. Start the development server
php artisan serve


