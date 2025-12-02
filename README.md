🎬 Movie Recommendation & Management System
A full-stack web application that provides personalized movie recommendations and comprehensive content management capabilities. Built as a capstone project demonstrating modern web development practices and user-centric design.
📋 Overview
This system delivers an intelligent movie browsing and rating experience for users while providing administrators with powerful content management and analytics tools. The platform uses collaborative filtering techniques to suggest movies based on user preferences and viewing history.
✨ Key Features
For Users

Browse & Discover: Explore movies through an intuitive card-based interface with dynamic carousel
Rate Movies: Interactive 5-star rating system with color-coded feedback (Excellent, Good, Fair, Poor, Very Poor)
Personalized Recommendations: Get movie suggestions based on aggregated user ratings and preferences
Responsive Design: Seamless experience across desktop, tablet, and mobile devices

For Administrators

Content Management: Full CRUD operations for movies (create, read, update, delete)
Analytics Dashboard: Real-time insights with interactive Chart.js visualizations

Movies added per year (Bar Chart)
Average ratings by year (Line Chart)
Rating distribution (Doughnut Chart)
Monthly user registrations (Bar Chart)


User Management: Monitor user activity and engagement
Secure Access: Role-based authentication with middleware protection

🛠️ Technology Stack

Backend: Laravel 10 (PHP) - MVC architecture
Frontend: Blade Templates, Bootstrap 5, Livewire
Database: MySQL with Eloquent ORM
Authentication: Laravel Jetstream + Sanctum
Data Visualization: Chart.js
Recommendation Engine: Python with scikit-surprise (Collaborative Filtering)
Additional: Flask for ML integration, Pandas for data processing

🏗️ Architecture

Design Pattern: Model-View-Controller (MVC)
Authentication: Role-based access control (Admin/User roles)
Database: Relational schema with Users, Movies, and Ratings tables
Security: Input validation, CSRF protection, secure file handling

🚀 Installation
bash# Clone the repository
git clone https://github.com/yourusername/movie-recommendation-system.git

# Navigate to project directory
cd movie-recommendation-system

# Install PHP dependencies
composer install

# Install Python dependencies
pip install -r requirements.txt

# Copy environment file
cp .env.example .env

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Create storage link
php artisan storage:link

# Start the development server
php artisan serve
```

## 📦 Requirements
```
PHP >= 8.1
MySQL >= 5.7
Composer
Python >= 3.8
Node.js & NPM (for asset compilation)
🔑 Features Implemented
✅ Secure user registration and authentication
✅ Role-based access control (Admin/User)
✅ Movie CRUD operations with image upload
✅ One rating per user per movie (with update capability)
✅ Real-time analytics dashboard
✅ Responsive UI with Livewire integration
✅ Collaborative filtering recommendations
✅ Data validation and security measures
📊 System Highlights

Security First: Laravel Sanctum authentication, middleware protection, input validation
Performance Optimized: Lazy loading, efficient ORM queries, asset bundling
User Experience: Real-time interactions without page reloads, intuitive interface
Scalable Architecture: Modular design ready for future enhancements

🔮 Future Enhancements

Advanced ML-based recommendation algorithms (hybrid models)
Genre-based filtering and advanced search
Real-time notifications via WebSockets
RESTful API for mobile app integration
Multi-language support
Enhanced accessibility features



