# Amaya Coffee - Ecommerce Website

This project is an ecommerce website built for Year 4 assignment. It allows users to browse and order coffee products from Amaya Coffee and provides an admin dashboard panel for managing users, orders and products's stocking.

## Features

- User-friendly interface for browsing and ordering coffee products.
- Admin dashboard panel for managing orders, products, and users.
- Authentication system with separate views for users and administrators.
- Built using HTML, CSS, Bootstrap, JavaScript, Laravel, and MySQL.

## Admin Dashboard Access

To access the admin dashboard, use the following credentials:

- Email: admin@amaya.com
- Password: @dmin123

## Installation

1. Clone the repository:
   \`\`\`
   git clone https://github.com/So-Nita/amaya-coffee.git
   \`\`\`
2. Navigate to the project directory:
   \`\`\`
   cd amaya-coffee
   \`\`\`
3. Install dependencies:
   \`\`\`
   composer install
   \`\`\`
4. Set up environment variables:
   - Copy the \`.env.example\` file and rename it to \`.env\`.
   - Update the database configuration in the \`.env\` file with your MySQL credentials.
5. Generate application key:
   \`\`\`
   php artisan key:generate
   \`\`\`
6. Run migrations and seeders:
   \`\`\`
   php artisan migrate --seed
   \`\`\`
7. Start the development server:
   \`\`\`
   php artisan serve
   \`\`\`
8. Access the website in your browser at \`http://localhost:8000\`.

## Contributors

- [So-Nita]([https://github.com/your-username](https://github.com/So-Nita))
