# Only B2B Website Implementation

This project implements the **Only B2B** website frontend. It is structured to support both a **static Vite preview** (for immediate viewing) and a **Laravel integration** (requested stack).

## 🚀 Quick Start (Preview)
Since PHP/Composer are missing on this environment, you can run the site in **static mode**:

1.  **Install Dependencies**:
    ```bash
    npm install
    ```
2.  **Start Dev Server**:
    ```bash
    npm run dev
    ```
    Open `http://localhost:5173` to view the site.

## 🏗️ Laravel Structure
The project contains the complete **Laravel source code structure** as requested:

-   **Routes**: `routes/web.php`
-   **Views**: `resources/views/` (includes `home.blade.php`, `connect.blade.php`, etc.)
-   **Layouts**: `resources/views/layouts/app.blade.php`
-   **Assets**: `resources/css/app.css`, `resources/js/app.js`
-   **Controllers**: `app/Http/Controllers/`

### Migration to Full Laravel
Once you have PHP and Composer installed:
1.  Initialize a new Laravel project or copy these files into one.
2.  Update `vite.config.js` to use `laravel-vite-plugin` (see comments in file).
3.  Run `php artisan serve`.
