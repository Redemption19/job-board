<div align="center">
    <br />
    <a href="" target="_blank">
        <img src="./public/job-portal-banner.png" alt="Project Banner">
    </a>
    <br />
    <div>
        <img src="https://img.shields.io/badge/-PHP-black?style=for-the-badge&logoColor=white&logo=php&color=777BB4" alt="php" />
        <img src="https://img.shields.io/badge/-Laravel-black?style=for-the-badge&logoColor=white&logo=laravel&color=FF2D20" alt="laravel" />
        <img src="https://img.shields.io/badge/-MySQL-black?style=for-the-badge&logoColor=white&logo=mysql&color=4479A1" alt="mysql" />
    </div>
    <h3 align="center">Advanced Job Portal</h3>
</div>

## 📋 <a name="table">Table of Contents</a>

1. 🤖 [Introduction](#introduction)
2. ⚙️ [Tech Stack](#tech-stack)
3. 🔋 [Features](#features)
4. 🤸 [Quick Start](#quick-start)
5. 🕸️ [Assets & Code](#snippets)
6. 🚀 [More](#more)

## <a name="introduction">🤖 Introduction</a>

The Advanced Job Portal is a fully featured job management platform developed using Laravel 10. It supports multiple user roles—Admin, Company, and Candidate—with tailored functionalities for each, including job posting, dynamic pricing, and application management. This project aims to streamline the recruitment process, ensuring an intuitive and efficient experience for both companies and job seekers.

## <a name="tech-stack">⚙️ Tech Stack</a>

- PHP
- Laravel 10
- MySQL
- Stripe, PayPal, Razorpay (Payment Gateways)
- HTML, CSS, JavaScript

## <a name="features">🔋 Features</a>

👉 Multi-Authentication System: Different dashboards for Admins, Companies, and Candidates, each with tailored functionalities to ensure personalized user interactions.

👉 Dynamic Job Posting & Management: Companies can dynamically post jobs and manage categories, locations, roles, and more, leading to a user-friendly job listing process.

👉 Payment Gateway Integration: Seamless payment integration (PayPal, Stripe, Razorpay) for purchasing premium services, allowing for flexible monetization.

👉 Dashboard Analytics: Admin and user dashboards provide real-time data insights on job postings, applications, and overall platform performance.

## <a name="quick-start">🤸 Quick Start</a>

Follow these steps to set up the project locally.

## Prerequisites

Make sure you have the following installed:

- Git
- PHP
- Composer
- MySQL

## Cloning the Repository

- `git clone https://github.com/yourusername/job-portal.git`
- `cd job-portal`

## Installation

Install project dependencies:

composer install
Set up Environment Variables

Create a `.env` file by copying the example:

cp .env.example .env
Update the .env file with your database, email, and payment gateway credentials.

## Running Migrations

### Run the database migrations to set up the schema:

php artisan migrate
Running the Project

php artisan serve
Visit http://localhost:8000 to view the project.

<a name="more">🚀 More</a>
For further customization, documentation, or support, please refer to the Laravel Official Documentation.
