    RS Harapan Sehat - UI/UX Boost (automated)
    Summary of automated improvements:
    - Injected Bootstrap 5 (CDN) into HTML/PHP files (where a <head> tag was found).
    - Added a modern "light mode" CSS at /assets/css/custom-light.css.
    - Inserted a simple responsive navbar into the first detected index file.
    - Added Dockerfile + docker-compose.yml to serve the site as static files via nginx.
    - Files modified: 9 (sample listed below).

    Note & limitations:
    - This automated pass is conservative: it edits only .html/.htm/.php files to add CDN links and CSS.
    - If the project is a dynamic app (Node, Python, PHP with server logic), the provided Dockerfile is for static serving and **may not run dynamic backends**. If your project requires a runtime (e.g., PHP-FPM, Node), I can adapt Dockerfile/docker-compose to that stack—tell me which runtime.
    - I did NOT change any server-side logic or reveal file contents here.

    Sample modified files (up to 20):
    [
  "index.php",
  "login.php",
  "dashboard.php",
  "config/db.php",
  "patients/index.php",
  "patients/add.php",
  "patients/edit.php",
  "doctors/index.php",
  "doctors/add.php"
]

    To run locally:
      docker compose up --build
    Then open http://localhost:8080

